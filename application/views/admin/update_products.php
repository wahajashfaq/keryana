<?php include('admin_header.php'); ?>

<body>

    
    <div id="wrapper">

        <?php include('admin_navbar.php') ?>

        <div id="page-wrapper">
            
            <!-- /.row -->

             <?php if (isset($error)): ?>
                <div class="alert alert-error"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('success') == TRUE): ?>
                <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
            <?php endif; ?>
             
            <h2>Update Products content</h2>
            <p style="color:red"><b>Note : </b><i>Please make sure your file is in correct format and excel_id is not changed otherwise product will re upload</i></p>
                <form method="post" action="<?php echo base_url('admin/Product/CSV') ?>" enctype="multipart/form-data">
                    <input type="file" name="userfile" ><br><br>
                    <input type="submit" name="submit" value="UPLOAD" class="btn btn-primary">
                </form>


        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->



<?php include('admin_footer.php'); ?>