<?php include('admin_header.php'); ?>

<body>

    
    <div id="wrapper">

        <?php include('admin_navbar.php') ?>

        <div id="page-wrapper">
            
			<div class="row">
				<div class="col-md-12">
					 <div class="panel">

                                <!-- /.panel-heading -->
                                <b><em>Total Customers : <?php $count=1; if($CUSTOMERS) echo count($CUSTOMERS);else echo 0; ?></em></b>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group custom-search-form">
                                            <input type="text" class="form-control" onkeyup="onOrderNo()" id="order_ID" placeholder="Keryana ID ..." >
                                            <span class="input-group-btn">
                                                <button class="btn btn-default"   type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="input-group custom-search-form">
                                            <input type="text" class="form-control" onkeyup="onContactNo()" id="contact_ID" placeholder="Contact No..." >
                                            <span class="input-group-btn">
                                                <button class="btn btn-default"  type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="all_table">
                                            <thead>
                                                <tr>
                                                    <th>Sr #</th>
                                                    <th>Keryana ID</th>
                                                    <th>House</th>
                                                    <th>Town</th>
                                                    <th>Block</th>
                                                    <th>Near</th>
                                                    <th>Contact</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php if ($CUSTOMERS): ?>

                                                    <?php foreach ($CUSTOMERS as $row): ?>

                                                        <td><?php echo $count++; ?></td>
                                                        <td><?php echo ($row["ID"]+124) ?></td>
                                                        <td><?php echo $row["HouseNo"] ?></td>
                                                        <td><?php echo $row["Town"] ?></td>
                                                        <td><?php echo $row["Block"] ?></td>
                                                        <td><?php echo $row["NearbyLocation"] ?></td>
                                                        <td><?php echo $row["Mobile"] ?></td>
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
				</div>
			</div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<?php include('admin_footer.php'); ?>

<script type="text/javascript">

	 function onOrderNo(){

        var oid = $('#order_ID').val();

        var table = document.getElementById("all_table");
        var tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) 
            {
                  if (td.innerHTML == oid) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            } 
        }

        if(oid.length==0){

            console.log('ok');
            for (i = 0; i < tr.length; i++) 
            {
                tr[i].style.display = "";
            }
        }


}

function onContactNo(){

    var oid = $('#contact_ID').val();

      var table = document.getElementById("all_table");
        var tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[6];
            if (td) 
            {
                  if (td.innerHTML == oid) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            } 
        }

        if(oid.length==0){

            console.log('ok');
            for (i = 0; i < tr.length; i++) 
            {
                tr[i].style.display = "";
            }
        }
}

</script>