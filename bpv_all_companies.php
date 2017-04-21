<?php
?>

<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">BPV bedrijven</div>
        <div class="panel-body">
            <p>Hieronder is een overzicht van alle potentiele die studenten hebben ingevoerd</p>
        </div>

    <!-- Table -->
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Studentnummer</th>
            <th>Bedrijf</th>
            <th>Straat</th>
            <th>Plaats</th>
            <th>Contactpersoon</th>
            <th>06-nummer</th>
            <th>website</th>
            <th>status</th>
        </tr>
        </thead>
        <tbody id="bpv_records_data">
      
        </tbody>
    </table>
</div>

<div class="alert alert-warning" role="alert" id="no_records_found">
    Er zijn geen bedrijven gevonden. Klik <a href="index.php?content=bpv_record"> hier </a> om een bedrijf toe te voegen
</div>
<div class="alert alert-danger" role="alert" id="error_database">
    Er is iets misgegaan met de gegevens ophalen, neem contact op met de administrator.
</div>