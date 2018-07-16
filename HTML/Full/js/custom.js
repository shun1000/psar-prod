jQuery(document).ready(function($) {
    "use strict";
    //For Pretty Photo Validation
    $('a[data-rel]').each(function() {
        $(this).attr('rel', $(this).data('rel'));
    });

    //BxSlider For Home Banner
    if ($('#home-banner').length) {
        $('#home-banner').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }

    //Our Causes Section Slider
    if ($('.slider1').length) {
        $('.slider1').bxSlider({
            slideWidth: 360,
            minSlides: 3,
            maxSlides: 3,
            slideMargin: 30
        });
    }

    //Latest News Scroll
    if ($('#content-1').length) {
        $("#content-1").mCustomScrollbar({
            horizontalScroll: true
        });
        $(".content.inner").mCustomScrollbar({
            scrollButtons: {
                enable: true
            }
        });
    }

    //Audio
    if ($('audio').length) {
        $('audio').audioPlayer();
    }

    //Parallax Effect
    $(window).stellar();

    //Home Tesyimonial
    if ($('#home-testimonial').length) {
        $('#home-testimonial').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }


    //Pretty Photo
    if ($('.gallery').length) {
        $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'normal',
            theme: 'light_square',
            slideshow: 3000,
            autoplay_slideshow: true
        });
        $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({
            animation_speed: 'fast',
            slideshow: 10000,
            hideflash: true
        });
    }
    //Our Projects Slider
    if ($('.our-project-slider').length) {
        $('.our-project-slider').bxSlider({
            minSlides: 3,
            maxSlides: 4,
            slideWidth: 490,
            slideMargin: 0
        });
    }

    //Next Event Countdown on Heared 
    if ($('.countdown').length) {
        $('.countdown').final_countdown();
    }

    //Home Testimonial
    if ($('.event-2-slider').length) {
        $('.event-2-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true,
            speed: 10000,
            animation_speed:'slow'
        });
    }

    //Countdown Upcoming Events
    if ($('.countdown236').length) {
        var austDay = new Date();
        austDay = new Date(2015, 11 - 1, 11, 15, 35, 0);
        $('.countdown236').countdown({
            until: austDay,
        });
        $('#year').text(austDay.getFullYear());
    }

    //Tabs
    $('#myTab a').on('click', function(e) {
        e.preventDefault();
        $(this).tab('show');
    })

    //BxSlider For Home Banner
    if ($('#eco-events-slider').length) {
        $('#eco-events-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }

    //BxSlider For Home Banner
    if ($('#eco-testimonials-slider').length) {
        $('#eco-testimonials-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }

    //BxSlider For Home Banner
    if ($('#causes-testimonial-slider').length) {
        $('#causes-testimonial-slider').bxSlider({
            auto: true,
            mode: 'fade',
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }

    //Collection Slider
    if ($('.collection-slider').length) {
        $('.collection-slider').bxSlider({
            minSlides: 3,
            maxSlides: 4,
            slideWidth: 290,
            slideMargin: 0
        });
    }

    //New Arrivals Slider
    if ($('#new-arrival-slider').length) {
        $('#new-arrival-slider').bxSlider({
            minSlides: 2,
            maxSlides: 4,
            slideWidth: 290,
            slideMargin: 0
        });
    }

    //Footer Sale Slider
    if ($('#footer-sale-slider').length) {
        $('#footer-sale-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }

    //Footer Sale Slider
    if ($('#footer-tweets').length) {
        $('#footer-tweets').bxSlider({
            auto: true,
            mode: 'fade',
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }

    //Event Detail Map
    if ($('#map_contact_1').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        //Initialize MAP
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            //disableDefaultUI: true,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                saturation: -100,
                lightness: 10

            }],
        }
        map = new google.maps.Map(document.getElementById('map_contact_1'), myOptions);
        //End Initialize MAP
        //Set Marker
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        //End marker

        //Set info window
        var infowindow = new google.maps.InfoWindow({
            content: '',
            position: myLatLng
        });
        infowindow.open(map);
    }

    //Event Detail Map
    if ($('#map_contact_2').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        //Initialize MAP
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            //disableDefaultUI: true,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                saturation: -100,
                lightness: 10

            }],
        }
        map = new google.maps.Map(document.getElementById('map_contact_2'), myOptions);
        //End Initialize MAP
        //Set Marker
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        //End marker

        //Set info window
        //var infowindow = new google.maps.InfoWindow({
            //content: '',
            //position: myLatLng
        //});
        //infowindow.open(map);
    }

    //Event Detail Map
    if ($('#map_contact_3').length) {
        var map;
        var myLatLng = new google.maps.LatLng(48.85661, 2.35222);
        //Initialize MAP
        var myOptions = {
            zoom: 12,
            center: myLatLng,
            //disableDefaultUI: true,
            zoomControl: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControl: false,
            styles: [{
                saturation: -100,
                lightness: 10

            }],
        }
        map = new google.maps.Map(document.getElementById('map_contact_3'), myOptions);
        //End Initialize MAP
        //Set Marker
        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: 'images/map-icon.png'
        });
        marker.getPosition();
        //End marker

        //Set info window
        //var infowindow = new google.maps.InfoWindow({
           // content: '',
            //position: myLatLng
        //});
        //infowindow.open(map);
    }

    //Post Slider
    if ($('#post-slider').length) {
        $('#post-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }

    //About 2 page 
    if ($('.percentage').length) {
        $('.percentage').easyPieChart({
            animate: 1000,
            onStep: function(value) {
                this.$el.find('span').text(~~value);
            }
        });
    }

    //Slider Post
    if ($('#slider-post').length) {
        $('#slider-post').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }

    //Upcoming Timer
    if ($('.defaultCountdown').length) {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        $('.defaultCountdown').countdown({
            until: austDay
        });
        $('#year').text(austDay.getFullYear());
    }



    //EVENT LOCATOR MAP
    if ($('#content_1').length) {
        $("#content_1").mCustomScrollbar({
            scrollButtons: {
                enable: true
            }
        });
        $("#content_1").hover(function() {
            $(document).data({
                "keyboard-input": "enabled"
            });
            $(this).addClass("keyboard-input");
        }, function() {
            $(document).data({
                "keyboard-input": "disabled"
            });
            $(this).removeClass("keyboard-input");
        });
        $(document).keydown(function(e) {
            if ($(this).data("keyboard-input") === "enabled") {
                var activeElem = $(".keyboard-input"),
                    activeElemPos = Math.abs($(".keyboard-input .mCSB_container").position().top),
                    pixelsToScroll = 60;
                if (e.which === 38) { //scroll up
                    e.preventDefault();
                    if (pixelsToScroll > activeElemPos) {
                        activeElem.mCustomScrollbar("scrollTo", "top");
                    } else {
                        activeElem.mCustomScrollbar("scrollTo", (activeElemPos - pixelsToScroll), {
                            scrollInertia: 400,
                            scrollEasing: "easeOutCirc"
                        });
                    }
                } else if (e.which === 40) { //scroll down
                    e.preventDefault();
                    activeElem.mCustomScrollbar("scrollTo", (activeElemPos + pixelsToScroll), {
                        scrollInertia: 400,
                        scrollEasing: "easeOutCirc"
                    });
                }
            }
        });
    }


    //About 1 Page Counter
    if ($('.counter').length) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    }

    //Accordion 
    $.fn.slideFadeToggle = function(speed, easing, callback) {
        return this.animate({
            opacity: 'toggle',
            height: 'toggle'
        }, speed, easing, callback);
    };
    if ($('.accordion_cp').length) {
        $('.accordion_cp').accordion({
            defaultOpen: 'section1',
            cookieName: 'nav',
            speed: 'slow',
            animateOpen: function(elem, opts) { //replace the standard slideUp with custom function
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            },
            animateClose: function(elem, opts) { //replace the standard slideDown with custom function
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            }
        });
    }

    //News Slider
    if ($('#news-slider').length) {
        $('#news-slider').bxSlider({
            auto: true,
            infiniteLoop: true,
            hideControlOnEnd: true
        });
    }

    //Event Calendar
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    if ($('#calendar').length) {
        $('#calendar').fullCalendar({
            editable: true,

        });
    }


    //Function End
});