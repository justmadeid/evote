<?php
$id = @$_GET['id'];
$id_vote = @$_GET['id_vote'];
$tampil_kode = mysqli_query($conn, "SELECT * FROM tb_vote WHERE id_vote = '$id_vote'");
$tampil_kode_data = mysqli_fetch_array($tampil_kode);
$tampil_vo = mysqli_query($conn, "SELECT * FROM tb_kandidat WHERE id_vote = '$id_vote'");
$tampil_vo_data = mysqli_fetch_array($tampil_vo);
$sql = mysqli_query($conn, "SELECT * FROM tb_kandidat WHERE id_vote = '$id_vote'");
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
									<label>Nama Vote</label>
									<input type="text" class="form-control" id="" name="judul_vote" value="<?php echo $tampil_kode_data['judul_vote'] ; ?>">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Kategori</label>
									<select class="form-control" name="kategori">
										<option class="form-control">Tempat wisata</option>
									</select>
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Upload Cover</label>
									<input type="File" id="email_booking" name="cover" class="form-control" placeholder="Gambar">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
							<div class="form-group">
							<label>Deskripsi Vote</label>
							<textarea style="min-height: 200px" type="text" class="form-control" id="name_card_booking" name="deskripsi" placeholder="Jhon Doe"><?php echo $tampil_kode_data['deskripsi'] ; ?></textarea>
						</div>
					</div>
					</div>
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
							$judul_vote = @$_POST['judul_vote'];
							$kategori = @$_POST['kategori'];
							$cover = @$_POST['cover'];
							$deskripsi = @$_POST['deskripsi'];
							$start_day = @$_POST['start_day'];
							$end_day = @$_POST['end_day'];
							$start_time = @$_POST['start_time'];
							$end_time = @$_POST['end_time'];
							$id_user = $tampil_kode_data['id_user'];

							$sumber = @$_FILES['cover']['tmp_name'];
							$target = 'img/';
							$nama_cover = @$_FILES['cover']['name'];
							move_uploaded_file($sumber, $target.$nama_cover);


							$tambah = @$_POST['tambah'];
							if (isset($tambah)) {
								$sqltambah = mysqli_query($conn, "UPDATE tb_vote SET judul_vote = '$judul_vote', kategori = '$kategori', cover = '$nama_cover', deskripsi ='$deskripsi', start_day = '$start_day', end_day = '$end_day', start_time = '$start_time', end_time = '$end_time' WHERE id_vote = '$id_vote' ");
								?>
								<script type = "text/javascript">
								alert("Kandidat berhasil Di Ubah");
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
		<center>
			<div class="title">
				<h3>Kandidat</h3>
			</div>
		</center>
	<div class="container margin_60">
		<div class="row">
		<!-- /container -->
			<div class="col-lg-12">
				<div class="row justify-content-center">
					<?php
					
					

					$id_user_vote = $data_user['id_user'];
					while ($data = mysqli_fetch_array($sql)) {
					?>
					<div class="col-md-4">
						<div class="box_list wow fadeIn">
							
							<figure>
								<a href="?page=detail_vote&id_kandidat=<?php echo $data['id_kandidat'] ?>&id_vote=<?php echo $data['id_vote']?>&data_user=<?php echo $id_user_vote ?>"><img src="img/<?php echo $data['cover'] ?>" class="img-fluid" alt="" />
									<div class="preview"><span>Read more</span></div>
								</a>
							</figure>
							<div class="wrapper">
								<small><?php echo $data['kategori'] ?></small>
								<h3><?php echo $data['judul_kandidat'] ?></h3>

								<p><?php //echo $data['deskripsi'] ?>
									
									<?php
									$des = $data['deskripsi']; 
									$num_char = 3;
									if ($des{$num_char - 1} != ' ') {
										$num_char = strpos($des, ' ', $num_char); // cari posisi spasi, pencarian dilakukan mulai posisi 50
									}
									echo substr($des, 0, $num_char) . '...';?>
								</p>
							</div>
							<ul>
								<li><a href="?page=edit_kandidat&id_kandidat_link=<?php echo $data['id_kandidat']?>&id_vote=<?php echo $data['id_vote']?>"><i class="icon-cog"></i>Edit</a></li>
								<li></li>
								<?php
								$id_kandidat_dis = $data['id_kandidat'];
								$id_vote_dis = $data['id_vote'];
								$sqldis = mysqli_query($conn, "SELECT * FROM tb_pilih where id_user = '$id_user_vote' and id_vote = '$id_vote_dis'");
								$cek_dis = mysqli_num_rows($sqldis);

								
								$sqlwaktu = mysqli_query($conn, "SELECT * FROM tb_vote WHERE id_vote = '$id_vote_dis'");
								$datawaktu = mysqli_fetch_array($sqlwaktu);

								$start_day = strtotime($datawaktu['start_day']);
								$end_day = strtotime($datawaktu['end_day']);
								$start_time = strtotime($datawaktu['start_time']);
								$end_time = strtotime($datawaktu['end_time']);

								$now_start_day = date("Y-m-d");
								$now_start_time = date("h:i");

								if ($now_start_day <= $end_day) {
									if ($now_start_time <= $end_time) {
										if ($cek_dis >= 1) {
											?>
												<li>
													Anda sudah memilih!
												</li>
											<?php
										} else {
											?>
												<li>
													<a href="?page=proses_vote&data_user=<?php echo $id_user_vote ?>&id_kandidat=<?php echo $data['id_kandidat'] ?>&id_vote=<?php echo $data['id_vote']?>">Vote Now !</a>
												</li>
											<?php
										}
									}
								} else {
									?>
										<li>
											vote tidak aktif!
										</li>
									<?php
								}
								?>
							</ul>
						</div>
					</div>
					<?php
					}
					?>
					<!-- /box_list -->

				</div>
			</div>
		</div>
	</div>
	</main>
</form>