<?php
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>pag2</title>
</head>
<body>
<p>Hello <?php  echo $name ?>, You have subscribed to the email address <?php echo $email ?></p>
</body>
</html>