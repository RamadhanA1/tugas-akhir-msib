<main id="main" class="main">

    <div class="pagetitle">
        <h1>Hero/Carousel</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Hero</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <!-- Tabel -->
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col">
                <h5 class="card-title">Hero Status</h5>
            </div>
            <div class="col-auto d-flex align-items-center">
                <a href="<?=base_url();?>admin/Hero/tambah"><button class="btn btn-success">Tambah Hero</button></a>
            </div>
            </div>


            <!-- Table with stripped rows -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Headline</th>
                        <th scope="col">Text</th>
                        <!-- <th scope="col">Password</th> -->
                        <th scope="col">Status</th>
                        <th scope="col">Edit/Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hero_unit as $i => $hero) : ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><img src="<?= base_url();?>/assets/img/<?= $hero->img ?>" style="width: 200px;"></td>
                            <td><?= $hero->headline ?></td>
                            <td><?= $hero->text ?></td>
                            <td><?= $hero->status ?></td>
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