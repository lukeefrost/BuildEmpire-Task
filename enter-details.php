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
	header("Location:create-profile-form.php");
}

//get the form data
$name=$_POST['name'];
$password=$_POST['password'];
$eaddress=$_POST['email'];
$phone=$_POST['phone'];
$num1 = $_POST['hours'];
$num2 = $_POST['multiply'];
$num3 = $_POST['quantity'];
$num4 = $_POST['multiply1'];
$totalinvoice = $_POST['totalinvoice'];
$first = $num1 * $num2;
$second = $num3 * $num4;
echo "Name: ". $name;
echo "<br>";
echo "Password: ". $password;
echo "<br>";
echo "Email Address: ". $eaddress;
echo "<br>";
echo "Phone Number: ". $phone;
echo "<br>";
echo "Total for Service is ". $first;
echo "<br>";
echo "Total for Goods is ". $second;
echo "<br>";
$total = $first + $second;
echo "Total Invoice is ". $total;



//$validate the form data
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

if(!complete($totalinvoice))
{
	$validForm=false;
	$errorMsgs[]="<p>You need to enter a quote total</p>";
}

if(!$validForm)
{
	include("views/enter-details-error-view.php");
	exit;
}

//Now try and insert the data
$conn=getConn();
$success=insertCustomer($conn,$name,$password,$eaddress,$phone,$totalinvoice);
$conn=NULL; //close the connection

if($success)
{
	include("views/enter-details-confirm-view.php");

}else
{
	$errorMsgs[]="Problem inserting data into the database";
	include("views/enter-details-error-view.php");
}



?>
</body>
</html>
