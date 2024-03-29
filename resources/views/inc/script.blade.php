<!-- ::::::::::::::All JS Files here :::::::::::::: -->
<!-- Global Vendor, plugins JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-ui.min.js') }}"></script>

<!--Plugins JS-->
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/material-scrolltop.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/venobox.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.lineProgressbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/aos.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.instagramFeed.js') }}"></script>
<script src="{{ asset('assets/js/plugins/ajax-mail.js') }}"></script>
<script src="{{ asset('assets/js/toastr.min.js') }}"></script>

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<!-- <script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script> -->

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

@stack('js')
