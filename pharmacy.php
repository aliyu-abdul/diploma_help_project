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

/*form.example input[type=text] 
{
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}*/

.soma
{
  float: left;
  width: 20%;
  padding: 4px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

.neno{
  padding: 16px;
  font-size: 12px;
}

.soma:hover 
{
  background: #0b7dda;
}

form.example::after 
{
  content: "";
  clear: both;
  display: table;
}
.navvie{
    margin-top: 15px;
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
              <div>
  <h1>ss</h1><br>
</div>

<header>
            <
<div class="container">
       
          <div class="col-md-12">
 <h4>MEDICINE AVAILABLE IN OUR PHARMACY</h4>
            <div class="content-panel">
  <form class="form-inline example" action="" method="post" style="margin-left:30%;">
     <p style="font-size: 15px;">       
  Medicine Name:<input type="text" class="form form-control neno" placeholder="Medicine name here..." name="search2">
  Location:<input type="text" class="form form-control neno" placeholder="Location here..." name="search3">
  <input type="submit" class="btn btn-primary " name="seach" value="Search">
</p>
</form>
                          <table class="table table-striped table-advance table-hover">
	                  	  	  
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>S/N.</th>
                                  <th class="hidden-phone">MEDICINE NAME</th>
                                  <th>PRICE</th>
                                  <th> STATUS</th>
                                  <th> PHARMACY NAME</th>
                                  <th> PHARMACY STREET</th>
                                  <th> PHARMACY PHONE NUMBER</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                              if(isset($_POST['seach'])){
                                $dawa = $_POST['search2'];
                                $locat = $_POST['search3'];
                                $ret=mysqli_query($con,"select * from medicine where name LIKE '%$dawa%' and pharmacy_name LIKE '%$locat%' ");
                              }else{
                                $ret=mysqli_query($con,"select * from medicine");
                              } 
                              
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret)){
                  $l = $row['pharmacy_name'];
                  $duka = explode(',',$l);
                  
                  
							  ?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['name'];?></td>
                                  <td><?php echo $row['price'];?></td>
                                  <td><?php echo $row['status'];?></td>
                                  <td class="hidden"><?php echo $row['pharmacy_name'];?></td>
                                  <td><?php echo $duka[0];?></td>
                                  <td><?php echo $duka[2];?></td>
                                  <td><?php echo $duka[3];?></td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
          </div>
          
      <script src="js1/bootstrap.min.js"></script>      
</body>
</html>                                                        