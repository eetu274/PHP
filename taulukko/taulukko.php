<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$rivi = $_POST["rivi"];
$solu = $_POST["solu"];

echo "<table border>";
for ($i = 1; $i <= $rivi; $i++) {
    echo "<tr>";
    for ($a = 1; $a <= $solu; $a++) {
        echo "<td> Solu ". $a. ", Rivi ". $i. "</td>";
    }
    echo "</tr>";
} 
echo "</table>";
?>
</body>
</html>