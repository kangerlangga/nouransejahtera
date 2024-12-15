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
  <div class="container-xxl pb-5 pt-3">
    <div class="container">
      <div class="row g-5 align-items-end mb-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4">
            <h6 class="text-body text-uppercase mb-2">Catalog Product</h6>
            <h1 class="display-6 mb-0">
              Discover the Best Products in Our Catalog
            </h1>
          </div>
        </div>
      </div>
      <div class="row g-4 justify-content-center">
        @if ($cP == 0)
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <img src="{{ url('') }}/assets/public/img/comingsoon.jpg" class="img-fluid" alt="Coming Soon" style="min-width: 100%;">
            </div>
        @elseif ($cP > 0)
            <!-- Catalog Product -->
            @foreach ($Product as $P)
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="{{ url('') }}/assets/public/img/Product/{{ $P->image_products }}" class="img-fluid" alt="{{ $P->page_products }}" style="min-width: 100%;">
                </div>
            @endforeach
        @endif
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