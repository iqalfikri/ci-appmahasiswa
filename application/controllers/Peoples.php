<?php

class Peoples extends CI_Controller  {

	public function __construct()
	{
		//panggil dahulu parent ke construct controller ci
		parent::__construct();
		$this->load->model('Peoples_model', 'peoples');
		$this->load->library('form_validation');
	}

	public function index(){
		// data
		$data ['title'] = 'List of Peoples';

		//PAGINATION
		//load library
		$this->load->library('pagination');

		// search
		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		//config for all peoples
		// $config['total_rows'] = $this->peoples->countAllPeoples();
		//config for peoples and keyword
		$this->db->like('name', $data['keyword']);
		$this->db->or_like('email', $data['keyword']);
		$this->db->or_like('address', $data['keyword']);
		$this->db->from('peoples');//data dari table
		$config['total_rows'] = $this->db->count_all_results();
		//kirim total rows
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 12;
	
		//initialize
		$this->pagination->initialize($config);

		//start page
		$data['start'] = $this->uri->segment(3);
		//getPeoples('data yg tampil','dimulai dari data mana')
		$data ['peoples']= $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);
		
		//load tampilan
		$this->load->view('templates/header',$data);
		$this->load->view('peoples/index', $data);
		$this->load->view('templates/footer');
	}

	public function add(){
		$data ['title'] = 'Form Add Data Peoples';

		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == false){
			//load tampilan
			$this->load->view('templates/header',$data);
			$this->load->view('peoples/add');
			$this->load->view('templates/footer');
		}else{
			$this->peoples->addDataPeoples();
			//add flashmessage
			$this->session->set_flashdata('flash-peoples', 'added');
			redirect(base_url() . 'peoples');
		}
		
	}

	public function delete($id){
		$this->peoples->deleteDataPeoples($id);
		//add flashmessage
		$this->session->set_flashdata('flash-peoples', 'deleted');
		redirect(base_url() . 'peoples');
	}

	public function detail($id){
		//judul
		$data ['title'] = 'Detail Peoples';
		//data
		$data['peoples'] = $this->peoples->getPeoplesById($id);
		//load tampilan
		$this->load->view('templates/header',$data);
		$this->load->view('peoples/detail',$data);
		$this->load->view('templates/footer');
	}
	
	public function edit($id){
		$data ['title'] = 'Form Edit Data Peoples';
		$data['peoples'] = $this->peoples->getPeoplesById($id);
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == false){
			//load tampilan
			$this->load->view('templates/header',$data);
			$this->load->view('peoples/edit',$data);
			$this->load->view('templates/footer');
		}else{
			// echo "ok";
			$this->peoples->editDataPeoples();
			//add flashmessage
			$this->session->set_flashdata('flash-peoples', 'edited');
			redirect(base_url() . 'peoples');
		}
		
	}
	
}


?>
