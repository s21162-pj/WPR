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
<label>Planowana ilość nocy: </label><select name="noc">
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
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$osoby = $_POST['osoby'];
$data = $_POST['data'];
$noc = $_POST['noc'];
$ulica = $_POST['ulica'];
$nrdom = $_POST['nrdom'];
$nrm = $_POST['nrm'];
$karta = $_POST['karta'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$lozeczko = $_POST['lozeczko'];
$udogodnienia = $_POST['udogodnienia'];
$iloscudog=count($udogodnienia); 
if (isset($_POST['lozeczko'])) {
    $lozeczko = 'Łóżeczko - tak';
} else {
    $lozeczko = 'Łóżeczko - nie';
}

$fp = fopen('dane.csv', 'a');
fwrite($fp, $imie);
fwrite($fp, ";");
fwrite($fp, $nazwisko);
fwrite($fp, ";");
fwrite($fp, $osoby);
fwrite($fp, ";");
fwrite($fp, $data);
fwrite($fp, ";");
fwrite($fp, $noc);
fwrite($fp, ";");
fwrite($fp, $ulica);
fwrite($fp, ";");
fwrite($fp, $dom);
fwrite($fp, ";");
fwrite($fp, $nrm);
fwrite($fp, ";");
fwrite($fp, $karta);
fwrite($fp, ";");  
fwrite($fp, $email);
fwrite($fp, ";");  
fwrite($fp, $tel);
fwrite($fp, ";");  
fwrite($fp, $lozeczko);
fwrite($fp, ";"); 
fwrite($fp, $udogodnienia);
fwrite($fp, "\n");
?>   

<form action="3.3.php" method="post">
<label>
<tr>
<br><br>
<td>Pokaż tabelę</td>
<td><input type="checkbox" name="wynik"></td>
<br>
<td><input type="submit" value="Wyślij"/></td>
</tr>
</label>
</form>

<?php
$row = 1;
if (isset($_POST["results"])) {
if (($handle = fopen("dane.csv", "r")) !== FALSE) {
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
$num = count($data);
echo "<p> $num fields in line $row: <br /></p>\n";
$row++;
for ($c=0; $c < $num; $c++) {
echo $data[$c] . "<br />\n";
}
}
fclose($handle);
}}
?>
</body>
</head>
</html>