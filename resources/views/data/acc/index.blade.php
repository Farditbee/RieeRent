@include('layouts.header')
@include('layouts.acchead')
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
                        @guest
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
                        @endguest
                    </ul>
      {{-- @include ('layouts.content') --}}
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Daftar Katalog Aksesoris</h3>
                  </div>
                  <x-adminlte-alerts />
            <div class="row">
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <span>Daftar Master Katalog Aksesoris</span>

                    <a href="{{ route('data.acc.create') }}" class="btn btn-primary btn-sm">
                        <i class="ti-plus menu-icon"> Tambah Aksesoris</i>
                    </a>

            </div>
        </div>
        <div class="container mt-5" style="overflow-x: auto;">
            <table class="table table-striped">
                <tr>
                  <th>#ID</th>
                  <th>Gambar</th>
                  <th>Kode</th>
                  <th>Nama Aksesoris</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Bahan</th>
                  <th>Stok</th>
                  <th>Action</th>
                </tr>
                @foreach($accs as $s)
                <tr>
                  <td>{{$s->id}}</td>
                  {{-- {{ asset('image/'.$data->gambar)  }} --}}
                  <td><img src="{{ url('storage/aksesoris'). '/'.$s->gambar }}" alt="" style="width: 115%; height: 70px"></td>
                  <td>{{$s->kode}}</td>
                  <td>{{$s->nama}}</td>
                  <td>{{$s->model}}</td>
                  <td>Rp. <?php echo number_format($s->harga,0,',','.'); ?>,-</td>
                  <td>{{$s->keterangan}}</td>
                  <td>{{$s->stok}}</td>
                  <td class="text-center">
                    <form onsubmit="return confirm('Ingin menghapus Aksesoris ini ?');" action="{{ route('data.acc.destroy', $s->id) }}" method="POST">
                        <a href="{{ route('data.acc.edit', $s->id) }}" class="btn btn-sm btn-warning"><i class="ti-pencil menu-icon"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"><i class="ti-trash menu-icon"></i></button>
                    </form>
                </td>
                </tr>
                @endforeach
              </table>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {

    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('data.acc.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'gambar', name: 'gambar'},
            {data: 'kode', name: 'kode'},
            {data: 'nama', name: 'nama'},
            {data: 'model', name: 'model'},
            {data: 'harga', name: 'harga'},
            {data: 'stok', name: 'stok'},
            {data: 'keterangan', name: 'keterangan'},
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
    });

  });
</script>
    </div>
            </div>
             </div>
            </div>
        </div>
        </div>

        {{-- <x-slot name="scripts">
          {{ $dataTable->scripts() }}
      </x-slot> --}}
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
{{-- @include('layouts.accfoot') --}}
 @include ('layouts.footer')

