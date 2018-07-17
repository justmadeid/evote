<main>
	<div class="bg_color_2">
		<div class="container margin_60_35">
			<div id="login-2">
				<h1>Please login to Vote</h1>
				<form method="post" action="">
					<div class="box_form clearfix">
						<div class="box_login">
							<a href="#0" class="social_bt facebook">Login with Facebook</a>
							<a href="#0" class="social_bt google">Login with Google</a>
							<a href="#0" class="social_bt linkedin">Login with Linkedin</a>
						</div>
						<div class="box_login last">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Your email address" required />
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Your password" required />
								<a href="#0" class="forgot"><small>Forgot password?</small></a>
							</div>
							<div class="form-group">
								<input class="btn_1" type="submit" name="login" value="Login" />
							</div>
							<div class="form-group">
								<?php
								$email = trim(mysql_real_escape_string(@$_POST['email']));
								$password = trim(mysql_real_escape_string(@$_POST['password']));
								$login = @$_POST['login'];
								if (isset($login)) {
									$final = mysqli_query($conn, "SELECT * FROM tb_user where email = '$email'");
									if ( mysqli_num_rows($final) === 1 ) {
									      $row = mysqli_fetch_assoc($final);
									      if ( password_verify($password, $row["password"]) ){
									// $data = mysqli_fetch_array($sql);
									// $cek = mysqli_num_rows($sql);
										@$_SESSION['user'] = $row['id_user'];
										header("location: index.php");
										exit;
									}
								}
									else {
										?>
										<script type = "text/javascript">
										alert("Login gagal!");
										</script>
										<?php
									}
								}
								?>
							</div>
						</div>
					</div>
				</form>
				<p class="text-center link_bright">Do not have an account yet? <a href="#0"><strong>Register now!</strong></a></p>
			</div>
			<!-- /login -->
		</div>
	</div>
</main>