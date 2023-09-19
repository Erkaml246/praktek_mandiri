<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('admin/update/' . $admin->id_admin) ?>" method="POST">
                <div class="card-body">
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Id Admin</label>
                    <input type="text" class="form-control" name="id_admin" placeholder="id Admin">
										
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" value="<?=$admin->password?>" name="password" placeholder="Password" required>
										
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" value="<?=$admin->username?>" placeholder="Username" required>
										
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Admin</label>
                    <input type="text" class="form-control" value="<?=$admin->nama_admin?>" name="nama_admin" placeholder="nama_admin" required>
										
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
				  <button type="reset" class="btn btn-danger">Hapus</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
