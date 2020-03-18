<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Associative Array</h1>
	
	 <form action="" method="POST">
	 	<input type="number" name="num" placeholder="Pleace Check Your Number Prime Or Not">
	 	<input type="submit" name="submit" value="Check">
	 </form>

	 <?php 
	//  if(isset($_POST['submit'])){
	// $number = $_POST['num'];
	// $prime = true;
	// if ($number == 1) {
	// 	$prime=false; 
			
	// }
	
	// for($i=2; $i<$number; $i++){
	// 	if($number%$i==0){
	// 		$prime=false; 
	// 		break;
			
	// 		}
	// 	}
		
	// 	if($prime==true){
	// 		echo "The number $number is prime"; 
			
	// 		}else{
	// 			echo "The number $number is not prime";
	// 			}
	
	// }

	 	// if(isset($_POST['submit'])){
	 	// 	$num = $_POST['num'];
	 	// 	$prime = true;
	 	// 	if($num==1){
	 	// 		$prime = false;
	 	// 	}
	 	// 		for ($i=2; $i <$num; $i++) { 
	 	// 			if ($num%$i==0) {
	 	// 				$prime = false;
	 	// 				break;
	 	// 			}
	 	// 		}
	 		
	 	// 	if($prime==true){
	 	// 		echo "<h2>$num is prime</h2>";
	 	// 	} else{
	 	// 		echo "<h2>$num isn't prime</h2>";
	 	// 	}
	 	// }


	 if(isset($_POST['submit'])){
	 	$num = $_POST['num'];
	 	$pr = true;
	 	if ($num==1) {
	 		$pr= false;
	 	}
	 	for ($i=2; $i <$num ; $i++) { 
	 		if ($num%$i == 0) {
	 			$pr = false;
	 			break;
	 		}
	 	}
	 	if ($pr==true) {
	 		echo "Prime";
	 	} else {
	 		echo "not Prime";
	 	}
	 }



	  ?>
	
</body>
</html>