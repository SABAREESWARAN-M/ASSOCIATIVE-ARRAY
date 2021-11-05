<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="Associativearraygradecheckng.php" method="POST" align="center">
<h2>Student Result using user input through Associativearray</h2><br>
	<label>Enter Student name( like Type "101" or "102")</label>
	<input type="text" name="name"><br><br>
<input type="submit" value="Check Grade">	
</form>
<?php
$grade=array("101"=>"PASS","102"=>"FAIL");
echo "Your Grade is :".$grade[$_POST["name"]];
?>
</body>
</html>
