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

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-3 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="{{  url('') }}/assets/public/img/Beranda/1.jpg" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                  <h5
                    class="text-light text-uppercase mb-3 animated slideInDown"
                  >
                    PT. Nouran Sejahtera Indonesia
                  </h5>
                  <h1 class="display-2 text-light mb-3 animated slideInDown">
                    Inovasi Terpercaya untuk Solusi Anda
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="{{  url('') }}/assets/public/img/Beranda/2.jpg" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                  <h5
                    class="text-light text-uppercase mb-3 animated slideInDown"
                  >
                  PT. Nouran Sejahtera Indonesia
                  </h5>
                  <h1 class="display-2 text-light mb-3 animated slideInDown">
                    Layanan Berkualitas Tinggi yang Diandalkan
                  </h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="{{  url('') }}/assets/public/img/Beranda/3.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-12 col-lg-10">
                    <h5
                      class="text-light text-uppercase mb-3 animated slideInDown"
                    >
                    PT. Nouran Sejahtera Indonesia
                    </h5>
                    <h1 class="display-2 text-light mb-3 animated slideInDown">
                        Mitra Handal untuk Kesuksesan Bersama
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->

  <!-- About Start -->
  <div class="container-xxl py-3">
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
                  <h6 class="mb-0">Tepat Waktu dalam Pelayanan</h6>
                </div>
                <!-- Feature 2 -->
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Pelayanan 24/7 Siap Mendukung Anda</h6>
                </div>
                <!-- Feature 3 -->
                <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                  <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                  <h6 class="mb-0">Didukung Tim Profesional dan Terpercaya</h6>
                </div>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

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

  <!-- Appointment Start -->
  <div
    class="container-fluid appointment mt-3 py-5 wow fadeIn"
    data-wow-delay="0.1s"
  >
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-5 col-md-6 wow fadeIn" data-wow-delay="0.3s">
          <div class="border-start border-5 border-primary ps-4 mb-5">
            <h6 class="text-white text-uppercase mb-2">Appointment</h6>
            <h1 class="display-6 text-white mb-0">
              Book a Meeting with Our Team
            </h1>
          </div>
          <p class="text-white mb-0" style="text-align: justify">
            Kami siap membantu Anda menemukan solusi terbaik di bidang perdagangan, kontraktor, dan pemasok. Buat janji sekarang untuk berdiskusi langsung dengan tim kami yang ramah dan profesional.
          </p>          
        </div>
        <div class="col-lg-7 col-md-6 wow fadeIn" data-wow-delay="0.5s">
          <form>
            <div class="row g-3">
              <div class="col-sm-6">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control bg-dark border-0"
                    id="gname"
                    placeholder="Gurdian Name"
                  />
                  <label for="gname">Your Name</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-floating">
                  <input
                    type="email"
                    class="form-control bg-dark border-0"
                    id="gmail"
                    placeholder="Gurdian Email"
                  />
                  <label for="gmail">Your Email</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control bg-dark border-0"
                    id="cname"
                    placeholder="Child Name"
                  />
                  <label for="cname">Your Mobile</label>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control bg-dark border-0"
                    id="cage"
                    placeholder="Child Age"
                  />
                  <label for="cage">Service Type</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea
                    class="form-control bg-dark border-0"
                    placeholder="Leave a message here"
                    id="message"
                    style="height: 100px"
                  ></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary w-100 py-3" type="submit">
                  Get Appointment
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Appointment End -->
@include('layouts.public.footer')
@include('layouts.public.script')
@endsection

<body>
    @yield('content')
</body>
</html>