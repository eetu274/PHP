<?php
include "conn.php";
/* yhteys tietokantaan*/
$link = mysqli_connect($server, $kt, $sa, $db);

// Check connection
if($link === false){
die("ERROR: Ei voi yhdistää." . mysqli_connect_error());
}

// Turvallisempi tapa käyttää request oliota
//$nimi = mysqli_real_escape_string($link, $_REQUEST['nimi']); 
//$hinta = mysqli_real_escape_string($link, $_REQUEST['hinta']); 
//$kuva = mysqli_real_escape_string($link, $_REQUEST['kuva']);

//Otetaan parametrit muuttujiin. Huom Virheen korjaus ja tarkistus tehtävä
$nimi = $_POST["nimi"];
$hinta = $_POST["hinta"];
$kuva = $_POST["kuva"];

// Tallennetaan tiedot ja siirrytään takaisin uusituote.php sivulle
$sql = "INSERT INTO tuotteet (nimi, hinta, kuva) VALUES ('$nimi', '$hinta','$kuva')"; 
if(mysqli_query($link, $sql)){
    echo "Uusi tuote lisätty.";
    echo "<br><a href='uusituote.html'>Takaisin</a>";
} else{
    echo "ERROR:" . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>