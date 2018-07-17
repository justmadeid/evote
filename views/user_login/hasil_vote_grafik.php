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
			<div class="col-lg-12">
				<div class="bloglist singlepost">
					
					<?php

					$id_vote = @$_GET['id_vote'];
					$sql = mysqli_query($conn, "SELECT * FROM tb_vote WHERE id_vote = '$id_vote'");
					$data = mysqli_fetch_array($sql);

					?>
					<div id="container"></div>
					
				</div>
					<!-- /post -->
				</div>
				<!-- /single-post -->
			</div>
			<!-- /col -->
			<!-- /aside -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</main>
<!-- /main -->