<?php include('customer/home_header.php') ?>

<div class="container" style="padding-bottom:30px;">
  <div class="row xs-hidden">
    <div class="col-md-3">
      <a href="<?php echo base_url() ?>">
        <img src="<?php echo base_url('assets/images/mylogo.jpg')?>" alt="logo" style="width:250px;height:63px">
      </a>
    </div>
    <div class="col-md-6">
      <form class="">
        <div class="search-box">
          <input onclick="" type="text" name="q" value="" placeholder="Search for a Brand, Product or Specific Item" class="search">
        </div>
      </form>    
    </div>
    <div class="col-md-3" style="overflow-x: visible;">
            <!-- div class="div-welc1">
                <div class="welc">Welcome Guest</div>
                    <div class="customer-links">
                        <a href="<?php echo base_url('signup') ?>">
                            Login
                        <span class="or">|</span>
                        Signup
                    </a>    
                    </div>
                  </div -->
                  <!-- <div class="dropdown" style="float:right;">
                    <button class="dropbtn div-welc2">
                      <center><img src="<?php echo base_url('assets/images/carticon.png')?>
                  
                        " class="cart"><span class="first">Your Cart</span>
                        <div class="count-group"><span class="second">0</span><span class="second"> items</span></div></center>
                      </button>
                      <div id="dropdown-content" class="dropdown-content">
                        <p>It apears that your cart is currently empty!</p><br>
                        <a class="cbtn">CONTINUE SHOPPING</a>
                      </div>
                    </div> -->
                  </div>    
                </div>

                <div class="row" style="padding-top:20px">
                  <div class="col-md-3 xs-hidden" style="padding-right:0px;">
                    <div class="sidebarhead dropdownf" style="border-width:1px;border:1px solid #96C658;padding-top:0px;width:100%;height:40px;padding-bottom:0px">
                      <button class="dropbtnf" style="border:none;background:none;width:100%;padding-left:0px;height:40px"><span style="font-weight:900">Racks</span> <img src="<?php echo base_url('assets/images/shopicon.png')?>" style="float:right;margin-top: 6px;"></button>
                      <ul class="shoplinks xs-hidden dropdown-contentf" style="width:100%;top:50px">

                        <?php $count = 0;
                        foreach ($categories as $category){?>


                          <li>
                           <div class="dropleft">
                             <a style="color:black;" href="<?php echo base_url('welcome/category/First/'.$category["EncryptedId"]) ?>" >
                               <span class="text"><?php echo $category["Name"]; ?></span><i class="fa fa-caret fa-caret-right" style="float:right"></i></a>
                               <div class="dropleft-content" style="top:<?php echo $count*-33;$count++; ?>px;">
                                 <div class="container-fluid">
                                   <div class="row">
                                     <?php foreach ($category["SUB CATEGORIES"] as $category2){?>
                                       <div class="col-md-3">
                                         <a href="<?php echo base_url('welcome/category/Second/'.$category2["EncryptedId"]) ?>" >
                                           <div class="head"><?php echo $category2["Name"]; ?></div></a>

                                           <?php foreach ($category2["SUB CATEGORIES"] as $category4){?>
                                             <a href="<?php echo base_url('welcome/category/Third/'.$category4["EncryptedId"]) ?>" ><div class="item"><?php echo $category4["Name"]; ?></div></a>

                                             <?php } ?>

                                           </div>
                                           <?php } ?>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                                 </li>
                                 <?php } ?>
                               </ul>
                             </div>
                           </div>

                           <div class="col-md-9 col-slidemain" >
                            <div class="row">
                              <div class="col-md-12">
                                <div class="midlehead  xs-hidden">
                       <!--a id="m4" style="float:right">
                                <span class="mitem" ><i class="fa fa-book" aria-hidden="true" style="font-size:25px;color:#A1DB0C"></i><span class="mitem2">Recipie Blog</span></span>
                              </a-->
                            </div>
                          </div>
                        </div>
                      </div>    
                    </div>
                    <div id="ViewCartContent">
                      <div class="row cart-row">
                        <div class="col-md-12" style="padding-left:30px;padding-right:30px;">
                          <br>
                  <div class="cartfhead" style="float:left">Your Cart <span>(<?php if(!$CartProducts){echo 0;}else echo count($CartProducts) ?> items)</span></div><!-- 
                  <div style="float:right;margin-top:-20px">
                    <img src="<?php echo base_url('assets/images/cartfilled.png') ?>" class="cart"><span >Your Saved</span>
                    <div class="count-group"><span style="color:#96C658;font-weight:700">Rs </span><span style="color:#96C658;font-weight:700" id="saved_amount"> 0</span></div>
                  </div> -->
                </div>
              </div>
              <div class="row">

                <div class="col-md-12 xs-hidden" style="overflow-x:auto">
                  <table class="table table-bordered" >

                    <?php $items=1; if ($CartProducts){ ?>

                      <thead>
                        <tr>
                          <th><center>Sr #</center></th>
                          <th><center>Product Name</center></th>
                          <th><center>Unit</center></th>
                          <th><center>Quantity</center></th>
                          <th><center>Price / Unit</center></th>
                          <th><center>Discount</center></th>
                          <th><center>Total</center></th>
                          <th><center>Remove</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php

                        $totalDiscount = 0;
                        $subTotal = 0;

                        foreach ($CartProducts as $row): ?>

                          <?php 

                        $totalDiscount = $totalDiscount+($row["Discount"]*$row["Quantity"]);
                        $subTotal =$subTotal+ $row["Price"]*$row["Quantity"];


                        ?>


                        <tr>
                          <td><center><?php echo $items++; ?></center></td>
                          <td>
                            <center><img  id="<?php echo $row["ProductID"] ?>" src="<?php echo base_url('uploads/product_images/'.$row["Image"]) ?>"  style="max-width:120px;height:auto">
                              <div><?php echo $row["Name"] ?></div>
                            </center>
                          </td>
                          <td>
                            <center><div class="qfix" style="float:none;"><?php echo $row["Unit"] ?></div></center>
                          </td>
                          <td>
                            <center><div class="qmang" style="display:block;margin-top:10px"><i class="fa fa-minus" onclick="cart_minus(this)" aria-hidden="true"></i><span class="qval" data-price="<?php echo $row["Price"] ?>" id="<?php echo $row["ProductID"] ?>"><?php echo $row["Quantity"];?></span><i onclick="cart_plus(this)" class="fa fa-plus" aria-hidden="true"></i></div></center>
                          </td>
                          <td><center>Rs <?php echo $row["Price"]; ?></center></td>
                          <td><center>Rs <?php echo $row["Discount"]*$row["Quantity"]; ?></center></td>
                          <td><center>Rs <?php echo ($row["Price"]*$row["Quantity"])-$row["Discount"]; ?></center></td>
                          <td><center><i  onclick="cart_removeProduct(this);" id="<?php echo $row["ProductID"] ?>"  class="fa fa-trash-o" aria-hidden="true" style="font-size:20px;color:#A1DB09;"></i></center></td>
                        </tr>

                      <?php endforeach ?>
                      <tr>
                        <th colspan="4"><center>Sub Total</center></th>
                        <td colspan="4"><center>Rs <?php echo $subTotal ?></center></td>
                      </tr>
                      <tr>
                        <th colspan="4"><center>Total Discount</center></th>
                        <td colspan="4"><center>Rs <?php echo $totalDiscount ?></center></td>
                      </tr>
                      <tr>
                        <th colspan="4"><center>Delivery Charges</center></th>
                        <td colspan="4"><center><?php 
                          if(($subTotal-$totalDiscount)>499){
                            echo "Free";
                          }else{
                            echo "50";
                            $subTotal = $subTotal + 50;
                          }

                          ?></center></td>
                        </tr>
                        <tr>
                          <th colspan="4"><center>Total</center></th>
                          <td colspan="4"><center>Rs <?php echo $subTotal-$totalDiscount; ?></center></td>
                        </tr>
                      </tbody>

                      <?php } else echo"<center><h4>Your Cart Is Empty</h4></center>"?>

                    </table>
                  </div>
                </div>
              </div>
