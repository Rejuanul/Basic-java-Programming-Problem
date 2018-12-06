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
        <li class="">বাংলাদেশ</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="row" >
      	<div class="col-md-10 col-md-offset-1">
          <span><?php echo $productMessage; ?></span>



        <form class="form-horizontal" method="post" role="form" enctype="multipart/form-data">

            <div class="form-group">

                  <label for="title"  class="col-sm-2 control-label" name="cetegory">Cetegory</label>
                   <div class="col-sm-8">
                  <select>
                    <option>বাংলাদেশ </option>
                     <option>আন্তর্জাতিক </option>
                      <option>তথ্য ও প্রযুক্তি </option>
                       <option>শিক্ষা</option>
                        <option>খেলাধুলা</option>
                         <option>বিনোদন </option>
                          <option>গ্যালার </option>
                           <option>ভিডিও</option>
                           <option>শিল্প সাহিত্য </option>
                             <option>অক্ষর</option>
                              <option>চাকরী বাজার</option>
                               <option>জীবন যাত্রা</option>


                  </select>
                   </div>



                </div>
              <div class="form-group">
                  <label for="title" class="col-sm-2 control-label">Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="title"  name="title" value="" title="Keep it Short" placeholder="Enter Title of Your Advertisement">
                    </div>
                </div>
                <div class="form-group">
                  <label for="image-1" class="col-sm-2 control-label">Photo</label>
                    <div class="col-sm-8">
                        <input id="image-1" type="file" name="image1" class="form-control-file btn "  >
                    </div>
                </div>


                <div class="form-group">
                  <label for="month" class="col-sm-2 control-label">Month & Year</label>
                    <div class="col-sm-4">
                        <input type="month" name="month" id="month" class="form-control" placeholder="Month & Year">
                    </div>

                </div>
                <div class="form-group">
                  <label for="details" class="col-sm-2 control-label">   Details</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" id = "details" rows="4" style="resize:vertical"  name="details" value="" title="More Details = More Easygoing" placeholder="Write Attractive Description"></textarea>
                    </div>
                </div>





                     <div class="form-group">
                  <label for="address" class="col-sm-2 control-label">Post By</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" id = "address" rows="2" style="resize:none"  name="postby" value="" title="Right Address = Peaceful" placeholder="Enter Your Full Details"></textarea>
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
