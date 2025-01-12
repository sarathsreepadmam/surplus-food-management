<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ifscaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $adminid=$_SESSION['ifscaid'];
    $AName=$_POST['adminname'];
  $mobno=$_POST['mobilenumber'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $sql="update tbladmin set AdminName=:adminname,MobileNumber=:mobilenumber,Email=:email,Address=:address where ID=:aid";
     $query = $dbh->prepare($sql);
     $query->bindParam(':adminname',$AName,PDO::PARAM_STR);
     $query->bindParam(':email',$email,PDO::PARAM_STR);
     $query->bindParam(':mobilenumber',$mobno,PDO::PARAM_STR);
      $query->bindParam(':address',$address,PDO::PARAM_STR);
     $query->bindParam(':aid',$adminid,PDO::PARAM_STR);
$query->execute();
if($query -> rowCount() > 0)
   {
    echo '<script>alert("Your profile has been updated")</script>';
    echo "<script>window.location.href ='profile.php'</script>";
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
       
        <title>IFSC Code Finder Portal :: Profile</title>

        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
       
    </head>


    <body>

<?php include_once('includes/header.php');?>
        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                           
                            <h4 class="page-title">Profile</h4>
                        </div>
                    </div>
                </div>
                <!-- end row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="row">
                                <div class="col-lg-6">

                                    <h4 class="header-title m-t-0">Admin Profile</h4>
                                    
                                    <div class="p-20">
                                        <form action="#" method="post">
                                            <?php

$sql="SELECT * from  tbladmin";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                            <div class="form-group">
                                                <label for="userName">Admin Name<span class="text-danger">*</span></label>
                                                <input type="text" name="adminname" value="<?php  echo $row->AdminName;?>" class="form-control" required='true'>
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress">User Name<span class="text-danger">*</span></label>
                                               <input type="text" name="username" value="<?php  echo $row->UserName;?>" class="form-control" readonly="">
                                            </div>
                                            <div class="form-group">
                                                <label for="pass1">Contact Number<span class="text-danger">*</span></label>
                                               <input type="text" name="mobilenumber" value="<?php  echo $row->MobileNumber;?>"  class="form-control" maxlength='10' required='true' pattern="[0-9]+">
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" value="<?php  echo $row->Email;?>" class="form-control" required='true'>
                                            </div>
                                            <div class="form-group">
                                                <label for="passWord2">Admin Registration Date <span class="text-danger"></span></label>
                                                <input type="text" name="" value="<?php  echo $row->AdminRegdate;?>" readonly="" class="form-control">
                                            </div>
                                           <div class="form-group">
                                                <label for="passWord2">Address <span class="text-danger"></span></label>
                                                <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1" name="address"><?php  echo $row->Address;?></textarea>
                                            </div><?php $cnt=$cnt+1;}} ?>
                                            <div class="form-group text-left m-b-0">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                                    Submit
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

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
        <script src="../plugins/parsleyjs/parsley.min.js"></script>
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

    </body>
</html><?php }  ?>
