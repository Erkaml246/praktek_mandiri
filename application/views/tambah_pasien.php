<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pasien</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('pasien/tambah_aksi') ?>" method="POST">
			  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" id="nama_pasien"  name="nama_pasien" placeholder="nama_pasien" required>
											<?= form_error('nama_pasien', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Antrian</label>
                    <input type="text" class="form-control" name="id_antrian" placeholder="id_antrian" required>
											<?= form_error('id_antrian', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Usia</label>
                    <input type="number" class="form-control" id="usia" name="usia" placeholder="usia" required>
											<?= form_error('usia', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <select class="form-control" name="jk">
                    	<option>Pilih Jenis Kelamin</option>
                    	<option value="Laki-laki">Laki-laki</option>
                    	<option value="Perempuan">Perempuan</option>
                	</select><br>
											<?= form_error('jk', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Telp</label>
                    <input type="number" class="form-control" name="no_telp" placeholder="no_telp" required>
											<?= form_error('no_telp', '<div class="text-small text-danger">', '</div>'); ?>
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
