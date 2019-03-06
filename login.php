<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel="icon" href="src/img/icon_dasar.ico" type="image/x-icon">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <div class="text-center">
      <img src="images/PLN.png" width="150">
    </div>
    <form action="login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="USERNAME" name="username" autocomplete="off" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="PASSWORD" name="password" autocomplete="off" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value="LOGIN">
        </div>
      </div>
    </form>
    <br>
      <div class="row">
        <div class="col-md-12">
          <?php 
            if (isset($_POST['submit'])){
              session_start();
              date_default_timezone_set('Asia/Jakarta');
              include "lib/koneksi.php";

              $u  = $_POST['username'];
              $p  = $_POST['password'];
              $datenow = date('Y-m-d H:i:s'); 

              $ceklogin = mysqli_query($conn, "SELECT * FROM tbl_login WHERE BINARY username='$u' AND password='$p'");
              $data     = mysqli_fetch_array($ceklogin);
              $hit      = mysqli_num_rows($ceklogin);

              if ($hit>0){
                mysqli_query($conn, "UPDATE tbl_login SET
                                    last_active = '$datenow'
                                    WHERE username = '$u'");
                echo '<div class="alert alert-success alert-dismissible">Login Berhasil</div>';
                echo "<meta http-equiv='refresh' content='1;
                url=index.php?page=dashboard'>";
                $_SESSION['username']  = $data['username'];
                $_SESSION['password']  = $data['password'];
              }
            }
          ?>
        </div>
      </div>
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="plugins/iCheck/icheck.min.js"></script>

</body>
</html>