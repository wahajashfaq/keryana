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

                  <!-- <div class="dropdown" style="float:right;">
                    <button class="dropbtn div-welc2">
                      <center><img src="<?php echo base_url('assets/images/carticon.png')?>
                  
                        " class="cart"><span class="first">Your Cart</span>
                        <div class="count-group"><span class="second">0</span><span class="second"> items</span></div></center>
                      </button>
                      <div class="dropdown-content">
                        <p>It apears that your cart is currently empty!</p><br>
                        <a class="cbtn">CONTINUE SHOPPING</a>
                      </div>
                    </div> -->
                  </div>    
                </div>

                <div class="row xs-hidden" style="padding-top:20px">
                  <div class="col-md-3 xs-hidden" style="padding-right:0px;">
                    <div class="sidebarhead dropdownf" style="border-width:1px;border:1px solid #96C658;padding-top:0px;width:100%;height:40px;padding-bottom:0px">
                      <button class="dropbtnf" style="border:none;background:none;width:100%;padding-left:0px;height:40px"><span style="font-weight:900">Rack</span> <img src="<?php echo base_url('assets/images/shopicon.png')?>" style="float:right;margin-top: 6px;"></button>
                      <ul class="shoplinks xs-hidden dropdown-contentf" style="width:100%;top:50px">

                        <?php $count = 0;
                        foreach ($categories as $category){?>
                        <li>
             <div class="dropleft">
               <a style="color:black;" href="<?php echo base_url('welcome/category/First/'.$category["EncryptedId"]) ?>" ><span class="text"><?php echo $category["Name"]; ?></span></a><i class="fa fa-caret fa-caret-right" style="float:right"></i>
               <div class="dropleft-content"  style="top:<?php echo $count*-33;$count++; ?>px;">
                 <div class="container-fluid">
                   <div class="row">
                     <?php $countx=0; foreach ($category["SUB CATEGORIES"] as $category2){?>
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
                            $countx=0;
                   }  } ?>

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
                <div class="col-md-12" style="overflow-x:auto">

                <?php
                  $status = "";
                 if ($ORDER_DETAILS["Status"]==1) {
                  # code...
                  $status = "<span style='color:green;'><b>Delivered</b></span>";

                }else if($ORDER_DETAILS["Status"]==2){

                  $status = "<span style='color:blue;'><b>Dispatched</b></span>";
                }
                else if($ORDER_DETAILS["Status"]==0){

                  $status = "<span  style='color:red;'><b>Pending</b></span>";

                }
                else if($ORDER_DETAILS["Status"]==4){

                  $status = "<span  style='color:black;'><b>Refunded</b></span>";

                }
                  else{
                      $status = "<span style='color:orange;'><b>Cancel</b></span>";
                  }
                  ?>
                  <h4><i><?php echo "Order ID : ". ($ORDER_DETAILS["ID"]+124); ?></i></h4>
                  <h4 class="hidden"><i><?php echo "Prefered Date : ". ($ORDER_DETAILS["OrderDate"]); ?></i></h4>
                  <h4 class="hidden"><i><?php echo "Prefered Time : ". ($ORDER_DETAILS["OrderTime"]); ?></i></h4>
                  <h4><i><?php echo "Status  : ".$status ; ?></i></h4>

                  <?php if ($ORDER_DETAILS["CouponCode"]): ?>  
                    <h4><i><?php echo "Coupon Code : ". ($ORDER_DETAILS["CouponCode"]); ?></i></h4>
                  <?php endif ?>

                  <table class="table table-bordered" >
                    <thead>
                      <?php $count = 1; ?>
                      <tr>
                        <th><center>Sr #</center></th>
                        <th><center>Product Name</center></th>
                        <th><center>Unit</center></th>
                        <th><center>Quantity</center></th>
                        <th><center>Price / Unit</center></th>
                        <th><center>Discount</center></th>
                        
                        <th><center>Total</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 

                      $totalDiscount = 0;
                      $subTotal = 0;


                      foreach ($ORDER_DETAILS['CartProducts'] as $row): ?>

                      <?php 

                      $totalDiscount = $totalDiscount+($row["Discount"]*$row["Quantity"]);
                      $subTotal =$subTotal+ $row["Price"]*$row["Quantity"];


                      ?> 
                      <tr>
                        <td><center><?php echo $count++; ?></center></td>
                        <td>
                          <center><img src="<?php echo base_url('uploads/product_images/').$row['Image'] ?>"  style="width:auto;height:50px">
                            <div><?php echo $row["Name"] ?></div>
                          </center>
                        </td>
                        <td>
                          <center><div class="qfix" style="float:none;"><?php echo $row["Unit"] ?></div></center>
                        </td>
                        <td>
                          <center><?php echo $row["Quantity"] ?></center>
                        </td>
                        <td><center>Rs <?php echo $row["Price"] ?></center></td>

                        <td><center>Rs <?php echo $row["Discount"]*$row["Quantity"] ?></center></td>
                        <td><center>Rs <?php echo $row["Quantity"]*($row["Price"]-$row["Discount"]) ?></center></td>
                      </tr>

                    <?php endforeach ?>
                    
                    <?php 

                         if ($coupon_discount = $ORDER_DETAILS["CouponDiscountAmount"]) {

                            $totalDiscount += $coupon_discount;

                         }

                     ?>
                    <tr>
                      <th colspan="4"><center>Sub Total</center></th>
                      <td colspan="4"><center>Rs <?php echo $subTotal ?></center></td>
                    </tr>
                    <tr>
                      <th colspan="4"><center>Total Discount</center></th>
                      <td colspan="4"><center>Rs <?php echo $totalDiscount ?></center></td>
                    </tr>
                      <?php if ($ORDER_DETAILS['LoyaltyPointUse']): ?>
                    <tr>
                        <th colspan="4"><center>Loyalty Points</center></th>
                        <th colspan="4"><center><?php echo $ORDER_DETAILS['LoyaltyPointUse']; ?></center></th>
                    </tr>
                      <?php endif ?>
                    <tr>
                      <th colspan="4"><center>Delivery Charges</center></th>
                      <td colspan="4"><center>
                        
                                 <?php 
                                  if(($subTotal-$totalDiscount)>499){
                                    echo "Free";
                                  }else{
                                    echo "50";
                                    $subTotal = $subTotal + 50;
                                  }

                                 ?>

                      </center></td>
                    </tr>
                    <tr>
                      <th colspan="4"><center>Total</center></th>
                      <td colspan="4"><center>Rs <?php echo $subTotal -$totalDiscount-$ORDER_DETAILS['LoyaltyPointUse'] ?></center></td>
                    </tr>
                  </tbody>
                </table>
              </div>
    

              <?php if ($ADMIN && $ORDER_DETAILS["Status"]!=100): ?>
                <h4>
                  Customer ID : <?php echo $ORDER_DETAILS['CustomerID']+124; ?>
                </h4>
                <h4>
                  Address : <?php echo $ORDER_DETAILS['Address']; ?>
                </h4>
                <h4>
                  Contact # : <?php echo $ORDER_DETAILS['MobileNumber']; ?>
                </h4>
                <center>
                  <button  onclick="marked(this)" class="btn btn-success" value="<?php echo $ORDER_DETAILS['EncryptedId']; ?>">
                  Mark as Delivered
                  </button>

                  <button  onclick="dispatched(this)" class="btn btn-info" value="<?php echo $ORDER_DETAILS['EncryptedId']; ?>">
                  Mark as Dispatched
                  </button>
                  
                  <button  onclick="cancel(this)" class="btn btn-warning" value="<?php echo $ORDER_DETAILS['EncryptedId']; ?>">
                  Mark as Cancel
                  </button>
                  
                  <button  onclick="pending(this)" class="btn btn-danger" value="<?php echo $ORDER_DETAILS['EncryptedId']; ?>">
                  Mark as Pending
                  </button>

                  <button  onclick="refunded(this)" class="btn btn-primary" value="<?php echo $ORDER_DETAILS['EncryptedId']; ?>">
                  Mark as Refunded
                  </button>
                  
                </center>
              <?php endif ?>

            </div>
          </div>






