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
$as_nimi = $_POST["as_nimi"];
$osoite = $_POST["osoite"];
$sposti = $_POST["sposti"];

// Tallennetaan tiedot ja siirrytään takaisin uusituote.php sivulle
$sql = "INSERT INTO asiakkaat (as_nimi, osoite, sposti) VALUES ('$as_nimi', '$osoite','$sposti')"; 
if(mysqli_query($link, $sql)){
    echo "Uusi asiakas lisätty.";
    echo "<br><a href='uusiasiakas.html'>Takaisin</a>";
} else{
    echo "ERROR:" . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>