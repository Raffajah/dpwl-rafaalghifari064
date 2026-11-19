<!-- Form Login Penyewa -->
<form action="<?php echo base_url('Login_C/CekLogin'); ?>" method="post">

    <!-- Username Penyewa -->
    <div class="input-group mb-3">
        <input type="text"
               class="form-control"
               placeholder="Username Penyewa"
               name="email"
               required>

        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>

    <!-- Password -->
    <div class="input-group mb-3">
        <input type="password"
               class="form-control"
               placeholder="Password"
               name="pass"
               required>

        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">Ingat Saya</label>
            </div>
        </div>

        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">
                Login
            </button>
        </div>
    </div>

</form>
