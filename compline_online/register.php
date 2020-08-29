<?php 
  include "config/koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
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
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Please <span class="font-weight-bold text-primary">Register</span></h5></div>
            <div class="card-body">
              <form action="" method="post">

                <label>Email: </label>
                <div class="form-group">
                  <input type="email" name="username" class="form-control" placeholder="Email">
                </div>

                <label>Password: </label>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <label>Full Name: </label>
                <div class="form-group">
                  <input type="text" name="full_name" class="form-control" placeholder="Full Name">
                </div>

              <label>Gender: </label>
              <div class="form-check-inline">
      				  <label class="form-check-label">
      				    <input type="checkbox" class="form-check-input" name="jk" value="Man">Man
      				  </label>
      				</div>
      				<div class="form-check-inline">
      				  <label class="form-check-label">
      				    <input type="checkbox" class="form-check-input" name="jk" value="Woman">Woman
      				  </label>
    				</div>

                <label>Select Country: </label>
                <div class="form-group">
                  <select name="negara" class="form-control">
                  	<option>Chosse Country</option>
                    <?php 
                      $sql = mysqli_query($koneksi,"select *from negara1");
                      while($data = mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $data['negara'] ?>"><?php echo $data['negara'] ?></option>
                    <?php } ?>
                  </select>
                </div>

                <label>Date Birth: </label>
                <div class="form-group">
                  <input type="date" name="tanggal_lahir" class="form-control" placeholder="Full Name">
                </div>

                <div class="form-group">
                  <input type="submit" name="daftar" value="Registar" class="btn btn-primary btn-block">
                  <br>
                  if you have account? <a href="login.php" style="color: blue;">Login</a>
                </div>
              </form>
              <?php 
                $email = @$_POST['username'];
                $password = @$_POST['password'];
                $full_name = @$_POST['full_name'];
                $jk = @$_POST['jk'];
                $negara = @$_POST['negara'];
                $tanggal_lahir = @$_POST['tanggal_lahir'];
                $daftar = @$_POST['daftar'];
                if($daftar){
                  if($email == "" || $password == "" || $full_name == "" || $jk == "" || $negara == "" || $tanggal_lahir == ""){
                    ?>
                      <script type="text/javascript">
                        alert("Data tidak boleh ada yang kosong");
                      </script>
                    <?php
                  }else{
                    mysqli_query($koneksi,"insert into tb_user values('','$email',md5('$password'),'$full_name','$jk','$negara','$tanggal_lahir')");
                    ?>
                      <script type="text/javascript">
                        alert("Selamat Anda berhasil Register");
                        window.location.href="login.php";
                      </script>
                    <?php
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