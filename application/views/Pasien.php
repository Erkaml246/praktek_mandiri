<div class="card">
  <div class="card-header">
    <a href="<?= base_url('pasien/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>  Tambah </a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
					<tr>
						<th>ID Pasien</th>
						<th>Nama</th>
						<th>Id Antrian</th>
						<th>Usia</th>
						<th>Jenis Kelamin</th>
						<th>No Telp</th>
						<th>Aksi</th>
					</tr>
      </thead>
      <tbody>
	  	<?php foreach ($pasien as $a) { ?>
    <tr>
        <td><?= $a['id_pasien'] ?></td>
        <td><?= $a['nama_pasien'] ?></td>
        <td><?= $a['id_antrian'] ?></td>
        <td><?= $a['usia'] ?></td>
		<td><?= $a['jk'] ?></td>
        <td><?= $a['no_telp'] ?></td>
        <td>
				<a href="<?= base_url('pasien/edit/' . $a['id_pasien']) ?>" class="btn btn-warning btn-sm" ><i class="fas fa-edit"></i></a>
            <a href="<?= base_url('pasien/hapus/' . $a['id_pasien']) ?>" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></a>
        </td>
    </tr>
<?php } ?>

	  </tbody>
	</table>
  </div>
</div>

