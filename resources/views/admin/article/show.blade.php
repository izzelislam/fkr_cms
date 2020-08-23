@extends('admin.layouts.app')
@section('title','article')
@section('content')
	@section('title','article')
		<div>
			<div class="card-header py-3 card shadowmb-4 ">
			  <h6 class="m-0 font-weight-bold text-primary">Data Article</h6>
			</div>
		    <div class="card shadow  container">    
		      <div class="card-body">
		      	<div>
		      		<h2>{{ $article->title }}</h2>
		      	</div>
		      	<div>
		      		<small class="badge badge-danger p-2 my-2">{{ $article->Category->name }}</small>
		      	</div>
		      	<div>
		      		<img src="/img/{{ $article->image_file }}" class="w-50 ">
		      	</div>
		      	<div>
		      		<p>
		      			{!! $article->content !!}
		      		</p>
		      	</div>
		      	<div>
		      		<span class="mr-3"><i class="fas fa-user-alt mr-2" ></i> {{ $article->User->name }}</span>
		      	</div>
		      	<div>
		      		<span><i class="fas fa-calendar mr-2"></i>{{ $article->created_at->format('d-M-Y') }}</span>
		      	</div>
				
				<div class="my-5">
					<a href="{{ route('article.index') }} " class="btn btn-sm btn-primary">Kembali</a>
				</div>
		      
		      </div>
		    </div>
		</div>
@endsection

