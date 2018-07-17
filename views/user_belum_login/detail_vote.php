<?php
$id_kandidat = @$_GET['id_kandidat'];
$sql_kandidat = mysqli_query($conn, "SELECT * FROM tb_vote,tb_kandidat WHERE tb_vote.id_vote = tb_kandidat.id_vote and tb_kandidat.id_kandidat = '$id_kandidat'");
$data_kandidat = mysqli_fetch_array($sql_kandidat);
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
						<img src="./img/1nc.jpg" alt="" class="img-fluid" />
					</figure>
					<small><?php echo $data_kandidat['kategori'];?></small>
					<h1><?php echo $data_kandidat['judul_kandidat'];?></h1>
					<span class="rating">
						<a href="#" data-toggle="tooltip" data-placement="top" data-original-title="Vote Terbanyak" class="badge_list_1"><img src="./img/badges/badge_1.svg" width="15" height="15" alt="" />  </a><small>Vote 145</small>
					</span>
					<ul class="statistic">
						<li>200 Views</li>
						<li>250 Voter</li>
					</ul>
					<ul class="contacts">
						<li><h6>Vote Akan Berakhir Pada :</h6></li>
						<li><h4>00 : 12 : 59</h4></li>
					</ul>
					<div class="text-center"><a href="?page=login" class="btn_1 outline" target="_blank"> Vote Now!</a></div>
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
								<div class="row justify-content-center add_bottom_45">
									<div class="col-md-3 col-6 text-center">
										<?php echo $data_kandidat['video'];?>
									</div>
								</div>
								<!-- /row -->
								
								<div class="main_title_3">
									<h3><strong>3</strong>Peta Wisata</h3>
								</div>
								<div class="row justify-content-center add_bottom_45">
									<div class="col-md-3 col-6 text-center">
										<?php echo $data_kandidat['maps'];?>
									</div>
								</div>

							</form>					
							<hr />
							<p class="text-center"><a href="?page=login" class="btn_1 medium">Vote Now</a></p>
						</div>
						<!-- /tab_1 -->
						
						<div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
							<p class="lead add_bottom_30">Deskripsi</p>
							<div class="indent_title_in">
								<i class="pe-7s-user"></i>
								<h3>Fasilitas</h3>
								<p><?php echo $data_kandidat['judul_kandidat'];?></p>
							</div>
							<div class="wrapper_indent">
								<p><?php echo $data_kandidat['fasilitas'];?></p>
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