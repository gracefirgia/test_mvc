<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<h3>Detail Data Mahasiswa</h3>
				</div>
				<div class="card-body">
					<blockquote class="blockquote mb-0">
						<h5 class="card-title"><?= $mahasiswa['nama'] ?></h5>
						<h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email'] ?></h6>
						<p class="card-text"><?= $mahasiswa['nrp'] ?></p>
						<p class="card-text"><?= $mahasiswa['jurusan'] ?></p>
						<a href="<?= site_url('students') ?>" class="btn btn-primary">Kembali</a>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</div>
