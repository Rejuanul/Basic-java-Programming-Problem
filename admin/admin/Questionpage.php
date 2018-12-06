<?php
  // session_start();
  // if ( $_SESSION['userType'] !='admin'  ){
  //   header("Location: login.php");
  // }
  // include '../config.php';

// $host = "localhost";
//   $dbUsername= "root";
//   $dbPassword="";
//   $dbname = "news_portal";
//   //create aa connection
//   $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname );
//
//   if (mysqli_connect_error()) {
//
//     die('Connect_Error('. mysqli_connect_errno().')' . mysqli_connect_error());
//   }

  //insert product
  // $productMessage = "";
  // if (isset($_POST['submit'])) {
  //   $Cetegory = $_POST['cetegory'];
  //   $Title = $_POST['title'];
  //   $Photo = $_POST['image1'];
  //   $Month  = $_POST['month'];
  //   $Details =  $_POST['details'];
  //    $Post =  $_POST['postby'];
  //
  //   $facility1 = "";
  //   if (isset($_POST['check_list1'])) {
  //     $facility1 = $_POST['check_list1'];
  //   }
  //   $facility2 = "";
  //   if (isset($_POST['check_list2'])) {
  //     $facility2 = $_POST['check_list2'];
  //   }
  //   $facility3 = "";
  //   if (isset($_POST['check_list3'])) {
  //     $facility3 = $_POST['check_list3'];
  //   }
  //   $facility4 = "";
  //   if (isset($_POST['check_list4'])) {
  //     $facility4 = $_POST['check_list4'];
  //   }
  //   $consider = "";
  //   if (isset($_POST['negotiable'])) {
  //     $consider = $_POST['negotiable'];
  //   }
  //
  //   $userName = $_SESSION['userName'];
  //   //iamge-1
  //   $image1 = $_FILES['image1']['name'];
  //   $temp1 = explode(".",$_FILES["image1"]["name"]);
  //   $newfilename1 = uniqid('', true).'.' . end($temp1);
  //   $target1 = "../images/".$newfilename1;
  //   $size1 = $_FILES['image1']['size'];
  //   $type1 = $_FILES['image1']['type'];
  //   if( ($type1 == 'image/png') ||($type1 == 'image/jpg') ||($type1 == 'image/gif') ||($type1 == 'image/jpeg') ){
  //     if($size1 > 2000000){
  //       echo '<script>alert("image is too large")</script>';
  //     }
  //     else{
  //       move_uploaded_file($_FILES['image1']['tmp_name'], $target1);
  //     }
  //   }
  //   else{
  //     echo '<script>alert("Only image is allow")</script>';
  //   }
  //   //image-2
  //   $image2 = $_FILES['image2']['name'];
  //   $temp2 = explode(".",$_FILES["image2"]["name"]);
  //   $newfilename2 = uniqid('', true).'.' . end($temp2);
  //   $target2 = "../images/".$newfilename2;
  //   $size2 = $_FILES['image2']['size'];
  //   $type2 = $_FILES['image2']['type'];
  //   if( ($type2 == 'image/png') ||($type2 == 'image/jpg') ||($type2 == 'image/gif') ||($type2 == 'image/jpeg') ){
  //     if($size2 > 2000000){
  //       echo '<script>alert("image is too large")</script>';
  //     }
  //     else{
  //       move_uploaded_file($_FILES['image2']['tmp_name'], $target2);
  //     }
  //   }
  //   else{
  //     echo '<script>alert("Only image is allow")</script>';
  //   }
  //
  //
  //    //image-3
  //     $image3 = $_FILES['image3']['name'];
  //     $temp3 = explode(".",$_FILES["image3"]["name"]);
  //     $newfilename3 = uniqid('', true).'.' . end($temp3);
  //     $target3 = "../images/".$newfilename3;
  //     $size3 = $_FILES['image3']['size'];
  //     $type3 = $_FILES['image3']['type'];
  //     if( ($type3 == 'image/png') ||($type3 == 'image/jpg') ||($type3 == 'image/gif') ||($type3 == 'image/jpeg') ){
  //       if($size2 > 2000000){
  //         echo '<script>alert("image is too large")</script>';
  //       }
  //       else{
  //         move_uploaded_file($_FILES['image3']['tmp_name'], $target3);
  //       }
  //     }
  //     else{
  //       echo '<script>alert("Only image is allow")</script>';
  //     }
  //   //insert into database
  //   $sqlForProductInsert = " insert into  newspost ( 'Cetegory','Title','Photo','Month ' ,'Details', 'Post ') values
	// ('$cetegory''$title''$image1''$month''$details''$postby') ";
  //   $queryForProductInsert = mysqli_query($con,$sqlForProductInsert);
  //
  //   if ($queryForProductInsert) {
  //     $productMessage = '<div class="alert alert-success alert-dismissible fade in">
  //   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  //   <strong>Successful!</strong>
  //   </div>';
  //   }else $productMessage = '<div class="alert alert-danger alert-dismissible fade in">
  //   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  //   <strong>Faield!</strong>
  //   </div>';
  //
  // }

 ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="../images/favicon-16x16.png" sizes="16x16" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Post | Insert/Post</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include 'menu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     Post
        <small>Post/insert</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Java</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row" >
      	<div class="col-md-10 col-md-offset-1">
    <!-- <span><?php echo $productMessage; ?></span> -->



        <form class="form-horizontal" method="post" action="connection.php" role="form" enctype="multipart/form-data">

            <div class="form-group">

                  <label for="title"  class="col-sm-2 control-label" name="cetegory">Cetegory</label>
                   <div class="col-sm-8">
                  <select>
                    <option>Basic Data Type </option>
                     <option>Variable Type </option>
                      <option>Modifiyer Type </option>

                  </select>
                   </div>



                </div>

                <div class="form-group">
                  <label for="details" class="col-sm-2 control-label">   Question Upload</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" id = "details" rows="4" style="resize:vertical"  name="details" value="" title="More Details = More Easygoing" placeholder="Write Attractive Description"></textarea>
                    </div>
                </div>


                <div class="container" align="col-sm-2 control-label" >


                    <center> <button type="submit" class="btn btn-success" > Submit</button></center>
                  </div>




            </form>
      </div>
  </div>
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-right">
    <strong> &copy; 2018 Aronno Razu. All rights resereved.</strong><a href="http://www.razumaininfo.wordpress.com/"  target="_blank"> Aronno Razu </a>
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../bower_components/raphael/raphael.min.js"></script>
<script src="../bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!-- jQuery Knob Chart -->
<script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="../dist/js/pages/dashboard.js"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>



	<!-- Latest compiled and minified JavaScript -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
