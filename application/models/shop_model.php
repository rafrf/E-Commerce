<?php
class Shop_model extends CI_Model{
    public function get_data(){
        return $this->db->get('customer');
    }
    public function insert_data($data, $table){
        $this->db->insert($table, $data);
    }
    public function cek_data($email, $password){
        $this->db->WHERE('email', $email);
        $this->db->WHERE('password', $password);
        return $this->db->get('customer');
    }
    public function tampil_data(){
        return $this->db->get('product');
    }
    public function find($id){
        $result = $this->db->where('id_product', $id)
                           ->limit(1)
                           ->get('product');
        if($result->num_rows() > 0){
            return $result->row();
        }else{
            return array();
        }
    }
}