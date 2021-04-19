<?php include('admin_header.php'); ?>

<body>


    <div id="wrapper">

        <?php include('admin_navbar.php') ?>

        <div id="page-wrapper">

            <!-- /.row -->
            <fieldset>
                <legend>Add New Copon</legend>
                
                <form action="<?php echo base_url('admin/KeryanaCoupon/AddCoupon') ?>" method="post">
                	<div class="form-group">
                		<div class="row">
                			<div class="col-md-4">
                				<input type="text"  class="form-control"  name="coupon_code" placeholder="Coupon Code" autocomplete="off" required>
                			</div>
                		</div>

                		<div class="row">
                			<div class="col-md-4">

                				<select name="offer_type" class="form-control" required>

                					<option value=0>Select Discount Type</option>
                					<option value='percentage'>Percent</option>
                					<option valeue='amount'>Amount</option>
                				</select>
                			</div>
                		</div>
                		<div class="row">
                			<div class="col-md-4">
                				<input type="text"  class="form-control"  name="offer_amount" placeholder="Discount Amount" required>
                			</div>
                		</div>
                    <div class="row">
                      <div class="col-md-4">
                        <input type="text"  class="form-control"  name="min_amount" placeholder="Minimum Order Amount" required>
                      </div>
                    </div>
                		<div class="row">
                			<div class="col-md-4">
                				<input type="text"  class="form-control"  name="coupon_details" placeholder="Coupon Details">
                			</div>
                		</div>

                      <hr>
                      <div class="col-md-4">
                         <input type="submit" class="btn btn-primary" value="Add" >
                     </div>
                 </div>
             </form>

         </fieldset>

            
            <hr>

         <div class="panel panel-default">
            <div class="panel-heading">
                All Coupons
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Coupon Code</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                                
                                <?php  if ($All_COUPON): ?>
                                    <?php foreach ($All_COUPON as $row): ?>
                                        <tr>
                                            
                                            <td><?php echo $row['Code'] ?></td>
                                            <td><?php echo $row['DiscountType'] ?></td>
                                            <td><?php echo $row['DiscountAmount'] ?></td>
                                            <td><?php if($row['Status']==1) echo "<b style='color:green'>Active</b>";
                                            else echo "<b style='color:red'>Deactivate</b>" ?></td>
                                            <td><input type="radio" value="1" name="<?php echo $row["ID"] ?>" onclick="disableCoupon(this);"  <?php if($row['Status']==1) echo "checked" ?> >  Active</td>
                                            <td><input type="radio" value="0" name="<?php echo $row["ID"] ?>" onclick="disableCoupon(this);" <?php if($row['Status']==0) echo "checked" ?> >  Deactivate</td>

                                        </tr>
                                    <?php endforeach ?>
                                    
                                <?php endif ?>
                        </tbody>

                    </table>

                </div>

                </div> <!-- End of Panel Body -->
        </div> <!-- End of Panel -->



    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->


<script type="text/javascript">

    function disableCoupon(e){

      $coupon =  e.name;
      $data  =  e.value;

      //console.log($(e).parent().parent().children('img').attr('src'));


      jQuery.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>" + "admin/KeryanaCoupon/updateStatus",
              dataType: 'text',
              data: {couponID : $coupon , status:$data},
              success: function(res) {
                if (res)
                {
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
<?php include('admin_footer.php'); ?>