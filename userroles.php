<?php
?>

<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">BPV bedrijven</div>
        <div class="panel-body">
            <p>Hieronder is een overzicht van alle potentiele BPV bedrijven die zijn ingevoerd</p>
        </div>

    <!-- Table -->
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Voornaam</th>
            <th>Tussenvoegsel</th>
            <th>Achternaam</th>
            <th>Geactiveerd</th>
            <th>Gebruikersrole</th>
        </tr>
        </thead>
        <tbody id="bpv_records_data">
      
        </tbody>
    </table>
</div>

<div class="alert alert-danger" role="alert" id="error_database">
    Er is iets misgegaan met de gegevens ophalen.
</div>