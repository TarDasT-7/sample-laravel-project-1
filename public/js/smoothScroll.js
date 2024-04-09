function smoothScroll(event) {
    event.preventDefault();
    var targetId = $(this).attr("href");
    var targetElement = $(targetId);
    if (!targetElement.length) return;
    var targetOffset = targetElement.offset().top;
    $("html, body").animate(
        {
            scrollTop: targetOffset,
        },
        1500
    );
}

$(document).ready(function () {
    $("a.scroll-link-down").on("click", smoothScroll);
});

$(document).ready(function () {
    // Smooth scrolling for anchor links
    $("a.scroll-link").on("click", function (event) {
        event.preventDefault();
        var targetId = $(this).attr("href");
        smoothScroll(targetId);
    });

    // Function to handle smooth scrolling
    function smoothScroll(targetId) {
        var targetElement = $(targetId);
        if (!targetElement.length) return;
        var targetOffset = targetElement.offset().top;
        $("html, body").animate(
            {
                scrollTop: targetOffset,
            },
            1500
        );
    }

    // Check the current URL
    var currentURL = window.location.pathname;

    // Change behavior based on the current URL
    if (currentURL === "/") {
        // For root URL, scroll to sections within the same page
        // No additional action needed
    } else {
        // For other URLs, redirect to root URL and then scroll
        $(".scroll-link").attr("href");
        $("a.scroll-link").on("click", function (event) {
            event.preventDefault();
            var targetId = $(this).attr("href");
            console.log(targetId);
            window.location.href = "/#" + targetId.substring(1);
        });
    }
});

$(document).ready(function () {
    var scrollToStartBtn = $("#scroll-to-start");
    scrollToStartBtn.hide();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            scrollToStartBtn.fadeIn();
        } else {
            scrollToStartBtn.fadeOut();
        }
    });

    scrollToStartBtn.click(function () {
        $("html, body").animate(
            {
                scrollTop: 0,
            },
            300
        );
    });
});
