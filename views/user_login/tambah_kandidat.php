<?php
$id = @$_GET['id'];
$id_vote = @$_GET['id_vote'];
$tampil_kode = mysqli_query($conn, "SELECT * FROM tb_vote WHERE id_vote = '$id_vote'");
$tampil_kode_data = mysqli_fetch_array($tampil_kode);
?>
<form method="post" action="" enctype="multipart/form-data">
	<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="?page=home">Home</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<div class="col-xl-8 col-lg-8">
				<div class="box_general_3 cart">
					<div class="form_title">
						<h3><strong>1 </strong> Info Vote Secara Umum</h3>
						<p>
							Masukan Data Kandidat
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Judul Kandidat</label>
									<input type="text" class="form-control" id="" name="judul_kandidat" placeholder="Gunung Kidul" required>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Kategori</label>
									<select class="form-control" name="kategori" required>
										<option class="form-control">Tempat wisata</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>Upload Cover</label>
									<input type="File" id="email_booking" name="cover" class="form-control" placeholder="Gambar" required>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label>no kandidat</label>
									<input type="number" id="email_booking_2" name="no_kanidat" class="form-control" placeholder="1" required>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3><strong>2 </strong> Deskripsi</h3>
						<p>
							Masukan Deskripsi dan Fasilitas
						</p>
					</div>
					<div class="step">
						<div class="form-group">
							<label>Deskripsi Vote</label>
							<textarea required type="text" class="form-control" id="name_card_booking" name="deskripsi" placeholder="Deskripsi" style="min-height: 300px"></textarea>
						</div>
							<div class="form-group">
								<!-- <label>Fasilitas</label> -->
								<input type="hidden" class="form-control" id="" name="fasilitas" placeholder="Makan Gratis" value="standar" required>
							</div>
					</div>
					<hr>
					<!--End step -->

					<div class="form_title">
						<h3><strong>3 </strong> Privew</h3>
						<p>
							Masukan Gambar Dan video
						</p>
					</div>
					<div class="step">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label><h5>Gambar</h5></label>
									<input type="file" id="street_1" name="gambar" class="form-control" placeholder="gambar" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label><h5>Video</h5></label>
									<p>ex : https://www.youtube.com/watch?v=0yGdu8rfjMY</p><p>  yang diinputkan hanya kode setelah v= ex <font style="background: #fd79a8">0yGdu8rfjMY</font></p>
									<input type="text" id="city_booking" name="video" class="form-control" placeholder="Video link embed" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label><h5>Maps</h5></label>
									<p>Gunakan link yang berada dalam iframe. bisa didapatkan di google maps bagian share</p>
									<input type="text" id="city_booking" name="maps" class="form-control" placeholder="maps link embed" required>
								</div>
							</div>
						</div>
						<!--End row -->
					</div>
					<!--End step -->
				</div>
				</div>
				<!-- /col -->
				<aside class="col-xl-4 col-lg-4" id="sidebar">
					<div class="box_general_3 booking">
							<div class="title">
								<h3>Voting Time</h3>
							</div>
							<div class="summary">
								<ul>
									<li>Kode Voting : <strong class="float-right"><?php echo $tampil_kode_data['kode'] ; ?></strong></li>
									<li>Judul Vote   : <strong class="float-right"><?php echo $tampil_kode_data['judul_vote'] ; ?></strong></li>
								</ul>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Start Vote Day</label>
									<input required type="date" id="email_booking" name="start_day" class="form-control" placeholder="jhon@doe.com" value="<?php echo $tampil_kode_data['start_day']; ?>">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>End Vote Day</label>
									<input required type="date" id="email_booking_2" name="end_day" class="form-control" placeholder="1" value="<?php echo $tampil_kode_data['end_day']; ?>">
								</div>
							</div>
							<hr>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Start Time</label>
									<input required type="time" id="email_booking" name="start_time" class="form-control" placeholder="jhon@doe.com" value="<?php echo $tampil_kode_data['start_time']; ?>">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>End Time</label>
									<input required type="time" id="email_booking_2" name="end_time" class="form-control" placeholder="1" value="<?php echo $tampil_kode_data['end_time']; ?>">
								</div>
							</div>
							<hr>
							<center>
							<input type="submit" name="tambah" class="btn_1 full-width" value="Save !">
							</center>
							<?php
							$judul_kandidat = @$_POST['judul_kandidat'];
							$kategori = @$_POST['kategori'];
							$cover = @$_POST['cover'];
							$no_kanidat = @$_POST['no_kanidat'];
							$deskripsi = @$_POST['deskripsi'];
							$fasilitas = @$_POST['fasilitas'];
							$gambar = @$_POST['gambar'];
							$video = @$_POST['video'];
							$maps = @$_POST['maps'];
							$start_day = @$_POST['start_day'];
							$end_day = @$_POST['end_day'];
							$start_time = @$_POST['start_time'];
							$end_time = @$_POST['end_time'];
							$id_user = $tampil_kode_data['id_user'];

							$sumber = @$_FILES['cover']['tmp_name'];
							$target = 'img/';
							$nama_cover = @$_FILES['cover']['name'];
							move_uploaded_file($sumber, $target.$nama_cover);

							$sumberg = @$_FILES['gambar']['tmp_name'];
							$targetg = 'img/';
							$nama_gambarg = @$_FILES['gambar']['name'];
							move_uploaded_file($sumberg, $targetg.$nama_gambarg);


							$tambah = @$_POST['tambah'];
							if (isset($tambah)) {
								$sqltambah = mysqli_query($conn, "INSERT INTO tb_kandidat VALUES
									('','$judul_kandidat','$kategori','$nama_cover','$no_kanidat','$deskripsi','$fasilitas','$nama_gambarg','$video','$maps','$id_vote','$id_user')");
								$sqltambahwaktu = mysqli_query($conn, "UPDATE tb_vote SET start_day = '$start_day', end_day = '$end_day', start_time = '$start_time', end_time = '$end_time' WHERE id_vote = '$id_vote' ");
								?>
								<script type = "text/javascript">
								alert("Kandidat berhasil Di tambahkan");
								window.location.href="?page=data_vote&id=<?php echo $id_user?>";
								</script>
								<?php

							}
							?>
					</div>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
</form>