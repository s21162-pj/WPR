<html>
<head>
</head>
<body>
<form method="POST" action="3.1.php">
<input type="text" name="x" size="10">
<select name="znak">
<option value="+">Dodaj</option>
<option value="-">Odejmij</option>
<option value="*">Pomnóż</option>
<option value="/">Podziel</option>
</select>
<input type="text" name="y" size="10">
<input type="submit" value="Oblicz">
</form>
<?php
if (isset($_POST["x"]) && isset($_POST["y"]) && isset($_POST["znak"])) {
    $x = $_POST["x"];
    $y = $_POST["y"];
    $znak = $_POST["znak"];

    switch ($znak) {
        case "+": {
            require 'funkcje.php';
            dodaj($x, $y);
            break;
        }
        case "-": {
            require 'funkcje.php';
            odejmij($x, $y);
            break;
        }
        case "*": {
            require 'funkcje.php';
            pomnóż($x, $y);
            break;
        }
        case "/": {
            require 'funkcje.php';
            if ($y != 0) {
                podziel($x, $y);
            } else {
                echo "Tak nie można";
            }
            break;
        }
    }
}
?>
</body>
</html>