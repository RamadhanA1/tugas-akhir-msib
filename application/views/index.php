<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url();?>/assets/css/style.css">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&amp;family=Roboto:wght@400;500;700&amp;display=swap"
    rel="stylesheet">

  <title>CompStore - Belanja Disini Aja!</title>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="<?=base_url();?>" class="navbar-brand d-flex align-items-center">
      <h2 class="m-0 fw-bold"><img class="img-fluid me-2" src="<?=base_url();?>/assets/img/logo-1.png" alt="" style="height:3rem">CompStore</h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav mx-auto pe-4 py-3 py-lg-0">
        <a href="<?=base_url();?>" class="nav-item nav-link active">Home</a>
        <a href="<?=base_url();?>pages/about" class="nav-item nav-link">About Us</a>
        <a href="<?=base_url();?>pages/products" class="nav-item nav-link">Products</a>
        <a href="<?=base_url();?>pages/techingo" class="nav-item nav-link">TechInGo</a>
        <!-- <div class="nav-item dropdown">
                <a href="<?=base_url();?>pages/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="<?=base_url();?>feature.html" class="dropdown-item">Features</a>
                    <a href="<?=base_url();?>quote.html" class="dropdown-item">Free Quote</a>
                    <a href="<?=base_url();?>team.html" class="dropdown-item">Our Team</a>
                    <a href="<?=base_url();?>testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="<?=base_url();?>404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> -->
        <a href="<?=base_url();?>pages/contact" class="nav-item nav-link">Contacts</a>
      </div>
      <div class="h-100 d-lg-inline-flex align-items-center d-none ">
        <a href="<?=base_url();?>login"><button class="btn btn-success ms-2" style="width: 6rem;">Log In</button></a>
        <!-- <a href="<?=base_url();?>pages/"><button class="btn btn-outline-success ms-2" style="width: 6rem;">Sign Up</button></a> -->
      </div>
    </div>
  </nav>

  <!-- Hero -->
  <section id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <!-- <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> -->
    <div class="carousel-inner">
      <?php foreach($hero as $key => $rows): ?>
        <div class="carousel-item  <?php echo ($key == 0 ? 'active':'')?>">
        <img src="<?=base_url();?>/assets/img/<?php echo $rows['img']?>" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-start">
          <h2><?php echo $rows['headline']?></h2>
          <p><?php echo $rows['text']?></p>
        </div>
      </div>
      <?php endforeach;?>

      
      
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </section>


  <!-- Categories -->
  <section class=" container my-5 rounded-1 bg-success shadow-sm">
    <h3 class="text-center text-white h-100 py-4 mb-3">Products Categories</h3>
    <div class="row row-cols-1 row-cols-md-5 g-4 bg-light px-4 pt-3 pb-5">
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?=base_url();?>/assets/img/logo-1.png" class="card-img-top my-3" alt="..." style="height: 3rem; object-fit:contain">
          <div class="card-body text-center">
            <h6 class="card-title">Komputer</h6>
            <p class="card-text">Menjual Komputer Baru maupun Bekas</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?=base_url();?>/assets/img/logo-1.png" class="card-img-top my-3" alt="..." style="height: 3rem; object-fit:contain">
          <div class="card-body text-center">
            <h6 class="card-title">Laptop</h6>
            <p class="card-text">Menjual Laptop Baru maupun Bekas</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?=base_url();?>/assets/img/logo-1.png" class="card-img-top my-3" alt="..." style="height: 3rem; object-fit:contain">
          <div class="card-body text-center">
            <h6 class="card-title">TechInGo</h6>
            <p class="card-text">Jasa Perbaikan Komputer, Pemasangan Internet, Dll</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?=base_url();?>/assets/img/logo-1.png" class="card-img-top my-3" alt="..." style="height: 3rem; object-fit:contain">
          <div class="card-body text-center">
            <h6 class="card-title">Hardware</h6>
            <p class="card-text">Monitor, Keyboard, Mouse</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?=base_url();?>/assets/img/logo-1.png" class="card-img-top my-3" alt="..." style="height: 3rem; object-fit:contain">
          <div class="card-body text-center">
            <h6 class="card-title">Software</h6>
            <p class="card-text">Operting System, Antivirus, Dll</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?=base_url();?>/assets/img/logo-1.png" class="card-img-top my-3" alt="..." style="height: 3rem; object-fit:contain">
          <div class="card-body text-center">
            <h6 class="card-title">Aksesoris</h6>
            <p class="card-text">Aksesoris dan Perangkat Tambahan Komputer</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?=base_url();?>/assets/img/logo-1.png" class="card-img-top my-3" alt="..." style="height: 3rem; object-fit:contain">
          <div class="card-body text-center">
            <h6 class="card-title">Komponen</h6>
            <p class="card-text">Komponen Komputer dan Laptop</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?=base_url();?>/assets/img/logo-1.png" class="card-img-top my-3" alt="..." style="height: 3rem; object-fit:contain">
          <div class="card-body text-center">
            <h6 class="card-title">Gaming Gear</h6>
            <p class="card-text">Perlengkapan Penunjang Gamer</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?=base_url();?>/assets/img/logo-1.png" class="card-img-top my-3" alt="..." style="height: 3rem; object-fit:contain">
          <div class="card-body text-center">
            <h6 class="card-title">Media Penyimpanan</h6>
            <p class="card-text">MicroSD, SD Card, HDD, SSD</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100 shadow-sm">
          <img src="<?=base_url();?>/assets/img/logo-1.png" class="card-img-top my-3" alt="..." style="height: 3rem; object-fit:contain">
          <div class="card-body text-center">
            <h6 class="card-title">Network</h6>
            <p class="card-text">Media Penunjang Konektivitas</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Promotion Products -->
  <section class="bg-light h-100 py-3">
    <h3 class="text-center h-100 py-4 mb-3 fw-bold section-title">Hot Promo!</h3>
    <div id="carouselExampleControls" class="carousel slide">
      <div class="carousel-inner container">
        <div class="carousel-item product-slide active">
          <div class="d-block w-100">
            <div class="row row-cols-1 row-cols-md-5 g-4">
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <div class="carousel-item product-slide">
          <div class="d-block w-100">
            <div class="row row-cols-1 row-cols-md-5 g-4">
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <img src="<?=base_url();?>/assets/img/hero-1.jpg" class="card-img-top img-product" alt="...">
                  <div class="card-body">
                    <p class="card-text product-title">Produk 1 - Made In Singapore - Export Import Berkualitas</p>
                    <h5 class="card-title text-success">Rp. 100.000,-</h5>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon shadow-sm rounded-circle bg-secondary" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon shadow-sm rounded-circle bg-secondary" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    <!-- <button class="btn btn-success text-end">More Products >></button> -->
  </section>


  <!-- Footer -->
  <section class="bg-success">
    <div class="container py-5">
      <div class="row">
        <div class="col d-flex align-items-center">
          <h1 class="m-0 fw-bold text-white"><img class="img-fluid me-3" src="<?=base_url();?>/assets/img/logo-1.png" alt=""
              style="height:5rem">CompStore</h1>
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
  <script src="<?=base_url();?>/assets/js/bootstrap.js"></script>
  <script src="<?=base_url();?>/assets/js/template.js"></script>
</body>

</html>