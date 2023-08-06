<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Selamat Datang <span class="text-primary">{{ Auth::user()->name }}</span> sebagai <span class="text-danger">{{ Auth::user()->role }}</span></h3>
                  <h6 class="font-weight-normal mb-0">Platform Rental Kostum Kosplay, Selamat merental dan <span class="text-danger">Jadilah Customer Bijak !</span></h6>
                </div>
              </div>
            </div>
          </div>

            <div class="row">
              <div class="col-md-12 grid-margin ">
                <div class="card tale-bg">
                    <div class="card-body">
              <div class="card tale-bg">
                <div id="carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel" data-slide-to="0"></li>
                        <li data-target="#carousel" data-slide-to="1"></li>
                        <li data-target="#carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ asset('skydash') }}/images/Banner 1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item ">
                        <img src="{{ asset('skydash') }}/images/Banner 2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item ">
                        <img src="{{ asset('skydash') }}/images/Banner 3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                  </div>
              </div>
                    </div>
                </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Syarat Dan Ketentuan</p>
                  <p class="font-weight-500">1, Minimal 16 Tahun/ sudah memiliki KTP / Kartu Pelajar</p>
                  <p class="font-weight-500">2, Diizinkan oleh orang tua (tidak ada drama kostum telat dikembalikan karena disita orang tua yang tidak setuju bercosplay)</p>
                  <p class="font-weight-500">3, Diutamakan domisili wilayah Cirebon</p>
                  <p class="font-weight-500">4, Melakukan pengecekan, apakah kostum yang diinginkan masih tersedia atau sudah dipesan</p>
                  <p class="font-weight-500">5, Terdapat denda dengan hitungan perhari</p>
                  <p class="font-weight-500">6, Kostum atau aksesoris yang rusak, dikenakan denda Repair</p>
                  <p class="font-weight-500">7, Tidak melayani rental dadakan, minimal H-3</p>
                  <p class="font-weight-500">8, Kostum hanya dipakai oleh satu orang</p>
                  <p class="font-weight-500">9, Dilarang memodifikasi wig atau aksesoris lainnya</p>
                  <p class="font-weight-500">10, Bersedia memberikan Jaminan sesuai pilihannya</p>

                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">Sales Report</p>
                  <a href="#" class="text-info">View all</a>
                 </div>
                  <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg">
                <div class="card-people mt-auto">
                  <img src="{{ asset('skydash') }}/images/dashboard/people.svg" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Bangalore</h4>
                        <h6 class="font-weight-normal">India</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Today’s Bookings</p>
                      <p class="fs-30 mb-2">4006</p>
                      <p>10.00% (30 days)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Bookings</p>
                      <p class="fs-30 mb-2">61344</p>
                      <p>22.00% (30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Number of Meetings</p>
                      <p class="fs-30 mb-2">34040</p>
                      <p>2.00% (30 days)</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of Clients</p>
                      <p class="fs-30 mb-2">47033</p>
                      <p>0.22% (30 days)</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
