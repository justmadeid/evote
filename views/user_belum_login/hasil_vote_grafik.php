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
					<script src="https://code.highcharts.com/highcharts.js"></script>
					<script src="https://code.highcharts.com/modules/data.js"></script>
					<script src="https://code.highcharts.com/modules/drilldown.js"></script>
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