<?php 

class Data_barang extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

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
		$config['base_url'] = 'http://localhost/wrusf/index.php/admin/data_barang/index';
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

		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('templates_admin/footer');
	}
	

	public function tambah_aksi()
	{
		$nama_brg	= $this->input->post('nama_brg');
		$keterangan	= $this->input->post('keterangan');
		$kategori	= $this->input->post('kategori');
		$harga		= $this->input->post('harga');
		$stok		= $this->input->post('stok');
		$gambar		= $_FILES['gambar']['name'];
		if ($gambar = ''){}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){echo "Gambar gagal diupload!";}else{
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array(
			'nama_brg'  => $nama_brg,
			'keterangan'=> $keterangan,
			'kategori'	=> $kategori,
			'harga'		=> $harga,
			'stok'		=> $stok,
			'gambar'	=> $gambar,
		);

		$this->model_stck->tambah_barang($data, 'tb_barang');
		redirect('admin/data_barang/index');
	}

	public function edit($id)
	{
		$where = array('id_brg' =>$id);
		$data['barang'] = $this->model_stck->edit_barang($where, 'tb_barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id 		= $this->input->post('id_brg');
		$nama_brg 	= $this->input->post('nama_brg');
		$kategori	= $this->input->post('kategori');
		$harga 		= $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');
		$stok 		= $this->input->post('stok');

		$data = array(
			'nama_brg'  => $nama_brg,
			'keterangan'=> $keterangan,
			'kategori'	=> $kategori,
			'harga'		=> $harga,
			'stok'		=> $stok,
		);

		$where = array(
			'id_brg' => $id
		);

		$this->model_stck->update_data($where,$data, 'tb_barang');
		redirect('admin/data_barang/index');
	}

	public function delete ($id)
	{
		$where = array('id_brg' => $id);
		$this->model_stck->hapus_data($where, 'tb_barang');
		redirect('admin/data_barang/index');
	}

	public function detail($id_brg)
	{
		$data['barang'] = $this->model_stck->detail($id_brg);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('detail',$data);
		$this->load->view('templates_admin/footer');
	}
}

 ?>