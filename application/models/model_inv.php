<?php 

class Model_inv extends CI_Model{
	public function index()
	{
		date_default_timezone_set('Asia/Jakarta');	
		$name		= $this->input->post('name');
		$address	= $this->input->post('address');

		$inv = array(
			'name' 			=> $name,
			'address' 		=> $address,
			'order_date'	=> date('Y-m-d H:i:s'),
			'payment_due'	=> date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))),
		);
		$this->db->insert('invoice', $inv);
		$id_inv = $this->db->insert_id();

		foreach ($this->cart->contents() as $item){
			$data = array(
				'id_inv'	=> $id_inv,
				'id_stck'	=> $item['id'],
				'name_stck'	=> $item['name'],
				'jumlah'	=> $item['qty'],
				'price'		=> $item['price'],
			);
			$this->db->insert('tb_order', $data);
		}

		return TRUE;
	}

	public function view_data()
	{
		$result = $this->db->get('invoice');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function take_inv_id($id_inv)
	{
		$result = $this->db->where('id', $id_inv)->limit(1)->get('invoice');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return false;
		}
	}

	public function take_order_id($id_inv)
	{
		$result = $this->db->where('id_inv', $id_inv)->get('tb_order');
		if($result->num_rows() > 0){
			return $result->result();
		}else{
			return false;
		}
	}
}

 ?>