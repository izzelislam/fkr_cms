@extends('admin.layouts.app')

@section('title','Edit Category')

@section('content')
 @section('title','Edit Category')

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary text-primary">Edit Category</h6>
    </div>
    <div class="card-body">    
      <form method="POST" action="{{ route('user.update',$user->id) }}">
        @csrf
        @method('PUT')
          <div class="form-group"><label for="name_category">Nama</label>
            <input class="form-control" id="name_category" name="name" value="{{old('name', $user['name']) }}" type="text">
          </div>
          <div class="form-group"><label for="name_category">Email</label>
            <input class="form-control" id="name_category" name="email" value="{{old('email', $user['email']) }}" type="text">
          </div>
          <div class="form-group">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="role" id="inlineRadio1" value="admin" {{ $user->role == 'admin' ? ' checked ': '' }} >
              <label class="form-check-label" for="inlineRadio1">Admin</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="role" id="inlineRadio2" value="editor" {{ $user->role == 'editor' ? ' checked ': '' }}>
              <label class="form-check-label" for="inlineRadio2">Editor</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="role" id="inlineRadio3" value="author" {{ $user->role == 'author' ? ' checked ': '' }}>
              <label class="form-check-label" for="inlineRadio3">Author</label>
            </div>
          </div>
          <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
      </form>
    </div>
  </div>

@endsection
