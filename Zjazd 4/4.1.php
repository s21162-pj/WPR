<html>
<head>
<meta charset="UTF-8">
    <style>
        body {
            background: #F1F1F1;
		}
    </style>
    </head>
<body>
<header>
	<h2> HOTEL - zadanie 2 i 3</h2>
</header>
<form method="POST" action="">
<label>Podaj imię: </label><input type="text" name="imie" size="20" reqiured>
<br>
<label>Podaj nazwisko: </label><input type="text" name="nazwisko" size="20" reqiured>
<br>
<label>Licza osób: </label><select name="osoby">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select>
<br>
<label>Planowana data przyjazdu: </label><input type="date" name="data" size="5" reqiured>
<label>Planowana ilość nocy: </label><select name="ilenocy">
<option>1</option>
<option>2</option>
<option>3</option>
<option>5</option>
<option>6</option>
<option>7</option>
</select>
<br>
<label>Ulica: </label><input type="text" name="ulica" size="20" reqiured>
<label>Nr domu: </label><input type="text" name="nrdom" size="5" reqiured>
<label>Nr mieszkania: </label><input type="text" name="nrm" size="5">
<br>
<label>Nr karty: </label><input type="number" name="karta" size="20" min=0000000000000000 max=9999999999999999 reqiured>
<br>
<label>Email: </label><input type="email" name="email" size="10" reqiured>
<br>
<label>Nr telefonu: </label><input type="number" name="tel" size="10" min=111111111 max=999999999 reqiured>
<br>
<label>Czy łóżko dla dziecka? </label><input type="checkbox" name="lozeczko" value="tak">
<br>
<label>Dodatkowo </label><select multiple name='udogodnienia[]' size=5>
<option value='klimatyzacja'>klimatyzacja</option>
<option value='popielniczka'>popielniczka</option>
<option value='czajnik'>czajnik</option>
<option value='balkon'>balkon</option>
</select>
<br>
<input type="submit" value="Wyślij">
</form>
<?php
session_start();
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$osoby = $_POST['osoby'];
$data = $_POST['data'];
$ilenocy = $_POST['ilenocy'];
$ulica = $_POST['ulica'];
$nrdom = $_POST['nrdom'];
$nrm = $_POST['nrm'];
$karta = $_POST['karta'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$lozeczko = $_POST['lozeczko'];
$udogodnienia = $_POST['udogodnienia'];
$iloscudog=count($udogodnienia); 
echo("Potwierdzenie: ");
echo "\n";
echo("Imię: $imie Nazwisko: $nazwisko Liczba osób: $osoby Data: $data Ilość nocy: $ilenocy Adres: $ulica $nrdom $nrm Numer karty: $karta Email: $email Numer telefonu: $tel Łóżeczko $lozeczko Ilość udogodnień: $iloscudog");
  
if($osoby>1) {
    setcookie("imie", $imie, time()+60+60+24+14);
    setcookie("nazwisko", $nazwisko, time()+60+60+24+14);
    setcookie("osoby", $osoby, time()+60+60+24+14);
    echo ('<form>');
    for($i = 1; $i<$osoby; $i++) {
        echo('
                <br>
				<h3>Dane pozostałych osób: </h2>
				<label>Imię osoby: </label><input type="text" size="20" reqiured name="imie"></label>
				<br>
				<label>Nazwisko osoby: </label><input type="text" size="20" reqiured name="nazwisko"></label>
				<br>');
				}
            }
echo ('
<br>
<input type="submit" value="Wyślij">
</form>'
);
session_destroy();    
?>
</body>
</html>
