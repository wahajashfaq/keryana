<?php $this->load->view('customer/home_header'); ?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  
 </script>

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
                  <div class="dropdown" style="float:right;">
                    <button class="dropbtn div-welc2">
                      <center><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:25px;color:#A1DB0C;"></i><span class="first">Your Cart</span>
                        <div class="count-group"><span class="second  items_COUNT"><?php echo $CartItemsCount ?></span><span class="second"> items</span></div></center>
                      </button>
                      <div class="dropdown-content">
                        <?php $items=1; if ($CartProducts){ ?>

                        <div style="width:100%;max-height:220px;overflow-y:auto;overflow-x:hidden;">
                          <br>
                          <div class="row">
                            <div class="col-md-12" style="padding-left:30px;padding-right:30px;">
                              <div class="cartfhead" style="float:left">Your Cart <span>(<?php if(!$CartProducts){echo 0;}else echo count($CartProducts) ?> items)</span></div>
                              <div style="float:right;margin-top:-20px">
                                <center><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:25px;color:#A1DB0C;"></i><span > Your Saved</span>
                                  <div class="count-group"><span style="color:#96C658;font-weight:700">Rs </span><span style="color:#96C658;font-weight:700"> 0</span></div></center>
                                </div>
                              </div>
                            </div>

                            <hr>

                            <?php

                            $totalDiscount = 0;
                            $subTotal = 0;

                            foreach ($CartProducts as $row): ?>

                            <?php 

                            $totalDiscount = $totalDiscount+($row["Discount"]*$row["Quantity"]);
                            $subTotal =$subTotal+ $row["Price"]*$row["Quantity"];


                            ?>

                            <div class="row">
                              <div class="col-md-12">
                                <div style="float:left">
                                  <div style="float:left">
                                    <img class="pimg" style="max-height: 100px;width: :auto;max-width: : 100px; " src="<?php echo base_url('uploads/product_images/'.$row["Image"]) ?>">
                                  </div>
                                  <div style="float:right">
                                    <center>
                                     <div style="margin-top:20px;color:"><?php echo $row["Name"] ?></div>
                                     <div class="qmang" style="display:block;margin-top:10px"><i class="fa fa-minus" onclick="minus(this)" aria-hidden="true"></i><span class="qval" data-price="<?php echo $row["Price"] ?>" id="<?php echo $row["ProductID"] ?>"><?php echo $row["Quantity"];?></span><i onclick="plus(this)" class="fa fa-plus" aria-hidden="true"></i></div>
                                   </center>
                                 </div>
                               </div>
                               <div style="float:right">
                                <div style="float:left">
                                  <center>
                                    <div class="qfix" style="margin-top:20px;"><?php echo $row["Unit"] ?></div>
                                    <div style="margin-top:10px;color: #313131">Rs <?php echo $row["Price"]; ?></div>
                                  </center>
                                </div>
                                <div style="float:right;margin-right:10px">
                                  <i id="<?php echo $row["ProductID"] ?>" onclick="removeProduct(this);" class="fa fa-times-circle" aria-hidden="true" ></i>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <hr>


                        <?php endforeach ?>

                        <hr>
                      </div>
                      <div>
                        <div class="row">
                          <div class="col-md-12" style="padding-left:30px;padding-right:40px">
                            <div style="float:left;font-weight:600">Sub Total</div><div style="float:right">Rs <?php echo $subTotal; ?></div>
                            <br>
                            <div style="float:left;font-weight:600">Discount</div><div style="float:right">Rs <?php echo $totalDiscount; ?></div>
                            <br>
                            <div style="float:left;font-weight:600">Delivery Charges</div><div style="float:right">
                            <?php 
                            if(($subTotal-$totalDiscount)>499){
                              echo "Free";
                            }else{
                              echo "50";
                              $subTotal = $subTotal + 50;
                            }

                            ?>
                          </div>
                          <br>
                          <div style="float:left;font-weight:600">Total</div><div style="float:right">Rs <?php echo $subTotal-$totalDiscount; ?></div>
                          <br>
                        </div>
                      </div>
                      <div class="row">
                        <br>
                        <div class="col-md-12" style="padding-left:30px;padding-right:40px">
                          <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-5"><a href='<?php echo base_url('welcome/viewcart'); ?>'> <button class="btn btn-block bcartview"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"> View Cart</button></a></div>
                            <div class="col-md-5"><a href='<?php echo base_url('customer/checkout'); ?>'><button class="btn btn-block coutview">Check Out</button></a></div>
                          </div>
                        </div>
                      </div>
                    </div>  

                    <?php } else echo"<div style='margin-left:15px;'><p>It apears that your cart is currently empty!</p><br>
                    <a class='cbtn'>CONTINUE SHOPPING</a></div>"?>
                  </div>
                </div>
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
                      <a id="m4" style="float:right">
                        <span class="mitem" ><i class="fa fa-book" aria-hidden="true" style="font-size:25px;color:#A1DB0C"></i><span class="mitem2">Recipie Blog</span></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>    
            </div>
            <div class="row xs-login">
              <div class="col-md-12">
                <div class="pbox">
                  <div class="row">
                    <div class="col-md-12">
                      <span class="name">UPDATE CONTACT DETAILS:</span>
                    </div><br><br>
                  </div>
                  <form method="post" action="<?php echo base_url("customer/Profile/updateCheck"); ?>">

                    <?php if (isset($ADDRESS_ERROR)): ?>
                      <div class="alert alert-danger">
                        <?php echo $ADDRESS_ERROR ?>
                      </div>
                    <?php endif ?>
                    <div class="row">
                      <div class="col-md-5">
                        <span>City:</span><br><br>
                        <input type="text" name="city" class="form-control" value="<?php echo $PROFILE[0]["City"]?>" placeholder="Enter City:">
                      </div>
                      <div class="col-md-2"></div>
                      <div class="col-md-5">
                        <span>Phone #:</span><br><br>
                        <input type="text" name="contact_number" id="contact_number"  value="<?php echo $PROFILE[0]["Mobile"]?>" class="form-control" placeholder="Enter Phone Number:">
                      </div>
                    </div><hr>
                    <div class="row">
                      <div class="col-md-5">

                        <span>Town (Society):</span><br><br>
                        <input name="town" id="town" class="form-control" value="<?php echo $PROFILE[0]["Town"]?>" placeholder="Town (Society)">

                      </div>
                      <div class="col-md-2"></div>
                      <div class="col-md-5">

                        <span>Block</span><br><br>
                        <input class="form-control" type="text" value="<?php echo $PROFILE[0]["Block"]?>" maxlength="50" name="block" id="block"  placeholder="Block">
                      </div>
                    </div><hr>

                    <div class="row">
                      <div class="col-md-5">
                        <span>House Number</span><br><br>
                        <input class="form-control" type="text" value="<?php echo $PROFILE[0]["HouseNo"]?>" maxlength="50" name="house_no" id="house_no" placeholder="House Number:">
                      </div>
                      <div class="col-md-2"></div>
                      <div class="col-md-5">
                        <span>Nearby Location</span><br><br>
                        <input name="nearby_location"  id="nearby_location" class="form-control" value="<?php echo $PROFILE[0]["NearbyLocation"]?>" placeholder="Enter Location Here:">
                      </div>
                    </div>
                    <hr/>

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


                    $totalDiscount = $totalDiscount+($row["Discount"]*$row["Quantity"]);
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
                      <span id="delivery_charges">
                       <?php 
                       $charges = 0;
                       if(($subTotal-$totalDiscount)>499){
                        echo "Free";
                      }else{
                        echo "50";
                        $charges = 50;
                        $subTotal = $subTotal + 50;
                      }

                      ?>
                    </span>
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


                <?php if ($FORDER): ?>
                  <div class="row">

                    <div class="col-md-5">
                      <span style="color:#666">Loyalty Points (<?php echo $PROFILE[0]["LoyaltyPoints"]?>) </span>
                    </div>
                  <?php endif ?>
                  <form method="post" onsubmit="return validate_form()" action="<?php echo base_url('customer/checkout/confirmOrder') ?>">

                    <input type="hidden" name="delivery_charges" value="<?php echo $charges ?>">
                    <input type="hidden" name="total_charges" value="<?php echo $charges ?>">

                    <?php if ($FORDER): ?>
                      <div class="col-md-2"></div>
                      <div class="col-md-5">
                        <div class="check">
                          <input  type="checkbox"  name="loyalty_points" id="loyalty_points" value="<?php echo $PROFILE[0]["LoyaltyPoints"]?>" /> 
                          <label for="loyalty_points"></label>
                        </div>
                      </div>
                    </div><hr>
                  <?php endif ?>

                  <div id="CC">
                    <div class="row" >
                      <div class="col-md-2">Coupon Code :</div>
                      <div class="col-md-4">
                        <input type="text" name="coupon_code" onkeyup ="validate_coupon(this.value)" class="form-control" id="coupon_code" placeholder="Enter Coupon Code" autocomplete='off'>
                      </div>
                      <div class="col-md-6" id="error_message"></div>
                      <div class="col-md-2">
                      </div>
                    </div><hr>
                  </div>
                  <div class="row" >
                    <div class="row" >
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <center><h4 style="color:black !important">OUR DELIVERY POLICY</h4></center>
                            <p style="color:black !important">Orders placed by <strong>09:00 am</strong> will be delivered from <strong>09:00 am - 11:00 am</strong><br><br>Orders placed by <strong>02:00 pm</strong> will be delivered from <strong>02:00 pm - 04:00 pm</strong><br><br>Orders placed by <strong>07:00 pm</strong> will be delivered from <strong>07:00 pm - 09:00 pm</strong><br><br>Orders placed after <strong>07:00 pm</strong> will be delivered on next day from <strong>09:00 am - 11:00 am</strong><br></p>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                  <div class="row hidden" >
                    <div class="col-md-2">Preferd Date :</div>
                    <div class="col-md-4">
                    <input type="text" class="form-control" name="order_date" id="odate" placeholder="yyyy-mm-dd"  value = "2017-09-16" required>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                    </div>
                  </div><hr>
                  <div class="row hidden" >
                    <div class="col-md-2">Preferd Time :</div>
                    <div class="col-md-5">

                      <?php $check=0; foreach ($TimeSlots as $row): ?>

                        <?php $time = $row["From"]." - ".$row["To"] ?>
                        <input type="radio" name="order_time" id="order_time" value="<?php echo $time ?>"  <?php if($check == 0){ $check=1;echo "checked='checked'";}?>> <?php echo $time ?><br>
                      <?php endforeach ?>

                    </div>
                  </div>
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

