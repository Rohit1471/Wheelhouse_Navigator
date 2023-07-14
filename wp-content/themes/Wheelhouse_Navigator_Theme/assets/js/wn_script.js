
$(document).ready(function(){
    console.log("Script is running...");
    $(".dropdown").hover(function(){
      console.log("sub menu toggles");
      $(".header .dropdown ul").slideToggle('200');
    })
    $(".hamburger").click(function(){
        $(".header .right").slideToggle(400);
        console.log("helloo");
    })

    //  // Hamburger toggle function
    //     $('.hamburger').on('click resize', function(){
    //         child_array= $(this).children();
    //         child_array.each(function(index){
    //             child_array.eq(index).toggleClass(`line${index+1}`);
    //         })
    //         $('.header .right').slideToggle(400);
    //     });
    

    $('.slider-single').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        adaptiveHeight: true,
        infinite: false,
       useTransform: true,
        speed: 400,
        cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    });
   
    $('.slider-nav')
        .on('init', function(event, slick) {
            $('.slider-nav .slick-slide.slick-current').addClass('is-active');
        })
        .slick({
            slidesToShow: 7,
            slidesToScroll: 7,
            dots: false,
            arrows:false,
            focusOnSelect: false,
            infinite: false,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 5,
                }
            }, {
                breakpoint: 640,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
               }
            }, {
                breakpoint: 420,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
           }
            }]
        });
   
    $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
        $('.slider-nav').slick('slickGoTo', currentSlide);
        var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
        $('.slider-nav .slick-slide.is-active').removeClass('is-active');
        $(currrentNavSlideElem).addClass('is-active');
    });
   
    $('.slider-nav').on('click', '.slick-slide', function(event) {
        event.preventDefault();
        var goToSingleSlide = $(this).data('slick-index');
   
        $('.slider-single').slick('slickGoTo', goToSingleSlide);
    });


    $('.company_slider_inner').slick({
        dots: false,    
        infinite: true,
        speed: 300,
        slidesToShow: 7,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 5,
              slidesToScroll: 3,
              infinite: true,
            }
          },
          {
            breakpoint: 600,
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


    // Fontawesome
    $('.fa_2x').children().addClass('fa-2xl');


    // Form{
      $("input[type=submit]").addClass('form_button');







    
       
  $('.sextant_image_slider').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true,
      autoplay: true,
      autoplaySpeed: 2000,
      dots:true,
      arrows: true,
    });

    let number1;
    let number2;
    $(window).scroll(function(){
      let number_html= $('.relative_section .counter_div .number1');
      let number_html2= $('.relative_section .counter_div .number2');
      let value= Number.parseInt($('.relative_section .counter_div .number1').text());
      let value2= Number.parseInt($('.relative_section .counter_div .number2').text());

      number1= setInterval(function(){
          if(value <= 136){
              value++
              number_html.text(value);
              number_html2.text(Math.floor((63*value)/136));
          }else{
              clearInterval(number1);
          }
      },10)         

      
    })
              
    
    
     
    
    
    
   
    

})