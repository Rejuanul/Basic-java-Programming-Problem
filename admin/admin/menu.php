  <?php

  //  include '../config.php';
  // $sql = "select userName from admin ";
  // $query = mysqli_query($con,$sql);
  // $result = mysqli_fetch_array($query);
  ?>
  <header class="main-header">
    <!-- Logo -->
    <a href="../index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>B</b>J</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Basic Java Programming Problem</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="index.php">
             <span class="hidden-xs"><<!-- ?php echo $_SESSION['userName'];  -->?></span>
            </a>
          </li>
          <li class="dropdown user user-menu">
            <a href="logout.php" class="btn btn-flat"><i class="fa fa-sign-out"></i>Sign Out</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class=" menu">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

         <!-- <li class="menu">
          <a href="#">
            <i class="fa fa-user-plus"></i> <span>Create Admin</span>
          </a>
        </li> -->

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i>
            <span>Create Post </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Questionpage.php"><i class="fa fa-circle-o"></i> Post </a></li>


          </ul>
        </li>



        <li class="treeview">
          <a href="#">
            <i class="fa fa-eye"></i>
            <span>View</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="viewDatatype.php"><i class="fa fa-circle-o"></i> Basic Data Type </a></li>
            <li><a href="viewVariabletype.php"><i class="fa fa-circle-o"></i> Variable Type </a></li>
              <li><a href="viewModifiretype.php"><i class="fa fa-circle-o"></i>Modifiyer Type </a></li>

          </ul>
        </li>



        <!-- <li class="menu">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Home Edit Panel</span>
          </a>
        </li>


         <li class="menu">
          <a href="#">
            <i class="fa fa-comment"></i> <span>Feedback</span>
          </a>
        </li>
        <li class="menu">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Messages &nbsp;&nbsp;&nbsp;<span class="label label-danger">5</span></span>
          </a>
        </li> -->

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
