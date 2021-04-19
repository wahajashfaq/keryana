<?php include('admin_header.php'); ?>

	<style type="text/css">

    #preview1,#preview2,#preview3{
        height: 250px;
        width: 220px;
        z-index: -1;
    }



</style>

<body>


	<div id="wrapper">

		<?php include('admin_navbar.php') ?>

		<div id="page-wrapper">

		<?php if($message = $this->session->flashdata('message')): ?>
                  <div class="alert alert-success">
                    <strong>Added Successfuly!</strong> <?php echo $message;?>
                  </div>
                <?php endif; ?>
                
		<form id="upload_form" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/resources/add/FirstCategoryImage'); ?>">
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<fieldset>
				<legend>First Category Image</legend>

				<select name="Fcategory_ID" class="form-control">

					<?php 
					foreach ($first_categories as $row) { ?>
					<option value="<?php echo $row["EncryptedId"] ?>"><?php echo $row["Name"]; ?></option>
					<?php
					}
					?>

				</select>

				<div class="upload_form_cont">
                <div>
                    <div><label for="image_file">Please select image file</label></div>
                    <div><input type="file" name="image_file" id="image_file1" onchange="fileSelected(1);" /></div>
                </div>
                <div id="fileinfo">
                    <div id="filename"></div>
                    <div id="filesize"></div>
                    <div id="filetype"></div>
                    <div id="filedim"></div>
                </div>
                <img id="preview1" />

                <div id="progress_info">
                    <div id="progress"></div>
                    <div id="progress_percent">&nbsp;</div>
                    <div class="clear_both"></div>
                    <div>
                        <div id="speed">&nbsp;</div>
                        <div id="remaining">&nbsp;</div>
                        <div id="b_transfered">&nbsp;</div>
                        <div class="clear_both"></div>
                    </div>
                    <div id="upload_response"></div>
                </div>

                <?php echo @$error;?>
            </div>
				<input type="submit" value="upload" class="btn btn-success" id="btn_first">

			</fieldset>
					</div>
				</div>
			</div>

			</form>

			<form enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/resources/add/SecondCategoryImage'); ?>">
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						<fieldset>
				<legend>Second Category Image</legend>

				<select class="form-control" name="Scategory_ID"  >

					<?php 
					foreach ($second_categories as $row) { ?>
					<option value="<?php echo $row["EncryptedId"] ?>"><?php echo $row["Name"]; ?></option>
					<?php
				}
				?>

			</select>
				

			<div class="upload_form_cont">
                <div>
                    <div><label for="image_file">Please select image file</label></div>
                    <div><input type="file" name="image_file" id="image_file2" onchange="fileSelected(2);" /></div>
                </div>
                <div id="fileinfo">
                    <div id="filename"></div>
                    <div id="filesize"></div>
                    <div id="filetype"></div>
                    <div id="filedim"></div>
                </div>
                <img id="preview2" />

                <div id="progress_info">
                    <div id="progress"></div>
                    <div id="progress_percent">&nbsp;</div>
                    <div class="clear_both"></div>
                    <div>
                        <div id="speed">&nbsp;</div>
                        <div id="remaining">&nbsp;</div>
                        <div id="b_transfered">&nbsp;</div>
                        <div class="clear_both"></div>
                    </div>
                    <div id="upload_response"></div>
                </div>

                <?php echo @$error;?>
            </div>

			<input type="submit" value="upload" class="btn btn-success" id="btn_second">	
		</fieldset>
					</div>
				</div>
			</div>
		</form>

				<form action="<?php echo base_url('admin/resources/add/SecondCategoryImageAsParent'); ?>" method="post">
				<input type="checkbox" name="same_as_first"> <h4>Same as First</h4>
				<input type="submit" class="btn btn-primary" value="Update">
				</form>

	
		<form enctype="multipart/form-data" action="<?php echo base_url('admin/resources/add/ThirdCategoryImage'); ?>" method="post">
			<div class="form-group">
				<div class="row">
					<div class="col-md-4">
						
					<fieldset>
						<legend>Third Category Image</legend>


						<select class="form-control" name="Tcategory_ID" >

							<?php 
							foreach ($third_categories as $row) { ?>

							<option value="<?php echo $row["EncryptedId"] ?>"><?php echo $row["Name"] ?></option>
							<?php
						}
						?>
					</select>

					<div class="upload_form_cont">
                <div>
                    <div><label for="image_file">Please select image file</label></div>
                    <div><input type="file" name="image_file" id="image_file3" onchange="fileSelected(3);" /></div>
                </div>
                <div id="fileinfo">
                    <div id="filename"></div>
                    <div id="filesize"></div>
                    <div id="filetype"></div>
                    <div id="filedim"></div>
                </div>
                <img id="preview3" />

                <div id="progress_info">
                    <div id="progress"></div>
                    <div id="progress_percent">&nbsp;</div>
                    <div class="clear_both"></div>
                    <div>
                        <div id="speed">&nbsp;</div>
                        <div id="remaining">&nbsp;</div>
                        <div id="b_transfered">&nbsp;</div>
                        <div class="clear_both"></div>
                    </div>
                    <div id="upload_response"></div>
                </div>

                <?php echo @$error;?>
            </div>

					<input type="submit" value="upload" class="btn btn-success" id="btn_third">
				</fieldset>


					</div>
				</div>
			</div>

		</form>

				<form action="<?php echo base_url('admin/resources/add/ThirdCategoryImageAsParent'); ?>" method="post">
				<input type="checkbox" name="same_as_second"> <h4>Same as Second</h4>
				<input type="submit" class="btn btn-primary" value="Update">
				</form>
				<hr>

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->




