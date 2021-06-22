<html>
<head>
	<title>Icy Shop</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Palanquin+Dark&family=Sansita&family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<div class="utama">
	<div class="navbar">
		<ul>
			<li><?php echo anchor('controll/beranda', "Beranda")?></li>
			<li><?php echo anchor('controll/varian', "Varian Rasa")?></li>
			<li><a class="active"<?php echo anchor('controll/promo', "Promo")?></a></li>
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
			<p>PROMO BULAN INI</P>
		</div>
		<img class="prm" src="<?php echo base_url() ?>assets/images/011.png">
        <table class="promo">
			<tr>
				<td>
					<div style="width: 170">
  						<button class="gambar"><img src="<?php echo base_url() ?>assets/images/Chocolate Cup.png" alt="Chocolate Cup" width="170" height="170"></a></button>
  						<div>
							  <p>Chocolate Cup<br><del>Rp 5.000,-</del><br>Rp 2.500,-</p></a>
							  <p>use OVO</p> 
  						</div>
					</div>
				</td>
				<td>
					<div style="width: 170">
  						<button class="gambar"><img src="<?php echo base_url() ?>assets/images/Strawberry Mochi.png" alt="Strawberry Mochi" width="170" height="170"></a></button>
  						<div>
							  <p>Strawberry Mochi<br><del>Rp 3.000,-</del><br>Rp 1.500,-</p></a>
							  <p>use OVO</p> 
  						</div>
					</div>
				</td>
				<td>
					<div style="width: 170">
  						<button class="gambar"><img src="<?php echo base_url() ?>assets/images/Durian Cup.png" alt="Durian Cup" width="170" height="170"></a></button>
  						<div>
							  <p>Durian Cup<br><del>Rp 10.000,-</del><br>Rp 5.000,-</p></a>
							  <p>use OVO</p> 
					</div>
				</td>
				<td>
					<div style="width: 170">
  						<button class="gambar"><img src="<?php echo base_url() ?>assets/images/Vanila Mochi.png" alt="Vanila Mochi" width="170" height="170"></a></button>
  						<div>
							  <p>Vanila Mochi<br><del>Rp 3.000,-</del><br>Rp 1.500,-</p></a>
							  <p>use OVO</p> 
					</div>
				</td>
				<td>
					<div style="width: 170">
  						<button class="gambar"><img src="<?php echo base_url() ?>assets/images/Strawberry Cup.png" alt="Strawberry Cup" width="170" height="170"></a></button>
  						<div>
							  <p>Strawberry Cup<br><del>Rp 5.000,-</del><br>Rp 2.500,-</p></a>
							  <p>use OVO</p> 
					</div>
				</td>
				<td>
					<div style="width: 170">
  						<button class="gambar"><img src="<?php echo base_url() ?>assets/images/Durian Mochi.png" alt="Durian Mochi" width="170" height="170"></a></button>
  						<div>
							  <p>Durian Mochi<br><del>Rp 5.000,-</del><br>Rp 2.500,-</p></a>
							  <p>use OVO</p> 
					</div>
				</td>
			</tr>
		</table>
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