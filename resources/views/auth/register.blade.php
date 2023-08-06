<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register - RieeRent</title>
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
  <!-- BOOTSTRAP 4-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <!-- MAGNIFIC POPUP-->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css">
  <!-- DATATABLES BS 4-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

  <!-- jQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <!-- DATATABLES BS 4-->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <!-- BOOTSTRAP 4-->
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <!-- MAGNIFIC POPUP-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

  <style>
      #portfolio {
        background: #fff;
        padding: 30px 0;
      }
      #portfolio .portfolio-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 1;
        transition: all ease-in-out 0.4s;
      }
      #portfolio .portfolio-item {
        overflow: hidden;
        position: relative;
        padding: 0;
        vertical-align: middle;
        text-align: center;
      }
      #portfolio .portfolio-item h2 {
        color: #ffffff;
        font-size: 24px;
        margin: 0;
        text-transform: capitalize;
        font-weight: 700;
      }
      #portfolio .portfolio-item img {
        transition: all ease-in-out 0.4s;
        width: 100%;
      }
      #portfolio .portfolio-item:hover img {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
      }
      #portfolio .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
        background: inherit;
      }
      #portfolio .portfolio-info {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
      }
      #gambar{
          height:100px;
      }
  </style>
</head>


<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('skydash') }}/images/logorent.png" alt="logo" style="width: 100%">
              </div>
                <div class="card-body">
              <h4>Hallo! Selamat datang</h4>
              <h6 class="font-weight-light">Silahkan daftar untuk melanjutkan.</h6>
              <br>

              <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                <input id="name" type="text" placeholder="Masukkan Nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                </div>

                <div class="form-group">
                <input id="email" type="email" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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

                <div class="form-group">
                <input id="password-confirm" type="password" placeholder="Konfirmasi Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="mt-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">DAFTAR</button>
                </div>
                <div class="mt-2">

            </div>


            <div class="mb-3">

                    <!--portfolio-->
                    <div id="portfolio">
                        <div class="portfolio-item">
                    Setuju dengan
                            <a href="{{ asset('skydash') }}/images/sk.png" class="portfolio-popup ">Syarat & ketentuan
                                <div class="portfolio-overlay">
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--portfolio-->
                  </label>

              </div>

                <div class="text-center mt-4 font-weight-light">
                  Sudah punya akun? <a href="{{ route('login') }}" class="text-primary">Masuk disini!</a>
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

  <script type="text/javascript">
    // memanggil plugin magnific popup
    $('.portfolio-popup').magnificPopup({
        type: 'image',
        removalDelay: 300,
        mainClass: 'mfp-fade',
        gallery: {
        enabled: true
        },
        zoom: {
        enabled: true,
        duration: 300,
        easing: 'ease-in-out',
        opener: function (openerElement) {
            return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
        }
    });
    // memanggil datatable membuat callback datatable pada magnific popup agar gambar
    // yang di munculkan sesuai pada saat pindah paginasi dari 1 ke 2
    // dan seterusnya
    $(document).ready(function() {
        var table = $('#example').dataTable({
        "fnDrawCallback": function () {
            $('.portfolio-popup').magnificPopup({
            type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true,
                duration: 300,
                easing: 'ease-in-out',
                opener: function (openerElement) {
                return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
            });
            }
        });
    });

</script>
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
