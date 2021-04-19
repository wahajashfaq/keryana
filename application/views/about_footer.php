<div id="backtotop" class="container-fluid">
  <a href="#top">
    <div class="backtotop"></div>
  </a>
</div>

<div class="product-search-container" id="product-search">

  <div class="row">
    <div class="col-md-12">
      <i class="fa fa-times-circle" id="sclose" aria-hidden="true" style="float:right;color:#A1DB09;margin-top:5px;font-size:25px"></i>
    </div>
  </div>
  <div class="row">
    <div class="col-md-5 col-sm-4 col-xs-3" style="padding-right:0px;padding-top:15px">
      <div class="hline"></div>
      <div class="hline" style="margin-top:2px"></div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6" style="padding-right:0px;padding-left:0px">
      <div class="line-head">
        <center>SEARCH<span> RESULTS</span></center>
      </div>
    </div>
    <div class="col-md-5 col-sm-4 col-xs-3" style="padding-left:0px;padding-top:15px">
      <div class="hline"></div>
      <div class="hline" style="margin-top:2px"></div>
    </div>
  </div>

  <br><br>
  <br>
  <div id="search_result">

  </div>

</div>

<div id="message" class="container-fluid xs-hidden" onclick="contactme()">
  <div class="message"><i class="fa fa-comment" aria-hidden="true"></i><span class="messagetext">Contact Us</span></div>
</div>

<div id="contactform" class="container-fluid">
  <div class="contactform">
    <div class="row">
      <div class="col-md-12">
        <div class="" style="float:left">Contact Us</div>
        <div style="float:right"><i id="cclose" class="fa fa-times-circle" style="float:right" aria-hidden="true"></i></div>
      </div>
    </div><br>
    <div class="contact-div">

      <div class="row">
        <div class="col-md-12">
          <center><input type="email" id="contact_email" class="input-lg cinput" placeholder="Email"></center>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12">
          <center><input type="number" id="contact_number" class="input-lg cinput" placeholder="Phone number"></center>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12">
          <center><input type="text" id="contact_subject" class="input-lg cinput" placeholder="subject"></center>
        </div>
      </div><br>

      <div class="row">
        <div class="col-md-12">
          <center><textarea class="input-lg cinput" id="contact_query" placeholder="State Your Query"></textarea></center>
        </div>
      </div>
      <br>


      <div class="row">
        <div class="col-md-12">
          <center><button id="contact_btn" onclick="contactUS(this)" class="btn-lg sbtn">Submit</button></center>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="mobilecart" class="dhidden">
  <div id="mcart">
    <?php include('mobile_cart.php') ?>
  </div>
</div>

