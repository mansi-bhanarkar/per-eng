$(document).ready(function () {

    // responsive navbar :: START 
    $('.navbar-toggler').click(
        function () {
            $("#navbarSupportedContent").addClass("menu-show");
            $("#navbarSupportedContent").removeClass("menu-hide");

        }
    )

    $('.close-menu').click(
        function () {
            $("#navbarSupportedContent").removeClass("menu-show");
            $("#navbarSupportedContent").addClass("menu-hide");
            // $(".slidenav").addClass("slideOut");
            // $("#ol").removeClass("overlay");
        }
    )
    // responsive navbar :: END

    // banner-wrap js:: START
    $('.banner-wrap').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        autoplay: true,
        prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable"></span></div>',
        nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable"></span></div>'
    });
    // banner-wrap js:: END


   //multiple-item js::START 
    $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 3,
        dots: false,
        arrows: false,
        autoplay: true,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]

    });
   //multiple-item js::START 
   //multiple-item js::START 
    // $('.perfeng-categories-slider').slick({
    //     infinite: true,
    //     slidesToShow: 5,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: false,
    //     autoplay: true,
    //     responsive: [{
    //             breakpoint: 1024,
    //             settings: {
    //                 slidesToShow: 3,
    //                 slidesToScroll: 2
    //             }
    //         },
    //         {
    //             breakpoint: 480,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1
    //             }
    //         }
    //     ]

    // });
    // $('.').slick({
    //     infinite: true,
    //     slidesToShow: 3,
    //     slidesToScroll: 3,
    //     dots: false,
    //     arrows: true,
    //     autoplay: true,
    //     prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable"></span></div>',
    //     nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable"></span></div>'
    // });
    
$('.perfeng-categorsie-slider').slick({
    dots: false,
    arrows:false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 3,
          infinite: true,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
   //multiple-item js::START 

   


   //testimonial js::START 
    $('.testimonial-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 3,
        dots: false,
        arrows: false,
        autoplay: true,

    });
    //testimonial js::START 


    // counter js :: START
    function inVisible(element) {
        var WindowTop = $(window).scrollTop();
        var WindowBottom = WindowTop + $(window).height();
        var ElementTop = element.offset().top;
        var ElementBottom = ElementTop + element.height();

        if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
            animate(element);
    }

    function animate(element) {
        if (!element.hasClass('ms-animated')) {
            var maxval = element.data('max');
            var html = element.html();
            element.addClass("ms-animated");
            $({
                countNum: element.html()
            }).animate({
                countNum: maxval
            }, {
                duration: 5000,
                easing: 'linear',
                step: function () {
                    element.html(Math.floor(this.countNum) + html);
                },
                complete: function () {
                    element.html(this.countNum + html);
                }
            });
        }

    }

    $(function () {
        $(window).scroll(function () {
            $("h2[data-max]").each(function () {
                inVisible($(this));
            });
        })
    });
    // counter js :: END

    // product-inner Thumbnail/alternates slider for product page
    // Main/Product image slider for product page
    $('#detail .main-img-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: true,
        fade: true,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 300,
        lazyLoad: 'ondemand',
        asNavFor: '.thumb-nav',
        prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable"></span></div>',
        nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable"></span></div>'
    });
    $('.thumb-nav').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        centerPadding: '0px',
        asNavFor: '.main-img-slider',
        dots: false,
        centerMode: false,
        draggable: true,
        speed: 200,
        focusOnSelect: true,
        prevArrow: '<div class="slick-prev"><i class="i-prev"></i><span class="sr-only sr-only-focusable"></span></div>',
        nextArrow: '<div class="slick-next"><i class="i-next"></i><span class="sr-only sr-only-focusable"></span></div>'
    });
    
    
    //keeps thumbnails active when changing main image, via mouse/touch drag/swipe
    $('.main-img-slider').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        //remove all active class
        $('.thumb-nav .slick-slide').removeClass('slick-current');
        //set active class for current slide
        $('.thumb-nav .slick-slide:not(.slick-cloned)').eq(currentSlide).addClass('slick-current');
    });
    // product-inner Thumbnail/alternates slider for product page
    
    // scroll top js :: START
    $(document).ready(function() {
        $('#top-scroll').hide(0)
        
        $(window).scroll(function(){
            if($(this).scrollTop() > 100){
            $('#top-scroll').fadeIn(200);      
          } else {
            $('#top-scroll').fadeOut(300);
          }
        });
        $('#top-scroll').click(function() {
          event.preventDefault();
          
          $('html , body').animate({scrollTop: 0}, 1000);
        });
      });   
    // scroll top js :: END   

    // downlode-btn top js :: START
    $(document).ready(function() {
        $('#downlode-btn').hide(0)
        
        $(window).scroll(function(){
            if($(this).scrollTop() > 100){
            $('#downlode-btn').fadeIn(200);      
          } else {
            $('#downlode-btn').fadeOut(300);
          }
        });
        $('#downlode-btn').click(function() {
          event.preventDefault();
          
          $('html , body').animate({scrollTop: 0}, 1000);
        });
      });   
    // downlode-btn top js :: END   




});