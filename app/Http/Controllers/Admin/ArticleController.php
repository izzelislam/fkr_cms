<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Category;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->model=new Article;
    }
    public function index()
    {
        $articles=$this->model->all();
        return view('admin.article.index',compact('articles'));
    }


    public function create()
    {
        $categories=Category::all();
        return view('admin.article.create',compact('categories'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'user_id'=>'required',
            'category_id'=>'required',
            'title'=>'required',
            'content'=>'required',
            'image'=>'required',
            'slug'=>'required'
        ]);
        $user_id=auth()->user()->id;
        $request->merge(['user_id'=>$user_id]);

        $this->model->create($request->all());
        return redirect()->route('article.index');
    }

   
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        $this->model->find($id)->delete();
        return redirect()->route('article.index');
    }
}