<footer>
  <div class="container-fluid" id="footer-features">
    <div class="container">
      <div class="row">
        <div classs="col-md-12">
          <center>
            <h4 style="color:#333;font-weight:900;">How To Order ?</h4>
          </center>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 features-box">
          <img src="<?php echo base_url('assets/images/footer1.jpg') ?>" style="width:50px;height:auto">
          <span>1 Add Required Products to Your Cart</span>
        </div>
        <div class="col-md-3 features-box">
          <img src="<?php echo base_url('assets/images/footer2.jpg') ?>" style="width:50px;height:auto">
          <span>2 Proceed to Checkout Page </span>
        </div>
        <div class="col-md-3 features-box">
          <img src="<?php echo base_url('assets/images/footer3.jpg') ?>" style="width:50px;height:auto">
          <span>3 Provide Address & Contact Checkout Form</span>
        </div>
        <div class="col-md-3 features-box" id="last-f-box" style="border-right:none">
          <img src="<?php echo base_url('assets/images/footer4.jpg') ?>" style="width:50px;height:auto">
          <span>4 FREE Delivery in Lahore *Order of Rs. 499 and above</span>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" id="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2 col-xs-6 col-sm-6">
          <p class="top-title"> keryana.com</p>
          <div class="top-links">
            <p> <a href="<?php echo base_url('welcome/about') ?>">About Us</a><br>
              <a id="message" onclick="contactme();">Contact Us</a><br>
              <a href="<?php echo base_url('welcome/FAQs') ?>">FAQ</a><br>
            </p>
          </div>
        </div>
        <div class="col-md-2 col-xs-6 col-sm-6">
          <p class="top-title"> OUR POLICIES</p>
          <div class="top-links">
            <p> <a href="<?php echo base_url('welcome/TermAndConditions') ?>">Terms and Conditions</a><br>
              <a href="<?php echo base_url('welcome/PrivacyPolicy') ?>">Privacy Policy</a><br>
              <a href="<?php echo base_url('welcome/ReturnPolicy') ?>">Return Policy</a><br>
              <a href="<?php echo base_url('welcome/DeliveryPolicy') ?>">Delivering Policy</a>
            </p>
          </div>
        </div>
        <div class="col-md-2 col-xs-6 col-sm-6">
          <p class="top-title"> NEWS AND MEDIA</p>
          <div class="top-links">
            <p> <a href="">Our Coupon</a><br>
              <a href="<?php echo base_url('welcome/Whatsapp') ?>">Order On Whatsapp</a>
            </p>
          </div>
        </div>
        <div class="col-md-5 col-xs-6 col-sm-6">
          <p class="nletter">NEWS LETTER SIGNUP</p>
          <div id="seperator"></div>
          <div>
            <input class="email-box" type="email" placeholder="Email Address" style="max-width:100%"><br>
            <input class="subscribe" type="button" value="Subscribe"><br>
            <p class="aval">Coming soon On</p>
            <a><img class="playstore" style="max-width:100%" src="<?php echo base_url('assets/images/playstore.png') ?>"></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" id="footer-bottom1">
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
        <a target="_blank" href="https://www.facebook.com/keryana.comm/?ref=br_rs" class="social-media"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
        <a href="" class="social-media"><i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></a>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
  <div class="container-fluid" id="footer-bottom2">
    <div class="container">
      <p>Copyright©2017.Keryana.com All rights reserved</p>
    </div>
  </div>
</footer>

