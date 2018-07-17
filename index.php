<?php
@session_start();
include "config/_koneksi.php";
if(@$_SESSION['user']){
	if(@$_SESSION['user']) {
		$user_terlogin = @$_SESSION['user'];
	}
	$sql_user = mysqli_query($conn, "select * from tb_user where id_user = $user_terlogin") or die (mysqli_error());
	$data_user = mysqli_fetch_array($sql_user);
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

	<link href="assets/css/blog.css" rel="stylesheet" />
    
	<!-- YOUR CUSTOM CSS -->
	<link href="assets/css/custom.css" rel="stylesheet" />
    
	<!-- YOUR CUSTOM CSS -->
	<link href="assets/css/custom.css" rel="stylesheet" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

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
						<li id="user">
							<a href="?page=dashboard&id=<?php echo $data_user['id_user']; ?>">
								<figure><img src="assets/img/avatar1.jpg" alt="" /></figure>
								<?php
								echo $data_user['nm_lengkap'];
								?>
							</a>
						</li>
					</ul>
					<div class="main-menu">
						<ul>
							<li><a href="?page=home">Home</a></li>
							<li><a href="config/logout.php">Logout</a></li>
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
		include "views/user_login/home.php";
	} else if(@$_GET['page'] == "vote") {
		include "views/user_login/vote.php";
	} else if(@$_GET['page'] == "detail_vote") {
		include "views/user_login/detail_vote.php";
	} else if(@$_GET['page'] == "proses_vote") {
		include "views/user_login/proses_vote.php";
	} else if(@$_GET['page'] == "succ") {
		include "views/user_login/succ.php";
	} else if(@$_GET['page'] == "dashboard") {
		include "views/user_login/dashboard.php";
	} else if(@$_GET['page'] == "data_vote") {
		include "views/user_login/data_vote.php";
	} else if(@$_GET['page'] == "tambah_kandidat") {
		include "views/user_login/tambah_kandidat.php";
	} else if(@$_GET['page'] == "hapus_vote") {
		include "views/user_login/hapus_vote.php";
	} else if(@$_GET['page'] == "hasil_vote_grafik") {
		include "views/user_login/hasil_vote_grafik.php";
	} else if(@$_GET['page'] == "voting_history") {
		include "views/user_login/voting_history.php";
	} else if(@$_GET['page'] == "setting") {
		include "views/user_login/setting.php";
	} else if(@$_GET['page'] == "edit_kandidat") {
		include "views/user_login/edit_kandidat.php";
	}
	?>
	<!-- /main content -->
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
	<script src="assets/highcharts/highcharts.js"></script>
	<script src="assets/highcharts/modules/data.js"></script>
	<script src="assets/highcharts/modules/drilldown.js"></script>
	<script type="text/javascript">
		
		// Create the chart
		Highcharts.chart('container', {
		    chart: {
		        type: 'column'
		    },
		    title: {
		        text: 'Hasil vote <?php echo $data['judul_vote']; ?>'
		    },
		    subtitle: {
		        text: ''
		    },
		    xAxis: {
		        type: 'category'
		    },
		    yAxis: {
		        title: {
		            text: 'Jumlah voter yang memilih'
		        }

		    },
		    legend: {
		        enabled: false
		    },
		    plotOptions: {
		        series: {
		            borderWidth: 0,
		            dataLabels: {
		                enabled: true,
		                format: '{point.y:.1f}%'
		            }
		        }
		    },

		    tooltip: {
		        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
		        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
		    },

		    "series": [

		    	<?php
		    	$sql_kandidat = mysqli_query($conn, "SELECT * FROM tb_kandidat WHERE id_vote = '$id_vote'");
		    	while ($data_kandidat = mysqli_fetch_array($sql_kandidat)) 
		    	{
		    		$ambil_id_kandidat = $data_kandidat['id_kandidat'];
		    		$tampiljumlahkandidat = mysqli_query($conn, "SELECT * FROM tb_pilih WHERE id_kandidat = '$ambil_id_kandidat'");
					$countkandidat = mysqli_num_rows($tampiljumlahkandidat);
		    		$tampiljumlahseluruh = mysqli_query($conn, "SELECT * FROM tb_pilih WHERE id_vote = '$id_vote'");
					$countseluruh = mysqli_num_rows($tampiljumlahseluruh);
					$hitungpersen = ($countkandidat * 100 ) / $countseluruh;
		    	?>

		        {
		            "name": "Kandidat",
		            "colorByPoint": true,
		            "data": [
		                {
		                    "name": "<?php echo $data_kandidat['judul_kandidat']; ?>",
		                    "y": <?php echo $hitungpersen; ?>,
		                    "drilldown": "<?php echo $data_kandidat['judul_kandidat']; ?>"
		                }
		            ]
		        },

		        <?php
		    	}
		        ?>

		    ]
		});
	</script>

</body>

</html>
<?php
} else {
	header("location: home.php");
}
?>