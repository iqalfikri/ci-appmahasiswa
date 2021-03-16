<?php

class Peoples_model extends CI_Model 
{
	public function getAllDataPeoples()
	{
		return $this->db->get('peoples')->result_array();
	}

	public function getPeoples($limit, $start, $keyword = null)
	{
		if ($keyword) {
			$this->db->like('name', $keyword);
			$this->db->or_like('email', $keyword);
			$this->db->or_like('address', $keyword);
		}
		return $this->db->get('peoples', $limit, $start)->result_array();
	}

	//hitung jumlah baris di db
	public function countAllPeoples()
	{
		return $this->db->get('peoples')->num_rows();
	}

	//ambil berdasarkan id
	public function getPeoplesById($id)
	{
		// Produces: SELECT * FROM peoples
		$query = $this->db->get_where('peoples', array('id' => $id));
		//result to array
		return $query->row_array();

	}

	//add data
	public function addDataPeoples()
	{
		// true untuk pengamanan
		$data =[
			"name" => $this->input->post('name', true),
			"address" => $this->input->post('address', true),
			"email" => $this->input->post('email', true)
		];

		$this->db->insert('peoples', $data);
	}

	//delete data
	public function deleteDataPeoples($id){
		$this->db->where('id', $id);
		$this->db->delete('peoples');

	}

	public function editDataPeoples(){
		// true untuk pengamanan
		$data =[
			"name" => $this->input->post('name', true),
			"address" => $this->input->post('address', true),
			"email" => $this->input->post('email', true)
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update('peoples', $data);
	}

}
