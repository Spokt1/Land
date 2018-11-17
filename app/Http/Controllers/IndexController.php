<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Service;
use App\Portfolio;
use App\People;
use App\Blog;
use DB;
use Mail;

class IndexController extends Controller
{
    public function execute (Request $request)
    {	
    
    	if($request->isMethod('post')){

    	$data=$request->all();
		$result=Mail::send('email',['data'=>$data],function($message)use($data)
		{
			$mail_username=env('MAIL_USERNAME');
			$message->from($data['email'],$data['name']);
			$message->to($mail_username)->subject($data['subject']);
		});
		if($result)
			{
			return redirect()->route('home')->with('status','Письмо отправлено');
			}
		}
    	
    	$pages=Page::all();
    	$portfolios=Portfolio::all();
    	$services=Service::all();
    	$peoples=People::all();
    	$blogs=Blog::all();
    	$filt=DB::table('portfolios')->distinct()->pluck('sort');
		$hil=DB::table('peoples')->where('id','>',4)->get();
		$let=DB::table('peoples')->where('id','<=',4)->get();
		$al=$services->keyBy('id');
		$pa=$pages->keyBy('id');
		$menu= array();
		foreach($pages as $page)
		{
			$item=array('title'=>$page->name,'alias'=>$page->alias);
			array_push($menu,$item);
		}
		
		$item=array('title'=>'Сервис','alias'=>'services');
		array_push($menu,$item);
		$item=array('title'=>'Портфолио','alias'=>'portfolio');
		array_push($menu,$item);
		$item=array('title'=>'Команда','alias'=>'team');
		array_push($menu,$item);
		$item=array('title'=>'Блог','alias'=>'blog');
		array_push($menu,$item);
		$item=array('title'=>'Контакты','alias'=>'contacts');
		array_push($menu,$item);
		return view ('site1.index',array(
										
										'menu'=>$menu,
										'pages'=>$pages,
										'services'=>$services,
										'portfolios'=>$portfolios,
										'peoples'=>$peoples,
										'blogs'=>$blogs,
										'pa'=>$pa,
										'filt'=>$filt,
										'hil'=>$hil,
										'let'=>$let,
										'al'=>$al,
										));
	}
}
