(function(){
    console.log('SEAF is fired! Developer: Karan Bindal');

    //Code for Slick slider
    $('.slider_1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,
        dots: false,
        infinite: true,
        fade: true,
        controls: false,
        arrows: false,
        cssEase: 'linear'
    });
    
    $('.slider_2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,
        dots: false,
        infinite: true,
        fade: true,
        controls: false,
        arrows: false,
        cssEase: 'linear'
    });

    $('.dealers_slider_1').slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 1500,
                    arrows: false
                }
            }
        ]
    });

    //Code for Mobile Navigation Menu
    var menu = document.querySelector('.mob-nav');
    var menuBtn = document.querySelector('.mob-nav-show');
    var closemenuBtn = document.querySelector('.mob-nav-close');

    function openNav() {
        menu.classList.toggle('menu-active');
        Event.stopPropagation();
    }

    function closeNav() {
        menu.classList.remove('menu-active');
    }

    menuBtn.addEventListener("click", openNav, false);
    closemenuBtn.addEventListener("click", closeNav, false);
})();
  