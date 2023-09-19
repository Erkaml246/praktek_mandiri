<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Antrian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('antrian/tambah_aksi') ?>" method="POST">
			  <div class="card-body">
				  <div class="form-group">
					<label for="exampleInputPassword1">ID Dokter</label>
					<input type="text" class="form-control" id="id_dokter" name="id_dokter" placeholder="ID Dokter" required>
						<?= form_error('id_dokter', '<div class="text-small text-danger">', '</div>'); ?>
				  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Pasien</label>
                    <input type="text" class="form-control" id="id_pasien" name="id_pasien" placeholder="ID Pasien" required>
						<?= form_error('id_pasien', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Antrian</label>
                    <input type="text" class="form-control" id="no_antrian" name="no_antrian" placeholder="No Antrian" required>
						<?= form_error('no_antrian', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" required>
						<?= form_error('tanggal', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Waktu</label>
                    <input type="time" class="form-control" id="waktu" name="waktu" placeholder="Waktu" required>
						<?= form_error('waktu', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="form-control"  name="status">
            		  	<option>Menunggu</option>
            		  	<option>Verifikasi</option>
        			</select><br>
						<?= form_error('jk', '<div class="text-small text-danger">', '</div>'); ?>
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
