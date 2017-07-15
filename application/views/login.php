<?php include('about_header.php') ?>
     
        <div class="container">
            <div id="tabs"> <a href=""> Home </a> <i class="fa fa-caret-right" aria-hidden="true"></i> Account</div>
        </div>
       
        <div class="container">
            <div class="row">
                <div class = "col-sm-6" id="loginside">
                    <h2>Login</h2>
                    <form method="post" action="signup/Login">
                        <input type="email"  name="email" placeholder="EMAIL" id="customer_login_email"><br><br>
                        <input  type="password" name="pass" placeholder="PASSWORD" id="customer_login_password">
                        <a id="forgot-p" href="">Forgot your password?</a>
                        <input type="submit" class="btn submit-btn" value="SIGN IN">
                        <div id="OR">
                            <div class= "line" id ="l1"  style="float: left"></div>
                            <span>OR</span>
                            <div class= "line" id ="l2" style="float: right"></div>
                        </div>
                        <a class="social_login facebook" href="">
                            <span>Sign in with Facebook</span><i class="fa fa-facebook fa-fw oxi_icon oxi_icon_facebook"></i>
                        </a>
                        <a class="social_login google" href="">
                            <span>Sign in with Google +</span><i class="fa fa-google fa-fw oxi_icon oxi_icon_google"></i>
                        </a>
                    </form>
                </div>
                <div class="col-sm-6" id="regside">
                    <h2>Register</h2>
                    <form method="post" action="signup/CreateAccount">  
                        <input type="text" name="fname" placeholder="First Name" id="customer_fn">
                        <input type="text" name="lname" placeholder="Last Name" id="customer_ln">
                        <input type="email" name="email" placeholder="Email" id="customer_reg_email">
                        <input type="password" name="pass" placeholder="Password" id="customer_reg_password">
                        <input type="submit" class = "btn submit-btn" id="register" value="REGISTER">
                    </form>
                </div>
            </div>
        </div>
        <div id="backtotop" class="container-fluid">
        <a href="#top"><div class="backtotop"></div></a>
        </div>


    <?php include('about_footer.php') ?>