<!DOCTYPE html>
<html lang="en">
<head>
    <!-- PRECONNECT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://unpkg.com">
    <link rel="preconnect" href="https://unpkg.com">
    <link rel="dns-prefetch" href="https://www.w3.org">
    <link rel="preconnect" href="https://www.w3.org">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- SIMPLE META -->
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="id-ID">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <meta name="google" content="notranslate">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="Nouran Sejahtera Indonesia">
    <meta name="language" content="id">
    <meta name="geo.country" content="id">
    <meta name="geo.placename" content="Indonesia">
    <meta name="robots" content="all,index,follow">
	<meta NAME="Distribution" CONTENT="Global">
	<meta NAME="Rating" CONTENT="General">

    <!-- WEBSITE META -->
    <title>Page Not Found | PT. Nouran Sejahtera Indonesia</title>
    <meta name="keywords" content="Nouran Sejahtera, Nouran Sejahtera Indonesia, PT. Nouran Sejahtera Indonesia">
    <meta name="description" content="PT. Nouran Sejahtera Indonesia adalah perusahaan yang bergerak di bidang perdagangan, kontraktor, dan pemasok. Kami berkomitmen memberikan layanan terbaik dan produk berkualitas untuk memenuhi kebutuhan pelanggan dengan hasil yang memuaskan dan terpercaya.">
    <link rel="icon" type="image/png" href="{{  url('') }}/assets/logo/logo.png">

    <!-- WAP -->
    <script type="text/javascript" src="{{  url('') }}/assets/public/wap/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{  url('') }}/assets/public/wap/floating-wpp.min.js"></script>
    <link rel="stylesheet" href="{{  url('') }}/assets/public/wap/floating-wpp.min.css">

    <!-- Source Sweet Alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"/>

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"/>

    <!-- Libraries Stylesheet -->
    <link href="{{  url('') }}/assets/public/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="{{  url('') }}/assets/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{  url('') }}/assets/public/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{  url('') }}/assets/public/css/style.css" rel="stylesheet" />
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
    <h1 class="display-4 text-white animated slideInDown mb-4">Page Not Found</h1>
    <nav aria-label="breadcrumb animated slideInDown">
    </nav>
    </div>
    </div>
    <!-- Page Header End -->

    <!-- 404 Start -->
    <div class="container-xxl pt-3 pb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
              <h1 class="display-1">404</h1>
              <h1 class="mb-4">Page Not Found</h1>
              <p class="mb-4">
                Oops! The page you’re looking for doesn’t exist. It might have been moved, deleted, or the URL may be incorrect. Please return to our homepage to continue browsing.
              </p>
              <a class="btn btn-primary py-3 px-5" href="{{ route('home.publik') }}">Go Back To Home</a>
            </div>
          </div>
        </div>
      </div>
      <!-- 404 End -->
@include('layouts.public.footer')
@include('layouts.public.script')
@endsection

<body>
    @yield('content')
</body>
</html>
