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
			<li><a class="active"<?php echo anchor('controll/varian', "Varian Rasa")?></a></li>
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
			<p>VARIAN RASA</P>
			<h1>Apa Rasa Yang Kamu Inginkan ? ?</h1>
		</div>
		<div class="product-box">
		<?php foreach ($barang as $brg) : ?>
			<div class="single-product">
				<img src="<?php echo base_url().'assets/images/'.$brg->picture?>">
				<div class="popup"></div>
				<div class="product-desc">
					<h3><?php echo $brg->name ?></h3>
					<hr>
					<p>Rp. <?php echo number_format($brg->price, 0,',','.') ?></p>
					<div class="product-btn">
						<a class="product-btn"<?php echo anchor('controll/tambah_keranjang/'.$brg->id_product, "<span></span>Tambah Ke Keranjang")?></a><br>
						<a class="product1-btn"<?php echo anchor('controll/keterangan', "<span></span>Keterangan")?></a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
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