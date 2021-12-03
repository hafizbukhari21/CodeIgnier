<?php

class Pasien_model extends CI_Model{

    
    public $table = "table_passien";

    

    public function find_all(){
        return $this->db->query("SELECT * 
        FROM table_passien 
        JOIN table_tindakan ON
        table_passien.id = table_tindakan.id_pasien 
        
        "  )->result_array();
    }

    public function find_all_passien(){
        return $this->db->get($this->table)->result_array();
    }

    public function find_by_id($id){
        return $this->db->get_where($this->table,['id' => $id])->row_array();
    }

    public function insert($data){
        //akan digenerate DML insert into oleh ci
        return $this->db->insert($this->table,$data);
    }

      public function update($id,$data){
        //ci akan men-generate statement where 
        $this->db->where('id',$id);
        //ci mengupdate sesuai where diatas
        return $this->db->update($this->table,$data);
    }


    public function delete($id){
        $this->db->where('id',$id);
        $this->db->delete($this->table);
    }



  
}