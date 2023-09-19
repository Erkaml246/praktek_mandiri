<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Antrian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('antrian/update/' . $antrian->id_antrian) ?>" method="POST">
                <div class="card-body">
				<div class="form-group">
				  	<label for="exampleInputPassword1">ID Dokter</label>
				  	<input type="text" class="form-control" id="id_dokter" value="<?=$antrian->id_dokter?>" name="id_dokter" placeholder="ID Dokter" required>
				  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Pasien</label>
                    <input type="text" class="form-control" id="id_pasien" name="id_pasien" value="<?=$antrian->id_pasien?>" placeholder="ID Pasien" required>
										
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Antrian</label>
                    <input type="text" class="form-control" id="no_antrian" value="<?=$antrian->no_antrian?>" name="no_antrian" placeholder="No Antrian" required>
											<?= form_error('no_antrian', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?=$antrian->tanggal?>" placeholder="tanggal" required>
											<?= form_error('tanggal', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
									<div class="form-group">
                    <label for="exampleInputEmail1">Waktu</label>
                    <input type="time" class="form-control" id="waktu" name="waktu" value="<?=$antrian->waktu?>" placeholder="Waktu" required>
											<?= form_error('waktu', '<div class="text-small text-danger">', '</div>'); ?>
                  </div>
									<div class="form-group">
                    <label for="exampleInputPassword1">Status</label>
                    <select class="form-control"  name="status">
            						<option value="Menunggu" <?php if ($antrian->status == "Menunggu") echo "selected"; ?>>Menunggu</option>
            						<option value="Verifikasi" <?php if ($antrian->status == "Verifikasi") echo "selected"; ?>>Verifikasi</option>
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