<script type="text/javascript">



// File uploading

		// common variables
		var iBytesUploaded = 0;
		var iBytesTotal = 0;
		var iPreviousBytesLoaded = 0;
		var iMaxFilesize = 1048576; // 1MB
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
			} else if(id==3){
				$preview = 'preview3';
				$image_file = 'image_file3';
			}


		    // hide different warnings
		    //document.getElementById('upload_response').style.display = 'none';
		/*    document.getElementById('error').style.display = 'none';
		    document.getElementById('error2').style.display = 'none';
		    document.getElementById('abort').style.display = 'none';
		    document.getElementById('warnsize').style.display = 'none';
		    */
		    // get selected file element
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

		      var oImage = document.getElementById($preview);
		      oImage.removeAttribute("src");
		      return;
		  }

		    // get preview element
		    var oImage = document.getElementById($preview);

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

		function startUploading() {
		    // cleanup all temp states
		    iPreviousBytesLoaded = 0;
		    document.getElementById('upload_response').style.display = 'none';
		    document.getElementById('error').style.display = 'none';
		    document.getElementById('error2').style.display = 'none';
		    document.getElementById('abort').style.display = 'none';
		    document.getElementById('warnsize').style.display = 'none';
		    document.getElementById('progress_percent').innerHTML = '';
		    var oProgress = document.getElementById('progress');
		    oProgress.style.display = 'block';
		    oProgress.style.width = '0px';

		    // get form data for POSTing
		    //var vFD = document.getElementById('upload_form').getFormData(); // for FF3
		    var vFD = new FormData(document.getElementById('upload_form')); 

		    // create XMLHttpRequest object, adding few event listeners, and POSTing our data
		    var oXHR = new XMLHttpRequest();
		    oXHR.upload.addEventListener('progress', uploadProgress, false);
		    oXHR.addEventListener('load', uploadFinish, false);
		    oXHR.addEventListener('error', uploadError, false);
		    oXHR.addEventListener('abort', uploadAbort, false);
		    oXHR.open('POST', 'upload.php');
		    oXHR.send(vFD);

		    // set inner timer
		    oTimer = setInterval(doInnerUpdates, 300);
		}

		function doInnerUpdates() { // we will use this function to display upload speed
		  var iCB = iBytesUploaded;
		  var iDiff = iCB - iPreviousBytesLoaded;

		    // if nothing new loaded - exit
		    if (iDiff == 0)
		      return;

		  iPreviousBytesLoaded = iCB;
		  iDiff = iDiff * 2;
		  var iBytesRem = iBytesTotal - iPreviousBytesLoaded;
		  var secondsRemaining = iBytesRem / iDiff;

		    // update speed info
		    var iSpeed = iDiff.toString() + 'B/s';
		    if (iDiff > 1024 * 1024) {
		      iSpeed = (Math.round(iDiff * 100/(1024*1024))/100).toString() + 'MB/s';
		  } else if (iDiff > 1024) {
		      iSpeed =  (Math.round(iDiff * 100/1024)/100).toString() + 'KB/s';
		  }

		  document.getElementById('speed').innerHTML = iSpeed;
		  document.getElementById('remaining').innerHTML = '| ' + secondsToTime(secondsRemaining);
		}

		function uploadProgress(e) { // upload process in progress
		  if (e.lengthComputable) {
		    iBytesUploaded = e.loaded;
		    iBytesTotal = e.total;
		    var iPercentComplete = Math.round(e.loaded * 100 / e.total);
		    var iBytesTransfered = bytesToSize(iBytesUploaded);

		    document.getElementById('progress_percent').innerHTML = iPercentComplete.toString() + '%';
		    document.getElementById('progress').style.width = (iPercentComplete * 4).toString() + 'px';
		    document.getElementById('b_transfered').innerHTML = iBytesTransfered;
		    if (iPercentComplete == 100) {
		      var oUploadResponse = document.getElementById('upload_response');
		      oUploadResponse.innerHTML = '<h1>Please wait...processing</h1>';
		      oUploadResponse.style.display = 'block';
		  }
		} else {
		    document.getElementById('progress').innerHTML = 'unable to compute';
		}
		}

		function uploadFinish(e) { // upload successfully finished
		  var oUploadResponse = document.getElementById('upload_response');
		  oUploadResponse.innerHTML = e.target.responseText;
		  oUploadResponse.style.display = 'block';

		  document.getElementById('progress_percent').innerHTML = '100%';
		  document.getElementById('progress').style.width = '400px';
		  document.getElementById('filesize').innerHTML = sResultFileSize;
		  document.getElementById('remaining').innerHTML = '| 00:00:00';

		  clearInterval(oTimer);
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


<?php include('admin_footer.php'); ?>