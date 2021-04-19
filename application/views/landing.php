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

<style type="text/css">

  select{

    display: block;
  }
</style>
<div class="container" style="padding-bottom:30px;">
  <div class="row">
    <div class="col-md-3 xs-hidden">
      <a href="<?php echo base_url() ?>">
        <img src="<?php echo base_url('assets/images/mylogo.jpg')?>" alt="logo" style="width:250px;height:63px">
      </a>
    </div>
    <div class="col-md-6 xs-hidden">
      <form class="">
        <div class="search-box">
          <input  type="text" name="q" value="" onkeyup="searchProducts(this.value)" placeholder="Search for a Brand, Product or Specific Item" class="search" id="search">
        </div>
        <!-- input type="submit" class="sbutn" value="Search"-->
      </form>    
    </div>
    <div class="col-md-3 xs-hidden" style="overflow-x: visible;">
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
              <center><i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:25px;color:#A1DB0C;"></i><span class="first">Your Cart</span>
                <div class="count-group"><span class="second items_COUNT"><?php echo $CartItemsCount ?></span><span class="second"> items</span></div></center>
              </button>
              <div class="dropdown-content" style="padding-left:0px;padding-right:0px;">


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

            <?php } else echo"<div style='margin-left:15px;'><p>Shop overRs 499 to avail free delivery</p><br>
            <a class='cbtn'>CONTINUE SHOPPING</a></div>"?>
          </div>
        </div>
      </div>    
    </div>

    <div class="row" style="padding-top:20px">
      <div class="col-md-3" style="padding-right:0px;">
        <div class="sidebarhead xs-hidden" style="border-width:1px;border:1px solid #96C658;">
          Racks <img src="<?php echo base_url('assets/images/shopicon.png') ?>" style="float:right;margin-top: 6px;">
        </div>
        <ul class="shoplinks xs-hidden">

          <?php $count = 0;
          foreach ($categories as $category){ $countx=0;?>

            <li>
             <div class="dropleft">
               <a style="color:black;" href="<?php echo base_url('welcome/category/First/'.$category["EncryptedId"]) ?>" ><span class="text"><?php echo $category["Name"]; ?></span></a><i class="fa fa-caret fa-caret-right" style="float:right"></i>
               <div class="dropleft-content"  style="top:<?php echo $count*-33;$count++; ?>px;">
                 <div class="container-fluid">
                   <div class="row">
                     <?php foreach ($category["SUB CATEGORIES"] as $category2){?>
                       <div class="col-md-3">
                         <a href="<?php echo base_url('welcome/category/Second/'.$category2["EncryptedId"]) ?>" ><div class="head"><?php echo $category2["Name"]; ?></div></a>

                         <?php foreach ($category2["SUB CATEGORIES"] as $category4){?>
                           <a href="<?php echo base_url('welcome/category/Third/'.$category4["EncryptedId"]) ?>" ><div class="item"><?php echo $category4["Name"]; ?></div></a>

                           <?php } ?>

                         </div>
                         <?php $countx++;
                         if($countx==4){?>
                         </div><div clas="row">
                         <?php
                       }  } ?>

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
              <a id="m4" style="float:left" href="<?php echo base_url('welcome/gethotproducts') ?>">
                <span class="mitem" ><i class="fa fa-shopping-bag" aria-hidden="true" style="font-size:25px;color:#A1DB0C"></i><span class="mitem2">Hot Deals</span></span>
              </a>
            </div>
          </div>
        </div>

        <div class="row xs-login">
          <div class="col-md-9 col-slider">
            <div class="homeslider">
              <div id="myCarousel" class="carousel slide myslide" data-ride="carousel">
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
                                        <span>On Order Rs 499</span>
                                    </div>
                                </div>
                                <div class="col-md-4" style="padding-left:0px;padding-right:0px;">
                                    <div id="ind2" class="box text-center xs-hidden">
                                        Free homefoil<br>
                                        <span>On Order Rs 499</span>
                                    </div>
                                </div>
                                <div class="col-md-4"  style="padding-left:0px;">
                                    <div id="ind3" class="box text-center xs-hidden">
                                        Free homefoil<br>
                                        <span>On Order Rs 499</span>
                                    </div>
                                    <div class="arow-up"></div>
                                </div>
                              </div-->
                            </div>
                          </div>
                          <div class="col-md-3 col-sbanner xs-hidden">
                            <div class="sidebanners">
                              <a href="<?php echo $Banner[0]['PageUrl'] ?>">
                                <img src="<?php echo base_url('uploads/banners/banner_one.jpg') ?>" style="margin-bottom:15px"></a>
                                <a href="<?php echo $Banner[1]['PageUrl'] ?>">
                                  <img src="<?php echo base_url('uploads/banners/banner_two.jpg') ?>">
                                </a>
                              </div>
                            </div>

                          </div>
                        </div>    
                      </div>
                      <br><br>
                      
                      <div class="row" style="overflow-x:hidden">
                        <div class="col-md-12 col-xs-12 col-sm-12">

                          <div class="carousel slide carousel1" id="myCarousel1">
                            <div class="carousel-inner carousel-innerd1">


                              <?php $count = 0;
                              $countlimit=6;
                                if($this->session->userdata('width'))
                                {
                                    if($this->session->userdata('width')<992){
                                        $countlimit=4;
                                    }
                                }
                              ?>
                                <div class="item <?php $var=0;$img=1;if($count==0){echo "active";$count="1";} ?>">
                                <?php foreach ($categories as $category){ ?>
                                  <div class="col-md-2 col-xs-3 col-sm-3">
                                    <center><a href="<?php echo base_url('welcome/category/First/'.$category["EncryptedId"]) ?>" class="slider2-label"><img src="<?php echo base_url('assets/images/'.$img.".jpg") ?>" class="img-circle imgcrl" >
                                      <div class="img-name" style = "height:40px !important"><?php echo $category["Name"]; ?></div>
                                    </a></center>
                                  </div><?php $var++;$img++;if($var==$countlimit){ $var=0; echo "</div><div class='item'>";  }
                                 } ?>
                                 </div>
                              </div>

                              <a class="left carousel-control" href="#myCarousel1" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                              <a class="right carousel-control" href="#myCarousel1" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </div>
                          </div>


                          <br><br>

                          <div class="row">
                            <div class="col-md-4 xs-hidden">
                              <a href="<?php echo $Banner[2]['PageUrl'] ?>"><img class="imgbanner3" src="<?php echo base_url('uploads/banners/threebanner_one.jpg') ?>" ></a>
                            </div>
                            <div class="col-md-4 xs-hidden">
                              <a href="<?php echo $Banner[3]['PageUrl'] ?>"><img class="imgbanner3" src="<?php echo base_url('uploads/banners/threebanner_two.jpg') ?>" ></a>
                            </div>
                            <div class="col-md-4 xs-hidden">
                              <a href="<?php echo $Banner[4]['PageUrl'] ?>"><img class="imgbanner3" src="<?php echo base_url('uploads/banners/threebanner_three.jpg') ?>"  ></a>
                            </div>
                          </div>
                          <br><br>
                          
                          <div class="row">
                            <div class="col-md-5 col-sm-4 col-xs-3" style="padding-right:0px;padding-top:15px">
                              <div class="hline"></div>
                              <div class="hline" style="margin-top:2px"></div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6" style="padding-right:0px;padding-left:0px">
                              <div class="line-head"><center><a href="<?php echo base_url('welcome/gethotproducts') ?>">HOT <span>DEALS</span></a></center></div>
                            </div>
                            <div class="col-md-5 col-sm-4 col-xs-3" style="padding-left:0px;padding-top:15px">
                              <div class="hline"></div>
                              <div class="hline" style="margin-top:2px"></div>
                            </div>
                          </div>
                          <br><br>

                          <div class="row">
                            <div class="col-md-12 col-xs-12 col-sm-12">

                              <div class="carousel slide carousel1"  id="myCarousel_hot">
                                <div class="carousel-inner carousel-innerd" >


                                 <?php $count = 0;
                                 $countlimit=6;
                                 $var=0;
                                if($this->session->userdata('width'))
                                {
                                    if($this->session->userdata('width')<992){
                                        $countlimit=2;
                                    }
                                }
                                 ?>


                                           <div class="item <?php if($count==0){echo "active";$count="1";} ?>">
                                           <?php foreach ($HotDeals as $row){
                                           if($var==$countlimit){ $var=0; echo "</div><div class='item'>";} ?>
                                            <div class="col-md-2 product  col-xs-6 col-sm-6" style="padding-left:0px;padding-right:0px">
                                              <div class="offer_tag" id="<?php echo $row['EncryptedId'];?>"  <?php if(isset($row["Units"][0]["OfferType"])) {?> style="height: 40px"<?php }else{?>style="height: 60px"<?php }?>>
                                                <?php if(isset($row["Units"][0]["OfferType"])) {

                                                  if($row["Units"][0]["OfferType"]=="Amount"){

                                                    echo "<div class='discount' style='margin-left:10px'><center>Rs ".$row["Units"][0]['OfferAmount']."<span> OFF</span></center></div><br><br>";

                                                  }else if($row["Units"][0]["OfferType"]=="Percent"){

                                                    echo "<div class='discount' style='margin-left:10px'><center>".$row["Units"][0]['OfferAmount']." % <br><span>OFF</span></center></div><br><br>";
                                                  }
                                                }

                                                ?>
                                              </div>
                                              <center><div class="slider3-label"><img src="<?php echo base_url('uploads/product_images/'.$row["Image"]); ?>" style="width:150px;height:150px">
                                                <br><br><div style="height: 20px;"><?php echo $row["Name"] ?></div>
                                              </div><br>
                                              <a target="_blank" href="<?php echo base_url('welcome/product/'.$row["EncryptedId"]); ?>"><button class="qview">QUICK VIEW</button></a>
                                              <?php 
                                              if(count($row["Units"])==1){

                                                echo "<div class='qfix'>".$row['Units'][0]['Unit']."</div><br>";
                                              }
                                              else{ ?>

                                                <select class="new_arrivals_product qselect"  onchange="testing('<?php echo $row["EncryptedId"]; ?>',this)"  id="<?php echo $row["EncryptedId"]; ?>">
                                                  <?php 

                                                  foreach ($row["Units"] as $units) { ?>

                                                    <option  data-offertype='<?php echo $units["OfferType"]; ?>' data-offeramount='<?php echo $units["OfferAmount"]; ?>' data-percentage="<?php echo $units["ID"]; ?>" data-discount="<?php echo $units["Discount"] ?>" value="<?php echo $units["Price"]; ?>"><?php echo $units["Unit"]; ?></option>
                                                    <?php
                                                  }
                                                  ?>

                                                </select><br>
                                                <?php } 

                                                ?>

                                                <br>
                                         

                                                <?php if($row["Units"][0]["Discount"]==0){ ?>
                                                <span class="rs1_tag" style="color:#A3D930 !important" id="<?php echo $row["EncryptedId"]; ?>" >Rs </span>
                                                  <span class="new_arrivals_price nprice" style="color:#6B953E !important;font-weight:bold"   data-discount="<?php echo $row["Units"][0]["Discount"] ?>"  data-percentage="<?php echo $row["Units"][0]["ID"]; ?>" id="<?php echo $row["EncryptedId"]; ?>" ><?php echo $row["Units"][0]["Price"]; ?></span><br><br>
                                                  <?php } else {    ?> 
                                               <span class="rs_tag" id="<?php echo $row["EncryptedId"]; ?>" >Rs </span>
                                                    <span class="new_arrivals_price oprice"  data-discount="<?php echo $row["Units"][0]["Discount"] ?>" data-percentage="<?php echo $row["Units"][0]["ID"]; ?>" id="<?php echo $row["EncryptedId"]; ?>" ><?php echo $row["Units"][0]["Price"]; ?></span>
                                                   <span style="color:#6B953E !important">Rs</span><span style="color:#6B953E !important;font-weight:bold" class="nprice new_arrivals_nprice" id="<?php echo $row["EncryptedId"]; ?>" > <?php echo round($row["Units"][0]["Price"]-$row["Units"][0]["Discount"]) ?></span><br><br>

                                                    <?php } ?>
                                                    <div class="qmang"><i class="fa fa-minus" aria-hidden="true" onclick="qminus(this)"></i><span id="<?php echo $row["EncryptedId"]; ?>"  class="new_arrivals_quantity qval">1</span><i class="fa fa-plus" aria-hidden="true" onclick="qplus(this)"></i></div>
                                                    <button class="addbtn" onclick="add_data('<?php echo $row["EncryptedId"]; ?>',this)" ><img  class="btn_image" width="26" height="21" src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                                                  </center>
                                                </div>
                                              <?php
                                              $var++;} ?>
                                              </div>

                                            </div>
                                    <a class="left carousel-control" href="#myCarousel_hot" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#myCarousel_hot" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
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
                                <div class="col-md-12 col-xs-12 col-sm-12">

                                  <div class="carousel slide carousel1"  id="myCarousel_arrival">
                                    <div class="carousel-inner carousel-innerd">


                                 <?php $count = 0;
                                 $countlimit=6;
                                 $var=0;
                                if($this->session->userdata('width'))
                                {
                                    if($this->session->userdata('width')<992){
                                        $countlimit=2;
                                    }
                                }
                                 ?>


                                           <div class="item <?php if($count==0){echo "active";$count="1";} ?>">
                                           <?php foreach ($NewArrivals as $row){
                                           if($var==$countlimit){ $var=0; echo "</div><div class='item'>";} ?>
                                            <div class="col-md-2 product  col-xs-6 col-sm-6" style="padding-left:0px;padding-right:0px">
                                              <div class="offer_tag" id="<?php echo $row['EncryptedId'];?>"  <?php if(isset($row["Units"][0]["OfferType"])) {?> style="height: 40px"<?php }else{?>style="height: 60px"<?php }?>>
                                                <?php if(isset($row["Units"][0]["OfferType"])) {

                                                  if($row["Units"][0]["OfferType"]=="Amount"){

                                                    echo "<div class='discount' style='margin-left:10px'><center>Rs ".$row["Units"][0]['OfferAmount']."<span> OFF</span></center></div><br><br>";

                                                  }else if($row["Units"][0]["OfferType"]=="Percent"){

                                                    echo "<div class='discount' style='margin-left:10px'><center>".$row["Units"][0]['OfferAmount']." % <br><span>OFF</span></center></div><br><br>";
                                                  }
                                                }

                                                ?>
                                              </div>
                                              <center><div class="slider3-label"><img src="<?php echo base_url('uploads/product_images/'.$row["Image"]); ?>" style="width:150px;height:150px">
                                                <br><br><div style="height: 20px;"><?php echo $row["Name"] ?></div>
                                              </div><br>
                                              <a target="_blank" href="<?php echo base_url('welcome/product/'.$row["EncryptedId"]); ?>"><button class="qview">QUICK VIEW</button></a>
                                              <?php 
                                              if(count($row["Units"])==1){

                                                echo "<div class='qfix'>".$row['Units'][0]['Unit']."</div><br>";
                                              }
                                              else{ ?>

                                                <select class="new_arrivals_product qselect"  onchange="testing('<?php echo $row["EncryptedId"]; ?>',this)"  id="<?php echo $row["EncryptedId"]; ?>">
                                                  <?php 

                                                  foreach ($row["Units"] as $units) { ?>

                                                    <option  data-offertype='<?php echo $units["OfferType"]; ?>' data-offeramount='<?php echo $units["OfferAmount"]; ?>' data-percentage="<?php echo $units["ID"]; ?>" data-discount="<?php echo $units["Discount"] ?>" value="<?php echo $units["Price"]; ?>"><?php echo $units["Unit"]; ?></option>
                                                    <?php
                                                  }
                                                  ?>

                                                </select><br>
                                                <?php } 

                                                ?>

                                                <br>
                                         

                                                <?php if($row["Units"][0]["Discount"]==0){ ?>
                                                <span class="rs1_tag" style="color:#A3D930 !important" id="<?php echo $row["EncryptedId"]; ?>" >Rs </span>
                                                  <span class="new_arrivals_price nprice" style="color:#6B953E !important;font-weight:bold"   data-discount="<?php echo $row["Units"][0]["Discount"] ?>"  data-percentage="<?php echo $row["Units"][0]["ID"]; ?>" id="<?php echo $row["EncryptedId"]; ?>" ><?php echo $row["Units"][0]["Price"]; ?></span><br><br>
                                                  <?php } else {    ?> 
                                               <span class="rs_tag" id="<?php echo $row["EncryptedId"]; ?>" >Rs </span>
                                                    <span class="new_arrivals_price oprice"  data-discount="<?php echo $row["Units"][0]["Discount"] ?>" data-percentage="<?php echo $row["Units"][0]["ID"]; ?>" id="<?php echo $row["EncryptedId"]; ?>" ><?php echo $row["Units"][0]["Price"]; ?></span>
                                                   <span style="color:#6B953E !important">Rs</span><span style="color:#6B953E !important" class="nprice new_arrivals_nprice" id="<?php echo $row["EncryptedId"]; ?>" > <?php echo round($row["Units"][0]["Price"]-$row["Units"][0]["Discount"]) ?></span><br><br>

                                                    <?php } ?>
                                                    <div class="qmang"><i class="fa fa-minus" aria-hidden="true" onclick="qminus(this)"></i><span id="<?php echo $row["EncryptedId"]; ?>"  class="new_arrivals_quantity qval">1</span><i class="fa fa-plus" aria-hidden="true" onclick="qplus(this)"></i></div>
                                                    <button class="addbtn" onclick="add_data('<?php echo $row["EncryptedId"]; ?>',this)" ><img  class="btn_image" width="26" height="21" src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                                                  </center>
                                                </div>
                                              <?php
                                              $var++;} ?>
                                              </div>

                                            </div>
                                        <a class="left carousel-control" href="#myCarousel_arrival" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                        <a class="right carousel-control" href="#myCarousel_arrival" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                      </div>
                                    </div>
                                  </div>
                                  <br><br>
                                  <div class="row" style="overflow-x:hidden">
                        <div class="col-md-12 col-xs-12 col-sm-12">

                          <div class="carousel slide carousel1" id="myCarouselb">
                            <div class="carousel-inner carousel-innerd1">


                              <?php $count = 0;
                              $countlimit=6;
                                if($this->session->userdata('width'))
                                {
                                    if($this->session->userdata('width')<992){
                                        $countlimit=4;
                                    }
                                }
                              ?>
                                <div class="item <?php $var=0;if($count==0){echo "active";$count="1";} ?>">
                                <?php foreach ($brands as $category){if($category["ImageUrl"]){if($var==$countlimit){ $var=0; echo "</div><div class='item'>";  } ?>
                                  <div class="col-md-2 col-xs-3 col-sm-3">
                                    <center><a href="<?php echo base_url('welcome/getbrandproducts/'.$category["ID"]) ?>" class="slider2-label"><img src="<?php echo base_url('uploads/brands/'.$category["ImageUrl"]) ?>" class="img-circle imgcrl" >
                                      <div class="img-name" style = "height:40px !important"><?php echo $category["Name"]; ?></div>
                                    </a></center>
                                  </div><?php $var++;
                                 }} ?>
                                 </div>
                              </div>

                              <a class="left carousel-control" href="#myCarouselb" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                              <a class="right carousel-control" href="#myCarouselb" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
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
                                      <div class="line-head"><center>Best <span>Sellings</span></center></div>
                                    </div>
                                    <div class="col-md-5 col-sm-4 col-xs-3" style="padding-left:0px;padding-top:15px">
                                      <div class="hline"></div>
                                      <div class="hline" style="margin-top:2px"></div>
                                    </div>
                                  </div>
                                  <br><br>

                                  <div class="row">
                                    <div class="col-md-12 col-xs-12 col-sm-12">

                                      <div class="carousel slide carousel1"  id="myCarousel4">
                                        <div class="carousel-inner carousel-innerd" >


                                 <?php $count = 0;
                                 $countlimit=6;
                                 $var=0;
                                if($this->session->userdata('width'))
                                {
                                    if($this->session->userdata('width')<992){
                                        $countlimit=2;
                                    }
                                }
                                 ?>


                                           <div class="item <?php if($count==0){echo "active";$count="1";} ?>">
                                           <?php foreach ($BestSellings as $row){if($var==$countlimit){ $var=0; echo "</div><div class='item'>";}  ?>
                                            <div class="col-md-2 product  col-xs-6 col-sm-6" style="padding-left:0px;padding-right:0px">
                                              <div class="offer_tag" id="<?php echo $row['EncryptedId'];?>"  <?php if(isset($row["Units"][0]["OfferType"])) {?> style="height: 40px"<?php }else{?>style="height: 60px"<?php }?>>
                                                <?php if(isset($row["Units"][0]["OfferType"])) {

                                                  if($row["Units"][0]["OfferType"]=="Amount"){

                                                    echo "<div class='discount' style='margin-left:10px'><center>Rs ".$row["Units"][0]['OfferAmount']."<span> OFF</span></center></div><br><br>";

                                                  }else if($row["Units"][0]["OfferType"]=="Percent"){

                                                    echo "<div class='discount' style='margin-left:10px'><center>".$row["Units"][0]['OfferAmount']." % <br><span>OFF</span></center></div><br><br>";
                                                  }
                                                }

                                                ?>
                                              </div>
                                              <center><div class="slider3-label"><img src="<?php echo base_url('uploads/product_images/'.$row["Image"]); ?>" style="width:150px;height:150px">
                                                <br><br><div style="height: 20px;"><?php echo $row["Name"] ?></div>
                                              </div><br>
                                              <a target="_blank" href="<?php echo base_url('welcome/product/'.$row["EncryptedId"]); ?>"><button class="qview">QUICK VIEW</button></a>
                                              <?php 
                                              if(count($row["Units"])==1){

                                                echo "<div class='qfix'>".$row['Units'][0]['Unit']."</div><br>";
                                              }
                                              else{ ?>

                                                <select class="new_arrivals_product qselect"  onchange="testing('<?php echo $row["EncryptedId"]; ?>',this)"  id="<?php echo $row["EncryptedId"]; ?>">
                                                  <?php 

                                                  foreach ($row["Units"] as $units) { ?>

                                                    <option  data-offertype='<?php echo $units["OfferType"]; ?>' data-offeramount='<?php echo $units["OfferAmount"]; ?>' data-percentage="<?php echo $units["ID"]; ?>" data-discount="<?php echo $units["Discount"] ?>" value="<?php echo $units["Price"]; ?>"><?php echo $units["Unit"]; ?></option>
                                                    <?php
                                                  }
                                                  ?>

                                                </select><br>
                                                <?php } 

                                                ?>

                                                <br>
                                         

                                                <?php if($row["Units"][0]["Discount"]==0){ ?>
                                                <span class="rs1_tag" style="color:#A3D930 !important" id="<?php echo $row["EncryptedId"]; ?>" >Rs </span>
                                                  <span class="new_arrivals_price nprice" style="color:#6B953E !important;font-weight:bold"   data-discount="<?php echo $row["Units"][0]["Discount"] ?>"  data-percentage="<?php echo $row["Units"][0]["ID"]; ?>" id="<?php echo $row["EncryptedId"]; ?>" ><?php echo $row["Units"][0]["Price"]; ?></span><br><br>
                                                  <?php } else {    ?> 
                                               <span class="rs_tag" id="<?php echo $row["EncryptedId"]; ?>" >Rs </span>
                                                    <span class="new_arrivals_price oprice"  data-discount="<?php echo $row["Units"][0]["Discount"] ?>" data-percentage="<?php echo $row["Units"][0]["ID"]; ?>" id="<?php echo $row["EncryptedId"]; ?>" ><?php echo $row["Units"][0]["Price"]; ?></span>
                                                   <span style="color:#6B953E !important">Rs</span><span style="color:#6B953E !important" class="nprice new_arrivals_nprice" id="<?php echo $row["EncryptedId"]; ?>" > <?php echo round($row["Units"][0]["Price"]-$row["Units"][0]["Discount"]) ?></span><br><br>

                                                    <?php } ?>
                                                    <div class="qmang"><i class="fa fa-minus" aria-hidden="true" onclick="qminus(this)"></i><span id="<?php echo $row["EncryptedId"]; ?>"  class="new_arrivals_quantity qval">1</span><i class="fa fa-plus" aria-hidden="true" onclick="qplus(this)"></i></div>
                                                    <button class="addbtn" onclick="add_data('<?php echo $row["EncryptedId"]; ?>',this)" ><img  class="btn_image" width="26" height="21" src="<?php echo base_url('assets/images/addbicon.png') ?>"><span>Add</span></button>
                                                  </center>
                                                </div>
                                              <?php
                                              $var++;} ?>
                                              </div>

                                            </div>
                                            <a class="left carousel-control" href="#myCarousel4" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                            <a class="right carousel-control" href="#myCarousel4" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                          </div>
                                        </div>
                                      </div><br><br>
                                      
                                      <div class="row">
                                        <div class="col-md-6 xs-hidden">
                                          <a href="<?php echo $Banner[5]['PageUrl'] ?>"><img class="imgbanner3" src=" <?php echo base_url('uploads/banners/bottombanner_one.jpg') ?>"></a>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12">
                                          <a href="<?php echo $Banner[6]['PageUrl'] ?>"><img class="imgbanner3" src=" <?php echo base_url('uploads/banners/bottombanner_two.jpg') ?>" style="max-width:100%"></a>
                                        </div>
                                      </div>
                                      <br><br>    





</div>





</div>



<?php include('about_footer.php'); ?>        


<script type="text/javascript">


  $('document').ready(function(){

    $('.carousel .slide').carousel('slide',{interval:0});
    $('.carousel .slide .myslide').carousel('slide',{interval:5});
  });
  

</script>