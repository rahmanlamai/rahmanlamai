<?php

class Mahasiswa extends CI_Controller{

	public function __construct(){
		//ekstenf ke kelas ci_controller
		parent::__Construct();

		//load datanya
		$this->load->model('Mahasiswa_model');

		//load validasi
		$this->load->library('form_validation');
	}


	public function index(){

		$data['judul'] = 'Halaman Mahasiswa';
		//ambil dan kirim datanya ke model mahasiswa
		$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();

		// kalau ada data yang di cari dengan search gini kodennta
		//kita kondisikan dulu
		if ( $this->input->post('keyword') ) {
				$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
		}

		$this->load->view('templates/header',$data);
		$this->load->view('mahasiswa/index',$data);
		$this->load->view('templates/footer');

	}

	public function tambah(){

		$data['judul'] = 'Form Tambah Data Mahasiswa';

		//cek
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE ){			

			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');

		}else{

			$this->Mahasiswa_model->tambahDataMahasiswa();

			$this->session->set_flashdata('flash', 'Ditambahkan!');

			redirect('mahasiswa');

		}

	}



	public function hapus($id){

		$this->Mahasiswa_model->hapusDataMahasiswa($id);

		$this->session->set_flashdata('flash', 'Dihapus!');

		redirect('mahasiswa');

	}



	public function detail($id){

		$data['judul'] = 'Halaman Detil Mahasiswa';
		//ambil data dan kirim berdasarkan id nya
		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

		$this->load->view('templates/header', $data );
		$this->load->view('mahasiswa/detail', $data );
		$this->load->view('templates/footer');

	}



	public function ubah($id){

		$data['judul'] = 'Ubah Data Mahasiswa';

		$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaById($id);

		$data['jurusan'] = ['Teknik Informatika', 'Sistem Informasi', 'Teknik Elektro'];

		//cek
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('nim', 'Nim', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE ){			

			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('templates/footer');

		}else{

			$this->Mahasiswa_model->ubahDataMahasiswa();

			$this->session->set_flashdata('flash', 'Diubah!');

			redirect('mahasiswa');

		}

	}





}