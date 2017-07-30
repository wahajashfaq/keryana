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
                Categories
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#profile" data-toggle="tab">First Category</a>
                    </li>
                    <li><a href="#messages" data-toggle="tab">Second Category</a>
                    </li>
                    <li><a href="#settings" data-toggle="tab">Third Category</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="profile">


                        <div class="col-lg-12">
                            <div class="panel">

                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Category Name</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $count=1; foreach ($first_categories as $row) { ?>
                                                <tr>
                                                    <td><?php echo $count ?></td>
                                                    <td><?php echo $row["Name"];$count++; ?></td>
                                                    <td><i id="<?php echo  $row["EncryptedId"] ?>" class="fa fa-edit fa-fw edit-cat-first"></i></td>
                                                    <td><i id="<?php echo  $row["EncryptedId"] ?>" class="glyphicon glyphicon-remove-circle delete-cat-first" ></i></td>
                                                </tr>

                                                <?php } ?>
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
                                                    <th>#</th>
                                                    <th>Category Name</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $count=1; foreach ($second_categories as $row) { ?>
                                                <tr>
                                                    <td><?php echo $count ?></td>
                                                    <td><?php echo $row["Name"];$count++; ?></td>
                                                    <td><i id="<?php echo  $row["EncryptedId"] ?>" class="fa fa-edit fa-fw edit-cat-second"></i></td>
                                                    <td><i id="<?php echo  $row["EncryptedId"] ?>" class="glyphicon glyphicon-remove-circle delete-cat-second" ></i></td>
                                                </tr>

                                                <?php } ?>
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
                                                    <th>#</th>
                                                    <th>Category Name</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $count=1; foreach ($third_categories as $row) { ?>
                                                <tr>
                                                    <td><?php echo $count ?></td>
                                                    <td><?php echo $row["Name"];$count++; ?></td>
                                                    <td><i id="<?php echo  $row["EncryptedId"] ?>" class="fa fa-edit fa-fw edit-cat-third"></i></td>
                                                    <td><i id="<?php echo  $row["EncryptedId"] ?>" class="glyphicon glyphicon-remove-circle delete-cat-third" ></i></td>
                                                </tr>

                                                <?php } ?>
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