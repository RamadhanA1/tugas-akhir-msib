<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>[Admin] - SI Compstore</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?=base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?=base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url();?>assets/css/style3.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    
    <a href="<?=base_url();?>" class="d-flex justify-content-center mb-4">
      <h3 class="m-0 fw-bold"><img class="img-fluid me-2" src="<?=base_url();?>/assets/img/logo-1.png" alt="" style="height:2rem">CompStore</h3>
    </a>
    <h5 class="d-flex justify-content-center">Administrator</h5>
    <hr class="dropdown-divider">
    
    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url();?>/admin/home">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Home Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url();?>/admin/akun">
          <i class="bi bi-person"></i>
          <span>Manajemen Akun</span>
        </a>
      </li><!-- End Manajemen Akun Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url();?>/admin/hero">
          <i class="bi bi-card-list"></i>
          <span>Hero/Carousel</span>
        </a>
      </li><!-- End Hero/Carousel Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url();?>admin/products">
          <i class="bi bi-layout-text-window-reverse"></i>
          <span>Tabel Produk</span>
        </a>
      </li><!-- End Tabel Produk Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url();?>admin/pesan">
          <i class="bi bi-envelope"></i>
          <span>Pesan Masuk</span>
        </a>
      </li><!-- End Pesan Masuk Nav -->

      

      <li><hr class="dropdown-divider"></li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?=base_url();?>">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Log Out</span>
        </a>
      </li><!-- End Log Out Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  