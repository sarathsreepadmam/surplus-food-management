<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');


?>
<!doctype html>
<html lang="en">

    <head>
       
        <title>Food Management Portal| Login</title>

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">

        	<div class="account-bg">
                <div class="card-box mb-0">
                    <strong style="padding-top: 30px;"><a href="../index.php" class="text-muted"><i class="fa fa-home m-r-5"></i> Back Home!!</a> </strong>
                    <div class="text-center m-t-20">
                            <i class="zmdi zmdi-group-work icon-c-logo"></i>
                            <span>Food Management Portal | Admin Login</span>
                    </div>
                    <div class="m-t-10 p-20">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
                            </div>
                        </div>
                        <form class="m-t-20" action="logincheck.php" method="post">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="enter your username" required="true" name="username" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input type="password" class="form-control" placeholder="enter your password" name="password" required="true" value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="checkbox-custom">
                                        <input type="checkbox" id="remember" name="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> />
                                        <label for="checkbox-signup">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group text-center row m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit" name="login">Log In</button>
                                </div>
                            </div>

                            <div class="form-group row m-t-30 mb-0">
                                <div class="col-12">
                                    <a href="forgot-password.php" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                </div>
                            </div>

                     


                        </form>

                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- end card-box-->


        </div>
        <!-- end wrapper page -->
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>