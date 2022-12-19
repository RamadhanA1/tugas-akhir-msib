<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tabel Produk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Staff</a></li>
                <li class="breadcrumb-item active">Products</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <!-- Tabel -->
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col">
                <h5 class="card-title">Tambah Produk</h5>
            </div>
            <div class="col-auto d-flex align-items-center">
                <a href="<?=base_url();?>/staff/Products"><button class="btn btn-success">< Kembali</button></a>
            </div>
            </div>

            <!-- Tambah hero Form -->
            <form class="row g-3" action="<?php echo site_url('staff/Products/upload')?>" method="POST" enctype="multipart/form-data">
                <div class="col-12">
                  <label for="inputFile" class="form-label">Image</label>
                  <input class="form-control" type="file" id="formFile" name="img" required>
                </div>
                <div class="col-12">
                  <label for="inputKategori" class="form-label">Kategori</label>
                  <select class="form-select" aria-label="Default select example" required name="kategori_id">
                      <option selected="">Piih kategori barang</option>
                      <option value="1">Komputer</option>
                      <option value="2">Laptop</option>
                      <option value="3">TechInGo</option>
                      <option value="4">Hardware</option>
                      <option value="5">Software</option>
                      <option value="6">Aksesoris</option>
                      <option value="7">Komponen</option>
                      <option value="8">Gaming Gear</option>
                      <option value="9">Media Penyimpanan</option>
                      <option value="10">Network</option>
                      <!-- <option value="TechInGo">TechInGo</option> -->
                    </select>
                </div>
                <div class="col-12">
                  <label for="inputNama" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control" id="inputNama" name="nama" required>
                </div>
                <div class="col-12">
                  <label for="inputHarga" class="form-label">Harga Barang</label>
                  <input type="number" class="form-control" id="inputHarga" name="harga" required>
                </div>
                <div class="col-12">
                  <label for="inputDeskripsi" class="form-label">Deskripsi Barang</label>
                  <input type="text" class="form-control" id="inputDeskripsi" name="deskripsi" required>
                </div>
                <div class="col-12">
                  <label for="inputLink" class="form-label">Link Barang</label>
                  <input type="text" class="form-control" id="inputLink" name="link" required>
                </div>
                <!-- <div class="col-12">
                  <label for="inputSelect" class="form-label">Status</label>
                  <select class="form-select" aria-label="Default select example" required name="status"> -->
                      <!-- <option selected="1">Open this select menu</option> -->
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