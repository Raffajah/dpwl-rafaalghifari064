
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page Novi - Entri Data Penyewa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Admin_C/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Penyewa_C064/index') ?>">Data Penyewa</a>
                        </li>
                        <li class="breadcrumb-item active">Entri Penyewa</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Entri Data Penyewa</h3>
                        </div>

                        <form action="<?= base_url('Penyewa_C064/UpdatePenyewa') ?>"
                            method="post"
                            enctype="multipart/form-data">

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="user_plg064">Username</label>
                                    <input type="text" name="user_plg064"
                                        id="user_plg064" class="form-control"
                                        placeholder="Masukkan username"
                                        value="<?= $penyewa['user_plg064'] ?>" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="Sandi064">Password</label>
                                    <input type="password" name="Sandi064"
                                        id="Sandi064" class="form-control"
                                        placeholder="Masukkan password"
                                        value="<?= $penyewa['Sandi064'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="Nik064">NIK</label>
                                    <input type="text" name="Nik064"
                                        id="Nik064" class="form-control"
                                        placeholder="Masukkan NIK"
                                        value="<?= $penyewa['Nik064'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="nm_lngkp064">Nama Lengkap</label>
                                    <input type="text" name="nm_lngkp064"
                                        id="nm_lngkp064" class="form-control"
                                        placeholder="Masukkan nama lengkap"
                                        value="<?= $penyewa['nm_lngkp064'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="no_hp064">Nomor HP</label>
                                    <input type="text" name="no_hp064"
                                        id="no_hp064" class="form-control"
                                        placeholder="Masukkan nomor HP"
                                        value="<?= $penyewa['no_hp064'] ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="almt_lngkp064">Alamat Lengkap</label>
                                    <textarea name="almt_lngkp064"
                                        id="almt_lngkp064"
                                        class="form-control" rows="3"
                                        placeholder="Masukkan alamat lengkap"
                                        required><?= $penyewa['almt_lngkp064'] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="ft_ktp">Foto KTP</label>
                                    <input type="file" name="ft_ktp"
                                        id="ft_ktp" class="form-control"
                                        accept="image/jpeg,image/png">
                                    <input type="hidden" name="ft_ktp_asli"
                                        value="<?= $penyewa['ft_ktp'] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="ft_sim_a">Foto SIM A</label>
                                    <input type="file" name="ft_sim_a"
                                        id="ft_sim_a" class="form-control"
                                        accept="image/jpeg,image/png">
                                    <input type="hidden" name="ft_sim_a_asli"
                                        value="<?= $penyewa['ft_sim_a'] ?>">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Simpan
                                </button>

                                <a href="<?= base_url('Penyewa_C064/index') ?>"
                                    class="btn btn-secondary">
                                    Kembali
                                </a>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
