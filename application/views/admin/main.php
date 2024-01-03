		<div class="row small-spacing">
			<div class="col-lg-4 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Form Tambah Barang</h4>
					<!-- /.box-title -->
					<div class="card-content">
						<form method="post" id="myform" name="myform" enctype="multipart/form-data">
							<div class="form-group">
								<center><img id="image-preview" alt="image preview" width="50%"></center>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Upload Foto</label>
								<input type="file"  name="foto_upload" id="imagesource" onchange="previewImage();" class="form-control">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Kategori Merk</label>
								<select class="form-control" name="kategori" onchange="changeKategori();" id="kategori">
									<option value="">-Sila Pilih Kategori</option>
									<option value="1">Samsung</option>
									<option value="2">Xiaomi</option>
									<option value="3">Apple</option>
									<option value="4">Vivo</option>
									<option value="5">Oppo</option>
									<option value="6">Realme</option>
									<option value="7">Poco</option>
									<option value="8">Infinix</option>
									<option value="9">Asus</option>
									<option value="10">Itel</option>
									<option value="11">Huawei</option>
									<option value="12">Advan</option>
									<option value="13">Sony</option>
								</select>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Seri</label>
								<input type="text"  class="form-control" placeholder="Nama Seri HP" name="seri"  id="seri" minlength="5">
							</div>

							<div class="form-group">
								<div class="col-6" style="float: left; width: 50%; padding-right: 5px;">
									<label for="exampleInputEmail1">RAM</label>
									<input type="text" class="form-control" placeholder="RAM" name="ram" id="ram" minlength="1">
								</div>
								<div class="col-6" style="float: left; width: 50%; ">
									<label for="exampleInputEmail1">Internal</label>
									<input type="text" class="form-control" placeholder="Internal" name="inter" id="inter" minlength="1">
								</div>
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Harga</label>
								<input type="text"  class="form-control" placeholder="Masukkan Harga" name="harga"  id="num" minlength="5" maxlength="9">
							</div>
							<button type="button" class="btn btn-primary btn-sm waves-effect waves-light" onclick="tambah()">Submit</button>
						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- /.col-lg-6 col-xs-12 -->

			<div class="col-lg-8 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Form Desain Project</h4>
					<div class="tab">
            <button class="tablinks" onclick="openCity(event, 'undangantab')" id="defaultOpen">Samsung</button>
            <button class="tablinks" onclick="openCity(event, 'kartu_nama')">Xiaomi</button>
            <button class="tablinks" onclick="openCity(event, 'sepanduk')">Apple</button>
          </div>

          <div class="tabcontent" id="undangantab">
						<div class="card-content" id="undangan_tabs">
							<?php 
								$nomor = 0;
								$data = $this->madmin->tampil_data_gambar($nomor,1);
								if (count($data->result())>0) { ?>
									<div class="row small-spacing">

										<?php foreach ($data->result() as $key => $value):
											$keterangan = json_decode($value->keterangan);
										?>
										<div class="col-lg-3 col-md-6 col-xs-12">
											<center>
												<img src="<?=base_url($keterangan->img)?>">
												<p>Harga : Rp. <?=number_format($keterangan->harga)?> / pcs <br>Upload : <?=$value->tanggal_upload?></p>
												<a href="<?=base_url()?>admin/detail/<?=$value->no?>"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Detail</button></a><br><br>
											</center>
										</div>
										<?php endforeach ?>
										
										
									</div>
									<hr>		
								<?php  }
							?>

							<?php 
								$nomor = $nomor +4;
								$data = $this->madmin->tampil_data_gambar($nomor,1);
								if (count($data->result())>0) { ?>
									<div class="row small-spacing">

										<?php foreach ($data->result() as $key => $value):
											$keterangan = json_decode($value->keterangan);
										?>
										<div class="col-lg-3 col-md-6 col-xs-12">
											<center>
												<img src="<?=base_url($keterangan->img)?>">
												<p>Harga : Rp. <?=number_format($keterangan->harga)?> / pcs <br>Upload : <?=$value->tanggal_upload?></p>
												<a href="<?=base_url()?>admin/detail/<?=$value->no?>"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Detail</button></a><br><br>
											</center>
										</div>
										<?php endforeach ?>
										
										
									</div>
									<hr>		
								<?php  }
							?>


							<?php 
								$nomor = $nomor +4;
								$data = $this->madmin->tampil_data_gambar($nomor,1);
								if (count($data->result())>0) { ?>
									<div class="row small-spacing">

										<?php foreach ($data->result() as $key => $value):
											$keterangan = json_decode($value->keterangan);
										?>
										<div class="col-lg-3 col-md-6 col-xs-12">
											<center>
												<img src="<?=base_url($keterangan->img)?>">
												<p>Harga : Rp. <?=number_format($keterangan->harga)?> / pcs <br>Upload : <?=$value->tanggal_upload?></p>
												<a href="<?=base_url()?>admin/detail/<?=$value->no?>"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Detail</button></a><br><br>
											</center>
										</div>
										<?php endforeach ?>
										
										
									</div>
									<hr>		
								<?php  }
							?>

							<center>
							<?php
							 	$jumlah = $this->madmin->jumlah_halaman(count($undangan->result()));
							 	$ii = 0;
							 	for ($i=1; $i <= $jumlah ; $i++) { ?>
									<button type="button" class="btn btn-primary btn-circle btn-xs waves-effect waves-light" onclick="tukar_halaman(<?=$ii?>,1)"><?=$i?></button>
							 	<?php $ii+=12; }
							?>
							</center>
						</div>
					</div>

					<div class="tabcontent" id="kartu_nama">
						<div class="card-content" id="kartu_nama_tabs">
							<?php 
								$nomor = 0;
								$data = $this->madmin->tampil_data_gambar($nomor,2);
								if (count($data->result())>0) { ?>
							<div class="row small-spacing">

								<?php foreach ($data->result() as $key => $value):
									$keterangan = json_decode($value->keterangan);
								?>
								<div class="col-lg-3 col-md-6 col-xs-12">
									<center>
										<img src="<?=base_url($keterangan->img)?>">
										<p><?=$keterangan->seri?><br><?=$keterangan->ramint?> GB<br>Harga : Rp. <?=number_format($keterangan->harga)?><br>Upload : <?=$value->tanggal_upload?></p>
										<a href="<?=base_url()?>admin/detail/<?=$value->no?>"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Detail</button></a><br><br>
									</center>
								</div>
								<?php endforeach ?>
								
								
							</div>
							<hr>		
								<?php  }
							?>

							<?php 
								$nomor = $nomor +4;
								$data = $this->madmin->tampil_data_gambar($nomor,2);
								if (count($data->result())>0) { ?>
							<div class="row small-spacing">

								<?php foreach ($data->result() as $key => $value):
									$keterangan = json_decode($value->keterangan);
								?>
								<div class="col-lg-3 col-md-6 col-xs-12">
									<center>
										<img src="<?=base_url($keterangan->img)?>">
										<p>Harga : Rp. <?=number_format($keterangan->harga)?> / pcs <br>Upload : <?=$value->tanggal_upload?></p>
										<a href="<?=base_url()?>admin/detail/<?=$value->no?>"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Detail</button></a><br><br>
									</center>
								</div>
								<?php endforeach ?>
								
								
							</div>
							<hr>		
								<?php  }
							?>


							<?php 
								$nomor = $nomor +4;
								$data = $this->madmin->tampil_data_gambar($nomor,2);
								if (count($data->result())>0) { ?>
							<div class="row small-spacing">

								<?php foreach ($data->result() as $key => $value):
									$keterangan = json_decode($value->keterangan);
								?>
								<div class="col-lg-3 col-md-6 col-xs-12">
									<center>
										<img src="<?=base_url($keterangan->img)?>">
										<p><?=$keterangan->seri?><br><?=$keterangan->ram?><br>Harga : Rp. <?=number_format($keterangan->harga)?>	e<br>Upload : <?=$value->tanggal_upload?></p>
										<a href="<?=base_url()?>admin/detail/<?=$value->no?>"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Detail</button></a><br><br>
									</center>
								</div>
								<?php endforeach ?>
								
								
							</div>
							<hr>		
								<?php  }
							?>

							<center>
							<?php
							 	$jumlah = $this->madmin->jumlah_halaman(count($xiaomi->result()));
							 	$ii = 0;
							 	for ($i=1; $i <= $jumlah ; $i++) { ?>
									<button type="button" class="btn btn-primary btn-circle btn-xs waves-effect waves-light" onclick="tukar_halaman(<?=$ii?>,2)"><?=$i?></button>
							 	<?php $ii+=12; }
							?>
							</center>
						</div>
					</div>


					<div class="tabcontent" id="sepanduk">
						<div class="card-content" id="spanduk_tabs">
							<?php 
								$nomor = 0;
								$data = $this->madmin->tampil_data_gambar($nomor,3);
								if (count($data->result())>0) { ?>
							<div class="row small-spacing">

								<?php foreach ($data->result() as $key => $value):
									$keterangan = json_decode($value->keterangan);
								?>
								<div class="col-lg-3 col-md-6 col-xs-12">
									<center>
										<img src="<?=base_url($keterangan->img)?>">
										<p>Harga : Rp. <?=number_format($keterangan->harga)?> / pcs <br>Upload : <?=$value->tanggal_upload?></p>
										<a href="<?=base_url()?>admin/detail/<?=$value->no?>"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Detail</button></a><br><br>
									</center>
								</div>
								<?php endforeach ?>
								
								
							</div>
							<hr>		
								<?php  }
							?>

							<?php 
								$nomor = $nomor +4;
								$data = $this->madmin->tampil_data_gambar($nomor,3);
								if (count($data->result())>0) { ?>
							<div class="row small-spacing">

								<?php foreach ($data->result() as $key => $value):
									$keterangan = json_decode($value->keterangan);
								?>
								<div class="col-lg-3 col-md-6 col-xs-12">
									<center>
										<img src="<?=base_url($keterangan->img)?>">
										<p>Harga : Rp. <?=number_format($keterangan->harga)?> / pcs <br>Upload : <?=$value->tanggal_upload?></p>
										<a href="<?=base_url()?>admin/detail/<?=$value->no?>"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Detail</button></a><br><br>
									</center>
								</div>
								<?php endforeach ?>
								
								
							</div>
							<hr>		
								<?php  }
							?>


							<?php 
								$nomor = $nomor +4;
								$data = $this->madmin->tampil_data_gambar($nomor,3);
								if (count($data->result())>0) { ?>
							<div class="row small-spacing">

								<?php foreach ($data->result() as $key => $value):
									$keterangan = json_decode($value->keterangan);
								?>
								<div class="col-lg-3 col-md-6 col-xs-12">
									<center>
										<img src="<?=base_url($keterangan->img)?>">
										<p>Harga : Rp. <?=number_format($keterangan->harga)?> / pcs <br>Upload : <?=$value->tanggal_upload?></p>
										<a href="<?=base_url()?>admin/detail/<?=$value->no?>"><button type="button" class="btn btn-primary btn-sm waves-effect waves-light">Detail</button></a><br><br>
									</center>
								</div>
								<?php endforeach ?>
								
								
							</div>
							<hr>		
								<?php  }
							?>

							<center>
							<?php
							 	$jumlah = $this->madmin->jumlah_halaman(count($spanduk->result()));
							 	$ii = 0;
							 	for ($i=1; $i <= $jumlah ; $i++) { ?>
							<button type="button" class="btn btn-primary btn-circle btn-xs waves-effect waves-light" onclick="tukar_halaman(<?=$ii?>,3)"><?=$i?></button>
							 	<?php $ii+=12; }
							?>
							</center>
						</div>
					</div>

					



					

					
				</div>
			</div>

			
		</div>