<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - RieeRent</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/feather/feather.css">
  <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ asset('skydash') }}/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('skydash') }}/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('skydash') }}/images/logorie.png" />
</head>


<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-2 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="{{ asset('skydash') }}/images/logorent.png" alt="logo" style="width: 100%">
              </div>
                <div class="card-body">
              <h4>Hallo! Selamat datang</h4>
              <h6 class="font-weight-light">Silahkan Login terlebih Dahulu.</h6>
              <br>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                <input id="email" type="email" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>

                <div class="form-group">
                <input id="password" type="password" placeholder="Masukkan Password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>

                <div class="mt-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">LOGIN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      Ingat Saya
                    </label>
                  </div>
                  {{-- @if (Route::has('password.request'))
                  <a href="{{ route('password.request') }}" class="auth-link text-black">Lupa Password?</a>
                  @endif --}}
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Belum punya akun? <a href="{{ route('register') }}" class="text-primary">Buat disini!</a>
                </div>
            </form>
        </div>

            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('skydash') }}/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('skydash') }}/js/off-canvas.js"></script>
  <script src="{{ asset('skydash') }}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('skydash') }}/js/template.js"></script>
  <script src="{{ asset('skydash') }}/js/settings.js"></script>
  <script src="{{ asset('skydash') }}/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
