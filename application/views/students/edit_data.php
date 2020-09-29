<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card bg-light">
				<div class="card-header text-center">
					<h4>Edit Data Mahasiswa</h4>
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
							<small class="form-text text-danger"><?= form_error('nama') ?></small>
						</div>
						<div class="form-group">
							<label for="nim">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nrp'] ?>">
							<small class="form-text text-danger"><?= form_error('nim') ?></small>
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'] ?>">
							<small class="form-text text-danger"><?= form_error('email') ?></small>
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-control" id="jurusan" name="jurusan">
								<?php foreach ($jurusan as $jrs) : ?>
									<?php if ($jrs == $mahasiswa['jurusan']) : ?>
										<option value="<?= $jrs ?>" selected>
											<?= $jrs ?>
										</option>
									<?php else : ?>
										<option value="<?= $jrs ?>">
											<?= $jrs ?>
										</option>
									<?php endif; ?>
								<?php endforeach; ?>

							</select>
						</div>
						<button type="submit" name="edit" class="btn btn-success float-right mx-1">Simpan</button>
						<a href="<?= site_url('students') ?>" name="tambah" class="btn btn-info float-right">Kembali</a>
					</form>
				</div>
				<div class="card-footer text-muted text-center">
					2 days ago
				</div>
			</div>

		</div>
	</div>
</div>
