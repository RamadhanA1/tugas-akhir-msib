<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manajemen Akun</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Staff</a></li>
                <li class="breadcrumb-item active">Akun</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <!-- Tabel -->
    <div class="card">
        <div class="card-body">
            <div class="row">
            <div class="col">
                <h5 class="card-title">Akun Terdaftar</h5>
            </div>
            <div class="col-auto d-flex align-items-center">
                <button class="btn btn-success">Tambah Akun</button>
            </div>
            </div>


            <!-- Table with stripped rows -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <!-- <th scope="col">Password</th> -->
                        <th scope="col">Posisi</th>
                        <th scope="col">Edit/Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($akun as $i => $person) : ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= $person->nama ?></td>
                            <td><?= $person->email ?></td>
                            <!-- <td style="text-overflow:clip"><?= $person->password ?></td> -->
                            <td><?= $person->role_name ?></td>
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