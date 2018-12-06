<?php
  // session_start();
  // if ( $_SESSION['userType'] !='admin'){
  //   header("Location: ../login.php");
  // }
  // include '../config.php';
  // $userName = $_SESSION['userName'];
  // $userType = $_SESSION['userType'];
  // $sqlForUserName ="select name,image from $userType where userName = '$userName'";
  // $queryForUserName = mysqli_query($con,$sqlForUserName);
  // $resultForUserName = mysqli_fetch_array($queryForUserName);

 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="../images/favicon-16x16.png" sizes="16x16" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Basic Java Programming Problem | View Post</title>
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
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h2 class="box-title"> Modifiyer Type Post Information </h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x: auto;">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Cetegory</th>

                        <th>Question Upload</th>

                    </tr>
                    </thead>
                    <tbody>
                      <!-- <?php
                          $serialNo = 1;
                        $sqlForTuittion = "select * from to_let where status='family'";
                        $queryForTuition = mysqli_query($con,$sqlForTuittion);
                        while($info = mysqli_fetch_array($queryForTuition)) {
                        ?>
                        <tr>
                        <td><?php echo $serialNo;?></td>
                        <td><?php echo $info['title']; ?></td>

                        <td><?php echo $info['postedBy']; ?></td>


                    </tr>
                    <?php  $serialNo++; }?> -->
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Cetegory</th>

                        <th>Question Upload</th>



                    </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
      <!-- /.row -->

      <!-- Main row -->

      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer text-right">
    <strong> &copy; 2018 Aronno Razu. All rights resereved.</strong><a href="http://razumaininfo.wordpress.com/"  target="_blank"> Aronno Razu </a>
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
    })
</script>
</body>
</html>
