<?php include('admin_header.php'); ?>
<style>
	.modal-body {
    	height: 500px;
	}

	.modal-lg{
		width: 90%;
		height: 50%;
	}
</style>
<body>


	<div id="wrapper">

		<?php include('admin_navbar.php') ?>


		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog"  >
			<div class="modal-dialog modal-lg">

				<!-- Modal content-->
				<div class="modal-content" style="height:200%;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Response</h4>
					</div>
					<div id="modal-body" class="modal-body">

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>


		<div id="page-wrapper">
			<!-- /.row -->
			<div class="row">
				<br>
				<br>
				<div class="col-lg-12">
					<div class="panel panel-default">

						<div class="panel-heading">
							Messages
						</div> <!-- Panel head -->

						<div class="panel-body">

							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>Sr #</th>
											<th>Email</th>
											<th>Subject</th>
											<th>Date & Time</th>
											<th>Contact No</th>
											<th>Message</th>
											<td></td>
											<td></td>
										</tr>
									</thead>
									<tbody>
										<?php $count=1; foreach ($all_message as $row): ?>
										<tr <?php $tag = "th"; if($row['Responded']) { echo "class='success'"; $tag = "td"; } ?> >
											<<?php echo $tag?>><?php echo $count++ ?></<?php echo $tag?>>
											<<?php echo $tag?>><?php echo $row['Email'] ?></<?php echo $tag?>>
											<<?php echo $tag?>><?php echo $row['Subject'] ?></<?php echo $tag?>>
											<<?php echo $tag?>><?php echo $row['ContactDate'] ?></<?php echo $tag?>>
											<<?php echo $tag?>><?php echo $row['ContactNumber'] ?></<?php echo $tag?>>
											<<?php echo $tag?> colspan="3"><?php echo $row['Query'] ?></<?php echo $tag?>>
											<td><?php if (!$row['Responded']){ ?>
												<a id="<?php echo $row['EncryptedId'] ?>" onclick="view_message(this);">Reply</a>
												<?php }else { ?>
													<a id="<?php echo $row['EncryptedId'] ?>" onclick="view_message(this);">View</a>
													<?php
												} ?>
											</td>
											

										</tr>

									<?php endforeach ?>
								</tbody>
							</table>

						</div> <!-- Panel Body -->
					</div> <!-- Panel  -->
				</div>  <!-- col-lg-12 -->
			</div>  <!-- row -->



		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->


	<script type="text/javascript">
		function view_message(e){

			$myURL = "<?php echo base_url('admin/Message/view/'); ?>"+e.id;
			$('#modal-body').html('<object height="100%" width="100%" data="'+$myURL+'"/>');
			$('#myModal').modal('show');

		}
	</script>
	<?php include('admin_footer.php'); ?>
