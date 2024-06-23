<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ifscaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {

$ifscaid=$_SESSION['ifscaid'];
 $name=$_POST['name'];
 $city=$_POST['city'];
 $area=$_POST['area'];
 $mobile=$_POST['mobile'];
 $address=$_POST['address'];
 $type=$_POST['type'];
 $mdesc=$_POST['mdesc'];
$sql="insert into tbldonors(name,city,area,mobile,address,type,mdesc)values('$name','$city','$area','$mobile','$address','$type','$mdesc')";
$query=mysqli_query($dbh,$sql);
if ($query==TRUE) {
    echo '<script>alert("Donors  has been added.")</script>';
echo "<script>window.location.href ='add-donors.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}

?>
<!doctype html>
<html lang="en">

    <head>
       
        <title>Food Waste Usage Management Portal :: Add Donors</title>

        <!-- Switchery css -->
        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
       
    </head>


    <body>

<?php include_once('includes/header.php');?>
        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                           
                            <h4 class="page-title">Add Donors</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-6">

                                    <h4 class="header-title m-t-0">Add Donors</h4>
                                    
                                    <div class="p-20">
                                        <form action="#" method="post">
                                            
                                            <div class="form-group">
                                                <label for="userName">Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Name" required="true" name="name">
                                            </div>
											<div class="form-group">
                                                <label for="userName">Mobile<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Mobile" required="true" name="mobile">
                                            </div>
											<div class="form-group">
                                                <label for="city">City<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter City" required="true" name="city">
                                            </div>
											<div class="form-group">
                                                <label for="area">Area<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Area" required="true" name="area">
                                            </div>
											<div class="form-group">
                                                <label for="userName">Address<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Address" required="true" name="address">
                                            </div>
											<div class="form-group">
                                                <label for="type">Type<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Orphanage,Old agehome etc" required="true" name="type">
                                            </div>
											
											<div class="form-group">
                                                <label for="mdesc">Description<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Description" required="true" name="mdesc">
                                            </div>
											
                                           
                                            <div class="form-group text-left m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                                    Add
                                                </button>
                                                
                                            </div>

                                        </form>
                                    </div>

                                </div>
                             
                            </div>
                            <!-- end row -->


                        </div>
                    </div><!-- end col-->

                </div>
                <!-- end row -->

            </div> <!-- container -->

<?php include_once('includes/footer.php');?>

        </div> <!-- End wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- Validation js (Parsleyjs) -->
        <script src="../plugins/parsleyjs/parsley.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

    </body>
</html><?php }  ?>