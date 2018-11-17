<?php

namespace App\Http\Controllers\admin;
use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class BlogController extends Controller
{
      public function index()
    {
        if (view()->exists('admin.blogs')) {
            $blogs = Blog::all();
            $data = [
                'title' => 'Новости',
                'blogs' => $blogs
            ];
            return view('admin.blogs', $data);
        }
        abort(404);
    }
    public function edit(Blog $blogs, $id)
    {
        $old = $blogs->find($id)->toArray();
        if (view()->exists('admin.blogs_edit')) {
            $data = [
                'title' => 'Редактирование страницы - ' . $old['name'],
                'data' => $old
            ];
            return view('admin.blogs_edit', $data);
        }
    }
    public function update(Blog $blogs, Request $request, $id)
    {
        $input = $request->except('_token');
        // dd($old);
        $validator = Validator::make($input, [
            'name' => 'required|max:255',
            'pos' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->route('blogsUpdate', ['page' => $input['id']])->withErrors($validator);
        }
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $file->move(public_path() . '/assets/img', $file->getClientOriginalName());
            $input['images'] = $file->getClientOriginalName();
        } else {
            $input['images'] = $input['old_images'];
        }
         unset($input['old_images']);
         if ($request->hasFile('images2')) {
            $file = $request->file('images2');
            $file->move(public_path() . '/assets/img', $file->getClientOriginalName());
            $input['images2'] = $file->getClientOriginalName();
        } else {
            $input['images2'] = $input['old_images2'];
        }
 		unset($input['old_images2']);
        $blogsNew = $blogs->find($id)->fill($input);
        if ($blogsNew->update()) {
            return redirect('admin')->with('status', 'Страница обновлена');
        }
    }
    public function destroy(Blog $blogs, $id)
    {
        $blogs->find($id)->delete();
        return redirect('admin')->with('status', 'Страница уделана');
    }
    public function create()
    {
        if (view()->exists('admin.blogs_add')) {
            $data = [
                'title' => 'Новая новость'
            ];
            return view('admin.blogs_add', $data);
        }
        abort(404);
    }
    public function store(Request $request)
    {
        $input = $request->except('_token');
        $messages = [
            'required' => 'Поле :attribute обязатеьно к заполнению',
            'unique' => 'Поле :attribute должно быть уникальным'
        ];
        $validator = Validator::make($input, [
            'name' => 'required|max:255',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->route('blogsAdd')->withErrors($validator)->withInput();
        }
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $input['images'] = $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img', $input['images']);
        }
        $date=Carbon::now();
        $blogs = new Blog();
        $blogs->fill($input,$date);
        if ($blogs->save()) {
            return redirect('admin')->with('status', 'Новость добавлена');
        }
    }
}
