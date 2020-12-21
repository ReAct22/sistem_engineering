<?php 
    include "../config/koneksi.php";
?>
 <div class="card-header bg-transparent mb-0"><h5 class="text-center">Please <span class="font-weight-bold text-primary">Register</span></h5></div>
            <div class="card-body">
              <form action="" method="post">

                <label>Nama Staff</label>
                <div class="form-group">
                  <input type="text" name="nama_staff"  class="form-control" placeholder="Nama Staff">
                </div>

                <label>Username</label>
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>

                <label>Password </label>
                <div class="form-group">
                  <input type="password" name="password"  class="form-control" placeholder="Password">
                </div>

              <label>Level:</label>
              <div class="form-group">
      				  <select name="level" class="form-control">
                  <option label="">Select Level</option>
                  <option value="admin">admin</option>
                  <option value="engineering">engineering</option>
                  <option value="tenant">tenant</option>
                  <option value="security">security</option>
                  <option value="gudang">gudang</option>
                  <option value="keuangan">keungan</option>
                  <option value="office">office</option>
                  <option value="relasi">relasi</option>     
                </select>
    				</div>


                <div class="form-group">
                  <input type="submit" name="tambah" value="Registar" class="btn btn-primary btn-block">
                </div>
              </form>
              <?php 
               $nama_staff = @$_POST['nama_staff'];
               $username = @$_POST['username'];
               $password = @$_POST['password'];
               $level = @$_POST['level'];
                $daftar = @$_POST['tambah'];
                if($daftar){
                    mysqli_query($koneksi,"insert into tb_staff values('','$nama_staff','$username','$password','$level')");
                    ?>
                      <script type="text/javascript">
                        alert("Selamat Anda berhasil Register");
                        window.location.href="?page=data_staff";
                      </script>
                    <?php
                  
                }
              ?>
            </div>
