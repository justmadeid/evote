<?php
require 'function.php';
?>
<?php
if (isset($_POST["submit"])) {
  if (tambah($_POST) > 0) {
    echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di input!', 'success');</script>";
  }else {
    echo "string";
  }
}
elseif (isset($_POST["update"])) {
  if (update($_POST) > 0) {
    echo "<script language='javascript'>swal('Selamat...', 'Data Berhasil di Ubah!', 'success');</script>";
  }else {
    echo "string";
  }
}

?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="callout callout-info">
        <h4>Input Kategori</h4>
        <form method="post" action="">
                <div class="input-group">
                <span class="input-group-addon"><li class="fa fa-barcode"></li></span>
                <input type="text" class="form-control" placeholder="Kategori" name="kategori"></div>
              <br>
                <div class="input-group">
                <button class="btn btn-app-xs bg-olive" type="submit" name="submit">
                <i class="fa fa-check"></i> Tambah Data</button>
                <button type="reset" class="btn btn-app-xs bg-maroon" onclick="deletl();" style="margin-left: 5px;">
                <i class="fa fa-remove"></i> Reset
                </button>
              </div>
          
        </form>
        </div> 
          <!-- Tabel -->
          <?php
          $kategori = tampil("SELECT * FROM kategori");
          ?>
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kategori</h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Kategori</th>
                  <th style="width: 400px">Option</th>
                </tr>
                <?php
                function konversistatus($info){
                  $status = $info;
                  $flag = array (
                    '0'=>'<span class="label label-danger" style="margin-left:10px;">Tidak TerPublish</span>',
                    '1'=>'<span class="label label-success" style="margin-left:10px;">TerPublish</span>'
                  );
                  echo $flag[$status];
                }
                ?>
                <?php $i = 1; $del="pages/master/delet.php";?>
                <?php foreach($kategori as $row) : ?>
                <?php $ok = $row["flag"]; ?>

                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row["kategori"]; konversistatus($ok);?></td>
                  <td>
                  <?php echo "<a href='#edit_modal' class='btn btn-app-xs bg-orange' data-toggle='modal' data-id=".$row['id'].">
                  <i class='fa fa-edit'></i> Edit"; ?>
                  <a class="btn btn-app-xs bg-olive" onclick="publishl();" style="margin-left: 5px;">
                  <i class="fa fa-check"></i> Publish
                  </a>
                  <a href="<?php echo $del ;?>?id=<?php echo $row['id'];?>" class="btn btn-app-xs bg-maroon delete-link">
                  <i class="fa fa-remove"></i> Delet
                  </a>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
              </tbody></table>
            </div>
          </div>
          <!-- End Tabel -->
    </div>
  </div>

    <div class="modal fade" id="edit_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kategori</h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data">
                        <form action="" method="post">
                            <input type="text" name="id" value="<?php echo $row['id']; ?>">
                            <div class="form-group">
                                <label>Kategori</label>
                                <input type="text" class="form-control" name="kategori" value="<?php echo $row['kategori']; ?>">
                            </div>
                              <button class="btn btn-primary" type="submit" name="update">Update</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>

</section>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!--   <script type="text/javascript">
    $(document).ready(function(){
        $('#edit_modal').on('show.bs.modal', function (e) {
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'pages/master/detail.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
     <script>
        jQuery(document).ready(function($){
            $('.delete-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: "Are you sure?",
                        text: 'Hapus Data?',
                        type: "warning",
                        html: true,
                        confirmButtonColor: '#d9534f',

                        confirmButtonColor: "#DD6B55",
                        showLoaderOnConfirm: true,
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>