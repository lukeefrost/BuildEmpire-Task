
<head>
</head>
<body>
<?php
include ("helpers/db_fncs.php");
include ("models/member-model.php");
include ("helpers/validation_fncs.php");

//check if they've submitted the form
if(!isset($_POST["submit"]))
{
	header("Location:create-profile-form.php");
}
//get the form data
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$date=$_POST['date'];
$eaddress=$_POST['email'];
$phone=$_POST['phone'];

//$validate the form data
$validForm=true;
$errorMsgs=[];

if(!complete($fname))
{
	$validForm=false;
	$errorMsgs[]="<p>You need to enter a first name</p>";
}

if(!complete($lname))
{
	$validForm=false;
	$errorMsgs[]="<p>You need to enter a last name</p>";
}

if(!complete($date))
{
	$validForm=false;
	$errorMsgs[]="<p>You need to enter a date</p>";
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
	include("views/create-profile-error-view.php");
	exit;
}

//Now try and insert the data
$conn=getConn();
$success=insertMember($conn,$fname,$lname,$date,$eaddress,$phone);
$conn=NULL; //close the connection

if($success)
{
	include("views/create-profile-confirm-view.php");
