<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php 
	$var1 = 3;
	$var2 = 4;
?>
Basic Math: <?php 
echo ((1+2+$var1)*$var2)/2-5;
?><br>
Absoulte Value: <?php echo abs(0-300); ?><br>
Exponential: <?php echo pow(2, 8); ?><br>
Squart root: <?php echo sqrt(100); ?><br>
Modulo: <?php echo fmod(20, 7); ?><br>
Random: <?php echo rand(); ?><br>
Random: <?php echo rand(1, 10); ?><br>
</body>
</html>