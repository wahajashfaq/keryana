<?php include('admin_header.php'); ?>

<body>


    <div id="wrapper">

        <?php include('admin_navbar.php') ?>

        <div id="page-wrapper">



            <fieldset>
                <legend>Add First Category</legend>
                <div class="form-group">
                    <div class="row">
                       <div class="col-md-4">
                           <input type="text"  class="form-control"  name="first_category" id="first_category" placeholder="First category">
                       </div>
                       <div class="col-md-4">
                        <input type="submit" class="btn btn-primary" value="Add" id="btn_first">
                    </div>
                </div>
            </div>

        </fieldset>


        <fieldset>
            <legend>Add Second Category</legend>

            <div class="form-group">
                <div class="row">

                   <div class="col-md-4">


                    <select id="f_cat" class="form-control" >

                        <?php 
                        foreach ($first_categories as $row) { ?>
                        <option value="<?php echo $row["EncryptedId"] ?>"><?php echo $row["Name"]; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-md-4">
                <input type="text" name="second_category"  class="form-control"  id="second_category" placeholder="Second category">
            </div>
            <div class="col-md-4">
                <input type="submit" class="btn btn-primary" value="Add" id="btn_second">   
            </div>
        </div>
    </div>
</fieldset>

<fieldset>
    <legend>Add Third Category</legend>

    
    <div class="form-group">
        <div class="row">


            <div class="col-md-4">
                <select id="s_cat" class="form-control">

                    <?php 
                    foreach ($second_categories as $row) { ?>

                    <option value="<?php echo $row["EncryptedId"] ?>"><?php echo $row["Name"] ?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <div class="col-md-4">
            <input type="text" name="third_category"  class="form-control" id="third_category" placeholder="Third category">
        </div>
        <div class="col-md-4">
            <input type="submit" class="btn btn-primary" value="Add" id="btn_third">
        </div>

    </div>
</div>
</fieldset>





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