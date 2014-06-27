<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Address Organizer</title>
</head>

<body>
<?

//Declare variables carried over from form:
$firstName = $_REQUEST["firstName"];
$lastName = $_REQUEST["lastName"];
$streetAddress = $_REQUEST["streetAddress"];
$city = $_REQUEST["city"];
$state = $_REQUEST["state"];
$zip = $_REQUEST["zip"];

//Creating new variables
$fullName = "$firstName $lastName";
$csz = "$city $state $zip";

//Convert all to upper case
//Output fullname, street address, and csz to browser


$fullName = strtoupper($fullName);
$csz = strtoupper($csz);

echo $fullName;
echo $csz;

?>


</body>
</html>