  @php
  $currentpath='/'.request()->path();
    $user=[
      'title'=>'User',
      'url'=>'#',
      'icon'=>'fas fa-user',
      'childrens'=>[
        [
          'title'=>'Daftar User',
          'url'=>'#',
        ],
        [
          'title'=>'Tambah User',
          'url'=>'#',
        ],
      ],
    ];

    $categories=[
      'title'=>'Category',
      'url'=>'#',
      'icon'=>'fas fa-tag',
      'childrens'=>[
        [
          'title'=>'Daftar Category',
          'url'=>'#',
        ],
        [
          'title'=>'Tambah Category',
          'url'=>'#',
        ],
      ],
    ];

    $article=[
      'title'=>'Article',
      'url'=>'#',
      'icon'=>'fas fa-book',
      'childrens'=>[
        [
          'title'=>'Daftar article',
          'url'=>'#',
        ],
        [
          'title'=>'Tambah Article',
          'url'=>'#',
        ],
      ],
    ];

    $menus=[$user,$categories,$article];
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
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      @foreach ($menus as $index => $menu)
        @if (isset($menu['childrens']))
        
        @php
          $isActive=false;
          foreach ($menu['childrens'] as $child) {
            if ($child['url'] == $currentpath) {
              $isActive = true;
            }
          }
        @endphp
          <li class="nav-item {{ $isActive ? 'active' :'null' }}">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#menu{{ $index}}" >
              <i class="{{ $menu['icon'] }}"></i>
              <span>{{ $menu['title'] }}</span>
            </a>
            <div id="menu{{ $index }}" class="collapse {{ $isActive ? 'show' : 'null' }}" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">

                @foreach ($menu['childrens'] as $child)
                  <a class="collapse-item {{ $isActive ? 'active' :'null' }}" href="{{ $child['url'] }}">{{ $child['title'] }}</a>
                @endforeach

              </div>
            </div>
          </li> 

          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ $menu['url'] }}">
              <i class="{{ $menu['icon'] }}"></i>
              <span>{{ $menu['title'] }}</span></a>
          </li>

        @endif
      @endforeach

      <!-- Nav Item - Dashboard -->
      

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->