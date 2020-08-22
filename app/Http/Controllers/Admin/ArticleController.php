<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Category;
use App\Model\Tag;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->model=new Article;
        $this->imgPath=public_path('img');
    }
    public function index()
    {
        $this->authorize('viewAny',$this->model);

        if ( auth()->user()->role == 'author') {
            $articles=$this->model->where('user_id',auth()->user()->id)->orderBy('created_at','desc')->paginate(10);
        }else{
            $articles=$this->model->orderBy('created_at','desc')->paginate(10);
        }

        return view('admin.article.index',compact('articles'));
    }


    public function create()
    {
        $categories=Category::all();
        $tags=Tag::all();
        return view('admin.article.create',compact('categories','tags'));
    }

   
    public function store(Request $request)
    {
        // dd( $request->tag);

        $user_id=auth()->user()->id;
        
        $request->validate([
            'category_id'=>'required',
            'title'=>'required',
            'content'=>'required',
            'image_file'=>'required',
            'slug'=>'required',
            'tag'=>'required'
        ]);
        $article=$this->model->create([
            'user_id'=>$user_id,
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'content'=>$request->content,
            'image_file'=>$this->uploadImage($request),
            'slug'=>Str::slug($request->slug,'-'),
        ]);
        $article->save();

        if ($article) {
            $tagnames=$request->tag;
            foreach ($tagnames as $tagname) {
                $tag=Tag::firstOrCreate(['name' => $tagname]);
            }
            $nano = Tag::whereIn('name',$tagnames)->get()->pluck('id');
            $article->Tag()->sync($nano);    
        }

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
        $tags=Tag::all();
        return view('admin.article.edit',compact('article','categories','tags'));
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_id'=>'required',
            'title'=>'required',
            'content'=>'required',
            'image_file'=>'required',
            'slug'=>'required',
            'tag'=>'required'
        ]);
        
        $article=$this->model->find($id);
        if ($request->image_file) {
            $this->removeImage($article->image_file);
        }

        
            $article->user_id=auth()->user()->id;
            $article->category_id=$request->category_id;
            $article->title=$request->title;
            $article->content=$request->content;
            $article->image_file=$this->uploadImage($request);
            $article->slug=Str::slug($request->slug);

            $this->handleTag($request,$article);
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

    public function handleTag(Request $request, Article $article)
    {
        $tagnames=$request->tag;
        foreach ($tagnames as $tagname) {
            Tag::firstOrCreate(['name'=>$tagname])->save();
        }
        $tags = Tag::whereIn('name', $tagnames)->get()->pluck('id');
        $article->Tag()->sync($tags);
    }
}