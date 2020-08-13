<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Category;

class CategoryController extends Controller
{
    public function __construct(){
        $this->model=new Category;
    }

    public function index()
    {
        $categories=$this->model->all();
        return view('admin.category.index',compact('categories'));
    }

   
    public function create()
    {
        return view('admin.category.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
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
        $request->validate([
            'name'=>'required',
        ]);
        $this->model->find($id)->update($request->all());
        return redirect('/admin/category');
    }

   
    public function destroy($id)
    {
        $this->model->find($id)->delete();
        return redirect('/admin/category');
    }
}
