<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Portfolio;

class PortfolioController extends Controller
{
     public function index()
    {
        if (view()->exists('admin.portfolio')) {
            $portfolios = Portfolio::all();
            $data = [
                'title' => 'Портфолио',
                'portfolios' => $portfolios
            ];
            return view('admin.portfolio', $data);
        }
        abort(404);
    }
    public function edit(Portfolio $portfolio, $id)
    {
        $old = $portfolio->find($id)->toArray();
        if (view()->exists('admin.portfolio_edit')) {
            $data = [
                'title' => 'Редактирование страницы - ' . $old['name'],
                'data' => $old
            ];
            return view('admin.portfolio_edit', $data);
        }
    }
    public function update(Portfolio $portfolio, Request $request, $id)
    {
        $input = $request->except('_token');
        // dd($old);
        $validator = Validator::make($input, [
            'name' => 'required|max:255',
            'sort' => 'required|max:255'
        ]);
        if ($validator->fails()) {
            return redirect()->route('portfoliosUpdate', ['page' => $input['id']])->withErrors($validator);
        }
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $file->move(public_path() . '/assets/img', $file->getClientOriginalName());
            $input['images'] = $file->getClientOriginalName();
        } else {
            $input['images'] = $input['old_images'];
        }
        unset($input['old_images']);
        $portfolioNew = $portfolio->find($id)->fill($input);
        if ($portfolioNew->update()) {
            return redirect('admin')->with('status', 'Страница обновлена');
        }
    }
    public function destroy(Portfolio $portfolio, $id)
    {
        $portfolio->find($id)->delete();
        return redirect('admin')->with('status', 'Страница уделана');
    }
    public function create()
    {
        if (view()->exists('admin.portfolio_add')) {
            $data = [
                'title' => 'Новая работа в портфолио'
            ];
            return view('admin.portfolio_add', $data);
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
            return redirect()->route('portfoliosAdd')->withErrors($validator)->withInput();
        }
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $input['images'] = $file->getClientOriginalName();
            $file->move(public_path() . '/assets/img', $input['images']);
        }
        $portfolio = new Portfolio();
        $portfolio->fill($input);
        if ($portfolio->save()) {
            return redirect('admin')->with('status', 'Портфолио добавлено');
        }
    }

}
