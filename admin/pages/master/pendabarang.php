<?php
require 'config/function.php';
?>
<?php
if (isset($_POST["submitbar"])) {
  if (tambahbar($_POST) > 0) {
    echo "<script language='javascript'>swal('Good...', 'Data Berhasil di Input!', 'success');</script>";
  }else {
      echo "";
  }
}
elseif (isset($_POST["updatebar"])) {
  if (updatebar($_POST) > 0) {
    echo "<script language='javascript'>swal('Good...', 'Data Berhasil di Ubah!', 'success');</script>";
  }else {
    echo "<script language='javascript'>swal('Info...', 'Tidak Ada Data Yang Di Ubah!', 'info');</script>";
  }
}

?>

<section class="content">
    <div class="col-xs-12">
      <div class="callout callout-info">
        <h4>Input Data Barang</h4>
      </div>
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content" style="border-radius:5px;margin-top:100px;">
            <div class="modal-header bg-teal">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Barang</h4>
              </div>
              <form action="" method="post" enctype="multipart/form-data">
              <div class="modal-body">
                <section class="content">
                              <div class="form-group">
                                <h4>Kategori</h4>
                                  <select class="form-control select2" style="width: 100%;" name="kategori">
                                    <option selected="selected">Pilih Kategori</option>
                                    <?php
                                    $kat = query("SELECT * FROM kategori WHERE flag = 1");?>
                                    <?php foreach($kat as $row) : ?>
                                    <option value="<?php echo $row['id'] ?>"><?php echo $row["namakat"] ?></option>
                                    <?php endforeach; ?>
                                  </select>
                              </div>
                                <h4>KODE</h4>
                                  <div class="form-group input-group">
                                    <span class="input-group-addon"><li class="fa fa-barcode"></li></span>
                                    <input type="text" class="form-control" placeholder="Kode" name="kodeb" id="kodeb">
                                  </div>
                                <h4>Nama Barang</h4>
                                    <div class="form-group input-group">
                                      <span class="input-group-addon"><li class="fa fa-user"></li></span>
                                      <input type="text" class="form-control" placeholder="Nama Barang" name="nama" id="nama">
                                    </div>
                                <h4>Jumlah / Stok</h4>
                                    <div class="form-group input-group">
                                      <span class="input-group-addon"><i class="fa fa-calculator"></i></span>
                                      <input type="number" class="form-control" placeholder="Stok" name="stok" id="stok">
                                    </div>
                                <h4>Harga</h4>
                                    <div class="form-group input-group">
                                      <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                      <input type="number" class="form-control" placeholder="Harga" name="harga" id="harga">
                                    </div>
                                <h4>Keterangan</h4>
                                    <div class="form-group input-group">
                                      <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                                      <textarea type="text" class="form-control" placeholder="keterangan" name="keterangan" id="ketarangan"></textarea>
                                    </div>
                                <h4>Gambar</h4>
                                   <div class="input-group">
                                    <!-- <input type="file" class="btn btn-app-xs btn-default" name="gambar"> -->
                                    <center>
                                    <img id="uploadPreview" style="width: 30%; border-radius: 2%; margin: 1%;"></center>
                                    <input id="uploadImage" type="file" class="btn btn-app-xs btn-default" name="gambar" onchange="PreviewImage();" />
                                    </div>
              </section>
              </div>
                    <div class="modal-footer">
                      <button class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                      <button class="btn btn bg-teal" type="submit" name="submitbar">Save changes</button>
                    </div>
                    </form>
              
            </div>
          </div>
        </div>

