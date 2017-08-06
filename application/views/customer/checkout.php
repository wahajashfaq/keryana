<?php $this->load->view('customer/home_header'); ?>


<div class="container" style="padding-bottom:30px;">
  <div class="row">
    <div class="col-md-3">
      <img src="<?php echo base_url('assets/images/mylogo.jpg')?>" alt="logo" style="width:250px;height:63px">
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
                  <div class="dropdown" style="float:right;">
                    <button class="dropbtn div-welc2">
                      <center><img src="<?php echo base_url('assets/images/carticon.png')?>

                        " class="cart"><span class="first">Your Cart</span>
                        <div class="count-group"><span class="second">0</span><span class="second"> items</span></div></center>
                      </button>
                      <div class="dropdown-content">
                        <p>It apears that your cart is currently empty!</p><br>
                        <a class="cbtn">CONTINUE SHOPPING</a>
                      </div>
                    </div>
                  </div>    
                </div>

                <div class="row" style="padding-top:20px">
                  <div class="col-md-3 xs-hidden" style="padding-right:0px;">
                    <div class="sidebarhead dropdownf" style="border-width:1px;border:1px solid #96C658;padding-top:0px;width:100%;height:40px;padding-bottom:0px">
                      <button class="dropbtnf" style="border:none;background:none;width:100%;padding-left:0px;height:40px"><span style="font-weight:900">SHOP</span> <img src="<?php echo base_url('assets/images/shopicon.png')?>" style="float:right;margin-top: 6px;"></button>
                      <ul class="shoplinks xs-hidden dropdown-contentf" style="width:100%;top:50px">

                        <?php $count = 0;
                        foreach ($categories as $category){?>

                        <li>
                         <div class="dropleft">
                           <a style="color:black;" href="<?php echo base_url('welcome/category/First/'.$category["EncryptedId"]) ?>" target="blank">
                             <span class="text"><?php echo $category["Name"]; ?></span></a><i class="fa fa-caret fa-caret-right" style="float:right"></i>
                             <div class="dropleft-content"  style="top:<?php echo $count*-33;$count++; ?>px;">
                               <div class="container-fluid">
                                 <div class="row">
                                   <?php foreach ($category["SUB CATEGORIES"] as $category2){?>
                                   <div class="col-md-3">
                                     <a href="<?php echo base_url('welcome/category/Second/'.$category2["EncryptedId"]) ?>" target="blank"><div class="head"><?php echo $category2["Name"]; ?></div></a>

                                     <?php foreach ($category2["SUB CATEGORIES"] as $category4){?>
                                     <a href="<?php echo base_url('welcome/category/Third/'.$category4["EncryptedId"]) ?>" target="blank"><div class="item"><?php echo $category4["Name"]; ?></div></a>

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
                          <a id="m1">
                            <span class="mitem" ><img src="<?php echo base_url('assets/images/slider_top_link_1.png')?>" class="mitem1"><span class="mitem2">Daily Need Store</span></span>
                          </a>
                          <a  id="m2">
                            <span class="mitem" style="margin-left:20px"><img src="<?php echo base_url('assets/images/slider_top_link_2.png')?>" class="mitem1"><span class="mitem2">Special Offer</span></span>
                          </a>
                          <a  id="m3">
                            <span class="mitem"  style="margin-left:20px"><img src="<?php echo base_url('assets/images/slider_top_link_1.png')?>" class="mitem1"><span class="mitem2">New Arrival</span></span>
                          </a >
                          <a id="m4" style="float:right">
                            <span class="mitem" ><img src="<?php echo base_url('assets/images/slider_top_link_3.png')?>" class="mitem1"><span class="mitem2">Recipie Blog</span></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>    
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="pbox">
                      <div class="row">
                        <div class="col-md-12">
                          <span class="name">UPDATE CONTACT DETAILS:</span>
                        </div><br><br>
                      </div>
                      <form method="post" action="<?php echo base_url("customer/Profile/updateCheck"); ?>">

                        <div class="row">
                          <div class="col-md-5">
                            <span>City:</span><br><br>
                            <input type="text" name="city" class="form-control" value="<?php echo $PROFILE[0]["City"]?>" placeholder="Enter City:">
                          </div>
                          <div class="col-md-2"></div>
                          <div class="col-md-5">
                            <span>Phone #:</span><br><br>
                            <input type="text" name="contact_number"  value="<?php echo $PROFILE[0]["Mobile"]?>" class="form-control" placeholder="Enter Phone Number:">
                          </div>
                        </div><hr>
                        <div class="row">
                          <div class="col-md-5">
                            <span>Address Line 1:</span><br><br>
                            <input class="form-control" value="<?php echo $PROFILE[0]["Address"]?>" type="text" maxlength="50" name="address1" placeholder="Enter Adress Here:">
                          </div>
                          <div class="col-md-2"></div>
                          <div class="col-md-5">
                            <span>Address Line 2:</span><br><br>
                            <input class="form-control" name="address2" placeholder="Enter Adress Here:">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-5"></div>
                          <div class="col-md-2">
                            <br><input type="submit" class="subscribe btn-block" style="margin-left:0px;border-radius:3px" value="Save Changes">
                          </div>
                          <div class="col-md-5">
                          </div>
                        </div>
                      </form>
                    </div>   
                    <div class="pbox">
                      <?php

                      $totalDiscount = 0;
                      $subTotal = 0;

                      foreach ($CartProducts as $row){

                        $discount = 0;

                        if($row["OfferType"])  {
                          if($row["OfferType"]=="Amount"){

                            $discount = $row["OfferAmount"]*$row["Quantity"];


                          }else if($row["OfferType"]=="Percent"){

                            $discount = ($row["Price"]*$row["OfferAmount"]*0.01)*$row["Quantity"];
                          }
                        }

                          $totalDiscount = $totalDiscount+$discount;
                          $subTotal =$subTotal+ $row["Price"]*$row["Quantity"];

                          
                      } ?>



                      <div class="row">
                        <div class="col-md-12">
                          <span class="name">ORDER DETAILS:</span>
                        </div><br><br>
                      </div> 
                      <div class="row">
                        <div class="col-md-5">
                          <span style="color:#666">Sub Total</span>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                          <span>Rs <?php echo $subTotal ?></span>
                        </div>
                      </div><hr>
                      <div class="row">
                        <div class="col-md-5">
                          <span style="color:#666">Discount</span>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                          <span>Rs <?php echo $totalDiscount ?></span>
                        </div>
                      </div><hr>
                      <div class="row">
                        <div class="col-md-5">
                          <span style="color:#666">Delivery</span>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                          <span>free</span>
                        </div>
                      </div><hr>
                      <div class="row">
                        <div class="col-md-5">
                          <span style="color:#666">Total</span>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                          <span>Rs </span><span id="final_value"><?php echo  $subTotal-$totalDiscount; ?></span>
                        </div>
                      </div><hr>
                      <div class="row">
                        <div class="col-md-5">
                          <span style="color:#666">Loyalty Points (<?php echo $PROFILE[0]["LoyaltyPoints"]?>) </span>
                        </div>
                        <form method="post" action="<?php echo base_url('customer/checkout/confirmOrder') ?>">
                          <div class="col-md-2"></div>
                          <div class="col-md-5">
                            <div class="check">
                              <input  type="checkbox" name="loyalty_points" id="loyalty_points" value="<?php echo $PROFILE[0]["LoyaltyPoints"]?>" /> 
                              <label for="loyalty_points"></label>
                            </div>
                          </div>
                        </div><hr>
                        <div class="row">
                          <div class="col-md-5"></div>
                          <div class="col-md-2">
                            <br><input type="submit" class="subscribe btn-block" style="margin-left:0px;border-radius:3px" value="Confirm Order">
                          </div>
                        </form>
                        <div class="col-md-5">
                        </div>
                      </div>
                    </div>   
                  </div>
                </div>

              </div>





              <div id="backtotop" class="container-fluid">
                <a href="#top"><div class="backtotop"></div></a>
              </div>

              <div class="product-search-container" id="product-search">

                <div class="row">
                  <div class="col-md-12">
                    <i class="fa fa-times-circle" id="sclose" aria-hidden="true" style="float:right;color:#28a7db;margin-top:5px;font-size:25px"></i>
                  </div>
                </div>
                <div class="row dhidden">
                  <div class="col-md-12">
                    <form class="">
                      <div>
                        <div class="search-box" style="margin-top:0px">
                          <input onclick="" type="text" name="q" value="" placeholder="Search for a Brand, Product or Specific Item" class="search">
                        </div>
                      </div>
                      <!-- input type="submit" class="sbutn" value="Search" style="margin-top:0px" -->
                    </form>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5 col-sm-4 col-xs-3" style="padding-right:0px;padding-top:15px">
                    <div class="hline"></div>
                    <div class="hline" style="margin-top:2px"></div>
                  </div>
                  <div class="col-md-2 col-sm-4 col-xs-6" style="padding-right:0px;padding-left:0px">
                    <div class="line-head"><center>SEARCH<span> RESULTS</span></center></div>
                  </div>
                  <div class="col-md-5 col-sm-4 col-xs-3" style="padding-left:0px;padding-top:15px">
                    <div class="hline"></div>
                    <div class="hline" style="margin-top:2px"></div>
                  </div>
                </div>
                <br><br>
                <div class="row">
                  <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                    <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                    <center><div class="slider3-label"><img src="assets/images/product.jpg" style="width:150px;height:150px">
                      <br><br><div>Product name</div>
                    </div><br>
                    <button class="qview">QUICK VIEW</button>
                    <div class="qfix">5 Kg</div>
                    <br>
                    <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                    <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
                    <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                  </center>
                </div>
                <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                  <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                  <center><div class="slider3-label"><img src="assets/images/product.jpg" style="width:150px;height:150px">
                    <br><br><div>Product name</div>
                  </div><br>
                  <button class="qview">QUICK VIEW</button>
                  <div class="qfix">5 Kg</div>
                  <br>
                  <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                  <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
                  <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                </center>
              </div>
              <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                <center><div class="slider3-label"><img src="assets/images/product.jpg" style="width:150px;height:150px">
                  <br><br><div>Product name</div>
                </div><br>
                <button class="qview">QUICK VIEW</button>
                <div class="qfix">5 Kg</div>
                <br>
                <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
                <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
              </center>
            </div>
            <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
              <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
              <center><div class="slider3-label"><img src="assets/images/product.jpg" style="width:150px;height:150px">
                <br><br><div>Product name</div>
              </div><br>
              <button class="qview">QUICK VIEW</button>
              <div class="qfix">5 Kg</div>
              <br>
              <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
              <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
              <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
            </center>
          </div>
          <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
            <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
            <center><div class="slider3-label"><img src="assets/images/product.jpg" style="width:150px;height:150px">
              <br><br><div>Product name</div>
            </div><br>
            <button class="qview">QUICK VIEW</button>
            <div class="qfix">5 Kg</div>
            <br>
            <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
            <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
            <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
          </center>
        </div>
        <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
          <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
          <center><div class="slider3-label"><img src="assets/images/product.jpg" style="width:150px;height:150px">
            <br><br><div>Product name</div>
          </div><br>
          <button class="qview">QUICK VIEW</button>
          <div class="qfix">5 Kg</div>
          <br>
          <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
          <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
          <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
        </center>
      </div>
    </div>
    <br>
    <br>
  </div>

  <div id="message" class="container-fluid">
    <div class="message"><i class="fa fa-comment" aria-hidden="true"></i><span class="messagetext">Contact Us</span></div>
  </div>

  <div id="contactform" class="container-fluid">
    <div class="contactform">
      <div class="row">
        <div class="col-md-12">
          <div class="" style="float:left">Contact Us</div><div style="float:right"><i id="cclose" class="fa fa-times-circle" style="float:right" aria-hidden="true" ></i></div>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12">
          <center><input type="email" class="input-lg cinput"  placeholder="Email"></center>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12">
          <center><input type="number" class="input-lg cinput"  placeholder="Phone number"></center>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12">
          <center><input type="text" class="input-lg cinput"  placeholder="subject"></center>
        </div>
      </div><br>

      <div class="row">
        <div class="col-md-12">
          <center><textarea class="input-lg cinput"  placeholder="State Your Query"></textarea></center>
        </div>
      </div>
      <br>

      <div class="row">
        <div class="col-md-12">
          <center><button class="btn-lg sbtn">Submit</button></center>
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view('about_footer.php'); ?>        

  <script type="text/javascript">

    $(document).ready(function(){
      $('#loyalty_points').click(function(){


          $oldval = parseFloat($('#final_value').html());
          $Loyaltypoints = <?php echo $PROFILE[0]["LoyaltyPoints"]?>;


      if($('#loyalty_points').prop('checked')){


          if($oldval<$Loyaltypoints){

              $Loyaltypoints = $Loyaltypoints-$oldval;
              $('#loyalty_points').val($oldval);
              $oldval = 0;
              $('#final_value').html($oldval);              

          }else{

               $('#final_value').html($oldval- $Loyaltypoints);
        }

      }else {

          if($oldval==0){

              $used = $('#loyalty_points').val();
              $('#final_value').html($used);    
              $('#loyalty_points').val($Loyaltypoints);

          }
          else{

              $newVal = parseFloat($oldval,10.5) + <?php echo $PROFILE[0]["LoyaltyPoints"]?>;
              $('#final_value').html($newVal);
        }
      }
        
      });
      

    });
  </script>

