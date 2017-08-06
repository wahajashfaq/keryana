<?php include('home_header.php') ?>

<div class="container" style="padding-bottom:30px;">
    <div class="row">
        <div class="col-md-3">
            <img src="<?php echo base_url('assets/images/mylogo.jpg')?>" alt="logo" style="width:250px;height:63px">
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
                             <span class="text"><?php echo $category["Name"]; ?></span><i class="fa fa-caret fa-caret-right" style="float:right"></i>
                             <div class="dropleft-content" style="top:<?php echo $count*-33;$count++; ?>px;">
                                 <div class="container-fluid">
                                     <div class="row">
                                         <?php foreach ($category["SUB CATEGORIES"] as $category2){?>
                                           <div class="col-md-3">
                                             <a><div class="head"><?php echo $category2["Name"]; ?></div></a>

                                             <?php foreach ($category2["SUB CATEGORIES"] as $category4){?>
                                             <a><div class="item"><?php echo $category4["Name"]; ?></div></a>

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
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home"><center><i class="fa fa-user-circle" aria-hidden="true"></i> MY PROFILE</center></a></li>
                <li><a data-toggle="tab" href="#order"><center><i class="fa fa-history" aria-hidden="true"></i> ORDER HISTORY</center></a></li>
                <li><a data-toggle="tab" href="#loc"><center><i class="fa fa-map-marker" aria-hidden="true"></i> MY LOCATION</center></a></li>
              </ul>

              <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                        <div class="pbox">
                            <div class="row">
                                <div class="col-md-5">
                                    <span class="name">NAME:</span><span style="float:right"><?php echo $PROFILE[0]["FirstName"]." ".$PROFILE[0]["LastName"] ?></span>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <span class="name">KARYANA ID:</span><span style="float:right"><?php echo $PROFILE[0]["EncryptedId"] ?></span>
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
                                    <span class="name"><i class="fa fa-map-marker" aria-hidden="true"></i> ADDRESS:</span><p ><?php echo $PROFILE[0]['Address'] ?></p>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <span class="name"><i class="fa fa-map-marker" aria-hidden="true"></i> CITY:</span><span style="float:right"><?php echo $PROFILE[0]['City'] ?></span><br><br>
                                    <span class="name">LOYALITY POINTS:</span><span style="float:right"><?php echo $PROFILE[0]['LoyaltyPoints'] ?></span>
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
                                    <span>Address Line 1:</span><br><br>
                                    <input class="form-control" type="text" maxlength="50" name="address1" placeholder="Enter Adress Here:">
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <span>Address Line 2:</span><br><br>
                                    <input name="address2" class="form-control" placeholder="Enter Adress Here:">
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
                </div>
                <div id="order" class="tab-pane fade">
                  <center><h3 style="color: #c6c6c6">Order History</h3></center>
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
                        
                      <tr class="<?php if($row["Status"]==1) echo "success"; else if($row["Status"]==0) echo "warning" ?>">
                        <td><?php echo $count++; ?></td>
                        <td><?php echo $row["EncryptedId"] ?></td>
                        <td>Rs <?php echo $row["TotalAmount"] ?></td>
                        <td><?php echo $row["ReceiveTime"] ?></td>
                        <td><?php if($row["Status"]==1) echo "Deliverd"; else if($row["Status"]==0) echo "Pending" ?></td>
                        <td><a>View details</a></td>
                      </tr>

                      <?php endforeach ?>

                  <?php } // End of IF 

                    else {
                        echo "<h2>No Order Yet</h2>";
                    }
                  ?></tbody>
                  </table>
                </div>
                <div id="loc" class="tab-pane fade">
                    <?php include('loc.php'); ?>    
                </div>
              </div>
            
        </div>
    </div>
</div>





<?php $this->load->view('about_footer.php'); ?>        
