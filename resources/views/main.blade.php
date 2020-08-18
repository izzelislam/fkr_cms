@extends('frontpage.layouts.app')
@section('title','front')
@section('content')
    @include('frontpage.layouts.navbar')
    <div class="container mt-5">
    	<div class="row">
    		<div class="col-md-8">
    			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    			  <div class="carousel-inner">
    			    @foreach ($posts as $index=>$post)
    			    	<div class="carousel-item {{ $index == $post->index ? 'active' : '' }}" style="position: relative;">
    			    	  <img src="/img/{{ $post->image_file }}" class="d-block w-100" alt="...">
    			    	  <div style="position: absolute;top:0;bottom:0;left:0;right:0;background-color:black;opacity:0.6;"></div>
    			    	  <div style="position: absolute;top:60%;bottom:50%;right:10%;left:10%;">
    			    	  	<div class="badge badge-lg badge-danger p-2">{{ $post->Category->name }}</div>
    			    	  	<div class="text-light my-3">{{ $post->created_at->format('Y-m-d') }}<span class="mx-2">|</span>{{ $post->User->name }}</div>
    			    	  	<a class="text-decoration-none" href="{{ route('readmore',$post->id) }}">
                                <h4 class="font-weight-bold text-light">
                                    {{ $post->title }}
                                </h4>             
                            </a>
    			    	  </div>
    			    	</div>
    			    @endforeach
    			  </div>
    			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			    <span class="sr-only">Previous</span>
    			  </a>
    			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    			    <span class="sr-only">Next</span>
    			  </a>
    			</div>
    		</div>
    		<div class="col-md-4 pt-1">
                @foreach ($hits as $hit)
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <img src="/img/{{ $hit->image_file }}" class="w-100">
                        </div>
                        <div class="col-md-7">
                            <a href="{{ route('readmore',$hit->id) }}" class="text-decoration-none"><span class="font-weight-bold"><small>{{ $hit->title }}</small></span></a>
                            <small class="d-block mb-2">{{ $hit->created_at->format('d-M-Y') }}</small>
                            <span class=" badge badge-danger p-1">{{ $hit->Category->name }}</span>
                        </div>
                    </div>
                @endforeach
    		</div>
    	</div>
    </div>
    <div class="container my-5">
    	<div class="text-center"><h3><span class="font-weight-bold">POLITIC</span><span class="font-weight-bold text-danger">NEWS</span></h3></div>
    	<hr>
    	<div class="row">
    		<div class="col-md-12 d-flex justify-content-between">
    			
                @foreach ($posts as $post)
                    <div class="card" style="width: 100%; margin:10px; ">
                      <img class="card-img-top" src="/img/{{ $post->image_file }}" alt="Card image cap">
                    </div>
                @endforeach

    		</div>
    	</div>
    </div>
    <div class="container my-5">
    	<div class="text-center"><h3><span class="font-weight-bold">ALL</span><span class="font-weight-bold text-danger">POST</span></h3></div>
    	<hr>
    	<div class="row">
    		<div class="col-md-8">
    			@foreach ($posts as $post)
    				<div class="row mb-3">
    					<div class="col-md-5">
    						<img src="/img/{{ $post->image_file }}" style="width:100%;height:180px;">
    					</div>
    					<div class="col-md-6">
    						<div>
    							<h5 class="font-weight-bold"><a href="{{ route('readmore',$post->id) }}" class="text-decoration-none">{{ $post->title }}</a></h5>
    							<span>penulis : {{ $post->User->name }}</span>
    							<h5>{{ $post->created_at->format('Y-m-d') }}</h5>
    							<span class="badge badge-sm badge-danger">{{ $post->Category->name }}</span>
    						</div>
    						<hr>
    					</div>
    				</div>
    			@endforeach
    		</div>
    		<div class="col-md-4 bg-dark"></div>
    	</div>
    </div>
    <div class="container my-5">
        <div class="text-center"><h3><span class="font-weight-bold">CATE</span><span class="font-weight-bold text-danger">GORIES</span></h3></div>
        <hr>
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between">
                
                @foreach ($posts as $post)
                    <div class="card" style="width: 100%; margin:10px; ">
                      <img class="card-img-top" src="/img/{{ $post->image_file }}" alt="Card image cap">
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    @include('frontpage.layouts.footer')
@endsection