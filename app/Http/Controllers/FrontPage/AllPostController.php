<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Comment;

class AllPostController extends Controller
{
    public function __construct()
    {
    	$this->model=new Article;
    }

    public function post()
    {
        $hits=$this->model->orderBy('id','desc')->take(4)->get();
    	$posts=$this->model->all();
    	return view('main',compact(['posts','hits']));
    }

    public function readmore($id)
    {
        $comments=Comment::all()->where('article_id',$id);
    	$post=$this->model->find($id);
    	return view('frontpage.post.show',compact(['post','comments']));
    }
}
