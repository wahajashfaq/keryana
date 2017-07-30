<?php include('about_header.php') ?>

<div class="container">
    <div id="tabs"> <a href=""> Home </a> <i class="fa fa-caret-right" aria-hidden="true"></i> Account</div>
</div>

<div class="container">
    <div class="row">
        <div class = "col-sm-6" id="loginside">
            <h2>Login</h2>
            
            <?php if($error =$this->session->flashdata('error')): ?>
            <div class="alert alert-danger animated shake">
              <strong>Error!</strong> <?php echo $error;?>
            </div>
            <?php endif; ?>

            <form method="post" action="signup/Login">
                <input type="email"  name="l_email" placeholder="EMAIL" id="customer_login_email"><br><br>
                <?php echo form_error('l_email'); ?>
                <input  type="password" name="l_pass" placeholder="PASSWORD" id="customer_login_password">
                <?php echo form_error('l_pass'); ?>
                <a id="forgot-p" href="">Forgot your password?</a>
                <input type="submit" class="btn submit-btn" value="SIGN IN">
                <div id="OR">
                    <div class= "line" id ="l1"  style="float: left"></div>
                    <span>OR</span>
                    <div class= "line" id ="l2" style="float: right"></div>
                </div>
                <a class="social_login facebook" href="<?php echo base_url();?>signup/fblogin">
                    <span>Sign in with Facebook</span><i class="fa fa-facebook fa-fw oxi_icon oxi_icon_facebook"></i>
                </a>
                
            </form>
        </div>
        <div class="col-sm-6" id="regside">
            <h2>Register</h2>
            <form method="post" action="<?php echo base_url('signup/CreateAccount'); ?>" >  
                <input type="text" name="fname" value="<?php echo set_value('fname'); ?>" placeholder="First Name" id="customer_fn">
                <?php echo form_error('fname'); ?>
                <input type="text" name="lname" placeholder="Last Name"  value"<?php echo set_value('lname'); ?>" id="<custo></custo>mer_ln">
                <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email" id="customer_reg_email">
                <?php echo form_error('email'); ?>
                <input type="password" name="pass" placeholder="Password" id="customer_reg_password">
                <?php echo form_error('pass'); ?>
                <input type="submit" class = "btn submit-btn" id="register" value="REGISTER">
            </form>
        </div>
    </div>
</div>
<div id="backtotop" class="container-fluid">
    <a href="#top"><div class="backtotop"></div></a>
</div>
<script>
    function sendgmail_data() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          
        }
      };
      xhttp.open("GET", "signup.php?fname=Henry&lname=Ford", true);
      xhttp.send();
    }
    function onSignIn(googleUser) {
          var profile = googleUser.getBasicProfile();
          console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
          console.log('Name: ' + profile.getName());
          console.log('Image URL: ' + profile.getImageUrl());
          console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
          redirect('http:google.com');
    }
</script>
<?php include('about_footer.php') ?>