
<?php
$conn = mysqli_connect('localhost', 'root', '', 'projectkelas');
    if($_POST['idx']) {
        $id = $_POST['idx'];      
        $sql = mysqli_query($conn,"SELECT * FROM kategori WHERE id = $id");
        while ($result = mysqli_fetch_assoc($sql)){
        ?>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" value="<?php echo $result['kategori']; ?>">
            </div>

              <button class="btn btn-primary" type="submit" name="update">Update</button>
        </form>     
        <?php } }
?>