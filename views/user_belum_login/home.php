<main>
	<div class="hero_home version_2">
		<div class="content">
			<h3>FIND A VOTE</h3>
			<p>
				Lakukan vote dengan mudah hanya dengan sebuah kode
			</p>
			<form method="post" action="" />
				<div id="custom-search-input">
					<div class="input-group">
						<input type="text" name="txt_cari" class=" search-query" placeholder="Ex. EVO87290TE" />
						<input type="submit" name="btn_cari" class="btn_search" value="Search" />
					</div>
				</div>
				<?php
				$txt_cari = @$_POST['txt_cari'];
				$btn_cari = @$_POST['btn_cari'];
				if (isset($btn_cari)) {
					?>
					<script type = "text/javascript">
					window.location.href="?page=vote&kode=<?php echo $txt_cari; ?>";
					</script>
					<?php
				}
				?>
			</form>
		</div>
	</div>
	<!-- /Hero -->

	<div class="container margin_120_95">
		<div class="main_title">
			<h2>Lakukan <strong>online</strong> Voting</h2>
			<p>Anda dapat menciptakan dan melakukan voting dengan mudah, cukup dengan registrasi</p>
		</div>
		<div class="row add_bottom_30">
			<div class="col-lg-4">
				<div class="box_feat" id="icon_1">
					<span></span>
					<h3>Voting Code</h3>
					<p>Masukan Kode voting untuk dapat melakukan voting</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="box_feat" id="icon_2">
					<span></span>
					<h3>View Description</h3>
					<p>Bandingkan pilihan dengan melihat deskripsi masing-masing</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="box_feat" id="icon_3">
					<h3>Vote !</h3>
					<p>Lakukan voting sesuai dengan pilihan anda</p>
				</div>
			</div>
		</div>
		<!-- End row -->
		<p class="text-center"><a href="?page=register" class="btn_1 medium">Register!</a></p>
	</div>
</main>