<html>
<head>
<body>
<form method="POST" action="">
<input type="number" name="x" size="10">
<select name="znak">
<option>Dodaj</option>
<option>Odejmij</option>
<option>Pomnóż</option>
<option>Podziel</option>
</select>
<input type="number" name="y" size="10">
<input type="submit" value="Oblicz">
</form>
<?php
$x = $_POST['x'];
$y = $_POST['y'];
$znak = $_POST['znak'];
$wynik = "";
switch ($znak)
{
 case "Dodaj":
   $wynik = $x+$y;
   break;
 case "Odejmij":
   $wynik = $x-$y;
   break;
 case "Pomnóż":
   $wynik = $x*$y;
   break;
 case "Podziel":
   $wynik = $x/$y;
   break;
}
echo "Wynik = " . $wynik;
?>
</body>
</head>
</html>