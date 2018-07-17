<!--
<section class="content">
	<div class="row">
		<div class="col-xs-12">
--><section class="content">
    <div class="col-xs-12">
      <div class="callout callout-warning">
        <h4>Data Supplier!</h4>
      </div>
    </div>
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content" style="border-radius:5px;margin-top:100px;">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">FORM SUPPLIER</h4>
              </div>
              <div class="modal-body">
                <section class="content">
	<div class="row">
		<div class="col-xs-12">
            
            
            <!-- Input addon -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Input Supplier</h3>
            </div>
            <div class="box-body">
                <form></form>
                <h4>KODE</h4>
              <div class="input-group">
                <span class="input-group-addon"><li class="fa fa-barcode"></li></span>
                <input type="text" class="form-control" placeholder="Kode">
              </div>
              
                
                <h4>Nama</h4>
              <div class="input-group">
                <span class="input-group-addon"><li class="fa fa-user"></li></span>
                <input type="text" class="form-control" placeholder="Nama">
              </div>
              

              <h4>Almat</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map"></i></span>
                <input type="text" class="form-control" placeholder="Alamat">
              </div>
              
              <h4>Phone</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input type="number" class="form-control" placeholder="No Hp">
              </div>
                
              <h4>Keterangan</h4>

              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                <textarea type="text" class="form-control" placeholder="Keterangan" style="min-width: 485px; max-width: 485px; min-height: 100px; "></textarea>
              </div>
              <br>
<!--
            <div class="input-group">
                <input type="submit" class="btn btn-primary btn-lg" value="KIRIM"><span>   </span>
                <input type="reset" class="btn btn-danger btn-lg" value="KIRIM">
                </div>
-->
                
                <br>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div></div></section>
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
            <div class="box box-warning" style="margin-top:25px;">
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