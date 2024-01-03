<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="row border rounded-5 p-3 bg-white shadow box-area">
       <div class="col-md-12 right-box">
          <div class="row align-items-center">
            <div class="header-text mb-4">
                <img src="<?=base_url()?>images/pilot_repair/logo.png">
                <p>Silahkan Daftar terlebih dahulu</p>
            </div>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="nama" class="form-control form-control-lg bg-light fs-6" placeholder="Nama Lengkap" required="">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="alamat" class="form-control form-control-lg bg-light fs-6" placeholder="Alamat" required="">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email" required="">
                </div>
                <div class="input-group mb-3">
                    <input type="text" name="no_telpon" id="no_tel" minlength="11" maxlength="13" class="form-control form-control-lg bg-light fs-6" placeholder="Nomor WhatsApp" required="">
                </div>
                <div class="input-group mb-2">
                    <input type="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Kata Sandi" required="">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between lupa-sandi">
                    <div class="forgot">
                        <small><a href="<?=base_url()?>home/login">Sudah Punya Akun ? Masuk Disini</a></small>
                    </div>
                </div>
                <a class="form-group" id="tombol-login">
                    <button type="submit" value="Lakukan Pendaftaran" name="daftar" class="btn tombol btn-lg w-100 fs-6">Daftar</button>
                </a>
            </form>
          </div>
       </div> 
      </div>
    </div>
</div>