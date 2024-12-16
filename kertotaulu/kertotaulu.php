<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$luku = $_POST["luku"];

echo "for-silmukan avulla tehty";
echo "<br>";
for ($i = 1; $i <= 20; $i++) {
    echo ($luku * $i). ", ";
}
echo "<br>";
echo "<br>";

echo "while-silmukan avulla tehty";
echo "<br>";
$i = 1;
while ($i <= 20) {
    echo ($luku * $i). ", ";
    $i++;
}

?>
<br>
<br>
<input type="button" value="Laske uudelleen" onclick="history.back()">
</body>
</html>