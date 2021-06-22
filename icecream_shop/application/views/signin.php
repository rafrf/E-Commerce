<html>
<head>
	<title>Icy Shop</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Palanquin+Dark&family=Sansita&family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<section id="banner1">
	<div class="h2">
	<h2>SIGN IN</h2>
	</div>
	<div class="kembali">
	<?php echo anchor('controll/awal', "< Kembali")?>
	</div>
		<form method="POST" action="<?php echo base_url().'controll/cek_signin';?>">
			<div class="bdn">
			<input type="text" name="email" placeholder="Masukan Email. . . ."  />
			</div>
			<div class="bdn">
			<input type="password" name="password" placeholder="Kata sandi. . . ." />
			</div>
			<div class="bdn2">
			<input type="submit" name="submit" value="Sign In" />
			</div>
		</form>
	<br>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! email dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br>
	<footer>
		<h2>About Us</h2>
			<button class="gambar"><a href="https://web.facebook.com/aiceindonesia/"><img src="<?php echo base_url() ?>assets/images/fb.png" alt="fb" width="30" height="30"></a></button>
			<button class="gambar"><a href="https://twitter.com/aiceindonesia"><img src="<?php echo base_url() ?>assets/images/twit.png" alt="twit" width="30" height="30"></a></button>
			<button class="gambar"><a href="https://www.instagram.com/aiceindonesia/?hl=id"><img src="<?php echo base_url() ?>assets/images/ig.png" alt="ig" width="30" height="30"></a></button>
			<button class="gambar"><a href="https://www.youtube.com/channel/UCmpXhMzd41rb7zulmJaMZiQ"><img src="<?php echo base_url() ?>assets/images/yt.png" alt="yt" width="30" height="30"></a></button>
		<p>IcyShop Indonesia &#169; 2020<br>Dikembangkan Oleh<br>Kevin A; Fauzia H; Rafika R; Suci N.</p>
	</footer>
	</section>
</body>
</html>