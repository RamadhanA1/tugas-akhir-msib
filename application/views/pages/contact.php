<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&amp;family=Roboto:wght@400;500;700&amp;display=swap"
      rel="stylesheet"
    />

    <title>CompStore - Belanja Disini Aja!</title>
  </head>

  <body>
    <!-- NAVBAR -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5"
    >
      <a href="/index.html" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 fw-bold">
          <img
            class="img-fluid me-2"
            src="<?=base_url();?>assets/img/logo-1.png"
            alt=""
            style="height: 3rem"
          />CompStore
        </h2>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto pe-4 py-3 py-lg-0">
          <a href="<?=base_url();?>" class="nav-item nav-link">Home</a>
          <a href="<?=base_url();?>/pages/about" class="nav-item nav-link">About Us</a>
          <a href="<?=base_url();?>/pages/product" class="nav-item nav-link">Products</a>
          <a href="<?=base_url();?>/pages/techingo" class="nav-item nav-link">TechInGo</a>
          <!-- <div class="nav-item dropdown">
                <a href="<?=base_url();?>" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="quote.html" class="dropdown-item">Free Quote</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> -->
          <a href="<?=base_url();?>" class="nav-item nav-link active">Contacts</a>
        </div>
        <div class="h-100 d-lg-inline-flex align-items-center d-none">
          <a href="<?=base_url();?>login"
            ><button class="btn btn-success ms-2" style="width: 6rem">
              Log In
            </button></a
          >
          <!-- <a href="<?=base_url();?>"
            ><button class="btn btn-outline-success ms-2" style="width: 6rem">
              Sign Up
            </button></a
          > -->
        </div>
      </div>
    </nav>

    <div
      class="container-fluid page-header py-5 wow fadeIn"
      data-wow-delay="0.1s"
      style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn"
    >
      <div class="container text-center py-5">
        <h2 class="display-5 fw-bold text-white slideInDown mb-4">Contacts</h2>
        <nav aria-label="breadcrumb animated slideInDown">
          <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="<?=base_url();?>">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contacts</li>
          </ol>
        </nav>
      </div>
    </div>

    

    <!-- Message and Maps -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div
            class="col-lg-6 wow fadeIn"
            data-wow-delay="0.1s"
            style="
              visibility: visible;
              animation-delay: 0.1s;
              animation-name: fadeIn;
            "
          >
            <h1 class="display-6 mb-5">
              Ada yang Ingin Ditanyakan Kepada Kami? Silahkan Hubungi Kami
            </h1>
            <!-- <p class="mb-4">
              The contact form is currently inactive. Get a functional and
              working contact form with Ajax &amp; PHP in a few minutes. Just
              copy and paste the files, add a little code and you're done.
              <a href="https://htmlcodex.com/contact-form">Download Now</a>.
            </p> -->
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                    />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Your Email"
                    />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="subject"
                      placeholder="Subject"
                    />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      placeholder="Leave a message here"
                      id="message"
                      style="height: 100px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-success rounded-3 py-3 px-5" type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div
            class="col-lg-6 wow fadeIn"
            data-wow-delay="0.5s"
            style="
              min-height: 450px;
              visibility: visible;
              animation-delay: 0.5s;
              animation-name: fadeIn;
            "
          >
            <div class="position-relative overflow-hidden h-100">
              <iframe
                class="position-relative w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0"
                style="min-height: 450px; border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- More Contact -->
    <section class="contact spad bg-light py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Telepon</h4>
                        <p>0821-9845-6XXX</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Alamat</h4>
                        <p>Jl. Bungur Raya Indah, No.69, Kota Waringin,
                            Prov. Sumatera Tenggara</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Jam Kerja</h4>
                        <p>08.00 s/d 19.00 WIB</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p>CompStore.main@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
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
    <!-- <h1>Hello, world!</h1> -->

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="<?=base_url();?>assets/js/bootstrap.js"></script>
    <script src="<?=base_url();?>assets/js/template.js"></script>
  </body>
</html>
