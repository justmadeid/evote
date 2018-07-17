<!--
<section class="content">
  <div class="row">
    <div class="col-xs-12">
--><section class="content">
    <div class="col-xs-12">
      <div class="callout callout-success">
        <h4>Data Customer!</h4>
      </div>
    </div>
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius:5px;margin-top:100px;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">FORM CUSTOMER</h4>
              </div>
              <div class="modal-body col-sm-12">
                <section class="content">
<div class="row">
  <div class="col-xs-12">
        <div class="col-md-6">
          <div class="box box-info">
            <div class="box-header with-border">
              <i class="fa fa-edit"></i>

              <h3 class="box-title">Edit Penjualan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form></form>
                <div class="form-group">
                  <h4>Kategori</h4>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <h4>Nama Barang</h4>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <h4>Stok</h4>
              <div class="input-group">
                <span class="input-group-addon"><li class="fa fa-calculator"></li></span>
                <input type="text" class="form-control" placeholder="50" disabled>
              </div>
              
                
                <h4>Harga</h4>
              <div class="input-group">
                <span class="input-group-addon"><li class="fa fa-money"></li></span>
                <input type="text" class="form-control" placeholder="Rp. 00" disabled>
              </div>
              
              <h4>Phone</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plus-square-o"></i></span>
                <input type="number" class="form-control" placeholder="Jumlah">
              </div>
                
              <h4>Keterangan</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                <textarea type="text" class="form-control" placeholder="Keterangan" style="min-width: 750px; max-width: 750px; min-height: 100px; "></textarea>
              </div>
              <br>

          <div class="input-group">
                <a class="btn btn-app-xs bg-olive" onclick="tam();">
                <i class="fa fa-caret-square-o-down"></i> Tambahkan
                </a><span>   </span>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Reset
                </a>
          </div>

          </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
          <div class="box box-danger">
            <div class="box-header with-border">
              <i class="fa fa-image"></i>

              <h3 class="box-title">Gambar</h3>
            </div>
            <!-- /.box-header -->
              <div class="input-group">
                <img class="img-responsive pad col-xs-12" src="img/photo2.png" alt="Photo">
              </div>
              
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col --></div>
      </div></section>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" onclick="test();" class="btn btn-info"><li class="fa fa-save"></li> Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<!--        </div></div></section>-->







    <section class="content">
      <div class="row">
        <div class="col-xs-12">
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
        Tambah Customer &nbsp<li class="fa fa-plus"></li>
        </button><span><br></span>
            <div class="box box-success" style="margin-top:25px;">
            <div class="box-header">
              <h3 class="box-title">Data Customer</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Phones</th>
                  <th>Keterangan</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>F0002</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                <td>
                    5
                    </td>
                  <td>
                <a class="btn btn-app-xs bg-orange" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Edit
                </a>
                <a class="btn btn-app-xs bg-olive" onclick="publishl();">
                <i class="fa fa-check"></i> Publish
                </a>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Delet
                </a>
                    </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>F0003</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                <td>
                <a class="btn btn-app-xs bg-orange" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Edit
                </a>
                <a class="btn btn-app-xs bg-olive" onclick="publishl();">
                <i class="fa fa-check"></i> Publish
                </a>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Delet
                </a>
                    </td>
                </tr>
                <tr>
                <td>3</td>
                <td>F0004</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                                    <td>
                <a class="btn btn-app-xs bg-orange" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Edit
                </a>
                <a class="btn btn-app-xs bg-olive" onclick="publishl();">
                <i class="fa fa-check"></i> Publish
                </a>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Delet
                </a>
                    </td>
                </tr>
                <tr>
                                        <td>4</td>
                    <td>F0005</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 6
                  </td>
                  <td>Win 98+</td>
                  <td>6</td>
                                    <td>
                <a class="btn btn-app-xs bg-orange" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Edit
                </a>
                <a class="btn btn-app-xs bg-olive" onclick="publishl();">
                <i class="fa fa-check"></i> Publish
                </a>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Delet
                </a>
                    </td>
                </tr>
                <tr>
                                        <td>5</td>
                    <td>F0006</td>
                  <td>Trident</td>
                  <td>Internet Explorer 7</td>
                  <td>Win XP SP2+</td>
                  <td>7</td>
                                    <td>
                <a class="btn btn-app-xs bg-orange" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Edit
                </a>
                <a class="btn btn-app-xs bg-olive" onclick="publishl();">
                <i class="fa fa-check"></i> Publish
                </a>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Delet
                </a>
                    </td>
                </tr>
                <tr>
                                        <td>6</td>
                    <td>F0007</td>
                  <td>Trident</td>
                  <td>AOL browser (AOL desktop)</td>
                  <td>Win XP</td>
                  <td>6</td>
                                    <td>
                <a class="btn btn-app-xs bg-orange" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Edit
                </a>
                <a class="btn btn-app-xs bg-olive" onclick="publishl();">
                <i class="fa fa-check"></i> Publish
                </a>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Delet
                </a>
                    </td>
                </tr>
                <tr>
                                        <td>7</td>
                    <td>F0008</td>
                  <td>Gecko</td>
                  <td>Firefox 1.0</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.7</td>
                                    <td>
                <a class="btn btn-app-xs bg-orange" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Edit
                </a>
                <a class="btn btn-app-xs bg-olive" onclick="publishl();">
                <i class="fa fa-check"></i> Publish
                </a>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Delet
                </a>
                    </td>
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th>NO</th>
                  <th>Kode</th>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div></div></section></section>
