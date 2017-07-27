<?php include('admin_header.php'); ?>

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
                            <fieldset>
                                <legend>Add New Product</legend>
                                <div class="form-group">
                                    <div class="row">
                                     <div class="col-md-6">
                                         <input type="text"  class="form-control"  name="first_category" id="first_category" placeholder="Product Name">
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
                                         <input type="text"  class="form-control"  name="unit" id="unit" placeholder="Unit">
                                     </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                     <div class="col-md-6">
                                         <input type="text"  class="form-control"  name="price" id="price" placeholder="Price">
                                     </div>
                                    </div>

                            </div>

                        </fieldset>



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


</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->



<?php include('admin_footer.php'); ?>