</body>
<script>
  console.log("hey wahaj");
  var height = $(window).height();
  height = height;
  height = height + "px";
  $("#mobilecart").css("height", height);
  var height = $(window).height();
  height = height - 120;
  height = height + "px";
  //$(".mobilecart-contain").css("height",height);
  $("<style>.mobilecart-contain {overflow-x:hidden !important;overflow-y:scroll;-webkit-overflow-scrolling: touch;height:" + height + "}</style>").appendTo("head");
  height = $(window).height();
  height = height - 100;
  height = height + "px";
  $(".sidenavcon").css("height", height);

  function qminus(e) {
    var m = $(e).parent().children('.qval').text();
    m--;
    if (m === 0) {
      // $(this).parent().parent().children('.qmang').css('display','none');
      // $(this).parent().parent().children('.addbtn').css('display','block');
    } else if (m < 0) {

    } else {

      $(e).parent().children('.qval').text(m);
    }
  }

  function qplus(e) {
    var m = $(e).parent().children('.qval').text();
    m++;
    $(e).parent().children('.qval').text(m);
  }

  function openNav() {
    if (document.getElementById("mySidenav").style.width == "0px") {
      document.getElementById("mySidenav").style.width = "250px";
      $('#mySidenav').css('border-width', '1px');
      $('body').css('overflow-y', 'hidden');
      $('body').addClass("mobile-cart-open");
    } else {
      document.getElementById("mySidenav").style.width = "0px";
      $('#mySidenav').css('border-width', '0px');
      $('body').css('overflow-y', 'auto');
      $('body').removeClass("mobile-cart-open");
    }
  }

  function contactme() {
    $('#message1').css('display', 'none');
    $('#contactform').css('display', 'block');
  }

  function opendiv(id, element) {
    console.log(id);
    if ($('.' + id).css('display') === 'none') {
      console.log('wahaj');
      $('.' + id).css('display', 'block');
      $(element).removeClass("fa-plus");
      $(element).addClass("fa-minus");
    } else {
      $('.' + id).css('display', 'none');
      $(element).removeClass("fa-minus");
      $(element).addClass("fa-plus");
    }
  }

  function mobilecart() {
    console.log($("#mobilecart").css("display"));
    /*
    if($("#mobilecart").css("display")==='none'){
        $("#mobilecart").css("display","block");
        $("body").addClass("mobile-cart-open");
    }
    else{
        $("#mobilecart").css("display","none");
        $('body').css("overflow","auto");
        $("body").removeClass("mobile-cart-open");
    }
    */
    $("#mobilecart").slideToggle(800, function() {

      if ($("#mobilecart").css("display") === 'block') {
        $("body").addClass("mobile-cart-open");
      } else {
        $("body").removeClass("mobile-cart-open");
      }
    });
  }
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  $(window).resize(function() {
    if ($(window).width() > 993) {
      $(".features-box").css("border-right", "1px solid #DEDEDE");
      $("#last-f-box").css("border-right", "none");
      $(".features-box").css("text-align", "right");
      $("#seperator").show();
    }
    if ($(window).width() <= 993) {
      $(".features-box").css("border-right", "none");
      $(".features-box").css("text-align", "center");
      $("#seperator").hide();
    }
  });
  $(document).ready(function() {
    $(document).scroll(function() {

      if (window.innerWidth > 991) {
        var y = $(this).scrollTop();
        if (y > 150) {
          $('.header-fixed').fadeIn();
          $('#product-search').css('top', '60px');
        } else {
          $('.header-fixed').fadeOut();
          $('#product-search').css('top', '110px');
        }
        if (y > 350) {
          $('.backtotop').fadeIn();
        } else {
          $('.backtotop').fadeOut();
        }
      }


    });


    $('body').scrollspy({
      target: "#backtotop",
      offset: 50
    });
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
        }, 800, function() {

          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });


  });


  function searchProducts(keys) {
    $.ajaxSetup({
      // Disable caching of AJAX responses
      cache: false
    });

    var value = keys;
    if (value.length > 2) {
      console.log(value);
      jQuery.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>" + "/search",
        dataType: 'text',
        data: {
          myname: value
        },
        success: function(res) {

          if (res) {
            // Show Entered Value
            /*
            jQuery("div#result").show();
            jQuery("div#value").html(res.username);
            jQuery("div#value_pwd").html(res.pwd);
            */

            //alert(res);

            //$('#searchParent').remove();
            //$("#product-search").append(res);                 
            $('#search_result').html(res);
          }

        },
        beforeSend: function() {
          $(event).children().attr('src', "<?php echo base_url('assets/images/adding.gif'); ?>");
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
          alert(errorThrown);
        }
      });
      $('#product-search').css('display', 'block');
    } else {
      $('#searchParent').remove();
      $('#product-search').css('display', 'none');
    }
  }
</script>

<script type="text/javascript">
  // Ajax post

  function contactUS(e) {

    event.preventDefault();
    var contact_email = $("input#contact_email").val();
    var contact_number = $("input#contact_number").val();
    var contact_subject = $("input#contact_subject").val();
    var contact_query = $("textarea#contact_query").val();

    jQuery.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>" + "/ContactUs/contact_us",
      dataType: 'json',
      data: {
        c_email: contact_email,
        c_number: contact_number,
        c_subject: contact_subject,
        c_query: contact_query
      },
      success: function(res) {

        if (res) {
          // Show Entered Value
          /*
          jQuery("div#result").show();
          jQuery("div#value").html(res.username);
          jQuery("div#value_pwd").html(res.pwd);
          */

          alert(res);
          location.reload();
        }
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {

      }
    });

  }

  $(document).ready(function() {

    /*$("#contact_btn").click(function(event) {

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
                
                jQuery("div#result").show();
                jQuery("div#value").html(res.username);
                jQuery("div#value_pwd").html(res.pwd);
                

                alert(res);
            }
        }
    });
    }); */

    $('#cclose').click(function() {
      $('#contactform').css('display', 'none');
      $('#message1').css('display', 'block');
    });
    $('#sclose').click(function() {
      $('#product-search').css('display', 'none');
    });


  });
</script>
<script type=text/javascript src="https://cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.18/jquery.touchSwipe.js"></script>
<script>
  if ($(window).width() < 992)
    $(".carousel").swipe({

      swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

        if (direction == 'left') $(this).carousel('next');
        if (direction == 'right') $(this).carousel('prev');

      },
      allowPageScroll: "vertical"

    });
