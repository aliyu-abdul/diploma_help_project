<?php
session_start();
if(!isset($_SESSION['user'])){
  header('location: log.php');
}
$_SESSION['message'] = '';
$connection = new mysqli('localhost', 'root', '', 'medical');
if(!$connection){
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['submit'])){


	$md = mysqli_real_escape_string($connection, $_POST['md']);
	$cs = mysqli_real_escape_string($connection, $_POST['cs']);
  $st = mysqli_real_escape_string($connection, $_POST['st']);
  // $loc = mysqli_real_escape_string($connection, $_POST['loc']);
  $pn = mysqli_real_escape_string($connection, $_POST['pha_name']);

	$isql = "INSERT INTO medicine (name, price, status,pharmacy_name ) VALUES ('$md', '$cs', '$st','$pn')";
	$ires = mysqli_query($connection, $isql) or die(mysqli_error($connection));
	if($ires){
    $_SESSION['message'] = "Your Comment Submitted Successfully";
	}else{
		$_SESSION['message'] = "Failed to Submit Your Comment";
	}

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
            <a class="" href="dashboard.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="pharmasist.php">
                          <i class="icon_document_alt"></i>
                          <span>ADD MEDICINE</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="reg_pharmacy.php">
                          <i class="icon_document_alt"></i>
                          <span>ADD PHARMACY</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="available.php">
                          <i class="icon_document_alt"></i>
                          <span>MEDICAL DETAIL</span>
                      </a>
          </li>

          <li class="">
            <a class="" href="logout.php">
                          <i class="icon_chat_alt"></i>
                          <span>Log Out</span>
                      </a>
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
              <li><i class="fa fa-files-o"></i>Add medicine</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                add medical details and update <br>
               <span class="text-success"> <?php echo $_SESSION['message'];?></span>
               <!-- <p style="color:#F00; padding-top:20px;" align="center">//<?php echo $_SESSION['message'];?><?php echo $_SESSION['message']="";?></p> -->
              </header>
              <div class=
              "panel-body">
              <div class="panel-body">
                <form class="form-horizontal " name = "evaluate_form" method="post" action="pharmasist.php" enctype="multpart/form-data" autocomplete="off">
                    <div class="form-group ">
                      <label for="cname"  class="control-label col-lg-2">Medical Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="md" minlength="3" type="text" required />
                      </div>
                    </div>

                    <div class="form-group ">
                      <label for="cname"  class="control-label col-lg-2">Cost <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="cs" minlength="3" type="number" required />
                      </div>
                    </div>


                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">status <span class="required">*</span></label>
                      <div class="col-lg-10">
                        
                        <select name="st"  class="form-control" id="subject"   required >
                          <option value="" selected>select status</option>
                          <option value="available">Available</option>
                          <option value="not available">Not_available</option>
 
                        </select>
                      </div>
                    </div>
                    
                    

                    <div class="form-group ">
                      <label for="cname"  class="control-label col-lg-2">Pharmacy Details <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <!-- <input class="form-control" id="pn" name="pn" minlength="3" type="text" required /> -->
                        <select class="form-control" name="pha_name">

                          <option></option>
                          <?php 
                            $q = "SELECT * FROM  `pharmacy`";
                            $qq = mysqli_query($connection, $q) or die(mysqli_error($connection));
                            while($data = mysqli_fetch_assoc($qq)){                            
                          ?>
                          <option value="<?php echo $data['pharmac_name'] ?>,<?php echo $data['region'] ?>,<?php echo $data['street'] ?>,<?php echo $data['phone_number'] ?>"><?php echo $data['pharmac_name'] ?>,<?php echo $data['region'] ?>,<?php echo $data['street'] ?>,<?php echo $data['phone_number'] ?></option>
                          
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                    
                    <!-- <div class="form-group ">
                      <label for="cname"  class="control-label col-lg-2">Location <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="loc" name="loc" minlength="3" type="text" required />
                      </div>
                    </div> -->
             

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                      <!-- <button class="btn btn-primary btn-lg btn-block" type="submit" name="register">Submit</button>  -->
                        <button class="btn btn-primary" type="submit" name="submit">submit</button>
                        <button class="btn btn-default" type="button" onclick="reset();">Cancel</button>
                      </div>
                    </div>
                    <hr>
                    
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>
                    
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
