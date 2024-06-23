<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql ="SELECT * FROM tbladmin WHERE UserName='$username' and Password='$password'";
    $query=mysqli_query($dbh,$sql);
    $rowcount=mysqli_num_rows($query);
	
    if ($rowcount > 0)
{
	
while($result = $query->fetch_assoc())
{
	
$_SESSION['ifscaid']=$result['ID'];
$_SESSION['login']=$_POST['username'];
echo "<script type='text/javascript'>alert('Login Sucessfully');</script>";
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
}
} else{
echo "<script type='text/javascript'>alert('Ivalid Details');</script>";
echo "<script type='text/javascript'> document.location ='login.php'; </script>";
}
}

?>