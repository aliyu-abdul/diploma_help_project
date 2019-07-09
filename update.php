<?php
session_start();
include'dbconnection.php';
//include("checklogin.php");
//check_login();
if(isset($_POST['Submit']))
{
	$pfn=$_POST['pfn'];
	$pn=$_POST['pn'];

	mysqli_query($con,"update medicine set name='$pfn' ,price='$pn' where id='".$_GET['id']."'");
$_SESSION['msg']="Updated successfully";


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

  <title>ONLINE MEDICAL</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <script type="text/javascript" >
  function reset(){
document.getElementById("instructor_name").value="";
document.getElementById("course_code").value="";
document.getElementById("course_name").value="";
document.getElementById("comment").value="";
  }
  </script>

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="#" class="logo"><b> <span class="lite">ONLINE</span> MEDICATION <span class="lite">SEARCH</span></b></a>
      <!--logo end-->
      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>

      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="dashbords.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="notes.html">
                          <i class="icon_document_alt"></i>
                          <span>MEDICAL DETAIL</span>
                      </a>
          </li>





          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_chat_alt"></i>
                          <span>Sign out</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              
            <li><a class="" href="index.php">log out</a></li>

            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">

            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="#">Home</a></li>
              <li><i class="icon_document_alt"></i>Forms</li>
              <li><i class="fa fa-files-o"></i>medical details</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                 update details <br>
               <span class="text-success"> <?php echo $_SESSION['message'];?></span>
               <!-- <p style="color:#F00; padding-top:20px;" align="center">//<?php echo $_SESSION['message'];?><?php echo $_SESSION['message']="";?></p> -->
              </header>
              <div class="panel-body">
              <div class="panel-body">
              <form class="form-horizontal style-form" name="form1" method="post" action="update.php" onSubmit="return valid();">
                         
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">medicine name </label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="pfn" value="<?php echo $row['name'];?>" >
                              </div>
                          </div>
                          
                              <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label" style="padding-left:40px;">cost</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="pn" value="<?php echo $row['price'];?>" >
                              </div>
                          </div>

                              
                           
                          <div style="margin-left:100px;">
                          <input type="submit" name="Submit" value="Update" class="btn btn-theme"></div>
                          </form>
                </div>

              </div>
            </section>
          </div>
        </div>


       
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">

        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

 <script type="text/javascript">
      $(document).ready(function(){
          $("#cname").keyup(function(){
             var instructor = document.evaluate_form.instructor_name.value;
              $.post("suggest.php",{
                    inst_name:instructor
                  },function(data,status){
                      $("#code").html(data);
                  });
          });
      });
 </script>

</body>

</html>
