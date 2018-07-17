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
		<div class="main_title">
			<h1>Voting History</h1>
			<p>Daftar Voting yang pernah anda lakukan, anda dapat melihat hasil akhir voting</p>
		</div>
		<div class="row">
			<div class="col-lg-9">
				<?php
				$id_user = @$_GET['id'];
				$sql = mysqli_query($conn, "SELECT * FROM tb_pilih WHERE id_user = '$id_user'");
				while ($data = mysqli_fetch_array($sql)) {
					?>
						<article class="blog wow fadeIn">
							<div class="row no-gutters">
								<?php
								$sqlkandidatpilihuser = $data['id_kandidat'];
								$sqlkandidatq = mysqli_query($conn, "SELECT * FROM tb_kandidat WHERE id_kandidat = '$sqlkandidatpilihuser'");
								$datakandidatq = mysqli_fetch_array($sqlkandidatq);

								$id_vote_dis = $datakandidatq['id_vote'];

								$sqlvote = mysqli_query($conn, "SELECT * FROM tb_vote WHERE id_vote = '$id_vote_dis'");
								$datavote = mysqli_fetch_array($sqlvote);

								$id_user_dis = $datavote['id_user'];

								$sqluser = mysqli_query($conn, "SELECT * FROM tb_user WHERE id_user = '$id_user_dis'");
								$datauser = mysqli_fetch_array($sqluser);

								?>
								<div class="col-lg-7">
									<figure>
										<a href="?page=hasil_vote_grafik&id_vote=<?php echo $datakandidatq['id_vote'];?>"><img width="100%" src="img/<?php echo $datakandidatq['cover'];?>" alt="" /><div class="preview"><span>Read more</span></div></a>
									</figure>
								</div>
								<div class="col-lg-5">
									<div class="post_info">
										<h3><a href="">Vote <?php echo $datavote['judul_vote']; ?></a></h3>
										<p><?php echo $datavote['deskripsi']; ?></p>
										<ul>
											<li>
												<div class="thumb" style="top: 5px;"><img src="./img/thumb_blog.jpg" alt="" /></div><sup>vote Create by: </sup><br/> <?php echo $datauser['nm_lengkap']; ?>
											</li>
											<li><a href="?page=hasil_vote_grafik&id_vote=<?php echo $datakandidatq['id_vote'];?>"><img src="" class="icon-right-open"> Detail</a></li>
										</ul>
									</div>
								</div>
							</div>
						</article>
						<!-- /article -->
					<?php
				}
				?>
			</div>
			<!-- /col -->
			
			<aside class="col-lg-3">
				<div class="widget">
					<form />
						<div class="form-group">
							<input type="text" name="search" id="search" class="form-control" placeholder="Search..." />
						</div>
						<button type="submit" id="submit" class="btn_1"> Search</button>
					</form>
				</div>
				<!-- /widget -->

				<div class="widget">
					<!--<div class="widget-title">
						<h4>Blog Categories</h4>
					</div>
					<ul class="cats">
						<li><a href="#">Treatments <span>(12)</span></a></li>
						<li><a href="#">News <span>(21)</span></a></li>
						<li><a href="#">Events <span>(44)</span></a></li>
						<li><a href="#">New treatments <span>(09)</span></a></li>
						<li><a href="#">Focus in the lab <span>(31)</span></a></li>
					</ul>
				</div>-->
				<!-- /widget -->
				
			</aside>
			<!-- /aside -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!-- /main -->