<?php

class kategori extends CI_Controller
{
	public function biografi()
	{
		$data['biografi'] = $this->model_type->biografi()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('biografi',$data);
		$this->load->view('templates/footer');
	}

	public function nonfiksi()
	{
		$data['nonfiksi'] = $this->model_type->nonfiksi()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('nonfiksi',$data);
		$this->load->view('templates/footer');
	}

	public function fiksi()
	{
		$data['fiksi'] = $this->model_type->fiksi()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('fiksi',$data);
		$this->load->view('templates/footer');
	}

	public function romance()
	{
		$data['romance'] = $this->model_type->romance()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('romance', $data);
		$this->load->view('templates/footer');
	}


	public function horror()
	{
		$data['horror'] = $this->model_type->horror()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('horror', $data);
		$this->load->view('templates/footer');
	}

	public function thriller()
	{
		$data['thriller'] = $this->model_type->thriller()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('thriller', $data);
		$this->load->view('templates/footer');
	}
}

?>