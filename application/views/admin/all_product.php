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

                <!-- Tab panes -->
                <div class="tab-content">
                    <div >
                        <div class="col-lg-12">
                            <div class="panel">

                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="row">
                                        
                                    <div class="col-md-4">
                                        <div class="input-group custom-search-form">
                                            <input type="text" class="form-control" onkeyup="onProductName()" id="order_ID" placeholder="Product Name" >
                                            <span class="input-group-btn">
                                                <button class="btn btn-default"   type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        
                                    </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="all_table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th></th>
                                                    <th>Name</th>
                                                    <th>Active</th>
                                                    <th>Deactive</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $count=1; foreach ($All_Products as $row): ?>
                                                    <tr>
                                                        <td><?php echo $count++; ?></td>
                                                        <td><img widtd="50" height="50" src="<?php echo base_url("uploads/product_images/".$row['Image']) ?>"></td>
                                                        <td><?php echo $row['Name'] ?></td>
                                                        <td><input  name="<?php echo $count; ?>" onclick="update(this)" type="radio" id="<?php echo $row['EncryptedId'] ?>" value="1" <?php if($row['visibility']) echo "checked" ?> ></td>
                                                        <td><input  name="<?php echo $count; ?>" onclick="update(this)" type="radio" id="<?php echo $row['EncryptedId'] ?>" value="0" <?php if(!$row['visibility']) echo "checked" ?>></td>
                                                    </tr>
                                                <?php endforeach ?>
    

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

     function update(e){

      $slide =  e.id;
      $data  =  e.value;

      //console.log($(e).parent().parent().children('img').attr('src'));


      jQuery.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>" + "admin/product/updateStatus",
              dataType: 'text',
              data: {productID : $slide , status:$data},
              success: function(res) {
                if (res)
                {
                    location.reload();
                }
              },
              beforeSend : function()
              {
                $(e).parent().parent().children('img').attr('src','<?php echo base_url('assets/images/update.gif') ?>');
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("some error");
              }
            });

      }



    function onProductName(){

        var pname = $('#order_ID').val();

        var table = document.getElementById("all_table");
        var tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[2];
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

</script>
        <?php include('admin_footer.php'); ?>