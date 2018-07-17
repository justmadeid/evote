<?php

$id_user_vote = $data_user['id_user'];
$id_kandidat = @$_GET['id_kandidat'];
$sql_kandidat = mysqli_query($conn, "SELECT * FROM tb_vote,tb_kandidat WHERE tb_vote.id_vote = tb_kandidat.id_vote and tb_kandidat.id_kandidat = '$id_kandidat'");
$data_kandidat = mysqli_fetch_array($sql_kandidat);
?>
<?php 
function youtube($url){
	$link=str_replace('http://www.youtube.com/watch?v=', '', $url);
	$link=str_replace('https://www.youtube.com/watch?v=', '', $link);
	$data='<object width="760" height="500" data="http://www.youtube.com/v/'.$link.'" type="application/x-shockwave-flash">
	<param name="src" value="http://www.youtube.com/v/'.$link.'" />
	</object>';
	return $data;
}
 
?>
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
			
			<aside class="col-xl-3 col-lg-4" id="sidebar">
				<div class="box_profile">
					<figure>
						<img src="./img/<?php echo $data_kandidat['cover'] ?>" alt="" class="img-fluid" />
					</figure>
					<small><?php echo $data_kandidat['kategori'];?></small>
					<h1><?php echo $data_kandidat['judul_kandidat'];?></h1>
					<br>
					<ul class="contacts">
						<li><h6>Vote Akan Berakhir Pada :</h6></li>
						<li><h6> Tanggal : <?php echo $data_kandidat['end_day']; ?></h6></li>
						<li><h6> Jam : <?php echo $data_kandidat['end_time']; ?></h6></li>
					</ul>
					<div class="text-center">
						<?php
						$id_vote_dis = @$_GET['id_vote'];
						$id_user_dis = @$_GET['data_user'];
						$sqldis = mysqli_query($conn, "SELECT * FROM tb_pilih where id_user = '$id_user_dis' and id_vote = '$id_vote_dis'");
						$cek_dis = mysqli_num_rows($sqldis);


						$sqlwaktu = mysqli_query($conn, "SELECT * FROM tb_vote WHERE id_vote = '$id_vote_dis'");
						$datawaktu = mysqli_fetch_array($sqlwaktu);
						$start_day = date('Y-m-d', strtotime($datawaktu['start_day']));
						$end_day = date('Y-m-d', strtotime($datawaktu['end_day']));
						$now_day = date("Y-m-d");
						$now_day = date('Y-m-d', strtotime($now_day));


						if (($now_day >= $start_day) && ($now_day <= $end_day)) {
							if ($cek_dis >= 1) {
								?>
									Anda sudah memilih!
								<?php
							} else {
								?>
									<a href="?page=proses_vote&data_user=<?php echo $id_user_vote; ?>&id_kandidat=<?php echo $data_kandidat['id_kandidat']; ?>&id_vote=<?php echo $datawaktu['id_vote']; ?>" class="btn_1 outline" target="_blank"> Vote Now!</a>
								<?php
							}
						} else {
							?>
								<li>
									Vote tidak aktif!
								</li>
							<?php
						}

						
						?>
					</div>
				</div>
			</aside>
			<!-- /asdide -->
			
			<div class="col-xl-9 col-lg-8">

				<div class="tabs_styled_2">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="book-tab" data-toggle="tab" href="#book" role="tab" aria-controls="book">Foto dan Video</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-expanded="true">Info Umum</a>
						</li>
					</ul>
					<!--/nav-tabs -->

					<div class="tab-content">

						<div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
							<form />
								<div class="main_title_3">
									<h3><strong>1</strong>Gambar Wisata</h3>
								</div>
								<div class="form-group add_bottom_45">
									<img src="img/<?php echo $data_kandidat['gambar'];?>" alt="" class="img-fluid" />
								</div>
								<div class="main_title_3">
									<h3><strong>2</strong>Video Wisata</h3>
								</div>
								<div class="row add_bottom_45">
									<div class="col-md-3 col-6">
										<?php //echo $data_kandidat['video'];?>
										<?php
											$vid = $data_kandidat['video'];
											echo youtube("https://www.youtube.com/watch?v=$vid");
										?>
									</div>
								</div>
								<!-- /row -->
								
								<div class="main_title_3">
									<h3><strong>3</strong>Peta Wisata</h3>
								</div>
								<div class="row">
									<div class="col-md-12 col-12">
										<iframe src="<?php echo $data_kandidat['maps'];?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
										<iframe style="visibility: hidden;" src="<?php echo $data_kandidat['maps'];?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>
								</div>

							</form>					
							<hr />
							<p class="text-center">
								<?php
								if ($cek_dis >= 1) {
									?>
									Anda sudah memilih
									<?php
								} else {
									?>
									<a href="?page=proses_vote&data_user=<?php echo $id_user_vote; ?>&id_kandidat=<?php echo $data_kandidat['id_kandidat']; ?>" class="btn_1 medium">Vote Now</a>
									<?php
								}
								?>
								
							</p>
						</div>
						<!-- /tab_1 -->
						
						<div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
							<p class="lead add_bottom_30">Deskripsi</p>
							<div class="indent_title_in">
								<i class="pe-7s-user"></i>
								<h3>Deskripsi</h3>
								<p><?php echo $data_kandidat['judul_kandidat'];?></p>
							</div>
							<div class="wrapper_indent">
								<p><?php echo $data_kandidat['deskripsi'];?></p>
								<!-- /row-->
							</div>
							<!-- /wrapper indent -->
							
							<hr />

						</div>
						<!-- /tab_2 -->
						<!-- /tab_3 -->
					</div>
					<!-- /tab-content -->
				</div>
				<!-- /tabs_styled -->
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>