<html>
<body>
<?php
if (!$db = mysqli_connect("localhost", "root","","wpr")) {
	exit("Błąd połączenia");
}
else {
	echo "Połączono z bazą";
}
echo "</br>";
$query = 'select * from test';
if(!$result = mysqli_query($db,$query)){
    echo "Błąd połączenia";
}
else{
    echo "Połączono z bazą";
}
echo "</br>";
while($rows = mysqli_fetch_row($result)){
    foreach ($rows as $row){
        echo $row;
        echo "</br>";
    }
}
$result = mysqli_query($db,$query);
while($r=mysqli_fetch_array($result))
{
echo $r['id']."<br/>";
}

if ($result = mysqli_query($db, $query)) {
    $row_cnt = mysqli_num_rows($result);
    printf("Są %d rekordy w bazie danych\n", $row_cnt);
}

echo "</br></br>";

$insert = 'insert into test (id ,imie) values (3, "Andriej")';
if(mysqli_query($db, $insert)){
    echo "Nowa osoba dodana do bazy.";
} else{
    echo "Błąd, coś poszło nie tak albo ta osoba jest już w bazie danych ";
}
echo "</br>";
$rowsno = mysqli_affected_rows($db);
echo "Dodano rekordów: $rowsno"
?>
</body>
</html>
