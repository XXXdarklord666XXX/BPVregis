<div class="container">
    <form class="form-signin">
        <h2 class="form-signin-heading">login</h2>
        <label for="inputStNummer" class="sr-only">Studentnummer</label>
            <input type="text" id="inputStNummer" class="form-control" placeholder="Studentnummer" required autofocus
                    placeholder="voor uw studentnummer in"
                    data-toggle="popover"
                    data-placement="right">
        <label for="inputPassword" class="sr-only">Wachtwoord</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Wachtwoord" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
    <button class="btn btn-lg btn-primary btn-block" id="btn_login" type="submit">Sign in</button>
    </form>
</div>

<div class="alert alert-danger" role="alert" id="error_id">
    Het door uw ingevulde student nummer komt niet voor in onze database, probeer het opnieuw.
</div>
<div class="alert alert-danger" role="alert" id="error_pw">
    Het door u ingevoerde password is niet correct. Probeer het opnieuw.
</div>
<div class="alert alert-warning" role="alert" id="error_activate">
    U heeft uw account nog niet geactiveerd. Bekijk uw activatiemail en klik op de link.
</div>