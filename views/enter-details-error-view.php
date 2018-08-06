<link type="text/css" rel="stylesheet" href ="css.css"/>
<?php
include ("view-fncs.php");
showHeader("There was a problem");

foreach($errorMsgs as $errorMsg)
{
	echo "<p>".$errorMsg."</p>";
}

showFooter();

?>
