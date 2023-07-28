$(".galeri-carousel").slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    speed: 2000,
    autoplaySpeed: 3000,
    variableWidth: false,
    centerMode: false,
    nextArrow: $(".galeri-button.next"),
    prevArrow: $(".galeri-button.prev"),
    responsive: [
        {
            breakpoint: 767,
            settings: {
                dots: true,
                slidesToShow: 1,
                arrows: false,
                variableWidth: false,
            },
        },
        {
            breakpoint: 998,
            settings: {
                dots: false,
                slidesToShow: 2,
                arrows: true,
                variableWidth: false,
            },
        },
    ],
});
