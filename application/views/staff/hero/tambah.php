<main id="main" class="main">

    <div class="pagetitle">
        <h1>Hero/Carousel</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Staff</a></li>
                <li class="breadcrumb-item active">Hero</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <!-- Tabel -->
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col">
                <h5 class="card-title">Tambah Hero</h5>
            </div>
            <div class="col-auto d-flex align-items-center">
                <a href="<?=base_url();?>/Staff/Hero"><button class="btn btn-success">< Kembali</button></a>
            </div>
            </div>

            <!-- Tambah hero Form -->
            <form class="row g-3" action="<?php echo site_url('Staff/Hero/upload')?>" method="POST" enctype="multipart/form-data">
                <div class="col-12">
                  <label for="inputFile" class="form-label">Image</label>
                  <input class="form-control" type="file" id="formFile" name="img" required>
                </div>
                <div class="col-12">
                  <label for="inputHeadline" class="form-label">Headline</label>
                  <input type="text" class="form-control" id="inputHeadline" name="headline" required>
                </div>
                <div class="col-12">
                  <label for="inputText" class="form-label">Text</label>
                  <input type="text" class="form-control" id="inputText" name="text" required>
                </div>
                <!-- <div class="col-12">
                  <label for="inputSelect" class="form-label">Status</label>
                  <select class="form-select" aria-label="Default select example" required name="status">
                       <option selected="1">Open this select menu</option> -->
                      <!-- <option value="Diproses">Diproses</option>
                      <option value="Disetujui">Disetujui</option>
                      <option value="Ditolak">Ditolak</option>
                    </select>
                </div> -->
                <div class="text-center">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            

        </div>
    </div>


</main><!-- End #main -->