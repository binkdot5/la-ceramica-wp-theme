(function(){
    console.log('SEAF is fired!');

    //Code for Slick slider
    $('.slider_1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
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

    //Code for Mobile Navigation Menu
    var menu = document.querySelector('.mob-nav');
    var menuBtn = document.querySelector('.mob-nav-show');
    var closemenuBtn = document.querySelector('.mob-nav-close');
    
    console.log(menuBtn);

    function openNav() {
        menu.classList.toggle('menu-active');
        event.stopPropagation();
    }

    function closeNav() {
        menu.classList.remove('menu-active');
    }

    menuBtn.addEventListener("click", openNav, false);
    closemenuBtn.addEventListener("click", closeNav, false);
})();
  