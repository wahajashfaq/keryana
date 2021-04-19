<?php include('admin_header.php'); ?>
<script src="<?php echo base_url('assets/editor/ckeditor.js') ?>"></script>
<body>


	<div id="wrapper" >
		<div class="container">
			
			<div class="row">
				<h4>Email : <?php echo $my_message['Email'] ?></h4>
				<h4>Contact : <?php echo $my_message['ContactNumber'] ?></h4>
				<h4>Message : <?php echo $my_message['Query'] ?></h4>

				<h4>Response : </h4>
				<?php if ($my_message['Responded']): ?>
					<blockquote class="blockquote">
					<p class="mb-0"><?php echo $my_message['Response'] ?></p>
					 <footer class="blockquote-footer"><?php echo $my_message['ResponseDate'] ?></footer>
					</blockquote>
				<?php endif ?>

				<?php if (!$my_message['Responded']): ?>
					<form action="<?php echo base_url('admin/Message/Reply') ?>" method="post">
						<input type="hidden" name="messageID"  value="<?php echo $my_message['EncryptedId']; ?>">
						<input type="hidden" name="messageMail"  value="<?php echo $my_message['Email']; ?>">
						<textarea class="ckeditor" name="reply_message" maxlength="500" rows="5" required></textarea>
						<br>
						<input type="submit" value="Reply" class="btn btn-sm btn-success pull-right">
					</form>
				<?php endif ?>
			</div>
		</div>
	</div>



	<?php include('admin_footer.php'); ?>