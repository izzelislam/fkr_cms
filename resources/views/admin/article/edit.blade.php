@extends('admin.layouts.app')

@section('title','Edit Article')

@section('head-script')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
@endsection

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
              
              @error ('image_file')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
              @enderror

          </div>          

          <div class="form-group"><label for="name_category">Tag</label>
            <div class="form-group">
              <select name="tag[]" multiple="multiple" class="form-control select-tag @error('tag') is-invalid @enderror" id="exampleFormControlSelect1">
                @foreach ($tags as $index=>$tag)
                 <option {{ $article->Tag()->pluck('tag_id')->contains($tag->id) ? 'selected': '' }} >{{ $tag['name']}}</option>
                @endforeach
              </select>
            </div>
            @error ('tag')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror
          </div>

          <input type="submit" name="Submit" value="Submit" class="btn btn-primary mt-5">
      </form>

    </div>
  </div>

@endsection

@section('end-script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>

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

  <script type="text/javascript">
      $(document).ready(function () {
          $(".select-tag").select2({
            tags: true
          });
      });
  </script>
@endsection