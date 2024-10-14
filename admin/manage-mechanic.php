
<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ifscaid']==0)) {
  header('location:logout.php');
  } else{

// Code for deleting product from cart
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql="delete from tblmechanic where ID=$rid";
$query=mysqli_query($dbh,$sql);

 echo "<script>alert('Data deleted');</script>"; 
  echo "<script>window.location.href = 'manage-mechanic.php'</script>";     


}

  ?><!doctype html>
<html lang="en">

    <head>
        
        <title>Onroad Vehicle Breakdown Assistance Portal :: Manage Mechanic</title>

        <link href="../plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="../plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

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
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Manage Mechanic</h4>
                            

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr><th>#</th><th>Name</th>
                                                    <th>Mobile</th>
                                                    <th>City</th>
                                                    <th>Area</th>
                                                    <th>Address</th>
                                                    <th>Join Date</th>
                                                    <th>Action</th>
                                                </tr>
                                </thead>


                                <tbody>
                                <?php

       
$sql="SELECT * FROM tblmechanic";
$query = mysqli_query($dbh,$sql);
$trows=mysqli_num_rows($query);
$cnt=1;
if($trows > 0)
{
	while($row = $query->fetch_assoc())

{               ?>
                                                     <tr>
                                                        <td><?php echo htmlentities($cnt);?></td>
                                                        <td><?php  echo htmlentities($row['name']);?></td>
                                                        <td><?php  echo htmlentities($row['mobile']);?></td>
                                                        <td><?php  echo htmlentities($row['city']);?></td>
                                                        <td><?php  echo htmlentities($row['area']);?></td>
                                                        <td><?php  echo htmlentities($row['address']);?></td>
                                                        <td><?php  echo htmlentities($row['CreationDate']);?></td>
                                                        <td><a href="edit-mechanic-detail.php?editid=<?php echo htmlentities ($row['ID']);?>"><i class="zmdi zmdi-edit" aria-hidden="true"></i></a> | <a href="manage-mechanic.php?delid=<?php echo ($row['ID']);?>" onclick="return confirm('Do you really want to Delete ?');"><i class="zmdi zmdi-delete" aria-hidden="true"></i></a></td>
                                                        
                                                    </tr>
                                                   <?php $cnt=$cnt+1;}} ?> 
                              
                                </tbody>
                            </table>
   
                        </div>
                    </div>
                </div> <!-- end row -->



            </div> 
<?php include_once('includes/footer.php');?>

        </div> 

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
        <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="../plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="../plugins/datatables/jszip.min.js"></script>
        <script src="../plugins/datatables/pdfmake.min.js"></script>
        <script src="../plugins/datatables/vfs_fonts.js"></script>
        <script src="../plugins/datatables/buttons.html5.min.js"></script>
        <script src="../plugins/datatables/buttons.print.min.js"></script>
        <script src="../plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="../plugins/datatables/dataTables.select.min.js"></script>
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>

    </body>
</html><?php }  ?>
