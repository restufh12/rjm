$(function () {
    'use strict';

    $(window).on('load', function () {
        setTimeout(function () {
            $(".page_loader").fadeOut("fast");
            /*$('link[id="style_sheet"]').attr('href', 'assets/frontend/css/colors/default.css');
            $('.logo img').attr('src', 'assets/frontend/img/logos/green-light-logo.png');*/
        }, 100)
    });

    // WOW animation library initialization
    var wow = new WOW(
        {
            animateClass: 'animated',
            offset: 100,
            mobile: false
        }
    );
    wow.init();

    // Banner slider
    (function ($) {
        //Function to animate slider captions
        function doAnimations(elems) {
            //Cache the animationend event in a variable
            var animEndEv = 'webkitAnimationEnd animationend';
            elems.each(function () {
                var $this = $(this),
                    $animationType = $this.data('animation');
                $this.addClass($animationType).one(animEndEv, function () {
                    $this.removeClass($animationType);
                });
            });
        }

        //Variables on page load
        var $myCarousel = $('#carousel-example-generic')
        var $firstAnimatingElems = $myCarousel.find('.item:first').find("[data-animation ^= 'animated']");
        //Initialize carousel
        $myCarousel.carousel();

        //Animate captions in first slide on page load
        doAnimations($firstAnimatingElems);
        //Pause carousel
        $myCarousel.carousel('pause');
        //Other slides to be animated on carousel slide event
        $myCarousel.on('slide.bs.carousel', function (e) {
            var $animatingElems = $(e.relatedTarget).find("[data-animation ^= 'animated']");
            doAnimations($animatingElems);
        });
        $('#carousel-example-generic').carousel({
            interval: 3000,
            pause: "false"
        });
    })(jQuery);

    // Page scroller.
    $.scrollUp({
        scrollName: 'page_scroller',
        scrollDistance: 300,
        scrollFrom: 'top',
        scrollSpeed: 500,
        easingType: 'linear',
        animation: 'fade',
        animationSpeed: 200,
        scrollTrigger: false,
        scrollTarget: false,
        scrollText: '<i class="fa fa-chevron-up"></i>',
        scrollTitle: false,
        scrollImg: false,
        activeOverlay: false,
        zIndex: 2147483647
    });

    // Counter
    function isCounterElementVisible($elementToBeChecked)
    {
        var TopView = $(window).scrollTop();
        var BotView = TopView + $(window).height();
        var TopElement = $elementToBeChecked.offset().top;
        var BotElement = TopElement + $elementToBeChecked.height();
        return ((BotElement <= BotView) && (TopElement >= TopView));
    }

    $(window).scroll(function () {
        $( ".counter" ).each(function() {
            var isOnView = isCounterElementVisible($(this));
            if(isOnView && !$(this).hasClass('Starting')){
                $(this).addClass('Starting');
                $(this).prop('Counter',0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            }
        });
    });


    (function(){
        $('#ourPartners').carousel({ interval: 3600 });
    }());

    (function(){
        $('.our-partners .item').each(function(){
            var itemToClone = $(this);
            for (var i=1;i<4;i++) {
                itemToClone = itemToClone.next();
                if (!itemToClone.length) {
                    itemToClone = $(this).siblings(':first');
                }
                itemToClone.children(':first-child').clone()
                    .addClass("cloneditem-"+(i))
                    .appendTo($(this));
            }
        });
    }());

    resizeModalsContent();
    function resizeModalsContent() {
        var winWidth = $(window).width();
        var videoWidth = 450;
        if(winWidth < 992 && winWidth > 767) {
            videoWidth = 600;
        } else if(winWidth <= 768) {
            videoWidth = winWidth - 20;
        }

        var ratio = .7133;
        var videoHeight = videoWidth * ratio;
        $('.modalIframe').css('height', videoHeight);
    }


    $(window).resize(function () {
        resizeModalsContent();
    });

    /*var videoWidth = $('.car-details').width();
    var videoHeight = videoWidth * .61;
    $('.car-details iframe').css('height', videoHeight);*/

    var SingleRoomSliderdWidth = $('.simple-slider').width();
    var SingleRoomSliderdHeight = SingleRoomSliderdWidth * .74;
    $('.thumb-preview').css('height', SingleRoomSliderdHeight);
    $('.imng-preview').css('height', SingleRoomSliderdHeight);


    $('.selectpicker').selectpicker();

    var val =  $('.price-slider').slider('getValue');
    $('.price-slider').on('slide', function (ev) {
        $('#minPrice').val(ev.value[0]);
        $('#maxPrice').val(ev.value[1]);
    });

    // Magnify activation
    $('.car-magnify-gallery').each(function() {
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{enabled:true}
        });
    });


    // Navbar search area
    $(document).ready(function(){
        var submitIcon = $('.navbar-search-icon');
        var inputBox = $('.navbar-search-input');
        var searchBox = $('.navbar-search');
        var isOpen = false;
        submitIcon.click(function(){
            if(isOpen == false){
                searchBox.addClass('navbar-search-open');
                inputBox.focus();
                isOpen = true;
            } else {
                searchBox.removeClass('navbar-search-open');
                inputBox.focusout();
                isOpen = false;
            }
        });
        submitIcon.mouseup(function(){
            return false;
        });
        searchBox.mouseup(function(){
            return false;
        });
        $(document).mouseup(function(){
            if(isOpen == true){
                $('.navbar-search-icon').css('display','block');
                submitIcon.click();
            }
        });
    });
    function buttonUp(){
        var inputVal = $('.navbar-search-input').val();
        inputVal = $.trim(inputVal).length;
        if( inputVal !== 0){
            $('.navbar-search-icon').css('display','none');
        } else {
            $('.navbar-search-input').val('');
            $('.navbar-search-icon').css('display','block');
        }
    }


    // Multilevel menuus
    $('[data-submenu]').submenupicker();

    function toggleChevron(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".fa")
            .toggleClass('fa-minus fa-plus');
    }
    $('.panel-group').on('shown.bs.collapse', toggleChevron);
    $('.panel-group').on('hidden.bs.collapse', toggleChevron);

    var windowHeight = $( window ).height();
    $('#map').css('height', windowHeight);

    // Change color plate
    /*$('.color-plate').on('click', function () {
        var name = $(this).attr('data-color');
        $('link[id="style_sheet"]').attr('href', 'assets/frontend/css/colors/'+name+'.css');
        if(name == 'default'){
            $('.logo img').attr('src', 'assets/frontend/img/logos/logo.png');
        }
        else{
            $('.logo img').attr('src', 'assets/frontend/img/logos/'+name+'-logo.png');
        }
    });*/

    $('.setting-button').on('click', function () {
        $('.option-panel').toggleClass('option-panel-collased');
    });
});