<div class="row cart-row">
                        <div class="col-md-12" style="padding-left:30px;padding-right:30px;">
                          <br>
                  <div class="cartfhead" style="float:left">Your Cart <span>(<?php if(!$CartProducts){echo 0;}else echo count($CartProducts) ?> items)</span></div><!-- 
                  <div style="float:right;margin-top:-20px">
                    <img src="<?php echo base_url('assets/images/cartfilled.png') ?>" class="cart"><span >Your Saved</span>
                    <div class="count-group"><span style="color:#96C658;font-weight:700">Rs </span><span style="color:#96C658;font-weight:700" id="saved_amount"> 0</span></div>
                  </div> -->
                </div>
              </div>
              <div class="row">

                <div class="col-md-12" style="overflow-x:auto">
                  <table class="table table-bordered" >

                    <?php $items=1; if ($CartProducts){ ?>
                    
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
                      <?php

                      $totalDiscount = 0;
                      $subTotal = 0;

                      foreach ($CartProducts as $row): ?>

                      <?php 

                      $totalDiscount = $totalDiscount+($row["Discount"]*$row["Quantity"]);
                      $subTotal =$subTotal+ $row["Price"]*$row["Quantity"];

                      
                      ?>


                      <tr>
                        <td><center><?php echo $items++; ?></center></td>
                        <td>
                          <center><img  id="<?php echo $row["ProductID"] ?>" src="<?php echo base_url('uploads/product_images/'.$row["Image"]) ?>"  style="max-width:120px;height:auto">
                            <div><?php echo $row["Name"] ?></div>
                          </center>
                        </td>
                        <td>
                          <center><div class="qfix" style="float:none;"><?php echo $row["Unit"] ?></div></center>
                        </td>
                        <td>
                          <center><div class="qmang" style="display:block;margin-top:10px"><i class="fa fa-minus" onclick="cart_minus(this)" aria-hidden="true"></i><span class="qval" data-price="<?php echo $row["Price"] ?>" id="<?php echo $row["ProductID"] ?>"><?php echo $row["Quantity"];?></span><i onclick="cart_plus(this)" class="fa fa-plus" aria-hidden="true"></i></div></center>
                        </td>
                        <td><center>Rs <?php echo $row["Price"]; ?></center></td>
                        <td><center>Rs <?php echo $row["Discount"]*$row["Quantity"]; ?></center></td>
                        <td><center>Rs <?php echo ($row["Price"]*$row["Quantity"])-$row["Discount"]; ?></center></td>
                        <td><center><i  id="<?php echo $row["ProductID"] ?>" onclick="cart_removeProduct(this);" class="fa fa-trash-o" aria-hidden="true" style="font-size:20px;color:#A1DB09;"></i></center></td>
                      </tr>

                    <?php endforeach ?>
                    <tr>
                      <th colspan="4"><center>Sub Total</center></th>
                      <td colspan="4"><center>Rs <?php echo $subTotal ?></center></td>
                    </tr>
                    <tr>
                      <th colspan="4"><center>Total Discount</center></th>
                      <td colspan="4"><center>Rs <?php echo $totalDiscount ?></center></td>
                    </tr>
                    <tr>
                      <th colspan="4"><center>Delivery Charges</center></th>
                      <td colspan="4"><center><?php 
                                  if(($subTotal-$totalDiscount)>499){
                                    echo "Free";
                                  }else{
                                    echo "50";
                                    $subTotal = $subTotal + 50;
                                  }

                                 ?></center></td>
                    </tr>
                    <tr>
                      <th colspan="4"><center>Total</center></th>
                      <td colspan="4"><center>Rs <?php echo $subTotal-$totalDiscount; ?></center></td>
                    </tr>
                  </tbody>

                  <?php } else echo"<center><h4>Your Cart Is Empty</h4></center>"?>

                </table>
                </div>
              </div>