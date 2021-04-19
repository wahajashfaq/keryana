
<?php include('home_header.php') ?>

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
                <input onclick="" type="text" name="q" value="" onkeyup="searchProducts(this.value)" placeholder="Search for a Brand, Product or Specific Item" class="search">
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
                  <div class="count-group"><span class="second"><?php echo $CartItemsCount ?></span><span class="second"> items</span></div></center>
              </button>
              <div class="dropdown-content">
                <?php $items=1; if ($CartProducts){ ?>
        
                        <div style="width:100%;max-height:220px;overflow-y:auto;overflow-x:hidden;">
                            <br>
                        <div class="row">
                            <div class="col-md-12" style="padding-left:30px;padding-right:30px;">
                                <div class="cartfhead" style="float:left">Your Cart <span>(<?php if(!$CartProducts){echo 0;}else echo count($CartProducts) ?> items)</span></div>
                                <div style="float:right;margin-top:-20px">
                                
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
                                  if(($subTotal-$totalDiscount)>999){
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
                                    <div class="col-md-5"><a href="<?php echo base_url('welcome/viewcart') ?>"><button class="btn btn-block bcartview"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"> View Cart</button></a></div>
                                    <div class="col-md-5"><a href="<?php echo base_url('customer/checkout') ?>"><button class="btn btn-block coutview">Check Out</button></a></div>
                                </div>
                            </div>
                        </div>
                        </div>  

                  <?php } else echo"<div style='margin-left:15px;'><p>Shop over Rs 999 to avail free delivery</p><br>
                        <a class='cbtn'>CONTINUE SHOPPING</a></div>"?>
              </div>
            </div>
        </div>    
        </div>
    
    <div class="row" style="padding-top:20px">
                <div class="col-md-3 xs-hidden" style="padding-right:0px;">
                    <div class="sidebarhead dropdownf" style="border-width:1px;border:1px solid #96C658;padding-top:0px;width:100%;height:40px;padding-bottom:0px">
                    <button class="dropbtnf" style="border:none;background:none;width:100%;padding-left:0px;height:40px"><span style="font-weight:900">Rack</span> <img src="<?php echo base_url('assets/images/shopicon.png')?>" style="float:right;margin-top: 6px;"></button>
                    <ul class="shoplinks xs-hidden dropdown-contentf" style="width:100%;top:50px">
                    
                        <?php $count = 0;
                        foreach ($categories as $category){?>
                        
                     <li>
                         <div class="dropleft">
               <a style="color:black;" href="<?php echo base_url('welcome/category/First/'.$category["EncryptedId"]) ?>" ><span class="text"><?php echo $category["Name"]; ?></span></a><i class="fa fa-caret fa-caret-right" style="float:right"></i>
               <div class="dropleft-content"  style="top:<?php echo $count*-33;$count++; ?>px;">
                 <div class="container-fluid">
                   <div class="row">
                     <?php foreach ($category["SUB CATEGORIES"] as $category2){?>
                     <div class="col-md-3">
                       <a href="<?php echo base_url('welcome/category/Second/'.$category2["EncryptedId"]) ?>"><div class="head"><?php echo $category2["Name"]; ?></div></a>

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
                            <!-- <a id="m1">
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
                            </a> -->
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
    
    <div class="row prof-row">
        <div class="col-md-3">
             <ul class="nav nav-tabs tabs-left">
                <li><a data-toggle="tab" href="#home"><center><i class="fa fa-user-circle" aria-hidden="true"></i> MY PROFILE</center></a></li>
                <li><a data-toggle="tab" href="#order"><center><i class="fa fa-history" aria-hidden="true"></i> ORDER HISTORY</center></a></li>
                <li class="active"><a data-toggle="tab" href="#loc"><center><i class="fa fa-map-marker" aria-hidden="true"></i> MY LOCATION</center></a></li>
                <li><a data-toggle="tab" href="#wal"><center><i class="fa fa-money" aria-hidden="true"></i>  E-wallet</center></a></li>
              </ul>
            
        </div>
  

        <div class="col-md-9">
              <div class="tab-content">
                <div id="home" class="tab-pane fade">
                        <div class="pbox">
                            <div class="row">
                                <div class="col-md-5">
                                    <span class="name">NAME:</span><span style="float:right"><?php echo $PROFILE[0]["FirstName"]." ".$PROFILE[0]["LastName"] ?></span>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <span class="name">KERYANA ID:</span><span style="float:right"><?php echo $PROFILE[0]["ID"]+124 ?></span>
                                </div>
                            </div><hr>
                            <div class="row">
                                <div class="col-md-5">
                                    <span class="name"><i class="fa fa-envelope" aria-hidden="true"></i> EMAIL:</span><span style="float:right"><?php echo $PROFILE[0]['Email'] ?></span>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <span class="name"><i class="fa fa-phone-square" aria-hidden="true"></i> PHONE #:</span><span style="float:right"><?php echo $PROFILE[0]['Mobile'] ?></span>
                                </div>
                            </div><hr>
                            <div class="row">
                                
                                <div class="col-md-5">
                                     <span class="name"><i class="fa fa-map-marker" aria-hidden="true"></i> CITY: </span>
                                    <span style="float:right"><?php echo $PROFILE[0]['City'] ?></span>
                                   
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                          <span class="name"><i class="fa fa-map-marker" aria-hidden="true"></i> Town(Society): </span>
                                    <span style="float:right"><?php echo $PROFILE[0]['Town'] ?></span>
                                </div>
                            </div>

                            <div class="row">
                                
                                <div class="col-md-5">
                                    <span class="name"><i class="fa fa-map-marker" aria-hidden="true"></i> Block: </span>
                                    <span style="float:right"><?php echo $PROFILE[0]['Block'] ?></span>
                                    
                                </div>
                                <div class="col-md-2"></div>
                                
                                <div class="col-md-5">
                                    <span class="name"><i class="fa fa-map-marker" aria-hidden="true"></i> House #:</span>
                                    <span style="float:right"><?php echo $PROFILE[0]['HouseNo'] ?></span>
                                </div>
                            </div>
                            
                            <div class="row">
                                
                                <div class="col-md-5">
                                    <span class="name"><i class="fa fa-map-marker" aria-hidden="true"></i> Nearby Location :</span><span style="float:right"><?php echo $PROFILE[0]['NearbyLocation'] ?></span>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    
                                </div>
                            </div>
                        </div>
                 
                        <div class="pbox">
                            <div class="row">
                                <div class="col-md-12">
                                    <span class="name">UPDATE CONTACT DETAILS:</span>
                                </div><br><br>
                            </div>
                            <form method="post" action="<?php echo base_url("customer/Profile/update"); ?>">
                                
                            
                            
                            <div class="row">
                                <div class="col-md-5">
                                    <span>City:</span><br><br>
                                    <input type="text" name="city" class="form-control" placeholder="Enter City:">
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <span>Phone #:</span><br><br>
                                    <input type="number" name="contact_number" class="form-control" placeholder="Enter Phone Number:">
                                </div>
                            </div><hr>
                            
                            <div class="row">
                                <div class="col-md-5">
                                   
                                   
                                    <span>Town (Society):</span><br><br>
                                    <input name="town" class="form-control" placeholder="Town (Society)">


                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                 <span>Block</span><br><br>
                                    <input class="form-control" type="text" maxlength="50" name="block" placeholder="Block">

                                </div>
                            </div><hr/>
                            <div class="row">
                                <div class="col-md-5">
                                    <span>House Number</span><br><br>
                                    <input class="form-control" type="text" maxlength="50" name="house_no" placeholder="House Number:">
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <span>Nearby Location</span><br><br>
                                    <input name="nearby_location" class="form-control" placeholder="Enter Location Here:">
                                </div>
                            </div><hr>



                            <div class="row">
                                <div class="col-md-5"></div>
                                <div class="col-md-2 save">
                                    <br><input type="submit" class="subscribe btn-block" style="margin-left:0px;border-radius:3px" value="Save Changes">
                                </div>
                                <div class="col-md-5">
                                </div>
                            </div>
                            </form>
                        </div> 
                </div>
                <div id="order" class="tab-pane fade">
                  <center><h3 style="color: #c6c6c6">Order History</h3></center>
                  <div style="overflow-x:auto;display:block">
                  <table class="table">

                  <?php if ($OrderHistory){ ?>
                      
                        
                    <thead>
                      <tr>
                        <th>Sr #</th>
                        <th>OrderID</th>
                        <th>Total</th>
                        <th>Date & Time</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>      
                      <?php $count = 1; foreach ($OrderHistory as $row): ?>
                        
                      <tr class="<?php if($row["Status"]==1) echo "success"; else if($row["Status"]==0) echo "danger";
                      else if($row["Status"]==3) echo "warning";
                      else if($row["Status"]==2) echo "info";else if($row["Status"]==4) echo "primary";?>">
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $row["ID"]+124 ?></td>
                        <td>Rs <?php echo $row["TotalAmount"] ?></td>
                        <td><?php echo $row["ReceiveTime"] ?></td>
                        <td><?php if($row["Status"]==1) echo "Deliverd"; else if($row["Status"]==0) echo "Pending";else if($row["Status"]==2) echo "Dispatched";else if($row["Status"]==3) echo "Canceled";else if($row["Status"]==4) echo "Refunded"; ?></td>
                        <td><a href="<?php echo base_url('Welcome/order/').($row["EncryptedId"]) ?>">View details</a></td>
                      </tr>

                      <?php endforeach ?>

                  <?php } // End of IF 

                    else {
                        echo "<h2>No Order Yet</h2>";
                    }
                  ?></tbody>
                  </table>
                  </div>
                </div>
                <div id="loc" class="tab-pane fade in active">
                    <?php include('loc.php'); ?>    
                </div>

                 <div id="wal" class="tab-pane fade">
                    <div class="pbox">
                    <div class="row">
                                <div class="col-md-5">
                                    <span class="name"><span class="name">LOYALITY POINTS:</span><span style="float:right"><?php echo $PROFILE[0]['LoyaltyPoints'] ?></span></span>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                </div>
                    </div>
                    </div>
                </div>

              </div>
        </div>
    </div>
</div>





<?php $this->load->view('about_footer.php'); ?>        

