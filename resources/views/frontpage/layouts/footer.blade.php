<div class="mt-5 py-5" style="background-color:black;">
	<div class="container my-5">
		<div class="row ">
			<div class="col-md-3">
				<h1 class="font-weight-bold text-light">NEW<span class="text-danger">S.ui</span></h1>
				<span class="text-light font-weight-bold" style="letter-spacing: 2.5px;">www.newsui.com</span>
			</div>
			<div class="col-md-3 pl-5 mt-2">
				<h5 class="font-weight-bold text-light">Categories</h5>
				<a href="" class="text-decoration-none text-light">
					@foreach ($latest as $late)
						<div><small>{{ $late->Category->name }}</small></div>
					@endforeach
				</a>
			</div>
			<div class="col-md-3 pl-5 mt-2">
				<h5 class="font-weight-bold text-light">Lates News</h5>
				@foreach ($hits as $hit)
					<a href="{{ route('readmore',$hit->id) }}" class="text-decoration-none text-light">
						<div><small>{{ $hit->title }}</small></div>
					</a>
				@endforeach
			</div>
			<div class="col-md-3 pl-5 mt-2">
				<h5 class="font-weight-bold text-light">Subscribe</h5>
				<a href="" class="text-decoration-none text-light"><small>Sport</small></a>
			</div>
		</div>
	</div>
	<div class="row ">
		<div class="col-md-12 text-center">
			<small class="text-light ">Copyright&copyNews.Ui</small>
		</div>
	</div>
</div>