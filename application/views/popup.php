<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  
  <script type='text/javascript' src='//code.jquery.com/jquery-1.9.1.js'></script>
  
  
  
  

  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">

  

  <script type='text/javascript' src="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>


  <style type="text/css">
    .blur-filter {
    -webkit-filter: blur(2px);
    -moz-filter: blur(2px);
    -o-filter: blur(2px);
    -ms-filter: blur(2px);
    filter: blur(2px);
}

  </style>

  <script type="text/javascript">
    $(document).on("pagecreate", function () {
    $("#foo").on("click", function () {
        // close button
        var closeBtn = $('<a href="#" data-rel="back" class="ui-btn-right ui-btn ui-btn-b ui-corner-all ui-btn-icon-notext ui-icon-delete ui-shadow">Close</a>');

        // text you get from Ajax
        var content = "<p>Lorem ipsum dolor sit amet, consectetur adipiscing. Morbi convallis sem et dui sollicitudin tincidunt.</p>";

        // Popup body - set width is optional - append button and Ajax msg
        var popup = $("<div/>", {
            "data-role": "popup"
        }).css({
            width: $(window).width() / 2.5 + "px",
            padding: 5 + "px"
        }).append(closeBtn).append(content);

        // Append it to active page
        $.mobile.pageContainer.append(popup);

        // Create it and add listener to delete it once it's closed
        // open it
        $("[data-role=popup]").popup({
            dismissible: false,
            history: false,
            theme: "b",
            /* or a */
            positionTo: "window",
            overlayTheme: "b",
            /* "b" is recommended for overlay */
            transition: "pop",
            beforeposition: function () {
                $.mobile.pageContainer.pagecontainer("getActivePage")
                    .addClass("blur-filter");
            },
            afterclose: function () {
                $(this).remove();
                $(".blur-filter").removeClass("blur-filter");
            },
            afteropen: function () {
                /* do something */
            }
        }).popup("open");
    });
});
  </script>

</head>
<body>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <div data-role="page">
   <div role="main" class="ui-content"> <a href="#" class="ui-btn ui-btn-b ui-btn-icon-left ui-icon-info ui-corner-all" id="foo">Click here</a>


 </div>
</div>
<!-- External Panel -->
<!-- / -->
</body>

</body>


</html>