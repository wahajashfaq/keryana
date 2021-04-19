<?php include('admin_header.php'); ?>
<script src="<?php echo base_url('assets/editor/ckeditor.js') ?>"></script>

<body>


	<div id="wrapper">

		<?php include('admin_navbar.php') ?>

		<div id="page-wrapper">

			<!-- /.row -->

			<?php if ($MSG = $this->session->flashdata('MSG')){ ?>
				<div class="alert alert-success">
                                  <strong>Sent!</strong> <?php echo $MSG;?>
                </div>
			 <?php }?>

			<form method="post" action="<?php echo base_url('admin/Message/send_email'); ?>">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Subject</label>
					<input type="text" class="form-control" name="subject" id="exampleInputSubject" placeholder="Subject">
				</div>
				<div class="form-group">
					<label for="exampleTextarea">Body</label>
					<textarea  class="ckeditor"  name="body" id="exampleTextarea" rows="3"></textarea>
				</div>
					<button type="submit" class="btn btn-primary">Send</button>
			</form>

			</div>
			<!-- /#page-wrapper -->

		</div>
		<!-- /#wrapper -->



		<?php include('admin_footer.php'); ?>