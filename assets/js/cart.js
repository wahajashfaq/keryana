
if($(window).width()<=993){
  $(".features-box").css("border-right","none");
  $(".features-box").css("text-align","center");
  $("#seperator").hide();
}
$(window).resize(function() {
  if($(window).width()>993){
    $(".features-box").css("border-right","1px solid #DEDEDE");   
    $(".features-box").css("border-right","1px solid #DEDEDE");   
    $("#last-f-box").css("border-right","none");
    $(".features-box").css("text-align","right");
    $("#seperator").show();
  }
  if($(window).width()<=993){
    $(".features-box").css("border-right","none");   
    $(".features-box").css("text-align","center");
    $("#seperator").hide();
  }
});

$(document).ready(function(){
            // Activate Carousel
            
            /*
            $("#myCarousel").on('slid.bs.carousel', function () {
                if($('#slide1').hasClass('active'))
                {
                    console.log('hello');
                        $('#ind3').removeClass('box2');
                        $('#ind2').removeClass('box');
                        $('#ind1').removeClass('box');
                        $('#ind1').addClass('box2');
                        $('#ind2').addClass('box');
                        $('#ind3').addClass('box');
                }
                else if($('#slide2').hasClass('active'))
                {
                    $('#ind1').removeClass('box2');
                        $('#ind2').removeClass('box');
                        $('#ind3').removeClass('box');
                        $('#ind2').addClass('box2');
                        $('#ind3').addClass('box');
                        $('#ind1').addClass('box');
                }
                else if($('#slide3').hasClass('active'))
                {
                    $('#ind2').removeClass('box2');
                        $('#ind3').removeClass('box');
                        $('#ind1').removeClass('box');
                        $('#ind3').addClass('box2');
                        $('#ind2').addClass('box');
                        $('#ind1').addClass('box');
                }
            });
            $('#ind1').mouseenter(function(){
               if($('#slide2').hasClass('active'))
               {
                   $("#myCarousel").carousel("prev");
                   $('#ind2').removeClass('box2');
                   $('#ind2').addClass('box');
               }
               else
               {
                   $("#myCarousel").carousel("next");
               }
            });
            $('#ind2').mouseenter(function(){
               if($('#slide3').hasClass('active'))
               {
                   $("#myCarousel").carousel("prev");
                   $('#ind3').removeClass('box2');
                   $('#ind3').addClass('box');
               }
               else
               {
                   $("#myCarousel").carousel("next");
               }
            });
            $('#ind3').mouseenter(function(){
               if($('#slide3').hasClass('active'))
               {
                   $("#myCarousel").carousel("prev");
                   $('#ind1').removeClass('box2');
                   $('#ind1').addClass('box');
               }
               else
               {
                   $("#myCarousel").carousel("next");
               }
            });
            */
            $(document).scroll(function() {
              
             if(window.innerWidth>991)
             {
              var y = $(this).scrollTop();
              if (y > 150) {
                $('.header-fixed').fadeIn();
              } else {
                $('.header-fixed').fadeOut();
                $('#product-search').css('top','110px');
              }
              if(y>350)
              {
               $('.backtotop').fadeIn();
             }
             else
             {
               $('.backtotop').fadeOut();
             }
           }
         });
            
            $('#myCarousel1').carousel({
              interval: false
            })
            
            $('#myCarousel2').carousel({
              interval: false
            })
            
            $('#myCarousel3').carousel({
              interval: false
            })
            
            $('#myCarousel4').carousel({
              interval: false
            })
            $('#myCarousel5').carousel({
              interval: false
            })

            $('.carousel1 .item').each(function(){
              
              var next = $(this).next();
              
              if (!next.length) {
                next = $(this).siblings(':first');
              }
              next.children(':first-child').clone().appendTo($(this));
              
              for (var i=0;i<4;i++) {
                next=next.next();
                if (!next.length) {
                  next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
              }
            });
            
            
            $('body').scrollspy({target: "#backtotop", offset: 50});
                // Add smooth scrolling on all links inside the navbar
                $("#backtotop a").on('click', function(event) {
                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                  // Prevent default anchor click behavior
                  event.preventDefault();

                  // Store hash
                  var hash = this.hash;

                  // Using jQuery's animate() method to add smooth page scroll
                  // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                  $('html, body').animate({
                    scrollTop: $(hash).offset().top
                  }, 800, function(){

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                  });
                }  // End if
              });
                
                
                if($('.qval').text()=="1"){
                  $('.qval').text("1");
                }
/*
            $('body').on('click', '.addbtn', function() {
                $(this).parent().children('.addbtn').css('display','none');
                $(this).parent().children('.qmang').children('.qval').text("1");
                $(this).parent().children('.qmang').css('display','block');
              });*/
              $('body').on('click', '.fa-minus', function() {
                var m = $(this).parent().children('.qval').text();
                m--;
                if(m===0)
                {
                   // $(this).parent().parent().children('.qmang').css('display','none');
                   // $(this).parent().parent().children('.addbtn').css('display','block');
                 }else if(m<0){

                 }

                 else{
                  
                  $(this).parent().children('.qval').text(m);
                }
              });
              $('body').on('click', '.fa-plus', function() {
                var m = $(this).parent().children('.qval').text();
                m++;
                $(this).parent().children('.qval').text(m);
              });
              
              $('#message').click(function(){
                $('#message').css('display','none');
                $('#contactform').css('display','block');
              });
              
              $('#cclose').click(function(){
                $('#contactform').css('display','none');
                $('#message').css('display','block');
              });
              
            });





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
    document.getElementById('error').style.display = 'none';
    document.getElementById('error2').style.display = 'none';
    document.getElementById('abort').style.display = 'none';
    document.getElementById('warnsize').style.display = 'none';

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



//-------------------------