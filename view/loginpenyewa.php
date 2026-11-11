
<!-- Login Pengunjung - Template eShopper -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 justify-content-center">
        <div class="col-lg-5 col-md-8">

            <div class="border mb-5">

                <div class="bg-secondary text-center p-4">
                    <h4 class="text-dark text-uppercase mb-0">
                        Login Pengunjung
                    </h4>
                    <small class="text-muted">
                        Masuk untuk melanjutkan penyewaan mobil
                    </small>
                </div>

                <div class="p-4 p-md-5">

                    <?php if (!empty($psn)) : ?>
                        <div class="alert alert-info">
                            <?= htmlspecialchars($psn) ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('Login_C/CekLogin') ?>"
                        method="POST">

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email"
                                name="email"
                                id="email"
                                class="form-control"
                                placeholder="Masukkan email terdaftar"
                                autocomplete="username"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="pass">Password</label>
                            <input type="password"
                                name="pass"
                                id="pass"
                                class="form-control"
                                placeholder="Masukkan password"
                                autocomplete="current-password"
                                required>
                        </div>

                        <button type="submit"
                            class="btn btn-info btn-block py-2">
                            <i class="fa fa-sign-in-alt mr-2"></i>
                            Login Pengunjung
                        </button>

                    </form>

                    <div class="text-center mt-4">
                        <span class="text-muted">
                            Belum punya akun?
                        </span>

                        <p class="mb-2">
                            Silakan hubungi admin untuk mendaftarkan akun penyewa.
                        </p>

                        <a href="<?= base_url('Shopping/index') ?>"
                            class="text-info">
                            <i class="fa fa-arrow-left mr-1"></i>
                            Kembali ke Beranda
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
