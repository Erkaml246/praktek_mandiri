<div class="card">
  <div class="card-header">
    <a href="<?= base_url('dokter/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>  Tambah </a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
					<tr>
						<th>ID Dokter</th>
						<th>Nama</th>
						<th>Aksi</th>
					</tr>
      </thead>
      <tbody>
	  	<?php foreach ($dokter as $a) { ?>
    <tr>
        <td><?= $a['id_dokter'] ?></td>
        <td><?= $a['nama_dokter'] ?></td>
        <td>
            <a href="<?= base_url('dokter/edit/' . $a['id_dokter']) ?>" class="btn btn-warning btn-sm" ><i class="fas fa-edit"></i></a>
            <a href="<?= base_url('dokter/hapus/' . $a['id_dokter']) ?>" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></a>
        </td>
    </tr>
<?php } ?>

	  </tbody>
	</table>
  </div>
</div>

