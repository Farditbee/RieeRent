@include('layouts.header')
    <!-- partial:partials/_navbar.html -->
    @include('layouts.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      @include ('layouts.rightbar')
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      @include ('layouts.sidebar')
      <!-- partial -->
      <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        {{-- @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        @endguest --}}
                    </ul>
      {{-- @include ('layouts.content') --}}
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Daftar Katalog Kostum</h3>
                  </div>
                  <x-adminlte-alerts />
            <div class="row">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <span>Katalog Kostum</span>

                    {{-- <a href="{{ route('data.katalog.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus"></i>
                        + Tambah Katalog Baru
                    </a> --}}

            </div>
        </div>
        <div class="container mt-5" style="overflow-x: auto;">
            <div class="row">
            @foreach($accs as $s)
            <div class="col-4">
            <br>
            <div class="card-deck">
                <div class="card">
                  <img class="card-img-top" src="{{ url('storage/aksesoris'). '/'.$s->gambar }}" alt="Card image cap">
                  <div class="card-body">
                    <h3 class="card-title">{{$s->nama}} <sup class="text-danger">{{$s->kode}}</sup></h3>
                    <h5 class="mb-1">Rp. <?php echo number_format($s->harga,0,',','.'); ?>,- <sup class="text-primary">/hari</sup></h5>
                    <p class="card-text" style="">Kategori : {{$s->model}}</p>
                    <p class="card-text" style="">Bahan &nbsp;&nbsp;&nbsp; : {{$s->keterangan}}</p>
                    @if ($s->stok == 'Tersedia')
                    <p class="card-text badge badge-sm badge-warning" >{{$s->stok}}</p>
                    @else
                    <p class="card-text badge badge-sm badge-danger" >{{$s->stok}}</p>
                    @endif
                  </div>
                  <div class="card-footer">
                    @if ($s->stok == 'Tersedia')
                    <a href="#" class="btn btn-sm btn-success">Rental Sekarang</a>
                    @else
                    <a class="btn btn-sm btn-secondary disabled" role="button" aria-disabled="true">Rental Sekarang</a>
                    @endif
                  </div>
                </div>
              </div>
            </div>
              @endforeach
            </div>
            </div>
    </div>
            </div>
             </div>
            </div>
        </div>
        </div>

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script> --}}

 @include ('layouts.footer')

