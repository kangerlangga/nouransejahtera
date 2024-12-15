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

    <!-- Contact Start -->
    <div class="container-xxl pb-5 pt-3">
      <div class="container">
        <div class="row g-5">
          <div
            class="col-lg-6 wow fadeInUp"
            data-wow-delay="0.1s"
            style="min-height: 450px"
          >
            <div class="position-relative h-100">
              <iframe
                class="position-relative w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.077379711107!2d112.68964410000001!3d-7.456691899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e10056019363%3A0x2ba3f8eb70aa4802!2sPT.%20Nouran%20Sejahtera%20Indonesia!5e0!3m2!1sid!2sid!4v1734261214745!5m2!1sid!2sid"
                frameborder="0"
                style="min-height: 450px; border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="border-start border-5 border-primary ps-4 mb-5">
              <h6 class="text-body text-uppercase mb-2">Contact Us</h6>
              <h1 class="display-6 mb-0">
                Have Questions? We're Here to Help!
              </h1>
            </div>
            <p class="mb-4" style="text-align: justify">
              We'd love to hear from you! If you have any questions, need more information, or want to share your feedback, please don't hesitate to reach out. Simply fill out the contact form, and our team will get back to you as soon as possible.
            </p>
            <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data">
              @csrf
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control border-0 bg-light"
                      id="name"
                      name="name"
                      placeholder="Your Name"
                      required
                    />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="tel"
                      class="form-control border-0 bg-light"
                      id="phone"
                      name="phone"
                      placeholder="Your Phone"
                      required
                    />
                    <label for="phone">Your Phone</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control border-0 bg-light"
                      id="email"
                      name="email"
                      placeholder="Your Email"
                      required
                    />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control border-0 bg-light"
                      id="subject"
                      name="subject"
                      placeholder="Subject"
                      required
                    />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control border-0 bg-light"
                      placeholder="Leave a message here"
                      id="message"
                      name="message"
                      style="height: 150px"
                      required
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <input type="hidden" name="source" value="Contact">
                <div class="col-12">
                  <button class="btn btn-primary py-3 px-5" type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

@include('layouts.public.footer')
@include('layouts.public.script')
<script>
  @if(session('success'))
  Swal.fire({
      icon: "success",
      title: "{{ session('success') }}",
      showConfirmButton: false,
      timer: 3000
  });
  @elseif(session('error'))
  Swal.fire({
      icon: "error",
      title: "{{ session('error') }}",
      showConfirmButton: false,
      timer: 3000
  });
  @endif
</script>
@endsection

<body>
    @yield('content')
</body>
</html>
