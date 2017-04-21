// Maak een handvat op de button
var btn = document.getElementById("btn_regis");

// Maak xmlhttprequest object
var xmlHttp = new XMLHttpRequest();

// Check of er antwoord is gekomen van de server
xmlHttp.onreadystatechange = function () {    
    //alert(xmlHttp.status + " | " + xmlHttp.readyState);
    // Als de pagina is gevonden en de status is goed...
    if (xmlHttp.status == 200 && xmlHttp.readyState == 4) {
      // Geef dan de tekst op data.php weer
      //alert("Responsetekst: " + xmlHttp.responseText);
      if ( xmlHttp.responseText.trim() == "succes") {
        // Toon de groene alert
        document.getElementById("alert_is_activated").style.display = "block";
        
        // Stuur mij door na 4 seconden.
        setTimeout(function () {
          window.location.href = "index.php?content=login";
        }, 4000);
      } else if ( xmlHttp.responseText.trim() == "U account is al geactiveerd") {
        // Toon de groene alert
        document.getElementById("alert_already_activated").style.display = "block";        
        // Stuur mij door na 4 seconden.
        setTimeout(function () {
          window.location.href = "index.php?content=login";
        }, 4000);
      } else if ( xmlHttp.responseText.trim() == "geen studentnummer ingevuld") {
        // Toon de groene alert
        document.getElementById("alert_no_stNumber").style.display = "block";        
        // Stuur mij door na 4 seconden.
        setTimeout(function () {
          window.location.href = "index.php?content=register";
        }, 4000);
      } else if ( xmlHttp.responseText.trim() == "studentnummer niet bekent") {
        // Toon de groene alert
        document.getElementById("alert_nonexisting_stNumber").style.display = "block";        
        // Stuur mij door na 4 seconden.
        setTimeout(function () {
          window.location.href = "index.php?content=register";
        }, 4000);
      } else if ( xmlHttp.responseText.trim() == "Activatiemail al gestuurd") {
        // Toon de groene alert
        document.getElementById("alert_mail_already_send").style.display = "block";        
        // Stuur mij door na 4 seconden.
        setTimeout(function () {
          window.location.href = "index.php?content=login";
        }, 4000);
      }
    }         
};   

btn.onclick = function () {
  // Pak het juiste id van het input tag
  var StNummer = document.getElementById("studentnummber").value;
  //alert(StNummer);
  var url = "data.php?StNummer=" + StNummer;
  console.log(url);
  xmlHttp.open("GET", url, true);
  xmlHttp.send();
  return false;
}

$("[data-toggle='tooltip']").tooltip({"delay": {"show": 0, "hide": 0},
                                        "html": true,
                                        "title": "<u>Studenten</u> voeren hun studentnummer in <br>" +
                                        "<u>docenten</u> vullen hun letterkode in"});