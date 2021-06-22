<?php 

class Invoice extends CI_Controller{
	public function index(){
		$data['invoice'] = $this->invoice_model->tampil_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar2');
		$this->load->view('admin/invoice', $data);
		$this->load->view('templates_admin/footer');
	}

	public function detail($id_invoice){
		$data['invoice'] = $this->invoice_model-> ambil_id_invoice($id_invoice);
		$data['order'] = $this->invoice_model-> ambil_id_order($id_invoice);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar2');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates_admin/footer');
	}

	public function delete($id){
		$where = array ('id'	=> $id);
		$this->invoice_model->delete_data($where, 'invoice');
		redirect('admin/invoice/index');
	}
}

 ?>