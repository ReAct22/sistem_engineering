<?php 
	include "config/koneksi.php";
	$idstaff = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from tb_staff where id_staff = '$idstaff'");
	$data = mysqli_fetch_array($sql);
?>
 <div class="card-header bg-transparent mb-0"><h5 class="text-center">Update <span class="font-weight-bold text-primary">Data Staff</span></h5></div>
            <div class="card-body">
              <form action="" method="post">

                <label>Nama Staff</label>
                <div class="form-group">
                  <input type="text" name="nama_staff" value="<?php echo $data['nama_staff'] ?>" class="form-control" placeholder="Nama Staff">
                </div>

                <label>Username</label>
                <div class="form-group">
                  <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control" placeholder="Username">
                </div>

                <label>Password </label>
                <div class="form-group">
                  <input type="password" name="password" value="<?php echo $data['password'] ?>" class="form-control" placeholder="Password">
                </div>

              <label>Level:</label>
              <div class="form-group">
      				  <select name="level" class="form-control">
                  <option label=""><?php echo $data['level'] ?></option>
                  <option value="admin">admin</option>
                  <option value="engineering">engineering</option>
                  <option value="tenant">tenant</option>
                  <option value="security">security</option>
                  <option value="gudang">gudang</option>    
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
                    mysqli_query($koneksi,"update tb_staff set nama_staff = '$nama_staff',
                    	username = '$username',
                    	password = '$password',
                    	level = '$level' where id_staff = '$idstaff'");
                    ?>
                      <script type="text/javascript">
                        alert("Selamat Anda berhasil Update");
                        window.location.href="?page=data_staff";
                      </script>
                    <?php
                  
                }
              ?>
            </div>