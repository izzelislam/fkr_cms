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
        $this->imgPath=public_path('img');
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

        $user_id=auth()->user()->id;
        
        $request->validate([
            'category_id'=>'required',
            'title'=>'required',
            'content'=>'required',
            'image_file'=>'required',
            'slug'=>'required'
        ]);
        $this->model->create([
            'user_id'=>$user_id,
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'content'=>$request->content,
            'image_file'=>$this->uploadImage($request),
            'slug'=>$request->slug,
        ])->save();    
        // $this->model->create($request->all());
        return redirect()->route('article.index');
    }

   
    public function show($id)
    {
        $article=$this->model->find($id);
        return view('admin.article.show',compact('article'));
    }

    
    public function edit($id)
    {
        $article=$this->model->find($id);
        $categories=Category::all();
        return view('admin.article.edit',compact('article','categories'));
    }

   
    public function update(Request $request, $id)
    {
        $article=$this->model->find($id);
        if ($request->image_file) {
            $this->removeImage($article->image_file);
        }

        
            $article->user_id=auth()->user()->id;
            $article->category_id=$request->category_id;
            $article->title=$request->title;
            $article->content=$request->content;
            $article->image_file=$this->uploadImage($request);
            $article->slug=$request->slug;

            $article->save();
            

        return redirect()->route('article.index');
    }

  
    public function destroy($id)
    {
        // $this->model->find($id)->delete();
        $article=$this->model->find($id);
        $this->removeImage($article->image_file);
        $article->delete();
        return redirect()->route('article.index');
    }

    public function uploadImage($request)
    {

        $img=$request->file('image_file');
        $newName=time() .'.'.$img->getClientOriginalExtension();

        $img->move($this->imgPath,$newName);
        return $newName;
    }

    public function removeImage($img)
    {
        $fullPath=$this->imgPath.'/'.$img;
        if ($img && file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
}