@extends('frontpage.layouts.app')
@section('title','front')

@section('head-script')
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection

@section('content')
    @include('frontpage.layouts.navbar')
    <div class="container mt-5">
    	<div class="row">
    		<div class="col-md-8">
    			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    			  <div class="carousel-inner">
    			    @foreach ($popular as $index=>$post)
    			    	<div class="carousel-item {{ $index == $post->index ? 'active' : '' }}" style="position: relative;">
    			    	  <img src="/img/{{ $post->image_file }}" class="d-block w-100" alt="...">
    			    	  <div style="position: absolute;top:0;bottom:0;left:0;right:0;background-color:black;opacity:0.6;"></div>
    			    	  <div style="position: absolute;top:60%;bottom:50%;right:10%;left:10%;">
    			    	  	<span class="badge badge-lg badge-danger p-2 mr-2">{{ $post->Category->name }}</span>
                            <span class="badge badge-lg badge-danger p-2">Poppular News</span>
    			    	  	<div class="text-light my-3">
                                <span class="mr-3"><i class="fas fa-user-alt mr-2" ></i><small>{{ $post->User->name }}</small></span>
                                <span class="mr-3"><i class="fas fa-calendar mr-2"></i><small>{{ $post->created_at->format('d-M-Y') }}</small></span>
                                <span class="mr-3"><i class="fas fa-eye mr-2" ></i><small>{{ $post->views }}</small></span>

                            </div>
    			    	  	<a class="text-decoration-none" href="/readmore/{{ $post->id }}/{{ $post->slug }}">
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
                            <a href="/readmore/{{ $hit->id }}/{{ $hit->slug }}" class="text-decoration-none"><span class="font-weight-bold"><small>{{ $hit->title }}</small></span></a>
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
    			
                @foreach ($politic as $post)
                    <div class="card" style="width: 100%; margin:10px; ">
                      <img class="card-img-top" src="/img/{{ $post->image_file }}" alt="Card image cap">
                    </div>
                @endforeach

    		</div>
    	</div>
    </div>
    <div class="container my-5">
    	
    	<div class="row">
    		<div class="col-md-8">
                <div class="text-center"><h3><span class="font-weight-bold">ALL</span><span class="font-weight-bold text-danger">POST</span></h3></div>
                <hr>
    			@foreach ($posts as $post)
    				<div class="row mb-5">
    					<div class="col-md-5">
    						<img src="/img/{{ $post->image_file }}" style="width:100%;height:180px;">
    					</div>
    					<div class="col-md-6">
    						<div>
    							<h5 class="font-weight-bold"><a href="/readmore/{{ $post->id }}/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
    							<span class="mr-3"><i class="fas fa-user-alt mr-2" ></i> {{ $post->User->name }}</span>
    							<span><i class="fas fa-calendar mr-2"></i>{{ $post->created_at->format('d-M-Y') }}</span>
                                <br>
    							<div class="badge badge-sm badge-danger">{{ $post->Category->name }}</div>
                                <div>
                                    <h6 class="my-2" style="font-size:11pt;">{!! \Illuminate\Support\Str::limit($post->content,100, $end='.' )!!}<a href="/readmore/{{ $post->id }}/{{ $post->slug }}">readmore</a></h6>
                                </div>
    						</div>
    					</div>
    				</div>
    			@endforeach
            <div class="float-right">{{ $posts->links() }}</div>
    		</div>
    		<div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center font-weight-bold">Latest<span class="text-danger">Post</span></h3>
                        <hr>
                        @foreach ($latest as $late)
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <img src="/img/{{ $late->image_file }}" class="w-100">
                                </div>
                                <div class="col-md-7">
                                    <a href="/readmore/{{ $late->id }}/{{ $late->slug }}" class="text-decoration-none"><span class="font-weight-bold"><small>{{ $late->title }}</small></span></a>
                                    <small class="d-block mb-2">{{ $late->created_at->format('d-M-Y') }}</small>
                                    <span class=" badge badge-danger p-1">{{ $late->Category->name }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="row my-5">
                    <div class="col-md-12">
                        <h3 class="text-center font-weight-bold">Popular<span class="text-danger">Post</span></h3>
                        <hr>
                        @foreach ($popular as $late)
                            <div class="row mb-3">
                                <div class="col-md-5">
                                    <img src="/img/{{ $late->image_file }}" class="w-100">
                                </div>
                                <div class="col-md-7">
                                    <a href="/readmore/{{ $late->id }}/{{ $late->slug }}" class="text-decoration-none"><span class="font-weight-bold"><small>{{ $late->title }}</small></span></a>
                                    <small class="d-block mb-2">{{ $late->created_at->format('d-M-Y') }}</small>
                                    <span class=" badge badge-danger p-1">{{ $late->Category->name }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <h3 class="text-center font-weight-bold">Cate<span class="text-danger">gories</span></h3>
                        <hr>
                        @foreach ($latest as $index=>$late)
                            <a href="" class="text-decoration-none"><div class="my-1 card-header"><span class="px-2">{{ $index }}</span><span class="font-weight-bold">{{ $late->Category->name }}</span></div></a>
                        @endforeach
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <h3 class="text-center font-weight-bold">Ta<span class="text-danger">gs</span></h3>
                        <hr>

                    </div>
                </div>       
            </div>
    	</div>
    </div>

    @include('frontpage.layouts.footer')
@endsection