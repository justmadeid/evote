
<?php
error_reporting(1);
$conn = mysqli_connect('localhost', 'root', '', 'projectkelas');
    if($_POST["kodecus"]) {
        $kode = $_POST["kodecus"];      
        $sql = mysqli_query($conn,"SELECT * FROM customer WHERE kode = '$kode'");
        while ($result = mysqli_fetch_assoc($sql)){
        ?>
        <form action="" method="post">
            <input type="hidden" name="kode" value="<?php echo $result['kode']; ?>">
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $result['nama']; ?>">
            </div>

              <button class="btn btn-primary" type="submit" name="updatecus">Update  <i class="fa fa-save"></i></button>
        </form>     
        <?php } }
?>