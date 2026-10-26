
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="<?= base_url('Mobil_C/index') ?>" class="brand-link">
        <img src="<?= base_url('img/mik.jpg') ?>"
             alt="Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .95">

        <span class="brand-text font-weight-bold">
            ラファ <small style="color:#00d4ff;">MVC</small>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex align-items-center">
            <div class="image">
                <img src="<?= base_url('img/icon.jpg') ?>"
                     class="img-circle elevation-2"
                     alt="User Image"
                     style="width:35px;height:35px;object-fit:cover;">
            </div>

            <div class="info">
                <a href="#" class="d-block">
                    <i class="fas fa-circle text-success mr-1"
                       style="font-size:8px;"></i>
                    <?= htmlspecialchars($nm_user ?? 'User', ENT_QUOTES, 'UTF-8') ?>
                </a>
                <small style="color:#8fa8c9;">Administrator</small>
            </div>
        </div>

        <!-- Sidebar Search -->
        <div class="form-inline mb-3">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar"
                       type="search"
                       placeholder="Cari menu..."
                       aria-label="Cari menu">

                <div class="input-group-append">
                    <button class="btn btn-sidebar" type="button">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Section Label -->
        <div class="nav-header" style="color:#6f88a9;">
            MENU UTAMA
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                <!-- Dashboard / Master Data -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-database"
                           style="color:#00d4ff;"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Mobil_C/index') ?>"
                               class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Mobil</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Penyewa</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Transaksi -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-exchange-alt"
                           style="color:#00d4ff;"></i>
                        <p>
                            Transaksi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Sewa</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pembayaran</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Kembali</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Denda</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Laporan -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-bar"
                           style="color:#00d4ff;"></i>
                        <p>
                            Laporan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Laporan Kembali</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Pengaturan / Link -->
                <li class="nav-header" style="color:#6f88a9;">
                    LAINNYA
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"
                           style="color:#00d4ff;"></i>
                        <p>
                            Simple Link
                            <span class="right badge"
                                  style="background:#00a8cc;color:white;">
                                New
                            </span>
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->

        <!-- Sidebar Footer -->
        <div class="mt-4 mb-3 px-3"
             style="border-top:1px solid rgba(255,255,255,.10);padding-top:15px;">
            <small style="color:#8298b7;">
                <i class="fas fa-code mr-1" style="color:#00d4ff;"></i>
                ラファ MVC System
            </small>
        </div>

    </div>
    <!-- /.sidebar -->
</aside>

<style>
    /* Sidebar dark glass */
    .main-sidebar {
        background: rgba(8, 13, 30, 0.96) !important;
        border-right: 1px solid rgba(0, 212, 255, 0.15);
    }

    .brand-link {
        border-bottom: 1px solid rgba(255,255,255,.10) !important;
        color: #fff !important;
        background: rgba(0, 212, 255, 0.035);
    }

    .brand-image {
        width: 33px;
        height: 33px;
        object-fit: cover;
    }

    .user-panel {
        border-bottom: 1px solid rgba(255,255,255,.10) !important;
    }

    .user-panel .info a {
        color: #f1f5ff !important;
        font-size: 13px;
        font-weight: 600;
    }

    .form-control-sidebar {
        background: rgba(255,255,255,.06) !important;
        border: 1px solid rgba(255,255,255,.10) !important;
        color: #fff !important;
    }

    .form-control-sidebar::placeholder {
        color: #8298b7 !important;
    }

    .btn-sidebar {
        background: rgba(0,212,255,.12) !important;
        color: #00d4ff !important;
        border: 1px solid rgba(255,255,255,.10) !important;
    }

    .nav-sidebar .nav-link {
        color: #b9c7dc !important;
        border-radius: 7px;
        margin-bottom: 3px;
        transition: background .2s ease, color .2s ease;
    }

    .nav-sidebar .nav-link:hover {
        background: rgba(0,212,255,.09) !important;
        color: #fff !important;
    }

    .nav-sidebar .nav-link.active {
        background: linear-gradient(
            90deg,
            rgba(0,212,255,.22),
            rgba(0,212,255,.06)
        ) !important;
        color: #fff !important;
        border-left: 3px solid #00d4ff;
    }

    .nav-sidebar .nav-treeview {
        padding-left: 8px;
    }

    .nav-sidebar .nav-treeview .nav-link {
        font-size: 13px;
    }

    .nav-sidebar .nav-treeview .nav-icon {
        font-size: 8px !important;
        color: #00d4ff;
    }

    .nav-sidebar .right {
        color: #8298b7;
    }

    .nav-header {
        font-size: 10px !important;
        font-weight: 700;
        letter-spacing: 1.5px;
        padding: 10px 12px 7px !important;
    }
</style>
