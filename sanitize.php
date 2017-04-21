<?php
function sanitize($tekst) {
    //haalt spaties, \n, returns, enz links en rechts weg
    $tekst = trim($tekst);
    //verwijdert hmtl en php tags weg
    $tekst = strip_tags($tekst);
    //escaped kritische tekens zolas ' en "
    $tekst = addslashes($tekst);
    return $tekst;
}
?>