  @php
  $currentpath='/'.request()->path();
    $user=[
      'title'=>'User',
      'url'=>'/admin/user',
      'model'=>App\Model\User::class,
      'icon'=>'fas fa-user',
    ];

    $categories=[
      'title'=>'Category',
      'url'=>'#',
      'icon'=>'fas fa-tag',
      'model'=>App\Model\Category::class,
      'childrens'=>[
        [
          'title'=>'Daftar Category',
          'url'=>'/admin/category',
        ],
        [
          'title'=>'Tambah Category',
          'url'=>'/admin/category/create',
        ],
      ],
    ];

    $article=[
      'title'=>'Article',
      'url'=>'#',
      'icon'=>'fas fa-book',
      'model'=>App\Model\Article::class,
      'childrens'=>[
        [
          'title'=>'Daftar article',
          'url'=>'/admin/article',
        ],
        [
          'title'=>'Tambah Article',
          'url'=>'/admin/article/create',
        ],
      ],
    ];

    $dashboard=[
      'title'=>'Dashboard',
      'url'=>'/admin',
      'icon'=>'fas fa-fw fa-tachometer-alt',
      'model'=>'Dashboard',
    ];

    $menus=[$dashboard,$categories,$article,$user];
  @endphp


    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">CMS <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      @foreach ($menus as $index => $menu)
        @can('viewAny', $menu['model'])
          @if (isset($menu['childrens']))
          
          @php
            $isActive =false;

            foreach ($menu['childrens'] as $child) {
              if ($child['url'] == $currentpath) {
                $isActive = true;
              }
            }

          @endphp
            <li class="nav-item {{ $isActive  ? 'active' :'null' }}">
              <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu{{ $index}}" >
                <i class="{{ $menu['icon'] }}"></i>
                <span>{{ $menu['title'] }}</span>
              </a>
              <div id="menu{{ $index }}" class="collapse {{ $isActive  ? 'show' : 'null' }}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                  @foreach ($menu['childrens'] as $child)
                    <a class="collapse-item {{ $child['url'] == $currentpath ? 'active' :'null' }}" href="{{ $child['url'] }}">{{ $child['title'] }}</a>
                  @endforeach

                </div>
              </div>
            </li> 

            @else
            <li class="nav-item {{ $menu['url'] == $currentpath ? 'active' : 'null' }}">
              <a class="nav-link" href="{{ $menu['url'] }}">
                <i class="{{ $menu['icon'] }}"></i>
                <span>{{ $menu['title'] }}</span></a>
            </li>

          @endif
        @endcan
      @endforeach

      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
