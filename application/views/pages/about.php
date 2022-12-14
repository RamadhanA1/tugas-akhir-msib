<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
  <link href="<?=base_url();?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&amp;family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"> 

  <title>CompStore - Belanja Disini Aja!</title>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="<?=base_url();?>assets/index.html" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 fw-bold"><img class="img-fluid me-2" src="<?=base_url();?>assets/img/logo-1.png" alt="" style="height:3rem">CompStore</h2>
    </a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav mx-auto pe-4 py-3 py-lg-0">
        <a href="<?=base_url();?>" class="nav-item nav-link">Home</a>
        <a href="<?=base_url();?>pages/about" class="nav-item nav-link active">About Us</a>
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
            <!-- <a href="<?=base_url();?>assets#"><button class="btn btn-outline-success ms-2" style="width: 6rem;">Sign Up</button></a> -->
        </div>
    </div>
  </nav>

  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container text-center py-5">
        <h2 class="display-5 fw-bold text-white  slideInDown mb-4">About Us</h2>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>

<!-- About Start -->
<div class="container-xxl py-5 mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="h-100">
                        <h1 class="display-6 mb-5 fw-bold text-warning">Cari Perangkat PC dan Layanannya? Disini Aja!</h1>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-5">
                                <div class="d-flex align-items-center">
                                    <i class="ri-star-fill me-3 text-success"></i>    
                                <!-- <img class="flex-shrink-0 me-3" src="img/icon/icon-07-primary.png" alt=""> -->
                                    <h5 class="mb-0 text-success">Barang Berkualitas</h5>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="d-flex align-items-center">
                                <i class="ri-star-fill me-3 text-success"></i>     
                                <!-- <img class="flex-shrink-0 me-3" src="img/icon/icon-09-primary.png" alt=""> -->
                                    <h5 class="mb-0 text-success" >Teknisi Berpengalaman</h5>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="border-top mt-4 pt-4">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <i class="ri-phone-fill text-success"></i>
                                        </div>
                                        <h5 class="mb-0 text-success">0821-9845-6XXX</h5>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="d-flex align-items-center">
                                        <div class="me-3">
                                            <i class="ri-mail-fill text-success"></i>
                                        </div>
                                        <h5 class="mb-0 text-success">CompStore.main@gmail.com</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                  <img class="img-fluid" data-wow-delay="0.1s" src="<?=base_url();?>assets/img/teknisi.jpg" style=" animation-delay: 0.1s; animation-name: zoomIn;">
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


  <!-- Footer -->
  <section class="bg-success">
    <div class="container py-5">
      <div class="row">
        <div class="col d-flex align-items-center">
          <h1 class="m-0 fw-bold text-white"><img class="img-fluid me-3" src="<?=base_url();?>assets/img/logo-1.png" alt="" style="height:5rem">CompStore</h1>
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
  <script src="<?=base_url();?>assets/js/bootstrap.js"></script>
  <script src="<?=base_url();?>assets/js/template.js"></script>
</body>

</html>