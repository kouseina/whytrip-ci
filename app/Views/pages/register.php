<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="register-content">
    <div class="register-form col-md-6">
        <nav class="logo mt-5">
            <a class="navbar-brand" href="/">
                <img src="/assets/img/Logo-1.png" alt="Whytrip" loading="lazy">
            </a>
        </nav>

        <div class="register">
            <div class="title">
                <h2>Selamat Datang di Whytrip</h2>
            </div>
            <div class="register mt-5">
                <form>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="email" class="form-control" placeholder="Masukkan Username">
                    </div>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="whytrip123@gmail.com">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Masukan Password" id="myInput">
                        <span class="eye" onclick="myFunction()">
                            <i id="hide" class="fa fa-eye" aria-hidden="true"></i>
                            <i id="hide2" class="fa fa-eye-slash" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="form-group">
                        <label>Konfirmasi Password</label>
                        <input type="password" class="form-control" placeholder="Masukan Password" id="myInput">
                        <span class="eye" onclick="myFunction()">
                            <i id="hide" class="fa fa-eye" aria-hidden="true"></i>
                            <i id="hide2" class="fa fa-eye-slash" aria-hidden="true"></i>
                        </span>
                    </div>
                </form>

                <div class="btn-register">
                    <button type="submit" class="btn btn-login mt-3">Sign Up</button>
                    <div class="or">
                        <hr class="left">
                        <p class="mt-3 text-center">Atau</p>
                        <hr class="right">
                    </div>

                    <button type="submit" class="btn btn-google ">
                        <img src="https://img.icons8.com/color/48/000000/google-logo.png" />
                        Lanjutkan dengan Google
                    </button>
                </div>

                <div class="akun text-center mt-5 mb-5">
                    <p>Sudah Memiliki akun? <a href="/pages/login">Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="register-ilus">
        <img src="/assets/img/ilus-login.png" alt="">
    </div>
</div>

<?= $this->endSection('content'); ?>