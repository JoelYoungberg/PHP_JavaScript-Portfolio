<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Little Bo What?!</title>
</head>

<body>
<center>

<h1> Little Bo What?! </h1>

<?

$sound = $_REQUEST["sound"];
$animal = $_REQUEST["animal"];
$appendage = $_REQUEST["appendage"];
$object = $_REQUEST["object"];
$place = $_REQUEST["place"];
$occupation = $_REQUEST["occupation"];
$familyMember = $_REQUEST["familyMember"];

print <<<HERE

<h3> 	
Little Bo $sound has lost her $animal<br>
And doesn't know where to find them.<br>
Leave them alone and they'll come home,<br>
Bringing their $appendage behind them.<br>
Little Bo $sound fell fast asleep<br>
And dreamt she heard them bleating,<br>
But when she awoke, she found it a joke,<br>
For they were all still fleeting.<br>
Then up she took her little $object<br>
Determined for to find them.<br>
She found them indeed, but it made her heart bleed,<br>
For they left their $appendage behind them.<br>
It happened one day, as Bo peep did stray<br>
Into a $place hard by,<br> 
There she espied their $appendage side by side<br>
All hung on a tree to dry.<br>
She heaved a sigh, and wiped her eye,<br>
And over the hillocks went rambling,<br>
And tried what she could,<br>
As a $occupation should,<br>
To tack again each to its $familyMember. 
</h3>
HERE;
?>

</center>

</body>
</html>