<?php
session_start();
$_SESSION['message'] = '';
$con = new mysqli('localhost', 'root', '', 'medical');
if(!$con){
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>ONLINE MEDICATION SEARCH</title>
<link rel="stylesheet" href="assets/bs/css/bootstrap.min.css">
<link rel="stylesheet" href="ccss/font-awesome.min.css">
<link rel="stylesheet" href="css1/bootstrap.min.css">
<script src="assets/bs/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="assets/bs/js/bootstrap.min.js"></script>
   
<style>
.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel-inner{
    border-radius: 4px;
}
.carousel-item{
    text-align: center;
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.bs-example{
	margin: 20px;
}
{
  font-family: Arial;
}

* 
{
  box-sizing: border-box;
}

form.example input[type=text] 
{
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

form.example button 
{
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover 
{
  background: #0b7dda;
}

form.example::after 
{
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#"> <h3>ONLINE MEDICATION SEARCH</h3> </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                  <ul class="navbar-nav mr-auto">
              
                    </li>
                  </ul>
                  <div class="form-inline my-2 my-lg-0">
                      <ul class="navbar-nav mr-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>                            
                          </li>
                          <li>
                          <a class="nav-link" href="pharmacy.php">PHARMACY <span class="sr-only">(current)</span></a>
                          </li>
                              <li class="nav-item dropdown">
   
              <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >STAFF LOGIN</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="admin/index.php">admin login</a>
                <a class="dropdown-item" href="log.php">pharmacist login</a>
            </li>
                        </ul>
                    
                      </div>
                </div>
              </nav>
              <form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="search2">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="kazi.png" alt="First Slide"width="1500" height="400">
            </div>
            <div class="carousel-item">
                <img src="op.png" alt="Second Slide"width="1500" height="400">
            </div>
            <div class="carousel-item">
                <img src="opi.png" alt="Third Slide" width="1500" height="400">
            </div>
            <div class="carousel-item">
                    <img src="pm.png" alt="Third Slide"width="1500" height="400">
             </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<marquee behavior="" direction=""><h4>WELCOME DEAR CUSTOMER WE GLAD YOU HERE</h4></marquee>
<div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12">
            <h1 style="color:red">WHAT ONLINE MEDICATION DO</h1>
                <ul>
                    <H5><li> Online medication search website is the simple site which will help people to search different type of medicine which available in different pharmacy which found in Dodoma region. The site will allow pharmacist to create their account and inter their detail about the medicine available in their pharmacy by listing and update their list every day</li></H5>
                   <h5> <li>allow pharmasist to update his or her details about medicine</li></h4>
                    <h5><li> Also user supposed to search the madicine he/she need in our site and view the detail of that medicine and its discription in a specific pharmacy and view the locatiopn of that pharmacy be available in dodoma region.</li></h5>
                    <h5><LI>So dear customer when you nter in our website please click the button of pharmacy and then searh the medcine you need and the system will complete detal about llocation and all status</LI></h5>
                    <h5><LI>The place of staff login s used to only that who are the main user of our website who is admn and pharmacst this two user are allowed to login and register in our website.</LI></h5>
                </ul>
                <h3 style="color:RED">OUR MISSION </h3> 
                <h5>Our purpose is to provide a clear location of different medicine found within Dodoma region through online medication search. Also to helps customer to get medicine quickly when they want</h5><br>
                <h3 style="color:RED">OUR VISSION </h3>
                <h5>Our vision is to provide a good search of medicine to the patient that will help them to know the location of medicine they want</h5><br>
             </p>
          </div>     
          </div> 
          
      <script src="js1/bootstrap.min.js"></script>  
      <div class="copyright" style ="font-size:16px;font-family:Helvetica, sans-serif; color:black" >
         <center> <p>&copy;Copyrights - 2019: ditm2 student project. </p></center>
      </div>    
</body>
</html>                                                        