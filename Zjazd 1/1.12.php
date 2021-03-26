<html>
<body>
  <form action="" method="post">
    Podaj A: <input name="a" type="number">
    Podaj B: <input name="b" type="number">
    <input type="submit"value="Zatwierdź">
    </form>

<?php
if (isset($_POST["a"])&&isset($_POST["b"])){
    $matrix = array();
    for ($i=0; $i < $_POST["a"]; $i++) { 
        for ($j=0; $j < $_POST["b"]; $j++) { 
            $matrix[$i][$j] = rand(-1000,1000);
        }
    }
    for ($i=0; $i < $_POST["a"]; $i++) { 
        for ($j=0; $j < $_POST["b"]; $j++) { 
            echo $matrix[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "<br>Po transpozycji: <br>";
    for ($i=0; $i < $_POST["b"]; $i++) { 
        for ($j=0; $j < $_POST["a"]; $j++) { 
            echo $matrix[$j][$i]." ";
        }
        echo "<br>";
    }
}
?>
</body>
</html>