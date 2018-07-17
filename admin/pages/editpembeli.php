    <section class="content">
    	<div class="row">
        	<div class="col-xs-12">

      <div class="callout callout-info">
        <h4>Nota Pembelian</h4>
          <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Cari Nota">
          </div>
          <br>
          <div class="input-group">
                <a class="btn btn-app-xs bg-olive" onclick="cari();" style="text-decoration: none">
                <i class="fa fa-search"></i> Cari
                </a><span>   </span>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();" style="text-decoration: none">
                <i class="fa fa-remove"></i> Delet
                </a>
          </div>
      </div>
    </div></div>
    		            <!-- Input addon -->


        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <div class="row">
        <div class="col-md-12">

                <form></form>
                <div class="form-group">
                  <h6>Supplier</h6>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <h6>Kategori</h6>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>
                <div class="form-group">
                  <h6>Nama Barang</h6>
                  <select class="form-control">
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                  </select>
                </div>

       <section class="content">
                <div class="col-xs-12">
          <div class="box box-danger">
            <div class="box-header with-border">
              <i class="fa fa-image"></i>

              <h3 class="box-title">Gambar</h3>
            </div>
            <!-- /.box-header -->
              <div class="input-group"><center>
                <img class="img-responsive pad col-xs-12" src="img/photo2.png" alt="Photo"></center>
              </div>
              
            <!-- /.box-body -->
          </div></div>
          <!-- /.box -->
              </section>
                <h6>Stok</h6>
              <div class="input-group">
                <span class="input-group-addon"><li class="fa fa-calculator"></li></span>
                <input type="text" class="form-control" placeholder="50" disabled>
              </div>
              
                
                <h6>Harga</h6>
              <div class="input-group">
                <span class="input-group-addon"><li class="fa fa-money"></li></span>
                <input type="text" class="form-control" placeholder="Rp. 00" disabled>
              </div>
              
              <h6>Phone</h6>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plus-square-o"></i></span>
                <input type="number" class="form-control" placeholder="Jumlah">
              </div>
                
              <h6>Keterangan</h6>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                <textarea type="text" class="form-control" placeholder="Keterangan"></textarea>
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
        <!-- /.col -->
        <!-- /.col -->
      </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>          

      <div class="row">
        <div class="col-xs-12">  
          <div class="box box-success">
            <div class="box-header">
                 <div class="callout callout-success">
        <h4>Nota Pembelian NO : </h4>
      </div> 
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              <table class="table table-hover">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Kategori</th>
                  <th>Suplier</th>
                  <th>Kode</th>
                  <th>Nama BArang</th>
                  <th>Stock</th>
                  <th>Harga</th>
                  <th>Keterangan</th>
                  <th>Gambar</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Kamera</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                <td>
                    5
                    </td>
                    <td>Rp. 10.000.000</td>
                    <td>Mantap</td>
                   <td><img class="img-circle small" src="user.png" alt="User Avatar" width="50px;"></td>
                  <td>
                <a class="btn btn-app-xs bg-orange" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Edit
                </a>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Delet
                </a>
                    </td>
                </tr>
                <tr>
                  <td>2</td>
                    <td>HandPhone</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.0
                  </td>
                  <td>Win 95+</td>
                  <td>5</td>
                     <td>Rp. 7.000.000</td>
                    <td>Lecet Pemakaian</td>
                    <td><img class="img-circle small" src="user.png" alt="User Avatar" width="50px;"></td>
                                    <td>
                <a class="btn btn-app-xs bg-orange" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Edit
                </a>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Delet
                </a>
                    </td>
                </tr>
                <tr>
                  <td>3</td>
                    <td>Laptop</td>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 5.5
                  </td>
                  <td>Win 95+</td>
                  <td>5.5</td>
                   <td>Rp. 15.000.000</td>
                    <td>Oke</td>
                    <td><img class="img-circle small" src="user.png" alt="User Avatar" width="50px;"></td>
                <td>
                <a class="btn btn-app-xs bg-orange" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-edit"></i> Edit
                </a>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Delet
                </a>
                    </td>
                </tr>
                
                </tbody>
                <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th>Total</th>
                  <th>Rp. 35.000.000</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            <br>
            <div class="box box-warning col-xs-12">
            	<div class="box-body">
                <div class="col-xs-6">
              <h4>No Nota</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="text" class="form-control" placeholder="Email">
              </div>
                
              <h4>Keterangan</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="date" class="form-control" placeholder="Email">
              </div>

                            <div class="form-group">
                <h4>Tanggal Beli</h4>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>

<br>
          <div class="input-group">
                <a class="btn btn-app-xs bg-olive" onclick="save();">
                <i class="fa fa-save"></i> Publish
                </a><span>   </span>
                <a class="btn btn-app-xs bg-maroon" onclick="deletl();">
                <i class="fa fa-remove"></i> Delet
                </a>
          </div>
                <!-- /.input group -->
              </div>

              <br>
            	</div>
            </div>
        </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <script type="text/javascript">
                  function cari(){
        swal("Berhasil", "Data di Temukan", "info");
    }
    </script>
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
            function save(){
        swal("Berhasil", "Data Berhasil Di Simpan", "success");
    }
</script>