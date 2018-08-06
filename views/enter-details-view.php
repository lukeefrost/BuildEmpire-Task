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
<label for="title">Service:</label>
<label for="title">Hours:</label>
<input type="text" name="hours" id="hours">
<label for="title">Price per Hour:</label>
<input type="text" name="pricehour" id="pricehour">
<br>
<br>
<label for="title">Goods:</label>
<label for="title">Quantity:</label>
<input type="text" name="quantity" id="quantity">
<label for="title">Price per Product:</label>
<input type="text" name="price" id="price">
<br>
<br>
<input type="submit" name="submit" value="Submit" />
</form>
</html>

<?php
showFooter();
?>
