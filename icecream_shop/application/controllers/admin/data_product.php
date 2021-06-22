<?php 

class Data_product extends CI_Controller{
	public function index(){
		$data['product'] = $this->shop_model->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar1');
		$this->load->view('admin/data_product', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi(){
		$id_product		= $this->input->post('id_product');
		$name			= $this->input->post('name');
		$type			= $this->input->post('type');
		$information	= $this->input->post('information');
		$price			= $this->input->post('price');
		$stock			= $this->input->post('stock');
		$picture		= $_FILES['picture']['name'];
		if ($picture = '') {} else {
			$config ['upload_path'] = './assets/images';
			$config ['allowed_types'] = 'png';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('picture')){
				echo "Failed Upload Picture!";	
			} else {
				$picture=$this->upload->data('file_name');
			}
		}

		$data = array (
			'id_product'		=> $id_product,
			'name'				=> $name,
			'type'				=> $type,
			'information'		=> $information,
			'price'				=> $price,
			'stock'				=> $stock,
			'picture'		=> $picture
		);

		$this->shop_model->add_product($data,'product');
		redirect('admin/data_product/index');
	}

	public function edit($id_product){
		$where = array('id_product' => $id_product);
		$data['product'] = $this->shop_model->edit_product($where, 'product')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar1');
		$this->load->view('admin/edit_product', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id_product 	= $this->input->post('id_product');
		$name 			= $this->input->post('name');
		$type 			= $this->input->post('type');
		$information	= $this->input->post('information');
		$price 			= $this->input->post('price');	
		$stock 			= $this->input->post('stock');

		$data = array(
			'name'			=>$name,
			'type'			=>$type,
			'information'	=>$information,
			'price'			=>$price,
			'stock'			=>$stock,
		);

		$where = array(
			'id_product'	=> $id_product
		);

		$this->shop_model->update_data($where,$data,'product');
		redirect('admin/data_product/index');
	}

	public function delete($id_product){
		$where = array ('id_product'	=> $id_product);
		$this->shop_model->delete_data($where, 'product');
		redirect('admin/data_product/index');
	}
}

 ?>