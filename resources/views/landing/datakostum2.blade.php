@extends('layouts.landing-page')
<link rel="shortcut icon" href="{{ asset('skydash') }}/images/logorie.png" />
<main>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <div class="d-lg-none ms-auto me-4">
                <a href="#" class="navbar-icon bi-person-bounding-box"></a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5 me-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{'/ruangbusana/public/#section_1'}}">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{'/ruangbusana/public/#section_2'}}">Tentang</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{'/ruangbusana/public/#section_3'}}">Pelayanan</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="{{'/ruangbusana/public/#section_4'}}">Informasi</a>
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


    <header class="site-header d-flex flex-column justify-content-center align-items-center">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-5 col-12">

                    <h2 class="text-white">Katalog Kostum</h2>
                </div>

            </div>
        </div>
    </header>


    <section class="section-padding">
        <div class="container">
            <div class="col-lg-12 col-12 text-center">
                <h3 class="mb-4">Contoh List Kostum</h3>
            </div>

            <div class="col-lg-12 col-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item">
                            <a class="page-link" href="{{ route('datakostum') }}" aria-label="Previous">
                                <span aria-hidden="true"><</span>
                            </a>
                        </li>

                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="{{ route('datakostum') }}" @class(["page-link", "active"=> request()->routeIs('datakostum*') ])>1</a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link" href="{{ route('datakostum2') }}" @class(["page-link", "active"=> request()->routeIs('datakostum2*') ])>2</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="{{ route('datakostum3') }}" @class(["page-link", "active"=> request()->routeIs('datakostum3*') ])>3</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link" href="{{ route('datakostum3') }}" aria-label="Next">
                                <span aria-hidden="true">></span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="row">
                <div class="col-lg-7 col-12 mt-3 mx-auto">
                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">

                            <!--portfolio-->
                            <div id="portfolio">
                                <div class="portfolio-item">
                                    <a href="{{ asset('skydash') }}/images/model3.png" class="portfolio-popup custom-block-image img-fluid">
                                        <img src="{{ asset('skydash') }}/images/model3.png" class="custom-block-image img-fluid" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-info">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--portfolio-->

                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <br>
                                    <br>
                                    <br>
                                    <h5 class="mb-2">Luffy Wano - (One Piece)&nbsp;<sup class="text-danger">OP-03</sup></h5>
                                    <h6 class="mb-1">Rp. 35.000,- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;</h6>

                                    <p class="mb-0">Model &nbsp; &nbsp; : Kimono</p>
                                    <p class="mb-0">Ukuran &nbsp; : M</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">

                                <!--portfolio-->
                            <div id="portfolio">
                                <div class="portfolio-item">
                                    <a href="{{ asset('skydash') }}/images/model5.png" class="portfolio-popup custom-block-image img-fluid">
                                        <img src="{{ asset('skydash') }}/images/model5.png" class="custom-block-image img-fluid" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-info">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--portfolio-->

                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <br>
                                    <br>
                                    <br>
                                    <h5 class="mb-2">Krul Tepes - (Owari no Seraph)<sup class="text-danger">OS-01</sup></h5>
                                    <h6 class="mb-1">Rp. 65.000,- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;</h6>

                                    <p class="mb-0">Model &nbsp; &nbsp; : Lolita</p>
                                    <p class="mb-0">Ukuran &nbsp; : M</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="custom-block custom-block-topics-listing bg-white shadow-lg mb-5">
                        <div class="d-flex">

                             <!--portfolio-->
                             <div id="portfolio">
                                <div class="portfolio-item">
                                    <a href="{{ asset('skydash') }}/images/model6.png" class="portfolio-popup custom-block-image img-fluid">
                                        <img src="{{ asset('skydash') }}/images/model6.png" class="custom-block-image img-fluid" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-info">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!--portfolio-->

                            <div class="custom-block-topics-listing-info d-flex">
                                <div>
                                    <br>
                                    <br>
                                    <br>
                                    <h5 class="mb-2">Rin Hoshizora - (Love Live)&nbsp;<sup class="text-danger">LL-01</sup></h5>
                                    <h6 class="mb-1">Rp. 55.000,- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;
                                        &nbsp;</h6>

                                    <p class="mb-0">Model &nbsp; &nbsp; : Idol</p>
                                    <p class="mb-0">Ukuran &nbsp; : L</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mb-0">
                            <li class="page-item">
                                <a class="page-link" href="{{ route('datakostum') }}" aria-label="Previous">
                                    <span aria-hidden="true"><</span>
                                </a>
                            </li>

                            <li class="page-item" aria-current="page">
                                <a class="page-link" href="{{ route('datakostum') }}" @class(["page-link", "active"=> request()->routeIs('datakostum*') ])>1</a>
                            </li>

                            <li class="page-item active">
                                <a class="page-link" href="{{ route('datakostum2') }}" @class(["page-link", "active"=> request()->routeIs('datakostum2*') ])>2</a>
                            </li>

                            <li class="page-item ">
                                <a class="page-link" href="{{ route('datakostum3') }}" @class(["page-link", "active"=> request()->routeIs('datakostum3*') ])>3</a>
                            </li>

                            <li class="page-item ">
                                <a class="page-link" href="{{ route('datakostum3') }}" aria-label="Next">
                                    <span aria-hidden="true">></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </section>



</main>
