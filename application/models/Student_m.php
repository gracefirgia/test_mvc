<?php

class Student_m extends CI_Model
{
	public function get()
	{
		$query	= $this->db->get('mahasiswa');
		return $query->result_array();
	}
	public function tambahData()
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nrp" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true)
		];

		$this->db->insert('mahasiswa', $data);
	}
	public function editData($id)
	{
		$data = [
			"nama" => $this->input->post('nama', true),
			"nrp" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('mahasiswa', $data);
	}
	public function hapusData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');
	}
	public function getMahasiswaById($id)
	{
		return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
	}
	public function cariData()
	{
		$search	= $this->input->post('search', true);
		$this->db->like('nama', $search);
		$this->db->or_like('jurusan', $search);
		$this->db->or_like('nrp', $search);
		$this->db->or_like('email', $search);
		return $this->db->get('mahasiswa')->result_array();
	}
}
