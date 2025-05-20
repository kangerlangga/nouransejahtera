<!-- Footer Start -->
<div class="container-fluid copyright" style="background-color: #013679">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mt-3 text-white">
        <p>Copyright &copy; <?= date("Y")?> : <a href="{{ route('home.publik') }}" class="fw-bolder text-white" style="letter-spacing: 1px">PT. Nouran Sejahtera Indonesia</a> - All Right Reserved.</p>
      </div>
      {{-- <div class="col-md-6 text-center text-md-end"> --}}
        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        {{-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
        <br />Distributed By:
        <a href="https://themewagon.com" target="_blank">ThemeWagon</a> --}}
      {{-- </div> --}}
    </div>
  </div>
</div>
</div>
<!-- Footer End -->

<!--Div where the WhatsApp will be rendered-->
<div id="cpWA"></div>
<script type="text/javascript">
$(function () {
    $('#cpWA').floatingWhatsApp({
    phone: '6281553225421',
    size: '70px',
    position: "right"
    });
});
</script>

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="border-color: #fff">
  <i class="bi bi-arrow-up"></i>
</a>