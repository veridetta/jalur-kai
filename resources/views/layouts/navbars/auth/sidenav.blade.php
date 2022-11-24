<aside class="sidenav bg-primary navbar navbar-vertical navbar-expand-xs border-0 fixed-start"
    id="sidenav-main">
    <div class="sidenav-header text-center">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('home') }}"
            target="_blank">
            <img src="{{url('img/kai/kaiLogo.png')}}" class="text-center navbar-brand-img h-100" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class=" w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <?php $role=auth()->user()->role;?>
            @if ($role=="super")
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'admin' ? 'active' : '' }}" href="{{ route('admin') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-users text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-white">Kelola Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'image' ? 'active' : '' }}" href="{{ route('image') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa fa-upload text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-white">Diagram Kepengurusan</span>
                </a>
            </li>
            @endif
            @if ($role=="admin")
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2  text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-white">Home</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6  text-white">Data</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'resort/*' ? 'active' : '' }}" href="{{ route('resort') }}" >
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67  text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-white">Petak Jalan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() == 'aset/*' ? 'active' : '' }}" href="{{ route('aset') }}" >
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67  text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-white">Data Aset</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('sign-in-static') }}">
                    <div
                        class="icon icon-shape icon-sm text-white border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-copy-04 text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 text-white">About</span>
                </a>
            </li>
            @endif
        </ul>
        <form action="/logout" class="text-center mt-3" method="POST">
            @csrf
            <button class="btn btn-light bg-white text-center"><i class="fa fa-sign-out"></i> Logout</button>
        </form>
    </div>
</aside>
