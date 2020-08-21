<?php 
@session_start();
include "config/koneksi.php";
if(@$_SESSION['engineering'] || @$_SESSION['tenant'] || @$_SESSION['security'] || @$_SESSION['gudang']){
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
                  <input type="text" name="username" class="form-control" placeholder="Username">
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
                </div>
              </form>
              <?php 
              $user = @$_POST['username'];
              $pass = @$_POST['password'];
              $login = @$_POST['login'];
              if($login){
                if($user == "" || $pass == ""){
                  ?>
                    <script type="text/javascript">
                      alert("Username dan password tidak boleh ada yang kosong");
                    </script>
                  <?php 
                }else{
                  $sql = mysqli_query($koneksi,"select *from tb_staff where username = '$user' and password = md5('$pass')");
                  $data = mysqli_fetch_array($sql);
                  $cek = mysqli_num_rows($sql);

                  if($cek >=1){
                    if($data['level'] == "engineering"){
                      @$_SESSION['engineering'] = $data['id_staff'];
                      header("location: index.php");
                    }else if($data['level'] == "tenant"){
                      @$_SESSION['tenant'] = $data['id_staff'];
                      header("location:index_tenant.php");
                    }else if($data['level'] == "security"){
                      @$_SESSION['security'] = $data['id_staff'];
                      header("location:index_secuity.php");
                    }else if($data['level'] == "gudang"){
                      @$_SESSION['gudang'] = $data['id_staff'];
                      header("location:index_gudang.php");
                    }
                  }else{
                    ?>
                    <script type="text/javascript">
                      alert("Password / username salah");
                    </script>
                    <?php
                  }
                }
              }
              ?>
            </div>
          </div>
          <br>
          <a href="/sistem_engineering/index.php" class="btn btn-md btn-success">Back</a>
        </div>
      </div>
    </div>
</body>
</html>
<?php 
}
?>