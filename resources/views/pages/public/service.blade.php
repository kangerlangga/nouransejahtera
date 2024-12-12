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

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-end mb-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4">
            <h6 class="text-body text-uppercase mb-2">Our Services</h6>
            <h1 class="display-6 mb-0">
              Your Trusted Partner for Business Solutions
            </h1>
          </div>
        </div>
      </div>
      <div class="row g-4 justify-content-center">
        <!-- General Trading -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item bg-light overflow-hidden h-100">
            <img class="img-fluid" src="{{ url('') }}/assets/public/img/Layanan/1.jpg" alt="" />
            <div class="service-text position-relative text-center h-100 p-4">
              <h5 class="mb-3">General Trading</h5>
              <p>
                Kami menyediakan solusi perdagangan umum yang andal, memenuhi kebutuhan bisnis Anda dengan produk berkualitas dan layanan profesional.
              </p>
            </div>
          </div>
        </div>
        <!-- Contractor -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item bg-light overflow-hidden h-100">
            <img class="img-fluid" src="{{ url('') }}/assets/public/img/Layanan/2.jpg" alt="" />
            <div class="service-text position-relative text-center h-100 p-4">
              <h5 class="mb-3">Contractor</h5>
              <p>
                Kami mengelola proyek konstruksi dan renovasi dengan standar tinggi, memberikan hasil yang berkualitas, tepat waktu, dan sesuai kebutuhan.
              </p>
            </div>
          </div>
        </div>
        <!-- Supplier -->
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item bg-light overflow-hidden h-100">
            <img class="img-fluid" src="{{ url('') }}/assets/public/img/Layanan/3.jpg" alt="" />
            <div class="service-text position-relative text-center h-100 p-4">
              <h5 class="mb-3">Supplier</h5>
              <p>
                Kami menyediakan pasokan barang berkualitas untuk mendukung kebutuhan operasional bisnis Anda, dengan pengiriman tepat waktu dan efisien.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->

@include('layouts.public.footer')
@include('layouts.public.script')
@endsection

<body>
    @yield('content')
</body>
</html>