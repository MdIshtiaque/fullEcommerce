<script src="{{ asset('dist/js/markerclusterer.js') }}"></script>
<script src="{{ asset('dist/js/app.js') }}"></script>
{{--<script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>--}}
@stack('js')
<script>
    function toggleSubMenu(element) {
        // Find the sibling ul element
        var submenu = element.nextElementSibling;

        // Toggle the display property
        if (submenu.style.display === "none" || submenu.style.display === "") {
            submenu.style.display = "block";
        } else {
            submenu.style.display = "none";
        }
    }
</script>
<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
