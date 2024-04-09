<script src="{{ asset('js/jquery-3.7.1.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}" crossorigin="anonymous"></script>
<script src="{{ asset('js/smoothScroll.js') }}"></script>
<script src="{{ asset('js/sidebar.js') }}"></script>
<script src="{{ asset('js/flowbite.min.js') }}"></script>

<script>
    $(document).ready(function() {
        setTimeout(() => {
            $(".kill-alert").fadeOut(200);
        }, 2000);
    });
</script>

@yield('add-scripts')