<section class="content">
      <div class="row">
        <div class="col-xs-12">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
        Tambah Data Barang  <li class="fa fa-plus"></li>
        </button><span><br></span>
            <div class="box box-info" style="margin-top:25px;">
            <div class="box-header">
              <h3 class="box-title">Tabel Data Barang</h3><h3 class="box-title pull-right"><a href="#modal-info" data-toggle="modal" data-target="#modal-info"><li class="fa fa-info-circle" style="color: #00C0EF;"></li></a></h3> 
            </div>
            <!-- /.box-header -->
            <?php
              $tambarang = query("SELECT * FROM barang_masuk,kategori WHERE barang_masuk.kategori=kategori.id");
            ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Kategori</th>
                  <th>Kode</th>
                  <th>Nama Barang</th>
                  <th>Stok</th>
                  <th>Harga</th>
                  <th style="max-width: 15%;">Keterangan</th>
                  <th>Gambar</th>
                  <th>Options</th>
                </tr>
                </thead>
                <?php
                function konversistatus($info){
                  $status = $info;
                  $flags = array (
                    '0'=>'<span class="label label-danger" style="margin-left:10px;">Tidak TerPublish</span>',
                    '1'=>'<span class="label bg-teal" style="margin-left:10px;">TerPublish</span>'
                  );
                  echo $flags[$status];
                }
                function btnstatus($infobtn){
                  $status = $infobtn;
                  $flags = array (
                    '0'=>'<i class="fa fa-check"></i> Publish',
                    '1'=>'<i class="fa fa-minus-circle"></i> Unpublish'
                  );
                  echo $flags[$status];
                }

                function rupiah($angka){
                  $hasiljadi = "Rp. ".number_format($angka,2,',','.');
                  return $hasiljadi;
                }
                
                ?>
                <tbody>
                <?php $i = 1; $del="config/delet.php";$publish="config/publish.php";?>
                <?php foreach($tambarang as $row) : ?>
                <?php $ok = $row["flags"];
                      $rup = $row["harga"];
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["namakat"] ?></td>
                    <td><?php echo $row["kodeb"]; konversistatus($ok);?></td>
                    <td><?php echo $row["nama"] ?></td>
                    <td><?php echo $row["stok"] ?></td>
                    <td><?php echo rupiah($rup); ?></td>
                    <td><?php echo $row["keterangan"] ?></td>
                    <td><a href='#gambar_modal' data-toggle='modal' title="<?php echo $row['gambar'] ?>" data-id="<?php echo $row['kodeb'];?>"><img class="img-circle medium" src="img/<?php echo $row['gambar'] ?>" width="50px;"></a></td>
                    <td>
                        <a href='#edit_modal' class='btn btn-app-xs bg-orange' data-toggle='modal' data-id="<?php echo $row['kodeb'];?>">
                        <i class='fa fa-edit'></i> Edit </a>
                        <a href="<?php echo $publish ;?>?kodeb=<?php echo $row['kodeb'];?>&flags=<?php echo $row['flags'];?>" class="btn btn-app-xs bg-olive publish-link">
                        <?php btnstatus($ok);?>
                        </a>
                        <a href="<?php echo $del ;?>?kodeb=<?php echo $row['kodeb'];?>" class="btn btn-app-xs bg-maroon delete-link">
                        <i class="fa fa-remove"></i> Delet
                        </a>
                    </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>NO</th>
                  <th>Kategori</th>
                  <th>Kode</th>
                  <th>Nama BArang</th>
                  <th>Stock</th>
                  <th>Harga</th>
                  <th>Keterangan</th>
                  <th>Gambar</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div></div></section>
    <div class="modal fade" id="edit_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-teal">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Barang Masuk</h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data">
                    </div>
                </div>
<!--                 <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div> -->
            </div>
        </div>
    </div>
    <div class="modal fade" id="gambar_modal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-teal">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Image</h4>
                </div>
                <div class="modal-body">
                    <center>
                    <div class="hasil-data">
                    </div>
                    </center>
                </div>
