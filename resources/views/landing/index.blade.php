@extends('layouts.landing-page')

@section('content')
<body id="top">

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">

                <div class="d-lg-none ms-auto me-4">
                    <a href="#top" class="navbar-icon bi-person-bounding-box smoothscroll"></a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_1">Beranda</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_2">Tentang</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_3">Pelayanan</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section_4">Informasi</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Katalog</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('datakostum') }}">Kostum</a></li>

                                <li><a class="dropdown-item" href="{{ route('dataaksesoris') }}">Aksesoris</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ route('home') }}">Rental Sekarang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h1 class="text-white text-center">Rent. Cosplay. Enjoy</h1>

                        <h6 class="text-center">Platform Perentalan Kostum dan Aksesoris</h6>
                        <h6 class="text-center"><span class="text-white">Wilayah Cirebon</span></h6>

                    </div>

                </div>
            </div>
        </section>


        <section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">RieeRent</h5>

                                        <p class="mb-0">Platform Perentalan kostum cosplay yang berada di wilayah sekitar Cirebon.</p>
                                    </div>
                                </div>

                                <img src="{{ asset('skydash') }}/images/logorie.png" alt="logo" class="custom-block-image img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-block custom-block-overlay">
                            <div class="d-flex flex-column h-100">
                                <img src="{{ asset('skydash') }}/images/contoh2.jpg" class="custom-block-image img-fluid" alt="">

                                <div class="custom-block-overlay-text d-flex">
                                    <div>
                                        <h5 class="text-white mb-2">Apa itu Cosplay ?
                                        </h5>

                                        <p class="text-white">Cosplay (コスプレ Kosupure) adalah permainan mengenakan kostum beserta aksesori dan rias wajah seperti yang dikenakan tokoh-tokoh dalam anime, manga, dongeng, video game, penyanyi dan musisi, dan film kartun</p>

                                        <a href="https://id.wikipedia.org/wiki/Cosplay" class="btn custom-btn mt-2 mt-lg-3">Selengkapnya . . .</a>
                                    </div>
                                </div>

                                <div class="social-share d-flex">
                                    <p class="text-white me-4">Kunjungi Kami :</p>

                                    <ul class="social-icon">
                                        <li class="social-icon-item">
                                            <a href="https://www.instagram.com/wrc.rentcos/" class="social-icon-link bi-instagram"></a>
                                        </li>

                                        <li class="social-icon-item">
                                            <a href="https://www.facebook.com/natalia.rize" class="social-icon-link bi-facebook"></a>
                                        </li>
                                </div>

                                <div class="section-overlay"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="explore-section section-padding" id="section_2">
            <div class="container">

                    <div class="col-12 text-center">
                        <h2 class="mb-4">Tentang</h1>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="design-tab-pane" role="tabpanel" aria-labelledby="design-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <a href="{{ route('datakostum') }}">
                                        <div class="custom-block bg-white shadow-lg">

                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Costume Only</h5>

                                                        <p class="mb-0">Dapat merental Kostum nya saja</p>
                                                    </div>
                                                </div>

                                                <img src="{{ asset('skydash') }}/images/contoh3.jpg" class="custom-block-image img-fluid" alt="">
                                        </div>
                                    </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                                        <a href="{{ route('dataaksesoris') }}">
                                        <div class="custom-block bg-white shadow-lg">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Accessories Only</h5>

                                                            <p class="mb-0">Dapat merental Aksesoris nya saja</p>
                                                    </div>
                                                </div>

                                                <img src="{{ asset('skydash') }}/images/wig.jpg" class="custom-block-image img-fluid" alt="">
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-6 col-12">
                                        <div class="custom-block bg-white shadow-lg">

                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Fullset Costume</h5>

                                                            <p class="mb-0">Fullset kostum sudah include kostum dan juga Aksesoris</p>
                                                    </div>
                                                </div>

                                                <img src="{{ asset('skydash') }}/images/fullset.jpg" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">   <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                                        <div class="custom-block bg-white shadow-lg">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5 class="mb-2">Nota / Kwitansi</h5>

                                                        <p class="mb-0">Mendapatkan Nota sebagai bukti Perentalan</p>
                                                    </div>
                                                </div>

                                                <img src="{{ asset('skydash') }}/images/nota.png" class="custom-block-image img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="custom-block custom-block-overlay">
                                            <div class="d-flex flex-column h-100">
                                                <img src="{{ asset('TopicListing-1.0.0') }}/images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                                                <div class="custom-block-overlay-text d-flex">
                                                    <div>
                                                        <h5 class="text-white mb-2">Trusted</h5>

                                                        <p class="text-white">Memiliki relasi yang luas, dan memiliki akun instagram yang terdapat banyak Testimoni yang positif dari para Customer.</p>

                                                        <a href="#" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                                                    </div>
                                                </div>

                                                <div class="social-share d-flex">
                                                    <p class="text-white me-4">Kunjungi :</p>

                                                    <ul class="social-icon">
                                                        <li class="social-icon-item">
                                                            <a href="https://www.instagram.com/wrc.rentcos/" class="social-icon-link bi-instagram"></a>
                                                        </li>
                                                    </ul>

                                                    <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                                                </div>

                                                <div class="section-overlay"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </section>
        <br>
        <br>
        <section class="timeline-section section-padding" id="section_3">
            <div class="section-overlay"></div>

            <div class="container">
                <div class="row">

                    <div class="col-12 text-center">
                        <h2 class="text-white mb-4">Bagaimana Cara Merental ?</h1>
                    </div>

                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="timeline-container">
                            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                                <div class="list-progress">
                                    <div class="inner"></div>
                                </div>

                                <li>
                                    <h4 class="text-white mb-3">Mempunyai Akun</h4>

                                    <p class="text-white">Jika belum mempunyai akun, bisa langsung mendaftarkan nya saja pada Website<a href="{{ route('home') }}">RieeRent</a></p>

                                    <div class="icon-holder">
                                      <i class="bi-1-circle"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Menentukan Kostum dan Waktu</h4>

                                    <p class="text-white">Menentukan kostum yang ingin dirental, serta menentukan berapa lama kostum tersebut akan direntalkan</p>

                                    <div class="icon-holder">
                                      <i class="bi-2-circle"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Mengisi Form Perentalan</h4>

                                    <p class="text-white">Setelah menentukan kostum, bisa langsung mengisi beberapa form perentalan untuk dilakukan pendataan</p>

                                    <div class="icon-holder">
                                      <i class="bi-3-circle"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Menyiapkan Jaminan</h4>

                                    <p class="text-white">Selanjutnya persiapkan beberapa kartu tanda pengenal sebagai jaminan selama kostum direntalkan</p>

                                    <div class="icon-holder">
                                      <i class="bi-4-circle"></i>
                                    </div>
                                </li>

                                <li>
                                    <h4 class="text-white mb-3">Melakukan Transaksi</h4>

                                    <p class="text-white">setelah semua kesepakatan telah selesai, maka sudah dapat melakukan Perentalan</p>

                                    <div class="icon-holder">
                                      <i class="bi-5-circle"></i>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <br>
        <br>

        <section class="contact-section section-padding section-bg" id="section_4">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h2 class="mb-5">Informasi</h2>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1981.1844899513485!2d108.5277998887!3d-6.724752910482656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee2065ef2c21f%3A0x1a5d373f6595d152!2sJl.%20Siraga%20Indah%2C%20Tuk%2C%20Kec.%20Kedawung%2C%20Kabupaten%20Cirebon%2C%20Jawa%20Barat%2045153!5e0!3m2!1sid!2sid!4v1690009377484!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        {{-- <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.065641062665!2d-122.4230416990949!3d37.80335401520422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858127459fabad%3A0x808ba520e5e9edb7!2sFrancisco%20Park!5e1!3m2!1sen!2sth!4v1684340239744!5m2!1sen!2sth" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-3 mb-lg- mb-md-0 ms-auto">
                        <h4 class="mb-3">Sosial Media</h4>

                        <p class="d-flex align-items-center mb-1">
                            <span class="me-2">Instagram</span>

                            <a href="https://www.instagram.com/wrc.rentcos/" class="site-footer-link">
                                @wrc.rentcos
                            </a>
                        </p>

                        <p class="d-flex align-items-center mb-1">
                            <span class="me-2">Email</span>

                            <a href="#" class="site-footer-link">
                                riierent@gmail.com
                            </a>
                        </p>

                        <p class="d-flex align-items-center mb-1">
                            <span class="me-2">Facebook</span>

                            <a href="https://www.facebook.com/natalia.rize" class="site-footer-link">
                                Riee Rent
                            </a>
                        </p>

                        <p class="d-flex align-items-center">
                            <span class="me-2">Whatsapp</span>

                            <a href="http://wa.me/62895636802610" class="site-footer-link">
                                089518775924
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mx-auto">
                        <h4 class="mb-3">Alamat</h4>

                        <p>Jl. Siraga Indah no. 25 Rt. 01 Rw. 06 Desa Tuk Kec. Kedawung Kab. Cirebon Jawa Barat 45153.</p>
                    </div>

                </div>
            </div>
        </section>
    </main>
    @endsection
