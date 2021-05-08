  
<!DOCTYPE html>
<html>
<body>
            <form action="3.2.php" method="post">
                Podaj imie: <input type="text" name="name">
                Podaj nazwisko: <input type="text" name="surname"><br>
                <input type="submit" name="sub">
            </form>
      
    </body>
</html>
<?php
if (isset($_POST["name"]) && isset($_POST["surname"])) {
$file = fopen('test.txt', 'a');
fwrite($file, $_POST["name"]);
fwrite($file, $_POST["surname"]);
fwrite($file, "\n");
fclose($file);
} 
?>