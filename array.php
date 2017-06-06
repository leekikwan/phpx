<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
</head>
<?php 
 	$numbers = array(4, 8, 9, 15, 17, 22, 45);
	echo $numbers[1]; 
?><br>
<?php 
	$mixed = array(6, "fox", "dog", array("x", "y", "z")); 
?>

<?php echo $mixed[2]; ?><br>
<?php //echo $mixed[3]; ?><br>

<?php  echo $mixed[3][1]; ?>
<?php $mixed[2] = "cat" ; ?>
<?php  $mixed[4] = "dog"; ?>
<?php  $mixed[] = "horse"; ?>
<pre>
	<?php echo print_r($mixed) ; ?>
</pre>
<body>
</body>

</html>