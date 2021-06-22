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
			<p>KETERANGAN MENU</P>
        </div>
        <div class="back">
		<?php echo anchor('controll/varian', "< Kembali")?>
		</div>
		<center>
		<div class="badan1">
		<?php foreach ($barang as $brg) : ?>
			<h3 style="text-align: center"><?php echo $brg->name ?></h3>
			<div class="gmbr"><img src="<?php echo base_url().'assets/images/'.$brg->picture?>"></div>
			<p style="text-align: center">Tipe : <?php echo $brg->type ?></p>
			<p style="text-align: center">Rp. <?php echo number_format($brg->price, 0,',','.') ?></p>
			<p style="text-align: center"><?php echo $brg->information ?></p><br>
			<hr style="width:60%;border: 2px solid white"><br>
		<?php endforeach; ?>
		</div>
		</center>
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