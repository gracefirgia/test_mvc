const flashData = $('.flash-data').data('flashdata');
if (flashData == true) {
	Swal.fire({
		title: 'Data Mahasiswa',
		text: 'Berhasil' + flashData,
		icon: 'success'
	});
}
