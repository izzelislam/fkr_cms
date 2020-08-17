@extends('admin.layouts.app')

@section('title','Edit Article')

@section('content')
 @section('title','Edit Article')

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary text-primary">Edit Article</h6>
    </div>
    <div class="card-body">

      <form method="POST" action="{{ route('article.update',$article->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
          <div class="form-group"><label for="name_category">Category</label>
            <div class="form-group">
              <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="exampleFormControlSelect1">
                @foreach ($categories as $category)
                 <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
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
            <input class="form-control @error('title') is-invalid @enderror" id="name_category" name="title" type="text" placeholder="politic" value="{{ $article->title }}">
            @error ('title')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>

          <div class="form-group">
            <label for="name_category">Content</label>
            <textarea id="editor" name="content" class="@error('content') is-invalid @enderror"> 
              {!! $article->content !!}
            </textarea>
            @error ('content')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>

          <div class="form-group">
              <label for="exampleFormControlFile1">Image</label>
              <input type="file" class="form-control-file" name="image_file" id="exampleFormControlFile1" accept="image/*" value="{{ $article->image_file }}">
              
              @error ('image')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror

          </div>          

          <div class="form-group"><label for="name_category">Slug</label>
            <input class="form-control @error('slug') is-invalid @enderror" id="name_category" name="slug" type="text" placeholder="politic" value="{{ $article->slug }}">
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