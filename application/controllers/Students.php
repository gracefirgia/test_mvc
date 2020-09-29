<?php

class Students extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('student_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->student_m->get();
		if ($this->input->post('search')) {
			$data['mahasiswa'] = $this->student_m->cariData();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('students/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_data()
	{
		$data['judul'] = 'Tambah Data Mahasiswa';
		$data['jurusan']	= ['Informatika', 'Sistem Informasi', 'Planologi', 'Pangan', 							'Lingkungan'];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');
		$this->form_validation->set_rules('email', 'e-Mail', 'trim|required|valid_email');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('students/tambah_data', $data);
			$this->load->view('templates/footer');
		} else {
			$this->student_m->tambahData();
			$this->session->set_flashdata('success', 'ditambahkan!');
			redirect('students');
		}
	}

	public function edit_data($id)
	{
		$data['judul'] 		= 'Edit Data Mahasiswa';
		$data['mahasiswa']	= $this->student_m->getMahasiswaById($id);
		$data['jurusan']	= ['Informatika', 'Sistem Informasi', 'Planologi', 'Pangan', 							'Lingkungan'];

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric');
		$this->form_validation->set_rules('email', 'e-Mail', 'trim|required|valid_email');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('students/edit_data', $data);
			$this->load->view('templates/footer');
		} else {
			$this->student_m->editData($id);
			$this->session->set_flashdata('success', 'diubah!');
			redirect('students');
		}
	}

	public function hapus_data($id)
	{
		$this->student_m->hapusData($id);
		$this->session->set_flashdata('success', 'dihapus.');
		redirect('students');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Mahasiswa';
		$data['mahasiswa']	= $this->student_m->getMahasiswaById($id);

		$this->load->view('templates/header', $data);
		$this->load->view('students/detail_data', $data);
		$this->load->view('templates/footer');
	}
}
