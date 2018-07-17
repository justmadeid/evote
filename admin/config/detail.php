
<?php
error_reporting(0);
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
                <input type="text" class="form-control" name="namakat" value="<?php echo $result['namakat']; ?>">
            </div>

              <!-- <button class="btn btn-primary" type="submit" name="update">Update  <i class="fa fa-save"></i></button> -->
                                    <div class="modal-footer">
                      <button class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button class="btn btn-danger"  type="submit" name="update">Save changes</button>
                    </div>   
        </form>
        <?php } }

        elseif ($_POST["kodecus"]) {
            $kode = $_POST["kodecus"];      
            $sql = mysqli_query($conn,"SELECT * FROM customer WHERE kode = '$kode'");
            while ($result = mysqli_fetch_assoc($sql)){
            ?>
            <form action="" method="post">

                  <h4>KODE</h4>
                              <div class="input-group">
                                <span class="input-group-addon"><li class="fa fa-barcode"></li></span>
                                <input type="text" readonly="" class="form-control" name="kode" placeholder="Kode" value="<?php echo $result['kode']; ?>">
                              </div>
                  <h4>Nama</h4>
                              <div class="input-group">
                                <span class="input-group-addon"><li class="fa fa-user"></li></span>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $result['nama']; ?>">
                              </div>
                  <h4>Email</h4>
                              <div class="input-group">
                                <span class="input-group-addon"><li class="fa  fa-envelope"></li></span>
                                <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $result['email']; ?>">
                              </div>
                  <h4>Almat</h4>

                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $result['alamat']; ?>">
                              </div>
                  <h4>Phone</h4>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="number" class="form-control" name="telp" placeholder="No Hp" value="<?php echo $result['telp']; ?>">
                              </div>
                  <h4>Keterangan</h4>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                                <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan"><?php echo $result['keterangan']; ?></textarea>
                              </div>
                              <br>
<!--                               <div class="input-group">
                                <button class="btn btn-primary" type="submit" name="updatecus">Update  <i class="fa fa-save"></i></button>
                            </div> -->
                      <div class="modal-footer">
                      <button class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button class="btn btn bg-olive"  type="submit" name="updatecus">Save changes</button>
                    </div>   
            </form>     
            <?php } }


        elseif ($_POST["kodesup"]) {
            $kode = $_POST["kodesup"];      
            $sql = mysqli_query($conn,"SELECT * FROM supplier WHERE kodes = '$kode'");
            while ($result = mysqli_fetch_assoc($sql)){
            ?>
            <form action="" method="post">

                  <h4>KODE</h4>
                              <div class="input-group">
                                <span class="input-group-addon"><li class="fa fa-barcode"></li></span>
                                <input type="text" readonly="" class="form-control" name="kodes" placeholder="Kode" value="<?php echo $result['kodes']; ?>">
                              </div>
                  <h4>Nama</h4>
                              <div class="input-group">
                                <span class="input-group-addon"><li class="fa fa-user"></li></span>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?php echo $result['nama']; ?>">
                              </div>
                  <h4>Email</h4>
                              <div class="input-group">
                                <span class="input-group-addon"><li class="fa  fa-envelope"></li></span>
                                <input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $result['email']; ?>">
                              </div>
                  <h4>Almat</h4>

                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?php echo $result['alamat']; ?>">
                              </div>
                  <h4>Phone</h4>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="number" class="form-control" name="telp" placeholder="No Hp" value="<?php echo $result['telp']; ?>">
                              </div>
                  <h4>Keterangan</h4>
                              <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                                <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan"><?php echo $result['keterangan']; ?></textarea>
                              </div>
                              <br>
<!--                               <div class="input-group">
                                <button class="btn btn-primary" type="submit" name="updatesup">Update  <i class="fa fa-save"></i></button>
                            </div> -->
                      <div class="modal-footer">
                      <button class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button class="btn btn bg-orange"  type="submit" name="updatesup">Save changes</button>
                    </div>  
            </form>     
            <?php } }

        elseif ($_POST["kodebar"]) {
            $kode = $_POST["kodebar"];      
            $sql = mysqli_query($conn,"SELECT * FROM barang_masuk WHERE kodeb = '$kode'");
            while ($result = mysqli_fetch_assoc($sql)){
            ?>
            <form action="" method="post" enctype="multipart/form-data">

                                <h5>Kategori</h5>
                                <div class="form-group">
                                  <select class="form-control" name="kategori">
                                    <?php
                                    $nm = mysqli_query($conn,"SELECT * FROM barang_masuk,kategori WHERE barang_masuk.kategori=kategori.id AND kodeb = '$kode'");
                                    $rek = mysqli_fetch_assoc($nm);
                                    echo "
                                    <option value=$rek[id]>$rek[namakat]</option>";
                                    ?>
                                    <?php
                                    $kat = mysqli_query($conn,"SELECT * FROM kategori WHERE flag = 1");
                                    while ($re = mysqli_fetch_assoc($kat)){
                                    ?>
                                    
                                    <option value="<?php echo $re['id'] ?>"><?php echo $re["namakat"] ?></option>
                                    <?php }?>
                                  </select>
                              </div>
                                <h5>KODE</h5>
                                  <div class="input-group">
                                    <span class="input-group-addon"><li class="fa fa-barcode"></li></span>
                                    <input type="text" class="form-control" placeholder="Kode" readonly="" name="kodeb" value="<?php echo $result['kodeb']; ?>">
                                  </div>
                                <h5>Nama Barang</h5>
                                    <div class="input-group">
                                      <span class="input-group-addon"><li class="fa fa-user"></li></span>
                                      <input type="text" class="form-control" placeholder="Nama Barang" name="nama" value="<?php echo $result['nama']; ?>">
                                    </div>
                                <h5>Jumlah / Stok</h5>
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                      <input type="text" class="form-control" placeholder="Stok" name="stok" value="<?php echo $result['stok']; ?>">
                                    </div>
                                <h5>Harga</h5>
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                      <input type="text" class="form-control" placeholder="Harga" name="harga" value="<?php echo $result['harga']; ?>">
                                    </div>
                                <h5>Keterangan</h5>
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                                      <textarea class="form-control" placeholder="keterangan" name="keterangan"><?php echo $result['keterangan']; ?></textarea>
                                    </div>
                                <div class="input-group">
                                    <center>
                                    <img style="width: 40%; border-radius: 2%; margin: 1%;" src="img/<?php echo $result['gambar']; ?>">
                                </center>
                                    <input type="hidden" class="form-control" placeholder="Harga" name="gambarlama" value="<?php echo $result['gambar']; ?>">
                                </div>
                                   <div class="input-group btn btn-default" style="margin-bottom: 1%;">
                                    <input type="file" class="btn btn-app-xs" name="gambar" value="Upload Gambar">
                                    </div>
<!--                                 <div class="input-group">
                                <button class="btn btn-primary" type="submit" name="updatebar">Update  <i class="fa fa-save"></i></button>
                            </div> -->
                      <div class="modal-footer">
                      <button class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button class="btn btn bg-teal"  type="submit" name="updatebar">Save changes</button>
                    </div>
            </form>     
            <?php } }


        elseif ($_POST["kodegar"]) {
            $kode = $_POST["kodegar"];      
            $sql = mysqli_query($conn,"SELECT * FROM barang_masuk WHERE kodeb = '$kode'");
            while ($result = mysqli_fetch_assoc($sql)){
            ?>
            <form action="" method="post">

                                <div class="input-group">
                                    <center>
                                    <img style="width: 100%; border-radius: 2%;" src="img/<?php echo $result['gambar']; ?>">
                                </center>
                                </div>

<!--                       <div class="modal-footer">
                      <button class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                    </div>   --> 
            </form>     
            <?php } }



        else{
            echo "string";
        }            
?>