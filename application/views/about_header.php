 <?php include('landing_header.php') ?>


    
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
                <input onclick="" type="text" name="q" value="" onkeyup="searchProducts(this.value)" placeholder="Search for a Brand, Product or Specific Item" class="search" id="search">
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
                  <div class="count-group"><span  class="second items_COUNT"><?php echo $CartItemsCount ?></span><span class="second"> items</span></div></center>
              </button>

            <?php if ($this->session->userdata('My_Cart')){ ?>
              <div class="dropdown-content" style="top:50px ;padding-left:0px;padding-right:0px;">
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
                                <div style="float:left;font-weight:600">Delivery Charges</div><div style="float:right">Free</div>
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
                                    <div class="col-md-5"><a href='<?php echo base_url('welcome/viewcart'); ?>'><button class="btn btn-block bcartview"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"> View Cart</button></a></div>
                                    <div class="col-md-5"><a href='<?php echo base_url('customer/checkout'); ?>'><button class="btn btn-block coutview">Check Out</button></a></div>
                                </div>
                            </div>
                        </div>
                        </div>  

                  <?php } else echo"<div style='margin-left:15px;'><p>Shop over Rs 499 to avail free delivery </p><br>
                        <a class='cbtn'>CONTINUE SHOPPING</a></div>"?>
              </div>
            <?php }
                else{ ?>
                    <div class="dropdown-content" style="top:50px;padding-left:0px;padding-right:0px;">
                        <?php echo"<div style='margin-left:15px;'><p>Shop over Rs 499 to avail free delivery</p><br>
                        <a class='cbtn'>CONTINUE SHOPPING</a></div>"?>
                    </div>
            <?php    }
            ?>
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
                         <a style="color:black;" href="<?php echo base_url('welcome/category/First/'.$category["EncryptedId"]) ?>" >
                           <span class="text"><?php echo $category["Name"]; ?></span><i class="fa fa-caret fa-caret-right" style="float:right"></i></a>
                           <div class="dropleft-content" style="top:<?php echo $count*-33;$count++; ?>px;">
                             <div class="container-fluid">
                               <div class="row">
                                 <?php $countx=0; foreach ($category["SUB CATEGORIES"] as $category2){?>
                                 <div class="col-md-3">
                                 <a href="<?php echo base_url('welcome/category/Second/'.$category2["EncryptedId"]) ?>" >
                                   <div class="head"><?php echo $category2["Name"]; ?></div></a>

                                   <?php foreach ($category2["SUB CATEGORIES"] as $category4){?>
                                   <a href="<?php echo base_url('welcome/category/Third/'.$category4["EncryptedId"]) ?>" ><div class="item"><?php echo $category4["Name"]; ?></div></a>

                                   <?php } ?>

                                 </div>
                                 <?php $countx++;if($countx==4){?>
                                 </div><div class="row">
                                 <?php
                                 }
                                 } ?>
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
              <a id="m4" style="float:left" href="<?php echo base_url('welcome/gethotproducts') ?>">
                <span class="mitem" ><i class="fa fa-shopping-bag" aria-hidden="true" style="font-size:25px;color:#A1DB0C"></i><span class="mitem2">Hot Deals</span></span>
              </a>
            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>