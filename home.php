<?php
@session_start();
include "config/_koneksi.php";
if(@$_SESSION['user']){
	header("location:index.php");
} else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title></title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" type="image/x-icon" href="assets/img/apple-touch-icon-57x57-precomposed.png" />
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72-precomposed.png" />
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114-precomposed.png" />
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144-precomposed.png" />

	<!-- BASE CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link href="assets/css/menu.css" rel="stylesheet" />
	<link href="assets/css/vendors.css" rel="stylesheet" />
	<link href="assets/css/icon_fonts/css/all_icons_min.css" rel="stylesheet" />
    
	<!-- YOUR CUSTOM CSS -->
	<link href="assets/css/custom.css" rel="stylesheet" />

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--  jQuery -->

	<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
	<link rel="stylesheet" href="assets/datetimepicker/bootstrap-iso.css" />

	<!-- Bootstrap Date-Picker Plugin -->
	<link rel="stylesheet" href="assets/datetimepicker/bootstrap-datepicker3.css"/>
</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

	<header class="header_sticky">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo_home">
						<h1><a href="index.html" title="Search Vote">Search Vote</a></h1>
					</div>
				</div>
				<nav class="col-lg-9 col-6">
					<a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="#0"><span>Menu mobile</span></a>
					<ul id="top_access">
						<li><a href="?page=login"><i class="pe-7s-user"></i></a></li>
						<li><a href="?page=register"><i class="pe-7s-add-user"></i></a></li>
					</ul>
					<div class="main-menu">
						<ul>
							<li><a href="?page=home">Home</a></li>
						</ul>
					</div>
					<!-- /main-menu -->
				</nav>
			</div>
		</div>
		<!-- /container -->
	</header>
	<!-- /header -->	
	<?php
	if(@$_GET['page'] == "" || @$_GET['page'] == "home") {
		include "views/user_belum_login/home.php";
	} else if(@$_GET['page'] == "vote") {
		include "views/user_belum_login/vote.php";
	} else if(@$_GET['page'] == "detail_vote") {
		include "views/user_belum_login/detail_vote.php";
	} else if(@$_GET['page'] == "login") {
		include "views/user_belum_login/login.php";
	} else if(@$_GET['page'] == "register") {
		include "views/user_belum_login/register.php";
	} else if(@$_GET['page'] == "hasil_vote_grafik") {
		include "views/user_belum_login/hasil_vote_grafik.php";
	} 
	?>
	<footer>
		<div class="container margin_60_35">
			<hr />
			<div class="row">
				<div class="col-md-8">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<div id="copy">© 2018 Vote</div>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="../cdn-cgi/scripts/84a23a00/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-2.2.4.min.js"></script>
	<script src="assets/js/common_scripts.min.js"></script>
	<script src="assets/js/functions.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- Include Date Range Picker -->
	<script type="text/javascript" src="assets/datetimepicker/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="assets/datetimepicker/bootstrap-datepicker3.css"/>

	<script>
    $(document).ready(function(){
	      var date_input=$('input[name="tgl_lahir"]'); //our date input has the name "date"
	      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
	      var options={
	        format: 'mm/dd/yyyy',
	        container: container,
	        todayHighlight: true,
	        autoclose: true,
	      };
	      date_input.datepicker(options);
	    })
	</script>
</body>

</html>
<?php
}
?>