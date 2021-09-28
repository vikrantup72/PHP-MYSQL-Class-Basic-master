<?php 
function sum(&$x, &$y){
	$x= 30;
	$y= 50;
	$add= $x+$y;
	return $add;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<H1>PHP FUNCTION</H1>
	<?php
	$a= 10;
	$b= 20;
	$add = sum($a, $b);
	?>
	The sum of <?=$a?> and <?=$b?>  is <?=$add?>.
</body>
</html>