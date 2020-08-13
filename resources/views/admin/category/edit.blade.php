@extends('admin.layouts.app')

@section('title','Edit Category')

@section('content')
 @section('title','Edit Category')

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary text-primary">Edit Category</h6>
    </div>
    <div class="card-body">    
      <form method="POST" action="{{ route('category.update',$category['id']) }}">
        @csrf
        @method('PUT')
          <div class="form-group"><label for="name_category">Nama Category</label>
          <input class="form-control" id="name_category" name="name" value="{{old('name', $category['name']) }}" type="text" placeholder="politic"></div>
          <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
      </form>
    </div>
  </div>

@endsection
