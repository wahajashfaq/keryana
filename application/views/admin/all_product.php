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
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="profile">


                        <div class="col-lg-12">
                            <div class="panel">

                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <a href ="#" onclick="load_home()"> HOME </a>
                                        <div id="TestingLoad">
                                            <object type="text/html" data="<?php echo base_url('customer/profile/orderDetails/khawar') ?>" ></object>
                                        </div>
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

    
    function load_home() {
     document.getElementById("TestingLoad").innerHTML='<object type="text/html" data="<?php echo base_url('admin/login') ?>" ></object>';
    }
</script>
        <?php include('admin_footer.php'); ?>