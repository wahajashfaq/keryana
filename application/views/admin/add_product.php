<?php include('admin_header.php'); ?>
<style type="text/css">
    #preview > img{
        z-index: -1;
    }

    #preview{
        height: 250px;
        width: 220px;
        z-index: -1;
    }



</style>
<body>


    <div id="wrapper">

        <?php include('admin_navbar.php') ?>

        <div id="page-wrapper">
            <!-- /.row -->
            <div class="row">
                <br>
                <br>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                           <form id="upload_form" enctype="multipart/form-data" method="post" action="<?php echo base_url('admin/Product/Add_Product') ?> ">
                            <fieldset>
                                <legend>Add New Product</legend>
                                <div class="form-group">
                                    <div class="row">
                                       <div class="col-md-6">
                                           <input type="text"  class="form-control"  name="product_name" id="product_name" placeholder="Product Name">
                                       </div>
                                   </div>
                                   <hr/>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <textarea   class="form-control"  name="product_detail" id="product_detail" placeholder="Details" rows="3"></textarea>
                                       </div>
                                   </div>
                                   <hr/>
                                   <div class="row">
                                       <div class="col-md-6">
                                           <select name="brand_id" class="form-control" >

                                            <option value="" >Select Brand</option>
                                            <?php 
                                            foreach ($brands as $row) { ?>
                                            <option value="<?php echo $row["EncryptedId"] ?>"><?php echo $row["Name"]; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                    <a target="blank" href="<?php echo base_url('admin/resources/add/brand') ?>">Add Brand</a>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                               <div class="col-md-4">

                                <div id="add_categories">
                                    <select name="first_category_type" id="first_category_type" class="form-control" >

                                        <option value="" >Select First Category</option>
                                        <?php 
                                        foreach ($first_category as $row) { ?>
                                        <option value="<?php echo $row["EncryptedId"] ?>"><?php echo $row["Name"]; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>    
                        </div>

                               <div class="col-md-4">

                                <div id="add_categories">
                                    <select name="second_category_type" id="second_category_type" class="form-control" >

                                        <option value="" >Select Second Category</option>
                                        
                                </select>
                            </div>    
                        </div>

                               <div class="col-md-4">

                                <div id="add_categories">
                                    <select name="third_category_type" id="third_category_type" class="form-control" >

                                        <option value="" >Select Second Category</option>
                                    }
                                    ?>
                                </select>
                            </div>    
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                       <div class="col-md-6">
                           <input type="number" class="form-control"  name="excel_id" placeholder="Excel Id" required>
                       </div>
                   </div>
                   
                    <hr/>
                    <div class="row">
                       <div class="col-md-6">
                           <input type="number"  min="1" max="4" class="form-control"  name="unit" id="unit" placeholder="Number of Unit (1-4)">

                           <hr/>
                           <div id="dynamic_inputs">

                           </div>
                       </div>
                   </div>

               </div>

               <div class="upload_form_cont">
                <div>
                    <div><label for="image_file">Please select image file</label></div>
                    <div><input type="file" name="image_file" id="image_file" onchange="fileSelected();" /></div>
                </div>
                <div id="fileinfo">
                    <div id="filename"></div>
                    <div id="filesize"></div>
                    <div id="filetype"></div>
                    <div id="filedim"></div>
                </div>
                <img id="preview" />

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

            <input type="submit" name="btn_submit" value="Add">
        </fieldset>
    </form>


</div>
<div class="panel-footer">

</div>
</div>
<!-- /.col-lg-4 -->
</div>
</div>








<script type="text/javascript">

        // Ajax post




        $(document).ready(function() {

            $('#first_category_type').change(function() {
                var firstCategory = $('#first_category_type').val();

                 if(firstCategory!=''){

                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "admin/product/getSecondCategory",
                        dataType: 'text',
                        data: {first_category_ID : firstCategory},
                        success: function(res) {
                            if (res)
                            {
                            // Show Entered Value
                            $('#second_category_type').html(res);
                        }
                    }
                });
                }
            });

             $('#second_category_type').change(function() {
                var secondCategory = $('#second_category_type').val();

                 if(secondCategory!=''){

                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "admin/product/getThirdCategory",
                        dataType: 'text',
                        data: {second_category_ID : secondCategory},
                        success: function(res) {
                            if (res)
                            {
                            // Show Entered Value
                            $('#third_category_type').html(res);
                        }
                    }
                });
                }
            });

            $('input#unit').change(function() {
            // Check input( $( this ).val() ) for validity here
            var count = $('input#unit').val();
            var myHtml = '';

            if(count<5){
                for(var i = 1 ; i <= count ; i++){

                    var new_unit_tag = '<input type="text" class="form-control" style="margin-top=5px;" placeholder="Unit '+i+'" name="unit'+i+'" ><br>';
                    var new_price_tag = '<input type="text" class="form-control" style="margin-top=5px;" placeholder="Price '+i+'" name="price'+i+'" ><br>';
                    myHtml += new_unit_tag;
                    myHtml += new_price_tag;

                }
                $('#dynamic_inputs').html(myHtml);
            }else {
                alert("Maximum 4 Units are allowed for product");
            }

        });    

            $("#btn_first").click(function(event) {

                var cat_ID = $('#f_cat').val();

                event.preventDefault();
                var first_category = $("input#first_category").val();

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

                location.reload();
            });

            $("#btn_second").click(function(event) {

                var cat_ID = $('#f_cat').val();

                event.preventDefault();
                var second_category = $("input#second_category").val();
                if(second_category!=''){
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "admin/product/Add_Category",
                        dataType: 'json',
                        data: {category : second_category , category_type:'second', category_ID : cat_ID},
                        success: function(res) {
                            if (res)
                            {
                            // Show Entered Value
                            alert("Added");
                        }
                    }
                });
                }

                location.reload();
            });

            $("#btn_third").click(function(event) {

                var cat_ID = $('#s_cat').val();

                event.preventDefault();
                var third_category = $("input#third_category").val();
                if(third_category!=''){
                    jQuery.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>" + "admin/product/Add_Category",
                        dataType: 'json',
                        data: {category : third_category,category_type:'third', category_ID : cat_ID},
                        success: function(res) {
                            if (res)
                            {
                            // Show Entered Value
                            alert("Added");
                        }
                    }
                });
                }

                location.reload();
            });

        });
    </script>




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

function fileSelected() {

    // hide different warnings
    //document.getElementById('upload_response').style.display = 'none';
/*    document.getElementById('error').style.display = 'none';
    document.getElementById('error2').style.display = 'none';
    document.getElementById('abort').style.display = 'none';
    document.getElementById('warnsize').style.display = 'none';
    */
    // get selected file element
    var oFile = document.getElementById('image_file').files[0];

    // filter for image files
    var rFilter = /^(image\/bmp|image\/gif|image\/jpeg|image\/png|image\/tiff)$/i;
    if (! rFilter.test(oFile.type)) {
      document.getElementById('error').style.display = 'block';
      
      var oImage = document.getElementById('preview');
      oImage.removeAttribute("src");
      return;
  }

    // little test for filesize
    if (oFile.size > iMaxFilesize) {
      document.getElementById('warnsize').style.display = 'block';

      var oImage = document.getElementById('preview');
      oImage.removeAttribute("src");
      return;
  }

    // get preview element
    var oImage = document.getElementById('preview');

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
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->



<?php include('admin_footer.php'); ?>