
<style>
    .main-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
        padding: 15px 20px;
        margin-top: 0 !important;
        flex-shrink: 0;

        color: #dbeafe;
        background: rgba(10, 20, 40, 0.88);
        border-top: 1px solid rgba(0, 191, 255, 0.25);
        box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.15);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
    }

    .main-footer strong {
        color: #38bdf8;
        font-weight: 700;
    }

    .main-footer a {
        color: #38bdf8;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .main-footer a:hover {
        color: #7dd3fc;
    }

    .main-footer .footer-left {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 6px;
    }

    .main-footer .footer-right {
        display: flex;
        align-items: center;
        gap: 6px;
        color: #94a3b8;
        font-size: 13px;
    }

    .main-footer .footer-status {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #86efac;
    }

    .main-footer .status-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #22c55e;
        box-shadow: 0 0 8px rgba(34, 197, 94, 0.8);
    }

    @media (max-width: 767.98px) {
        .main-footer {
            flex-direction: column;
            justify-content: center;
            text-align: center;
            padding: 15px 10px;
        }

        .main-footer .footer-left,
        .main-footer .footer-right {
            justify-content: center;
        }
    }
</style>

<footer class="main-footer">
    <div class="footer-left">
        <strong>ラファ</strong>
        <span>&copy; <?= date('Y') ?>.</span>
        <span>Sistem Informasi Rental Mobil.</span>
    </div>

    <div class="footer-right">
        <span class="footer-status">
            <span class="status-dot"></span>
            System Online
        </span>
        <span>|</span>
        <span>Powered by <strong>AdminLTE 3.2.0</strong></span>
    </div>
</footer>

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('AdminLTE-3.2.0/plugins/jquery/jquery.min.js') ?>"></script>

<!-- Bootstrap -->
<script src="<?= base_url('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- AdminLTE -->
<script src="<?= base_url('AdminLTE-3.2.0/dist/js/adminlte.min.js') ?>"></script>

</body>
</html>
