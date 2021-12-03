<?php

class Tindakan_model extends CI_Model{

    
    public $table = "table_tindakan";

    
    public function find_all(){
        return $this->db->query("SELECT  
        table_tindakan.id as id, 
        table_tindakan.jam, 
        table_tindakan.id_perawat,
        table_tindakan.diagnosa,
        table_tindakan.tindakan,
        table_tindakan.no_ruang,
        table_tindakan.keterangan, 
        table_passien.alamat, table_passien.nama_pasien
        FROM table_tindakan 
        JOIN table_passien On
        table_passien.id = table_tindakan.id_pasien"  )->result_array();
    }

    public function find_by_id($id){
        return $this->db->query("SELECT  
        table_tindakan.id as id, 
        table_tindakan.jam, 
        table_tindakan.id_perawat,
        table_tindakan.diagnosa,
        table_tindakan.tindakan,
        table_tindakan.no_ruang,
        table_tindakan.keterangan, 
        table_passien.alamat, table_passien.nama_pasien
        FROM table_tindakan 
        JOIN table_passien On
        table_passien.id = table_tindakan.id_pasien
        WHERE table_tindakan.id = {$id}
        "
        )->result_array();
    }

    // public function find_by_id_common($id){
    //     return $this->db->query("SELECT * FROM table_tindakan where id={$id}")->result_array();
    // }
    

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
