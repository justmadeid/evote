<br>
<?php
require 'config/function.php';
$username = $_SESSION['username'];
$adm = query("SELECT * FROM admin WHERE username='$username'");
?>
<?php foreach($adm as $row) : ?>
<?php
function konversistatus($info){
$status = $info;
$flags = array (
'0'=>'Pengguna',
'1'=>'Super Admin'
);
echo $flags[$status];
}?>
<?php $ok = $row["level"];?>
<div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black" style="background: url('img/ok.jpg') center center;">
              <h2 class="widget-user-username"><?php echo $row['nama'];?></h2>
              <h4 class="widget-user-desc">Web Voter</h4>
            </div>

            <div class="widget-user-image">
              <img class="img-circle" src="img/user.png" alt="User Avatar" style="margin-top: -40%;">
            </div>

            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
<div class="today">
    <div class="today-piece  top  day"></div>
    <div class="today-piece  middle  month"></div>
    <div class="today-piece  middle  date"></div>
    <div class="today-piece  bottom  year"></div>
</div>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <br>
<!--                     <h3>Login As Administrator<h3> -->
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
          <div class="box box-solid">
            <div class="box-header with-border" style="background: #2c3e50;color: #fff;">
              <h3 class="box-title">User Info</h3>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li><a href="#"><i class="fa fa-user text-red"></i> Level <b style="margin-left: 6%;"> : <?php konversistatus($ok);?></b></a></li>
                <li><a href="#"><i class="fa fa-clock-o text-yellow"></i>Last Login <b> : <?php echo $row['lastlogin'];?></b></a></li>
                <li><a href="config/signout.php" class="btn-lg"><i class="fa fa-sign-out text-light-blue"></i>Log Out</a></li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
<?php endforeach; ?>

<section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-teal">
            <div class="inner">
              <h3><?php
              $kat = mysqli_query($conn,"SELECT * FROM kategori");
              $ok = mysqli_num_rows($kat);
              echo "$ok";
              ?></h3>
              <p>KATEGORI</p>
            </div>
            <div class="icon">
              <i class="ion ion-pricetags"></i>
            </div>
            <a href="main.php?pages=kategori" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3><?php
              $cus = mysqli_query($conn,"SELECT * FROM tb_user");
              $ok = mysqli_num_rows($cus);
              echo "$ok";
              ?></h3>

              <p>CUSTOMER</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="main.php?pages=customer" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php
              $sup = mysqli_query($conn,"SELECT * FROM tb_vote");
              $ok = mysqli_num_rows($sup);
              echo "$ok";
              ?></h3>
              <p>SUPPLIER</p>
            </div>
            <div class="icon">
              <i class="ion ion-briefcase"></i>
            </div>
            <a href="main.php?pages=supplier" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
      </div>
      <!-- /.row -->  








    </section>