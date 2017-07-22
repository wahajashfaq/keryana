<!DOCTYPE html>
<html>
<head>
	<title>Add category</title>

	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap-3.3.7-dist/bootstrap-3.3.7-dist/jquery/jquery-3.2.1.min.js') ?>"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

</head>
<body>

	<input type="text"  name="first_category" id="first_category" placeholder="First category">
	<input type="submit" id="btn_first">
	<input type="text" name="second_category"  id="second_category" placeholder="Second category">
	<input type="submit" id="btn_second">
	<input type="text" name="third_category" id="third_category" placeholder="Third category">
	<input type="submit" id="btn_third">




	<script type="text/javascript">

		// Ajax post
		$(document).ready(function() {
			$("#btn_first").click(function(event) {
				event.preventDefault();
				var first_category = $("input#first_category").val();
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "admin/product/Add_Category",
					dataType: 'json',
					data: {category : first_category,category_type:'first'},
					success: function(res) {
						if (res)
						{
							// Show Entered Value
						alert(res);
						}
					}
				});
			});

			$("#btn_second").click(function(event) {
				event.preventDefault();
				var second_category = $("input#second_category").val();
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "admin/product/add",
					dataType: 'json',
					data: {category : second_category , category_type:'second'},
					success: function(res) {
						if (res)
						{
							// Show Entered Value
						alert(res);
						}
					}
				});
			});

			$("#btn_third").click(function(event) {
				event.preventDefault();
				var third_category = $("input#third_category").val();
				jQuery.ajax({
					type: "POST",
					url: "<?php echo base_url(); ?>" + "admin/product/add",
					dataType: 'json',
					data: {category : third_category,category_type:'third'},
					success: function(res) {
						if (res)
						{
							// Show Entered Value
						alert(res);
						}
					}
				});
			});
		});
</script>
</body>
</html>