<!--                 <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div> -->
            </div>
        </div>
    </div>


        <div class="modal fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius:5px;margin-top:100px;">
              <div class="modal-header bg-aqua">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Informasi Barang</h4>
              </div>
                <div class="modal-body">
                  <section class="content">
                    <div class="row">
                      <div class="col-xs-12">
                      <div class="box-body">
                          <div class="box-header">
                            <h3 class="box-title">Data Barang</h3>
                          </div>
                            <table class="table table-striped">
                              <tr>
                                <th>Barang</th>
                                <th style="width: 40px">Jumlah</th>
                              </tr>
                              <tr>
                                <td>Total Barang</td>
                                <td>
                                  <?php
                                  $bar = mysqli_query($conn,"SELECT * FROM barang_masuk");
                                  $ok = mysqli_num_rows($bar);
                                  echo "<span class='badge bg-aqua'>$ok</span>";
                                  ?>
                                </td>
                              </tr>
                              <tr>
                                <td>Barang TerPublish</td>
                                <td>
                                  <?php
                                  $bar = mysqli_query($conn,"SELECT * FROM barang_masuk WHERE flags=1");
                                  $ok = mysqli_num_rows($bar);
                                  echo "<span class='badge bg-green'>$ok</span>";
                                  ?>
                                </td>
                              </tr>
                              <tr>
                                <td>Barang Tidak Publish</td>
                                <td>
                                  <?php
                                  $bar = mysqli_query($conn,"SELECT * FROM barang_masuk WHERE flags=0");
                                  $ok = mysqli_num_rows($bar);
                                  echo "<span class='badge bg-maroon'>$ok</span>";
                                  ?>
                                </td>
                              </tr>
                            </table>
                      </div>
                      </div>
                    </div>
                  </section>
                </div>
            </div>
          </div>
        </div>


        </section>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#edit_modal').on('show.bs.modal', function (e) {
            var kodebar = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'config/detail.php',
                data :  'kodebar='+ kodebar,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#gambar_modal').on('show.bs.modal', function (e) {
            var kodegar = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'config/detail.php',
                data :  'kodegar='+ kodegar,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/jquery.validate.min.js"></script>
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

                        confirmButtonColor: "#f56954",
                        showLoaderOnConfirm: true,
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>
     <script>
        jQuery(document).ready(function($){
            $('.publish-link').on('click',function(){
                var getLink = $(this).attr('href');
                swal({
                        title: "Are you sure?",
                        text: 'Publish Or Unpublish',
                        type: "info",
                        html: true,
                        confirmButtonColor: '#30BBBB',

                        confirmButtonColor: "#30BBBB",
                        showLoaderOnConfirm: true,
                        showCancelButton: true,
                        },function(){
                        window.location.href = getLink
                    });
                return false;
            });
        });
    </script>
<script type="text/javascript">
function PreviewImage() {
var oFReader = new FileReader();
oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
oFReader.onload = function (oFREvent)
 {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
};
};
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
    <script type="text/javascript">  
    $('form').validate({
        rules: {
            nama:{
              minlength:6,
              required:true,
              maxlength:30
            },
            kodeb:{
              minlength:4,
              maxlength:15,
              required:true
            },
            stok:{
              number:true,
              minlength:1,
              maxlength:4,
              required:true
            },
            email:{
              email:true,
              required:true
            },
            harga: {
                number:true,
                minlength: 4,
                maxlength: 13,
                required: true
            },
            keterangan: {
                minlength: 6,
                maxlength: 100,
                required: false,
            },

        },
        messages: {
         nama: {
         required: "Nama tidak boleh kosong",
         maxlength: jQuery.validator.format("Nama tidak boleh lebih {0} "),
         minlength: jQuery.validator.format("Nama kurang dar {0}"),
         },
         kodeb: {
          required: "kode tidak boleh kosong",
          maxlength: jQuery.validator.format("kode tidak boleh lebih {0} "),
          minlength: jQuery.validator.format("kode kurang dar {0}"),
       },
         harga: {
          required: "kode tidak boleh kosong",
          maxlength: jQuery.validator.format("harga tidak boleh lebih {0} "),
          minlength: jQuery.validator.format("harga kurang dar {0}"),
       },
         stok: {
          required: "stok tidak boleh kosong",
          maxlength: jQuery.validator.format("stok tidak boleh lebih {0} "),
          minlength: jQuery.validator.format("stok kurang dar {0}"),
       }
         }
    });
</script>