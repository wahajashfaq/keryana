<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Keryana</title>



	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/css/bootstrap.min.css') ?> ">



	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/jquery/jquery-3.2.1.min.js') ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/js/bootstrap.min.js') ?>"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


</head>

<body style="background-color: rgba(0,0,0,0.8);">

	<div class="container" style="margin-top:10%;">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Please Sign In</h3>
					</div>
					<div class="panel-body">
						<?php if($error = $this->session->flashdata('error')): ?>
							<div class="alert alert-danger">
								<strong>Error!</strong> <?php echo $error;?>
							</div>
						<?php endif; ?>

						<form role="form" method="post" action="<?php echo base_url('admin/login/authentication') ?>">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Username" name="username" type="text" autofocus>

									<?php echo form_error('username'); ?>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" value="">

									<?php echo form_error('password'); ?>
								</div>
								<div class="checkbox">
									<label>
										<input name="remember" type="checkbox" value="Remember Me">Remember Me
									</label>
								</div>
								<!-- Change this to a button or input when using this as a form -->
								<input type="submit" class="btn btn-lg btn-success btn-block" value="Login">
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>

</html>
