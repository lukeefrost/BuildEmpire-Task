<?php

function insertCustomer($conn,$name,$password,$eaddress,$phone,$total)
{
	$query="INSERT INTO Customers VALUES (NULLL, :name, :password, :email, :phone, :total)";
	$stmt=$conn->prepare($query);
	$stmt->bindValue(':name', $name);
	$stmt->bindValue(':password', $password);
	$stmt->bindValue(':email', $eaddress);
	$stmt->bindValue(':phone', $phone);
	$stmt->bindValue(':total', $total);
	$affected_rows = $stmt->execute();
	if($affected_rows==1)
	{
		return true;
	}else{
		return false;
	}
}

?>
