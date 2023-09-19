<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('admin/tambah_aksi') ?>" method="POST">
                <div class="card-body">
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Id Admin</label>
                    <input type="text" class="form-control" name="id_admin" placeholder="id Admin">
											<?= form_error('id_admin', '<div class="text-small text-danger">', '</div>'); ?>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
											<?= form_error('password', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
											<?= form_error('username', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Admin</label>
                    <input type="text" class="form-control" id="nama_admin" name="nama_admin" placeholder="nama_admin" required>
											<?= form_error('nama_admin', '<div class="text-small text-danger">', '</div>'); ?>
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
