<?php
require 'config/function.php';
?>
<?php
if (isset($_POST["submit"])) {
  if (tambah($_POST) > 0) {
    echo "<script language='javascript'>swal('Good', 'Insert Data Sucessfuly!', 'success');</script>";
  }else {
    echo "";
  }
}
elseif (isset($_POST["update"])) {
  if (update($_POST) > 0) {
    echo "<script language='javascript'>swal('Good', 'Data Sucsessfuly to Change!', 'success');</script>";
  }else {
    echo "<script language='javascript'>swal('Info', 'No Data Was Change!', 'info');</script>";
  }
}

?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
        <div class="callout callout-danger" style="background: #f1c40f;">
        <h4>Input Kategori</h4>
        <form method="post" action="">
                <div class="input-group">
                <span class="input-group-addon"><li class="fa fa-barcode"></li></span>
                <input type="text" class="form-control" placeholder="Kategori" name="namakat"></div>
              <br>
                <div class="input-group">
                <button class="btn btn-app-xs bg-green" type="submit" name="submit">
                <i class="fa fa-check"></i> Tambah Data</button>
                <button type="reset" class="btn btn-app-xs bg-gray" onclick="deletl();" style="margin-left: 5px;">
                <i class="fa fa-remove"></i> Reset
                </button>
              </div>
          
        </form>
        </div> 
          <!-- Tabel -->
          <?php
          $kategori = query("SELECT * FROM kategori");
          ?>
          <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Data Kategori</h3><h3 class="box-title pull-right"><a href="#modal-info" data-toggle="modal" data-target="#modal-info"><li class="fa fa-info-circle" style="color: #00C0EF;"></li></a></h3> 
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
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
                    '1'=>'<span class="label bg-teal" style="margin-left:10px;">TerPublish</span>'
                  );
                  echo $flag[$status];
                }
                function btnstatus($infobtn){
                  $status = $infobtn;
                  $flag = array (
                    '0'=>'<i class="fa fa-check"></i> goPublish',
                    '1'=>'<i class="fa fa-minus-circle"></i> Unpublish'
                  );
                  echo $flag[$status];
                }
                ?>
                <?php $i = 1; $del="config/delet.php";$publish="config/publish.php";?>
                <?php foreach($kategori as $row) : ?>
                <?php $ok = $row["flag"]; ?>

                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row["namakat"]; konversistatus($ok);?></td>
                  <td>
                  <?php echo "<a href='#edit_modal' class='btn btn-app-xs bg-orange' data-toggle='modal' data-id=".$row['id'].">
                  <i class='fa fa-edit'></i> Edit"; ?>
                  <a href="<?php echo $publish ;?>?id=<?php echo $row['id'];?>&flag=<?php echo $row['flag'];?>" class="btn btn-app-xs bg-olive publish-link" style="margin-left: 5px;">
                  <?php btnstatus($ok);?>
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
                <div class="modal-header" style="background: #DD4B39; color: #fff;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Kategori</h4>
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
                  <h4 class="modal-title">Informasi Kategori</h4>
              </div>
                <div class="modal-body">
                  <section class="content">
                    <div class="row">
                      <div class="col-xs-12">
                      <div class="box-body">
                          <div class="box-header">
                            <h3 class="box-title">Data Kategori</h3>
                          </div>
                            <table class="table table-striped">
                              <tr>
                                <th>Kategori</th>
                                <th style="width: 40px">Jumlah</th>
                              </tr>
                              <tr>
                                <td>Total Kategori</td>
                                <td>
                                  <?php
                                  $bar = mysqli_query($conn,"SELECT * FROM kategori");
                                  $ok = mysqli_num_rows($bar);
                                  echo "<span class='badge bg-aqua'>$ok</span>";
                                  ?>
                                </td>
                              </tr>
                              <tr>
                                <td>Kategori TerPublish</td>
                                <td>
                                  <?php
                                  $bar = mysqli_query($conn,"SELECT * FROM kategori WHERE flag=1");
                                  $ok = mysqli_num_rows($bar);
                                  echo "<span class='badge bg-green'>$ok</span>";
                                  ?>
                                </td>
                              </tr>
                              <tr>
                                <td>Kategori Tidak Publish</td>
                                <td>
                                  <?php
                                  $bar = mysqli_query($conn,"SELECT * FROM kategori WHERE flag=0");
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
            var idx = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'config/detail.php',
                data :  'idx='+ idx,
                success : function(data){
                $('.hasil-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
  </script>
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