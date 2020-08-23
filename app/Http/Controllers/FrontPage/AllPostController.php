<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Comment;
use App\Model\Tag;
use App\Model\Category;

class AllPostController extends Controller
{
    public function __construct()
    {
    	$this->model=new Article;
    }

    public function post()
    {
        $hits=$this->model->orderBy('id','desc')->take(4)->get();
        $latest=$this->model->orderBy('id','desc')->take(5)->get();
    	$posts=$this->model->orderBy('created_at','desc')->paginate(10);
        $popular=$this->model->orderBy('views','desc')->take(5)->get();
        $politic=$this->model->take(6)->get();
        $categories=Category::all();
    	return view('main',compact(['posts','hits','latest','popular','politic','categories']));
    }

    public function readmore($id,$slug)
    {

        $latest=$this->model->orderBy('id','desc')->get();
        $comments=Comment::orderBy('created_at','desc')->where('article_id',$id)->get();
    	$post=$this->model->find($id);
        $categories=Category::all();
        $popular=$this->model->orderBy('views','desc')->take(5)->get();

        if ($post) {
            $post->increment('views');
        }

    	return view('frontpage.post.show',compact(['post','comments','latest','categories','popular']));
    }

    public function news()
    {
        $latest=$this->model->orderBy('id','desc')->get();
        $categories=Category::all();
        $popular=$this->model->orderBy('views','desc')->take(5)->get();

        return view('frontpage.post.news',compact(['latest','categories','popular']));
    }

    public function politic()
    {
        $latest=$this->model->orderBy('id','desc')->get();
        $categories=Category::all();
        $popular=$this->model->orderBy('views','desc')->take(5)->get();

        return view('frontpage.post.politic',compact(['latest','categories','popular']));
    }

    public function sport()
    {
        $latest=$this->model->orderBy('id','desc')->get();
        $categories=Category::all();
        $popular=$this->model->orderBy('views','desc')->take(5)->get();

        return view('frontpage.post.sport',compact(['latest','categories','popular']));
    }

    public function healty()
    {
        $latest=$this->model->orderBy('id','desc')->get();
        $categories=Category::all();
        $popular=$this->model->orderBy('views','desc')->take(5)->get();

        return view('frontpage.post.healty',compact(['latest','categories','popular']));
    }
}
