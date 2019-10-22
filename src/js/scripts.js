(function (api, $) {
    'use strict';

    /* WordPress wymaga no-js */
    api.init = function () {
        $('html').removeClass('no-js');

        /* plynne przewijanie do elementu */
        api.smoothscroll = function (target) {
            var distance = $('custom-content-menu').outerHeight();

            $('html,body').stop().animate({
                scrollTop: $(target).offset().top - distance
            }, 800, function () { });
        }

        /* dodanie swiper.js */
        new Swiper('.custom-content-full_width_slider .swiper-container', {
            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets'
            },
            speed: 2000,
            autoplay: {
                delay: 9000,
            },
            loop: {
                loopedSlides: 1
            },
            navigation: {
                nextEl: '.swiper-nav-button-next',
                prevEl: '.swiper-nav-button-prev',
            },
        });

        new Swiper('.custom-content-full_width_slider2 .swiper2', {
            slidesPerView: 4,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets'
            },
            spaceBetween: 50,
            speed: 2000,
            autoplay: {
                delay: 9000,
            },
            slidesPerGroup: 4,
            loop: {
                loopedSlides: 1
            },
            navigation: {
                nextEl: '.swiper-nav-button-next',
                prevEl: '.swiper-nav-button-prev',
            },
        });
        new Swiper('.custom-content-full_width_slider2 .swiper-mobile', {
            slidesPerView: 1,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets'
            },
            spaceBetween: 50,
            speed: 2000,
            autoplay: {
                delay: 9000,
            },
            slidesPerGroup: 1,
            loop: {
                loopedSlides: 1
            },
            navigation: {
                nextEl: '.swiper-nav-button-next',
                prevEl: '.swiper-nav-button-prev',
            },
        }); 
        new Swiper('.custom-content-full_width_slider2 .swiper-mobile-lg', {
            slidesPerView: 2,
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets'
            },
            spaceBetween: 50,
            speed: 2000,
            autoplay: {
                delay: 9000,
            },
            slidesPerGroup: 2,
            loop: {
                loopedSlides: 1
            },
            navigation: {
                nextEl: '.swiper-nav-button-next',
                prevEl: '.swiper-nav-button-prev',
            },
        });
        
        new Swiper('.swiper-loga .swiper', {
            slidesPerView: 5,
            loop: {
                loopedSlides: 1
            },
            autoplay: {
                delay: 0,
                disableOnInteraction: false,
              },
            freeMode: true,
            spaceBetween: 0,
            speed: 20000,
            grabCursor: true,
            slidesPerGroup: 5,
            preventClicks: false
  
          });


        /* zamykanie menu po kliknieciu */
        $('.nav-link').on('click', function () {
            if (window.innerWidth < 768) {
                $('#navbarTopMenu').collapse('toggle');
            }
        });

        /**SROLL NAVBAR */
        // $(window).scroll(function() {
        //     $('.navigation-container').toggleClass('nav-toggle', $(this).scrollTop() > 150);
        // });

        /** HEADER ARROW */
        $(document).ready(function() {
            var $win = $(window);
            var navHeight = $('#header-main-container').height();
            var winH = $win.height();
            var scrollTo = winH - navHeight;
            $(".header-arrow").click(function(event){
                $('html, body').animate({scrollTop: scrollTo}, 100);
            });
        });
       
    }

    /* Document ready function */
    $(function () {
        api.init();
    });

})(window, jQuery);

function shareOnFB() {
    var url = "https://www.facebook.com/sharer/sharer.php?u=";
    var urlcurrent = encodeURIComponent(location.href);
    window.open(url + urlcurrent, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
    return false;
}


function copyTextToClipboard(text) {
    var textArea = document.createElement("textarea");
    textArea.style.background = 'transparent';
    textArea.value = text;
    document.body.appendChild(textArea);
    textArea.select();
    try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
    } catch (err) {
        //jezeli error
    }
    document.body.removeChild(textArea);
}

function CopyLink() {
    copyTextToClipboard(location.href);
}
