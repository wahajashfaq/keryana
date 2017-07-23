<!DOCTYPE html>
<html>
<head>
	<title>Add category</title>

	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/jquery/jquery-3.2.1.min.js') ?>"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>
<body>


	<fieldset>
		<legend>Add First Category</legend>

		<input type="text"  name="first_category" id="first_category" placeholder="First category">
		<input type="submit" id="btn_first">

	</fieldset>


	<fieldset>
		<legend>Add Second Category</legend>

		<select id="f_cat" >

			<?php 
			foreach ($first_categories as $row) { ?>
			# code...

			<option value="<?php echo $row->EncryptedId ?>"><?php echo $row->Name ?></option>
			<?php
		}
		?>
	</select>


	<input type="text" name="second_category"  id="second_category" placeholder="Second category">
	<input type="submit" id="btn_second">	
</fieldset>

<fieldset>
	<legend>Add Third Category</legend>

	
	<select id="s_cat">

		<?php 
		foreach ($second_categories as $row) { ?>
		# code...

		<option value="<?php echo $row->EncryptedId ?>"><?php echo $row->Name ?></option>
		<?php
	}
	?>
</select>

<input type="text" name="third_category" id="third_category" placeholder="Third category">
<input type="submit" id="btn_third">
</fieldset>







<script type="text/javascript">

		// Ajax post


		$(document).ready(function() {
			$("#btn_first").click(function(event) {

				var cat_ID = $('#f_cat').val();
				alert(cat_ID);

				event.preventDefault();
				var first_category = $("input#first_category").val();

				if(first_category!=''){

					jQuery.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>" + "admin/product/Add_Category",
						dataType: 'json',
						data: {category : first_category,category_type:'first' , category_ID : cat_ID},
						success: function(res) {
							if (res)
							{
							// Show Entered Value
							alert(res);
						}
					}
				});
				}
			});

			$("#btn_second").click(function(event) {

				var cat_ID = $('#f_cat').val();
				alert(cat_ID);

				event.preventDefault();
				var second_category = $("input#second_category").val();
				if(second_category!=''){
					jQuery.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>" + "admin/product/Add_Category",
						dataType: 'json',
						data: {category : second_category , category_type:'second', category_ID : cat_ID},
						success: function(res) {
							if (res)
							{
							// Show Entered Value
							alert(res);
						}
					}
				});
				}
			});

			$("#btn_third").click(function(event) {

				var cat_ID = $('#s_cat').val();
				alert(cat_ID);

				event.preventDefault();
				var third_category = $("input#third_category").val();
				if(third_category!=''){
					jQuery.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>" + "admin/product/Add_Category",
						dataType: 'json',
						data: {category : third_category,category_type:'third', category_ID : cat_ID},
						success: function(res) {
							if (res)
							{
							// Show Entered Value
							alert(res);
						}
					}
				});
				}
			});

		});
	</script>
</body>
</html>