<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Article;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function __construct(){
        $this->model=new Category;
        $this->imgPath=public_path('img');
    }

    public function index()
    {
        $this->authorize('viewAny',$this->model);
        $categories=$this->model->all();
        return view('admin.category.index',compact('categories'));
    }

   
    public function create()
    {
        return view('admin.category.create');
    }

   
    public function store(Request $request)
    {
        // if($request->photo_file){
        //     $request=$this->uploadImage($request);
        // }
        $request->validate([
            'name'=>'required',
        ]);

        
        $this->model->create($request->all());
        return redirect('/admin/category');
    }

    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        $category=$this->model->find($id);
        return view('admin.category.edit',compact('category'));
    }

    
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'name'=>'required',
        // ]);


        $model=$this->model->find($id);

        if($request->photo_file){
            $request=$this->uploadImage($request);
            $this->removeIage($model->photo);
        }

        $model->update($request->all());
        return redirect('/admin/category');
    }

   
    public function destroy($id)
    {
        // $this->model->find($id)->delete();

        $model=$this->model->find($id);
        // $this->removeIage($model->photo);
        if (isset($model)) {
            $articles=Article::where('category_id',$id)->get();
            $defaultCategory=$this->model->where('name','Uncategorized')->pluck('id');
            $dc=$defaultCategory->first();
  
            foreach ($articles as $article) {
                $article->user_id=$article->user_id;
                $article->category_id=$dc;
                $article->title=$article->title;
                $article->content=$article->content;
                $article->image_file=$article->image_file;
                $article->slug=Str::slug($article->title);

                $article->save();
            }
        }

        $model->delete();
        return redirect('/admin/category');
    }

    public function uploadImage($request)
    {
        $img=$request->file('photo_file');
        $newName=time() .'.'.$img->getClientOriginalExtension();

        $img->move($this->imgPath,$newName);

        $request->merge([
            'photo'=>$newName,
        ]);

        return $request;
    }

    public function removeIage($img)
    {
        $fullpath=$this->imgPath.'/'.$img;

        if ($img && file_exists($fullpath)) {
            unlink($fullpath);
        }
    }

    // public function defaultCategory($id)
    // {
    //     $ck=Article::where('category_id',$id)-pluck('category_id')->get();
        
    //     if (isset($cek)) {
    //         foreach ($ck as $cek) {
    //             $cek['category_id']=6;
    //         $cek->update();
                
    //         }

    //     }
    // }
}