</script>
<script type="text/javascript" src="<?php echo base_url('assets/js/cart.js') ?>"></script>

<script type="text/javascript">
  function plus(e) {

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
        priceOfProduct: $price,
        UnitID: $unitid,
        quantityOfProduct: $quantity
      },
      success: function(res) {

        if (res) {
          // Show Entered Value
          /*
          jQuery("div#result").show();
          jQuery("div#value").html(res.username);
          jQuery("div#value_pwd").html(res.pwd);
          */

          //alert(res);
          $('.dropdown-content').html(res);
          //location.reload();
        }

      },
      beforeSend: function() {},
      error: function(XMLHttpRequest, textStatus, errorThrown) {

      }
    });

    //______________Mobile cart changes 


    jQuery.ajax({

      type: "POST",
      url: "<?php echo base_url(); ?>" + "/customer/Cart/m_updateQuantity",
      dataType: 'text',
      data: {
        priceOfProduct: $price,
        UnitID: $unitid,
        quantityOfProduct: $quantity
      },
      success: function(res) {

        if (res) {
          // Show Entered Value
          /*
          jQuery("div#result").show();
          jQuery("div#value").html(res.username);
          jQuery("div#value_pwd").html(res.pwd);
          */

          //alert(res);
          $('#mcart').html(res);
          //location.reload();
        }

      },
      beforeSend: function() {},
      error: function(XMLHttpRequest, textStatus, errorThrown) {

      }
    });

  }

  function minus(e) {

    $myOBJ = $(e).parent().children('.qval');
    $quantity = $myOBJ.html();
    $unitid = $($myOBJ).attr('id');
    $price = $($myOBJ).attr('data-price');
    $quantity--;

    //alert($('img#'+$unitid).attr('src'));

    if ($quantity > 0) {

      jQuery.ajax({

        type: "POST",
        url: "<?php echo base_url(); ?>" + "/customer/Cart/updateQuantity",
        dataType: 'text',
        data: {
          priceOfProduct: $price,
          UnitID: $unitid,
          quantityOfProduct: $quantity
        },
        success: function(res) {

          if (res) {
            // Show Entered Value
            /*
                    jQuery("div#result").show();
                    jQuery("div#value").html(res.username);
                    jQuery("div#value_pwd").html(res.pwd);
                    */

            //alert(res);
            $('.dropdown-content').html(res);
            //location.reload();
          }

        },
        beforeSend: function() {},
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
      });

    } else {

      jQuery.ajax({

        type: "POST",
        url: "<?php echo base_url(); ?>" + "/customer/Cart/deleteFromCart",
        dataType: 'text',
        data: {
          UnitID: $unitid
        },
        success: function(res) {

          if (res) {
            // Show Entered Value
            /*
              jQuery("div#result").show();
              jQuery("div#value").html(res.username);
              jQuery("div#value_pwd").html(res.pwd);
              */

            //alert(res);
            $('.dropdown-content').html(res);
            //location.reload();
          }

        },
        beforeSend: function() {},
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
      });

    }


    //________________Update for Cart

    if ($quantity > 0) {

      jQuery.ajax({

        type: "POST",
        url: "<?php echo base_url(); ?>" + "/customer/Cart/m_updateQuantity",
        dataType: 'text',
        data: {
          priceOfProduct: $price,
          UnitID: $unitid,
          quantityOfProduct: $quantity
        },
        success: function(res) {

          if (res) {
            // Show Entered Value
            /*
                    jQuery("div#result").show();
                    jQuery("div#value").html(res.username);
                    jQuery("div#value_pwd").html(res.pwd);
                    */

            //alert(res);
            $('#mcart').html(res);
            //location.reload();
          }

        },
        beforeSend: function() {},
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
      });

    } else {

      jQuery.ajax({

        type: "POST",
        url: "<?php echo base_url(); ?>" + "/customer/Cart/m_deleteFromCart",
        dataType: 'text',
        data: {
          UnitID: $unitid
        },
        success: function(res) {

          if (res) {
            // Show Entered Value
            /*
              jQuery("div#result").show();
              jQuery("div#value").html(res.username);
              jQuery("div#value_pwd").html(res.pwd);
              */

            //alert(res);
            $('#mcart').html(res);
            //mobilecart();
            //location.reload();
          }

        },
        beforeSend: function() {},
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
      });

    }

    //console.log($(e).parent().children('.qval').html());
  }




  function removeProduct(e) {

    $unitid = $(e).attr('id');
    //alert($unitid);
    //alert($('img#'+$unitid).attr('src'));


    jQuery.ajax({

      type: "POST",
      url: "<?php echo base_url(); ?>" + "/customer/Cart/deleteFromCart",
      dataType: 'text',
      data: {
        UnitID: $unitid
      },
      success: function(res) {

        if (res) {
          // Show Entered Value
          /*
              jQuery("div#result").show();
              jQuery("div#value").html(res.username);
              jQuery("div#value_pwd").html(res.pwd);
              */

          //alert(res);
          $('.dropdown-content').html(res);
          //location.reload();
        }

      },
      beforeSend: function() {},
      error: function(XMLHttpRequest, textStatus, errorThrown) {

      }
    });


    // _________________MObile cart changes
    jQuery.ajax({

      type: "POST",
      url: "<?php echo base_url(); ?>" + "/customer/Cart/m_deleteFromCart",
      dataType: 'text',
      data: {
        UnitID: $unitid
      },
      success: function(res) {

        if (res) {
          // Show Entered Value
          /*
              jQuery("div#result").show();
              jQuery("div#value").html(res.username);
              jQuery("div#value_pwd").html(res.pwd);
              */

          //alert(res);
          $('#mcart').html(res);
          //mobilecart();
          //location.reload();
        }

      },
      beforeSend: function() {},
      error: function(XMLHttpRequest, textStatus, errorThrown) {

      }
    });

    //console.log($(e).parent().children('.qval').html());
  }


  function setwidth() {
    var united = $(window).width();
    jQuery.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>" + "/welcome/widthset",
      dataType: 'text',
      data: {
        width: united
      },
      success: function(res) {

        if (res) {
          // Show Entered Value
          /*
              jQuery("div#result").show();
              jQuery("div#value").html(res.username);
              jQuery("div#value_pwd").html(res.pwd);
              */

          //alert(res);

        }

      },
      beforeSend: function() {},
      error: function(XMLHttpRequest, textStatus, errorThrown) {

      }
    });
  }
