<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>RiieRent - Rental Kostum Cosplay</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

        <link href="{{ asset('TopicListing-1.0.0') }}/css/bootstrap.min.css" rel="stylesheet">

        <link href="{{ asset('TopicListing-1.0.0') }}/css/bootstrap-icons.css" rel="stylesheet">

        <link href="{{ asset('TopicListing-1.0.0') }}/css/templatemo-topic-listing.css" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('skydash') }}/images/logorie.png" />

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
			  width: auto;
			  height: auto;
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
<!--

TemplateMo 590 topic listing

https://templatemo.com/tm-590-topic-listing

-->
    </head>

    <div class="wrapper">
        @yield('content')
    </div>

<footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2" href="{{'/ruangbusana/public/'}}">
                            <i class="bi-house"></i>
                            <span>RieeRent</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Informasi</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="http://wa.me/62895636802610" class="site-footer-link">
                                089518775924
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="#" class="site-footer-link">
                                rieerent@gmail.com
                            </a>
                        </p>
                    </div>

                        {{-- <div class="d-sm-flex justify-content-center justify-content-sm-between">
                          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.  Farhan Dito Bil Azhar - 20200123008 </span>
                        </div>
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
                        </div> --}}
                </div>
            </div>
        </footer>
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023.  Farhan Dito Bil Azhar - 20200123008 </span>
            </div>
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
            </div>
          </footer>


        <!-- JAVASCRIPT FILES -->

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

        <script src="{{ asset('TopicListing-1.0.0') }}/js/jquery.min.js"></script>
        <script src="{{ asset('TopicListing-1.0.0') }}/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('TopicListing-1.0.0') }}/js/jquery.sticky.js"></script>
        <script src="{{ asset('TopicListing-1.0.0') }}/js/click-scroll.js"></script>
        <script src="{{ asset('TopicListing-1.0.0') }}/js/custom.js"></script>

    </body>
</html>
