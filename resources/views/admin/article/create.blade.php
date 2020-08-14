@extends('admin.layouts.app')

@section('title','Tambah Article')

@section('content')
 @section('title','Tambah Article')

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary text-primary">Tambah Article</h6>
    </div>
    <div class="card-body">

      <form method="POST" action="{{ route('article.store') }}">
        @csrf
        
          <div class="form-group"><label for="name_category">Category</label>
            <div class="form-group">
              <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlSelect1">
                @foreach ($categories as $category)
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>
            @error ('category_id')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>

          <div class="form-group"><label for="name_category">Title</label>
            <input class="form-control @error('title') is-invalid @enderror" id="name_category" name="title" type="text" placeholder="politic">
            @error ('title')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="name_category">Content</label>
            <textarea id="editor" name="content" class="@error('content') is-invalid @enderror"> 
            </textarea>
            @error ('content')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>

          <div class="form-group"><label for="name_category">Image</label>
            <input class="form-control @error('image') is-invalid @enderror" id="name_category" name="image" type="text" placeholder="politic">
            @error ('image')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>

          <div class="form-group"><label for="name_category">Slug</label>
            <input class="form-control @error('slug') is-invalid @enderror" id="name_category" name="slug" type="text" placeholder="politic">
            @error ('slug')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>


          <input type="submit" name="Submit" value="Submit" class="btn btn-primary mt-5">
      </form>

    </div>
  </div>

  <script>
    ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .then( editor => {
        console.log( editor );
       } )
    
     .catch( error => {
        console.error( error );
     } );
  </script>
@endsection
