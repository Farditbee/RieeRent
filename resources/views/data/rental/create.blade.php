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
                    <h3 class="font-weight-bold">Form Perentalan Kostum</h3>
                  </div>
                  <x-adminlte-alerts />
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-description text-danger">
                            Diharapkan Menginputkan Data yang Sesuai !</h4>
                            <br>
                        <form action="{{ route('data.katalog.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                          <p class="card-description text-danger">
                          </p>
                          <div class="row">
                              <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Kode Kostum</label>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="col-sm-9">
                                      <select name="id" id="id" class="form-control select2" disabled>
                                          @foreach ($katalogs as $id => $kode)
                                              <option value="{{ old('kode', $id) }}" {{ old('id') == $id ? "selected" : "" }}>{{ $kode }}</option>
                                          @endforeach
                                      </select>
                                      @error('id')
                                          <p class="text-danger">
                                              <small>{{ $message }}</small>
                                          </p>
                                      @enderror

                                    </div>
                                  </div>
                              </div>

                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Model</label>
                                <div class="col-sm-9">
                                  <select name="model" id="model" class="form-control select2" disabled>
                                    <option value="Classic" {{ old('model') == "Classic" ? "selected" : "" }}>Classic</option>
                                    <option value="Kimono" {{ old('model') == "Kimono" ? "selected" : "" }}>Kimono</option>
                                    <option value="Seifuku" {{ old('model') == "Seifuku" ? "selected" : "" }}>Seifuku</option>
                                    <option value="Gaun" {{ old('model') == "Gaun" ? "selected" : "" }}>Gaun</option>
                                    <option value="Maid" {{ old('model') == "Maid" ? "selected" : "" }}>Maid</option>
                                    <option value="Lolita" {{ old('model') == "Lolita" ? "selected" : "" }}>Lolita</option>
                                    <option value="Idol" {{ old('model') == "Idol" ? "selected" : "" }}>Idol</option>
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
                                    <label class="col-sm-3 col-form-label">Nama Kostum</label>
                                    <div class="col-sm-9">
                                        <input disabled type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama Kostum">

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
                                  <label class="col-sm-3 col-form-label">Ukuran</label>
                                  <div class="col-sm-9">
                                    <select name="ukuran" id="ukuran" class="form-control select2" disabled>
                                        <option value="S" {{ old('ukuran') == "S" ? "selected" : "" }}>S</option>
                                        <option value="S-M" {{ old('ukuran') == "S-M" ? "selected" : "" }}>S - M</option>
                                        <option value="M" {{ old('ukuran') == "M" ? "selected" : "" }}>M</option>
                                        <option value="M-L" {{ old('ukuran') == "M-L" ? "selected" : "" }}>M - L</option>
                                        <option value="L" {{ old('ukuran') == "L" ? "selected" : "" }}>L</option>
                                        <option value="L-XL" {{ old('ukuran') == "L-XL" ? "selected" : "" }}>L - XL</option>
                                        <option value="XL" {{ old('ukuran') == "XL" ? "selected" : "" }}>XL</option>
                                        <option value="All Size" {{ old('ukuran') == "All Size" ? "selected" : "" }}>All Size</option>
                                    </select>
                                  </div>
                                </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Jaminan</label>
                                    <div class="col-sm-9">
                                      <select name="jaminan" id="jaminan" class="form-control select2">
                                          <option value="Kartu Tanda Penduduk (KTP)" {{ old('jaminan') == "Kartu Tanda Penduduk (KTP)" ? "selected" : "" }}>Kartu Tanda Penduduk (KTP)</option>
                                          <option value="Kartu Pelajar" {{ old('jaminan') == "Kartu Pelajar" ? "selected" : "" }}>Kartu Pelajar</option>
                                          <option value="Kartu Identitsas Anak (KIA)" {{ old('jaminan') == "Kartu Identitsas Anak (KIA)" ? "selected" : "" }}>Kartu Identitsas Anak (KIA)</option>
                                      </select>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga</label>
                                <div class="col-sm-9">
                                    <input disabled type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" placeholder="Masukkan Harga Kostum">

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
                                    <label class="col-sm-3 col-form-label">Tanggal Rental</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control @error('tgl_rental') is-invalid @enderror" name="tgl_rental" value="{{ old('tgl_rental') }}" placeholder="Dipinjam Setgl_rental (hari)">

                                    <!-- error message untuk tgl_rental -->
                                    @error('tgl_rental')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    </div>
                                  </div>
                            </div>

                            <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Lama</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control @error('lama') is-invalid @enderror" name="lama" value="{{ old('lama') }}" placeholder="Dipinjam Selama (hari)">

                                <!-- error message untuk lama -->
                                @error('lama')
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
                                    <label class="col-sm-3 col-form-label">Jaminan</label>
                                    <div class="col-sm-9">
                                      <select name="jaminan" id="jaminan" class="form-control select2">
                                          <option value="Kartu Tanda Penduduk (KTP)" {{ old('jaminan') == "Kartu Tanda Penduduk (KTP)" ? "selected" : "" }}>Kartu Tanda Penduduk (KTP)</option>
                                          <option value="Kartu Pelajar" {{ old('jaminan') == "Kartu Pelajar" ? "selected" : "" }}>Kartu Pelajar</option>
                                          <option value="Kartu Identitsas Anak (KIA)" {{ old('jaminan') == "Kartu Identitsas Anak (KIA)" ? "selected" : "" }}>Kartu Identitsas Anak (KIA)</option>
                                      </select>
                                    </div>
                                  </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Metode Rental</label>
                                    <div class="col-sm-9">
                                      <select name="metode" id="metode" class="form-control select2">
                                          <option value="Delivery" {{ old('metode') == "Delivery" ? "selected" : "" }}>Delivery</option>
                                          <option value="Pick Up" {{ old('metode') == "Pick Up" ? "selected" : "" }}>Pick Up</option>
                                      </select>
                                    </div>
                                  </div>
                            </div>
                          </div>

                          <div class="row">
                            {{-- <div class="col-md-6">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Keterangan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" placeholder="Masukkan Keterangan">

                                <!-- error message untuk keterangan -->
                                @error('keterangan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                </div>
                              </div>
                            </div> --}}

                            <div class="col-md-6">
                                {{-- <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Stok Kostum</label>
                                  <div class="col-sm-9">
                                    <select name="stok" id="stok" class="form-control select2">
                                        <option value="Tersedia" {{ old('stok') == "Tersedia" ? "selected" : "" }}>Tersedia</option>
                                        <option value="Dipesan" {{ old('stok') == "Dipesan" ? "selected" : "" }}>Dipesan</option>
                                    </select>
                                  </div>
                                </div> --}}
                              </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <a href="{{ route('data.katalog_kostum.index') }}" class="btn btn-danger mr-2">
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

