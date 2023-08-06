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
                    </ul>
      {{-- @include ('layouts.content') --}}
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Edit Katalog Kostum</h3>
                  </div>
                  <x-adminlte-alerts />
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Data Katalog Kostum</h4>
                        <form action="{{ route('data.katalog.update', $katalog->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          <p class="card-description">
                            -------
                          </p>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Foto Kostum</label>
                                      <input type="file" name="img[]" class="file-upload-default">
                                      <div class="col-sm-9">
                                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail">

                                <!-- error message untuk title -->
                                @error('thumbnail')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                      </div>
                                    </div>
                              </div>

                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Model</label>
                                <div class="col-sm-9">
                                  <select name="model" id="model" class="form-control select2" >
                                    <option value="Classic" {{ old('model', $katalog->model) == "Classic" ? "selected" : "" }}>Classic</option>
                                    <option value="Kimono" {{ old('model', $katalog->model) == "Kimono" ? "selected" : "" }}>Kimono</option>
                                    <option value="Seifuku" {{ old('model', $katalog->model) == "Seifuku" ? "selected" : "" }}>Seifuku</option>
                                    <option value="Gaun" {{ old('model', $katalog->model) == "Gaun" ? "selected" : "" }}>Gaun</option>
                                    <option value="Maid" {{ old('model', $katalog->model) == "Maid" ? "selected" : "" }}>Maid</option>
                                    <option value="Lolita" {{ old('model', $katalog->model) == "Lolita" ? "selected" : "" }}>Lolita</option>
                                    <option value="Idol" {{ old('model', $katalog->model) == "Idol" ? "selected" : "" }}>Idol</option>
                                </select>
                                @error('model')
                                    <p class="text-danger">
                                        <small>{{ $message }}</small>
                                    </p>
                                @enderror
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kode Kostum</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode', $katalog->kode) }}" placeholder="Masukkan Kode Kostum">

                                    <!-- error message untuk kode -->
                                    @error('kode')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Ukuran</label>
                                  <div class="col-sm-9">
                                    <select name="ukuran" id="ukuran" class="form-control select2">
                                        <option value="S" {{ old('ukuran', $katalog->ukuran) == "S" ? "selected" : "" }}>S</option>
                                        <option value="S-M" {{ old('ukuran', $katalog->ukuran) == "S-M" ? "selected" : "" }}>S - M</option>
                                        <option value="M" {{ old('ukuran', $katalog->ukuran) == "M" ? "selected" : "" }}>M</option>
                                        <option value="M-L" {{ old('ukuran', $katalog->ukuran) == "M-L" ? "selected" : "" }}>M - L</option>
                                        <option value="L" {{ old('ukuran', $katalog->ukuran) == "L" ? "selected" : "" }}>L</option>
                                        <option value="L-XL" {{ old('ukuran', $katalog->ukuran) == "L-XL" ? "selected" : "" }}>L - XL</option>
                                        <option value="XL" {{ old('ukuran', $katalog->ukuran) == "XL" ? "selected" : "" }}>XL</option>
                                        <option value="All Size" {{ old('ukuran', $katalog->ukuran) == "All Size" ? "selected" : "" }}>All Size</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Kostum</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $katalog->nama) }}" placeholder="Masukkan Nama Kostum">

                                    <!-- error message untuk nama -->
                                    @error('nama')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $katalog->harga) }}" placeholder="Masukkan Harga/hari">

                                    <!-- error message untuk harga -->
                                    @error('harga')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan', $katalog->keterangan) }}" placeholder="Masukkan Keterangan">

                                    <!-- error message untuk keterangan -->
                                    @error('keterangan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                              </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Stok Kostum</label>
                                  <div class="col-sm-9">
                                    <select name="stok" id="stok" class="form-control select2">
                                        <option value="Tersedia" {{ old('stok') == "Tersedia" ? "selected" : "" }}>Tersedia</option>
                                        <option value="Dipesan" {{ old('stok') == "Dipesan" ? "selected" : "" }}>Dipesan</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{ route('data.katalog.index') }}" class="btn btn-danger mr-2">
                                <i class="fas fa-arrow-left"></i>
                                Kembali
                            </a>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                          </div>
                        </div>
                      </div>
                  </div>
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

 @include ('layouts.footer')

