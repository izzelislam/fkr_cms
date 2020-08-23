<div class="mt-5 py-5" style="background-color:black;">
	<div class="container my-5">
		<div class="row ">
			<div class="col-md-3">
				<h1 class="font-weight-bold text-light">NEW<span class="text-danger">S.ui</span></h1>
				<span class="text-light font-weight-bold" style="letter-spacing: 2.5px;">www.newsui.com</span>
			</div>
			<div class="col-md-3 mt-2">
				<h5 class="font-weight-bold text-light mb-4">Categories</h5>
					@foreach ($categories as $category)
						<h6 class="d-block my-2 text-light font-weight-bold">{{ $category->name }}</h6>
					@endforeach
			</div>
			<div class="col-md-3 mt-2">
				<h5 class="font-weight-bold text-light mb-2">Popular News</h5>
				@foreach ($popular as $pop)
					<a href="/readmore/{{ $pop->id }}/{{ $pop->slug }}" class="d-block my-2 text-decoration-underline-light"><small class="text-light">{{ \Illuminate\Support\Str::limit($pop->title,50,$end='.') }}</small></a>
				@endforeach
			</div>
			<div class="col-md-3 mt-2">
				<h5 class="font-weight-bold text-light">Subscribe</h5>
				<form class="d-inline">
				      <label for="inputEmail4" class="text-light">Email</label><br>
				      <input type="email" name=""> 
				  	  <button type="submit" class="btn btn-sm my-3 btn-light">submit</button>
				</form>
			</div>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-12 text-center">
			<small class="text-light ">Copyright&copyNews.Ui</small>
		</div>
	</div>
</div>