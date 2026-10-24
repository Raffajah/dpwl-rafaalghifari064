<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">ラファ - Edit Data Mobil</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Admin_C/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?= base_url('Mobil_C/index') ?>">Data Mobil</a>
                        </li>
                        <li class="breadcrumb-item active">Edit Mobil</li>
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
                            <h3 class="card-title">Form Edit Data Mobil</h3>
                        </div>

                        <form action="<?= base_url('Mobil_C/update_mobil/' . $datamobil['no_plat']) ?>"
                              method="post"
                              enctype="multipart/form-data">

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="no_plat">Nomor Plat</label>
                                    <input type="text" name="no_plat"
                                           id="no_plat" class="form-control"
                                           value="<?= htmlspecialchars($datamobil['no_plat']) ?>"
                                           readonly>
                                </div>

                                <div class="form-group">
                                    <label for="nm_mobil">Nama Mobil</label>
                                    <input type="text" name="nm_mobil"
                                           id="nm_mobil" class="form-control"
                                           value="<?= htmlspecialchars($datamobil['nm_mobil']) ?>"
                                           required>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nkursi">Jumlah Kursi</label>
                                            <input type="number" name="nkursi"
                                                   id="nkursi" class="form-control"
                                                   value="<?= htmlspecialchars($datamobil['nkursi']) ?>"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nbagasi">Jumlah Bagasi</label>
                                            <input type="number" name="nbagasi"
                                                   id="nbagasi" class="form-control"
                                                   value="<?= htmlspecialchars($datamobil['nbagasi']) ?>"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jns_mobil">Jenis Mobil</label>
                                            <input type="text" name="jns_mobil"
                                                   id="jns_mobil" class="form-control"
                                                   value="<?= htmlspecialchars($datamobil['jns_mobil']) ?>"
                                                   required>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="transmisi">Transmisi</label>
                                            <input type="text" name="transmisi"
                                                   id="transmisi" class="form-control"
                                                   value="<?= htmlspecialchars($datamobil['transmisi']) ?>"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="thn_buat">Tahun Pembuatan</label>
                                    <input type="number" name="thn_buat"
                                           id="thn_buat" class="form-control"
                                           value="<?= htmlspecialchars($datamobil['thn_buat']) ?>"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label for="ft_depan">Foto Depan Mobil</label><br>

                                    <?php if (!empty($datamobil['ft_depan'])): ?>
                                        <img src="<?= base_url('img/' . $datamobil['ft_depan']) ?>"
                                             alt="Foto depan mobil"
                                             style="width: 180px; height: auto; margin-bottom: 10px;">
                                    <?php endif; ?>

                                    <input type="file" name="ft_depan"
                                           id="ft_depan" class="form-control"
                                           accept="image/jpeg,image/png">
                                    <small class="text-muted">
                                        Kosongkan jika tidak ingin mengganti foto.
                                    </small>
                                </div>

                                <div class="form-group">
                                    <label for="ft_blkng">Foto Belakang Mobil</label><br>

                                    <?php if (!empty($datamobil['ft_blkng'])): ?>
                                        <img src="<?= base_url('img/' . $datamobil['ft_blkng']) ?>"
                                             alt="Foto belakang mobil"
                                             style="width: 180px; height: auto; margin-bottom: 10px;">
                                    <?php endif; ?>

                                    <input type="file" name="ft_blkng"
                                           id="ft_blkng" class="form-control"
                                           accept="image/jpeg,image/png">
                                    <small class="text-muted">
                                        Kosongkan jika tidak ingin mengganti foto.
                                    </small>
                                </div>

                                <div class="form-group">
                                    <label for="ft_interior">Foto Interior Mobil</label><br>

                                    <?php if (!empty($datamobil['ft_interior'])): ?>
                                        <img src="<?= base_url('img/' . $datamobil['ft_interior']) ?>"
                                             alt="Foto interior mobil"
                                             style="width: 180px; height: auto; margin-bottom: 10px;">
                                    <?php endif; ?>

                                    <input type="file" name="ft_interior"
                                           id="ft_interior" class="form-control"
                                           accept="image/jpeg,image/png">
                                    <small class="text-muted">
                                        Kosongkan jika tidak ingin mengganti foto.
                                    </small>
                                </div>

                                <div class="form-group">
                                    <label for="hrg_hari">Biaya Sewa Per Hari (Rp)</label>
                                    <input type="number" name="hrg_hari"
                                           id="hrg_hari" class="form-control"
                                           value="<?= htmlspecialchars($datamobil['hrg_hari']) ?>"
                                           required>
                                </div>

                                <div class="form-group">
                                    <label for="cttn_unit">Catatan Unit</label>
                                    <textarea name="cttn_unit" id="cttn_unit"
                                              class="form-control" rows="3"
                                              placeholder="Masukkan catatan unit"><?= htmlspecialchars($datamobil['cttn_unit']) ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="status_unit">Status Unit</label>
                                    <input type="text" name="status_unit"
                                           id="status_unit" class="form-control"
                                           value="<?= htmlspecialchars($datamobil['status_unit']) ?>"
                                           required>
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Update
                                </button>

                                <a href="<?= base_url('Mobil_C/index') ?>"
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