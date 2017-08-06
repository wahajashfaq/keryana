<?php include('landing_header.php') ?>

<div id="PrintResult">
  <?php 

  if ($CartItems = $this->session->userdata('My_Cart')) {


    // echo "<pre>";
    // print_r ($CartItems);
    // echo "</pre>";

    //session_unset('My_Cart');

  } 

  ?>
</div>

<div class="container" style="padding-bottom:30px;">
  <div class="row">
    <div class="col-md-3">
      <img src="<?php echo base_url('assets/images/mylogo.jpg') ?>" alt="logo" style="width:250px;height:63px">
    </div>
    <div class="col-md-6">
      <form class="">
        <div class="search-box">
          <input  type="text" name="q" value="" placeholder="Search for a Brand, Product or Specific Item" class="search" id="search">
        </div>
        <!-- input type="submit" class="sbutn" value="Search"-->
      </form>    
    </div>
    <div class="col-md-3" style="overflow-x: visible;">
            <!--
            <div class="div-welc1">
                <div class="welc">Welcome Guest</div>
                    <div class="customer-links">
                        <a href="">
                            Login
                        <span class="or">|</span>
                        Signup
                        </a>    
                    </div>
            </div>
          -->
          <div class="dropdown" style="float:right;">
            <button class="dropbtn div-welc2">
              <center><img src="<?php echo base_url('assets/images/carticon.png') ?>" class="cart"><span class="first">Your Cart</span>
                <div class="count-group"><span class="second">0</span><span class="second"> items</span></div></center>
              </button>
              <div class="dropdown-content">
                <?php $items=1; if ($CartProducts){ ?>
        
                        <div style="width:100%;max-height:220px;overflow-y:auto;overflow-x:hidden;">
                            <br>
                        <div class="row">
                            <div class="col-md-12" style="padding-left:30px;padding-right:30px;">
                                <div class="cartfhead" style="float:left">Your Cart <span>(<?php if(!$CartProducts){echo 0;}else echo count($CartProducts) ?> items)</span></div>
                                <div style="float:right;margin-top:-20px">
                                <center><img src="<?php echo base_url('assets/images/cartfilled.png') ?>" class="cart"><span >Your Saved</span>
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
                                <div style="float:left;font-weight:600">Discount</div><div style="float:right">Rs <?php echo $discount; ?></div>
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
                                    <div class="col-md-5"><button class="btn btn-block bcartview"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"> View Cart</button></div>
                                    <div class="col-md-5"><button class="btn btn-block coutview">Check Out</button></div>
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
          <div class="col-md-3" style="padding-right:0px;">
            <div class="sidebarhead xs-hidden" style="border-width:1px;border:1px solid #96C658;">
              Shop <img src="<?php echo base_url('assets/images/shopicon.png') ?>" style="float:right;margin-top: 6px;">
            </div>
            <ul class="shoplinks xs-hidden">

              <?php $count = 0;
              foreach ($categories as $category){?>

              <li>
               <div class="dropleft">
                 <a style="color:black;" href="<?php echo base_url('welcome/category/First/'.$category["EncryptedId"]) ?>" target="blank"><span class="text"><?php echo $category["Name"]; ?></span></a><i class="fa fa-caret fa-caret-right" style="float:right"></i>
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

         <div class="col-md-9 col-slidemain" >

          <div class="row">
            <div class="col-md-12">
              <div class="midlehead  xs-hidden">
                <a id="m1">
                  <span class="mitem" ><img src="<?php echo base_url('assets/images/slider_top_link_1.png') ?>" class="mitem1"><span class="mitem2">Daily Need Store</span></span>
                </a>
                <a  id="m2">
                  <span class="mitem" style="margin-left:20px"><img src="<?php echo base_url('assets/images/slider_top_link_2.png') ?>" class="mitem1"><span class="mitem2">Special Offer</span></span>
                </a>
                <a  id="m3">
                  <span class="mitem"  style="margin-left:20px"><img src="<?php echo base_url('assets/images/slider_top_link_1.png') ?>" class="mitem1"><span class="mitem2">New Arrival</span></span>
                </a >
                <a id="m4" style="float:right">
                  <span class="mitem" ><img src="<?php echo base_url('assets/images/slider_top_link_3.png') ?>" class="mitem1"><span class="mitem2">Recipie Blog</span></span>
                </a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-9 col-slider">
              <div class="homeslider">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Wrapper for slides -->
                  <!-- Indicators -->

                  <div class="carousel-inner">
                    

                    <?php $count=1; foreach ($SlidingBanners as $banner): ?>
                      <div id="slide<?php echo $count ?>" class="item <?php if ($count==1){ echo "active"; }$count++; ?>">
                        <img src="<?php echo base_url('uploads/sliding_banner/'.$banner["ImageUrl"]); ?>">
                      </div>
                        
                              
                    <?php endforeach ?>
                    </div>

                  <ol class="carousel-indicators">

                    <?php $count=1; foreach ($SlidingBanners as $banner): ?>
                      <li data-target="#myCarousel" data-slide-to="<?php echo $count-1; ?>" <?php if ($count==1){ echo "class='active'"; }$count++; ?>"></li>      
                    <?php endforeach ?>
                  </ol>
                </div>
                            <!--div class="row">
                                <div class="col-md-4" style="padding-right:0px;">
                                    <div id="ind1" class="box2 text-center xs-hidden">
                                        Free homefoil<br>
                                        <span>On Order Rs 999</span>
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding-left:0px;padding-right:0px;">
                                    <div id="ind2" class="box text-center xs-hidden">
                                        Free homefoil<br>
                                        <span>On Order Rs 999</span>
                                    </div>
                                </div>
                                <div class="col-md-4"  style="padding-left:0px;">
                                    <div id="ind3" class="box text-center xs-hidden">
                                        Free homefoil<br>
                                        <span>On Order Rs 999</span>
                                    </div>
                                    <div class="arow-up"></div>
                                </div>
                              </div-->
                            </div>
                          </div>
                          <div class="col-md-3 col-sbanner">
                            <div class="sidebanners">
                              <img src="<?php echo base_url('uploads/banners/banner_one.jpg') ?>" style="margin-bottom:15px">
                              <img src="<?php echo base_url('uploads/banners/banner_two.jpg') ?>">
                            </div>
                          </div>

                        </div>
                      </div>    
                    </div>
                    <br><br>

                    <div class="row">
                      <div class="col-md-12">

                        <div class="carousel slide carousel1" id="myCarousel1">
                          <div class="carousel-inner">


                            <?php $count = 0;
                            foreach ($categories as $category){?>
                            <div class="item <?php if($count==0){echo "active";$count="1";} ?>">
                              <div class="col-md-2">
                                <center><a href="#" class="slider2-label"><img src="<?php echo base_url('assets/images/home_slider_image_4.jpg') ?>" class="img-circle" style="width:100px;height:100px">
                                  <div><?php echo $category["Name"]; ?></div>
                                </a></center>
                              </div>
                            </div>
                            <?php } ?>
                          </div>

                          <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                          <a class="right carousel-control" href="#myCarousel1" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                      </div>
                      <br><br>

                      <div class="row">
                        <div class="col-md-4">
                          <img class="imgbanner3" src="<?php echo base_url('assets/images/home_slider_image_1.jpg') ?>">
                        </div>
                        <div class="col-md-4">
                          <img class="imgbanner3" src="<?php echo base_url('assets/images/home_slider_image_2.jpg') ?>">
                        </div>
                        <div class="col-md-4">
                          <img class="imgbanner3" src="<?php echo base_url('assets/images/home_slider_image_3.jpg') ?>">
                        </div>
                      </div>
                      <br><br>

                      <div class="row">
                        <div class="col-md-5 col-sm-4 col-xs-3" style="padding-right:0px;padding-top:15px">
                          <div class="hline"></div>
                          <div class="hline" style="margin-top:2px"></div>
                        </div>
                        <div class="col-md-2 col-sm-4 col-xs-6" style="padding-right:0px;padding-left:0px">
                          <div class="line-head"><center>BEST<span> SELLING</span></center></div>
                        </div>
                        <div class="col-md-5 col-sm-4 col-xs-3" style="padding-left:0px;padding-top:15px">
                          <div class="hline"></div>
                          <div class="hline" style="margin-top:2px"></div>
                        </div>
                      </div>
                      <br><br>

                      <div class="row">
                        <div class="col-md-12">

                          <div class="carousel slide carousel1" id="myCarousel2">
                            <div class="carousel-inner">
                              <div class="item active">
                                <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                                  <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                                  <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
                                    <br><br><div>Product name</div>
                                  </div><br>
                                  <button class="qview">QUICK VIEW</button>
                                  <select class="qselect">
                                    <option>5 Kg</option>
                                    <option>10 Kg</option>
                                  </select>
                                  <br><br>
                                  <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                                  <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                                  <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                                </center>
                              </div>
                            </div>
                            <div class="item">
                              <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                                <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                                <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
                                  <br><br><div>Product name</div>
                                </div><br>
                                <button class="qview">QUICK VIEW</button>
                                <div class="qfix">5 Kg</div>
                                <br>
                                <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                                <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                                <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                              </center>
                            </div>
                          </div>
                          <div class="item">
                            <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                              <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                              <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
                                <br><br><div>Product name</div>
                              </div><br>
                              <button class="qview">QUICK VIEW</button>
                              <select class="qselect">
                                <option>5 Kg</option>
                                <option>10 Kg</option>
                              </select>
                              <br><br>
                              <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                              <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                              <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                            </center>
                          </div>
                        </div>
                        <div class="item">
                          <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                            <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                            <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
                              <br><br><div>Product name</div>
                            </div><br>
                            <button class="qview">QUICK VIEW</button>
                            <div class="qfix">5 Kg</div>
                            <br>
                            <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                            <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                            <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                          </center>
                        </div>
                      </div>
                      <div class="item">
                        <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                          <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                          <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
                            <br><br><div>Product name</div>
                          </div><br>
                          <button class="qview">QUICK VIEW</button>
                          <select class="qselect">
                            <option>5 Kg</option>
                            <option>10 Kg</option>
                          </select>
                          <br><br>
                          <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                          <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                          <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                        </center>
                      </div>
                    </div>
                    <div class="item">
                      <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                        <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                        <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
                          <br><br><div>Product name</div>
                        </div><br>
                        <button class="qview">QUICK VIEW</button>
                        <div class="qfix">5 Kg</div>
                        <br>
                        <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                        <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                        <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                      </center>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                      <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                      <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
                        <br><br><div>Product name</div>
                      </div><br>
                      <button class="qview">QUICK VIEW</button>
                      <select class="qselect">
                        <option>5 Kg</option>
                        <option>10 Kg</option>
                      </select>
                      <br><br>
                      <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                      <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                      <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                    </center>
                  </div>
                </div>
                <div class="item">
                  <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                    <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                    <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
                      <br><br><div>Product name</div>
                    </div><br>
                    <button class="qview">QUICK VIEW</button>
                    <div class="qfix">5 Kg</div>
                    <br>
                    <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                    <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                    <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                  </center>
                </div>
              </div>
              <div class="item">
                <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                  <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                  <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
                    <br><br><div>Product name</div>
                  </div><br>
                  <button class="qview">QUICK VIEW</button>
                  <select class="qselect">
                    <option>5 Kg</option>
                    <option>10 Kg</option>
                  </select>
                  <br><br>
                  <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                  <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                  <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                </center>
              </div>
            </div>
            <div class="item">
              <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
                <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
                <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
                  <br><br><div>Product name</div>
                </div><br>
                <button class="qview">QUICK VIEW</button>
                <div class="qfix">5 Kg</div>
                <br>
                <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
                <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
                <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
              </center>
            </div>
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#myCarousel2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <br><br>

  <div class="row">
    <div class="col-md-5 col-sm-4 col-xs-3" style="padding-right:0px;padding-top:15px">
      <div class="hline"></div>
      <div class="hline" style="margin-top:2px"></div>
    </div>
    <div class="col-md-2 col-sm-4 col-xs-6" style="padding-right:0px;padding-left:0px">
      <div class="line-head"><center>NEW<span> ARRIVAL</span></center></div>
    </div>
    <div class="col-md-5 col-sm-4 col-xs-3" style="padding-left:0px;padding-top:15px">
      <div class="hline"></div>
      <div class="hline" style="margin-top:2px"></div>
    </div>
  </div>
  <br><br>

  <div class="row">
    <div class="col-md-12">

      <div class="carousel slide carousel1" id="myCarousel4">
        <div class="carousel-inner">



         <?php $count = 0;
         foreach ($NewArrivals as $row){?>

         <div class="item <?php if($count==0){echo "active";$count="1";} ?>">
          <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
            <div style="height: 40px">
            <?php if(isset($row["OfferType"])) 

              if($row["OfferType"]=="Amount"){

            echo "<div class='discount' style='margin-left:10px'><center>Rs ".$row['OfferAmount']."<span>OFF</span></center></div><br><br>";

              }else if($row["OfferType"]=="Percent"){

            echo "<div class='discount' style='margin-left:10px'><center>".$row['OfferAmount']."%<span>OFF</span></center></div><br><br>";
              }

            ?><!-- <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br> -->
            </div>
            <center><div class="slider3-label"><img src="<?php echo base_url('uploads/product_images/'.$row["Image"]); ?>" style="width:150px;height:150px">
              <br><br><div style="height: 20px;"><?php echo $row["Name"] ?></div>
            </div><br>
            <a target="_blank" href="<?php echo base_url('welcome/product/'.$row["EncryptedId"]); ?>"><button class="qview">QUICK VIEW</button></a>
            <?php if(count($row["Units"])==1)
            echo "<div class='qfix'>".$row['Units'][0]['Unit']."</div>";else{ ?>
            <select class="new_arrivals_product qselect"  onchange="testing('<?php echo $row["EncryptedId"]; ?>')"  id="<?php echo $row["EncryptedId"]; ?>">
              <?php 
              foreach ($row["Units"] as $units) { ?>
              <option data-percentage="<?php echo $units["ID"]; ?>" value="<?php echo $units["Price"]; ?>"><?php echo $units["Unit"]; ?></option>
              <?php
            }
            ?>

          </select><br>
            <?php } 

            ?>

          <br><br>
          <span>Rs </span><span class="new_arrivals_price nprice" data-percentage="<?php echo $row["Units"][0]["ID"]; ?>" id="<?php echo $row["EncryptedId"]; ?>" ><?php echo $row["Units"][0]["Price"]; ?></span>
          <!-- <span class="nprice">Rs 500</span><br><br> -->
          <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span id="<?php echo $row["EncryptedId"]; ?>"  class="new_arrivals_quantity qval">1</span><i class="fa fa-plus" aria-hidden="true"></i></div>
          <button class="addbtn" onclick="add_data('<?php echo $row["EncryptedId"]; ?>',this)" ><img  class="btn_image" width="26" height="21" src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
        </center>
      </div>
    </div>

    <?php } ?>
  </div>
  <a class="left carousel-control" href="#myCarousel4" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
  <a class="right carousel-control" href="#myCarousel4" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
</div>
</div>
</div>
<br><br>

<div class="row">
  <div class="col-md-12">

    <div class="carousel slide carousel1" id="myCarousel5">

      <div class="carousel-inner">


       <?php $count = 0;
       foreach ($brands as $brand){?>
       <div class="item <?php if($count==0){echo "active";$count="1";} ?>">
        <div class="col-md-2">

          <?php $imageURL = base_url('uploads/brands/'.$brand["ImageUrl"]); ?>
          <center><a href="#" class="slider2-label"><img src="<?php echo $imageURL; ?>" class="img-circle" style="width:100px;height:100px">
          </a></center>
        </div>
      </div>
      <?php } ?>

    </div>
    <a class="left carousel-control" href="#myCarousel5" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
    <a class="right carousel-control" href="#myCarousel5" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
  </div>
</div>
</div>
<br><br>

<div class="row">
  <div class="col-md-6">
    <img class="imgbanner3" src=" <?php echo base_url('uploads/banners/banner_one.jpg') ?>">
  </div>
  <div class="col-md-6">
    <img class="imgbanner3" src=" <?php echo base_url('uploads/banners/banner_two.jpg') ?>">
  </div>
</div>
<br><br>    
<!-- 
<div class="row">
  <div class="col-md-5 col-sm-4 col-xs-3" style="padding-right:0px;padding-top:15px">
    <div class="hline"></div>
    <div class="hline" style="margin-top:2px"></div>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6" style="padding-right:0px;padding-left:0px">
    <div class="line-head"><center>KAREYANA<span> PRODUCTS</span></center></div>
  </div>
  <div class="col-md-5 col-sm-4 col-xs-3" style="padding-left:0px;padding-top:15px">
    <div class="hline"></div>
    <div class="hline" style="margin-top:2px"></div>
  </div>
</div>
<br><br>


<div class="row">
  <div class="col-md-12">

    <div class="carousel slide carousel1" id="myCarousel2">
      <div class="carousel-inner">
        <div class="item active">
          <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
            <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
            <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
              <br><br><div>Product name</div>
            </div><br>
            <button class="qview">QUICK VIEW</button>
            <select class="qselect">
              <option>5 Kg</option>
              <option>10 Kg</option>
            </select>
            <br><br>
            <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
            <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
            <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
          </center>
        </div>
      </div>
      <div class="item">
        <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
          <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
          <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
            <br><br><div>Product name</div>
          </div><br>
          <button class="qview">QUICK VIEW</button>
          <div class="qfix">5 Kg</div>
          <br>
          <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
          <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
          <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
        </center>
      </div>
    </div>
    <div class="item">
      <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
        <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
        <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
          <br><br><div>Product name</div>
        </div><br>
        <button class="qview">QUICK VIEW</button>
        <select class="qselect">
          <option>5 Kg</option>
          <option>10 Kg</option>
        </select>
        <br><br>
        <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
        <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
        <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
      </center>
    </div>
  </div>
  <div class="item">
    <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
      <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
      <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
        <br><br><div>Product name</div>
      </div><br>
      <button class="qview">QUICK VIEW</button>
      <div class="qfix">5 Kg</div>
      <br>
      <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
      <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
      <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
    </center>
  </div>
</div>
<div class="item">
  <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
    <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
    <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
      <br><br><div>Product name</div>
    </div><br>
    <button class="qview">QUICK VIEW</button>
    <select class="qselect">
      <option>5 Kg</option>
      <option>10 Kg</option>
    </select>
    <br><br>
    <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
    <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
    <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
  </center>
</div>
</div>
<div class="item">
  <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
    <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
    <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
      <br><br><div>Product name</div>
    </div><br>
    <button class="qview">QUICK VIEW</button>
    <div class="qfix">5 Kg</div>
    <br>
    <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
    <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
    <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
  </center>
</div>
</div>
<div class="item">
  <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
    <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
    <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
      <br><br><div>Product name</div>
    </div><br>
    <button class="qview">QUICK VIEW</button>
    <select class="qselect">
      <option>5 Kg</option>
      <option>10 Kg</option>
    </select>
    <br><br>
    <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
    <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
    <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
  </center>
</div>
</div>
<div class="item">
  <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
    <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
    <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
      <br><br><div>Product name</div>
    </div><br>
    <button class="qview">QUICK VIEW</button>
    <div class="qfix">5 Kg</div>
    <br>
    <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
    <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
    <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
  </center>
</div>
</div>
<div class="item">
  <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
    <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
    <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
      <br><br><div>Product name</div>
    </div><br>
    <button class="qview">QUICK VIEW</button>
    <select class="qselect">
      <option>5 Kg</option>
      <option>10 Kg</option>
    </select>
    <br><br>
    <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
    <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
    <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
  </center>
</div>
</div>
<div class="item">
  <div class="col-md-2 product" style="padding-left:0px;padding-right:0px">
    <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br>
    <center><div class="slider3-label"><img src="<?php echo base_url('assets/images/product.jpg') ?>" style="width:150px;height:150px">
      <br><br><div>Product name</div>
    </div><br>
    <button class="qview">QUICK VIEW</button>
    <div class="qfix">5 Kg</div>
    <br>
    <span class="oprice">Rs 1000</span><span class="nprice">Rs 500</span><br><br>
    <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
    <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
  </center>
</div>
</div>
</div>
<a class="left carousel-control" href="#myCarousel2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
<a class="right carousel-control" href="#myCarousel2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
</div>
</div>
</div>
<br><br>

-->

</div>

<div id="backtotop" class="container-fluid">
  <a href="#top"><div class="backtotop"></div></a>
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
      <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
      <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
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
    <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
    <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
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
  <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
  <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
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
  <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
  <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
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
  <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
  <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
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
  <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
  <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
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
        <center><input type="email" id="contact_email" class="input-lg cinput"  placeholder="Email"></center>
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-12">
        <center><input type="number" id="contact_number" class="input-lg cinput"  placeholder="Phone number"></center>
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-12">
        <center><input type="text" id="contact_subject" class="input-lg cinput"  placeholder="subject"></center>
      </div>
    </div><br>

    <div class="row">
      <div class="col-md-12">
        <center><textarea class="input-lg cinput" id="contact_query"  placeholder="State Your Query"></textarea></center>
      </div>
    </div>
    <br>

    
    <div class="row">
      <div class="col-md-12">
        <center><button id="contact_btn" class="btn-lg sbtn">Submit</button></center>
      </div>
    </div>
  </div>
</div>

</div>





<?php include('about_footer.php'); ?>        


<script type="text/javascript">


  function testing(event){

    $price = $('.new_arrivals_product#'+event).val();
    $percentage = $('.new_arrivals_product#'+event).find(':selected').attr('data-percentage');
    console.log($('#'+event+'.new_arrivals_price').html($price));
    console.log($('#'+event+'.new_arrivals_price').attr('data-percentage',$percentage));
        //  alert($('#'+event+'.new_arrivals_price').attr('data-percentage'));
       //   alert($('#'+event+'.new_arrivals_price').html());

     }


     function   add_data(product_ID,event){

      $(document).ready(function(){

        $price = $('#'+product_ID+'.new_arrivals_price').html();
        $quantity = $('#'+product_ID+'.new_arrivals_quantity').html();
        $percentage = $('#'+product_ID+'.new_arrivals_price').attr('data-percentage');


            //console.log("Price =>"+$price+"  AND  ID =>"+$percentage);
            //  alert($quantity);

            jQuery.ajax({

              type: "POST",
              url: "<?php echo base_url(); ?>" + "/customer/Cart/AddToCart",
              dataType: 'text',
              data: {
                priceOfProduct : $price, 
                UnitID : $percentage,
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
                    $(event).children().attr('src',"<?php echo base_url('assets/images/addbicon.png');?>");
                    $('.dropdown-content').html(res);

                    $(event).attr('disable',"true");
                  }

                },
                beforeSend : function()
                {
                  $(event).children().attr('src',"<?php echo base_url('assets/images/adding.gif');?>");
                  $(event).attr('disable',"true");
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });


          });
    }





  </script>