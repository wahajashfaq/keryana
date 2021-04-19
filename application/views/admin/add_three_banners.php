<?php include('admin_header.php'); ?>
<body>


  <div id="wrapper">

    <?php include('admin_navbar.php') ?>

    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">
              Three Banners
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#profile" data-toggle="tab">Banner One</a>
                </li>
                <li><a href="#messages" data-toggle="tab">Banner Two</a>
                </li>
                <li><a href="#three" data-toggle="tab">Banner Three</a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="profile">


                  <div class="col-lg-12">
                    <div class="panel">

                      <!-- /.panel-heading -->
                      <div class="panel-body">
                           <center>
                          <form id="upload_form" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/resources/Sliders/threebanner_one') ?> ">
                            <fieldset>
                              <?php if($message = $this->session->flashdata('message')): ?>
                                <div class="alert alert-success">
                                  <strong>Added Successfuly!</strong> <?php echo $message;?>
                                </div>
                              <?php endif; ?>
                              <?php if(isset($error))
                              echo "<div class='alert alert-danger'>$error</div>";
                              ?> 
                              <div class="form-group">
                               <div class="upload_form_cont">
                                <div>
                                  <div><label for="image_file">Please select image file</label></div>
                                  <div><input type="file" name="image_file" id="image_file1" onchange="fileSelected(1);" /></div>
                                </div>
                                <img id="preview1" class="img-thumbnail" src="<?php echo base_url('uploads/banners/threebanner_one.jpg') ?> " />

                                <div id="progress_info">
                                  <div id="progress"></div>
                                  <div id="progress_percent">&nbsp;</div>
                                  <div class="clear_both"></div>

                                  <input type="text" name="url" class="form-control" placeholder="Banner URL">
                                  <input type="submit" name="btn_submit" class="btn btn-success" value="Upload">       
                                  
                                </div>

                              </div>

                            </fieldset>
                          </form>
                        </center>
                      </div>
                      <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                  </div>

                </div>
                <div class="tab-pane fade" id="three">


                  <div class="col-lg-12">
                    <div class="panel">

                      <!-- /.panel-heading -->
                      <div class="panel-body">
                           <center>
                          <form id="upload_form" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/resources/Sliders/threebanner_three') ?> ">
                            <fieldset>
                              <?php if($message = $this->session->flashdata('message')): ?>
                                <div class="alert alert-success">
                                  <strong>Added Successfuly!</strong> <?php echo $message;?>
                                </div>
                              <?php endif; ?>
                              <?php if(isset($error))
                              echo "<div class='alert alert-danger'>$error</div>";
                              ?> 
                              <div class="form-group">
                               <div class="upload_form_cont">
                                <div>
                                  <div><label for="image_file">Please select image file</label></div>
                                  <div><input type="file" name="image_file" id="image_file1" onchange="fileSelected(1);" /></div>
                                </div>
                                <img id="preview1" class="img-thumbnail" src="<?php echo base_url('uploads/banners/threebanner_three.jpg') ?> " />

                                <div id="progress_info">
                                  <div id="progress"></div>
                                  <div id="progress_percent">&nbsp;</div>
                                  <div class="clear_both"></div>

                                  <input type="text" name="url" class="form-control" placeholder="Banner URL">
                                  <input type="submit" name="btn_submit" class="btn btn-success" value="Upload">       
                                  
                                </div>

                              </div>

                            </fieldset>
                          </form>
                        </center>
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
                        <center>
                          <form id="upload_form" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/resources/Sliders/threebanner_two') ?> ">
                            <fieldset>
                              <?php if($message = $this->session->flashdata('message')): ?>
                                <div class="alert alert-success">
                                  <strong>Added Successfuly!</strong> <?php echo $message;?>
                                </div>
                              <?php endif; ?>
                              <?php if(isset($error))
                              echo "<div class='alert alert-danger'>$error</div>";
                              ?> 
                              <div class="form-group">
                               <div class="upload_form_cont">
                                <div>
                                  <div><label for="image_file">Please select image file</label></div>
                                  <div><input type="file" name="image_file" id="image_file2" onchange="fileSelected(2);" /></div>
                                </div>
                                <img id="preview2" class="img-thumbnail" src="<?php echo base_url('uploads/banners/threebanner_two.jpg') ?> " />

                                <div id="progress_info">
                                  <div id="progress"></div>
                                  <div id="progress_percent">&nbsp;</div>
                                  <div class="clear_both"></div>
                                  
                                  <input type="text" name="url" class="form-control" placeholder="Banner URL">
                                  <input type="submit" name="btn_submit" class="btn btn-success" value="Upload">       
                                  
                                </div>

                              </div>

                            </fieldset>
                          </form>
                        </center>
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


    <script type="text/javascript">


