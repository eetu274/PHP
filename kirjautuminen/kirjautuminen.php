<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulos</title>
</head>
<body>
<?php
$nimi = $_POST["nimi"];
$sala = $_POST["sala"];

if ($nimi == "eetu" && $sala == "porkkana") {
    echo "Kirjautuminen onnistui!";
} else {
    echo "Kirjuatuminen epäonnistui!";
}
?>
</body>
</html>