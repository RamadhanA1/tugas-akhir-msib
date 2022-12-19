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
                <h5 class="card-title">Ubah Produk</h5>
            </div>
            <div class="col-auto d-flex align-items-center">
                <a href="<?=base_url();?>/staff/Products"><button class="btn btn-success">< Kembali</button></a>
            </div>
            </div>

            <!-- Tambah hero Form -->
            <form class="row g-3" action="<?php echo site_url('staff/Products/simpan')?>" method="POST" enctype="multipart/form-data">
                <div class="col-12">
                  <input class="form-control" type="hidden" name="id" value="<?= $products['id']?>">
                  <img src="<?= base_url();?>/assets/img/<?= $products['img'] ?>" style="width: 200px;">
                </div>
                <div class="col-12">
                  
                  <label for="inputFile" class="form-label">Image</label>
                  <input class="form-control" type="file" id="formFile" name="img" >
                </div>
                <div class="col-12">
                  <label for="inputKategori" class="form-label">Kategori</label>
                  <select class="form-select" aria-label="Default select example" required name="kategori_id"  value="<?= $products['kategori_id']?>">
                      <option selected="">Piih kategori barang</option>
                      <option value="1" <?php if ($products['kategori_id']=='1') {echo 'selected';};?>>Komputer</option>
                      <option value="2" <?php if ($products['kategori_id']=='2') {echo 'selected';};?>>Laptop</option>
                      <option value="3" <?php if ($products['kategori_id']=='3') {echo 'selected';};?>>TechInGo</option>
                      <option value="4" <?php if ($products['kategori_id']=='4') {echo 'selected';};?>>Hardware</option>
                      <option value="5" <?php if ($products['kategori_id']=='5') {echo 'selected';};?>>Software</option>
                      <option value="6" <?php if ($products['kategori_id']=='6') {echo 'selected';};?>>Aksesoris</option>
                      <option value="7" <?php if ($products['kategori_id']=='7') {echo 'selected';};?>>Komponen</option>
                      <option value="8" <?php if ($products['kategori_id']=='8') {echo 'selected';};?>>Gaming Gear</option>
                      <option value="9" <?php if ($products['kategori_id']=='9') {echo 'selected';};?>>Media Penyimpanan</option>
                      <option value="10" <?php if ($products['kategori_id']=='10') {echo 'selected';};?>>Network</option>
                      <!-- <option value="TechInGo">TechInGo</option> -->
                    </select>
                </div>
                <div class="col-12">
                  <label for="inputNama" class="form-label">Nama Barang</label>
                  <input type="text" class="form-control" id="inputNama" name="nama" required value="<?= $products['nama']?>">
                </div>
                <div class="col-12">
                  <label for="inputHarga" class="form-label">Harga Barang</label>
                  <input type="number" class="form-control" id="inputHarga" name="harga" required value="<?= $products['harga']?>">
                </div>
                <div class="col-12">
                  <label for="inputDeskripsi" class="form-label">Deskripsi Barang</label>
                  <input type="text" class="form-control" id="inputDeskripsi" name="deskripsi" required value="<?= $products['deskripsi']?>">
                </div>
                <div class="col-12">
                  <label for="inputLink" class="form-label">Link Barang</label>
                  <input type="text" class="form-control" id="inputLink" name="link" required value="<?= $products['link']?>">
                </div>
                <!-- <div class="col-12">
                  <label for="inputSelect" class="form-label">Status</label>
                  <select class="form-select" aria-label="Default select example" required name="status"  value="<?= $products['status']?>"> -->
                      <!-- <option selected="1">Open this select menu</option> -->
                      <!-- <option value="Diproses" <?php if ($products['status']=='Diproses') {echo 'selected';};?>>Diproses</option>
                      <option value="Disetujui" <?php if ($products['status']=='Disetujui') {echo 'selected';};?>>Disetujui</option>
                      <option value="Ditolak" <?php if ($products['status']=='Ditolak') {echo 'selected';};?>>Ditolak</option>
                    </select>
                </div> -->
                <div class="text-center">
                  <button type="submit" class="btn btn-success" onclick="return confirm ('Simpan Perubahan?');">Simpan</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            

        </div>
    </div>


</main><!-- End #main -->