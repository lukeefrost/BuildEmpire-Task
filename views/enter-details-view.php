<link type="text/css" rel="stylesheet" href ="css.css"/>
<?php
include ("view_fncs.php");

?>

<html>
<form action="enter-details.php" method="POST">
	<h1>Enter User and Quote Details</h1>

<br>

<label for="title">Name:</label>
<input type="text" name="name" id="name">
<br>
<br>
<label for="title">Password:</label>
<input type="text" name="password" id="password">
<br>
<br>
<label for="title">Email Address:</label>
<input type="text" name="email" id="email">
<br>
<br>
<label for="title">Phone Number:</label>
<input type="text" name="phone" id="phone">
<br>
<br>
<input type="submit" name="submit" value="Submit" />
</form>
</html>

<?php
showFooter();
?>
