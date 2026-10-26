
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ラファ - Admin Panel</title>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css') ?>">

    <!-- iCheck Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="<?= base_url('AdminLTE-3.2.0/dist/css/adminlte.min.css') ?>">

    <style>
        html,
        body {
            min-height: 100%;
            margin: 0;
        }

        body {
            background: #080d1a;
        }

        /* =========================
           VIDEO BACKGROUND
        ========================= */
        #background-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -2;
            pointer-events: none;
        }

        #background-overlay {
            position: fixed;
            inset: 0;
            background: rgba(5, 10, 25, 0.48);
            z-index: -1;
            pointer-events: none;
        }

        /* =========================
           MAIN WRAPPER
        ========================= */
        .wrapper {
            min-height: 100vh;
            background: transparent !important;
        }

        .content-wrapper {
            background: transparent !important;
        }

        /* =========================
           NAVBAR
        ========================= */
        .main-header {
            background: rgba(8, 13, 30, 0.88) !important;
            border-bottom: 1px solid rgba(0, 212, 255, 0.25);
        }

        .main-header .nav-link {
            color: #ffffff !important;
            transition: color 0.2s ease;
        }

        .main-header .nav-link:hover {
            color: #00d4ff !important;
        }

        /* =========================
           SIDEBAR
        ========================= */
        .main-sidebar {
            background: rgba(8, 13, 30, 0.96) !important;
        }

        /* =========================
           CONTENT HEADER
        ========================= */
        .content-header h1 {
            color: #ffffff;
        }

        .content-header .breadcrumb,
        .content-header .breadcrumb a {
            color: #d8e8ff;
        }

        .content-header .breadcrumb-item.active {
            color: #9eafc8;
        }

        /* =========================
           CARD GLASS EFFECT
        ========================= */
        .content-wrapper .card {
            background: rgba(12, 22, 43, 0.82) !important;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 12px;
            color: #ffffff;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.18);
        }

        .content-wrapper .card-header {
            background: rgba(0, 212, 255, 0.06);
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
        }

        .content-wrapper .card-title,
        .content-wrapper .card-text,
        .content-wrapper label {
            color: #ffffff;
        }

        /* =========================
           TABLE
        ========================= */
        .content-wrapper .table {
            color: #ffffff;
        }

        .content-wrapper .table thead th {
            background: rgba(0, 212, 255, 0.10);
            border-color: rgba(255, 255, 255, 0.15);
        }

        .content-wrapper .table td,
        .content-wrapper .table th {
            border-color: rgba(255, 255, 255, 0.12);
            vertical-align: middle;
        }

        /* =========================
           FORM INPUT
        ========================= */
        .content-wrapper .form-control,
        .content-wrapper .custom-select {
            background-color: rgba(8, 15, 30, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.18);
            color: #ffffff;
        }

        .content-wrapper .form-control:focus,
        .content-wrapper .custom-select:focus {
            border-color: #00d4ff;
            box-shadow: 0 0 0 0.15rem rgba(0, 212, 255, 0.15);
        }

        .content-wrapper .form-control::placeholder {
            color: #aab8cf;
        }

        /* Dropdown navbar */
        .navbar .dropdown-menu {
            background: #111b30;
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .navbar .dropdown-item {
            color: #ffffff;
        }

        .navbar .dropdown-item:hover {
            background: rgba(0, 212, 255, 0.12);
        }

        .navbar .dropdown-divider {
            border-color: rgba(255, 255, 255, 0.12);
        }

        /* =========================
           FOOTER
        ========================= */
        .main-footer {
            background: rgba(8, 13, 30, 0.88);
            color: #dce6f5;
            border-top: 1px solid rgba(255, 255, 255, 0.12);
        }
        /* Responsif */
        @media (max-width: 767.98px) {
            #background-video {
                object-position: center;
            }

            .content-wrapper .card {
                backdrop-filter: blur(6px);
            }
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">

    <!-- VIDEO BACKGROUND: SATU SAJA -->
    <video id="background-video" autoplay muted loop playsinline>
        <source src="<?= base_url('img/dark.mp4') ?>" type="video/mp4">
    </video>

    <!-- OVERLAY: SATU SAJA -->
    <div id="background-overlay"></div>

    <?php
    if (!empty($info_psn)) {
        echo "<script>alert(" . json_encode($info_psn) . ");</script>";
    }
    ?>

    <!-- Wrapper AdminLTE -->
    <div class="wrapper">

        <!-- NAVBAR -->
        <nav class="main-header navbar navbar-expand navbar-dark">

            <!-- Menu kiri -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link"
                       data-widget="pushmenu"
                       href="#"
                       role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>

                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Menu kanan -->
            <ul class="navbar-nav ml-auto">

                <!-- Search -->
                <li class="nav-item">
                    <a class="nav-link"
                       data-widget="navbar-search"
                       href="#"
                       role="button">
                        <i class="fas fa-search"></i>
                    </a>

                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input
                                    class="form-control form-control-navbar"
                                    type="search"
                                    placeholder="Search"
                                    aria-label="Search">

                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>

                                    <button
                                        class="btn btn-navbar"
                                        type="button"
                                        data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Fullscreen -->
                <li class="nav-item">
                    <a class="nav-link"
                       data-widget="fullscreen"
                       href="#"
                       role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <!-- Control Sidebar -->
                <li class="nav-item">
                    <a class="nav-link"
                       data-widget="control-sidebar"
                       data-slide="true"
                       href="#"
                       role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
