<html>
<head>
	<title>Icy Shop</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/style2.css">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Palanquin+Dark&family=Sansita&family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
</head>
<body>
<section id="banner">
	<div class="banner-text">
		<h1>Ice Cream<br>Online Shop</h1>
		<p>Ceriakan Harimu dengan Makanan Manis dan Dingin</p>
		<div class="banner-btn">
			<?php echo anchor('controll/signin', "<span></span>Sign In")?>
			<?php echo anchor('controll/signup', "<span></span>Sign Up")?>
		</div>
	</div>
</section>
</body>
</html>