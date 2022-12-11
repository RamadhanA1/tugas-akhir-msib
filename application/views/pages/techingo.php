<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style2.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <title>Landing Page</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top nav-custom">
      <div class="container-fluid px-5 py-1">
        <a href="<?=base_url();?>" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 fw-bold text-white">
              <img
                class="img-fluid me-2"
                src="<?=base_url();?>assets/img/logo-1.png"
                alt=""
                style="height: 3rem"
              />CompStore
            </h2>
          </a>
          <div class="h-100 d-lg-inline-flex align-items-center d-none ">
        <a href="<?=base_url();?>login"><button class="btn btn-success ms-2" style="width: 6rem;">Log In</button></a>
        <!-- <a href="<?=base_url();?>pages/"><button class="btn btn-outline-success ms-2" style="width: 6rem;">Sign Up</button></a> -->
      </div>
      </div>
    </nav>

    <!-- carousel -->
    <section class="hero-image mt-5">
      <div class="hero-text">
        <h1 class="text-white fw-bold hero-font">TechInGo</h1>
        <p class="text-white fs-3">
          Kemudahan anda dalam memperbaiki perangkat komputer anda
        </p>
        <div class="row">
          <div class="col-4">
            <a href="#"
              ><img src="<?=base_url();?>assets/img/googlePlay.png" alt="" style="width: 15rem"
            /></a>
          </div>
          <div class="col-4">
            <a href="#"
              ><img src="<?=base_url();?>assets/img/appStore.png" alt="" style="width: 15rem"
            /></a>
          </div>
        </div>
      </div>
    </section>

    <!-- section 1 -->
    <section class="section1-image">
      <div class="section1-text">
        <h1 class="fs-2 fw-bold hero-font judul-section" sty>
          Apa Itu TechInGo?
        </h1>
        <p class="pt-4 fs-6 text-box">
          TechInGo adalah solusi anda apabila perangkat komputer anda
          bermasalah. Cukup dengan panggil kami dengan aplikasi, maka kami akan
          datang kerumah anda untuk memperbaikinya.
          <br />
          <br />Aplikasi ini dibangun untuk memudahkan anda dalam memperbaiki
          perangkat komputer tanpa perlu datang ke toko. Cukup dengan download
          aplikasi TechInGo di Play Store atau App Store dan pesan melalui
          aplikasi, maka kami akan datang ke rumah anda segera.
        </p>
      </div>
    </section>

    <!-- section 2 -->
    <section class="section2-image">
      <div class="section2-text">
        <h1 class="fs-2 fw-bold hero-font judul-section" sty>
          Apa Itu TechInGo?
        </h1>
        <br />
        <div class="row">
          <div class="col-3" style="width: 18rem">
            <div
              class="card1 rounded-5 card p-3 shadow"
              style="width: 16rem; min-height: 15.5rem"
            >
              <img
                style="width: 6rem"
                src="<?=base_url();?>assets/img/iconCepat.png"
                class="card-img-top pb-3"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                  Solusi cepat dan tepat dalam memperbaiki komputer
                </p>
              </div>
            </div>
          </div>
          <div class="col-3" style="width: 18rem">
            <div
              class="card1 rounded-5 card p-3 shadow"
              style="width: 16rem; min-height: 15.5rem"
            >
              <img
                style="width: 6rem"
                src="<?=base_url();?>assets/img/iconMudah.png"
                class="card-img-top pb-3"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">Mudah dan simpel dalam penggunaannya</p>
              </div>
            </div>
          </div>
          <div class="col-3" style="width: 18rem">
            <div
              class="card1 rounded-5 card p-3 shadow"
              style="width: 16rem; min-height: 15.5rem"
            >
              <img
                style="width: 6rem"
                src="<?=base_url();?>assets/img/iconTeknisi.png"
                class="card-img-top pb-3"
                alt="..."
              />
              <div class="card-body">
                <p class="card-text">
                  Didukung teknisi terlatih dan terstandarisasi
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- section 3 -->
    <section class="section3-image">
      <div class="section3-text">
        <h1 class="fs-2 fw-bold hero-font judul-section" sty>Layanan Kami</h1>
        <br />
        <div class="row">
          <div class="col-3" style="width: 18rem">
            <div
              class="card2 rounded-5 card p-3 shadow"
              style="width: 16rem; min-height: 22rem"
            >
              <img
                style="width: 8rem"
                src="<?=base_url();?>assets/img/iconComp.png"
                class="card-img-top p-3"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title subjudul-section">Servis Komputer</h5>
                <p class="card-text">
                  Tambah RAM, Ganti Harddisk, Servis Motherboard, Cleaning CPU,
                  Bluescreen, Install Aplikasi dan Windows
                </p>
              </div>
            </div>
          </div>
          <div class="col-3" style="width: 18rem">
            <div
              class="card2 rounded-5 card p-3 shadow"
              style="width: 16rem; min-height: 22rem"
            >
              <img
                style="width: 8rem"
                src="<?=base_url();?>assets/img/iconComp.png"
                class="card-img-top p-3"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title subjudul-section">Servis Laptop</h5>
                <p class="card-text">
                  Tambah RAM, Cleaning Laptop, Re-pasta Processor, Servis
                  Engsel, Ganti Baterai, Troubleshooting
                </p>
              </div>
            </div>
          </div>
          <div class="col-3" style="width: 18rem">
            <div
              class="card2 rounded-5 card p-3 shadow"
              style="width: 16rem; min-height: 22rem"
            >
              <img
                style="width: 8rem"
                src="<?=base_url();?>assets/img/iconPrinter.png"
                class="card-img-top p-3"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title subjudul-section">Servis Printer</h5>
                <p class="card-text">
                  Custom Printer, Tinta Bocor, Servis Catridge, Servis Scanner
                </p>
              </div>
            </div>
          </div>
          <div class="col-3" style="width: 18rem">
            <div
              class="card2 rounded-5 card p-3 shadow"
              style="width: 16rem; min-height: 22rem"
            >
              <img
                style="width: 8rem"
                src="<?=base_url();?>assets/img/iconWifi.png"
                class="card-img-top p-3"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title subjudul-section">Servis Jaringan</h5>
                <p class="card-text">
                  Pemasangan jaringan LAN, Troubleshooting LAN
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- section 4 -->
    <section class="section4-image">
      <div class="section4-text">
        <h1 class="fs-2 fw-bold hero-font judul-section">Tim Teknisi Kami</h1>
        <br />
        <div class="row">
          <div class="col-3" style="width: 18rem">
            <div
              class="rounded-5 p-3 profile"
              style="width: 16rem; min-height: 15.5rem"
            >
              <img
                style="width: 13rem"
                src="<?=base_url();?>assets/img/orangSample.png"
                class="card-img-top pb-4"
                alt="..."
              />
              <div class="">
                <p class="">M. Achmad Widodo</p>
              </div>
            </div>
          </div>
          <div class="col-3" style="width: 18rem">
            <div
              class="rounded-5 p-3 profile"
              style="width: 16rem; min-height: 15.5rem"
            >
              <img
                style="width: 13rem"
                src="<?=base_url();?>assets/img/orangSample.png"
                class="card-img-top pb-4"
                alt="..."
              />
              <div class="">
                <p class="">M. Achmad Widodo</p>
              </div>
            </div>
          </div>
          <div class="col-3" style="width: 18rem">
            <div
              class="rounded-5 p-3 profile"
              style="width: 16rem; min-height: 15.5rem"
            >
              <img
                style="width: 13rem"
                src="<?=base_url();?>assets/img/orangSample.png"
                class="card-img-top pb-4"
                alt="..."
              />
              <div class="">
                <p class="">M. Achmad Widodo</p>
              </div>
            </div>
          </div>
          <div class="col-3" style="width: 18rem">
            <div
              class="rounded-5 p-3 profile"
              style="width: 16rem; min-height: 15.5rem"
            >
              <img
                style="width: 13rem"
                src="<?=base_url();?>assets/img/orangSample.png"
                class="card-img-top pb-4"
                alt="..."
              />
              <div class="">
                <p class="">M. Achmad Widodo</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <section class="bg-success">
        <div class="container py-5">
          <div class="row">
            <div class="col d-flex align-items-center">
              <h1 class="m-0 fw-bold text-white">
                <img
                  class="img-fluid me-3"
                  src="<?=base_url();?>assets/img/logo-1.png"
                  alt=""
                  style="height: 5rem"
                />CompStore
              </h1>
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

    <!-- credit -->
    <!-- <section class="pt-3" style="background-color: #4a6700">
      <div class="d-flex justify-content-center">
        <p class="text-white">Made with ♥ by Ramadhan Amannu</p>
      </div>
    </section> -->

    <script src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
