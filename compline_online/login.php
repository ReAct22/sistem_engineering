 <?php
session_start();
include "config/koneksi.php";
if(@$_SESSION['username']){
  header("location:index.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="icon" type="image/x-icon" href="assets/img/icon.png">
    <link rel="stylesheet" type="text/css" href="assets/w3.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" 
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous"> 
</head>
<body>


<div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Please <span class="font-weight-bold text-primary">LOGIN</span></h5></div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <input type="email" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
                  <a href="register.php" class="btn btn-success btn-block">Register </a>
                </div>
              </form>
              <?php 
              $username = @$_POST['username'];
              $password = @$_POST['password'];

              $login = @$_POST['login'];

              if($login){
                if($username == "" || $password == ""){
                  ?>
                    <script type="text/javascript">
                      alert("Username / Password Tidak Boleh kosong");
                    </script>
                  <?php
                }else{
                  $sql = mysqli_query($koneksi,"select *from tb_user where username = '$username' and password = md5('$password')");
                  $data = mysqli_fetch_array($sql);
                  $cek = mysqli_num_rows($sql);

                  if($cek > 0){
                    @$_SESSION['username'] = $data['id_user'];
                    header("location:index.php");
                  }else{
                    echo "Login Gagal";
                  }
                }
              }


              ?>

            </div>
          </div>
          <br>
          <a href="/sistem_engineering/index.php" class="btn btn-md btn-success"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
      </div>
    </div>
</body>
</html>
<?php 
}
?>