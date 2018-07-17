<?php
$kode = @$_GET['kode'];
$sql = mysqli_query($conn, "SELECT * FROM tb_vote,tb_kandidat WHERE tb_vote.id_vote = tb_kandidat.id_vote and tb_vote.kode = '$kode'");
$sqljudul = mysqli_query($conn, "SELECT * FROM tb_vote,tb_kandidat WHERE tb_vote.id_vote = tb_kandidat.id_vote and tb_vote.kode = '$kode'");
$judul = mysqli_fetch_array($sqljudul);
$cek = mysqli_num_rows($sql);
if ($cek < 1) {
	?>
	<main>
        <div id="error_page">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-7 col-lg-9">
                        <h2>404 <i class="icon_error-triangle_alt"></i></h2>
                        <p>Maaf Voting Tidak Ditemukan</p>
                        <form method="post" action="">
                            <div class="search_bar_error">
                                <input type="text" name="txt_cari" class="form-control" placeholder="What are you looking for?">
                                <input type="submit" name="btn_cari" value="Search">
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
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /error_page -->
    </main>
	<?php
} else {
?>
<main>
   <div id="results">
       <div class="container">
           <div class="row ">
               <div class="col-md-6">
                   <h4><strong>Showing For</strong> <?php echo $judul['judul_vote']; ?></h4><h6>(<?php echo $kode; ?>)</h6>
               </div>
               <div class="col-md-6">
                    <div class="search_bar_list">
                    <input type="text" class="form-control" placeholder="Cari Vote" />
                    <input type="submit" value="Search" />
                </div>
               </div>
           </div>
           <!-- /row -->
       </div>
       <!-- /container -->
   </div>
   <!-- /results -->

	<div class="container margin_60_35">
		<div class="row">
			<?php



			?>
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
								<h2><?php echo $data['judul_kandidat'] ?></h2>

								<p><?php
								// $des = $data['deskripsi']; 
								// echo $des;
								
								?>
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
								<li><a href="?page=detail_vote&id_kandidat=<?php echo $data['id_kandidat'] ?>&id_vote=<?php echo $data['id_vote']?>&data_user=<?php echo $id_user_vote ?>"><i class="icon-angle-right"></i>Detail</a></li>
								<li></li>
								<?php
								$id_kandidat_dis = $data['id_kandidat'];
								$id_vote_dis = $data['id_vote'];
								$sqldis = mysqli_query($conn, "SELECT * FROM tb_pilih where id_user = '$id_user_vote' and id_vote = '$id_vote_dis'");
								$cek_dis = mysqli_num_rows($sqldis);

								
								$sqlwaktu = mysqli_query($conn, "SELECT * FROM tb_vote WHERE id_vote = '$id_vote_dis'");
								$datawaktu = mysqli_fetch_array($sqlwaktu);
								
								$start_day = date('Y-m-d', strtotime($datawaktu['start_day']));
								$end_day = date('Y-m-d', strtotime($datawaktu['end_day']));
								$now_day = date("Y-m-d");
								$now_day = date('Y-m-d', strtotime($now_day));

								if ($cek_dis >= 1) {
									?>
										<li>
											Anda telah memilih!
										</li>
									<?php
								} else {
									if (($now_day >= $start_day) && ($now_day <= $end_day)) {
										?>
											<li>
												<a href="?page=proses_vote&data_user=<?php echo $id_user_vote ?>&id_kandidat=<?php echo $data['id_kandidat'] ?>&id_vote=<?php echo $data['id_vote']?>">Vote Now !</a>
											</li>
										<?php
									} else {
										?>
											<li>
												Vote tidak aktif!
											</li>
										<?php
										
									}
									
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
				<?php

				$sqltampilid_vote = mysqli_query($conn, "SELECT * FROM tb_vote WHERE kode = '$kode'");
				$datasqltampilid_vote = mysqli_fetch_array($sqltampilid_vote);

				?>
				<p class="text-center"><a href="?page=hasil_vote_grafik&id_vote=<?php echo $datasqltampilid_vote['id_vote']; ?>" class="btn_1 medium">Quick Count!</a></p>
			</div>
			<!-- /col -->			
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
	</main>
	<?php
	}
	?>