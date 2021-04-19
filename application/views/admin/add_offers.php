<?php include('admin_header.php'); ?>
	<style type="text/css">
		.fa-edit{
			font-size:24px;
			color : blue;
			opacity: 0.5; 
		}.fa-edit:hover{
			opacity: 1; 
		}

		.glyphicon-remove-circle{

			font-size:24px;
			color : red;
			opacity: 0.5; 

		}.glyphicon-remove-circle:hover{
			opacity: 1; 
		}
	</style>
	<body>


		<div id="wrapper">

			<?php include('admin_navbar.php') ?>

			<div id="page-wrapper">

				<!-- Modal -->
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Remove Offer</h4>
							</div>
							<div class="modal-body">

								<form method="POST" id="myForm" action="">
									<input type="hidden" id="unitID" name="unitID" value="">

									<div class="optional">

										<input type="text" placeholder="Add New Value" class="form-control" name="updateValue"><br><input type="submit"  class="btn btn-primary" value="Update" id="btn_update">

									</div>
								</form>   
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>

					</div>
				</div>

				<!-- /.row -->
				<div class="panel">


					<!-- <h2>Add Offer</h2>
					<input type="text"  name="excelID" id="excelID" class="">
					<button  type="text" class="btn btn-warning btn-sm">Okay</button>
					
					<div class="input-fields">
					
						Unit : 
						<select name="unit_ID">
							<option value=""></option>
						</select>
						
						<br>
						Offer Type :
						<select name="offer_type">
							<option value="percent">Percentage</option>
							<option value="amount">Amount</option>
						</select>
						<br>
						<input type="text"  name="offer_amount" >
						<input type="submit"   class="btn btn-success btn-sm" value="Confirm">
					
					</div> -->

					<!-- /.panel-heading -->
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th></th>
										<th>Product</th>
										<th>Unit</th>
										<th>Offer Type</th>
										<th>Offer Amount</th>
										<th>Remove Offer</th>
									</tr>
								</thead>
								<tbody>

									
								<?php if ($all_offers): ?>
									
									<?php foreach ($all_offers as $row): ?>
										<tr>
											<td><?php echo $row["ExcelID"] ?></td>
											<td><img height="80" width="80" src="<?php echo base_url('uploads/product_images/'.$row["Image"]); ?>" alt="img"></td>
											<td><?php echo $row["Name"] ?></td>
											<td><?php echo $row["Unit"] ?></td>
											<td><?php echo $row["OfferType"] ?></td>
											<td><?php echo $row["OfferAmount"] ?></td>
											<td><i id="<?php echo  $row["ID"] ?>" class="glyphicon glyphicon-remove-circle delete-offer" ></i></td>
										</tr>	
									<?php endforeach ?>
								<?php endif ?>

								</tbody>
							</table>
						</div>
						<!-- /.table-responsive -->
					</div>
					<!-- /.panel-body -->
				</div>
				<!-- /.panel -->

			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->

		<script type="text/javascript">

			$('.delete-offer').click(function(){

				$my_url = "<?php echo base_url('admin/Offers/removeOffer') ?>";
				$id = $(this).attr('id');
				$('#unitID').val($id);
				$('#myForm').attr('action',$my_url);
				$('.modal-title').html('Remove Offer');
				$('#btn_update').hide();
				$('.optional').html('<div class="alert alert-warning"><strong>Danger!</strong> Would you like it to delete it permanentaly ?</div><input type="submit" value="Delete" class="btn btn-danger">');
				$('#myModal').modal('show');
			})

		</script>

		<?php include('admin_footer.php'); ?>