<script type="text/javascript">
function test(){
            swal({
                            title: "Konfirmasi Simpan Data",
                            text: "Data Akan di Simpan Ke Database",
                            type: "info",
                            showCancelButton: true,
                            confirmButtonColor: "#1da1f2",
                            confirmButtonText: "Yakin, dong!",
                            closeOnConfirm: false,
                            showLoaderOnConfirm: true,
                  }, function () { //apabila sweet alert d confirm maka akan mengirim data ke simpan.php melalui proses ajax
                    $.ajax({
                        url: "simpan.php",
                        type: "POST",
                        data: $('#formInput').serialize(), //serialize() untuk mengambil semua data di dalam form
                        dataType: "html",
                        success: function(){                
                              setTimeout(function(){
                                swal({
                                  title:"Data Berhasil Disimpan",
                                  text: "Terimakasih",
                                  type: "success"
                                }, function(){
                                  window.location="tampil.php";
                                });
                              }, 2000);
                            },
                        error: function (xhr, ajaxOptions, thrownError) {
                            setTimeout(function(){
                                swal("Mantap", "Data sukses di simpan", "success");
                              }, 2000);}
        });
              });
}
        function deletl(){
                    swal({
                            title: "Konfirmasi Hapus Data",
                            text: "Data Akan di Hapus dari Database",
                            type: "error",
                            showCancelButton: true,
                            confirmButtonColor: "#1da1f2",
                            confirmButtonText: "Yakin, dong!",
                            closeOnConfirm: false,
                            showLoaderOnConfirm: true,
                  }, function () { //apabila sweet alert d confirm maka akan mengirim data ke simpan.php melalui proses ajax
                    $.ajax({
                        url: "simpan.php",
                        type: "POST",
                        data: $('#formInput').serialize(), //serialize() untuk mengambil semua data di dalam form
                        dataType: "html",
                        success: function(){                
                              setTimeout(function(){
                                swal({
                                  title:"Data Berhasil DIhapus",
                                  text: "Terimakasih",
                                  type: "success"
                                }, function(){
                                  window.location="tampil.php";
                                });
                              }, 2000);
                            },
                        error: function (xhr, ajaxOptions, thrownError) {
                            setTimeout(function(){
                                swal("DATA DELETED!", "DATA TERHAPUS", "warning");
                              }, 2000);}
        });
              });
    }
            function publishl(){
        swal("Berhasil", "Data Berhasil Di Publish", "info");
    }
</script>