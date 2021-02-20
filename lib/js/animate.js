$(document).ready(function() {
    $("#input-search").on("focus", function () {
        $("li.search").addClass("ativo");
    }).on("blur", function () {
        $("li.search").removeClass("ativo");
    });

    $(".thumbnails").owlCarousel({
        loop: true,
        margin: 10,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            },
            1400: {
                items: 5
            }
        }
    });

    var owl = $('.thumbnails');
    owl.owlCarousel();

    $('#btn-news-prev').click(function () {
        owl.trigger('next.owl.carousel');
    })

    $('#btn-news-next').click(function () {
        owl.trigger('next.owl.carousel');
    });

    $("#page-up").on("click", function (event) {
        $("html, body").animate({
            scrollTop: 0 
        }, 1000);
        event.preventDefault();
    });

    $("#btn-bars").on("click", function(){
        $("header").toggleClass("open-menu")
    });

    $("#menu-mobile-mask, .bar-close").on("click", function(){
        $("header").removeClass("open-menu")
    });
    $("#btn-search").on("click", function(){
        $("header").toggleClass("open-search")
    });


});
