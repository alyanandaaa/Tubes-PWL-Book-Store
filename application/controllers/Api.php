<?php 
defined('BASEPATH') OR exit ('Akses tidak diizinkan');

require APPPATH.'/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller
{
	function __construct($config='rest')
	{
		parent::__construct($config);
		$this->load->database();
	}
        
    function index_get() 
    {
        $id = $this->get('id');
        if ($id == '') {
            $tb_barang = $this->db->get('tb_barang')->result();
        } else {
            $this->db->where('id', $id);
            $tb_barang = $this->db->get('tb_barang')->result();
        }
        $this->response($tb_barang, 200);
    }
    
    function index_put()
    {
        $id = $this->put('id');
        $data['id'] = $this->put('id');
        $data['jlh'] = $this->put('jlh');
        
        $this->db->where('id' , $id);
        $update = $this->db->update('tb_barang', $data);
        if($update)
        {
                $this->response($data, 200);
        }
        else
        {
                $this->response(array('status'=>'fail',502));
        }
    }
        
}
?>	