<!--              <div class="dhidden">
                  <hr>
                      <div class="row">
                      <div class="col-md-12">
                        <div style="float:left">
                          <div style="float:left">
                            <img class="pimg" style="max-height: 100px;width: :auto;max-width: : 100px; " src="http://keryana.almaalikassociates.com/uploads/product_images/864.png">
                          </div>
                          <div style="float:right">
                            <center>
                             <div style="margin-top:20px;color:">Brite Detergent</div>
                             <div class="qmang" style="display:block;margin-top:10px"><i class="fa fa-minus" onclick="minus(this)" aria-hidden="true"></i><span class="qval" data-price="225" id="1235">5</span><i onclick="plus(this)" class="fa fa-plus" aria-hidden="true"></i></div>
                           </center>
                         </div>
                       </div>
                       <div style="float:right">
                        <div style="float:left">
                          <center>
                            <div class="qfix" style="margin-top:20px;">1 kg</div>
                            <div style="margin-top:10px;color: #313131">Rs 225</div>
                          </center>
                        </div>
                        <div class = "mobdel" style="float:right;margin-right:10px">
                          <i id="1235" onclick="removeProduct(this);" class="fa fa-times-circle" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                   <div class="row">
                            <div class="col-md-12">
                                <div style="float:left">
                                    <div style="float:left">
                                        <img class="pimg" style="max-height: 100px;width: :auto;max-width: : 100px; " src="http://keryana.almaalikassociates.com/uploads/product_images/867.png">
                                    </div>
                                    <div style="float:right">
                                        <center>
                                       <div style="margin-top:20px;color:">Bonus TriStar</div>
                                        <div class="qmang" style="display:block;margin-top:10px"><i class="fa fa-minus" onclick="minus(this)" aria-hidden="true"></i><span class="qval" data-price="90" id="1246">1</span><i onclick="plus(this)" class="fa fa-plus" aria-hidden="true"></i></div>
                                        </center>
                                    </div>
                                </div>
                                <div style="float:right">
                                    <div style="float:left">
                                        <center>
                                        <div class="qfix" style="margin-top:20px;">1 kg</div>
                                        <div style="margin-top:10px;color: #313131">Rs 90</div>
                                        </center>
                                    </div>
                                    <div class = "mobdel" style="float:right;margin-right:10px">
                                        <i id="1246" onclick="removeProduct(this);" class="fa fa-times-circle" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <hr>
                     <hr>
                     <div class="row">
                            <div class="col-md-12" style="padding-left:30px;padding-right:40px">
                                <div style="float:left;font-weight:600">Sub Total</div><div style="float:right">Rs 1215</div>
                                <br>
                                <div style="float:left;font-weight:600">Discount</div><div style="float:right">Rs 24.3</div>
                                <br>
                                <div style="float:left;font-weight:600">Delivery Charges</div><div style="float:right">Free</div>
                                <br>
                                <div style="float:left;font-weight:600">Total</div><div style="float:right">Rs 1190.7</div>
                                <br>
                            </div>
                    </div>
              </div>-->


              <div class="row">
                <div class="col-md-10"></div>
                <div class="col-md-2 save">
                  <a href="<?php echo base_url('customer/checkout') ?>"><button class="subscribe btn-block">Checkout</button></a>
                </div>
              </div>
            </div>

          </div>

          <?php $this->load->view('about_footer.php'); ?>        
          <script type="text/javascript">

            $(document).ready(function(){

              $('#saved_amount').html('<?php echo $totalDiscount ?>');
            });


            function cart_plus(e){

              $myOBJ = $(e).parent().children('.qval');
              $quantity = $myOBJ.html();
              $unitid = $($myOBJ).attr('id');
              $price = $($myOBJ).attr('data-price');
              $quantity++;

  //      console.log($(e).parent().children('.qval').html());

  
  jQuery.ajax({

    type: "POST",
    url: "<?php echo base_url(); ?>" + "/customer/Cart/updateCartQuantity",
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
                    $('#ViewCartContent').html(res);
                    //location.reload();
                  }

                },
                beforeSend : function()
                {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {

                }
              });

}

