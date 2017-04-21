<?php
session_start();

//maak contact met de databse
include("connect_db.php");

//dit is de query die de gegevens status update
$query = "UPDATE `bpv_companies` SET `Status` = '". $_POST["status"] ."'
          WHERE `StudentNumber` = '" . $_SESSION["id"] . "'
          AND `URL` = '" . $_POST["URL"] . "'";

//echo $query;
// De query wordt afgevuurd op de database...
$result = mysqli_query($conn, $query);

//we maken een laag array genaamd $records
$records = array();

//we checken of de database geen error geeft
if ($result) {
    // wanneer de database geen foutmelding geeft
        array_unshift($records, "succes_update");
    } else {
        array_unshift($records, "error_update");
    }
//var_dump($records);

// Uiteindelijk zetten we het niet lege array om in een 
// JSON-string.
$jsonStr = json_encode($records);

// De JSON-sting wordt op de pagina weergegeven en is opvraagbaar
// met xhr.responseText
echo $jsonStr;
?>