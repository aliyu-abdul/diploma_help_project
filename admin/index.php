<?php
session_start();
include("dbconnection.php");
if(isset($_POST['login']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password'");
$num=mysqli_fetch_array($ret);
$n=mysqli_num_rows($ret) ;
if($n>0)
{
  $_SESSION['user'] = $num['username'];
  $_SESSION['id']=$num['id'];
  header("location: manage-users.php");
}
else
{
  header("location: index.php");
}
}
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Login PAge</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/bs/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="../assets/bs/css/custom.css">
        <script src="../assets/bs/js/jquery.min.js"></script>
    <script src="../assets/bs/js/bootstrap.min.js"></script>
        <script src="js/jquery-1.11.1.min.js"></script>
    </head>
    <body>
<!--navigation menu-->
        <nav class="navu ">
            <div class="container-fluid">			
                  <div class="navbar navbar-brand colo ">
                    <div class="" style="color:white;">
                    <!--<img src="img/police.jpg" class="img-circle pic" width="120" height="120">-->
                        ONLINE MEDICATION SEARCH
                    </div>
                  </div>			 		
            </div>
        </nav>

	<div class="container well pad">
	 <div class="col-md-offset-0"> 
        
        <h2 class="col-sm-offset-2"><span class="glyphicon glyphicon-log-in"></span> Admin Login</h2>
        <p style="color:red;"><?php if(isset($_POST['login']))  { echo $_SESSION['action1']; } ?></p>
	    <form class="form-horizontal" action="" method="POST">
                
		  <div class="form-group col-offset-sm-2">
		    <label class="control-label col-sm-2" for="user">Username:</label>
		    <div class="col-sm-6 col-offset-sm-4">
                        <!--<span class="glyphicon glyphicon-user" aria-hidden="true"></span>-->
		      <input type="text" class="form-control" name="username" placeholder="Enter username">
		    </div>
		  </div>
                
		  <div class="form-group col-offset-sm-2">
		    <label class="control-label col-sm-2" for="pwd">Password:</label>
		    <div class="col-sm-6 col-offset-sm-4">
		      <input type="password" class="form-control" name="password" placeholder="Enter password">
		    </div>
		  </div>
		  
		  <div class="form-group col-offset-sm-2">
		    <div class="col-sm-offset-2 col-sm-10">
		      <input type="submit" name="login" class="btn btn-info" value="Login">

		      
		    </div>
		  </div>
      <a href="../index.php">BACK</a>
		</form> 
	 </div>	 
	</div>	
        <div class="clear"></div>
    <div id="navfooter">
      <div class="copyright" style ="font-size:13px;font-family:Helvetica, sans-serif;" >
          <p>&copy;Copyrights - 2019. </p>
      </div>
    </div>
        		        
    </body>
</html>
