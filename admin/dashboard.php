
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ifscaid']==0)) {
  header('location:logout.php');
  } else{



  ?><!doctype html>
<html lang="en">

        <title>User Excess Donors Portall || Dashboard</title>

        <link rel="stylesheet" href="../plugins/morris/morris.css">
        <link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>

    </head>



    <body>
<?php include_once('includes/header.php');?>

        <div class="wrapper">
            <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="card-box tilebox-one">
                             <?php 
                        $sql1 ="SELECT * from   tblmechanic";
						$query=mysqli_query($dbh,$sql);
						$totbank=mysqli_num_rows($query);

?><i class="fa fa-bank float-right"></i>
                            
                            <h6 class="text-muted text-uppercase m-b-20">Total Donors</h6>
                            <h2 class="m-b-20" data-plugin="counterup"><?php echo htmlentities($totbank);?></h2>
                            <a href="manage-donors.php"><span class="badge badge-success"> View Detail </span></a> 
                        </div>
                    </div>
                </div>

            </div> 

<?php include_once('includes/footer.php');?>
            
             </div> 


        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
        <script src="../plugins/morris/morris.min.js"></script>
        <script src="../plugins/raphael/raphael.min.js"></script>
        <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.js"></script>
        <script src="assets/pages/jquery.dashboard.js"></script>
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html><?php } ?>
