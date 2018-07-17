<?php
  session_start();

  if (isset($_SESSION["username"])) {
  header("location:main.php?pages=utama");
  exit;
}

  require "config/function.php";
  if (isset($_POST["login"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $final = mysqli_query($conn, "SELECT * FROM admin WHERE username ='$username'");

    if ( mysqli_num_rows($final) === 1 ) {
      $row = mysqli_fetch_assoc($final);
      if ( password_verify($password, $row["password"]) ){

        $time = date("Y-m-d H:i:sa",time()+60*60*5);
          $query = "UPDATE admin SET 
           lastlogin = '$time'
           WHERE username = '$username';
           ";
          mysqli_query($conn, $query);

        // $_SESSION["login"] = true;
        $_SESSION['username'] = $username;
        header('location:main.php?pages=utama');
        exit;
      }
    }

    $error = true;

  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project Kelas</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="css/blue.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page" style="background: url(img/ok.jpg) center center fixed no-repeat;background-size:cover; max-width: 100%; overflow-y: hidden;">
<div class="login-box" style="margin-top: 15%;">
  <div class="login-logo">
    <a href="#"><b>Project</b>Kelas</a>
  </div>
  <!-- /.login-logo -->
      <?php if (isset($error)) : ?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <li class="glyphicon glyphicon-ban-circle">   The Login is Invalid</li>
              </div>
    <?php endif;?>
  <div class="login-box-body" style="background: rgba(5,5,5,0.5);border-radius: 1%;">
    <img class="profile-user-img img-responsive img-circle" src="img/user.png" alt="User profile picture">
    <p class="login-box-msg" style="color: #fff">Selamat Datang Admin</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <div class="col-xs-12">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="js/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
