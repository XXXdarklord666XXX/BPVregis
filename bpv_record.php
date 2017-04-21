<form class="form-bpv">
        <h2 class="form-bpv-heading">Voeg een bedrijf toe</h2>
        <label for="CompanyName" class="sr-only">Bedrijfsnaam</label>
        <input type="text" id="CompanyName" value="Bedrijfsnaam" class="form-control" placeholder="Bedrijfsnaam" required autofocus>

        <label for="CompanyNumber" class="sr-only">Telefoonnummer</label>
        <input type="text" id="CompanyNumber" value="0229567890" class="form-control" placeholder="0229567890" required>

        <label for="Person" class="sr-only">Contactpersoon</label>
        <input type="text" id="Person" value="Contactpersoon" class="form-control" placeholder="Contactpersoon" required autofocus>

        <label for="PersonNumber" class="sr-only">Telefoonnummer</label>
        <input type="text" id="PersonNumber" value="0229567890" class="form-control" placeholder="0229567890" required>

        <label for="Address" class="sr-only">Adres</label>
        <input type="text" id="Address" value="Adres" class="form-control" placeholder="Adres" required>

        <label for="AddressNumber" class="sr-only">Huisnummber</label>
        <input type="number" id="AddressNumber" value="420" class="form-control" placeholder="Huisnummer" required>

        <label for="City" class="sr-only">Woonplaats</label>
        <input type="text" id="City" value="Woonplaats" class="form-control" placeholder="Woonplaats" required>

        <label for="PostalCode" class="sr-only">Postcode</label>
        <input type="text" id="PostalCode" value="1234AB" class="form-control" placeholder="1234AB" required>

        <label for="Email" class="sr-only">Emailadres</label>
        <input type="email" id="Email" value="Emailadres" class="form-control" placeholder="Emailadres" required>

        <label for="URL" class="sr-only">Website</label>
        <input type="email" id="URL" value="Websitelink" class="form-control" placeholder="Websitelink" required>

        <label for="Description" class="sr-only">Omschrijving van het bedrijf</label>
        <input type="text" id="Description" value="Omschrijving van het bedrijf" class="form-control" placeholder="Omschrijving van het bedrijf" required>

        <div class="alert alert-success" role="alert" id="succes_record_saved">
                De informatie is succesvol opgeslagen.
        </div>

        <div class="alert alert-danger" role="alert" id="error_record_not_saved">
                Er is een fout opgetreden, neem contact op met de beheerder.
        </div>

        <div class="alert alert-danger" role="alert" id="error_company_exists">
                U heeft dit bedrijf al ingevoerd.
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit" id="btn_bpv">Gaan!</button>
</form>


