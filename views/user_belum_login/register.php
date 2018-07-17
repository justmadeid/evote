<main>
	<div class="bg_color_2">
		<div class="container margin_60_35">
			<div id="register">
				<h1>Please register to Vote</h1>
				<div class="row justify-content-center">
					<div class="col-md-5">
						<form method="post" action="">
							<div class="box_form">
								<div class="form-group">
									<label>Name lengkap</label>
									<input type="text" name="nm_lengkap" class="form-control" placeholder="Nama lengkap" required />
								</div>
								<div class="form-group">
									<label>Tempat lahir</label>
									<input type="text" name="tpt_lahir" class="form-control" placeholder="Tempat lahir" required />
								</div>
								<div class="form-group"> <!-- Date input -->
							        <label class="control-label" for="date">Tanggal lahir</label>
							        <input class="form-control" name="tgl_lahir" id="date"  placeholder="MM/DD/YYY" type="text"/>
							    </div>
								<div class="form-group">
									<label>Alamat</label>
									<input type="text" name="alamat" class="form-control" placeholder="Alamat" required />
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control" placeholder="Alamat Email" required />
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control" id="password1" required placeholder="Your password" />
								</div>
								<div class="form-group">
									<label>Confirm password</label>
									<input type="password" name="repassword" class="form-control" id="password2" required placeholder="Confirm password" />
								</div>
								<div id="pass-info" class="clearfix"></div>
								<div class="form-group text-center add_top_30">
									<input class="btn_1" type="submit" name="register" value="Submit" />
								</div>
								<?php
								$nm_lengkap = trim(mysql_real_escape_string(@$_POST['nm_lengkap']));
								$tpt_lahir = trim(mysql_real_escape_string(@$_POST['tpt_lahir']));
								$tgl_lahir = trim(mysql_real_escape_string(@$_POST['tgl_lahir']));
								$alamat = trim(mysql_real_escape_string(@$_POST['alamat']));
								$email = trim(mysql_real_escape_string(@$_POST['email']));
								$password = trim(mysql_real_escape_string(@$_POST['password']));
								$repassword = trim(mysql_real_escape_string(@$_POST['repassword']));
								$register = @$_POST['register'];
								if (isset($register)) {
									if ($repassword <> $password) {
										?>
											<script type = "text/javascript">
											alert("Confrim password harus sama dengan password!");
											</script>
										<?php
									} else {
										$password = password_hash($password, PASSWORD_DEFAULT);
										$sql = mysqli_query($conn, "INSERT INTO tb_user VALUES ('','$nm_lengkap','$tpt_lahir','$tgl_lahir','$alamat','$email','$password','1')");
										?>
										<script type = "text/javascript">
										alert("Anda berhasil register, sekarang ada bisa login kembali");
										window.location.href="?page=login";
										</script>
										<?php
									}
								}
								?>
							</div>
							<p class="text-center"><small></small></p>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /register -->
		</div>
	</div>
</main>