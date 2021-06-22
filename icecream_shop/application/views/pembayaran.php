<html>
<head>
	<title>Icy Shop</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style2.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Palanquin+Dark&family=Sansita&family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="utama">
    <div class="navbar">
		<ul>
			<li><?php echo anchor('controll/beranda', "Beranda")?></li>
			<li><?php echo anchor('controll/varian', "Varian Rasa")?></li>
			<li><?php echo anchor('controll/promo', "Promo")?></li>
			<li><?php echo anchor('controll/keranjang', "Keranjang Anda")?></li>
			<li style="float: right;" class="dropdown"><a href="javascript:void(0)" class="dropbtn">Profile<i class="fa fa-user-circle-o"></i></a>
				<div class="dropdown-content">
					<?php echo anchor('controll/signout', 'Sign Out')?>
      			</div>
			</li>
			<li style="float: right;" class="basic"><?php $keranjang = 'Keranjang Belanja : '.$this->cart->total_items().' items'?><?php echo $keranjang ?></li>
		</ul>
	</div>
	<section id="feature">
	<div class="kembali1">
	<?php echo anchor('controll/keranjang', "< Kembali")?>
    </div>
    <div class="product-btn product4-btn">
        <?php $grand_total = 0;
        if($keranjang = $this->cart->contents()){
            foreach($keranjang as $item){
                $grand_total = $grand_total + $item['subtotal'];
            }
            echo "Total Belanja Anda : Rp. ".number_format($grand_total,0,',','.');
        }?>
    </div>
    <br>
    <h3 class="pay">Input Alamat Pengiriman dan Pembayaran</h3>
    <form class="pay" method="post" action="<?php echo base_url().'controll/proses_pesanan';?>">
        <p>Nama Lengkap</p>
		<div class="bdn3">
		<input type="text" name="name" placeholder="Nama Lengkap kamu....">
		</div>
        <p>Alamat Lengkap</p>
		<div class="bdn3">
		<input type="text" name="address" placeholder="Alamat Lengkap kamu....">
        </div>
        <p>No. Telephone</p>
		<div class="bdn3">
		<input type="text" name="no_telp" placeholder="Nomor Telephone kamu....">
        </div>
        <p>Jasa Pengiriman</p>
		<div class="bdn3">
        <select name="Jasa">
				<option value=" ">Pilih Jasa Pengiriman yang Diinginkan....</option>
				<option value="jne">JNE</option>
				<option value="go-box">Go-Box</option>
				<option value="grab-box">Grab-Box</option>
			</select>
        </div>
        <p>Pilih Bank</p>
		<div class="bdn3">
        <select name="bank">
				<option value=" ">Pilih Bank yang Diinginkan....</option>
				<option value="ovo">OVO - XXXXXXX</option>
				<option value="gopay">GOPAY - XXXXXXX</option>
				<option value="bca">BCA - XXXXXXX</option>
				<option value="bni">BNI - XXXXXXX</option>
                <option value="bri">BRI - XXXXXXX</option>
                <option value="mandiri">MANDIRI - XXXXXXX</option>
			</select>
        </div>
        <div class="bdn4">
			<input type="submit" name="proses" value="Proses Pesanan">
		</div>
    </form>
	</section>
	<br>
    <footer class="footer">
		<h2>About Us</h2>
  			<button class="gambar"><a href="https://web.facebook.com/aiceindonesia/"><img src="<?php echo base_url() ?>assets/images/fb.png" alt="fb" width="30" height="30"></a></button>
  			<button class="gambar"><a href="https://twitter.com/aiceindonesia"><img src="<?php echo base_url() ?>assets/images/twit.png" alt="twit" width="30" height="30"></a></button>
  			<button class="gambar"><a href="https://www.instagram.com/aiceindonesia/?hl=id"><img src="<?php echo base_url() ?>assets/images/ig.png" alt="ig" width="30" height="30"></a></button>
  			<button class="gambar"><a href="https://www.youtube.com/channel/UCmpXhMzd41rb7zulmJaMZiQ"><img src="<?php echo base_url() ?>assets/images/yt.png" alt="yt" width="30" height="30"></a></button>
		<p>IcyShop Indonesia &#169; 2020<br>Dikembangkan Oleh<br>Kevin A; Fauzia H; Rafika R; Suci N.</p>
	</footer>
	</div>
</body>
</html>