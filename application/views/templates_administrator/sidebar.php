<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('administrator/dashboard'); ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-university"></i>
          <span>Akademik</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Sub-Menu Akademik:</h6>
            <a class="collapse-item" href="<?= base_url('administrator/prodi') ?>">Program Studi</a>
            <a class="collapse-item" href="<?= base_url('administrator/matakuliah') ?>">Mata Kuliah</a>
            <a class="collapse-item" href="<?= base_url('administrator/mahasiswa') ?>">Mahasiswa</a>
            <a class="collapse-item" href="<?= base_url('administrator/tahun_akademik') ?>">Tahun Akademik</a>
            <a class="collapse-item" href="<?= base_url('administrator/krs') ?>">KRS</a>
            <a class="collapse-item" href="<?= base_url('administrator/nilai/input_nilai') ?>">Input Nilai</a>
            <a class="collapse-item" href="<?= base_url('administrator/nilai') ?>">KHS</a>
            <a class="collapse-item" href="<?= base_url('administrator/transkrip_nilai') ?>">Cetak Transkrip</a>
            <a class="collapse-item" href="<?= base_url('administrator/dosen') ?>">Dosen</a>
          </div>
        </div>
      </li>

     
     
      <!-- Logout -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('administrator/auth/logout'); ?>" onclick="return confirm('Yakin akan logout?')">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
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
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
        </nav>