// File uploading

// common variables
var iBytesUploaded = 0;
var iBytesTotal = 0;
var iPreviousBytesLoaded = 0;
var iMaxFilesize = 2048576; // 5MB
var oTimer = 0;
var sResultFileSize = '';

function secondsToTime(secs) { // we will use this function to convert seconds in normal time format
  var hr = Math.floor(secs / 3600);
  var min = Math.floor((secs - (hr * 3600))/60);
  var sec = Math.floor(secs - (hr * 3600) -  (min * 60));

  if (hr < 10) {hr = "0" + hr; }
  if (min < 10) {min = "0" + min;}
  if (sec < 10) {sec = "0" + sec;}
  if (hr) {hr = "00";}
  return hr + ':' + min + ':' + sec;
};

function bytesToSize(bytes) {
  var sizes = ['Bytes', 'KB', 'MB'];
  if (bytes == 0) return 'n/a';
  var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
  return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i];
};

function fileSelected(id) {

    $preview = '';
      $image_file =''
      if(id==1){
        $preview = 'preview1';
        $image_file = 'image_file1';
      } else if(id==2){
        $preview = 'preview2';
        $image_file = 'image_file2';
      }


    var oFile = document.getElementById($image_file).files[0];

    // filter for image files
    var rFilter = /^(image\/bmp|image\/gif|image\/jpeg|image\/png|image\/tiff)$/i;
    if (! rFilter.test(oFile.type)) {
      document.getElementById('error').style.display = 'block';
      
      var oImage = document.getElementById($preview);
      oImage.removeAttribute("src");
      return;
    }

    // little test for filesize
    if (oFile.size > iMaxFilesize) {
      document.getElementById('warnsize').style.display = 'block';

      var oImage = document.getElementById($preview );
      oImage.removeAttribute("src");
      return;
    }

    // get preview element
    var oImage = document.getElementById($preview );

    // prepare HTML5 FileReader
    var oReader = new FileReader();
    oReader.onload = function(e){

        // e.target.result contains the DataURL which we will use as a source of the image
        oImage.src = e.target.result;

        oImage.onload = function () { // binding onload event

            // we are going to display some custom image information here
           /* sResultFileSize = bytesToSize(oFile.size);
            document.getElementById('fileinfo').style.display = 'block';
            document.getElementById('filename').innerHTML = 'Name: ' + oFile.name;
            document.getElementById('filesize').innerHTML = 'Size: ' + sResultFileSize;
            document.getElementById('filetype').innerHTML = 'Type: ' + oFile.type;
            document.getElementById('filedim').innerHTML = 'Dimension: ' + oImage.naturalWidth + ' x ' + oImage.naturalHeight;*/
          };
        };

    // read selected file as DataURL
    oReader.readAsDataURL(oFile);
  }






function uploadError(e) { // upload error
  document.getElementById('error2').style.display = 'block';
  clearInterval(oTimer);
}  

function uploadAbort(e) { // upload abort
  document.getElementById('abort').style.display = 'block';
  clearInterval(oTimer);
}


</script>
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->



<?php include('admin_footer.php'); ?>