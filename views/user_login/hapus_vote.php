<?php
$id_user = @$_GET['id_user'];
$id_vote = @$_GET['id_vote'];
$tampil = mysqli_query($conn, "SELECT * FROM tb_kandidat WHERE id_vote = '$id_vote'");
$data = mysqli_fetch_array($tampil);
$dir = "img/";
unlink($dir.$data['cover']);
unlink($dir.$data['gambar']);
$sqlhapuspilih = mysqli_query($conn, "DELETE FROM tb_pilih WHERE id_vote = '$id_vote'");
$sqlhapuskandidat = mysqli_query($conn, "DELETE FROM tb_kandidat WHERE id_vote = '$id_vote'");
$sqlhapusvote = mysqli_query($conn, "DELETE FROM tb_vote WHERE id_vote = '$id_vote'");
?>
<script type = "text/javascript">
	alert("Vote berhasil di hapus!");
	window.location.href="?page=data_vote&id=<?php echo $id_user; ?>";
</script>