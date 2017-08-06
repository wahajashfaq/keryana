<?php include('admin_header.php'); ?>
<style type="text/css">
  hr{
    border: 1px solid #249;
    width: 50%;
  }
</style>
<body>


  <div id="wrapper">

    <?php include('admin_navbar.php') ?>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              Banners
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              
              <div class="row">
                <?php if ($Banners): ?>
                    <?php foreach ($Banners as $slider): ?>
                      <div class="col-md-4">
                      <img <?php if($slider["Active"]==0) echo "style='opacity:0.4';" ?> src="<?php echo base_url('uploads/sliding_banner/'.$slider["ImageUrl"]); ?>" class="img-rounded" alt="Cinque Terre" width="280" height="210">
                      <hr>
                      <center>
                      <input type="radio" value="1" name="<?php echo $slider["EncryptedId"] ?>" onclick="update(this);" <?php if($slider["Active"]==1) echo "checked" ?>> Enable
                      <input type="radio" value="0" name="<?php echo $slider["EncryptedId"] ?>" onclick="update(this);" <?php if($slider["Active"]==0) echo "checked" ?>> Disable
                      </center>
                      <hr>

                      </div>
                    <?php endforeach ?>
                <?php endif ?>
                </div>

            </div>
            <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->
      </div>
    </div>

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script type="text/javascript">
  
  function update(e){

      $slide =  e.name;
      $data  =  e.value;

      //console.log($(e).parent().parent().children('img').attr('src'));


      jQuery.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>" + "admin/resources/sliders/updateSliders",
              dataType: 'text',
              data: {imageID : $slide , status:$data},
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

</script>

<?php include('admin_footer.php'); ?>