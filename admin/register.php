<?php 
session_start();
//include("checklogin.php");
//check_login();
if(!isset($_SESSION['id'])){
  header('location: index.php');
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>CIVE CONTENT SHARING</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <style type="text/css">
.body{
font-size: 120%;
  background: #FBFBFF;
}
*{
margin: 0px;
padding: 0px;
}
form{
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #B0C4DE;
    background: white;
    border-radius: 0px 0px 10px 10px;
}
.header{
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
.input-group{
margin: 10px 0px 10px 0px;
}
.input-group label{
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input{
    height: 30px;
    width: 93%;
    padding: 5px 10px;
   font-size: 16px;
   border-radius: 5px;
   border: 1px solid gray;
}
.btn{
    width: 97%;
    padding: 10px;
    font-size: 16px;
    color: white;
    background: #5F9EA0;
   border-radius: 5px;
   border: none;
   
}
.select{
    height: 30px;
    width: 97%;
    padding: 5px 10px;
   font-size: 16px;
   border-radius: 5px;
   border: 1px solid gra
}

  </style>

</head>
<?php

//include("checklogin.php");
//check_login();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost', 'root', '', 'medical');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
if($_POST['ps'] == $_POST['ps2']) {
$pfn = $mysqli->real_escape_string($_POST['pfn']);
$pn = $mysqli->real_escape_string($_POST['pn']);
$pl = $mysqli->real_escape_string($_POST['pl']);
$pnn = $mysqli->real_escape_string($_POST['pnn']);
$email = $mysqli->real_escape_string($_POST['email']);
$ps = md5($_POST['ps']);


$_SESSION['username'] = $username;
$_SESSION['ps'] = $ps;

$sql = "INSERT INTO pharmacist (username, pharmacy_name, location,phone_number, email, password,status) " . 
"VALUES ('$pfn', '$pn', '$pl','$pnn', '$email', '$ps','active') ";

if($mysqli->query($sql) === true) {
$_SESSION['message'] = 'registration succesful please login';
header("location: manage-users.php");
}

else {
$_SESSION['message'] = 'registration failed ';
}

}

else {
$_SESSION['message'] = 'Two password does not match ';
}

}
?>
<body >
<div class="header">
<h2>PHARMASIST ACCOUNT</h2>
</div>


              <form class="form-horizontal " method="post" action="register.php" enctype="multpart/form-data" autocomplete="off">
                <div class="input-group">
                  <label class="col-sm-2 control-label">User name</label>
                    <input type="text" class="form-control" name="pfn" minlength="4" required>
				  </div>
				  <div class="input-group">
                  <label class="col-sm-2 control-label">Phermarcy name</label>
                    <input type="text" class="form-control" name="pn" required>
				  </div>
				  <div class="input-group">
                  <label class="col-sm-2 control-label">Phermarcy location</label>
                    <input type="text" class="form-control" name="pl" required>
				  </div>
				  <div class="input-group">
                  <label class="col-sm-2 control-label">phone number</label>
                    <input type="text" class="form-control" name="pnn" required>
                  </div>
        

                <div class="input-group">
                  <label class="col-sm-2 control-label">Email</label>
                  
                    <input type="email" class="form-control round-input" name="email" required/>
                  
                </div>
                <div class="input-group">
                  <label class="col-sm-2 control-label">Password</label>
                  
                    <input type="password" class="form-control" name="ps" required>
                  
                </div>
                <div class="input-group">
                  <label class="col-sm-2 control-label">Confirm Password</label>
                  
                    <input type="password" class="form-control" name="ps2" required>
                  
                </div>

                <div class="input-group">
                <button class="btn" type="submit" name="register">Submit</button> 
                </div>
                
                  </form>



</body>

</html>
