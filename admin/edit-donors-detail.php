<?php
session_start();
$eid=$_GET['editid'];
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ifscaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {


 $name=$_POST['name'];
 $mobile=$_POST['mobile'];
 $city=$_POST['city'];
 $area=$_POST['area'];
 $address=$_POST['address'];
 $type=$_POST['type'];
 $desc=$_POST['mdesc'];
  $eid=$_GET['editid'];

$sql="update tbldonors set name='$name',mobile='$mobile',city='$city',area='$area',address='$address',type='$type',mdesc='$desc' where ID=$eid";
$query=mysqli_query($dbh,$sql);
         echo '<script>alert("Donors has been updated")</script>';
   echo "<script>window.location.href ='manage-donors.php'</script>";
}


?>
<!doctype html>
<html lang="en">

    <head>
       
        <title>User Excess Donors Portal :: Update Donors</title>

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
                           
                            <h4 class="page-title">Update Donors</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-6">

                                    <h4 class="header-title m-t-0">Update Donors</h4>
                                    
                                    <div class="p-20">
                                        <form action="#" method="post">
                                           <?php
                   
$sql="SELECT * from tbldonors where ID=$eid";
$query = mysqli_query($dbh,$sql);
$rowcount=mysqli_num_rows($query);
$cnt=1;
if($rowcount > 0)
{
	while($row = $query->fetch_assoc())

{               ?>
                                            <div class="form-group">
                                                <label for="userName">Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"  required="true" name="name" value="<?php  echo htmlentities($row['name']);?>">
                                            </div>
											<div class="form-group">
                                                <label for="mobile">Mobile<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"  required="true" name="mobile" value="<?php  echo htmlentities($row['mobile']);?>">
                                            </div>
											<div class="form-group">
                                                <label for="city">City<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"  required="true" name="city" value="<?php  echo htmlentities($row['city']);?>">
                                            </div>
											<div class="form-group">
                                                <label for="area">Area<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"  required="true" name="area" value="<?php  echo htmlentities($row['area']);?>">
                                            </div>
											<div class="form-group">
                                                <label for="address">Address<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"  required="true" name="address" value="<?php  echo htmlentities($row['address']);?>">
                                            </div>
											<div class="form-group">
                                                <label for="type">Type<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"  required="true" name="type" value="<?php  echo htmlentities($row['type']);?>">
                                            </div>
											<div class="form-group">
                                                <label for="mdesc">Description<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control"  required="true" name="mdesc" value="<?php  echo htmlentities($row['mdesc']);?>">
                                            </div>
                                        <?php $cnt=$cnt+1;}} ?>
                                            <div class="form-group text-left m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                                    Update
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