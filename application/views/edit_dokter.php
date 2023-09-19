<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Dokter</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('dokter/update/' . $dokter->id_dokter) ?>" method="POST">
                <div class="card-body">
				<div class="form-group">
                    <label for="exampleInputPassword1">Nama Dokter</label>
                    <input type="nama_dokter" class="form-control" id="nama_dokter" value="<?=$dokter->nama_dokter?>" name="nama_dokter" placeholder="nama_dokter" required>
					<?= form_error('nama_dokter', '<div class="text-small text-danger">', '</div>'); ?>
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
