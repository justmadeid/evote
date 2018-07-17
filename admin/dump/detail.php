<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "modal";

    mysql_connect($server,$username,$password) or die("Koneksi gagal");
    mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
<?php
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysql_query("SELECT * FROM kategori WHERE id = $id");
        while ($result = mysql_fetch_array($sql)){
		?>
        <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" class="form-control" name="kategori" value="<?php echo $result['kategori']; ?>">
            </div>
              <button class="btn btn-primary" type="submit">Update</button>
        </form>     
        <?php } }
?>
<script type="text/javascript">
    
</script>