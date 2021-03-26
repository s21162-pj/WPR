<html>
<body>
<form method="POST" action="">
<label>Liczba A </label><input type="number" name="a">
<label>Liczba B </label><input type="number" name="b">
<label>Liczba C </label><input type="number" name="c">
<input type="submit" value="Zatwierdź">
</form>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
    
if ($a < $b && $a < $c){
    if ($b < $c){
        echo $a;
        echo $b;
        echo $c;
    }else{
        echo $a;
        echo $c;
        echo $b;
    }
} else if($b < $a && $b < $c){
    if ($a < $c){
        echo $b;
        echo $a;
        echo $c;
    }else{
        echo $b;
        echo $c;
        echo $a;
    }
} else if($c < $a && $c < $b){
    if ($a < $b){
        echo $c;
        echo $a;
        echo $b;
    }else{
        echo $c;
        echo $b;
        echo $a;
    }
}

echo "<br />";
    
if ($a > $b && $a > $c){
    if ($b > $c){
        echo $a;
        echo $b;
        echo $c;
    }else{
        echo $a;
        echo $c;
        echo $b;
    }
} else if($b > $a && $b > $c){
    if ($a > $c){
        echo $b;
        echo $a;
        echo $c;
    }else{
        echo $b;
        echo $c;
        echo $a;
    }
} else if($c > $a && $c > $b){
    if ($a > $b){
        echo $c;
        echo $a;
        echo $b;
    }else{
        echo $c;
        echo $b;
        echo $a;
    }
}
 
?>
</body>
</html>