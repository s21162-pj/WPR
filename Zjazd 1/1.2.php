<html>
<body>
<form method="POST" action="">
<label>Wprowadź bok A: </label><input type="number" name="a">
<label>Wprowadź bok B: </label><input type="number" name="b">
<input type="submit" value="Licz">
</form>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
echo 'Pole Twojego prostokąta wynosi: ' . ($a * $b);
?>
</body>
</html>