<?php

class Students extends CI_Controller  {

	public function __construct()
	{
		//panggil dahulu parent ke construct controller ci
		parent::__construct();
		$this->load->model('Students_model');
		$this->load->library('form_validation');
	}

	public function index(){
		// data
		$data ['title'] = 'Daftar Mahasiswa';
		$data['mahasiswa'] = $this->Students_model->getAllStudents();
		// search
		if ($this->input->post('keyword')) {
			$data['mahasiswa'] = $this->Students_model->searchDataStudents();
		}
		//load tampilan
		$this->load->view('templates/header',$data);
		$this->load->view('students/index', $data);
		$this->load->view('templates/footer');
	}

	public function add(){
		
		$this->Students_model->addDataStudents();
		//add flashmessage
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect(base_url() . 'students');
	}

	public function delete($id){
		$this->Students_model->deleteDataStudents($id);
		//add flashmessage
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect(base_url() . 'students');
	}

	public function detail($id){
		//judul
		$data ['title'] = 'Detail Mahasiswa';
		//data
		$data['mahasiswa'] = $this->Students_model->getStudentsById($id);
		//load tampilan
		$this->load->view('templates/header',$data);
		$this->load->view('students/detail',$data);
		$this->load->view('templates/footer');
	}

	public function edit($id){
		$data ['title'] = 'Ubah Mahasiswa';
		$data['mahasiswa'] = $this->Students_model->getStudentsById($id);
		$data['jurusan'] = ['Teknik Komputer', 'Manajemen Informatika', 'Teknik Mesin', 'Teknik Elektro', 'Teknik Telekomunikasi', 'Teknik Pesawat Tempur', 'Teknik Nuklir', 'Manejemen Perang', 'Administrasi Tahanan'];

		//formvalidation
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header',$data);
			$this->load->view('students/edit',$data);
			$this->load->view('templates/footer');
		} else {
			$this->Students_model->editDataStudents();
			//add flashmessage
			$this->session->set_flashdata('flash', 'Diubah');
			redirect(base_url() . 'students');
		}
		
	}
	
	
}


?>
