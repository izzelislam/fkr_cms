@extends('admin.layouts.app')

@section('title','Tambah Category')

@section('content')
 @section('title','Tambah Category')

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary text-primary">Tambah Category</h6>
    </div>
    <div class="card-body">

      <form method="POST" action="{{ route('category.store') }}">
        @csrf
        
          <div class="form-group"><label for="name_category">Nama Category</label>
            <input class="form-control @error('name') is-invalid @enderror" id="name_category" name="name" type="text" placeholder="politic">
            @error ('name')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>

          <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
      </form>

    </div>
  </div>

@endsection
