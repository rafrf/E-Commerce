<?php 

class Invoice_model extends CI_Model{
	public function index(){
		date_default_timezone_set('Asia/Jakarta');
		$name		= $this->input->post('name');
		$address	= $this->input->post('address');
		$invoice = array(
			'name'			=> $name,
			'address'		=> $address,
			'order_date'	=> date('Y-m-d H:i:s'),
			'pay_limit'		=> date('Y-m-d H:i:s', mktime(date('H'), date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
		);

		$this->db->insert('invoice',$invoice);
		$id_invoice = $this->db->insert_id();

		foreach ($this->cart->contents() as $item) {
			$data = array(
				'id_invoice'	=> $id_invoice,
				'id_product'	=> $item['id'],
				'name'			=> $item['name'],
				'jumlah'		=> $item['qty'],
				'price'			=> $item['price'],
			);

			$this->db->insert('order', $data);
		}

		return true;
	}

	public function tampil_data(){
		$result = $this->db->get('invoice');
		if($result->num_rows() > 0){
			return $result->result();
		} else {
			return false;
		}
	}

	public function ambil_id_invoice($id_invoice){
		$result = $this->db->where('id',$id_invoice)->limit(1)->get('invoice');
		if($result->num_rows() > 0){
			return $result->row();
		}else {
			return false;
		}
	}

	public function ambil_id_order($id_invoice){
		$result = $this->db->where('id_invoice',$id_invoice)->get('order');
		if($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}

	public function delete_data($where,$table) {
        $this->db->where($where);
        $this->db->delete($table);
    }
}

 ?>