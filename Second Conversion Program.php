<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Second Conversion Program</title>
</head>

<body>
<?

//60 seconds = 1 minute
//60 minutes = 1 hour
//leftover = seconds

//declaring variables

//declare sec crossed over variable from input page
$sec = $_REQUEST["sec"];

//setting values of variables
$numMin = $sec/60;
//retain remainder here for leftover seconds (modulus)
$secLeft = $sec%60;
$numHour = $numMin/60;
//type casting hour and minute values to integers
$numHouri = (int) $numHour;
$numMini = (int) $numMin;

//outputting results
print <<<HERE
<h2>
Breakdown of Seconds to Hours, Minutes, and Seconds is:<br>
$numHouri : $numMini : $secLeft
</h2>
HERE;
?>

</body>
</html>