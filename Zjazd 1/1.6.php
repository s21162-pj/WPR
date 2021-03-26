<html>
<body>
<form method="POST" action="">
<label>Wprowadź A: </label><input type="number" name="a">
<label>Wprowadź B: </label><input type="number" name="b">
<label>Wprowadź C: </label><input type="number" name="c">
<input type="submit" value="Licz">
</form>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if($a+$b > $c && $a+$c > $b && $b+$c > $a){
    echo('Da się zrobić trójkąt');
}
else{
    echo('BŁĄD');
    }

?>
</body>
</html>