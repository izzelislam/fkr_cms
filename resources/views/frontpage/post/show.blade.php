@extends('frontpage.layouts.app')
@section('title','front')
@section('content')
    @include('frontpage.layouts.navbar')
    <div class="container">
        <div class="row my-5">
            <div class="col-md-8">
                <div>
                    <h1 class="font-weight-bold my-2">{{ $post->title }}</h1>
                    <div class="mb-4">category : <span class="badge badge-danger p-2">{{ $post->Category->name }}</span></div>
                    <img src="/img/{{ $post->image_file }}" style="width: 99.5%;">
                    <div class="my-3 " style="line-height:  1.8; text-align: justify;">
                        {!! $post->content !!}
                    </div>
                    <div>
                        penulis : {{ $post->User->name }}<br>
                        puplised : {{ $post->created_at->format('d-M-Y') }}
                    </div>
                </div>
                <hr class="mt-5">
               <h4 class="font-weight-bold"> komentar</h4>
                <hr>
                <div class="row">
                    <div class="col-md-12 card-header p-3">
                        <form method="POS" action="{{ route('comment.store',$post->id) }}">
                            @csrf
                              <div class="form-group">
                                <label for="inputAddress">Name</label>
                                <input type="text" name="name" class="form-control" id="inputAddress" placeholder="Main St">
                              </div>
                              <div class="form-group">
                                  <label for="exampleFormControlTextarea1">Komentar</label>
                                  <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <button type="submit" class="btn btn-dark">Kirim</button>
                        </form>
                        <hr class="my-5">
                        <div>
                            @foreach ($comments as $comment)
                                <div class="p-2">
                                    <span class="font-weight-bold mr-2">{{ $comment->name }}</span>
                                    <small>{{ $comment->created_at->format('d-M-Y') }}</small>
                                </div>
                                <div class="card p-2">{{ $comment->body }}</div> 
                                <a href=""><small class="p-2">hapus komentar</small><i class="fas fa-trash"></i></a>
                                <hr>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3 class="text-center font-weight-bold">Latest<span class="text-danger">Post</span></h3>
                <hr>
                @foreach ($latest as $late)
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <img src="/img/{{ $late->image_file }}" class="w-100">
                        </div>
                        <div class="col-md-7">
                            <a href="{{ route('readmore',$late->id) }}" class="text-decoration-none"><span class="font-weight-bold"><small>{{ $late->title }}</small></span></a>
                            <small class="d-block mb-2">{{ $late->created_at->format('d-M-Y') }}</small>
                            <span class=" badge badge-danger p-1">{{ $late->Category->name }}</span>
                        </div>
                    </div>
                @endforeach
                <div class="my-5">
                    <img src="https://www.bagas31.info/wp-content/uploads/2020/06/netfree-gratis-min-1.png">
                </div>
            </div>
        </div>
        <h4>Related Post</h4>
        <div class="row">
            <div class="col-md-4">
                
            </div>
        </div>
    </div>
    @include('frontpage.layouts.footer')
@endsection