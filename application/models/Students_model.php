<?php

class Students_model extends CI_Model {

	// method getAll
	public function getAllStudents()
	{
		// Produces: SELECT * FROM mahasiswa
		$query = $this->db->get('mahasiswa');
		//result to array
		return $query->result_array();
	}

	// method getDetail
	public function getStudentsById($id)
	{
		// Produces: SELECT * FROM mahasiswa
		$query = $this->db->get_where('mahasiswa', array('id' => $id));
		//result to array
		return $query->row_array();

	}

	//insert data
	public function addDataStudents()
	{
		// true untuk pengamanan
		$data =[
			"nama" => $this->input->post('nama', true),
			"nrp" => $this->input->post('nrp', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan' , true)
		];

		$this->db->insert('mahasiswa', $data);
	}

	//delete data
	public function deleteDataStudents($id){
		$this->db->where('id', $id);
		$this->db->delete('mahasiswa');

	}

	public function editDataStudents(){
		// true untuk pengamanan
		$data =[
			"nama" => $this->input->post('nama', true),
			"nrp" => $this->input->post('nrp', true),
			"email" => $this->input->post('email', true),
			"jurusan" => $this->input->post('jurusan' , true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('mahasiswa', $data);
	}

	public function searchDataStudents(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama',$keyword);
		$this->db->or_like('nrp', $keyword);
		$this->db->or_like('email', $keyword);
		$this->db->or_like('jurusan', $keyword);
		return $this->db->get('mahasiswa')->result_array();
	}

}
?>
