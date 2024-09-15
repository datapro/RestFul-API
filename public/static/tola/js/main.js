(function($) {
    "use strict";
    /* -------------------------------------
               Prealoder
         -------------------------------------- */
    $(window).on('load', function(event) {
        $('.js-preloader').delay(500).fadeOut(500);
    });

    /* -------------------------------------
            Buy Now Button
    -------------------------------------- */
    // $('body').append("<a href='https://themeforest.net/checkout/84095926/create_account?_ga=2.258938703.497479303.1645493536-1768322795.1645493536' class='buy-now-btn' target='_blank'><img src='assets/img/envato.png' alt='envato'/>Buy Now</a>"); 

    /* -------------------------------------
          Open Search
    -------------------------------------- */
    $('.searchbtn').on('click', function() {
        $('.search-area').toggleClass('open');
    });


    /* -------------------------------------
          Language Dropdown
    -------------------------------------- */
    $(".language-option").each(function() {
        var each = $(this)
        each.find(".lang-name").html(each.find(".language-dropdown-menu a:nth-child(1)").text());
        var allOptions = $(".language-dropdown-menu").children('a');
        each.find(".language-dropdown-menu").on("click", "a", function() {
            allOptions.removeClass('selected');
            $(this).addClass('selected');
            $(this).closest(".language-option").find(".lang-name").html($(this).text());
        });
    })
    $('.user-option').on('click', function() {
        $('.user-menuitem').toggleClass('open');
    });

    /* -------------------------------------
           Progressbar 
    // -------------------------------------- */

    $(window).scroll(function() {
        // if ($(window).scrollTop() > 100) { // scroll down abit and get the action   

        $('.progress-bar').each(function() {
            $(this).find('.progress-content').animate({
                width: $(this).attr('data-percentage')
            }, 2000);

            $(this).find('.progress-number-mark').animate({ left: $(this).attr('data-percentage') }, {
                duration: 2000,
                step: function(now, fx) {
                    var data = Math.round(now);
                    $(this).find('.percent').html(data + '%');
                }
            });
        });
        // }
    });


    /* -------------------------------------
           Hero Slider 
    // -------------------------------------- */
    var hero_slider = new Swiper(".hero-slider-one", {
        spaceBetween: 0,
        slidesPerView: 1,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        fadeEffect: { crossFade: true },
        autoplayDisableOnInteraction: true,
        effect: "fade",
        loop: true,
        speed: 1500,
        observer: true,
        observeParents: true,
        navigation: {
            nextEl: ".hero-slide-next",
            prevEl: ".hero-slide-prev"
        },

    });
    /* -------------------------------------
           Service Slider 
     -------------------------------------- */
    var service_slider_one = new Swiper(".service-slider-one", {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 2000,
            disableOnInteraction: true,
        },
        slidesPerView: 3,
        speed: 1500,
        freeMode: true,
        observer: true,
        observeParents: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        navigation: {
            nextEl: ".service-next",
            prevEl: ".service-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1

            },
            768: {
                slidesPerView: 1.5,
                centeredSlides: true

            },
            992: {
                slidesPerView: 2

            },
            1200: {
                slidesPerView: 3


            }
        }
    });

    /* -------------------------------------
           Partner Slider 
     -------------------------------------- */
    var service_slider = new Swiper(".partner-slider", {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 2000,
            disableOnInteraction: true,
        },
        speed: 1500,
        breakpoints: {
            0: {
                slidesPerView: 2

            },
            576: {
                slidesPerView: 3

            },
            768: {
                slidesPerView: 4

            },
            1200: {
                slidesPerView: 6


            }
        }
    });
    /* ----------------------------------------
           Magnific Popup Video
     ------------------------------------------*/
    $('.video-play').magnificPopup({
        type: 'iframe',
        mainClass: 'mfp-fade',
        preloader: true,
    });
    /* -------------------------------------
           Testimonials Slider 
     -------------------------------------- */
    var testimonial_slider_one = new Swiper(".testimonial-slider-one", {
        loop: true,
        spaceBetween: 0,
        autoplay: {
            delay: 2000,
            disableOnInteraction: true,
        },
        slidesPerView: 3,
        speed: 1500,
        centeredSlides: true,
        breakpoints: {
            0: {
                slidesPerView: 1

            },
            768: {
                slidesPerView: 2

            },
            1200: {
                slidesPerView: 3


            }
        }
    });
    var testimonial_slider_two = new Swiper(".testimonial-slider-two", {
        loop: true,
        spaceBetween: 0,
        // autoplay: {
        //     delay: 2000,
        //     disableOnInteraction: true,
        // },
        speed: 1500,
        centeredSlides: true,
        pagination: {
            el: ".testimonial-pagination",
            clickable: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 1

            },
            768: {
                slidesPerView: 1.5

            },
            992: {
                slidesPerView: 2

            },
            1200: {
                slidesPerView: 3


            }
        }
    });
    /* -------------------------------------
           Blog Slider 
     -------------------------------------- */
    var blog_slider_one = new Swiper(".blog-slider-one", {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        slidesPerView: 3,
        speed: 1500,
        navigation: {
            nextEl: ".blog-next",
            prevEl: ".blog-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1

            },
            768: {
                slidesPerView: 1.5,
                centeredSlides: true

            },
            992: {
                slidesPerView: 2

            },
            1200: {
                slidesPerView: 3

            }
        }
    });
    /* -------------------------------------
          Single Portfolio Slider 
    -------------------------------------- */
    var single_portfolio_slider = new Swiper(".single-portfolio-slider", {
        loop: true,
        spaceBetween: 30,
        autoplay: {
            delay: 2000,
            disableOnInteraction: true,
        },
        slidesPerView: 1,
        speed: 1500,
        pagination: {
            el: ".single-portfolio-pagination",
            clickable: true,
        },


    });


    /* -------------------------------------
          Mobile Topbar 
    -------------------------------------- */

    $('.mobile-top-bar').on('click', function() {
        $('.header-top-right').addClass('open')
    });
    $('.close-header-top').on('click', function() {
        $('.header-top-right').removeClass('open')
    });

    /* -------------------------------------
          sticky Header
    -------------------------------------- */
    var wind = $(window);
    var sticky = $('.header-wrap');
    wind.on('scroll', function() {
        var scroll = wind.scrollTop();
        if (scroll < 100) {
            sticky.removeClass('sticky');
        } else {
            sticky.addClass('sticky');
        }
    });

    /*---------------------------------
        Responsive mmenu
    ---------------------------------*/
    $('.mobile-menu a').on('click', function() {
        $('.main-menu-wrap').addClass('open');
        $('.mobile-bar-wrap.style2 .mobile-menu').addClass('open');
    });

    $('.mobile_menu a').on('click', function() {
        $(this).parent().toggleClass('open');
        $('.main-menu-wrap').toggleClass('open');
    });

    $('.menu-close').on('click', function() {
        $('.main-menu-wrap').removeClass('open')
    });
    $('.mobile-top-bar').on('click', function() {
        $('.header-top').addClass('open')
    });
    $('.close-header-top button').on('click', function() {
        $('.header-top').removeClass('open')
    });
    var $offcanvasNav = $('.main-menu'),
        $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
    $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="las la-angle-down"></i></span>');

    $offcanvasNavSubMenu.slideUp();

    $offcanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if (($this.attr('href') === '#' || $this.hasClass('menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
                $this.siblings('ul').slideUp('slow');
            } else {
                $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                $this.siblings('ul').slideDown('slow');
            }
        }
        if ($this.is('a') || $this.is('span') || $this.attr('class').match(/\b(menu-expand)\b/)) {
            $this.parent().toggleClass('menu-open');
        } else if ($this.is('li') && $this.attr('class').match(/\b('has-children')\b/)) {
            $this.toggleClass('menu-open');
        }
    });

    /*---------------------------------
         Scroll animation
    ----------------------------------*/
      AOS.init();
    /*-----------------------------------
         Scroll to top
    ----------------------------------*/

    // Show or hide the  button
    $(window).on('scroll', function(event) {
        if ($(this).scrollTop() > 600) {
            $('.back-to-top').fadeIn(200)
        } else {
            $('.back-to-top').fadeOut(200)
        }
    });


    //Animate the scroll to top
    $('.back-to-top').on('click', function(event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: 0,
        }, 1500);
    });

})(jQuery);



// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem('theme', themeName);
    document.documentElement.className = themeName;
}

// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem('theme') === 'theme-dark') {
        setTheme('theme-light');
    } else {
        setTheme('theme-dark');
    }
}

// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem('theme') === 'theme-dark') {
        setTheme('theme-dark');
        document.getElementById('slider').checked = false;
    } else {
        setTheme('theme-light');
        document.getElementById('slider').checked = true;
    }
})();