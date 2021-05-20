<!doctype html>
<html>
<head>
	<title>Home</title>
	<style>
	body {
		font-family: sans-serif;
	}
	h1{
		background-color: mediumseagreen;
		font-size: 80px;
		color: yellow;
	}
	p {
		font-size: 50px;
		}
		p.menu {
			text-align: left;
			padding: 10px
		}
		p.menu a {
			padding: 10px
		}
	</style>
</head>
<body>
<center>	
	<h1>./Home</h1>
	<p><mark>It works!</mark></p>
	<p class='menu'><a href="<?php echo BASE_URL;?>">./</a> <a href="<?php echo BASE_URL; ?>home">Home</a> <a href="<?php echo BASE_URL; ?>about">About</a> <a href="<?php echo BASE_URL; ?>portofolio">Portofolio</a> <a href="<?php echo BASE_URL; ?>projects">Projects</a> <a href="<?php echo BASE_URL; ?>Contact">Contact</a></p>
</center>
</body>
</html>
