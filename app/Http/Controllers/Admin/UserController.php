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
        $this->authorize('viewAny',$this->model);
        $users=$this->model->all();
        return view('admin.User.index',compact('users'));
    }

    public function create()
    {
        return view('admin.auth.register');
    }

  
    public function show($id)
    {
        $user=$this->model->find($id);
        return view('admin.User.profile',compact('user'));

    }

    public function edit($id)
    {
        $user=$this->model->find($id);
        return view('admin.User.edit',compact('user'));
    }

 
    public function update(Request $request,$id)
    {
       $user=$this->model->find($id);
       $request->merge(['password'=>$user->password]);
       $user->update($request->all());
       return redirect()->route('user.index');
    }

   
    public function destroy($id)
    {
        $this->model->find($id)->delete();
        return redirect()->route('user.index');
    }
}
