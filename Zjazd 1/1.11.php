<html>
<body>
  <form action="" method="POST">
    Sprawdź czy podany tekst jest pangramem: <input name="a"/>
    <input type="submit"value="Zatwierdź">
    </form>
<?php
if (isset($_POST["a"])){
    $dict = range('A', 'Z');
    foreach ($dict as $index => $literal) {
        if(str_contains(strtolower($_POST["a"]),strtolower($literal))){
            unset($dict[$index]);
        }
    }
    echo empty($dict) ? "Jest pangramem" : "Nie jest pangramem";
}
?>

</body>
</html>