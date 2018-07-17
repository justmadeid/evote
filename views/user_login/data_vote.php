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
			<h1>Daftar <strong>Vote</strong> Yang Dibuat</h1>
			<p>anda dapat melihat vote yang anda buat</p>
			<form method="post" action="" />
				<div id="custom-search-input">
					<div class="input-group">
						<input name="txt_judul_vote" type="text" class=" search-query" placeholder="judul vote" required />
						<input name="btn_tbh_vote" type="submit" class="btn_search" value="tambah" />
					</div>
				</div>
				<?php
				$text = '123457890';
				$panj = 5;
				$txtl = strlen($text)-1;
				$result = '';
				for($i=1; $i<=$panj; $i++){
				 $result .= $text[rand(0, $txtl)];
				}
				$hasil_kode = "EVO" . $result ."TE";
				$id = @$_GET['id'];
				$txt_judul_vote = trim(mysql_real_escape_string(@$_POST['txt_judul_vote']));
				$btn_tbh_vote = @$_POST['btn_tbh_vote'];
				if (isset($btn_tbh_vote)) {
					$sqlinsert = mysqli_query($conn, "INSERT INTO tb_vote VALUES ('','$txt_judul_vote','$hasil_kode','','','','','','','','$id')");
					?>
					<script type = "text/javascript">
					window.location.href="?page=data_vote&id=<?php echo $id; ?>";
					</script>
					<?php
				}
				?>
			</form>
		</div>
		<div class="row justify-content-center text-center">
			<?php
			
			$sql = mysqli_query($conn, "SELECT * FROM tb_vote WHERE id_user = '$id'");
			while ($data = mysqli_fetch_array($sql)) {
				?>
					<div class="col-lg-4">
						<div class="box_badges">
							<a onclick="return confirm('Yakin ingin Menghapus Vote ini ?')" href="?page=hapus_vote&id_vote=<?php echo $data['id_vote'] ?>&id_user=<?php echo $data['id_user'] ?>" data-toggle="tooltip" data-placement="left" data-original-title="Delete Vote" class="icon-trash-1 float-right" style="color: #E74E84"></a>
							<a href="?page=setting&id_vote=<?php echo $data['id_vote'] ?>&$id=<?php echo $data['id_user'] ?>" data-toggle="tooltip" data-placement="right" data-original-title="Setting" class="icon-cog float-left" style="color: #74D1C6"></a>
							<a href="?page=tambah_kandidat&id_vote=<?php echo $data['id_vote'] ?>&$id=<?php echo $data['id_user'] ?>" data-toggle="tooltip" data-placement="right" data-original-title="Add Kandidat" class="icon-plus float-left" style="color: #74D1C6"></a>
							<br><br>
							<div id="badge_level_1"><img src="assets/img/badges/badge_1.svg" alt="" width="100" height="100" /></div>
							<h3><?php echo $data['judul_vote'] ?></h3>
							<p><div class="text-center"><a href="?page=hasil_vote_grafik&id_vote=<?php echo $data['id_vote']; ?>" class="btn_1 medium" target="_blank"> Lihat Hasil!</a></div></p>
							<ul>
								<li><i class="icon-qrcode"></i><?php echo $data['kode'] ?></li>
							</ul>
						</div>
					</div>
				<?php
			}
			?>
			

		</div>
		<!--/row-->
	</div>
	<!-- /container -->
</main>
<!-- /main -->