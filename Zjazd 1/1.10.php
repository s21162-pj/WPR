<html>
<body>
<form method="POST" action="">
<label>Długość:  </label><input type="number" name="a">
<input type="submit" value="Zatwierdź">
</form>

<?php
$a = $_POST['a'];
function makePattern(int $size) {
	
	for($i=1; $i<=$size; $i++){
		for($j=1; $j<=$i; $j++) {
			echo("*");
		}
		echo("<br>");
	}
	for($i=$size; $i>=1; $i--){
		for($j=1; $j<=$i; $j++) {
			echo("*");
		}
		echo("<br>");
	}
	for($i=$size; $i>0; $i--){
		for($j=$i; $j<$size; $j++){
			echo str_repeat("&nbsp;", 2);
		}
		for($x=0; $x<$i; $x++) {
				echo("*");
			}
		echo("<br>");
	}
	for($i=0; $i<$size; $i++){
		for($j=$size; $j>$i+1; $j--){
			echo str_repeat("&nbsp;", 2);
		}
		for($x=0; $x<=$i; $x++) {
				echo("*");
			}
		echo("<br>");
	}
}
makePattern($a);
?>
</body>
</html>