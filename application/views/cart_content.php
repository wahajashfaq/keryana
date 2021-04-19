

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
                                        <i id="<?php echo $row["ProductID"] ?>" onclick="removeProduct(this);"  class="fa fa-times-circle" aria-hidden="true" ></i>
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
                                <div style="float:left;font-weight:600">Delivery Charges</div><div style="float:right"><?php 
                                  if(($subTotal-$totalDiscount)>499){
                                    echo "Free";
                                  }else{
                                    echo "50";
                                    $subTotal = $subTotal + 50;
                                  }

                                 ?></div>
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
                                    <div class="col-md-5"><a href="<?php echo base_url('welcome/viewcart'); ?>"><button class="btn btn-block bcartview"><img src="<?php echo base_url('assets/images/addbicon.png') ?>"> View Cart</button></a></div>
                                    <div class="col-md-5"><a href="<?php echo base_url('customer/checkout'); ?>"><button class="btn btn-block coutview">Check Out</button></a></div>
                                </div>
                            </div>
                        </div>
                        </div>  

                  <?php } else echo"<div style='margin-left:15px;'><p>It apears that your cart is currently empty!</p><br>
                        <a class='cbtn'>CONTINUE SHOPPING</a></div>"?>


                  <script type="text/javascript">
                    
                    $('document').ready(function(){
                      $('.items_COUNT').html("<?php echo $CartItemsCount ?>");
                      //alert("<?php echo $CartItemsCount ?>");
                    });
                  </script>