<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Instructor Project.php</title>
</head>

<body>
<?
//Declaring Decimal Variables
$dec1 = $_REQUEST["dec1"];
$dec2 = $_REQUEST["dec2"];
$dec3 = $_REQUEST["dec3"];
$dec4 = $_REQUEST["dec4"];
$dec5 = $_REQUEST["dec5"];
//Creating Sum and Average and Declaring Variables
$sum1= $dec1 + $dec2 + $dec3 + $dec4 + $dec5;
$avg1= $sum1/5;


print <<<HERE
<h3>
$dec1<br>
$dec2<br>
$dec3<br>
$dec4<br>
$dec5<br>
<br>
Sum of 5.5 + 4.7 + 2.3 + 2.1 + 6.7 =$sum1<br>
Average = $avg1<br>


</h3>
HERE;

//Type-Casting Original Variables of Decimals into Integers
$dec1i= (int) $dec1;
$dec2i= (int) $dec2;
$dec3i= (int) $dec3;
$dec4i= (int) $dec4;
$dec5i= (int) $dec5;
$sum2= $dec1i + $dec2i + $dec3i + $dec4i + $dec5i;
$avg2= $sum2/5;
print <<<HERE2
<h3>
Rounded numbers with Sum: $dec1i + $dec2i + $dec3i + $dec4i + $dec5i = $sum2<br>
Average of Rounded numbers: $avg2<br>

</h3>
HERE2;
?>
</body>
</html>