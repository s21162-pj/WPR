<html>
<body>
<form method="POST" action="">
<label>Wprowadź A: </label><input type="number" name="a">
<label>Wprowadź B: </label><input type="number" name="b">
<input type="submit" value="Zatwierdź">
</form>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
echo 'Wynik dodawania: ' . ($a + $b);
echo("<br>");
echo 'Wynik odejmowania: ' . ($a - $b);
echo("<br>");
echo 'Wynik mnożenia: ' . ($a * $b);
echo("<br>");
echo 'Wynik modulo: ' . ($a % $b);
?>
</body>
</html>