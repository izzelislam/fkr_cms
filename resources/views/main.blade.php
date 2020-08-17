@extends('frontpage.layouts.app')
@section('title','front')
@section('content')
    <nav class="navbar navbar-expand-lg " style="background-color:black;">
     <div class="container">
     	<a class="navbar-brand " href="#"><h3 class="font-weight-bold text-light">NEW<span class="text-danger">S.ui</span></h3></a>
     	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     	  <span class="navbar-toggler-icon"></span>
     	</button>
     	<div class="collapse navbar-collapse font-weight-bold" id="navbarNavAltMarkup">
     	  <div class="navbar-nav ml-auto ">
     	    <a class="nav-item nav-link active text-light" href="#">Home <span class="sr-only">(current)</span></a>
     	    <a class="nav-item nav-link ml-5 text-light" href="#">News</a>
     	    <a class="nav-item nav-link ml-5 text-light" href="#">Blog</a>
     	    <a class="nav-item nav-link ml-5 text-light" href="#">Update</a>
     	  </div>
     	</div>
     </div>
    </nav>
    <div class="container mt-5">
    	<div class="row">
    		<div class="col-md-8">
    			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    			  <div class="carousel-inner">
    			    <div class="carousel-item active">
    			      <img src="{{ asset('/img/1597568746.jpg') }}" class="d-block w-100" alt="...">
    			    </div>
    			    <div class="carousel-item">
    			      <img src="{{ asset('/img/1597568746.jpg') }}" class="d-block w-100" alt="...">
    			    </div>
    			    <div class="carousel-item">
    			      <img src="{{ asset('/img/1597568746.jpg') }}" class="d-block w-100" alt="...">
    			    </div>
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
    		<div class="col-md-4 bg-dark">
    		</div>
    	</div>
    </div>
    <div class="container my-5">
    	<div class="text-center"><h3><span class="font-weight-bold">POLITIC</span><span class="font-weight-bold text-danger">NEWS</span></h3></div>
    	<hr>
    	<div class="row">
    		<div class="col-md-12 d-flex justify-content-between">
    			<div class="card" style="width: 100%; margin:10px; ">
    			  <img class="card-img-top" src="/img/1597634267.png" alt="Card image cap">
    			</div>
    			<div class="card" style="width: 100%; margin:10px; ">
    			  <img class="card-img-top" src="/img/1597634267.png" alt="Card image cap">
    			</div>
    			<div class="card" style="width: 100%; margin:10px; ">
    			  <img class="card-img-top" src="/img/1597634267.png" alt="Card image cap">
    			</div>
    		</div>
    		<div class="col-md-12 d-flex justify-content-between">
    			<div class="card" style="width: 100%; margin:10px; ">
    			  <img class="card-img-top" src="/img/1597634267.png" alt="Card image cap">
    			</div>
    			<div class="card" style="width: 100%; margin:10px; ">
    			  <img class="card-img-top" src="/img/1597634267.png" alt="Card image cap">
    			</div>
    			<div class="card" style="width: 100%; margin:10px; ">
    			  <img class="card-img-top" src="/img/1597634267.png" alt="Card image cap">
    			</div>
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
    							<h5 class="font-weight-bold"><a href="" class="text-decoration-none">{{ $post->title }}</a></h5>
    							<span>penulis : {{ $post->User->name }}</span>
    							<h5>{{ $post->created_at->format('Y-m-d') }}</h5>
    							<span class="badge badge-sm badge-danger">{{ $post->Category->name }}</span>
    						</div>
    					</div>
    				</div>
    			@endforeach
    		</div>
    		<div class="col-md-4 bg-dark"></div>
    	</div>
    </div>
    <div class="bg-dark mt-5">
    	<div class="container">
    		<h1>footer</h1>
    	</div>
    </div>
@endsection