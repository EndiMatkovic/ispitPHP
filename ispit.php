<?php

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
<input type="text" name="tekst"><br>
<input type="submit" value="Pošalji"/>
</form>

<br>
<br>

<?php
$rijec = $_POST ['text'];

$testJson = file_get_contents ('test.json');
$test = json_decode ($testJson, true);

$broj = strlen($rijec);
/*function samoglasnici ($str) {
    $broj = strlen ($str);
    $samoglasnici = 0;

    for ($i=0; i<$broj;$i++) {
        if (($str[$i]=='a')||($str[$i]=='e')||($str[$i]=='i')||($str[$i]=='o')||($str[$i]=='u')) {
            //echo $str [i];
            $samoglasnici++;
        }
    }
}
$samoglasnici = samoglasnici();*/
?>

<table border=2>

<tr>
    <th>Riječ</th>
    <th>Broj slova</th>
    <th>Broj suglasnika</th>
    <th>Broj samoglasnika</th>
</tr>
<tr>
    <td><?php echo ($test); ?></td>
    <td><?php echo ($broj); ?> </td>
    <td></td>
    <td></td>
</tr>
<?php
if ($rijec = !empty($_POST)){
    echo "<tr>";
    echo "<td>"; 
    echo ($_POST["tekst"]);
    echo "</td>";
    echo "<td> $broj </td>";
    echo "<td>Broj suglasnika</td>";
    echo "<td> broj </td>";
    echo "</tr>";
} else {
    return "Upišite riječ!";
}
?>
</table>

</body>
</html>