<?php $this->load->view('about_footer.php'); ?>        

<script type="text/javascript">

    /*
  var today = new Date();
  var dd = today.getDate()+1;
  var mm = today.getMonth()+1; //January is 0!
    
  var yyyy = today.getFullYear();
  if(dd<10){
        dd='0'+dd;
  } 
  if(mm<10){
        mm='0'+mm;
  } 
  console.log(mm);
  console.log(dd);
  console.log(yyyy);
  var today = yyyy+'-'+mm+'-'+dd;
    
  document.getElementById('odate').setAttribute("min", today);
        if($(window).width()<=993){
            $(".features-box").css("border-right","none");
            $(".features-box").css("text-align","center");
            $("#seperator").hide();
        }
    */
  function validate_form(){

    var HNO = $('#house_no').val();
    var TOWN = $('#town').val();
    var BLOCK = $('#block').val();
    var NBL = $('#nearby_location').val();
    var CN = $('#contact_number').val();

    if(HNO && TOWN && BLOCK && NBL && CN){
      return true;
    }else{

      alert("Please update your address completely");
      return false;
    }

  }


  function validate_coupon(key){



  //  alert(key);

  var totalval  = <?php echo  $subTotal-$totalDiscount; ?> ;
  if(key.length>4){

   jQuery.ajax({

    type: "POST",
    url: "<?php echo base_url(); ?>" + "customer/checkout/coupon",
    dataType: 'json',
    data: {
      coupon : key,
      mytotal : totalval
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
                    if(res.discount=="USED"){

                      $('#error_message').html('<span style="color:red"><b>This coupon is already used</b></span>');
                      $('#final_value').text(<?php echo  $subTotal-$totalDiscount; ?>);

                    }else if(res.discount=="INVALID"){

                      $('#error_message').html('<span style="color:red"><em>Invalid Coupon<em></span>');
                      $('#final_value').text(<?php echo  $subTotal-$totalDiscount; ?>);

                    }else if(res.discount=="NOT"){
                      $('#error_message').html('<span style="color:green"><b><em>'+res.details+'</b></em></span>');
                    }
                    else{
                      $('#error_message').html('<span style="color:green"><b><em>'+res.details+'</b></em></span>');
                      $('#final_value').text(totalval-res.discount);
                    }
                  }
                },
                beforeSend : function()
                {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                 // alert("some error");
               }
             });
 }else{

  $('#error_message').html('');
  $('#final_value').text(<?php echo  $subTotal-$totalDiscount; ?>);
}

}

$(document).ready(function(){

    //$('#loyalty_points').prop('checked','false');
    
    $('#order_time').attr('checked','checked');

    var today = new Date();
    var dd = today.getDate()+1;
    var mm = today.getMonth()+1; //January is 0!

    var yyyy = today.getFullYear();
    if(dd<10){
      dd='0'+dd;
    } 
    if(mm<10){
      mm='0'+mm;
    } 
    console.log(mm);
    console.log(dd);
    console.log(yyyy);
    var today = yyyy+'-'+mm+'-'+dd;
    //document.getElementById('odate').setAttribute("min", today);


  $('#loyalty_points').click(function(){


    $oldval = parseFloat($('#final_value').html());
    $Loyaltypoints = <?php echo $PROFILE[0]["LoyaltyPoints"]?>;


    if($('#loyalty_points').prop('checked')){

      $('#coupon_code').val('');
      $('#CC').slideUp();

      if($oldval<$Loyaltypoints){

        $Loyaltypoints = $Loyaltypoints-$oldval;
        $('#loyalty_points').val($oldval);
        $oldval = 0;
        $('#final_value').html($oldval);              

      } else{

       $('#final_value').html($oldval- $Loyaltypoints);
     }

   }else {

    $('#CC').slideDown();

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