<?php $this->load->view('about_footer.php'); ?>        
<script type="text/javascript">
  
  function marked(e){

    $order_id = $(e).val();

    jQuery.ajax({

              type: "POST",
              url: "<?php echo base_url('admin/UserOrders/mark_delivered'); ?>" ,
              dataType: 'text',
              data: {
                orderID : $order_id
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

                    alert(res);

                    location.reload();
                  }

                },
                beforeSend : function()
                {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });

  }

  function dispatched(e){

    $order_id = $(e).val();

    jQuery.ajax({

              type: "POST",
              url: "<?php echo base_url('admin/UserOrders/mark_dispatched'); ?>" ,
              dataType: 'text',
              data: {
                orderID : $order_id
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

                    alert(res);

                    location.reload();
                  }

                },
                beforeSend : function()
                {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });

  }
  function refunded(e){

    $order_id = $(e).val();

    jQuery.ajax({

              type: "POST",
              url: "<?php echo base_url('admin/UserOrders/mark_refunded'); ?>" ,
              dataType: 'text',
              data: {
                orderID : $order_id
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

                    alert(res);

                    location.reload();
                  }

                },
                beforeSend : function()
                {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });

  }
  
  function cancel(e){

    $order_id = $(e).val();

    jQuery.ajax({

              type: "POST",
              url: "<?php echo base_url('admin/UserOrders/mark_cancel'); ?>" ,
              dataType: 'text',
              data: {
                orderID : $order_id
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

                    alert(res);

                    location.reload();
                  }

                },
                beforeSend : function()
                {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });

  }
  
  function pending(e){

    $order_id = $(e).val();

    jQuery.ajax({

              type: "POST",
              url: "<?php echo base_url('admin/UserOrders/mark_pending'); ?>" ,
              dataType: 'text',
              data: {
                orderID : $order_id
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

                    alert(res);

                    location.reload();
                  }

                },
                beforeSend : function()
                {
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
                }
              });

  }
</script>