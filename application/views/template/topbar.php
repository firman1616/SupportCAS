 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">
     <div class="container">
         <a href="<?= site_url('Dashboard') ?>" class="navbar-brand">
             <img src="<?= base_url('assets/img/favicon/') ?>favicon32.png" alt="BB ICON" class="brand-image" style="opacity: .8">
             <span class="brand-text font-weight-light"><?= $title ?></span>
             <!-- img-circle elevation-3 -->
         </a>

         <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse order-3" id="navbarCollapse">
             <!-- Left navbar links -->
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                 </li>
                 <!-- <li class="nav-item">
                     <a href="index3.html" class="nav-link">Home</a>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">Contact</a>
                 </li> -->
                 <!-- <li class="nav-item dropdown">
                     <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                     <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                         <li><a href="#" class="dropdown-item">Some action </a></li>
                         <li><a href="#" class="dropdown-item">Some other action</a></li>

                         <li class="dropdown-divider"></li>

                         <li class="dropdown-submenu dropdown-hover">
                             <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Hover for action</a>
                             <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                                 <li>
                                     <a tabindex="-1" href="#" class="dropdown-item">level 2</a>
                                 </li>

                                 <li class="dropdown-submenu">
                                     <a id="dropdownSubMenu3" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">level 2</a>
                                     <ul aria-labelledby="dropdownSubMenu3" class="dropdown-menu border-0 shadow">
                                         <li><a href="#" class="dropdown-item">3rd level</a></li>
                                         <li><a href="#" class="dropdown-item">3rd level</a></li>
                                     </ul>
                                 </li>

                                 <li><a href="#" class="dropdown-item">level 2</a></li>
                                 <li><a href="#" class="dropdown-item">level 2</a></li>
                             </ul>
                         </li>
                     </ul>
                 </li> -->
             </ul>
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item">
                     <a class="nav-link" href="<?= base_url('auth/logout') ?>" role="button">
                         <h5><?= $user['name'] ?></h4>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                         <i class="fas fa-expand-arrows-alt"></i>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="<?= base_url('auth/logout') ?>" role="button">
                         <i class="fas fa-sign-out-alt"></i>
                     </a>
                 </li>

             </ul>

         </div>

         <!-- Right navbar links -->
     </div>
 </nav>
 <!-- /.navbar -->