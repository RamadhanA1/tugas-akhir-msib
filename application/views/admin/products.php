<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tabel Produk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Admin</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <!-- <div class="d-flex align-items-center" style="height: 70vh; width:100%;">
      <div>
        <h1>Selamat Datang 'Admin'</h1>
        <h2>Di Sistem Informasi CompStore</h2>
      </div>
      
      
    </div> -->

    <!-- Tabel -->
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col">
                <h5 class="card-title">List Produk</h5>
            </div>
            <div class="col-auto d-flex align-items-center">
                <a href="<?=base_url();?>admin/Products/tambah"><button class="btn btn-success">Tambah Produk</button></a>
            </div>
            </div>


            <!-- Table with stripped rows -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit/Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $i => $product) : ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><img src="<?= base_url();?>/assets/img/<?= $product->img ?>" style="width: 200px;"></td>
                            <td><?= $product->kategori_name ?></td>
                            <td><?= $product->nama ?></td>
                            <td>Rp. <?= $product->harga ?></td>
                            <td><?= $product->status ?></td>
                            <!-- <td>
							<button class="btn btn-primary btn-sm">Detail</button>
						</td> -->
                            <td class="">
                                <button class="btn-warning btn me-2">Edit</button>
                                <button class="btn-danger btn">Hapus</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>
    

  </main><!-- End #main -->