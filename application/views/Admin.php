<div class="card">
  <div class="card-header">
    <a href="<?= base_url('admin/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i>  Tambah </a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
      <thead>
					<tr>
						<th>ID Admin</th>
						<th>Username</th>
						<th>Password</th>
						<th>Nama Admin</th>
						<th>Aksi</th>
					</tr>
      </thead>
      <tbody>
	  	<?php foreach ($admin as $a) { ?>
    <tr>
        <td><?= $a['id_admin'] ?></td>
        <td><?= $a['username'] ?></td>
        <td><?= $a['password'] ?></td>
        <td><?= $a['nama_admin'] ?></td>
        <td>
            <a href="<?= base_url('admin/hapus/' . $a['id_admin']) ?>" class="btn btn-danger btn-sm" ><i class="fas fa-trash"></i></a>
						<a href="<?= base_url('admin/edit/' . $a['id_admin']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
        </td>
    </tr>
<?php } ?>

	  </tbody>
	</table>
  </div>
</div>



