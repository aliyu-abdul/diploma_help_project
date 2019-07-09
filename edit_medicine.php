<?php
session_start();
$_SESSION['message'] = '';
$connection = new mysqli('localhost', 'root', '', 'medical');
if(!$connection){
  echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['upd'])){


	$n = mysqli_real_escape_string($connection, $_POST['n']);
	$p = mysqli_real_escape_string($connection, $_POST['p']);
  $s = mysqli_real_escape_string($connection, $_POST['s']);
$i = $_GET['id'];
	//$isql = "INSERT INTO medicine (name, price, status,pharmacy_name ,location) VALUES ('$md', '$cs', '$st','$pn','$loc')";
    $q = "UPDATE medicine SET name='$n' , price='$p', status='$s' WHERE id='$i' ";
    $ires = mysqli_query($connection, $q) or die(mysqli_error($connection));
	if($ires){
    $_SESSION['message'] = "Your medicine updated Successfully";
    header('location:available.php');
	}else{
		$_SESSION['message'] = "Failed to update Your medicine";
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
            <a class="" href="dashbords.php">
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
            <a class="" href="available.php">
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
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
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
               <span class="text-success"> <?php echo $_SESSION['message'];?></span>
               <!-- <p style="color:#F00; padding-top:20px;" align="center">//<?php echo $_SESSION['message'];?><?php echo $_SESSION['message']="";?></p> -->
              </header>
              <div class="panel-body">
              
                    
                    <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All medical available</h4>
	                  	  	  
        
                              <thead>
                              <tr>
                                  <th>Sno.</th>
                                  <th class="hidden-phone">medical name</th>
                                  <th>cost</th>
                                  <th>status</th>
                                  <th>ACTIONS</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <form action="" method="post">
                              <?php
                              $id = $_GET['id']; 
                              $ret=mysqli_query($connection,"select * from medicine where id='$id'");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><input type="text" name="n" value="<?php echo $row['name'];?>" /></td>
                                  <td><input type="text" name="p" value="<?php echo $row['price'];?>" /></td>
                                  <td><input type="text" name="s" value="<?php echo $row['status'];?>" /></td>

                                  <td>
                                     
                                     
                                  <input type="submit" value="Update" name="upd" class="btn btn-primary" />
                                     
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                              </form>
                              </tbody>
                          </table>
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
