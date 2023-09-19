<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Antrian</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('pasien/update/' . $pasien->id_pasien) ?>" method="POST">
				<div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama</label>
                    <input type="text" class="form-control" id="nama_pasien" value="<?=$pasien->nama_pasien?>" name="nama_pasien" placeholder="nama_pasien" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Antrian</label>
                    <input type="text" class="form-control" name="id_antrian" value="<?=$pasien->id_antrian?>" placeholder="id_antrian" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Usia</label>
                    <input type="number" class="form-control" id="usia" value="<?=$pasien->usia?>" name="usia" placeholder="usia" required>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <select class="form-control"  name="jk">
            						<option value="Laki-laki" <?php if ($pasien->jk == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
            						<option value="Perempuan" <?php if ($pasien->jk == "Perempuan") echo "selected"; ?>>Perempuan</option>
        						</select><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Telp</label>
                    <input type="number" class="form-control" name="no_telp" value="<?=$pasien->no_telp?>" placeholder="no_telp" required>
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
