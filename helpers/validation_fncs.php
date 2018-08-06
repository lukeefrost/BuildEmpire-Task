<?php

function complete($value)
{
	$trimmedVal=trim($value);
	if(empty($trimmedVal))
	{
		return false;
	}
	return true;
}

?>
