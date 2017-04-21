<div class="page-header">
  <h1>Registratie</h1>
    <p class="lead" 
      data-placement="right" 
      data-toggle="tooltip">
  </p>
</div>

<p class="lead">U kunt zich hier registreren</p>
<p>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Studentnummer: </label>
        <div class="col-sm-4">
          <input 
            type="text"
            class="form-control" 
            id="studentnummber" 
            placeholder="voor uw studentnummer in"
            data-toggle="tooltip"
            data-placement="right"
            title="Studenten voeren hun studentnummer in en docenten hun afkorting">
        </div>
      <div class="col-sm-6">
  </div>
</div>

<div class="form-group"> 
  <div class="col-sm-offset-2 col-sm-10">
    <button id="btn_regis" class="btn btn-default">Submit</button>
  </div>
</div>
</form>
</p>

<div class="alert alert-success" role="alert" id="alert_is_activated">
  Uw heeft een activatiemail ontvangen. Klik op de link in de mail om een wachtwoord te kiezen.
</div>
<div class="alert alert-danger" role="alert" id="alert_already_activated">
  Uw account is al geactiveerd. U wordt doorgestuurd naar de login pagina.
</div>
<div class="alert alert-warning" role="alert" id="alert_no_stNumber">
  U heeft geen studentnummer ingevuld. Wilt u dit alsnog doen?
</div>
<div class="alert alert-info" role="alert" id="alert_nonexisting_stNumber">
  U heeft een niet bestaand studentnummer ingevuld. Voer een bestaand studentnummer in.
</div>
<div class="alert alert-warning" role="alert" id="alert_mail_already_sent">
  U heeft al een activatiemail ontvangen. Kijk in u mailbox en activeer via de link.
</div>