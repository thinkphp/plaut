<!doctype html>
<html>
<head>
	<title>Projects</title>
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
	<h1>./Projects</h1>	
	<?php
	  echo"<p><mark>It works!</mark></p>";
	  $a = 10;
	  $b = 3;
	  $r = Euclid($a,$b);
	  echo"<h2>Euclid ($a, $b) = $r</h2>";
          function Euclid($a, $b) {
              while($b) {
                $r = $a % $b;
                $a = $b;
                $b = $r;
              }
              return $a;
          }   
         ?>
</center>
</body>
</html>
