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
		      		<img src="/img/{{ $article->image_file }}" class="w-50 ">
		      	</div>
		      	<div>
		      		<p>
		      			{!! $article->content !!}
		      		</p>
		      	</div>
		      	<div>
		      		Penulis : {{ $article->User->name }}
		      	</div>
		      	<div>
		      		Tanggal : {{ $article->created_at }}
		      	</div>
				
				<div class="my-5">
					<a href="{{ route('article.index') }} " class="btn btn-sm btn-primary">Kembali</a>
				</div>
		      
		      </div>
		    </div>
		</div>
@endsection