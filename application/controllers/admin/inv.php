<?php 

class Inv extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->API="172.20.10.14/blog-codeigniter/api";
		$this->load->library('session');
		$this->load->library('Curl');
		$this->load->helper('form');
		$this->load->helper('url');

		if($this->session->userdata('role_id') != '1')
		{
			$this->session->set_flashdata('text','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Please Login!
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('auth/login');
		}
	}
		
	public function index()
	{
		$data['inv'] = $this->model_inv->view_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/inv',$data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_inv)
	{
		$data['inv'] = $this->model_inv->take_inv_id($id_inv);
		$data['order'] = $this->model_inv->take_order_id($id_inv);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_inv',$data);
		$this->load->view('templates_admin/footer');
	}

	public function access()
	{
		$data['point'] = json_decode($this->curl->simple_get($this->API.'post'));
		$this->load->view('admin/access',$data);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('templates_admin/footer');
	}
}

 ?>