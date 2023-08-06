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
                    <h3 class="font-weight-bold">Edit Katalog Aksesoris</h3>
                  </div>
                  <x-adminlte-alerts />
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Edit Data Aksesoris</h4>
                        <form action="{{ route('data.acc.update', $acc->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                          <p class="card-description">
                            -------
                          </p>
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group row">
                                      <label class="col-sm-3 col-form-label">Foto Aksesoris</label>
                                      <input type="file" name="img[]" class="file-upload-default">
                                      <div class="col-sm-9">
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">

                                <!-- error message untuk title -->
                                @error('gambar')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                      </div>
                                    </div>
                              </div>

                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kategori</label>
                                <div class="col-sm-9">
                                  <select name="model" id="model" class="form-control select2">
                                    <option value="Weapon" {{ old('model') == "Weapon" ? "selected" : "" }}>Weapon</option>
                                    <option value="Head" {{ old('model') == "Head" ? "selected" : "" }}>Head</option>
                                    <option value="Bottom" {{ old('model') == "Bottom" ? "selected" : "" }}>Bottom</option>
                                    <option value="Jewelry" {{ old('model') == "Jewelry" ? "selected" : "" }}>Jewelry</option>
                                    <option value="Handcraft" {{ old('model') == "Handcraft" ? "selected" : "" }}>Handcraft</option>
                                    <option value="Additional" {{ old('model') == "Additional" ? "selected" : "" }}>Additional</option>
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
                                <label class="col-sm-3 col-form-label">Kode Aksesoris</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('kode') is-invalid @enderror" name="kode" value="{{ old('kode', $acc->kode) }}" placeholder="Masukkan Kode Kostum">

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
                                <label class="col-sm-3 col-form-label">Harga</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga', $acc->harga) }}" placeholder="Masukkan harga Kostum">

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
                                <label class="col-sm-3 col-form-label">Nama Aksesoris</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $acc->nama) }}" placeholder="Masukkan nama Kostum">

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
                                  <label class="col-sm-3 col-form-label">Stok Aksesoris</label>
                                  <div class="col-sm-9">
                                    <select name="stok" id="stok" class="form-control select2">
                                        <option value="Tersedia" {{ old('stok') == "Tersedia" ? "selected" : "" }}>Tersedia</option>
                                        <option value="Dipesan" {{ old('stok') == "Dipesan" ? "selected" : "" }}>Dipesan</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Bahan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan', $acc->keterangan) }}" placeholder="Masukkan keterangan Kostum">

                                    <!-- error message untuk keterangan -->
                                    @error('keterangan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                              </div>
                            </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{ route('data.acc.index') }}" class="btn btn-danger mr-2">
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

