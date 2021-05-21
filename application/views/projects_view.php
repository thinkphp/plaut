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
          
          function fib($n) {
          
                $arr = array();
                $arr[0] = 0;
                $arr[1] = 1;
                $out = "<h3>Fibonacci: 0, 1, ";
                for($i=2; $i <= $n; $i++) {
                    $arr[$i] = $arr[$i-1] + $arr[$i-2];
                    $out .= $arr[$i]. ", ";   
                }          
                $out .= "</h3>";
                echo$out;
          }
          fib(50);
          
          function factorial($n, $t) {
          
                   if($n == 1) {
                      return $t;
                   } else {
                      return factorial($n-1, $t * $n); 
                   }
          }
          
          $t =1;
          
          echo "<strong>Factorial(5) = </strong>", factorial(5,$t);
          
          function isPrime( $n ) {
                $prime = True;
                $i = 2;
                while($i*$i <= $n && $prime == True) {
                      $prime = $n % $i != 0; 
                      $i+=1;  
                }
                return $prime;
          }

          function show_primes() {
               $out = "<br/><h3>Primes: ";

               $count = 0;
               $i = 2;
               while($count != 1000) {
               
                   if(isPrime($i)) {
                      $out .= $i. ", ";
                      $count += 1;
                   } 
                   $i += 1;
               }               
               $out .="</h3>"; 
               echo$out;
          }
          show_primes();
         ?>
</center>
        <ul>
	<li>Euclid's algorithm</li>
	<li>Sequence Fibonacci</li>	
        <li>Factorial with tail recursion</li>	
        <li>Primes</li>	
	</ul>

</body>
</html>
