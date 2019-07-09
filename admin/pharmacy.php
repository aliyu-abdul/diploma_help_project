<?php 
session_start();
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

  <title>ONLINE MEDICATION SEARCH</title>

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
session_start();
//include("checklogin.php");
//check_login();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost', 'root', '', 'medical');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$hn = $mysqli->real_escape_string($_POST['hn']);
$rg = $mysqli->real_escape_string($_POST['rg']);
$ds = $mysqli->real_escape_string($_POST['ds']);

$sql = "INSERT INTO pharmacy (pharmac_name, region, discrict) " . 
"VALUES ('$hn', '$rg', '$ds') ";

if($mysqli->query($sql) === true) {
$_SESSION['message'] = 'Pharmacy added succesful welcome';
header("location: manage-users.php");
}

else {
$_SESSION['message'] = 'Pharmacy added failed ';
}




}
?>
<body >
<div class="header">
<h2>ADD NEW PHARMACY</h2>
</div>


              <form class="form-horizontal " method="post" action="pharmacy.php" enctype="multpart/form-data" autocomplete="off">
                <div class="input-group">
                  <label class="col-sm-2 control-label">Pharmacy name</label>
                    <input type="text" class="form-control" name="hn" minlength="4" required>
				  </div>
				  <div class="input-group">
                  <label class="col-sm-2 control-label">Region</label>
                    <input type="text" class="form-control" name="rg" required>
				  </div>
				  <div class="input-group">
                  <label class="col-sm-2 control-label">District</label>
                    <input type="text" class="form-control" name="ds" required>
				  </div>
				  

                <div class="input-group">
                <button class="btn" type="submit" name="register">Submit</button> 
                </div>
                
                  </form>



</body>

</html>
