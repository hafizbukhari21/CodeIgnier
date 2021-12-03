<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        
        //load model divisi
        $this->load->model('Tindakan_model','tindakan');
        $this->load->model('Perawat_model','perawat');
        $this->load->model('Pasien_model','passien');
    }
	
	public function index()
	{
        // print_r($this->tindakan->find_all());
        $data["records"] =$this->tindakan->find_all();
        $this->load->view("Tindakan/index", $data);
	}

    function tambah(){
        //untuk select jabatan
        $id = $this->uri->segment(3);
       
        $data['perawat'] = $this->perawat->find_all();
        $data['passien'] = $this->passien->find_all_passien();
        $this->load->view('tindakan/tambah',$data);
    }

    function edit(){
        //untuk select jabatan
        $id = $this->uri->segment(3);
        $data = $this->tindakan->find_by_id($id);
        
        $data['perawat'] = $this->perawat->find_all();
        $data['passien'] = $this->passien->find_all_passien();
        
        $this->load->view('tindakan/edit', ["datas"=> $data]);
    }

    function tambah_save(){
        //validasi server side

       
        
            //lolos validasi
            $data = [
                'id_perawat' => $this->input->post('id_perawat'),
                'id_pasien' => $this->input->post('id_pasien'),
                'jam' => $this->input->post('jam'),
                'diagnosa' => $this->input->post('diagnosa'),
                'tindakan' => $this->input->post('tindakan'),
                'no_ruang' => $this->input->post('no_ruang'),
                'keterangan' => $this->input->post('keterangan'),
                
                
            ];
            $this->tindakan->insert($data);
            $this->index();
        
   }

   function edit_save(){
    //validasi server side

   
    
        //lolos validasi
        $data = [
            'id_perawat' => $this->input->post('id_perawat'),
            'id_pasien' => $this->input->post('id_pasien'),
            'jam' => $this->input->post('jam'),
            'diagnosa' => $this->input->post('diagnosa'),
            'tindakan' => $this->input->post('tindakan'),
            'no_ruang' => $this->input->post('no_ruang'),
            'keterangan' => $this->input->post('keterangan'),
            
            
        ];

        $id = $this->input->post('id');
        $this->tindakan->update($id,$data);
        $this->index();
    
}


    function delete(){
        $id = $this->uri->segment(3);
        $this->tindakan->delete($id);
        $this->index();
    }
    
    

    function detail(){
        $id = $this->uri->segment(3);//SEGMENT DIHITUNG DARI URI NYA divisi/detail/[segment] 1/2/3
        $datas =$this->tindakan->find_by_id($id);
        
        $this->load->view('Tindakan/detail', ["datas"=> $datas]);
    }
}