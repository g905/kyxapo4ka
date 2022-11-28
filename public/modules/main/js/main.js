/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */


$('.slick-index').slick({
    infinite: true,
    speed: 300,
    dots: true,
    arrows: true,
    autoplay: true
});

$('.slick-pop').slick({
    infinite: true,
    speed: 300,
    dots: false,
    arrows: true,
    autoplay: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});