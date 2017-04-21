<?php
// Haal alle records uit de tabel en echo deze in een jsonstring naar het scherm.

//maak contact met de databse
include("connect_db.php");

//dit is de query die de gegevens uit de database haalt
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM `bpv_companies`";

//de query wordt afgevuur op de databse
$result = mysqli_query($conn,$query);

//we maken een laag array genaamd $records
$records = array();

//we checken of de database geen error geeft
if ($result) {
    // wanneer de database geen foutmelding geeft
    // gaan we checker of er 1 of meer records zijn gevonden
    // in de database en als die zijn gevonden
    if (mysqli_num_rows($result) > 0 ) {
        //dan stoppen we alle gevonden records uit de database in een array
        $records = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //helemaal voorin het array $records in de database
        //voegen we tekst "succes_records_found" aan het lege array
        array_unshift($records, "succes_records_found");
    } else {
        array_unshift($records, "no_recorda_found");
    }
} else {
     array_unshift($records, "error_database");
}
//var_dump($records);
$jsonstr = json_encode($records);

echo $jsonstr;
?>