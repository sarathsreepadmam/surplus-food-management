<?php
session_start();
//error_reporting(0);
include('admin/includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql ="SELECT * FROM tbluser WHERE email='$email' and password='$password'";
    $query=mysqli_query($dbh,$sql);
    $rowcount=mysqli_num_rows($query);
	
    if ($rowcount > 0)
{
	
while($result = $query->fetch_assoc())
{
	
$_SESSION['id']=$result['ID'];
$_SESSION['login']=$result['name'];

echo "<script type='text/javascript'> document.location ='dash.php'; </script>";
}
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>