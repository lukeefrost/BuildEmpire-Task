<link type="text/css" rel="stylesheet" href ="css.css"/>
<?php
include ("view_fncs.php");


foreach($errorMsgs as $errorMsg)
{
	echo "<p>".$errorMsg."</p>";
}

showFooter();

?>
