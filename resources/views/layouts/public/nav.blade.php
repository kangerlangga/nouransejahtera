  <!-- Navbar Start -->
  <nav
    class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0"
  >
    <a href="{{ route('home.publik') }}" class="navbar-brand d-flex align-items-center">
      <h1 class="m-0">
        <img src="{{  url('') }}/assets/logo/logo.png" alt="Nouran Sejahtera Indonesia" height="60">
      </h1>
    </a>
    <button
      type="button"
      class="navbar-toggler"
      data-bs-toggle="collapse"
      data-bs-target="#navbarCollapse"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-3 py-lg-0">
        <a href="{{ route('home.publik') }}" class="nav-item nav-link {{ Request::routeIs('home.publik') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about.publik') }}" class="nav-item nav-link {{ Request::routeIs('about.publik') ? 'active' : '' }}">About</a>
        <a href="{{ route('product.publik') }}" class="nav-item nav-link {{ Request::routeIs('product.publik') ? 'active' : '' }}">Product</a>
        <a href="{{ route('contact.publik') }}" class="nav-item nav-link {{ Request::routeIs('contact.publik') ? 'active' : '' }}">Contact</a>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->