<?php
$id_vote = @$_GET['id_vote'];
$id_user = @$_GET['data_user'];
$id_kandidat = @$_GET['id_kandidat'];
$sql_kandidat = mysqli_query($conn, "SELECT * FROM tb_vote WHERE id_vote = '$id_vote'");
$sql_kandidat_data = mysqli_fetch_array($sql_kandidat);
$start_day = date('Y-m-d', strtotime($sql_kandidat_data['start_day']));
$end_day = date('Y-m-d', strtotime($sql_kandidat_data['end_day']));
$now_day = date("Y-m-d");
$now_day = date('Y-m-d', strtotime($now_day));

if (($now_day >= $start_day) && ($now_day <= $end_day)) {
	$sql = mysqli_query($conn, "INSERT INTO tb_pilih VALUES ('','$id_user','$id_kandidat','$id_vote')");
	?>
		<script type = "text/javascript">
		window.location.href="?page=succ";
		</script>
	<?php	

} else {
	?>
		<script type = "text/javascript">
		alert("Anda tidak bisa Vote!");
		window.history.back();
		</script>
	<?php
	
}