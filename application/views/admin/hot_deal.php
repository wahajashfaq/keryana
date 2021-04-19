<?php include('admin_header.php'); ?>

<style type="text/css">
	.fa-toggle-right,.fa-remove{
		font-size : 25px;
		opacity: 0.5;
	}
	.fa-toggle-right:hover{
		color : green;
		opacity: 1.6;
	}
	.fa-remove:hover{
		color : red;
		opacity: 1.6;
	}
</style>
<body>


	<div id="wrapper">

		<?php include('admin_navbar.php') ?>

		<div id="page-wrapper">

			<!-- /.row -->
			<div class="row" style="padding-top: 20px;">
				<div class="col-lg-6">
					<div class="panel panel-default">
						<div class="panel-heading"><center>All Products</center></div>
						<div class="panel-body" style="height: 90vh;overflow-y: scroll;">

							<div class="table-responsive">
								<table class="table table-hover" id="all_table">
									<thead>
										<tr>
											<div class="custom-search-form">
												<input type="text" class="form-control" onkeyup="onProductName()" id="order_ID" placeholder="Product Name" >

											</div>
										</tr>
									</thead>
									<tbody>
										<?php $count=1; foreach ($All_Products as $row): ?>
										<tr>
											<td><img widtd="50" height="50" src="<?php echo base_url("uploads/product_images/".$row['Image']) ?>"></td>
											<td><?php echo $row['Name'] ?></td>
											<td><i  name="<?php echo $count; ?>" onclick="add_sellings(this)" type="radio" id="<?php echo $row['ID'] ?>" title="Add to Hot Deals" class="fa fa-toggle-right fa-fw"></i></td>
										</tr>
									<?php endforeach ?>


								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-1">
				<br><br>
				<br><br>
				<br><br>
				<br><br>
				<a href="<?php echo base_url('admin/HotDeals/autoAdd') ?>"><img  width="80px" height="80px" src="<?php echo base_url('assets/images/add.gif') ?>"></a>
			</div>
			<div class="col-lg-5">
				<div class="panel panel-success">
					<div class="panel-heading"><center>Hot Deals</center></div>
					<div class="panel-body" style="height: 90vh;overflow-y: scroll;">
						
						<div class="table-responsive">
							<table class="table table-hover" id="all_table_two">
								<thead>
									<tr>
										<div class="custom-search-form">
											<input type="text" class="form-control" onkeyup="onProductName_two()" id="order_ID2" placeholder="Product Name" >

										</div>
									</tr>
								</thead>
								<tbody>
									<?php $count=1; foreach ($Best_Sellings as $row): ?>
									<tr>
										<td><img widtd="50" height="50" src="<?php echo base_url("uploads/product_images/".$row['Image']) ?>"></td>
										<td><?php echo $row['Name'] ?></td>
										<td><i  name="<?php echo $count; ?>" onclick="remove_sellings(this)" type="radio" id="<?php echo $row['ID'] ?>" title="Remove From Hot Deals Sellings" class="fa fa-remove fa-fw"></i></td>
									</tr>
								<?php endforeach ?>


							</tbody>
						</table>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script type="text/javascript">
	function onProductName(){

		var pname = $('#order_ID').val();

		var table = document.getElementById("all_table");
		var tr = table.getElementsByTagName("tr");

		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[1];
			if (td) 
			{
				if (td.innerHTML.toLowerCase().indexOf(pname.toLowerCase())>=0) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			} 
		}

		if(pname.length==0){

			console.log('ok');
			for (i = 0; i < tr.length; i++) 
			{
				tr[i].style.display = "";
			}
		}
	}

	function onProductName_two(){

		var pname = $('#order_ID2').val();

		var table = document.getElementById("all_table_two");
		var tr = table.getElementsByTagName("tr");

		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[1];
			if (td) 
			{
				if (td.innerHTML.toLowerCase().indexOf(pname.toLowerCase())>=0) {
					tr[i].style.display = "";
				} else {
					tr[i].style.display = "none";
				}
			} 
		}

		if(pname.length==0){

			console.log('ok');
			for (i = 0; i < tr.length; i++) 
			{
				tr[i].style.display = "";
			}
		}
	}


	function add_sellings(e){

            jQuery.ajax({

            	type: "POST",
            	url: "<?php echo base_url(); ?>" + "/admin/HotDeals/add",
            	dataType: 'text',
            	data: {
            		productID : e.id
            	},
            	success: function(res) {

            		if (res)
            		{
            			location.reload();
                	}

            },
            beforeSend : function()
            {
            	$(event).children().attr('src',"<?php echo base_url('assets/images/adding.gif');?>");
            	$(event).attr('disable',"true");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            	alert("some error");
            }
        });


}
function remove_sellings(e){

	jQuery.ajax({

            	type: "POST",
            	url: "<?php echo base_url(); ?>" + "/admin/HotDeals/remove",
            	dataType: 'text',
            	data: {
            		productID : e.id
            	},
            	success: function(res) {

            		if (res)
            		{
            			location.reload();
                	}

            },
            beforeSend : function()
            {
            	$(event).children().attr('src',"<?php echo base_url('assets/images/adding.gif');?>");
            	$(event).attr('disable',"true");
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
            	alert("some error");
            }
        });
}

</script>

<?php include('admin_footer.php'); ?>