function cart_minus(e){

  $myOBJ = $(e).parent().children('.qval');
  $quantity = $myOBJ.html();
  $unitid = $($myOBJ).attr('id');
  $price = $($myOBJ).attr('data-price');
  $quantity--;

      //alert($('img#'+$unitid).attr('src'));

      if($quantity>0){

        jQuery.ajax({

          type: "POST",
          url: "<?php echo base_url(); ?>" + "/customer/Cart/updateCartQuantity",
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
                    $('#ViewCartContent').html(res);
                    //location.reload();
                  }

                },
                beforeSend : function()
                {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {

                }
              });

      }else {

        jQuery.ajax({

          type: "POST",
          url: "<?php echo base_url(); ?>" + "/customer/Cart/deleteCartFromCart",
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
              $('#ViewCartContent').html(res);
              //location.reload();
            }

          },
          beforeSend : function()
          {
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {

          }
        });

      }


      //console.log($(e).parent().children('.qval').html());
    }



    function cart_removeProduct(e){

    $unitid = $(e).attr('id');
    //alert($unitid);
      //alert($('img#'+$unitid).attr('src'));


          jQuery.ajax({

            type: "POST",
            url: "<?php echo base_url(); ?>" + "/customer/Cart/deleteCartFromCart",
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
              $('#ViewCartContent').html(res);
              //location.reload();
            }

          },
          beforeSend : function()
          {
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
            
          }
        });

      //console.log($(e).parent().children('.qval').html());
    }
  </script>
