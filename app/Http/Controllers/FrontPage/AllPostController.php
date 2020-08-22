<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Comment;
use APp\Model\Tag;

class AllPostController extends Controller
{
    public function __construct()
    {
    	$this->model=new Article;
    }

    public function post()
    {
        $hits=$this->model->orderBy('id','desc')->take(4)->get();
        $latest=$this->model->orderBy('id','desc')->get();
    	$posts=$this->model->orderBy('created_at','desc')->paginate(10);
    	return view('main',compact(['posts','hits','latest']));
    }

    public function readmore($id,$slug)
    {

        $latest=$this->model->orderBy('id','desc')->get();
        $comments=Comment::orderBy('created_at','desc')->where('article_id',$id)->get();
    	$post=$this->model->find($id);
    	return view('frontpage.post.show',compact(['post','comments','latest']));
    }
}
