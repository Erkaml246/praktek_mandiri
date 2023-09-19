<div class="card">
  <div class="card-header">
    <a href="<?= base_url('antrian/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>  Tambah </a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
					<tr>
						<th>ID Antrian</th>
						<th>ID Dokter</th>
						<th>ID Pasien</th>
						<th>No Antrian</th>
						<th>Tanggal</th>
						<th>Waktu</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
      </thead>
      <tbody>
	  	<?php foreach ($antrian as $a) { ?>
    <tr>
        <td><?= $a['id_antrian'] ?></td>
        <td><?= $a['id_dokter'] ?></td>
				<td><?= $a['id_pasien'] ?></td>
        <td><?= $a['no_antrian'] ?></td>
        <td><?= $a['tanggal'] ?></td>
				<td><?= $a['waktu'] ?></td>
        <td><?= $a['status'] ?></td>
        <td>
		<a href="<?= base_url('antrian/edit/' . $a['id_antrian']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
            <a href="<?= base_url('antrian/hapus/' . $a['id_antrian']) ?>" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></a>
        </td>
    </tr>
<?php } ?>

	  </tbody>
	</table>
  </div>
</div>



