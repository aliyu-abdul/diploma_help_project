<?php
include'dbconnection.php';

if(isset($_GET['act']))
{
$idd=$_GET['id'];
$msg=mysqli_query($con,"UPDATE pharmacist SET status='diactivated' where Id='$idd'");
if($msg)
{
echo "<script>alert('user diactivated');</script>";
header('location:manage-users.php');
}
}

if(isset($_GET['deact']))
{
$idd=$_GET['id'];
$msg=mysqli_query($con,"UPDATE pharmacist SET status='active' where Id='$idd'");
if($msg)
{
echo "<script>alert('user activated');</script>";
header('location:manage-users.php');
}
}
?>