<?php
//maak contact met de database
include("connect_db.php");

$query = "SELECT * FROM `users` 
          WHERE `id` = '".$_GET["StNummer"]."'";

//vuur de query af op de database
$result = mysqli_query($conn, $query);

$record_found = mysqli_num_rows($result);

if ( $record_found > 0 ) {
    $record = mysqli_fetch_array($result, MYSQLI_ASSOC);
    //var_dump($record);
    if ( !strcmp($record["activate"], "true")) {
        if ( !strcmp($record["password"], sha1($_GET["password"]))) {
            session_start();
            $_SESSION["id"] = $record["id"];
            $_SESSION["userrole"] = $record["userrole"];
            echo $record["userrole"];
        } else {
            echo "error_pw";
        }         
    } else {
        echo "error_activate";
    }
} else {
    echo "error_id";
}
?>