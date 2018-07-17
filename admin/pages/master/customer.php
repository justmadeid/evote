<?php
require 'config/function.php';
?>
<?php
if (isset($_POST["submitcus"])) {
  if (tambahcus($_POST) > 0) {
    echo "<script language='javascript'>swal('Good', 'Data Saved!', 'success');</script>";
  }else {
    echo "";
  }
}
elseif (isset($_POST["updatecus"])) {
  if (updatecus($_POST) > 0) {
    echo "<script language='javascript'>swal('Good...', 'Data Berhasil di Ubah!', 'success');</script>";
  }else {
    echo "<script language='javascript'>swal('Info...', 'Tidak Ada Data Yang di Ubah!', 'info');</script>";
  }
}

?>
<section class="content">
    <div class="col-xs-12">
      <div class="callout callout-success">
        <h4>Data User!</h4>
      </div>
    </div>
<?php
//$query = "SELECT max(kode) as maxKode FROM customer";
//$hasil = mysqli_query($conn, $query);
//$data  = mysqli_fetch_array($hasil);
//$kodeBarang = $data['maxKode'];
//$noUrut = (int) substr($kodeBarang, 3, 3);
//$noUrut++;
//$char = "CUS";
//$newID = $char . sprintf("%03s", $noUrut);
?>
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius:5px;margin-top:100px;">
              <div class="modal-header bg-olive">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">FORM User</h4>
              </div>
            <form action="" method="post" role="form" id="form">
              <div class="modal-body">
                <section class="content">
                  <div class="row">
                    <div class="col-xs-12">
                    <div class="box-body">
                  <h4>KODE</h4>
                              <div class="form-group input-group">
                                <span class=" input-group-addon"><li class="fa fa-barcode"></li></span>
                                <input type="text" readonly="" class="form-control" name="kode" placeholder="Kode" value="<?php echo $newID ?>">
                              </div>
                  <h4>Nama</h4>
                              <div class="form-group input-group has-feedback">
                                <span class="input-group-addon"><li class="fa fa-user"></li></span>
                                <input type="text" class="form-control" name="nama" placeholder="Nama" id="nama">
                              </div>
                  <h4>Email</h4>
                              <div class="form-group input-group has-feedback">
                                <span class="input-group-addon"><li class="fa  fa-envelope"></li></span>
                                <input type="text" class="form-control" name="email" placeholder="email" id="email">
                              </div>
                  <h4>Almat</h4>

                              <div class="form-group input-group has-feedback">
                                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat" id="alamat">
                              </div>
                  <h4>Phone</h4>
                              <div class="form-group input-group has-feedback">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input type="number" class="form-control" name="telp" placeholder="No Hp" id="telp">
                              </div>
                  <h4>Keterangan</h4>
                              <div class="form-group input-group has-feedback">
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
                                <button class="btn btn bg-olive" type="submit" name="submitcus"><li class="fa fa-save"></li> Simpan</button>  
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
        <button type="button" class="btn btn bg-olive" data-toggle="modal" data-target="#modal-default">
        Tambah User &nbsp<li class="fa fa-plus"></li>
        </button><span><br></span>
            <div class="box box-success" style="margin-top:25px;">
            <div class="box-header">
              <h3 class="box-title">Data User</h3><h3 class="box-title pull-right"><a href="#modal-info" data-toggle="modal" data-target="#modal-info"><li class="fa fa-info-circle" style="color: #00C0EF;"></li></a></h3> 
            </div>
            <?php
            $customer = query("SELECT * FROM tb_user");
            ?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama</th>
                  <th>TTL</th>
                  <th>Email</th>
                  <th>Alamat</th>
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
                <?php foreach($customer as $row) : ?>
                <?php $ok = $row["flag"]; ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["nm_lengkap"]; ?></td>
                    <td><?php echo $row["tempat_lahir"]." ".$row["tanggal_lahir"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["alamat"] ?></td>
                    <td>
                  <a href='#edit_modal' class='btn btn-app-xs bg-orange' data-toggle='modal' data-id="<?php echo $row['kode'];?>">
                  <i class='fa fa-edit'></i> Edit </a>
                        <a href="<?php echo $publish ;?>?kode=<?php echo $row['kode'];?>&flag=<?php echo $row['flag'];?>" class="btn btn-app-xs bg-olive publish-link">
                        <?php btnstatus($ok);?>
                        </a>
                        <a href="<?php echo $del ;?>?kode=<?php echo $row['kode'];?>" class="btn btn-app-xs bg-maroon delete-link">
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
                  <th>Nama</th>
                  <th>TTL</th>
                  <th>Email</th>
                  <th>Alamat</th>
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
                <div class="modal-header bg-olive">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">User</h4>
                </div>
                <div class="modal-body">
                    <div class="hasil-data">
                    </div>
                </div>
            </div>
        </div>
    </div>


        <div class="modal fade" id="modal-info">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius:5px;margin-top:100px;">
              <div class="modal-header bg-aqua">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Informasi User</h4>
              </div>
                <div class="modal-body">
                  <section class="content">
                    <div class="row">
                      <div class="col-xs-12">
                      <div class="box-body">
                          <div class="box-header">
                            <h3 class="box-title">Data User</h3>
                          </div>
                            <table class="table table-striped">
                              <tr>
                                <th>User</th>
                                <th style="width: 40px">Jumlah</th>
                              </tr>
                              <tr>
                                <td>Total User</td>
                                <td>
                                  <?php
                                  $bar = mysqli_query($conn,"SELECT * FROM tb_user");
                                  $ok = mysqli_num_rows($bar);
                                  echo "<span class='badge bg-aqua'>$ok</span>";
                                  ?>
                                </td>
                              </tr>
                              <tr>
                                <td>User TerPublish</td>
                                <td>
                                  <?php
                                  $bar = mysqli_query($conn,"SELECT * FROM tb_user WHERE flag=1");
                                  $ok = mysqli_num_rows($bar);
                                  echo "<span class='badge bg-green'>$ok</span>";
                                  ?>
                                </td>
                              </tr>
                              <tr>
                                <td>User Tidak Publish</td>
                                <td>
                                  <?php
                                  $bar = mysqli_query($conn,"SELECT * FROM tb_user WHERE flag=0");
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
            var kodecus = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'config/detail.php',
                data :  'kodecus='+ kodecus,
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
              minlength:6,
              required:true,
              maxlength:30
            },
            alamat:{
              minlength:6,
              maxlength:100,
              required:true
            },
            email:{
              email:true,
              required:true
            },
            telp: {
                minlength: 10,
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
         required: "Password tidak boleh kosong",
         maxlength: jQuery.validator.format("Nama tidak boleh lebih {0} "),
         minlength: jQuery.validator.format("Nama kurang dar {0}"),
         },
         alamat: {
          required: "Alamat tidak boleh kosong",
          maxlength: jQuery.validator.format("Alamat tidak boleh lebih {0} "),
          minlength: jQuery.validator.format("Alamat kurang dar {0}"),
       },
         email: {
          required: "Ex : madegarda@gmail.com",
       },
         telp: {
          required: "Telp tidak boleh kosong",
          maxlength: jQuery.validator.format("Telp tidak boleh lebih {0} "),
          minlength: jQuery.validator.format("Telp kurang dar {0}"),
       }
         }
    });
</script>