<!DOCTYPE html>
<html>
<head></head>
<body>
<form method="POST">
<input type="text" name="num">
<input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_POST['submit'])){
   $num = $_POST['num'];
   if(!is_numeric($num) || $num < 0){
	echo "<h2>Enter positive number</h2>";
   }else{
	$sum = 0;
	for($i = 1; $i<= $num/2;$i++){
	 if($num % $i ==0){
		$sum = $sum + $i;
	 }
	}
     if($sum == $num){
	echo "<h2>Perfect Num..!</h2>";
     }else if($sum < $num){
	echo "<h2>Defecient Num..!</h2>";
     }else{
	echo "<h2>Abuntant Num..!</h2>";
     }
   }
}
?>
</body>
</html>