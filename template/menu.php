 <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $subTitle;?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a href="profile.php" class="d-block"><?php echo $account;?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>


            <li class="nav-item">
                <a href="resident.php" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                    Residents*
                    
                  </p>
                </a>
            </li>

          <li class="nav-item">
            <a href="household.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <i class="nav-icon fa-solid fa-burger"></i>
              <p>
                Households


                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-store"></i>
              <p>
                Business
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="area.php" class="nav-link">
              <i class="nav-icon fas fa-map"></i>
              <p>
                Area*
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Properties
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Summary
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="admin-settings.php" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Settings*
              </p>
            </a>
          </li>



          
         

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->