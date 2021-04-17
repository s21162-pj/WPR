<html>
<head>
</head>
<body>
<form method="POST" action="">
<label>Podaj liczbę: </label><input type="number" name="liczba">
<input type="submit" value="Oblicz">
</form>
<?php
$liczba = $_POST['liczba'];
$x = 0;

if ($liczba < 1) {
         print ("Podaj prawidłową liczbę");
       } elseif ($liczba == 1) {
         print ('Ta liczba nie jest liczbą pierwszą');
       } else {
         $pierwsza = True;
         for ($i = 2; $i < $liczba; $i++) {
           if ($pierwsza) {
             if ($liczba % $i == 0) {
              $pierwsza = False;
             }
           }$x++;
         }
      }
      if ($pierwsza) {
        print ("Liczba $liczba jest liczbą pierwszą. ");
        echo $x . " - ilość iteracji";
      } else {
        print ("Liczba $liczba nie liczbą pierwszą. ");
        echo $x;
      }

?>
</body>
</html>