<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.public.head')
</head>

@section('content')
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->
@include('layouts.public.nav')
    <!-- Page Header Start -->
    <div
    class="container-fluid page-header py-5 mb-5 wow fadeIn"
    data-wow-delay="0.1s"
    >
    <div class="container text-center py-5">
    <h1 class="display-4 text-white animated slideInDown mb-4">{{ $judul }}</h1>
    <nav aria-label="breadcrumb animated slideInDown">
    </nav>
    </div>
    </div>
    <!-- Page Header End -->

  <!-- About Start -->
  <div class="container-xxl pb-5 pt-3">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div
            class="position-relative overflow-hidden pt-5 h-100"
            style="min-height: 400px"
          >
            <img
              class="position-absolute w-100 h-100"
              src="{{  url('') }}/assets/public/img/About.png"
              alt=""
              style="object-fit: cover"
            />
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="h-100">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">About Us</h6>
              <h1 class="display-6 mb-0">
                Reliable Solutions for Your Business Needs
              </h1>
            </div>
            <p>
              PT. Nouran Sejahtera Indonesia adalah perusahaan terkemuka yang bergerak di bidang perdagangan umum, kontraktor, dan pemasok. Kami berkomitmen untuk menghadirkan layanan dan solusi terbaik yang dirancang untuk memenuhi kebutuhan klien dengan standar tertinggi.
            </p>
            <p class="mb-4">
              Dengan fokus pada keunggulan, inovasi, dan kepuasan pelanggan, kami terus beradaptasi dengan perkembangan industri untuk memastikan setiap solusi yang ditawarkan relevan dan mampu mendukung keberhasilan bisnis Anda.
            </p>
            <div class="border-top mt-4 pt-4">
              <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Pelayanan Cepat dan Tepat Waktu</h6>
                </div>
                <!-- Feature 2 -->
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Proses Mudah dan Efisien</h6>
                </div>
                <!-- Feature 3 -->
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Tim Profesional dan Terpercaya</h6>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

@include('layouts.public.footer')
@include('layouts.public.script')
@endsection

<body>
    @yield('content')
</body>
</html>