<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/style2.css" />
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;800&amp;family=Roboto:wght@400;500;700&amp;display=swap"
    rel="stylesheet"/>
    <title>Log In</title>
  </head>
  <body class="">
    <!-- image illustration -->
    <div class=" login-image shadow" style="z-index: 2; width: 60vw; height: 100vh; text-align: right; position:fixed; right: 0;">
        <div class=""></div>    
    </div>

    
    <!-- login form -->
    <section class="container-fluid p-5">
      <div class="row">
        <div class="col-4 ">
        <a href="<?=base_url();?>" class="">
            <h1 class="m-0 fw-bold text-success text-center">
              <img
                class="img-fluid me-2"
                src="<?=base_url();?>assets/img/logo-1.png"
                alt=""
                style="height: 3rem"
                
              />CompStore
            </h1>
          </a>
          <!-- <h1 class="text-success text-center m-0 fw-bold"><img class="img-fluid me-2" src="<?=base_url();?>/assets/img/logo-1.png" alt="" style="height:3rem">CompStore</h1> -->
          <h2 class="py-4 text-center fw-bold">Log In</h2>

          <?php if (isset($_SESSION['error'])) : ?>
					<div class="alert alert-light-danger color-danger">
						<i class="bi bi-exclamation-circle"></i>
						<?= $_SESSION['error'] ?>
					</div>
				<?php endif; ?>

				<?php if (isset($_SESSION['success'])) : ?>
					<div class="alert alert-success">
						<i class="bi bi-check-circle"></i>
						<?= $_SESSION['success'] ?>
					</div>
				<?php endif; ?>

          <form class="mt-2 " action="<?= site_url('Auth/prosesLogin') ?>" method="POST">
            <div class="mb-3 ">
              <label for="exampleInputEmail1" class="form-label"
                >Email</label
              >
              <input
                type="email"
                class="form-control rounded-4 shadow-sm py-2"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                placeholder="Type email here"
              />
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Password</label
              >
              <input
                type="password"
                class="form-control rounded-4 shadow-sm py-2"
                id="exampleInputPassword1"
                placeholder="Type password here"
              />
            </div>
            <div class="row">
              <div class="mb-3 col">
                <input
                  type="checkbox"
                  class="form-check-input"
                  id="exampleCheck1"
                />
                <label class="form-check-label" for="exampleCheck1"
                  >Remember Me</label
                >
              </div>
              <div class="col-auto">
                <span><a href="<?=base_url();?>/assets/#">Forgot Password?</a></span>
              </div>
            </div>

            <!-- <a href="<?=base_url();?>admin/sidebar"><button class="btn btn-success p-2" style="width: 10rem;">Log In</button></a> -->
            <a href="<?=base_url();?>admin/sidebar" class="d-flex justify-content-center mt-3"><button class="btn btn-success p-2" style="width: 10rem;">Log In</button></a>
            <!-- <a href="<?=base_url();?>/assets/#"><button class="btn btn-outline-success me-2" style="width: 6rem;">Sign Up</button></a> -->
            <!-- <div class="row">
              <div class="col-auto d-flex justify-items-end">
                <button type="submit" class="btn-nav rounded-5 py-2 shadow">
                  Log In
                </button>
              </div>
              <div class="col-auto">
                <button
                  type="submit"
                  class="btn-nav-outline rounded-5 py-2 shadow"
                >
                  Sign Up
                </button>
              </div>
            </div> -->
          </form>
        </div>
        
      </div>
    </section>

    <!-- credit -->
    <footer
      class="fixed-bottom pt-3 text-white container-fluid"
      style="background-color: green; z-index: 2;"
    >
      <p class="ps-5">© 2022. CompStore</p>
    </footer>

    <script src="<?=base_url();?>js/bootstrap.js"></script>
  </body>
</html>
