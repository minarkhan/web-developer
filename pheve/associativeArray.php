<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Associative Array</h1>
	<?php 
		$assArray = array(
							"Bangladesh" => "Dhaka",
							"India" => "Dilhi",
							"Pakistan" => "Islamabad",
							"Iraq" => "Bagdad",
							"Iran" => "Tehran",
						);
		ksort($assArray);
		

	 ?>
	 <table border="1">
	 	<tr>
	 		<th>Country :</th>
	 		<th>Capital :</th>
	 	</tr>
	 	<?php foreach ($assArray as $country => $capital) { ?>
	 	<tr>
	 		<td><?php echo $country; ?></td>
	 		<td><?php echo $capital; ?></td>
	 	</tr>
	 <?php } ?>
	 </table>
	
</body>
</html>