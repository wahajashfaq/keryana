<!DOCTYPE html>
<html lang="en">
	<head>
         <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-signin-client_id" content="746867537974-de9u4f9gq2em1giqa8qe0omc3s7k3hce.apps.googleusercontent.com">
    
<script src="https://apis.google.com/js/platform.js" async defer></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?> ">
    

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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/category.css') ?>">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/favicon.png') ?>"/>


    
    <title>Landing</title>
        
        </head>


<body>
    <div id="top" class="header-panel-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span>
                    <img src="<?php echo base_url('assets/images/header_top_left_text.png') ?>" alt="8010 103 104 (10AM to 8PM)">

               <span style="margin-left:5px">8010 103 104 (10AM to 8PM)</span>
               <a href="">Where We Deliver</a>
                </span>
                </div>
                <div class="col-md-6">
                    <div class="pull-right" style="widht:100%;">
                        <div style="float:left">
                        <img src="<?php echo base_url('assets/images/header_top_right_text.png') ?>" alt="free delivery" style="float:left,margin-left:10px">
                        <span style="margin-right:5px,float:left">Free delivery for orders Rs. 500 and above</span>
                        </div>

                        <?php if ($this->session->userdata('customer_id')){ ?>
                            <diV style="float:right;margin-right:50px">
                         <ul>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <span class="header-img">WA</span><i class="fa fa-caret-down" style="margin-left:2px;color:#28a7db"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#"><i class="fa fa-user fa-fw"></i> MY Profile</a>
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
    
    


    <div class="header-fixed">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="padding-right:0px">
                    <div class="sidebarhead dropdownf" style="border-width:1px;border:1px solid #96C658;height:31px;padding-top:5px;width:100%">
                    <button class="dropbtnf" style="border:none;background:none;width:100%;padding-left:0px"><span style="font-weight:900">SHOP</span> <img src="<?php echo base_url('assets/images/shopicon.png') ?>" style="float:right;margin-top: 6px;">
                    <div style="background-color:#fff;width:40px;margin-top:-40px;margin-left:-20px"><img src="<?php echo base_url('assets/images/mylogosmall.jpg') ?>" style="height:50px;"></div></button>
                    <ul class="shoplinks xs-hidden dropdown-contentf" style="width:100%">
                     
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
                <div class="col-md-5">
                    <form class="">
                    <div>
                    <div class="search-box"  style="margin-top:0px">
                        <input onclick="" type="text" name="q" value="" placeholder="Search for a Brand, Product or Specific Item" class="search" >
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
                    <a href="<?php echo base_url('signup'); ?>">
                    <diV style="float:left;margin-right:50px;margin-top:5px"><span class="hlogin">LOGIN</span><span class="hlogin2">SIGNUP</span><span class="hlogin1" style="margin-left:-86px!important">or</span></diV>
                    </a>
                    <div class="dropdown" id="cart"  style="float:right;margin-top:-15px;">
                      <button class="dropbtn div-welc2" style="margin-top:0px;">
                          <center><img src="<?php echo base_url('assets/images/carticon.png') ?>" class="cart"><span class="first">Your Cart</span>
                          <div class="count-group"><span class="second">0</span><span class="second"> items</span></div></center>
                      </button>
                      <div class="dropdown-content" style="top:50px;padding-left:0px;padding-right:0px;">
                        <div style="width:100%;max-height:220px;overflow-y:scroll;overflow-x:hidden;">
                            <br>
                        <div class="row">
                            <div class="col-md-12" style="padding-left:30px;padding-right:30px;">
                                <div class="cartfhead" style="float:left">Your Cart <span>(0 items)</span></div>
                                <div style="float:right;margin-top:-20px">
                                <center><img src="<?php echo base_url('assets/images/cartfilled.png') ?>" class="cart"><span >Your Saved</span>
                                  <div class="count-group"><span style="color:#96C658;font-weight:700">Rs </span><span style="color:#96C658;font-weight:700"> 0</span></div></center>
                                </div>
                            </div>
                        </div>
                          
                          <hr>
                          
                        <div class="row">
                            <div class="col-md-12">
                                <div style="float:left">
                                    <div style="float:left">
                                        <img src="<?php echo base_url('assets/images/psmall.jpg') ?>">
                                    </div>
                                    <div style="float:right">
                                        <center>
                                       <div style="margin-top:20px;color:">Product Name</div>
                                        <div class="qmang" style="display:block;margin-top:10px"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                                        </center>
                                    </div>
                                </div>
                                <div style="float:right">
                                    <div style="float:left">
                                        <center>
                                        <select class="qselect" style="margin-top:20px;">
                                          <option>5 Kg</option>
                                          <option>10 Kg</option>
                                        </select>
                                        <div style="margin-top:10px;color: #313131">Rs100</div>
                                        </center>
                                    </div>
                                    <div style="float:right;margin-right:10px">
                                        <i class="fa fa-times-circle" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                          
                        <hr>
                          
                        <div class="row">
                            <div class="col-md-12">
                                <div style="float:left">
                                    <div style="float:left">
                                        <img src="<?php echo base_url('assets/images/psmall.jpg') ?>">
                                    </div>
                                    <div style="float:right">
                                        <center>
                                       <div style="margin-top:20px;color:">Product Name</div>
                                        <div class="qmang" style="display:block;margin-top:10px"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                                        </center>
                                    </div>
                                </div>
                                <div style="float:right">
                                    <div style="float:left">
                                        <center>
                                        <div class="qfix" style="margin-top:20px;padding-top:10px">5 Kg</div>
                                        <div style="margin-top:10px;color: #313131">Rs100</div>
                                        </center>
                                    </div>
                                    <div style="float:right;margin-right:10px">
                                        <i class="fa fa-times-circle" aria-hidden="true" ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                          
                          <hr>
                        </div>
                        <div>
                        <div class="row">
                            <br>
                            <div class="col-md-12" style="padding-left:30px;padding-right:40px">
                                <div style="float:left;font-weight:600">Sub Total</div><div style="float:right">Rs 0</div>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <br>
                            <div class="col-md-12" style="padding-left:30px;padding-right:40px">
                                <div style="float:left;font-weight:600">Discount</div><div style="float:right">Rs 0</div>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <br>
                            <div class="col-md-12" style="padding-left:30px;padding-right:40px">
                                <div style="float:left;font-weight:600">Delivery Charges</div><div style="float:right">Free</div>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <br>
                            <div class="col-md-12" style="padding-left:30px;padding-right:40px">
                                <div style="float:left;font-weight:600">Total</div><div style="float:right">Rs 0</div>
                                <hr>
                            </div>
                        </div>
                        <div class="row">
                            <br>
                            <div class="col-md-12" style="padding-left:30px;padding-right:40px">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-5"><button class="btn btn-block bcartview"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"> View Cart</button></div>
                                    <div class="col-md-5"><button class="btn btn-block coutview">Check Out</button></div>
                                </div>
                            </div>
                        </div>
                        </div>  
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    