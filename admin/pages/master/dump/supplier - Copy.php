<?php
require 'config/function.php';
?>
<?php
if (isset($_POST["submitsup"])) {
  if (tambahsup($_POST) > 0) {
    echo "<script language='javascript'>swal('Good...', 'Data Berhasil di Input!', 'success');</script>";
  }else {
    echo "<script language='javascript'>swal('Maaf...', 'Data Sudah Ada! / Kosong', 'error');</script>";
  }
}
elseif (isset($_POST["updatesup"])) {
  if (updatesup($_POST) > 0) {
    echo "<script language='javascript'>swal('Good...', 'Data Berhasil di Ubah!', 'success');</script>";
  }else {
    echo "<script language='javascript'>swal('Info...', 'Tidak Ada Data Yang di Ubah!', 'info');</script>";
  }
}

?>
<section class="content">
    <div class="col-xs-12">
      <div class="callout callout-warning">
        <h4>Data Supplier!</h4>
      </div>
    </div>
<?php
  $carikode = mysqli_query($conn, "SELECT kodes from supplier") or die (mysqli_error());
  $datakode = mysqli_fetch_array($carikode);
  $jumlah_data = mysqli_num_rows($carikode);
  if ($datakode) {
   $nilaikode = substr($jumlah_data[0], 1);
   $kode = (int) $nilaikode;
   $kode = $jumlah_data + 1;
   $kode_otomatis = "SPL".str_pad($kode, 3 , "0", STR_PAD_LEFT);

  } else {
   $kode_otomatis = "SPL001";
  }
?>
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius:5px;margin-top:100px;">
              <div class="modal-header bg-orange">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">FORM SUPPLIER</h4>
              </div>
            <form action="" method="post" role="form" id="form">
              <div class="modal-body">
                <section class="content">
                  <div class="row">
                    <div class="col-xs-12">
                    <div class="box-body">
                  <h4>KODE</h4>
                              <div class="input-group">
                                <span class="input-group-addon"><li class="fa fa-barcode"></li></span>
                                <?php echo'
                                <input type="text" readonly="" class="form-control" name="kodes" placeholder="Kode" value="'.$kode_otomatis.'">';
                                ?>
                              </div>
                  <h4>Nama</h4>
                              <div class="input-group has-feedback">
                                <span class="input-group-addon"><li class="fa fa-user"></li></span>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" id="nama">
                              </div>
                  <h4>Email</h4>
                              <div class="input-group has-feedback">
                                <span class="input-group-addon"><li class="fa  fa-envelope"></li></span>
                                <input type="text" class="form-control" name="email" placeholder="email" id="email">
                              </div>
                  <h4>Almat</h4>

                              <div class="input-group has-feedback">
                                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" id="alamat">
                              </div>
                  <h4>Phone</h4>
                              <div class="input-group has-feedback">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="number" class="form-control" name="telp" placeholder="No Hp" id="telp">
                              </div>
                  <h4>Keterangan</h4>
                              <div class="input-group has-feedback">
                                <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                                <textarea type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" style="min-width: 485px; max-width: 485px; min-height: 100px; "></textarea>
                              </div>
                    </div>
                  </div>
                </div>
              </section>
              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                <button class="btn btn bg-orange" type="submit" name="submitsup"><li class="fa fa-save"></li> Simpan</button>  
                              </div>
                            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        <button type="button" class="btn btn bg-orange" data-toggle="modal" data-target="#modal-default">
        Tambah Supplier &nbsp<li class="fa fa-plus"></li>
        </button><span><br></span>
            <div class="box box-warning" style="margin-top:25px;">
            <div class="box-header">
              <h3 class="box-title">Data Supplier</h3>
            </div>
            <?php
            $supplier = tampilsup("SELECT * FROM supplier");
            ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Phones</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                function konversistatus($info){
                  $status = $info;
                  $flag = array (
                    '0'=>'<span class="label label-danger" style="margin-left:10px;">Tidak TerPublish</span>',
                    '1'=>'<span class="label bg-teal" style="margin-left:10px;">TerPublish</span>'
                  );
                  echo $flag[$status];
                }
                function btnstatus($infobtn){
                  $status = $infobtn;
                  $flag = array (
                    '0'=>'<i class="fa fa-check"></i> Publish',
                    '1'=>'<i class="fa fa-minus-circle"></i> Unpublish'
                  );
                  echo $flag[$status];
                }
                ?>
                <?php $i = 1; $del="config/delet.php";$publish="config/publish.php";?>
                <?php foreach($supplier as $row) : ?>
                <?php $ok = $row["flag"]; ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["kodes"]; konversistatus($ok);?></td>
                    <td><?php echo $row["nama"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["alamat"] ?></td>
                    <td><?php echo $row["telp"] ?></td>
                    <td><?php echo $row["keterangan"] ?></td>
                    <td>
                  <a href='#edit_modal' class='btn btn-app-xs bg-orange' data-toggle='modal' data-id="<?php echo $row['kodes'];?>">
                  <i class='fa fa-edit'></i> Edit </a>
                        <a href="<?php echo $publish ;?>?kodes=<?php echo $row['kodes'];?>&flag=<?php echo $row['flag'];?>" class="btn btn-app-xs bg-olive publish-link">
                        <?php btnstatus($ok);?>
                        </a>
                        <a href="<?php echo $del ;?>?kodes=<?php echo $row['kodes'];?>" class="btn btn-app-xs bg-maroon delete-link">
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
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Keterangan</th>
                  <th>Telp</th>
                  <th>Action</th>
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
                <div class="modal-header bg-orange">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Supplier</h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data">
                    </div>
                </div>
            </div>
        </div>
    </div>
        </section>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#edit_modal').on('show.bs.modal', function (e) {
            var kodesup = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'config/detail.php',
                data :  'kodesup='+ kodesup,
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
    $('form').validate({
        rules: {
            nama:{
              minlength:3,
              required:true
            },
            alamat:{
              minlength:6,
              required:true
            },
            email:{
              email:true,
              required:true
            },
            telp: {
                minlength: 6,
                maxlength: 12,
                required: true
            },
            keterangan: {
                minlength: 6,
                maxlength: 15,
                required: true,
            },

        }
    });
</script>