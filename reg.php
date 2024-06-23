<?php
session_start();
//error_reporting(0);
include('admin/includes/dbconnection.php');
$name=$_POST['name'];
  $mobile=$_POST['mobile'];
 $email=$_POST['email'];
 $type=1;
 $password=$_POST['password'];
 
$sql="insert into tbluser(name,mobile,email,type,password)values('$name','$mobile','$email','$type','$password')";
$query=mysqli_query($dbh,$sql);
if ($query==TRUE) {
    echo '<script>alert("Registration Sucesfull Please Login to Continue.")</script>';
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
?>