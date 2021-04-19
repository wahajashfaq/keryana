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

            <div class="dropdown" style="float:right;">
              <button class="dropbtn div-welc2">
                  <center><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:25px;color:#A1DB0C;"></i><span class="first">Your Cart</span>
                <div class="count-group"><span class="second items_COUNT"><?php echo $CartItemsCount ?></span><span class="second"> items</span></div></center>
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
                    <button class="dropbtnf" style="border:none;background:none;width:100%;padding-left:0px;height:40px"><span style="font-weight:900">Rack</span> <img src="<?php echo base_url('assets/images/shopicon.png')?>" style="float:right;margin-top: 6px;"></button>
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
                       <!--a id="m4" style="float:right">
                                <span class="mitem" ><i class="fa fa-book" aria-hidden="true" style="font-size:25px;color:#A1DB0C"></i><span class="mitem2">Recipie Blog</span></span>
                            </a-->
                      </div>
                        </div>
                    </div>
                </div>    
    </div>
    <div class="row xs-login">
        <div class="col-md-12">
            <div class="catebox">
                <center><i class="fa fa-check" aria-hidden="true"></i></center>
                <center><p>Your order has been confirmed</p></center>
                <center><div class="odiv">OrderID : <span><?php echo $OrderID; ?></span></div></center>
                <center><div class="odiv1">Happy Buying :)</div></center><br><br>
                <center><a href="<?php echo base_url() ?>"><button class="confirmbtn"  >Home</button></a></center>
            </div>   
        </div>
    </div>
    
</div>



<?php $this->load->view('about_footer.php'); ?>        
