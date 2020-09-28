<?php 

class Dashboard extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

		if($this->session->userdata('role_id') != '2')
		{
			$this->session->set_flashdata('text','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Please Login!
			  <button kategori="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>');
			redirect('auth/login');
		}
	}	

		public function index()
	{
		//search keyword
		if ($this->input->post('submit')) 
		{
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}
		else
		{
			$data['keyword'] = $this->session->userdata('keyword');
		}

		//config
		$config['base_url'] = 'http://localhost/wrusf/index.php/welcome/index';
		$this->db->like('nama_brg',$data['keyword']);
		$this->db->or_like('keterangan',$data['keyword']);
		$this->db->or_like('kategori',$data['keyword']);
		$this->db->from('tb_barang');
		
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 5;


	//initialize
		$this->pagination->initialize($config);


		$data['start'] = $this->uri->segment(4);

		$data['barang'] = $this->model_stck->view_page($config['per_page'], $data['start'],$data['keyword'])->result();

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

	public function add_to_cargo($id)
	{
		$barang = $this->model_stck->find($id);

		$data = array(
	       	'id'      => $barang->id_brg,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->nama_brg	        
	);

	$this->cart->insert($data);
	redirect('Welcome');
	}

	public function add_to_cargo_biografi($id)
	{
		$barang = $this->model_stck->find($id);

		$data = array(
	        'id'      => $barang->id_brg,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->nama_brg	        
	);

	$this->cart->insert($data);
	redirect('kategori/biografi');
	}

	public function add_to_cargo_nonfiksi($id)
	{
		$barang = $this->model_stck->find($id);

		$data = array(
	        'id'      => $barang->id_brg,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->nama_brg	        
	);

	$this->cart->insert($data);
	redirect('kategori/nonfiksi');
	}

	public function add_to_cargo_fiksi($id)
	{
		$barang = $this->model_stck->find($id);

		$data = array(
	        'id'      => $barang->id_brg,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->nama_brg	        
	);

	$this->cart->insert($data);
	redirect('kategori/fiksi');
	}

	public function add_to_cargo_romance($id)
	{
		$barang = $this->model_stck->find($id);

		$data = array(
	        'id'      => $barang->id_brg,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->nama_brg	        
	);

	$this->cart->insert($data);
	redirect('kategori/romance');
	}

	public function add_to_cargo_horror($id)
	{
		$barang = $this->model_stck->find($id);

		$data = array(
	        'id'      => $barang->id_brg,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->nama_brg	        
	);

	$this->cart->insert($data);
	redirect('kategori/horror');
	}

	public function add_to_cargo_thriller($id)
	{
		$barang = $this->model_stck->find($id);

		$data = array(
	        'id'      => $barang->id_brg,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->nama_brg	        
	);

	$this->cart->insert($data);
	redirect('kategori/thriller');
	}

	public function cargo_detail()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('cargo');
		$this->load->view('templates/footer');
	}

	public function delete_cargo()
	{
		$this->cart->destroy();
		redirect('Welcome');
	}

	public function payment()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('payment');
		$this->load->view('templates/footer');
	}

	public function order_process()
	{
		$is_processed = $this->model_inv->index();
		if($is_processed)
		{
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('order_process');
			$this->load->view('templates/footer');
		}
		else
		{
			echo "Order Failed";
		}
	}

	public function detail($id_stck)
	{
		$data['barang'] = $this->model_stck->detail_stck($id_stck);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_stck',$data);
		$this->load->view('templates/footer');
	}	

}
 ?>