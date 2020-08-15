<?php
	if(isset($_POST['submit'])){
		session_start();
		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);

		header('Location: page2.php');
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sessions</title>
</head>
<body>
<form action="index.php" method="post">
	<input type="text" name="name" placeholder="Name">
	<input type="email" name="email" placeholder="E-Mail">
	<button type="submit" name="submit">Submit</button>
</form>
</body>
</html>