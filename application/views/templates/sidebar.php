<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" style="background-color: #ff9900;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" >
        <div class="sidebar-brand-icon ">
          <i class="fas fa-spinner text-light"></i>
        </div>
        <div class="sidebar-brand-text mx-3 text-light">WRUSF </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('') ?>">
          <i class="fa fa-home text-light"></i>
          <span class="text-light">Home</span></a>
      </li>

      <!-- Divider -->
      <!--<hr class="sidebar-divider">-->

      <!-- Heading -->
      <div class="sidebar-heading">
        
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-book text-light"></i>
          <span class="text-light">Books</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-light py-2 collapse-inner rounded">
            <h6 class="collapse-header text-black">Category</h6>
            <a class="collapse-item text-warning" href="<?php echo base_url('index.php/kategori/biografi') ?>">Biografi</a>
            <a class="collapse-item text-warning" href="<?php echo base_url('index.php/kategori/fiksi') ?>">Fiksi</a>
            <a class="collapse-item text-warning" href="<?php echo base_url('index.php/kategori/nonfiksi') ?>">Non Fiksi</a>
            <a class="collapse-item text-warning" href="<?php echo base_url('index.php/kategori/Romance') ?>">Romance</a>
            <a class="collapse-item text-warning" href="<?php echo base_url('index.php/kategori/horror') ?>">Horror</a>
            <a class="collapse-item text-warning" href="<?php echo base_url('index.php/kategori/thriller') ?>">Thriller</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column bg-light">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand  topbar static-top shadow" style="background-color: #4d2e00">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <?php echo form_open('Welcome/search') ?>

          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." autocomplete="off">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="search_submit" id="tomcar">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <?php echo form_close() ?>

          <!-- Topbar Navbar -->
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

            <div class="navbar">
              <ul class="nav navbar-nav navbar-right"> 
                <li>
                  <?php 
                  $cargo = 'Your Cart: '.$this->cart->total_items(). ' item(s)'
                  ?>

                  <?php echo anchor('dashboard/cargo_detail', $cargo)  ?>
                </li>
              </ul>

              <div class="topbar-divider d-none d-sm-block"></div>

            <ul class="nav navbar-nav navbar-right">
              <?php if($this->session->userdata('username')) { ?>
                <li class="text-white"><div>Welcome <?php echo $this->session->userdata('username')  ?></div></li>
                <li class="ml-3"><?php echo anchor('auth/logout', 'Logout') ?></li>
              <?php } else { ?>
                <li><?php echo anchor('auth/login', 'Login') ?></li>
              <?php } ?>
            </ul>

            </div>            

          </ul>

        </nav>
        <!-- End of Topbar -->