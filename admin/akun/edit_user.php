 <?php 
  include "../config/koneksi.php";
  $iduser = @$_GET['id'];
  $sql = mysqli_query($koneksi,"select *from tb_user where id_user = '$iduser'");
  $data = mysqli_fetch_array($sql);
 ?>
 <div class="card-header bg-transparent mb-0"><h5 class="text-center">Please <span class="font-weight-bold text-primary">Register</span></h5></div>
            <div class="card-body">
              <form action="" method="post">

                <label>Email: </label>
                <div class="form-group">
                  <input type="email" name="username" value="<?php echo $data['username'] ?>" class="form-control" placeholder="Email">
                </div>

                <label>Password: </label>
                <div class="form-group">
                  <input type="password" name="password" value="<?php echo $data['password'] ?>" class="form-control" placeholder="Password">
                </div>

                <label>Full Name: </label>
                <div class="form-group">
                  <input type="text" name="full_name" value="<?php echo $data['nama_lengkap'] ?>" class="form-control" placeholder="Full Name">
                </div>

              <label>Gender: </label>
              <div class="form-check-inline">
      				  <label class="form-check-label">
      				    <input type="checkbox" class="form-check-input" value="<?php echo $data['gender'] ?>" name="jk" value="Man">Man
      				  </label>
      				</div>
      				<div class="form-check-inline">
      				  <label class="form-check-label">
      				    <input type="checkbox" class="form-check-input" value="<?php echo $data['gender'] ?>" name="jk" value="Woman">Woman
      				  </label>
    				</div>
<br>
                <label>Select Country: </label>
                <div class="form-group">
                  <select name="negara" class="form-control">
                  	<option><?php echo $data['negara'] ?></option>
                    <?php 
                      $sql = mysqli_query($koneksi,"select *from negara1");
                      while($d = mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?php echo $d['negara'] ?>"><?php echo $d['negara'] ?></option>
                    <?php } ?>
                  </select>
                </div>

                <label>Date Birth: </label>
                <div class="form-group">
                  <input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>" class="form-control" placeholder="Full Name">
                </div>

                <div class="form-group">
                  <input type="submit" name="edit" value="Registar" class="btn btn-primary btn-block">
                </div>
              </form>
              <?php 
                $email = @$_POST['username'];
                $password = @$_POST['password'];
                $full_name = @$_POST['full_name'];
                $jk = @$_POST['jk'];
                $negara = @$_POST['negara'];
                $tanggal_lahir = @$_POST['tanggal_lahir'];
                $daftar = @$_POST['edit'];
                if($daftar){
                    mysqli_query($koneksi,"update tb_user set username = '$email',
                      password = '$password',
                      nama_lengkap = '$full_name',
                      gender = '$jk',
                      negara = '$negara',
                      tanggal_lahir = '$tanggal_lahir' where id_user = '$iduser'");
                    ?>
                      <script type="text/javascript">
                        alert("Selamat Anda berhasil Register");
                        window.location.href="?page=data_user";
                      </script>
                    <?php
                  
                }
              ?>
            </div>
