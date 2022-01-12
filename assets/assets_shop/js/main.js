/*global jQuery */
(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {
        /*---------------------------------
         All Window Scroll Function Start
        --------------------------------- */
        $(window).scroll(function () {
            // Header Fix Js Here
            if ($(window).scrollTop() >= 200) {
                $('#header-area').addClass('fixTotop');
            } else {
                $('#header-area').removeClass('fixTotop');
            }

            // Scroll top Js Here
            if ($(window).scrollTop() >= 400) {
                $('.scroll-top').slideDown(400);
            } else {
                $('.scroll-top').slideUp(400);
            }
        });
        /*--------------------------------
         All Window Scroll Function End
        --------------------------------- */

        // Home Page 0ne Date Picker JS
        var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        $('#startDate').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: today,
            maxDate: function () {
                return $('#endDate').val();
            }
        });

        $('#endDate').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: function () {
                return $('#startDate').val();
            }
        });

        // Partner Carousel
        $(".partner-content-wrap").owlCarousel({
            loop: true,
            margin: 15,
            autoplay: true,
            autoplayTimeout: 1500,
            nav: false,
            dots: false,
            rtl: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        }); // Partner Carousel End


        // Funfact Count JS
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });


        // Choose Popular Car Isotope
        $(".popucar-menu a, .home2-car-filter a").click(function () {

            $(".popucar-menu a, .home2-car-filter a").removeClass('active');
            $(this).addClass('active');

            var filterValue = $(this).attr('data-filter');
            $(".popular-car-gird").isotope({
                filter: filterValue
            });

            return false;
        }); // Choose Popular Car Isotope End


        // Choose Newest Car Isotope
        $(".newcar-menu a").click(function () {

            $(".newcar-menu a").removeClass('active');
            $(this).addClass('active');

            var filterValue = $(this).attr('data-filter');
            $(".newest-car-gird").isotope({
                filter: filterValue
            });

            return false;
        }); // Choose Newest Car Isotope End


        // Choose Car Maginific Popup
        $('.car-hover').magnificPopup({
            type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-fade'
        }); // Maginific Popup End


        // Testimonial Carousel
        $(".testimonial-content").owlCarousel({
            loop: true,
            items: 1,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            nav: false,
            dots: true
        });
        // Testimonial Carousel End


        // Video Bg JS 
        $('#mobileapp-video-bg').YTPlayer({
            fitToBackground: true,
            videoURL: 'm5_AKjDdqaU',
            containment: '#mobile-app-area',
            quality: 'highres',
            loop: true,
            showControls: false,
            opacity: 1,
            mute: true
        }); // Video Bg End

        // Click to Scroll TOP
        $(".scroll-top").click(function () {
            $('html, body').animate({
                scrollTop: 0
            }, 1500);
        }); //Scroll TOP End

        // SlickNav or Mobile Menu
        $(".mainmenu").slicknav({
            'label': '',
            'prependTo': '#header-bottom .container .row'
        }); // SlickNav End


        // Home Page Two Slideshow
        $("#slideslow-bg").vegas({
            overlay: true,
            transition: 'fade',
            transitionDuration: 2000,
            delay: 4000,
            color: '#000',
            animation: 'random',
            animationDuration: 20000,
            slides: [
                {
                    src: 'assets/img/slider-img/slider-img-1.jpg'
                },
                {
                    src: 'assets/img/slider-img/slider-img-2.jpg'
                },
                {
                    src: 'assets/img/slider-img/slider-img-3.jpg'
                },
                {
                    src: 'assets/img/slider-img/slider-img-4.jpg'
                }
            ]
        }); //Home Page Two Slideshow

        // Home Page Two Date Picker JS

        $('#startDate2').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: today,
            maxDate: function () {
                return $('#endDate2').val();
            }
        });

        $('#endDate2').datepicker({
            uiLibrary: 'bootstrap4',
            iconsLibrary: 'fontawesome',
            minDate: function () {
                return $('#startDate2').val();
            }
        });

        // Home Page 3 Slider Start
        $("#home-slider-area").owlCarousel({
            loop: true,
            items: 1,
            autoplay: true,
            autoplayHoverPause: false,
            autoplayTimeout: 3000,
            nav: false,
            dots: true,
            animateOut: 'slideOutDown',
            animateIn: 'slideInDown'
        });
        // Home Page 3 Slider End

        // Car Details Slider Start
        $(".car-preview-crousel").owlCarousel({
            loop: true,
            items: 1,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 2000,
            nav: false,
            dots: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn'
        });

        // Home 2 Service Carousel
        $(".service-container-wrap").owlCarousel({
            loop: true,
            items: 3,
            margin: 20,
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 2000,
            nav: false,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });


    }); //Ready Function End

    jQuery(window).load(function () {
        jQuery('.preloader').fadeOut();
        jQuery('.preloader-spinner').delay(350).fadeOut('slow');
        jQuery('body').removeClass('loader-active');
        jQuery(".popular-car-gird").isotope();
    }); //window load End


}(jQuery));