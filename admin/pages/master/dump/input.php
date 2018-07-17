<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
	<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   	<script type="text/javascript" src="js/sweetalert2.min.js"></script>
    <script src="js/sweetalert.min.js"></script>                
  	<script src="js/sweetalert-dev.js"></script> 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>  
</head>
	<body>
		<div class="container">
			<div class="col-lg-8 col-lg-offset-2 col-sm-6 col-sm-offset-2">
			<h1 style="text-align: center;">Form Inputan</h1>
			<br/><br/><br/>
				<div class="thumbnail">
			<form role="form" id="formInput">

<div class="form-group form-group-lg has-feedback">
 <label for="nama">Nama</label>
 <input type="text" name="nama" id="nama" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="tgl_lahir">Tanggal Lahir</label>
 <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="email">E-mail</label>
 <input type="text" name="email" id="email" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="password">Password</label>
 <input type="password" name="password" id="password" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="password">Konfirmasi Password</label>
 <input type="password" name="conf_password" id="conf_password" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="hp">Nomer HP</label>
 <input type="text" name="hp" id="hp" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<button type="submit" name="btn-simpan" class="btn btn-primary btn-block">Simpan</button>

</form>
	 			</div>
	 		</div>
		</div>
	</body>
<script type="text/javascript">
	$(document).ready(function(){
		//semua element dengan class text-warning akan di sembunyikan saat load
		$('.text-warning').hide();
		//untuk mengecek bahwa semua textbox tidak boleh kosong
		$('input').each(function(){ 
			$(this).blur(function(){ //blur function itu dijalankan saat element kehilangan fokus
				if (! $(this).val()){ //this mengacu pada text box yang sedang fokus
					return get_error_text(this); //function get_error_text ada di bawah
				} else {
					$(this).removeClass('no-valid'); 
					$(this).parent().find('.text-warning').hide();//cari element dengan class has-warning dari element induk text yang sedang focus
					$(this).closest('div').removeClass('has-warning');
					$(this).closest('div').addClass('has-success');
					$(this).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-warning-sign');
					$(this).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-ok');
				}
			});
		});
		//mengecek textbox Nama Valid Atau Tidak
		$('#nama').blur(function(){
			var nama= $(this).val();
			var len= nama.length;
			if(len>0){ //jika ada isinya
				if(!valid_nama(nama)){ //jika nama tidak valid
					$(this).parent().find('.text-warning').text("");
					$(this).parent().find('.text-warning').text("Nama Tidak Valid");
					return apply_feedback_error(this);
				} else {
					if (len>30){ //jika karakter >30
						$(this).parent().find('.text-warning').text("");
						$(this).parent().find('.text-warning').text("Maximal Karakter 30");
						return apply_feedback_error(this);
					}
				}
			} 
		});
		//Mengecek textbox tanggal lahir
		$('#tgl_lahir').blur(function(){
			var tgl= $(this).val();
			var len= tgl.length;
			if(len>0){
				if(!valid_tanggal(tgl)){
					$(this).parent().find('.text-warning').text("");
					$(this).parent().find('.text-warning').text("Format Tanggal yang diperbolehkan mm-dd-yyy, mm/dd/yyyy atau dd/mm/yyyy, dd-mm-yyyy");
					return apply_feedback_error(this);
				}
			}
		});
		//mengecek text box email
		$('#email').blur(function(){
			var email= $(this).val();
			var len= email.length;
			if(len>0){ 
				if(!valid_email(email)){ 
					$(this).parent().find('.text-warning').text("");
					$(this).parent().find('.text-warning').text("E-mail Tidak Valid (ex: aaaa@yahoo.co.id)");
					return apply_feedback_error(this);
				} else {
					if (len>30){ 
						$(this).parent().find('.text-warning').text("");
						$(this).parent().find('.text-warning').text("Maximal Karakter 30");
						return apply_feedback_error(this);
					} else {
						var valid = false;
						$.ajax({
		                                   url: "checkemail.php",
		                                   type: "POST",
		                                   data: "email="+email,
		                                   dataType: "text",
		                                   success: function(data){
		                    	                     if (data==0){ //pada file check email.php, apabila email sudah ada di database makan akan mengembalikan nilai 0
		                    		             $('#email').parent().find('.text-warning').text("");
							     $('#email').parent().find('.text-warning').text("email sudah ada");
							     return apply_feedback_error('#email');
		                    	                     }
			                                           }
							});
						}
				}
			} 
		});
		//mengecek password
		$('#password').blur(function(){
			var password=$(this).val();
			var len=password.length;
			if (len>0 && len<8) {
				$(this).parent().find('.text-warning').text("");
				$(this).parent().find('.text-warning').text("password minimal 8 karakter");
				return apply_feedback_error(this);
			} else {
				if(len>35) {
					$(this).parent().find('.text-warning').text("");
					$(this).parent().find('.text-warning').text("password maximal 35 karakter");
					return apply_feedback_error(this);
				}
			}
		});
		//mengecek konfirmasi password
		$('#conf_password').blur(function(){
			var pass = $("#password").val();
			var conf=$(this).val();
			var len=conf.length;
			if (len>0 && pass!==conf) {
				$(this).parent().find('.text-warning').text("");
				$(this).parent().find('.text-warning').text("Konfirmasi Password tidak sama dengan password");
				return apply_feedback_error(this);
			}
		});

		//mengecek nomer hp
		$('#hp').blur(function(){
			var hp=$(this).val();
			var len=hp.length;
			if (len>0 && len<=10){
				$(this).parent().find('.text-warning').text("");
				$(this).parent().find('.text-warning').text("Nomer HP terlalu pendek");
				return apply_feedback_error(this);
			} else {
				if(!valid_hp(hp)){
					$(this).parent().find('.text-warning').text("");
					$(this).parent().find('.text-warning').text("Format nomer hp tidak sah.(ex: +6285736262623)");
					return apply_feedback_error(this);
				} else {
					if (len >13){
						$(this).parent().find('.text-warning').text("");
						$(this).parent().find('.text-warning').text("Nomer HP terlalu Panjang");
						return apply_feedback_error(this);
					}
				}
			}
		});

		//submit form validasi
		$('#formInput').submit(function(e){
			e.preventDefault();
			var valid=true;		
			$(this).find('.textbox').each(function(){
				if (! $(this).val()){
					get_error_text(this);
					valid = false;
					$('html,body').animate({scrollTop: 0},"slow");
				} 
				if ($(this).hasClass('no-valid')){
					valid = false;
					$('html,body').animate({scrollTop: 0},"slow");
				}
			});
			if (valid){
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
                            		swal("Error", "Tolong Cek Koneksi Lalu Ulangi", "error");
                            	}, 2000);}
				});
           		});
	  		}
		});
	});

	//fungsi cek nama
	function valid_nama(nama) {
		var pola= new RegExp(/^[a-z A-Z]+$/);
		return pola.test(nama);
	}
	//fungsi cek tanggal lahir
	function valid_tanggal(tanggal){
		var pola= new RegExp(/\b\d{1,2}[\/-]\d{1,2}[\/-]\d{4}\b/);
		return pola.test(tanggal);
	}
	//fungsi cek email
	function valid_email(email){
		var pola= new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);
		return pola.test(email);
	}
	//fungsi cek phone 
	function valid_hp(hp){
		var pola = new RegExp(/^[0-9-+]+$/);
		return pola.test(hp);
	}
	//menerapkan gaya validasi form bootstrap saat terjadi eror
	function apply_feedback_error(textbox){
		$(textbox).addClass('no-valid'); //menambah class no valid
		$(textbox).parent().find('.text-warning').show();
		$(textbox).closest('div').removeClass('has-success');
		$(textbox).closest('div').addClass('has-warning');
		$(textbox).parent().find('.form-control-feedback').removeClass('glyphicon glyphicon-ok');
		$(textbox).parent().find('.form-control-feedback').addClass('glyphicon glyphicon-warning-sign');
	}

	//untuk mendapat eror teks saat textbox kosong, digunakan saat submit form dan blur fungsi
	function get_error_text(textbox){
		$(textbox).parent().find('.text-warning').text("");
		$(textbox).parent().find('.text-warning').text("Text Box Ini Tidak Boleh Kosong");
		return apply_feedback_error(textbox);
	}
</script>
</html>