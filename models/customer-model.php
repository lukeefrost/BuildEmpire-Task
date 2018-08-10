<?php

function insertCustomer($conn,$name,$password,$eaddress,$phone,$totalinvoice)
{
	$query="INSERT INTO Customers VALUES (NULL, :name, :password, :email, :phone, :totalinvoice)";
	$stmt=$conn->prepare($query);
	$stmt->bindValue(':name', $name);
	$stmt->bindValue(':password', $password);
	$stmt->bindValue(':email', $eaddress);
	$stmt->bindValue(':phone', $phone);
	$stmt->bindValue(':totalinvoice', $totalinvoice);
	$affected_rows = $stmt->execute();
	if($affected_rows==1)
	{
		return true;
	}else{
		return false;
	}
}

?>
