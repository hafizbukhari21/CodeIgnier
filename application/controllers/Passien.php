<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passien extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        //load model divisi
        $this->load->model('Pasien_model','passien');
        
    }
	
	public function index()
	{
        $data["records"] =  $this->passien->find_all();
        return $this->load->view("Welcome",$data);
	}

    public function view_index()
	{
        $data["records"] =  $this->passien->find_all_passien();
        return $this->load->view("Passien/index",$data);
	}

    function detail(){
        $id = $this->uri->segment(3);//SEGMENT DIHITUNG DARI URI NYA divisi/detail/[segment] 1/2/3
        $data = $this->passien->find_by_id($id);
        $this->load->view('Passien/detail',$data);
    }

    function edit(){
        $id = $this->uri->segment(3);//SEGMENT DIHITUNG DARI URI NYA divisi/detail/[segment] 1/2/3
        $data = $this->passien->find_by_id($id);
        $this->load->view('Passien/edit',$data);
    }

    function tambah(){
        
        $this->load->view('Passien/tambah');
    }

    function tambah_save(){
         //validasi server side
       
         $this->form_validation->set_rules('nama_passien','Nama divisi','required');
         if($this->form_validation->run() == FALSE){
             //validasi menemukan error
             $this->load->view('passien/tambah');
         }else{
             //lolos validasi
             $data = [
                 'nama_pasien' => $this->input->post('nama_passien'),
                 'alamat' => $this->input->post('alamat'),
                 'tempat_lahir' => $this->input->post('tempat_lahir'),
                 'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                 'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                 'pekerjaan' => $this->input->post('pekerjaan'),
                 
             ];
             $this->passien->insert($data);
             $this->view_index();
         }
    }

    function edit_save(){
        //validasi server side
      
        $this->form_validation->set_rules('nama_passien','Nama divisi','required');
        if($this->form_validation->run() == FALSE){
            //validasi menemukan error
            $this->load->view('passien/tambah');
        }else{
            //lolos validasi
            $data = [
                'nama_pasien' => $this->input->post('nama_passien'),
                'alamat' => $this->input->post('alamat'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                
            ];
            $id = $this->input->post('id');
            $this->passien->update($id,$data);
            $this->view_index();
        }
   }
    function delete(){
        $id = $this->uri->segment(3);
        $this->passien->delete($id);
        $this->view_index();
    }

    
}