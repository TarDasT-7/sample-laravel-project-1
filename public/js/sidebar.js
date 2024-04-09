$(document).ready(function() {
    $('#show-cart').click(function() {
        $('#sidebar').removeClass('hidden');
        setTimeout(function() {
            $('#sidebar').addClass('show');
        }, 50);
    });

    $('#hide-cart').click(closeSidebar);
    $(document).click(function(event) {
        if (!$(event.target).closest('#sidebar').length && !$(event.target).closest('#show-cart').length) {
            closeSidebar();
        }
    });

    function closeSidebar() {
        $('#sidebar').removeClass('show');
    }
});