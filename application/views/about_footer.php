
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
        $('#search').on('input', function() {
            $.ajaxSetup ({
            // Disable caching of AJAX responses
                cache: false
            });
           
            var value=$('#search').val();
            if(value.length>2)
            {
                console.log(value);
             jQuery.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>" + "/search",
              dataType: 'text',
              data: { name: value },
              success: function(res) {

                if (res)
                {
                    // Show Entered Value
                    /*
                    jQuery("div#result").show();
                    jQuery("div#value").html(res.username);
                    jQuery("div#value_pwd").html(res.pwd);
                    */

                    //alert(res);
                    $('#psearch').remove();
                    $("#product-search").append(res);
                  }

                },
                beforeSend : function()
                {
                  $(event).children().attr('src',"<?php echo base_url('assets/images/adding.gif');?>");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });
                $('#product-search').css('display','block');
            }
            else
            {
                $('#product-search').css('display','none');
            }
        });    
    </script>
    <script type="text/javascript">
// Ajax post
    $(document).ready(function() {
        $("#contact_btn").click(function(event) {

            event.preventDefault();
            var contact_email = $("input#contact_email").val();
            var contact_number = $("input#contact_number").val();
            var contact_subject = $("input#contact_subject").val();
            var contact_query = $("textarea#contact_query").val();
            jQuery.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>" + "/contactus/contact_us",
                dataType: 'json',
                data: { c_email: contact_email, 
                        c_number: contact_number,
                        c_subject : contact_subject,
                        c_query : contact_query
                },
                success: function(res) {

                    if (res)
                    {
                    // Show Entered Value
                    /*
                    jQuery("div#result").show();
                    jQuery("div#value").html(res.username);
                    jQuery("div#value_pwd").html(res.pwd);
                    */

                    alert(res);
                }
            }
        });
        });
        $('#message').click(function(){
                $('#message1').css('display','none');
                $('#contactform').css('display','block');
            });
            
            $('#cclose').click(function(){
                $('#contactform').css('display','none');
                $('#message1').css('display','block');
            });
            $('#sclose').click(function(){
                $('#product-search').css('display','none');
            });

    });
    
  
</script>

    <script type="text/javascript" src="<?php echo base_url('assets/js/cart.js') ?>"></script>

    <script type="text/javascript">
        


  function plus(e){

    $myOBJ = $(e).parent().children('.qval');
    $quantity = $myOBJ.html();
    $unitid = $($myOBJ).attr('id');
    $price = $($myOBJ).attr('data-price');
    $quantity++;

  //      console.log($(e).parent().children('.qval').html());

  
              jQuery.ajax({

                type: "POST",
                url: "<?php echo base_url(); ?>" + "/customer/Cart/updateQuantity",
                dataType: 'text',
                data: {
                  priceOfProduct : $price, 
                  UnitID : $unitid,
                  quantityOfProduct : $quantity
                },
                success: function(res) {

                  if (res)
                  {
                    // Show Entered Value
                    /*
                    jQuery("div#result").show();
                    jQuery("div#value").html(res.username);
                    jQuery("div#value_pwd").html(res.pwd);
                    */

                    //alert(res);
                    $('.dropdown-content').html(res);
                    location.reload();
                  }

                },
                beforeSend : function()
                {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });

}

function minus(e){

  $myOBJ = $(e).parent().children('.qval');
  $quantity = $myOBJ.html();
  $unitid = $($myOBJ).attr('id');
  $price = $($myOBJ).attr('data-price');
  $quantity--;

      //alert($('img#'+$unitid).attr('src'));


                jQuery.ajax({

                  type: "POST",
                  url: "<?php echo base_url(); ?>" + "/customer/Cart/updateQuantity",
                  dataType: 'text',
                  data: {
                    priceOfProduct : $price, 
                    UnitID : $unitid,
                    quantityOfProduct : $quantity
                  },
                  success: function(res) {

                    if (res)
                    {
                              // Show Entered Value
                              /*
                    jQuery("div#result").show();
                    jQuery("div#value").html(res.username);
                    jQuery("div#value_pwd").html(res.pwd);
                    */

                    //alert(res);
                    $('.dropdown-content').html(res);
                    location.reload();
                  }

                },
                beforeSend : function()
                {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });

      //console.log($(e).parent().children('.qval').html());
    }




    function removeProduct(e){

    $unitid = $(e).attr('id');
    alert($unitid);
      //alert($('img#'+$unitid).attr('src'));


          jQuery.ajax({

            type: "POST",
            url: "<?php echo base_url(); ?>" + "/customer/Cart/deleteFromCart",
            dataType: 'text',
            data: {
              UnitID : $unitid
            },
            success: function(res) {

              if (res)
              {
                        // Show Entered Value
                        /*
              jQuery("div#result").show();
              jQuery("div#value").html(res.username);
              jQuery("div#value_pwd").html(res.pwd);
              */

              //alert(res);
              $('#dropdown-content').html(res);
              location.reload();
            }

          },
          beforeSend : function()
          {
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            alert("some error");
          }
        });

      //console.log($(e).parent().children('.qval').html());
    }

    
    </script>
    
</html>