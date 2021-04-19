<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-signin-client_id" content="746867537974-de9u4f9gq2em1giqa8qe0omc3s7k3hce.apps.googleusercontent.com">
    
<script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?> ">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css') ?> ">
    

    <!-- custom css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/landing.css') ?>">
    
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/jquery/jquery-3.2.1.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js') ?>"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/landing.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/sidebar.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/footer.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/home_header.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/profile.css') ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/favicon.png') ?>"/>
        
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/confirmation.css') ?>"/>

    
    <title>HOME</title>

    </head>


<body>
    <div id="top" class="header-panel-top xs-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>
                    <img src="<?php echo base_url('assets/images/header_top_left_text.png') ?>" ">

               <span style="margin-left:5px;letter-spacing:1px">0331 68 67000 (10 am to 9 pm)  <img width="25" height="25" src="<?php echo base_url('assets/images/cod.png') ?>" > Cash On Delivery</span>
                </span>
                </div>
                <div class="col-md-6">
                    <div class="pull-right" style="widht:100%;">
                        <div style="float:left">
                        <img src="<?php echo base_url('assets/images/header_top_right_text.png') ?>" alt="free delivery" style="float:left,margin-left:10px">
                        <span style="margin-right:5px,float:left">Free delivery for orders Rs 499 and above</span>
                        </div>
                       <?php if ($this->session->userdata('customer_id')){ ?>
                            <diV style="float:right;margin-right:50px">
                         <ul>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="header-img"><?php echo $this->session->userdata('customer_name'); ?></span><i class="fa fa-caret-down" style="margin-left:2px;color:#A1DB0C"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="<?php echo base_url('customer/dashboard') ?>"><i class="fa fa-user fa-fw"></i> My Profile</a>
                                    </li>
                                    <li><a href="<?php echo base_url('customer/dashboard/orderhistory') ?>"><i class="fa fa-history"></i> Order History</a>
                                    </li>
                                    <li><a href="<?php echo base_url('customer/dashboard/mylocation') ?>"><i class="fa fa-map-marker"></i> My Location</a>
                                    </li>
                                    <li><a href="<?php echo base_url('customer/dashboard/ewallet') ?>"><i class="fa fa-money"></i> MY Wallet</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url('customer/dashboard/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                        </ul>
                        </diV>
                        <?php } else { ?>
                        <a href="<?php echo base_url('signup') ?>">
                            
                        <diV style="float:right;margin-right:50px"><span class="hlogin">LOGIN</span><span class="hlogin2">SIGNUP</span><span class="hlogin1">or</span></diV>

                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    
    <div class="header-fixed xs-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="padding-right:0px">
                    <div class="sidebarhead dropdownf" style="border-width:1px;border:1px solid #96C658;height:31px;padding-top:5px;width:100%">
                    <button class="dropbtnf" style="border:none;background:none;width:100%;padding-left:0px"><span style="font-weight:900">Racks</span> <img src="<?php echo base_url('assets/images/shopicon.png') ?>" style="float:right;margin-top: 6px;">
                    <div style="background-color:#fff;width:40px;margin-top:-40px;margin-left:-20px"><img src="<?php echo base_url('assets/images/mylogosmall.jpg') ?>" style="height:50px;"></div></button>
                    <ul class="shoplinks xs-hidden dropdown-contentf" style="width:100%">
                     
                      <?php $count = 0;
        foreach ($categories as $category){?>

         <li>
             <div class="dropleft">
             <a style="color:black;" href="<?php echo base_url('welcome/category/First/'.$category["EncryptedId"]) ?>" >
                 <span class="text"><?php echo $category["Name"]; ?></span></a><i class="fa fa-caret fa-caret-right" style="float:right"></i>
                 <div class="dropleft-content"  style="top:<?php echo $count*-33;$count++; ?>px;">
                     <div class="container-fluid">
                         <div class="row">
                         <?php $countx=0;foreach ($category["SUB CATEGORIES"] as $category2){?>
                             <div class="col-md-3">
                                 <a href="<?php echo base_url('welcome/category/Second/'.$category2["EncryptedId"]) ?>" ><div class="head"><?php echo $category2["Name"]; ?></div></a>

                         <?php foreach ($category2["SUB CATEGORIES"] as $category4){?>
                                 <a href="<?php echo base_url('welcome/category/Third/'.$category4["EncryptedId"]) ?>" \><div class="item"><?php echo $category4["Name"]; ?></div></a>

                        <?php } ?>

                             </div>
                        <?php }if($countx==4){?>
                                </div><div class="row">
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
                <div class="col-md-5">
                    <form class="">
                    <div>
                    <div class="search-box"  style="margin-top:0px">
                        <input onclick="" type="text" name="q" onkeyup="searchProducts(this.value)" value="" placeholder="Search for a Brand, Product or Specific Item" class="search" >
                    </div>
                    </div>
                    <!-- input type="submit" class="sbutn" value="Search" style="margin-top:0px" -->
                    </form>
                </div>
                <div class="col-md-4" style="overflow-x: visible;">
                    
                    <!--div class="div-welc1" style="margin-top:-5px;">
                        <div class="welc">Welcome Guest</div>
                            <div class="customer-links">
                                <a href="<?php echo base_url("signup") ?>">
                                    Login
                                
                                <span class="or">|</span>
                                
                                Signup
                                </a>
                            </div>
                    </div-->
                    <?php if ($this->session->userdata('customer_id')){ ?>
                            <diV style="float:left;margin-right:50px;margin-top:10px">
                         <ul>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="header-img"><?php echo $this->session->userdata('customer_name'); ?></span><i class="fa fa-caret-down" style="margin-left:2px;color:#A1DB0C"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="<?php echo base_url('customer/dashboard') ?>"><i class="fa fa-user fa-fw"></i> My Profile</a>
                                    </li>
                                    <li><a href="<?php echo base_url('customer/dashboard/orderhistory') ?>"><i class="fa fa-history"></i> Order History</a>
                                    </li>
                                    <li><a href="<?php echo base_url('customer/dashboard/mylocation') ?>"><i class="fa fa-map-marker"></i> My Location</a>
                                    </li>
                                    <li><a href="<?php echo base_url('customer/dashboard/ewallet') ?>"><i class="fa fa-money"></i> MY Wallet</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo base_url('customer/dashboard/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                    </li>
                                </ul>
                                <!-- /.dropdown-user -->
                            </li>
                        </ul>
                        </diV>
                        <?php } else { ?>
                        <a href="<?php echo base_url('signup') ?>">
                            
                        <diV style="float:left;margin-right:50px;margin-top:5px"><span class="hlogin">LOGIN</span><span class="hlogin2">SIGNUP</span><span class="hlogin1" style="margin-left: -89px !important;" >or</span></diV>

                        </a>
                        <?php } ?>


                    <div class="dropdown" id="cart"  style="float:right;margin-top:-15px;">
                      <button class="dropbtn div-welc2" style="margin-top:0px;">
                          <center><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:25px;color:#A1DB0C;"></i><span class="first">Your Cart</span>
                              <div class="count-group"><span  class="second items_COUNT"><?php echo $CartItemsCount ?></span><span class="second"> items</span></div></center>
                      </button>
                      <div class="dropdown-content" style="top:50px !important;padding-left:0px;padding-right:0px;">
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

                  <?php } else echo"<div style='margin-left:15px;'><p>Shop over Rs 499 to avail free delivery</p><br>
                        <a class='cbtn'>CONTINUE SHOPPING</a></div>"?>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div id="top" class="header-panel-top  dhidden" style="position:fixed;top:0px;z-index:100;padding-bottom:10px;box-shadow: 0px 0px 10px  #888888;background-color:black">
        <div class="container">
            <div class="row" style="background-color:#A1DB0C;">
                <div class="col-xs-12 col-sm-12">
                    
                    <center style="color:#fff;font-weight:900">Grocery Store To Your Door</center>
                    
                </div>
            </div>
            <div class="row" style="margin-top:5px">
                <div class="col-xs-12 col-sm-12">
                    <center>
                    <div style="float:left">
                        <a href="<?php echo base_url() ?>"><img width="150" height="auto" src="<?php echo base_url('assets/images/mlogo.png') ?>" alt="logo"></a>
                    </div>
                    <div style="float:right;color:#A1DB0C;">
                        <?php if ($this->session->userdata('customer_id')){ ?>
                        <a href="<?php echo base_url('customer/dashboard') ?>" style="border:none">
                        <i class="fa fa-user-circle" aria-hidden="true" style="color:#A1DB0C;font-size:25px;padding-top:7px"></i>
                        </a>  
                        <a href="<?php echo base_url('welcome/viewcart') ?>" style="border:none">
                        <i class="fa fa-shopping-cart" aria-hidden="true" style="color:#A1DB0C;font-size:25px;padding-top:7px"></i>
                        </a>
                        <!--a href="<?php echo base_url('customer/dashboard/logout') ?>" style="border:none;margin-left:10px;">
                        <i class="fa fa-sign-out" aria-hidden="true" style="color:#A1DB0C;font-size:25px;padding-top:7px"></i>
                        </a-->
                        <?php } else { ?>
                        <a href="<?php echo base_url('signup') ?>" style="border:none">
                        <i class="fa fa-sign-in" aria-hidden="true" style="color:#A1DB0C;font-size:25px;padding-top:7px"></i>
                        </a>
                        <a href="<?php echo base_url('welcome/viewcart') ?>" style="border:none">
                        <i class="fa fa-shopping-cart" aria-hidden="true" style="color:#A1DB0C;font-size:25px;padding-top:7px"></i>
                        </a>
                        <?php } ?>
                        
                    </div>
                    </center>
                </div>
            </div>
            <div class="row" style="padding-top:5px">
                <div class="col-xs-12 col-sm-12">
                    <center>
                    <div style="display:inline-block;">
                    <i class="fa fa-bars" aria-hidden="true" onclick="openNav()" style="color:#fff;font-size:25px;"></i>
                    </div>
                    <div  style="display:inline-block;" class="msearch">
                      <input onclick="" type="text" name="q" value="" onkeyup="searchProducts(this.value)" placeholder="Search for a Brand, Product or Specific Item" class="search" id="search">
                    </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    
    <div id="mySidenav" class="sidenav dhidden" >
    <!--a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a-->
    <?php 
        foreach ($categories as $category){?>
    <div id="sidediv">
    <a href="<?php echo base_url('welcome/category/First/'.$category["EncryptedId"]) ?>" style="display:inline-block;margin-left:20px"><?php echo $category["Name"]; ?></a><i class="fa fa-plus" aria-hidden="true" style="display:inline-block" onclick="opendiv('<?php echo "class".$category["EncryptedId"] ?>',this)"></i>
    </div>
     <?php foreach ($category["SUB CATEGORIES"] as $category2){?>
    <div id="sidediv" style="display:none;" class="<?php echo "class".$category["EncryptedId"] ?>">
        <i class="fa fa-long-arrow-right" style="display:inline-block;margin-left:20px;margin-top:10px" aria-hidden="true"></i><a href="<?php echo base_url('welcome/category/Second/'.$category2["EncryptedId"]) ?>" style="display:inline-block;margin-left:10px"><?php echo $category2["Name"]; ?></a><i class="fa fa-plus" aria-hidden="true" style="display:inline-block" onclick="opendiv('<?php echo "class".$category2["EncryptedId"] ?>',this)"></i>
    </div>
        <?php foreach ($category2["SUB CATEGORIES"] as $category4){?>
        <div  id="sidediv" style="display:none;" class="<?php echo "class".$category2["EncryptedId"] ?>">
        <i class="fa fa-long-arrow-right" style="display:inline-block;margin-left:40px;margin-top:10px" aria-hidden="true"></i><a href="<?php echo base_url('welcome/category/Third/'.$category4["EncryptedId"]) ?>" style="display:inline-block;margin-left:10px"><?php echo $category4["Name"]; ?></a>   
        </div>
        <?php }?> 
      <?php }?>
    <?php }?>
    </div>
