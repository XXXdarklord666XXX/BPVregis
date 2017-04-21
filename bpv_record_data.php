<?php
   session_start();
   // Maak contact met de database
   include("connect_db.php");
   include("sanitize.php");
   // Zet de JSON string om naar een associatief array
   $data = json_decode($_GET["jsonstr"], true);

   $query = "SELECT *
             FROM `bpv_companies` 
             WHERE `StudentNumber` = '" . $_SESSION["id"] . "'
             AND   `URL` = " . $data["URL"];

   $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 0 ) {

        // Bouw de query op
        $query = "INSERT INTO `bpv_companies` (`StudentNumber`,
                                                `CompanyName`,
                                                `CompanyNumber`,
                                                `Person`, 
                                                `PersonNumber`, 
                                                `Address`, 
                                                `AddressNumber`, 
                                                `City`, 
                                                `PostalCode`, 
                                                `Email`, 
                                                `URL`, 
                                                `Description`) 
                    VALUES                      ('" . $_SESSION["id"] . "', 
                                                '" . $data["CompanyName"] . "', 
                                                '" . $data["CompanyNumber"] . "', 
                                                '" . $data["Person"] . "', 
                                                '" . $data["PersonNumber"] . "', 
                                                '" . $data["Address"] . "', 
                                                '" . $data["AddressNumber"] . "', 
                                                '" . $data["City"] . "', 
                                                '" . $data["PostalCode"] . "', 
                                                '" . $data["Email"] . "', 
                                                '" . $data["URL"] . "', 
                                                '" . $data["Description"] . "');";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "succes_record_saved";
        } else {
            echo "error_record_not_saved";
        }
    } else {
        echo "error_company_exists";
    }
?>