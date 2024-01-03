    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 bg-white shadow box-area">
          <div class="col-md-12 right-box">
              <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <img src="<?=base_url()?>images/pilot_repair/logo.png">
                        <p>Silahkan masuk terlebih dahulu</p>
                    </div>
                    <form class="input-login" method="post" autocomplete="off">
                        <div class="input input-group mb-3 row">
                            <input type="text" id="username" name="username" class="form-control form-control-lg bg-light fs-6" placeholder="Username">
                        </div>
                        <div class="input input-group mb-1 row">
                            <input type="password" id="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                        </div>
                        <div class="input-group mb-5 d-flex justify-content-between lupa-sandi">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck">
                                <label for="formCheck" class="form-check-label text-secondary"><small>Simpan Login</small></label>
                            </div>
                            <div class="forgot">
                                <small><a href="#">Lupa Kata Sandi ?</a></small>
                            </div>
                        </div>
                        <div id="tombol-login" class="form-group">
                          <?php if (!empty($username_kosong)) { ?>
                              <p class="email-error-message text-danger"><?php echo $username_kosong; ?></p>
                          <?php } ?>
                          <?php if (!empty($password_kosong)) { ?>
                              <p class="passwd-error-message text-danger"><?php echo $password_kosong; ?></p>
                          <?php } ?>
                          <button type="submit" value="Login" name="login" class="btn tombol btn-lg w-100 fs-6">Login</button>
                        </div>
                        <a id="login-google" href="/">
                            <button class="btn tombol btn-lg w-100 fs-6"><img class="mr-3" src="<?=base_url()?>images/pilot_repair/logo_google.png" style="width:20px" class="me-2">Masuk Dengan Akun Google</button>
                        </a>
                    </form>
                    <a id="daftar" href="<?=base_url()?>home/register">Belum punya akun ? Daftar Disini</a>
              </div>
          </div> 
          </div>
        </div>
    </div>
    <script>
        function hideEmailErrorMessage() {
            setTimeout(function () {
                var emailError = document.querySelector('.email-error-message.text-danger');
                if (emailError) {
                    emailError.style.display = 'none';
                }
            }, 3000);
        }

        function hidePasswdErrorMessage() {
            setTimeout(function () {
                var passwdError = document.querySelector('.passwd-error-message.text-danger');
                if (passwdError) {
                    passwdError.style.display = 'none';
                }
            }, 3000);
        }

        window.onload = function () {
            hideEmailErrorMessage();
            hidePasswdErrorMessage();
        }
    </script>


          