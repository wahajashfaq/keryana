
        <footer>
        <div class = "container-fluid" id ="footer-features">
            <div class = "container">
                <div class = "row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2 features-box">
                        <img src="<?php echo base_url('assets/images/footfeat_1.png') ?>">
                        <span>SAFE & SECURED PAYMENTS</span>
                    </div>
                    <div class="col-md-2 features-box">
                        <img src="<?php echo base_url('assets/images/footfeat_2.png')?>">
                        <span>DELIVERY WITHIN 24 HOURS FROM 7 AM TO 9 PM</span>
                    </div>
                    <div class="col-md-2 features-box">
                        <img src="<?php echo base_url('assets/images/footfeat_3.png')?>">
                        <span>NO QUESTION ASKED RETURN POLICY</span>
                    </div>
                    <div class="col-md-2 features-box">
                        <img src="<?php echo base_url('assets/images/footfeat_4.png')?>">
                        <span>BEST PRICES & BEST SERVICES</span>
                    </div>
                    <div class="col-md-2 features-box" id="last-f-box" style="border-right:none">
                        <img src="<?php echo base_url('assets/images/footfeat_5.png')?>">
                        <span>THE HIGHEST PRODUCT QUALITY</span>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid" id="footer-top">
            <div class = "container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <p class ="top-title"> ABOUT US</p>
                        <div class ="top-links">
                            <p> <a href="">About Us</a><br>
                                <a href="">Why Bazaarcart</a><br>
                                <a href="">Our-Story</a><br>
                                <a href="">Contact Us</a><br>
                                <a href="">FAQ</a><br>
                                <a href="">Sell With Us</a></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p class ="top-title"> OUR POLICIES</p>
                        <div class ="top-links">
                            <p> <a href="">Terms and Conditions</a><br>
                                <a href="">Privacy Policy</a><br>
                                <a href="">Shipping Policy</a><br>
                                <a href="">Return Policy</a></p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <p class ="top-title"> NEWS AND MEDIA</p>
                        <div class ="top-links">
                            <p> <a href="">Press</a><br>
                                <a href="">Sitemap</a><br>
                                <a href="">Shop by brand</a><br>
                                <a href="">Our Coupon Partners</a><br>
                                <a href="">Society Registerations</a><br>
                                <a href="">Product Enquiry/Suggestion</a></p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <p class="nletter">NEWS LETTER SIGNUP</p>
                        <div id = "seperator"></div>
                        <div>
                            <input class="email-box" type ="email" placeholder="Email Address"><br>
                            <input class="subscribe" type ="button" value="Subscribe"><br>
                            <p class = "aval">Available On</p>
                            <a><img class ="playstore" src ="<?php echo base_url('assets/images/playstore.png')?>"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid" id = "footer-bottom1">
            <div class="container" id="bottom-container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4" id="payment">
                        <center>Payment Method</center>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <center>
                        <a href=""><i class="fa fa-money" id="cod" aria-hidden="true"></i><span style="color:#333;font-weight:900;margin-left:5px">Cash On Delivery</span></a>
                        </center>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 contact">
                        Contact Us
                    </div>
                    <div class="col-md-4"></div>
                </div>
                     <div class="col-md-4"></div>
                    <div class="col-md-4 social-media-icons">
                        <a href="" class ="social-media"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
                        <a href="" class ="social-media"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
                        <a href="" class ="social-media"><i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-4"></div>
            </div>
        </div>
        <div class="container-fluid" id="footer-bottom2">
            <div class="container">
               <p>Copyright©2016.Bazaarcart.com All rights reserved</p>
            </div>
        </div>   
    </footer>
        
    </body>
    <script>
        if($(window).width()<=993){
            $(".features-box").css("border-right","none");
            $(".features-box").css("text-align","center");
            $("#seperator").hide();
        }
        $(window).resize(function() {
            if($(window).width()>993){
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
            $(document).scroll(function() {
              
               if(window.innerWidth>991)
               {
                    var y = $(this).scrollTop();
                    if (y > 150) {
                      $('.header-fixed').fadeIn();
                       $('#product-search').css('top','60px');
                        console.log('hello');
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

            
        });
    </script>


    <script type="text/javascript" src="<?php echo base_url('assets/js/cart.js') ?>"></script>
    

    
</html>