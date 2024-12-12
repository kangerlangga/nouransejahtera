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