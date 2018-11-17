<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class AboutsController extends Controller
{
    public function execute()
     {
        	$pages=Page::all();
	    	$pa=$pages->keyBy('id');
            $data = [
                'title' => $pa[2]->name,
            		];
            return view('site1.about',array(
            								'data'=>$data,
            								'pa'=>$pa,
           								 	));
        }    
} 

