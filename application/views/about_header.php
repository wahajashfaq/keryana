<?php include('landing_header.php') ?>


    
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

            <?php if ($this->session->userdata('My_Cart')): ?>
              <div class="dropdown-content">
                <p>It apears that your cart is currently empty!</p><br>
                 <a class="cbtn">CONTINUE SHOPPING</a>
              </div>
            <?php endif ?>
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
        </div>