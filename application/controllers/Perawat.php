<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawat extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        //load model divisi
        $this->load->model('Perawat_model','perawat');
        
    }
	
	public function index()
	{
        
        $data["records"]=$this->perawat->find_all();
        $this->load->view("perawat/index",$data);
	}

    function tambah(){
        
        $this->load->view('Perawat/tambah');
    }

    function tambah_save(){
        //validasi server side
    
        
            //lolos validasi
            $data = [
                'id_poli' => $this->input->post('id_poli'),
                'nama_perawat' => $this->input->post('nama_perawat'),
                'alamat' => $this->input->post('alamat'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                
                
            ];
            $this->perawat->insert($data);
            $this->index();
        
   }

   function edit_save(){
    //validasi server side

    
        //lolos validasi
        $data = [
            'id_poli' => $this->input->post('id_poli'),
            'nama_perawat' => $this->input->post('nama_perawat'),
            'alamat' => $this->input->post('alamat'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            
            
        ];
        $id = $this->input->post('id');
        $this->perawat->update($id,$data);
        $this->index();
    
}

    function delete(){
        $id = $this->uri->segment(3);
        $this->perawat->delete($id);
        $this->index();
    }
    
    function edit(){
        $id = $this->uri->segment(3);//SEGMENT DIHITUNG DARI URI NYA divisi/detail/[segment] 1/2/3
        $data = $this->perawat->find_by_id($id);
        $this->load->view('Perawat/edit',$data);
    }

    function detail(){
        $id = $this->uri->segment(3);//SEGMENT DIHITUNG DARI URI NYA divisi/detail/[segment] 1/2/3
        $data = $this->perawat->find_by_id($id);
        $this->load->view('Perawat/detail',$data);
    }

}