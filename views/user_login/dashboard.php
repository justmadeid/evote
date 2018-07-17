<?php

$id = @$_GET['id'];
$sqlid = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user = '$id'");
$dataid = mysqli_fetch_array($sqlid);

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
	
	<div class="container margin_60_35">
		<div class="main_title">
			<h1>Dashboard <strong>User</strong></h1>
			<p></p>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<a href="#0" class="box_cat_home">
					<i class="icon-info-4"></i>
					<figure><img src="assets/img/avatar1.jpg" alt="" style="border-radius: 50%" /></figure>
					<h3><?php echo $dataid['nm_lengkap'];?></h3>
					<ul class="clearfix">
						<li><strong>a</strong>a</li>
						<li><strong>a</strong>a</li>
					</ul>
				</a>
			</div>

			<div class="col-lg-4 col-md-8">
				<a href="?page=data_vote&id=<?php echo $dataid['id_user'];?>" class="box_cat_home">
					<i class="icon-info-4"></i>
					<img src="assets/img/icon_cat_8.svg" width="60" height="60" alt="" />
					<h3>Buat Vote</h3>
					<?php
					$sqlvote = mysqli_query($conn, "SELECT * FROM tb_vote WHERE id_user = '$id'");
					$jumlahvote = mysqli_num_rows($sqlvote);
					?>
					<ul class="clearfix">
						<li><strong><?php echo $jumlahvote; ?></strong>Vote</li>
					</ul>
				</a>
			</div>
			<div class="col-lg-4 col-md-8">
				<a href="?page=voting_history&id=<?php echo $dataid['id_user'];?>" class="box_cat_home">
					<i class="icon-info-4"></i>
					<img src="assets/img/icon_cat_2.svg" width="60" height="60" alt="" />
					<h3>Voting History</h3>
					<?php
					$sqlcount = mysqli_query($conn, "SELECT * FROM tb_pilih WHERE id_user = '$id'");
					$jumlahcount = mysqli_num_rows($sqlcount);
					?>
					<ul class="clearfix">
						<li><strong>Memilih</strong><?php echo $jumlahcount; ?> Vote</li>
					</ul>
				</a>
			</div>
			<div class="col-lg-4 col-md-8">
				<a href="?page=home" class="box_cat_home">
					<i class="icon-info-4"></i>
					<img src="assets/img/icon_cat_8.svg" width="60" height="60" alt="" />
					<h3>Voting</h3>
					<ul class="clearfix">
						<li><strong></strong></li>
						<li><strong></strong></li>
					</ul>
				</a>
			</div>
			<div class="col-lg-12 col-md-12">
				<a href="#0" class="box_cat_home">
					<h3>SetUp P</h3>
				</a>
			</div>
		</div>
		<!--/row-->
	</div>
	<!-- /container -->
</main>
<!-- /main -->