</script>
<script type="text/javascript">
  function testing(event, e) {

    $price = $('.new_arrivals_product#' + event).val();
    $percentage = $('.new_arrivals_product#' + event).find(':selected').attr('data-percentage');
    $discount = $('.new_arrivals_product#' + event).find(':selected').attr('data-discount');
    $('#' + event + '.new_arrivals_price').html($price);
    $('#' + event + '.new_arrivals_price').attr('data-percentage', $percentage);

    if ($discount > 0) {
      $('#' + event + '.new_arrivals_nprice').html($price - $discount);
      $('#' + event + '.new_arrivals_nprice').attr('data-discount', $discount);
    }
    var select = e.parentElement.parentElement.parentElement;
    //console.log(select);
    $price = $(select).find('.new_arrivals_product#' + event).val();
    $percentage = $(select).find('.new_arrivals_product#' + event).find(':selected').attr('data-percentage');
    $discount = $(select).find('.new_arrivals_product#' + event).find(':selected').attr('data-discount');
    $offer_type = $(select).find('.new_arrivals_product#' + event).find(':selected').attr('data-offertype');
    $offer_amount = $(select).find('.new_arrivals_product#' + event).find(':selected').attr('data-offeramount');
    $(select).find('#' + event + '.new_arrivals_price').html($price);
    $(select).find('#' + event + '.new_arrivals_price').attr('data-percentage', $percentage);
    $(select).find('#' + event + '.new_arrivals_nprice').html($price - $discount);
    $(select).find('#' + event + '.new_arrivals_price').attr('data-discount', $discount);
    //$(e).parent().closest('div').first().$('#'+event+'.new_arrivals_nprice').attr('data-discount',$discount);
    //$(e).parent().closest('div').first().$('#'+event+'.new_arrivals_price').html($price);
    //$(e).parent().closest('div').first().$('#'+event+'.new_arrivals_price').attr('data-percentage',$percentage)
    //  alert($('#'+event+'.new_arrivals_price').attr('data-percentage'));
    //   alert($('#'+event+'.new_arrivals_price').html());




    $(select).find('#' + event + '.rs_tag').html("Rs");
    if ($discount == 0) {
      $(select).find('#' + event + '.new_arrivals_nprice').html($price);
      $(select).find('#' + event + '.oprice').css("display", "none");
    }

    if ($offer_type == "Amount") {
      $(select).find('#' + event + '.oprice').css("display", "inline-block");

      $(e.parentElement.parentElement).find('.offer_tag').html("<div class='discount' style='margin-left:10px'><center>Rs " + $offer_amount + "<span> OFF</span></center></div><br><br>");
      $(e.parentElement.parentElement).find('.offer_tag').css("height", "40px");

    } else if ($offer_type == "Percent") {
      $(select).find('#' + event + '.oprice').css("display", "inline-block");

      $(e.parentElement.parentElement).find('.offer_tag').html("<div class='discount' style='margin-left:10px'><center>" + $offer_amount + " %<br> <span>OFF</span></center></div><br><br>");
      $(e.parentElement.parentElement).find('.offer_tag').css("height", "40px");

    } else {
      $(select).find('#' + event + '.rs_tag').html(" ");

      $(e.parentElement.parentElement).find('.offer_tag').html(" ");
      $(e.parentElement.parentElement).find('.offer_tag').css("height", "60px");
    }

  }

  function add_data(product_ID, event) {

    $(document).ready(function() {
      console.log('i am here');
      $price = $('#' + product_ID + '.new_arrivals_price').html();
      $quantity = $('#' + product_ID + '.new_arrivals_quantity').html();
      $percentage = $('#' + product_ID + '.new_arrivals_price').attr('data-percentage');
      $discount = $('#' + product_ID + '.new_arrivals_price').attr('data-discount');
      //alert($discount);

      //console.log("Price =>"+$price+"  AND  ID =>"+$percentage);
      //  alert($quantity);

      jQuery.ajax({

        type: "POST",
        url: "<?php echo base_url(); ?>" + "/customer/Cart/AddToCart",
        dataType: 'text',
        data: {
          priceOfProduct: $price,
          UnitID: $percentage,
          quantityOfProduct: $quantity,
          discount: $discount
        },
        success: function(res) {

          if (res) {
            // Show Entered Value
            /*
            jQuery("div#result").show();
            jQuery("div#value").html(res.username);
            jQuery("div#value_pwd").html(res.pwd);
            */

            //alert(res);
            $(event).children().attr('src', "<?php echo base_url('assets/images/addbicon.png'); ?>");
            $('.dropdown-content').html(res);
            $(event).children("span").text("Added");
            $(event).attr('disable', "true");
          }

        },
        beforeSend: function() {
          $(event).children().attr('src', "<?php echo base_url('assets/images/adding.gif'); ?>");
          $(event).attr('disable', "true");
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {

        }
      });


    });



    jQuery.ajax({

      type: "POST",
      url: "<?php echo base_url(); ?>" + "/customer/Cart/m_AddToCart",
      dataType: 'text',
      success: function(res) {

        if (res) {
          // Show Entered Value
          /*
          jQuery("div#result").show();
          jQuery("div#value").html(res.username);
          jQuery("div#value_pwd").html(res.pwd);
          */

          //alert(res);
          $(event).children().attr('src', "<?php echo base_url('assets/images/addbicon.png'); ?>");
          $('#mcart').html(res);
          $(event).children("span").text("Added");
          $(event).attr('disable', "true");
          // mobilecart();
          console.log("123456");
          var mcount = "<?php $this->load->library('session');
                        if (is_array($this->session->userdata('"My_Cart"'))) echo count($this->session->userdata('"My_Cart"'));
                        else echo 0; ?>";
          $('#mcartcount').html('');

        }

      },
      beforeSend: function() {
        $(event).children().attr('src', "<?php echo base_url('assets/images/adding.gif'); ?>");
        $(event).attr('disable', "true");
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {

      }
    });


  }
</script>

</html>