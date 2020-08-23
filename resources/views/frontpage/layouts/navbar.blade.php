@php
    $home=[
        'title'=>'Home',
        'url'=> route('index'),
    ];

    $news=[
        'title'=>'News',
        'url'=>route('news') ,
    ];

    $politic=[
        'title'=>'Politik',
        'url'=>route('politic') ,
    ];

    $sport=[
        'title'=>'Sport',
        'url'=>route('sport'),
    ];

    $healty=[
        'title'=>'Healty',
        'url'=>route('healty'),
    ];

    $menus=[$home,$news,$politic,$sport,$healty];
@endphp

<nav class="navbar navbar-expand-lg sticky-top" style="background-color:black;">
     <div class="container">
     	<a class="navbar-brand " href="{{ route('index') }}"><h3 class="font-weight-bold text-light">NEW<span class="text-danger">S.ui</span><span class="text-light font-weight-bold" style="letter-spacing: 0.5px; font-size: 10pt;display: block;">www.newsui.com</span></h3>

     	</a>
     	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     	  <span class="navbar-toggler-icon"></span>
     	</button>
     	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     	  <div class="navbar-nav ml-auto ">
     	    @foreach ($menus as $menu)
     	      <a class="nav-item nav-link ml-3 text-light" href="{{ $menu['url'] }}">{{ $menu['title'] }}</a>
            @endforeach
     	  </div>
     	</div>
     </div>
    </nav>