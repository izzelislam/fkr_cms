<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Model\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->model=new User;
    }
   
    public function index()
    {
        $users=$this->model->all();
        return view('admin.User.index',compact('users'));
    }

    public function create()
    {
        return view('admin.auth.register');
    }

   
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        $user=$this->model->find($id);
        return view('admin.User.profile',compact('user'));

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
        //
    }
}
