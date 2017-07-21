
        if($(window).width()<=993){
            $(".features-box").css("border-right","none");
            $(".features-box").css("text-align","center");
            $("#seperator").hide();
        }
        $(window).resize(function() {
            if($(window).width()>993){
                $(".features-box").css("border-right","1px solid #DEDEDE");   
                 $(".features-box").css("border-right","1px solid #DEDEDE");   
                $("#last-f-box").css("border-right","none");
                $(".features-box").css("text-align","right");
                $("#seperator").show();
            }
            if($(window).width()<=993){
                $(".features-box").css("border-right","none");   
                $(".features-box").css("text-align","center");
                $("#seperator").hide();
            }
        });
        
        $(document).ready(function(){
            // Activate Carousel
          
            /*
            $("#myCarousel").on('slid.bs.carousel', function () {
                if($('#slide1').hasClass('active'))
                {
                    console.log('hello');
                        $('#ind3').removeClass('box2');
                        $('#ind2').removeClass('box');
                        $('#ind1').removeClass('box');
                        $('#ind1').addClass('box2');
                        $('#ind2').addClass('box');
                        $('#ind3').addClass('box');
                }
                else if($('#slide2').hasClass('active'))
                {
                    $('#ind1').removeClass('box2');
                        $('#ind2').removeClass('box');
                        $('#ind3').removeClass('box');
                        $('#ind2').addClass('box2');
                        $('#ind3').addClass('box');
                        $('#ind1').addClass('box');
                }
                else if($('#slide3').hasClass('active'))
                {
                    $('#ind2').removeClass('box2');
                        $('#ind3').removeClass('box');
                        $('#ind1').removeClass('box');
                        $('#ind3').addClass('box2');
                        $('#ind2').addClass('box');
                        $('#ind1').addClass('box');
                }
            });
            $('#ind1').mouseenter(function(){
               if($('#slide2').hasClass('active'))
               {
                   $("#myCarousel").carousel("prev");
                   $('#ind2').removeClass('box2');
                   $('#ind2').addClass('box');
               }
               else
               {
                   $("#myCarousel").carousel("next");
               }
            });
            $('#ind2').mouseenter(function(){
               if($('#slide3').hasClass('active'))
               {
                   $("#myCarousel").carousel("prev");
                   $('#ind3').removeClass('box2');
                   $('#ind3').addClass('box');
               }
               else
               {
                   $("#myCarousel").carousel("next");
               }
            });
            $('#ind3').mouseenter(function(){
               if($('#slide3').hasClass('active'))
               {
                   $("#myCarousel").carousel("prev");
                   $('#ind1').removeClass('box2');
                   $('#ind1').addClass('box');
               }
               else
               {
                   $("#myCarousel").carousel("next");
               }
            });
            */
            $(document).scroll(function() {
              
               if(window.innerWidth>991)
               {
                    var y = $(this).scrollTop();
                    if (y > 150) {
                      $('.header-fixed').fadeIn();
                    } else {
                      $('.header-fixed').fadeOut();
                       $('#product-search').css('top','110px');
                    }
                   if(y>350)
                   {
                       $('.backtotop').fadeIn();
                   }
                   else
                   {
                       $('.backtotop').fadeOut();
                   }
               }
            });
            
            $('#myCarousel1').carousel({
              interval: false
            })
            
            $('#myCarousel2').carousel({
              interval: false
            })
            
            $('#myCarousel3').carousel({
              interval: false
            })
            
            $('#myCarousel4').carousel({
              interval: false
            })
            $('#myCarousel5').carousel({
              interval: false
            })

            $('.carousel1 .item').each(function(){
                
              var next = $(this).next();
                
              if (!next.length) {
                next = $(this).siblings(':first');
              }
              next.children(':first-child').clone().appendTo($(this));
                
              for (var i=0;i<4;i++) {
                next=next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
              }
            });
            
            
            $('body').scrollspy({target: "#backtotop", offset: 50});
                // Add smooth scrolling on all links inside the navbar
              $("#backtotop a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                }  // End if
              });
            
            
            $('body').on('click', '.addbtn', function() {
                $(this).parent().children('.addbtn').css('display','none');
                $(this).parent().children('.qmang').children('.qval').text("1");
                $(this).parent().children('.qmang').css('display','block');
            });
            $('body').on('click', '.fa-minus', function() {
                var m = $(this).parent().children('.qval').text();
                m--;
                if(m===0)
                {
                    $(this).parent().parent().children('.qmang').css('display','none');
                    $(this).parent().parent().children('.addbtn').css('display','block');
                }
                else{
                    
                    $(this).parent().children('.qval').text(m);
                }
            });
            $('body').on('click', '.fa-plus', function() {
                var m = $(this).parent().children('.qval').text();
                m++;
                $(this).parent().children('.qval').text(m);
            });
            
            $('#message').click(function(){
                $('#message').css('display','none');
                $('#contactform').css('display','block');
            });
            
            $('#cclose').click(function(){
                $('#contactform').css('display','none');
                $('#message').css('display','block');
            });
            
        });