<html>
<head>
</head>
<body>
<?php
include ("helpers/db_fncs.php");
include ("models/customer-model.php");
include ("helpers/validation_fncs.php");

//check if they've submitted the form
if(!isset($_POST["submit"]))
{
	header("Location:enter-details-form.php");
}
//get the form data
$name=$_POST['name'];
$password=$_POST['password']
$eaddress=$_POST['email'];
$phone=$_POST['phone'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$hours=$_POST['hours'];
$pricehour=$_POST['pricehour'];

$serviceTotal = $hours * $pricehour;
$goodTotal = $quantity * $price;
$quote = $serviceTotal + $goodTotal;



//validate the form data
$validForm=true;
$errorMsgs=[];

if(!complete($name))
{
	$validForm=false;
	$errorMsgs[]="<p>You need to enter a name</p>";
}

if(!complete($password))
{
	$validForm=false;
	$errorMsgs[]="<p>You need to enter a password</p>";
}

if(!complete($eaddress))
{
	$validForm=false;
	$errorMsgs[]="<p>You need to enter an email address</p>";
}

if(!complete($phone))
{
	$validForm=false;
	$errorMsgs[]="<p>You need to enter a phone number</p>";
}

if(!$validForm)
{
	include("views/enter-details-error-view.php");
	exit;
}

//Now try and insert the data
$conn=getConn();
$success=insertCustomer($conn,$name,$password,$eaddress,$phone);
$conn=NULL; //close the connection

if($success)
{
	include("views/enter-details-confirm-view.php");

}else
{
	$errorMsgs[]="Problem inserting data into the database";
	include("views/enter-details-error-view.php");
}

//Echo the variables posted on the page from the enter details view..
echo 'Name: ' . $_POST['name'];
echo "<br>";
echo 'Password: ' . $_POST['password'];
echo "<br>";
echo 'Email Address: ' . $_POST['email'];
echo "<br>";
echo 'Phone Number: ' . $_POST['phone'];
echo "<br>";
echo 'Total Quote: ' . $_POST['quote'];

?>
</body>
</html>
