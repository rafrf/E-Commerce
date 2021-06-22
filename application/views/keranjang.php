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
			<li><a class="active"<?php echo anchor('controll/keranjang', "Keranjang Anda")?></a></li>
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
			<p>ISI KERANJANG ANDA</P>
			<h1>Ayo Tambah Lagi</h1>
        </div>
        <table class="cart">
			<tr class="awal">
				<td>NO</td>
				<td>NAMA PRODUK</td>
				<td>JUMLAH</td>
				<td>HARGA</td>
				<td>SUB TOTAL</td>
			</tr>
			<?php $no=1; foreach($this->cart->contents()as $items) : ?>
			<tr>
				<td align="center"><?php echo $no++ ?></td>
				<td><?php echo $items['name'] ?></td>
				<td align="center"><?php echo $items['qty'] ?></td>
				<td align="right">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
				<td align="right" style="color:red;">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
			</tr>
			<?php endforeach; ?>
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td align="right" style="color:red;">Rp. <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
			</tr>
		</table>
		<div class="cart-btn" align="right">
		<a class="cart-btn"<?php echo anchor('controll/hapus_keranjang',"<span></span>Hapus Keranjang")?></a>
		<a class="cart-btn1"<?php echo anchor('controll/varian',"<span></span>Lanjutkan Belanja")?></a>
		<a class="cart-btn2"<?php echo anchor('controll/pembayaran',"<span></span>Pembayaran")?></a>
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