<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0" href="{{ route('home') }}">
            Tiada Kost
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        <i class="ni ni-tv-2 text-primary"></i> {{ __('Dashboard') }}
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/kamar-backend">
                        <i class="ni ni-building"></i> {{ __('Kamar') }}
                    </a>
                </li>

                @if(auth()->user()->penghuni_id==1)
                <li class="nav-item ">
                    <a class="nav-link" href="/tipekamar-backend">
                        <i class="ni ni-ruler-pencil"></i> {{ __('Tipe Kamar') }}
                    </a>
                </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="/penghuni-backend">
                      <i class="ni ni-single-02 text-default"></i> {{ __('Penghuni') }}
                    </a>
                </li>

                @if(auth()->user()->penghuni_id==1)
                <li class="nav-item">
                    <a class="nav-link" href="/uangbulanan-backend">
                      <i class="ni ni-cart text-default"></i> {{ __('Transaksi') }}
                    </a>
                </li>
                @endif

                @if(auth()->user()->penghuni_id==1)
                <li class="nav-item">
                    <a class="nav-link" href="/tipepembayaran-backend">
                      <i class="ni ni-chart-bar-32 text-default"></i> {{ __('Tipe Pembayaran') }}
                    </a>
                </li>
                @endif

                <li class="nav-item">
                    <a class="nav-link" href="/laporan-backend">
                      <i class="ni ni-single-copy-04 text-default"></i> {{ __('Laporan') }}
                    </a>
                </li>
                <li class="nav-item">
                    @if(auth()->user()->penghuni_id==1)
                    <a class="nav-link" href="/user-backend">
                      <i class="ni ni-circle-08 text-default"></i> {{ __('User') }}
                    </a>
                    @endif
                </li>
                
            </ul>
        </div>
    </div>
</nav>
