 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?= site_url('Dashboard') ?>" class="brand-link">
         <img src="<?= base_url('assets/img/favicon/') ?>favicon32.png" alt="BB ICON" class="brand-image" style="opacity: .8">
         <!-- img-circle elevation-3 -->
         <span class="brand-text font-weight-light">CAS Support</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT a.id_modul, a.nama_modul, a.icon_modul, a.url_modul, a.seq FROM modul as a JOIN user_access_modul as b ON a.id_modul = b.modul_id WHERE b.role_id = $role_id ORDER BY a.seq ASC";
            $menu = $this->db->query($queryMenu)->result_array();
            // var_dump($menu);
            // die;
            ?>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <?php
                    foreach ($menu as $m) { ?>
                     <li class="nav-item">
                         <a href="<?= site_url($m['url_modul']) ?>" class="nav-link">
                             <i class="nav-icon <?= $m['icon_modul'] ?>"></i>
                             <p>
                                <?= $m['nama_modul']; ?>
                             </p>
                         </a>
                     </li>
                 <?php } ?>

                 <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="fas fa-fingerprint"></i>
                         <p>
                             Reset Password
                         </p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="<?= base_url('auth/logout') ?>" class="nav-link">
                        <i class="fas fa-sign-out-alt"></i>
                         <p>
                             Logout
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>

 <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
         <div class="container">
             <!-- <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Top Navigation <small>Example 3.0</small></h1>
                </div>
            </div> -->
         </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->