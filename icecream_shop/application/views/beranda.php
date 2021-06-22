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
			<li><a class="active"<?php echo anchor('controll/beranda', "Beranda")?></a></li>
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
		<div class="title-text">
			<p>KELEBIHAN KAMI</P>
			<h1>Kenapa Harus Kami ? ?</h1>
		</div>
		<div class="feature-box">
			<div class="features">
				<h1>Menggunakan Bahan Alami</h1>
				<div class="features-desc">
					<div class="feature-icon">
						<i class="fa fa-shield"></i>

					</div>
					<div class="feature-text">
						<p>Bahan baku yang digunakan berasal dari <i>supplier</i> yang terkenal akan kebersihannya dan juga semua susu yang digunakan sangatlah <i>fresh</i>.</p>
					</div>
				</div>
				<h1>Dikirim Dengan Cepat</h1>
				<div class="features-desc">
					<div class="feature-icon">
						<i class="fa fa-check-square-o"></i>
					</div>
					<div class="feature-text">
						<p>Pengiriman pesanan tidak hanya melalui JNE, tetapi dapat melalui Grab-Box dan Go-Box untuk mempercepat kedatangannya</p>
					</div>
				</div>
				<h1>Harga Yang Terjangkau</h1>
				<div class="features-desc">
					<div class="feature-icon">
						<i class="fa fa-usd"></i>
					</div>
					<div class="feature-text">
						<p>Perbedaan harga asli pada pasaran dan toko <i>online</i> kami tidak jauh berbeda dan masih bersahabat di kantong.</p>
					</div>
				</div>
			</div>
			<div class="features-img">
				<img src="<?php echo base_url() ?>assets/images/05.jpg">
				<div class="overlay"></div>
				<div class="overlay-desc">
					<p>eskrim anda akan terjamin aman oleh kami saat sampai ditempat anda</p>
				</div>
			</div>
		</div>
	</section>
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