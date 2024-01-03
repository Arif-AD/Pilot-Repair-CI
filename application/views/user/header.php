<section id="header">
    <?php foreach ($user->result() as $key => $value): ?>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="myNavbar">
            <nav class="container">
                <a class="navbar-brand judul" href="#"><img src="<?=base_url()?>images/pilot_repair/logo.png" alt=""></a>
                <button id="tombol-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav menu">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Biaya Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tentang Kami</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown">
                    <a class="btn-username dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <p class="username-login"><?=$value->nama?></p>
                        <img src="<?=base_url()?>images/pilot_repair/profile.jpg" alt="" class="profile-image">
                    </a>
                    <ul class="dropdown-menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 profile-dropdown">
                                    <img src="<?=base_url()?>images/pilot_repair/profile.jpg" alt="" class="profile-image">
                                    <h5 class="dropdown-item">Username :</h5>
                                    <h2 class="username"><?=$value->username?></h2>
                                </div>
                                <div class="col-6 text-dropdown">
                                    <li><h6 class="dropdown-item">Nama</h6></li>
                                    <li><p class="dropdown-item"><?=$value->nama?></p></li>
                                </div>
                                <div class="col-6 text-dropdown">
                                    <li><h6 class="dropdown-item">Email Anda</h6></li>
                                    <li><p class="dropdown-item"><?=$value->email?></p></li>
                                </div>
                                <div class="col-6 text-dropdown">
                                    <li><h6 class="dropdown-item">Nomor HP</h6></li>
                                    <li><p class="dropdown-item"><?=$value->no_telpon?></p></li>
                                </div>
                                <div class="col-6 text-dropdown">
                                    <li><h6 class="dropdown-item">Alamat</h6></li>
                                    <li><p class="dropdown-item"><?=$value->alamat?></p></li>
                                </div>
                                <div class="col-12">
                                    <li>
                                        <a href="">
                                            <button class="btn-lihat">Lihat Profile</button>
                                        </a>
                                    </li>
                                </div>
                                <div class="col-12">
                                    <li>
                                        <a href="">
                                            <button class="btn-edit">Edit Profile</button>
                                        </a>
                                    </li>
                                </div>
                                <div class="col-12">
                                    <li>
                                        <a href="<?=base_url()?>user/logout">
                                            <button class="btn-logout">Logout <i class="fa-regular fa-right-from-bracket fa-beat-fade" style="color: #ffffff;"></i></button>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
            </nav>
        </nav>
    <?php endforeach; ?>
</section>
