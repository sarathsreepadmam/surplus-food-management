<?php
session_start();
//error_reporting(0);
include('admin/includes/dbconnection.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    
    <title>Food Management Portal| Home</title>
	
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/LineIcons.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
	
<script type="text/javascript">
function copyText(){
 document.getElementById("txt_copy").select();
 document.execCommand('copy');
}
</script>
</head>

<body>

    <header class="header-area">
        <div class="navbar-area headroom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <h3 style="color: red;padding-right: 50px;">Food Management Portal</h3>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav m-auto">
                                    
                                   <li class="nav-item" style="color:red">
                                        <a href="index.php">Home</a>
                                    </li>
                                  
                                    <li class="nav-item">
                                        <a href="admin/login.php">Admin</a>
								   </li>
                                   
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
   
    </header>
    
    <section data-scroll-index="0" id="pricing" class="pricing-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-8 col-sm-9">
                    <div class="section-title text-center pb-20 wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                       
                        
                         <?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchifsccode'];
  ?>
  <h4 align="center" class="title">Result of "<?php echo $sdata;?>" Donors Detail </h4>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row no-gutters justify-content-center">
                <div class="col-lg-12 col-md-7 col-sm-9">
                      


                            <div class="card-body">
                                <table class="table " border="1">
                                    <thead>
                                        <tr>
                                            <tr>
                  <th>S.No.</th>
                  <th>Donors Name</th>
                  <th>City</th>
                  <th>Area</th>
                  <th>Address</th>
                  <th>Type</th>
                  <th>Contact Number</th>
                </tr>
                                  
                                        </thead>
                                    <?php

$sql="SELECT *from tbldonors where (name like  '%$sdata%' || city like  '%$sdata%' || area like '%$sdata%' || type like '%$sdata%')";
$query = mysqli_query($dbh,$sql);
$rowcount=mysqli_num_rows($query);
$cnt=1;
if($rowcount > 0)
{
	while($row = $query->fetch_assoc())

{               ?>   
              
                <tr>
                  <td><?php echo htmlentities($cnt);?></td>
                  <td><?php  echo htmlentities($row['name']);?>                   
                  </td>
                  <td><?php  echo htmlentities($row['city']);?></td>
                  <td><?php  echo htmlentities($row['area']);?></td>
                  <td><?php  echo htmlentities($row['address']);?></td>
                  <td style="color:blue;" >
                    <?php  echo htmlentities($row['type']);?>
                  </td>
                  
                  <td><a href="tel:<?php echo $row['mobile'];?>"><?php  echo htmlentities($row['mobile']);?></a></td>
                </tr>
                 <?php 
$cnt=$cnt+1;
} } else { ?>
  <tr>
    <td colspan="10" style="color:red; text-align:center"> No record found against this search</td>

  </tr>
   
<?php } }?>

                                </table>
                            </div>
                </div>
               
               
            </div> 
        </div> 
    </section>
    
    <footer id="footer" class="footer-area bg_cover" style="background-image: url(assets/images/footer-bg.jpg)">
        <div class="container">
            <div class="footer-copyright text-center">
                 <p class="text">© <?php echo date('Y');?> Food Management Portal</p>
            </div>
        </div> <!-- container -->
    </footer>
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

<script type="text/javascript">
    function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
</script>

    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/circles.min.js"></script>
    <script src="assets/js/jquery.appear.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/headroom.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/scrollIt.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>

</html>
