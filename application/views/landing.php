<?php include('landing_header.php') ?>



<div class="container" style="padding-bottom:30px;">
  <div class="row">
    <div class="col-md-3">
      <img src=" <?php echo base_url('assets/images/mylogo.jpg') ?> " alt="logo" style="width:250px;height:63px">
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
                <p>It apears that your cart is currently empty!</p><br>
                <a class="cbtn">CONTINUE SHOPPING</a>
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
                 <span class="text"><?php echo $category["Name"]; ?></span><i class="fa fa-caret fa-caret-right" style="float:right"></i>
                 <div class="dropleft-content"  style="top:<?php echo $count*-33;$count++; ?>px;">
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
                    <div id="slide1" class="item active">
                      <img src="<?php echo base_url('assets/images/home_slider_image_1.jpg') ?>">
                    </div>
                    <div id="slide2" class="item">
                      <img src="<?php echo base_url('assets/images/home_slider_image_2.jpg') ?>">
                    </div>
                    <div id="slide3" class="item">
                      <img src="<?php echo base_url('assets/images/home_slider_image_3.jpg') ?>">
                    </div>
                    <div id="slide3" class="item">
                      <img src="<?php echo base_url('assets/images/home_slider_image_3.jpg') ?>">
                    </div>
                    <div id="slide3" class="item">
                      <img src="<?php echo base_url('assets/images/home_slider_image_3.jpg') ?>">
                    </div>
                  </div>

                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
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
                              <img src="<?php echo base_url('assets/images/home_slider_image_1.jpg') ?>" style="margin-bottom:15px">
                              <img src="<?php echo base_url('assets/images/home_slider_image_2.jpg') ?>">
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
              <?php if(isset($row["OfferType"])) 

                echo "<div class='discount' style='margin-left:10px'><center>19% <span>OFF</span></center></div><br><br>";
               ?><!-- <div class="discount" style="margin-left:10px"><center>19% <span>OFF</span></center></div><br><br> -->
              <center><div class="slider3-label"><img src="<?php echo base_url('uploads/product_images/'.$row["Image"]); ?>" style="width:150px;height:150px">
                <br><br><div><?php echo $row["Name"] ?></div>
              </div><br>
              <a target="_blank" href="<?php echo base_url('welcome/product/'.$row["EncryptedId"]); ?>"><button class="qview">QUICK VIEW</button></a>
              <?php if(count($row["Units"])==1)
                    echo "<div class='qfix'>".$row['Units'][0]['Unit']."</div>";else{ ?>
              <select class="new_arrivals_product qselect"  onchange="testing('<?php echo $row["EncryptedId"]; ?>')"  id="<?php echo $row["EncryptedId"]; ?>">
                <?php 
                    foreach ($row["Units"] as $units) { ?>
                    <option data-percentage="" value="<?php echo $units["Price"]; ?>"><?php echo $units["Unit"]; ?></option>
                    <?php
                }
                ?>

                <?php } ?>

              </select>
              <br><br>
              <span class="new_arrivals_price nprice" id="<?php echo $row["EncryptedId"]; ?>" >Rs <?php echo $row["Units"][0]["Price"]; ?></span>
              <!-- <span class="nprice">Rs 500</span><br><br> -->
              <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
              <button class="addbtn"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
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
    <img class="imgbanner3" src=" <?php echo base_url('assets/images/home_slider_image_1.jpg') ?>">
  </div>
  <div class="col-md-6">
    <img class="imgbanner3" src=" <?php echo base_url('assets/images/home_slider_image_1.jpg') ?>">
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

    <select class="testing">
      <option>2</option>
      <option>2</option>
      <option>2</option>
    </select>
    
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
          console.log($('#'+event+'.new_arrivals_price').html($price));
          alert($('#'+event+'.new_arrivals_price').html());

      }

</script>