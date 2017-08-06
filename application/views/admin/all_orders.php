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
                      <h4 class="modal-title">First Category . . . </h4>
                  </div>
                  <div class="modal-body">

                     <form method="POST" id="myForm" action="">
                        <input type="hidden" id="categoryID" name="categoryID" value="">
                        <input type="hidden" id="categoryType" name="categoryType" value="">

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


  <br/>
  <br/>
  <!-- /.row -->
  <div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Orders
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#profile" data-toggle="tab">All</a>
                    </li>
                    <li><a href="#messages" data-toggle="tab">Delivered</a>
                    </li>
                    <li><a href="#settings" data-toggle="tab">Pending</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="profile">


                        <div class="col-lg-12">
                            <div class="panel">

                                <!-- /.panel-heading -->
                                <b><em>Total Records : <?php $count=1; if($AllOrders) echo count($AllOrders);else echo 0; ?></em></b>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Sr #</th>
                                                    <th>Order ID</th>
                                                    <th>Date & Time</th>
                                                    <th>Contact No</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php if ($AllOrders): ?>

                                                    <?php foreach ($AllOrders as $row): ?>
                                                     <tr <?php if($row["Status"]==0) echo "class='danger'";?> >
                                                        <td><?php echo $count++; ?></td>
                                                        <td><?php echo $row["EncryptedId"] ?></td>
                                                        <td><?php echo $row["ReceiveTime"] ?></td>
                                                        <td><?php echo $row["MobileNumber"] ?></td>
                                                        <td><?php if($row["Status"]==0) echo "Pending"; else if ($row["Status"]==1) echo "Deliverd"; ?></td> 
                                                        <td><a href="" >view details</a></td>  
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

                </div>
                <div class="tab-pane fade" id="messages">

                    <div class="col-lg-12">
                        <div class="panel">

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>Sr #</th>
                                                <th>Order ID</th>
                                                <th>Date & Time</th>
                                                <th>Contact No</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if ($AllOrders): $count=1; ?>

                                                <?php foreach ($AllOrders as $row): ?>
                                                    <?php if ($row["Status"]==1): ?>
                                                        <tr>   
                                                            <td><?php echo $count++; ?></td>
                                                            <td><?php echo $row["EncryptedId"] ?></td>
                                                            <td><?php echo $row["ReceiveTime"] ?></td>
                                                            <td><?php echo $row["MobileNumber"] ?></td>
                                                            <td><?php if($row["Status"]==0) echo "Pending"; else if ($row["Status"]==1) echo "Deliverd"; ?></td> 
                                                            <td><a href="" >view details</a></td>  
                                                        </tr>
                                                    <?php endif ?>
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
                </div>
                <div class="tab-pane fade" id="settings">

                    <div class="col-lg-12">
                        <div class="panel">

                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                   <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sr #</th>
                                            <th>Order ID</th>
                                            <th>Date & Time</th>
                                            <th>Contact No</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php if ($AllOrders): $count=1; ?>

                                            <?php foreach ($AllOrders as $row): ?>
                                             <?php if ($row["Status"]==0): ?>
                                                <tr>   
                                                    <td><?php echo $count++; ?></td>
                                                    <td><?php echo $row["EncryptedId"] ?></td>
                                                    <td><?php echo $row["ReceiveTime"] ?></td>
                                                    <td><?php echo $row["MobileNumber"] ?></td>
                                                    <td><?php if($row["Status"]==0) echo "Pending"; else if ($row["Status"]==1) echo "Deliverd"; ?></td> 
                                                    <td><a href="" >view details</a></td>  
                                                </tr>
                                            <?php endif ?>
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
        </div>
    </div>
</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
</div>



</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->






<script type="text/javascript">


    $(document).ready(function(){


    //-------------Update

    $('.edit-cat-first').click(function(){

        $my_url = "<?php echo base_url('admin/Category/updateCategory') ?>";
        $id = $(this).attr('id');

        $('#categoryID').val($id);
        $('#categoryType').val("first");
        $('#myForm').attr('action',$my_url);
        $('.modal-title').html('First Category . . .');
        $('.optional').html('<input type="text" placeholder="Add New Value" class="form-control" name="updateValue"><br><input type="submit"  class="btn btn-primary" value="Update" id="btn_update">');
        $('#myModal').modal('show');

    });

    $('.edit-cat-second').click(function(){


        $my_url = "<?php echo base_url('admin/Category/updateCategory') ?>";
        $id = $(this).attr('id');
        $('#categoryID').val($id);
        $('#myForm').attr('action',$my_url);
        $('#categoryType').val("second");
        $('.modal-title').html('Second Category . . .');
        $('.optional').html('<input type="text" placeholder="Add New Value" class="form-control" name="updateValue"><br><input type="submit"  class="btn btn-primary" value="Update" id="btn_update">');
        $('#myModal').modal('show');

    });

    $('.edit-cat-third').click(function(){


        $my_url = "<?php echo base_url('admin/Category/updateCategory') ?>";
        $id = $(this).attr('id');
        $('#categoryID').val($id);
        $('#myForm').attr('action',$my_url);
        $('#categoryType').val("third");
        $('.modal-title').html('Third Category . . .');
        $('.optional').html('<input type="text" placeholder="Add New Value" class="form-control" name="updateValue"><br><input type="submit"  class="btn btn-primary" value="Update" id="btn_update">');
        $('#myModal').modal('show');

    });



        //------------------ DELETE 


        $('.delete-cat-first').click(function(){

            $my_url = "<?php echo base_url('admin/Category/deleteCategory') ?>";
            $id = $(this).attr('id');
            $('#categoryID').val($id);
            $('#myForm').attr('action',$my_url);
            $('#categoryType').val("first");
            $('.modal-title').html('First Category . . .');
            $('#btn_update').hide();
            $('.optional').html('<div class="alert alert-warning"><strong>Danger!</strong> Would you like it to delete it permanentaly ?</div><input type="submit" value="Delete" class="btn btn-danger">');
            $('#myModal').modal('show');

        });

        $('.delete-cat-second').click(function(){

            $my_url = "<?php echo base_url('admin/Category/deleteCategory') ?>";
            $id = $(this).attr('id');
            $('#categoryID').val($id);
            $('#myForm').attr('action',$my_url);
            $('#categoryType').val("third");
            $('.modal-title').html('Second Category . . .');
            $('#btn_update').hide();
            $('.optional').html('<div class="alert alert-warning"><strong>Danger!</strong> Would you like it to delete it permanentaly ?</div><input type="submit" value="Delete" class="btn btn-danger">');
            $('#myModal').modal('show');

        });

        $('.delete-cat-third').click(function(){

            $my_url = "<?php echo base_url('admin/Category/deleteCategory') ?>";
            $id = $(this).attr('id');
            $('#categoryID').val($id);
            $('#myForm').attr('action',$my_url);
            $('#categoryType').val("third");
            $('#btn_update').hide();
            $('.modal-title').html('Third Category . . .');
            $('.optional').html('<div class="alert alert-warning"><strong>Danger!</strong> Would you like it to delete it permanentaly ?</div><input type="submit" value="Delete" class="btn btn-danger">');
            $('#myModal').modal('show');

        });

    });

    function editcat(){

        $thisid = $(this).attr('id');
        alert($thisid);

            //event.preventDefault();
            $('#categoryID').val();

            /*var first_category = $("input#first_category").val();

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
                            alert("Added");
                        }
                    }
                });
                }

                location.reload();*/
            }

            function deletecat(){
                alert('Delete');
            }
        </script>
        <?php include('admin_footer.php'); ?>