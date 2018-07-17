<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("location: index.php");
  exit;
}

 require "config/function.php";  
?>
<?php
if (isset($_POST["register"])) {
  if (register($_POST) > 0) {
    echo "";
  }else {
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bower_components/login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="bower_components/login/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="bower_components/login/css/form-elements.css">
        <link rel="stylesheet" href="bower_components/login/css/style.css">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="bower_components/login/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="bower_components/login/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="bower_components/login/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="bower_components/login/ico/apple-touch-icon-57-precomposed.png">
              <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
  <link href="css/sweetalert.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="js/sweetalert2.min.js"></script>
    <script src="js/sweetalert.min.js"></script>                
    <script src="js/sweetalert-dev.js"></script> 

    </head>

    <body style="background: url(img/ok.jpg) center center fixed no-repeat;background-size:cover; max-width: 100%; overflow-y: hidden;">

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Project</strong>Kelas</h1>
                            <div class="description">
                            </div>
                        </div>
                    </div>
                    

                        <div class="col-sm-5" style="margin-left: 30%;">
                        	
                        	<div class="form-box">
                          <?php if (isset($error)) : ?>
                            <div class="alert alert-danger alert-dismissible bg-red" style="margin-top: -85px;">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <li class="glyphicon glyphicon-ban-circle">   Can't Create Account</li>
                            </div>
                            <?php endif;?>
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to Inventory</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-rocket"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="input-group" style="margin-bottom: 2%;">
                                <span class="input-group-addon"><li class="fa fa-user"></li></span>
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="nama" placeholder="Full Name" class="form-username form-control" id="form-username">
				                        </div>
                                <div class="input-group" style="margin-bottom: 2%;">
                                  <select class="form-username form-control" name="level" style="height: 50px;border-radius: 3px; width: 300%;">
                                    <option>Pilih Kategori</option>
                                    <option value="1">Super Admin</option>
                                    <option value="0">Pengguna</option>
                                  </select>
                                </div>
				                        <div class="input-group" style="margin-bottom: 2%;">
                                            <span class="input-group-addon"><li class="fa fa-phone"></li></span>
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="text" placeholder="Telp" name="telp" class="form-password form-control" id="form-password">
				                        </div>
                                <div class="input-group" style="margin-bottom: 2%;">
                                            <span class="input-group-addon"><li class="fa fa-envelope"></li></span>
                                  <label class="sr-only" for="form-password">Password</label>
                                  <input type="text" placeholder="Email" name="email" class="form-password form-control" id="form-password">
                                </div>
                                <div class="input-group" style="margin-bottom: 2%;">
                                            <span class="input-group-addon"><li class="fa fa-user"></li></span>
                                  <label class="sr-only" for="form-password">Password</label>
                                  <input type="text" placeholder="Username" name="username" class="form-password form-control" id="form-password">
                                </div>
                                <div class="input-group" style="margin-bottom: 2%;">
                                            <span class="input-group-addon"><li class="fa fa-lock"></li></span>
                                  <label class="sr-only" for="form-password">Password</label>
                                  <input type="password" placeholder="Password" name="password" class="form-password form-control" id="form-password">
                                </div>
                                <div class="input-group" style="margin-bottom: 2%;">
                                            <span class="input-group-addon"><li class="fa fa-sign-out"></li></span>
                                  <label class="sr-only" for="form-password">Password</label>
                                  <input type="password" placeholder="Retype password" name="password2" class="form-password form-control" id="form-password">
                                </div>
				                        <button type="submit" class="btn" name="register">Sign in!</button>
                                
				                    </form>
			                    </div>
		                    </div>
	                        
                        </div>

                    
                </div>
            </div>
            
        </div>
        <!-- Footer -->


        <!-- Javascript -->
        <script src="bower_components/login/js/jquery-1.11.1.min.js"></script>
        <script src="bower_components/login/bootstrap/js/bootstrap.min.js"></script>
        <script src="bower_components/login/js/jquery.backstretch.min.js"></script>
        <script src="bower_components/login/js/scripts.js"></script>
              <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
  <link href="css/sweetalert.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/magnific-popup.css">
    <script type="text/javascript" src="js/sweetalert2.min.js"></script>
    <script src="js/sweetalert.min.js"></script>                
    <script src="js/sweetalert-dev.js"></script> 
        
        <script type="text/javascript">
          function test(){
          swal('Sorry', 'Data Alerdy exist', 'error');
        }
        </script>
        <!--[if lt IE 10]>
            <script src="login/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>