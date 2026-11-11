
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA PENYEWA</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Admin_C/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Data Penyewa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <a href="<?= base_url('Penyewa_C/create_penyewa') ?>"
                                class="btn btn-primary mb-3">
                                <i class="fas fa-plus"></i> Tambah Data
                            </a>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>User Pelanggan</th>
                                            <th>Sandi</th>
                                            <th>NIK</th>
                                            <th>Nama Lengkap</th>
                                            <th>No. HP</th>
                                            <th>Alamat Lengkap</th>
                                            <th>Foto KTP</th>
                                            <th>Foto SIM A</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($datapenyewa as $m) : ?>
                                            <tr>
                                                <td><?= htmlspecialchars($m['user_plg']) ?></td>

                                                <td><?= htmlspecialchars($m['sandi']) ?></td>

                                                <td><?= htmlspecialchars($m['nik']) ?></td>

                                                <td><?= htmlspecialchars($m['nm_lngkp']) ?></td>

                                                <td><?= htmlspecialchars($m['no_hp']) ?></td>

                                                <td><?= htmlspecialchars($m['almt_lngkp']) ?></td>

                                                <!-- Foto KTP -->
                                                <td>
                                                    <?php if (!empty($m['ft_ktp'])) : ?>
                                                        <img src="<?= base_url('img/' . $m['ft_ktp']) ?>"
                                                            width="100"
                                                            height="60"
                                                            style="object-fit: cover;"
                                                            alt="Foto KTP">
                                                    <?php else : ?>
                                                        Tidak ada foto
                                                    <?php endif; ?>
                                                </td>

                                                <!-- Foto SIM A -->
                                                <td>
                                                    <?php if (!empty($m['ft_sim_a'])) : ?>
                                                        <img src="<?= base_url('img/' . $m['ft_sim_a']) ?>"
                                                            width="100"
                                                            height="60"
                                                            style="object-fit: cover;"
                                                            alt="Foto SIM A">
                                                    <?php else : ?>
                                                        Tidak ada foto
                                                    <?php endif; ?>
                                                </td>

                                                <!-- Aksi -->
                                                <td>
                                                    <a href="<?= base_url('Penyewa_C/edit/' . $m['user_plg']) ?>"
                                                        class="btn btn-warning btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>

                                                    <a href="<?= base_url('Penyewa_C/hapus/' . $m['user_plg']) ?>"
                                                        class="btn btn-danger btn-sm"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus penyewa ini?')">
                                                        <i class="fas fa-trash"></i> Hapus
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                        <?php if (empty($datapenyewa)) : ?>
                                            <tr>
                                                <td colspan="9" class="text-center">
                                                    Belum ada data penyewa.
                                                </td>
                                            </tr>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->
