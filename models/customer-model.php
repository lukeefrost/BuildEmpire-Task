<?php

function insertCustomer($conn,$name,$password,$eaddress,$phone,$quote)
{
	$query="INSERT INTO Customers VALUES (:name, :password, :email, :phone, :quote)";
	$stmt=$conn->prepare($query);
	$stmt->bindValue(':name', $name);
	$stmt->bindValue(':password', $password);
	$stmt->bindValue(':email', $eaddress);
	$stmt->bindValue(':phone', $phone);
  $stmt->bindValue(':quote', $quote);
	$affected_rows = $stmt->execute();
	if($affected_rows==1)
	{
		return true;
	}else{
		return false;
	}
}

?>
