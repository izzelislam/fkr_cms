<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Article;
use App\Model\Category;
use App\Model\User;
use App\Model\Comment;

class DashboardController extends Controller
{
   
    public function index()
    {
        $article=Article::all();
        $category=Category::all();
        $user=User::all();
        $comment=Comment::all();
        return view('.admin.index',compact('article','category','user','comment'));
    }

}
