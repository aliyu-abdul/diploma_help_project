<?php
session_start();
if(!isset($_SESSION['id'])){
  header('location: index.php');
}
include'dbconnection.php';
//include("checklogin.php");
//check_login();
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from pharmacist where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>online medication search</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <a href="#" class="logo"><b>Admin Dashboard</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  
              	  	
                  <li class="mt">
                      <a href="change-password.php">
                          <i class="fa fa-file"></i>
                          <span>Change Password</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="manage-users.php" >
                          <i class="fa fa-users"></i>
                          <span>Manage Users</span>
                      </a>
                   
                  </li>

                  <li class="sub-menu">
                      <a href="register.php" >
                          <i class="fa fa-users"></i>
                          <span>Add pharmasist</span>
                      </a>
                   
                  </li>
                  
                  <li class="sub-menu">
                      <a href="pharmacy.php" >
                          <i class=""></i>
                          <span></span>
                      </a>
                   
                  </li>
              
                 
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Manage Users</h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All pharmasist detail </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th class="hidden-phone">User name</th>
                                  <th>pharmacy name</th>
                                  <th> loacation</th>
                                  <th>phone number</th>
                                  <th>email</th>
                                  <!-- <th>password</th> -->
                                  <th>Status</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from pharmacist ");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['username'];?></td>
                                  <td><?php echo $row['pharmacy_name'];?></td>
                                  <td><?php echo $row['location'];?></td>
                                  <td><?php echo $row['phone_number'];?></td> 
                                  <td><?php echo $row['email'];?></td> 
                                 <td><?php echo $row['status'];?></td>
                                  <td>
                                     
                                     <a href="update-profile.php?uid=<?php echo $row['Id'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                     <a href="manage-users.php?id=<?php echo $row['Id'];?>"> 
                                     <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></a>
                                     <?php
                                     if($row['status'] == "active"){
                                         ?>
                                        <a href="activat_deactivate.php?act=true&id=<?php echo $row['Id'];?>"> 
                                     <button class="btn btn-primary btn-xs"><i class="fa fa-pencil">active</i></button></a>
                                     <?php
                                     }else if($row['status'] == "diactivated"){
                                         ?>
                                        <a href="activat_deactivate.php?deact=true&id=<?php echo $row['Id'];?>"> 
                                     <button class="btn btn-info btn-xs"><i class="fa fa-pencil">dectivated</i></button></a>
                                    
                                    <?php } ?>
                                     
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
