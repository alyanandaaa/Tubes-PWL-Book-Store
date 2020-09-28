<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" style="background-color: #ff9900;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon ">
          <i class="fas fa-user-cog text-light"></i>
        </div>
        <div class="sidebar-brand-text text-light mx-3 ">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0 text-dark">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/admin/data_barang') ?>">
          <i class="fas fa-box-open text-light"></i>
          <span class="text-light">Items</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/admin/inv') ?>">
          <i class="fas fa-file-invoice-dollar text-light"></i>
          <span class="text-light">Invoices</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/admin/inv/access') ?>">
          <i class="fas fa-file-invoice-dollar text-light"></i>
          <span class="text-light">Access</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column bg-light">

      <!-- Main Content -->
      <div id="content" style="background-color: white">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light topbar static-top shadow" style="background-color: #4d2e00">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>            

            <div class="topbar-divider d-none d-sm-block"></div>

            <div class="navbar">

            <ul class="nav navbar-nav navbar-right">
              <?php if($this->session->userdata('username')) { ?>
                <li class="text-white"><div>Welcome <?php echo $this->session->userdata('username')  ?></div></li>
                <li class="ml-3"> <?php echo anchor('auth/logout', 'Logout') ?></li>
              <?php } else { ?>
                <li><?php echo anchor('auth/login', 'Login') ?></li>
              <?php } ?>
            </ul>

            </div>

          </ul>

        </nav>
        <!-- End of Topbar -->