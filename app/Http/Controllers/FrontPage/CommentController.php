<?php

namespace App\Http\Controllers\FrontPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Comment;

class CommentController extends Controller
{
    public function __construct()
    {
    	$this->model=new Comment;
    }


    public function store(Request $request, $id)
    {
    	$article_id=$id;
    	$request->validate([
    		'name'=>'required',
    		'body'=>'required',
    	]);
    	$request->merge(['article_id'=>$article_id]);
    	$this->model->create($request->all());
    	return redirect()->back();
    }


}
