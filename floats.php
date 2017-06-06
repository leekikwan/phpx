<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php echo $float = 3.14; ?><br>
<?php echo $float + 7; ?><br>
<?php echo 4/3; ?><br>
Round: <?php echo round($float); ?><br>
Floor: <?php echo floor($float); ?><br>
Ceiling: <?php echo ceil($float); ?><br>
<?php $integer = 3; ?>
 <?php echo "Is {$integer} integer?" . is_int($integer); ?><br>
 <?php echo "Is {$float} integer?" . is_int($float); ?><br>
 <?php echo "Is {$integer} float?" . is_float($integer); ?><br>
 <?php echo "Is {$float} float?" . is_float($float); ?><br>
 <?php echo "Is {$integer} numeric?" . is_numeric($integer); ?><br>
 <?php echo "Is {$float} numeric?" . is_numeric($float); ?><br>
<body>
</body>
</html>