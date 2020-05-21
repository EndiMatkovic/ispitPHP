<?php

$rijec = $_POST['text'];

$broj = strlen($rijec); 

function samoglasnici($rijec){
    $counter = strlen($rijec);
    $samoglasnici = 0;

    for ($i=0; $i<$counter; $i++){
        if(($rijec[$i]=='a')||($rijec[$i]=='e')||($rijec[$i]=='i')||($rijec[$i]=='o')||($rijec[$i]=='u'))
        $samoglasnici++;
    }
    return $samoglasnici;
}

$samoglasnici = samoglasnici ($rijec);

/*function suglasnici($rijec){
    $counter = strlen($rijec);
    $suglasnici = 0;

    for ($i=0; $i<$counter; $i++){
        if(!($rijec[$i]=='a')||!($rijec[$i]=='e')||!($rijec[$i]=='i')||!($rijec[$i]=='o')||!($rijec[$i]=='u'))
        $suglasnici++;
    }
    return $suglasnici;
}*/

$suglasnici = $broj - $samoglasnici;

/*$testJson = file_get_contents ('test.json');
$test = json_decode ($testJson, true);*/

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Ispit PHP</title>
</head>

<body>
<p>Upišite riječ:</p>
<form action="ispit.php" method="post">
<input type="text" name="text"><br>
<input type="submit" value="Pošalji"/>
</form>

<br>
<br>

<table border=2>

<tr>
    <th>Riječ</th>
    <th>Broj slova</th>
    <th>Broj suglasnika</th>
    <th>Broj samoglasnika</th>
</tr>
<!--<tr>
    <td><?//php echo ($test[0]); ?></td>
    <td><?//php echo ($broj = $test[0]); ?> </td>
    <td><?//php echo ($suglasnici= $test[0]); ?></td>
    <td><?//php echo ($samoglasnici= $test[0]);*/ ?></td>
</tr>-->
<?php
if ($rijec = !empty($_POST)){
    echo "<tr>";
    echo "<td>"; 
    echo $_POST['text'];
    echo "</td>";
    echo "<td>";
    echo $broj;
    echo "</td>";
    echo "<td>";
    echo $suglasnici;
    echo "</td>";
    echo "<td>";
    echo $samoglasnici;
    echo "</td>";
    echo "</tr>";
} else {
    return "Upišite riječ!";
}
?>
</table>
</body>
</html>

<?php

$upis = [
    'Riječ' => $rijec,
    'Broj slova' => $broj,
    'Broj suglasnika' => $suglasnici,
    'Broj samoglasnika' => $samoglasnici
];

$podaci [] = $upis;
$podaciJson = json_encode($podaci);
$kraj = file_put_contents(__DIR__,'/test.json', $podaciJson);

?>