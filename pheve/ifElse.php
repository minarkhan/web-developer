<?php 

if (isset($_POST['submit'])) {
	$tx = $_POST['tex'];
	$a = a;
	if ($tx == $a) {
		echo "excellent";
	}else if ($tx == b) {
		echo "good";
	}else if ($tx == c) {
		echo "fair";
	}else if ($tx == d) {
		echo "poor";
	}else if ($tx == f) {
		echo "failure";
	}
}



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Type A, B, C, D and F </h1>
	
	 <form action="" method="POST">
	 	<input type="text" name="tex" placeholder="Pleace Check Your Number Prime Or Not">
	 	<input type="submit" name="submit" value="Check">
	 </form>
</body>
</html>