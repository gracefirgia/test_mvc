<div class="container">
	<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
	<?php if ($this->session->flashdata()) : ?>
		<!-- <div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Horey!</strong> Data berhasil <?= $this->session->flashdata('success') ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div> -->

	<?php endif ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= site_url('students/tambah_data') ?>" class="btn btn-success">Tambah Data</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search..." name="search">
					<div class="input-group-append">
						<button class="btn btn-primary" type="submit">Cari</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Data Mahassiwa</h3>
			<?php if (empty($mahasiswa)) : ?>
				<div class="alert alert-danger" role="alert">
					Data tidak ditemukan!
				</div>
			<?php endif; ?>
			<ul class="list-group">
				<?php foreach ($mahasiswa as $mhs) : ?>
					<li class="list-group-item">
						<?= $mhs['nama'] ?>
						<a href="<?= site_url('students/hapus_data/' . $mhs['id']) ?>" class="float-right badge badge-danger" onclick="return confirm('Yakin ingin menghapus data?')">
							hapus
						</a>
						<a href="<?= site_url('students/edit_data/' . $mhs['id']) ?>" class="float-right badge badge-warning mx-1">
							edit
						</a>
						<a href="<?= site_url('students/detail/' . $mhs['id']) ?>" class="float-right badge badge-info">
							detail
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
