<?php
class Controll extends CI_Controller{
    public function awal()
    {
        $this->load->view('awal');
    }
    public function signin()
    {
        $this->load->view('signin');
    }
    public function signup()
    {
        $this->load->view('signup');
    }
    public function signout()
    {
        $this->load->view('signout');
    }
    public function beranda()
    {
        $this->load->view('beranda');
    }
    public function varian()
    {
        $data['barang'] = $this->shop_model->tampil_data()->result();
        $this->load->view('varian', $data);
    }
    public function promo()
    {
        $this->load->view('promo');
    }
    public function keranjang()
    {
        $this->load->view('keranjang');
    }
    public function tambah_keranjang($id)
    {
        $barang = $this->shop_model->find($id);
        $data = array(
            'id' => $barang->id_product,
            'qty' => 1,
            'price' => $barang->price,
            'name' => $barang->name
        );
        $this->cart->insert($data);
        redirect('controll/varian');
    }
    public function keterangan()
    {
        $data['barang'] = $this->shop_model->tampil_data()->result();
        $this->load->view('keterangan', $data);
    }
    public function cek_signup()
	{
        $username = $this->input->post('username');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $gender = $this->input->post('gender');
        $city = $this->input->post('city');
        $data = array (
            'username' => $username,
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'gender' => $gender,
            'city' => $city,
        );
        $this->shop_model->insert_data($data, 'customer');
        redirect('controll/signin');
    }
    public function cek_signin()
	{
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $cek = $this->shop_model->cek_data($email, $password, 'customer');
        if($cek->num_rows()==1){
            redirect('controll/beranda');
        }
    }
    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('controll/keranjang');
    }
    public function pembayaran()
    {
        $this->load->view('pembayaran');
    }
    public function proses_pesanan()
    {
        $is_processed = $this->invoice_model->index();
        if($is_processed) {
            $this->cart->destroy();
            $this->load->view('pesanan');
        } else {
            echo "Sorry your order failed to be processed!";
        }
        
    }
}
?>