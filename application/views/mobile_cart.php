<div class="container-fluid mobilecart-contain">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="cartfhead" style="float:left">Your Cart <span>(<?php if(!$CartProducts){echo 0;}else echo count($CartProducts) ?> items)</span>
            </div>
        </div>
        </div>

      <hr>
    <div>
      <?php
      if($CartProducts){
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
                <img class="pimg" id="<?php echo $row["ProductID"] ?>" src="<?php echo base_url('uploads/product_images/'.$row["Image"]) ?>"  style="max-width:120px;height:auto">
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
            <div class = "mobdel" style="float:right;margin-right:10px">
              <i  onclick="removeProduct(this);" id="<?php echo $row["ProductID"] ?>"  class="fa fa-trash-o" aria-hidden="true" style="font-size:20px;color:#A1DB09;"></i>
            </div>
          </div>
        </div>
      </div>
      <hr>
    <?php endforeach?>
  </div>
  <div class="row">
    <div class="col-md-12" style="padding-left:30px;padding-right:40px">
      <div style="float:left;font-weight:600">Sub Total</div><div style="float:right">Rs <?php echo $subTotal ?></div>
      <br>
      <div style="float:left;font-weight:600">Discount</div><div style="float:right">Rs <?php echo $totalDiscount ?></div>
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
    <div class="col-md-10"></div>
    <div class="col-md-2 save">
      <a href="<?php echo base_url('customer/checkout') ?>"><button class="subscribe btn-block">Checkout</button></a>
    </div>
    <?php }else{ ?>
    <center><h1>Your cart is empty</h1></ceneter>
      <?php }?>
    </div>
    <br>
  </div>