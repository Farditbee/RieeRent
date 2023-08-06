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
                <span>Daftar Master Katalog Kostum</span>

                    <a href="{{ route('data.katalog.create') }}" class="btn btn-primary btn-sm">
                        <i class="ti-plus menu-icon"> Tambah Kostum</i>
                    </a>

            </div>
        </div>
        <div class="container mt-5" style="overflow-x: auto;">
            <table class="table table-striped">
                <tr>
                  <th>#</th>
                  <th>Foto Kostum</th>
                  <th>Kode</th>
                  <th>Nama Kostum</th>
                  <th>Model</th>
                  <th>Ukuran</th>
                  <th>Harga <sup class="text-danger">/hari</sup></th>
                  <th>Stok</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
                @forelse($katalogs as $k)
                <tr>
                  <td>{{$k->id}}</td>
                  {{-- {{ asset('image/'.$data->gambar)  }} --}}
                  <td class="text-center">
                    <img src="{{ url('storage/katalogs'). '/'.$k->thumbnail }}" alt="" style="width: 90%; height: 80px">
                </td>
                  <td class="text-danger">{{$k->kode}}</td>
                  <td>{{$k->nama}}</td>
                  <td>{{$k->model}}</td>
                  <td>{{$k->ukuran}}</td>
                  <td>Rp. <?php echo number_format($k->harga,0,',','.'); ?>,-</td>
                  <td>{{$k->stok}}</td>
                  <td>{{$k->keterangan}}</td>
                  <td class="text-center">
                    <form onsubmit="return confirm('Ingin menghapus Kostum ini ? ?');" action="{{ route('data.katalog.destroy', $k->id) }}" method="POST">
                        <a href="{{ route('data.katalog.edit', $k->id) }}" class="btn btn-sm btn-warning"><i class="ti-pencil menu-icon"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="ti-trash menu-icon"></i></button>
                    </form>
                </td>
                </tr>
                @empty
                                  <div class="alert alert-danger">
                                      Data Katalog belum Tersedia.
                                  </div>
                @endforelse
              </table>
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

