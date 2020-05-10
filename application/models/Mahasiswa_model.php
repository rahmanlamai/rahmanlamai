<?php

class Mahasiswa_model extends CI_Model{

	public function getAllMahasiswa(){

		// method chining / berantai
		// ambil data mahasiswa heheh
		
		return $this->db->get('mahasiswa')->result_array();

	}


	public function tambahDataMahasiswa(){

		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true)

		];

		$this->db->insert('mahasiswa', $data);

	}


	// method hapusDataMahasiswa data dan method getMahasiswaById querynya sama 
	// terserah kita mau pake gaya yang mana
	// sama sama mempyai where pada id
	// cek di ci dokumentasi query builder

	public function hapusDataMahasiswa($id){
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');
	}


	public function getMahasiswaById($id){
		// tangkap di get_where dari mahasiswa berdasarkan id yg ada di parameter
		//lalu kita ambil row saja row_array();
		// lalu kita return buat balikin data
		return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();

	}


	public function ubahDataMahasiswa(){

		$data = [
			"nama" => $this->input->post('nama', true),
			"nim" => $this->input->post('nim', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan', true)

		];
		// dia nih tangkap id yang di updat, tapi id yg bertipe hidden yg ada di form ubah
		$this->db->where('id', $this->input->post('id'));
		// lalau update ke database
		$this->db->update('mahasiswa', $data);

	}



	public function cariDataMahasiswa(){

	$keyword = $this->input->post('keyword', true);
	$this->db->like('nama', $keyword);
	$this->db->or_like('nim', $keyword);
	$this->db->or_like('jurusan', $keyword);
	$this->db->or_like('email', $keyword);
	return $this->db->get('mahasiswa')->result_array();

	}





}