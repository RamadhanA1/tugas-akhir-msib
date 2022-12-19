<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet">

  <title>CompStore - Belanja Disini Aja!</title>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="<?= base_url(); ?>assets/index.html" class="navbar-brand d-flex align-items-center">
      <h2 class="m-0 fw-bold"><img class="img-fluid me-2" src="<?= base_url(); ?>assets/img/logo-1.png" alt="" style="height:3rem">CompStore</h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav mx-auto pe-4 py-3 py-lg-0">
        <a href="<?= base_url(); ?>" class="nav-item nav-link">Home</a>
        <a href="<?= base_url(); ?>pages/about" class="nav-item nav-link ">About Us</a>
        <a href="<?= base_url(); ?>pages/products" class="nav-item nav-link active">Products</a>
        <a href="<?= base_url(); ?>pages/techingo" class="nav-item nav-link">TechInGo</a>
        <!-- <div class="nav-item dropdown">
                <a href="<?= base_url(); ?>pages/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="<?= base_url(); ?>feature.html" class="dropdown-item">Features</a>
                    <a href="<?= base_url(); ?>quote.html" class="dropdown-item">Free Quote</a>
                    <a href="<?= base_url(); ?>team.html" class="dropdown-item">Our Team</a>
                    <a href="<?= base_url(); ?>testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="<?= base_url(); ?>404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> -->
        <a href="<?= base_url(); ?>pages/contact" class="nav-item nav-link">Contacts</a>
      </div>
      <div class="h-100 d-lg-inline-flex align-items-center d-none ">
        <a href="<?= base_url(); ?>login"><button class="btn btn-success ms-2" style="width: 6rem;">Log In</button></a>
        <!-- <a href="<?= base_url(); ?>assets#"><button class="btn btn-outline-success ms-2" style="width: 6rem;">Sign Up</button></a> -->
      </div>
    </div>
  </nav>

  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container text-center py-5">
      <h2 class="display-5 fw-bold text-white  slideInDown mb-4">Products</h2>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Pages</a></li>
          <li class="breadcrumb-item active" aria-current="page">Products</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Content -->
  <section class="container-fluid my-4 row">
    <div class="col-3 card-body">
      <h4 class="d-flex justify-content-center mb-3">Kategori Barang</h4>
      <div class="list-group">
        <a href="<?= base_url('pages/Products'); ?>" class="list-group-item list-group-item-action">Semua Kategori</a>
        <?php foreach($kategori as $opsi):?>
              <?php if ($opsi['id']!=3):?> 
              <a href="<?=base_url();?>pages/Kategori/p/<?= $opsi['id']?>" class="list-group-item list-group-item-action"><?php echo $opsi['name']?></a>
              <?php endif;?>
            <?php endforeach?>
      </div>
    </div>
    <div class="col-9">
      <div class="row row-cols-1 row-cols-md-5 g-4">
        <?php foreach ($products as $rows) : ?>
          <div class="col">
            <a class="card h-100 list-group-item-action" href="<?php echo $rows['link'] ?>" >
              <img src="<?= base_url(); ?>/assets/img/<?php echo $rows['img'] ?>" class="card-img-top img-product" alt="...">
              <div class="card-body">
                <p class="card-text product-title"><?php echo $rows['nama'] ?></p>
                <h6 class="card-title text-success">Rp. <?php echo $rows['harga'] ?></h6>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <section class="bg-success">
    <div class="container py-5">
      <div class="row">
        <div class="col d-flex align-items-center">
          <h1 class="m-0 fw-bold text-white"><img class="img-fluid me-3" src="<?= base_url(); ?>assets/img/logo-1.png" alt="" style="height:5rem">CompStore</h1>
        </div>
        <div class="col-auto d-flex align-items-center">
          <p class="text-white">
            <b>Main Office: </b><br />
            Jl. Bungur Raya Indah, No.69 <br />
            Kel. Bukit Kali, Kec. Pasir Angin, Kota Waringin <br />
            Prov. Sumatera Tenggara. 153920. <br />
            <br />
            <b>Kontak: </b><br />
            0821-9845-6XXX <br />
            CompStore.main@gmail.com
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- <h1>Hello, world!</h1> -->





  <!-- Optional JavaScript; choose one of the two! -->
  <script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
  <script src="<?= base_url(); ?>assets/js/template.js"></script>
</body>

</html>