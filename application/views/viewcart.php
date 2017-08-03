<?php include('customer/home_header.php') ?>

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
        <div class="col-md-12" style="padding-left:30px;padding-right:30px;">
            <br>
            <div class="cartfhead" style="float:left">Your Cart <span>(0 items)</span></div>
            <div style="float:right;margin-top:-20px">
            <img src="<?php echo base_url('assets/images/cartfilled.png') ?>" class="cart"><span >Your Saved</span>
            <div class="count-group"><span style="color:#96C658;font-weight:700">Rs </span><span style="color:#96C658;font-weight:700"> 0</span></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12" style="overflow-x:auto">
            <table class="table table-bordered" >
                <thead>
                  <tr>
                      <th><center>Sr #</center></th>
                      <th><center>Product Name</center></th>
                      <th><center>Unit</center></th>
                      <th><center>Quantity</center></th>
                      <th><center>Price / Unit</center></th>
                      <th><center>Discount</center></th>
                      <th><center>Total</center></th>
                      <th><center>Remove</center></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><center>1</center></td>
                    <td>
                        <center><img src="<?php echo base_url('uploads/product_images/224.jpg') ?>"  style="max-width:120px;height:auto">
                            <div>Mountain Dew</div>
                        </center>
                    </td>
                    <td>
                        <center><div class="qfix" style="float:none;">5 Kg</div></center>
                    </td>
                    <td>
                        <center><div class="qmang" style="display:block;margin-top:10px"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div></center>
                    </td>
                      <td><center>Rs 50</center></td>
                      <td><center>Rs 0</center></td>
                      <td><center>Rs 50</center></td>
                      <td><center><i class="fa fa-trash-o" aria-hidden="true" style="font-size:20px;color:#28a7db"></i></center></td>
                  </tr>
                  <tr>
                    <td><center>2</center></td>
                    <td>
                        <center><img src="<?php echo base_url('uploads/product_images/276.jpg') ?>"  style="max-width:120px;height:auto">
                            <div>Nescafe Jar</div>
                        </center>
                    </td>
                    <td>
                        <center>
                            <select class="qselect" style="margin-top:20px;">
                              <option>5 Kg</option>
                              <option>10 Kg</option>
                            </select>
                        </center>
                    </td>
                    <td>
                        <center><div class="qmang" style="display:block;margin-top:10px"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div></center>
                    </td>
                      <td><center>Rs 50</center></td>
                      <td><center>Rs 0</center></td>
                      <td><center>Rs 50</center></td>
                      <td><center><i class="fa fa-trash-o" aria-hidden="true" style="font-size:20px;color:#28a7db"></i></center></td>
                  </tr>
                  <tr>
                      <th colspan="4"><center>Sub Total</center></th>
                      <td colspan="4"><center>Rs 0</center></td>
                  </tr>
                  <tr>
                      <th colspan="4"><center>Total Discount</center></th>
                      <td colspan="4"><center>Rs 0</center></td>
                  </tr>
                  <tr>
                      <th colspan="4"><center>Dilivery Charges</center></th>
                      <td colspan="4"><center>Free</center></td>
                  </tr>
                  <tr>
                  <th colspan="4"><center>Total</center></th>
                      <td colspan="4"><center>Rs 0</center></td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>
    
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
                              <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
                              <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
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
                              <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
                              <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
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
                              <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
                              <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
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
                              <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
                              <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
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
                              <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
                              <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
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
                              <button class="addbtn"><img src="assets/images/addbicon.png"><span>Add</span></button>
                              <div class="qmang"><i class="fa fa-minus" aria-hidden="true"></i><span class="qval">0</span><i class="fa fa-plus" aria-hidden="true"></i></div>
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
                    <center><input type="email" class="input-lg cinput"  placeholder="Email"></center>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <center><input type="number" class="input-lg cinput"  placeholder="Phone number"></center>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-12">
                    <center><input type="text" class="input-lg cinput"  placeholder="subject"></center>
                </div>
            </div><br>
            
            <div class="row">
                <div class="col-md-12">
                <center><textarea class="input-lg cinput"  placeholder="State Your Query"></textarea></center>
                </div>
            </div>
            <br>
            
            <div class="row">
                <div class="col-md-12">
                <center><button class="btn-lg sbtn">Submit</button></center>
                </div>
            </div>
        </div>
    </div>

<?php $this->load->view('about_footer.php'); ?>        
