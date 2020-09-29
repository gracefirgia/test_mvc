<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card bg-light">
				<div class="card-header text-center">
					<h4>Tambah Data Mahasiswa</h4>
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Mahasiswa" autofocus>
							<small class="form-text text-danger"><?= form_error('nama') ?></small>
						</div>
						<div class="form-group">
							<label for="nim">NIM</label>
							<input type="text" class="form-control" id="nim" name="nim" placeholder="NIM Mahasiswa">
							<small class="form-text text-danger"><?= form_error('nim') ?></small>
						</div>
						<div class="form-group">
							<label for="email">E-mail</label>
							<input type="text" class="form-control" id="email" name="email" placeholder="e-Mail Mahasiswa">
							<small class="form-text text-danger"><?= form_error('email') ?></small>
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan</label>
							<select class="form-control" id="jurusan" name="jurusan">
								<?php foreach ($jurusan as $jrs) : ?>
									<option value="<?= $jrs ?>">
										<?= $jrs ?>
									</option>
								<?php endforeach; ?>
							</select>
						</div>
						<button type="submit" name="tambah" class="btn btn-success float-right mx-1">Simpan</button>
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
