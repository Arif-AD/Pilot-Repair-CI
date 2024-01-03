
    <section id="keuntungan">
        <div class="container container-keuntungan">
            <div class="icon-judul">
                <img src="<?=base_url()?>images/pilot_repair/icon/bintang.png">
                <h1>Keuntungan Pilot Repair</h1>
                <img src="<?=base_url()?>images/pilot_repair/icon/bintang.png">
            </div>
            <p class="p-keuntungan">Beberapa keuntungan yang bisa Anda dapatkan</p>
            <div class="col-12 list-keuntungan">
                <div class="row">
                    <div class="col-3">
                        <img src="<?=base_url()?>images/pilot_repair/icon/icon-keuntungan4.png">
                        <h2>Teknisi Handal</h2>
                        <p>Teknisi kami adalah tim yang handal dan sudah tersertifikasi</p>
                    </div>
                    <div class="col-3">
                        <img src="<?=base_url()?>images/pilot_repair/icon/icon-keuntungan1.png">
                        <h2>Harga Terjangkau</h2>
                        <p>Kami menawarkan perbaikan HP berkualitas dengan harga yang ramah di kantong.</p>
                    </div>
                    <div class="col-3">
                        <img src="<?=base_url()?>images/pilot_repair/icon/icon-keuntungan2.png">
                        <h2>Konsultasi Gratis</h2>
                        <p>Konsultasi gratis untuk layanan HP yang andal dan terpercaya.</p>
                    </div>
                    <div class="col-3">
                        <img src="<?=base_url()?>images/pilot_repair/icon/icon-keuntungan3.png">
                        <h2>Datang Ke Rumah</h2>
                        <p>Kemudahan layanan servis teknis, datang ke rumah Anda untuk kenyamanan terbaik</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="lcd">
        <div class="container lcd col-12">
            <div class="row lcd-konten">
                <div class="col-md-6">
                    <div class="teks">
                        <div class="garis-lcd"></div>
                        <h1>Ganti LCD mulai dari <br> <span>Rp 200.000</span></h1>
                        <p class="lcd-deskripsi">Dengan budget mulai dari Rp. 200.000, Anda dapat mengembalikan tampilan layar ponsel yang rusak menjadi baru dan berkualitas. Ada bonus menarik jika anda memilih layanan kami.</p>

                        <div class="bonus col-12 row">
                            <div class="col-5 card m-2">
                                <div class="d-flex">
                                    <div class="flex-item gambar-card">
                                        <img src="<?=base_url()?>images/pilot_repair/icon/tempered-glass.png" alt="">
                                    </div>
                                    <div class="flex-item text-card-lcd">
                                        <h6>Tempered Glass</h6>
                                        <p>Free Bonus</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5 card m-2">
                                <div class="d-flex">
                                    <div class="flex-item gambar-card">
                                        <img src="<?=base_url()?>images/pilot_repair/icon/garansi.png" alt="">
                                    </div>
                                    <div class="flex-item text-card-lcd">
                                        <h6>Garansi 2 Minggu</h6>
                                        <p>Free Bonus</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gambar">
                        <img src="<?=base_url()?>images/pilot_repair/lcd_pecah.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
   

    <section id="marketplace">
        <div class="container marketplace col-12">
            <div class="row">
                <div class="col-6">
                    <div class="teks-marketplace">
                        <h1>Marketplace</h1>
                        <p><b>Marketplace Pilot Repair</b> adalah tempat yang ideal bagi Anda yang ingin membeli atau menjual ponsel bekas. Dalam platform ini, Anda dapat menjelajahi beragam pilihan ponsel bekas dari berbagai merek dan model. Marketplace ini juga menyediakan berbagai fitur yang memudahkan proses jual beli, seperti sistem ulasan dan penilaian untuk memastikan kepercayaan antara pembeli dan penjual, serta fitur pencarian lanjutan yang memungkinkan Anda untuk dengan mudah menemukan ponsel yang sesuai dengan preferensi Anda, termasuk merek, harga, kondisi, dan lokasi penjual.</p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="gambar-marketplace">
                        <img src="<?=base_url()?>images/pilot_repair/marketplace.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="produk">
        <div class="container produk col-12">
            <div class="kategori-terbaru">
                <div class="text-terbaru dropdown">
                    <a class="btn btn-username dropdown-toggle" style="background-color: #00A17E; border-radius: 20px; color:#fff;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pilih Kategori
                    </a>
                    <ul class="dropdown-menu">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 text-dropdown">
                                    <a class="dropdown-item" onclick="openCity(event, 'xiaomi')">Xiaomi</a>
                                    <a class="dropdown-item" onclick="openCity(event, 'kartu_nama')">Kartu Nama</a>
                                    <a class="dropdown-item" onclick="openCity(event, 'spanduk')">Spanduk</a>
                                </div>
                            </div>
                        </div>
                    </ul>
                </div>
                <a href="" class="button-marketplace">
                    <button>Kunjungi Marketplace <i class="fa-solid fa-store"></i></button>
                </a>
            </div>
            <div class="row tabcontent" id="xiaomi">
                <?php  
                $nomor = 0;
                $data = $this->muser->tampil_data_gambar($nomor, 2);
                if (count($data->result()) > 0) {
                    foreach ($data->result() as $key => $value) { 
                        $keterangan = json_decode($value->keterangan);
                        ?>

                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <img src="<?= base_url($keterangan->img) ?>" class="mx-auto card-img-top" alt="">
                                <div class="deskripsi-produk">
                                    <span class="badge-garansi"><i class="fa-regular fa-circle-check fa-beat"></i> Garansi</span>
                                    <h1 class="card-title"><?= $keterangan->seri ?> Ram <?= $keterangan->ramint ?> GB</h1>
                                    <h4 class="harga"><span>Rp</span><?= number_format($keterangan->harga) ?></h4>
                                    <span class="rating">
                                        <i class="star fas fa-star"></i>
                                        <i class="star fas fa-star"></i>
                                        <i class="star fas fa-star"></i>
                                        <i class="star fas fa-star"></i>
                                        <i class="star fas fa-star"></i>
                                    </span>
                                    <span class="jumlah-rating">
                                        4.9
                                    </span>
                                    <h6>DI Yogyakarta</h6>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </section>

    <section id="produk">
        <div class="container mt-5 produk col-12">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <img src="<?=base_url()?>images/pilot_repair/produk/produk1.png" class="mx-auto" alt="">
                        <div class="deskripsi-produk">
                            <span class="badge-garansi"><i class="fa-regular fa-circle-check fa-beat"></i> Garansi</span>
                            <h1 class="card-title">Redmi Note 12 Pro Ram 6/128 GB</h1>
                            <h4 class="harga"><span>Rp</span>4.300.000</h4>
                            <span class="rating">
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                            </span>
                            <span class="jumlah-rating">
                                4.9
                            </span>
                            <h6>DI Yogyakarta</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="<?=base_url()?>images/pilot_repair/produk/produk1.png" class="mx-auto" alt="">
                        <div class="deskripsi-produk">
                            <span class="badge-garansi"><i class="fa-regular fa-circle-check fa-beat"></i> Garansi</span>
                            <h1 class="card-title">Redmi Note 12 Pro Ram 6/128 GB</h1>
                            <h4 class="harga"><span>Rp</span>4.300.000</h4>
                            <span class="rating">
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                            </span>
                            <span class="jumlah-rating">
                                4.9
                            </span>
                            <h6>DI Yogyakarta</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="<?=base_url()?>images/pilot_repair/produk/produk1.png" class="mx-auto" alt="">
                        <div class="deskripsi-produk">
                            <span class="badge-garansi"><i class="fa-regular fa-circle-check fa-beat"></i> Garansi</span>
                            <h1 class="card-title">Redmi Note 12 Pro Ram 6/128 GB</h1>
                            <h4 class="harga"><span>Rp</span>4.300.000</h4>
                            <span class="rating">
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                            </span>
                            <span class="jumlah-rating">
                                4.9
                            </span>
                            <h6>DI Yogyakarta</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="<?=base_url()?>images/pilot_repair/produk/produk1.png" class="mx-auto" alt="">
                        <div class="deskripsi-produk">
                            <span class="badge-garansi"><i class="fa-regular fa-circle-check fa-beat"></i> Garansi</span>
                            <h1 class="card-title">Redmi Note 12 Pro Ram 6/128 GB</h1>
                            <h4 class="harga"><span>Rp</span>4.300.000</h4>
                            <span class="rating">
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                            </span>
                            <span class="jumlah-rating">
                                4.9
                            </span>
                            <h6>DI Yogyakarta</h6>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="<?=base_url()?>images/pilot_repair/produk/produk1.png" class="mx-auto" alt="">
                        <div class="deskripsi-produk">
                            <span class="badge-garansi"><i class="fa-regular fa-circle-check fa-beat"></i> Garansi</span>
                            <h1 class="card-title">Redmi Note 12 Pro Ram 6/128 GB</h1>
                            <h4 class="harga"><span>Rp</span>4.300.000</h4>
                            <span class="rating">
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                                <i class="star fas fa-star"></i>
                            </span>
                            <span class="jumlah-rating">
                                4.9
                            </span>
                            <h6>DI Yogyakarta</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     
    <section id="teknisi">
        <div class="container mt-5 teknisi col-12">
            <div class="row">
                <div class="col-4 gambar">
                    <div class="gambar-teknisi">
                        <img src="<?=base_url()?>images/pilot_repair/teknisi.png">
                    </div>
                </div>
                <div class="col-5 teks">
                    <h1>Kami Ada Untuk Anda</h1>
                    <p>Perbaiki dan tingkatkan kinerja ponsel Anda dengan Diskon 10% khusus untuk pengguna baru. Layanan service terbaik untuk ponsel Anda!</p>
                </div>
                <div class="col-3 tombol">
                    <a href="">
                        <button class="btn btn-chat"></i>Service Sekarang</button>
                    </a>
                </div>
            </div>
        </div>
    </section>