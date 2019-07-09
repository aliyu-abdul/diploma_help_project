<?php
include'dbconnection.php';

if(isset($_GET['act']))
{
$idd=$_GET['id'];
$msg=mysqli_query($con,"UPDATE medicine SET status='not available' where id='$idd'");
if($msg)
{
echo "<script>alert('status changed to not available');</script>";
header('location:available.php');
}
}

if(isset($_GET['deact']))
{
$idd=$_GET['id'];
$msg=mysqli_query($con,"UPDATE medicine SET status='available' where id='$idd'");
if($msg)
{
echo "<script>alert('status changed to available');</script>";
header('location:available.php');
}
}
?>