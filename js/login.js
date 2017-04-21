$(document).ready(function () {
//zoek de button
var button = document.getElementById("btn_login");

// Maak xmlhttprequest object
var xmlHttp = new XMLHttpRequest();

// Check of er antwoord is gekomen van de server
xmlHttp.onreadystatechange = function () {  
    // Als de pagina is gevonden en de status is goed...
    if (xmlHttp.status == 200 && xmlHttp.readyState == 4) {
         //alert(xmlHttp.responseText);
         if (xmlHttp.responseText.trim() == "student") {
            window.location.href = "index.php?content=student_home";
         } else if (xmlHttp.responseText.trim() == "admin") {
            window.location.href = "index.php?content=admin_home";            
         } else if (xmlHttp.responseText.trim() == "root") {
            window.location.href = "index.php?content=root_home";            
         } else if (xmlHttp.responseText.trim() == "docent") {
            window.location.href = "index.php?content=docent_home";            
         } else if (xmlHttp.responseText.trim() == "bpvco") {
            window.location.href = "index.php?content=bpvco_home";            
         } else if ( xmlHttp.responseText == "error_id") {
                document.getElementById("error_id").style.display = "block";
                setTimeout(function () {
                window.location.href = "index.php?content=login";               
            }, 3000);
         } else if ( xmlHttp.responseText == "error_pw") {
                document.getElementById("error_pw").style.display = "block";
                setTimeout(function () {
                window.location.href = "index.php?content=login";               
            }, 3000);
         } else if ( xmlHttp.responseText == "error_activate") {
                document.getElementById("error_activate").style.display = "block";
                setTimeout(function () {
                window.location.href = "index.php?content=login";               
            }, 3000);
         }
      }
   }


button.onclick = function () {
    var StNummer = document.getElementById("inputStNummer").value;
    var password = document.getElementById("inputPassword").value;
    xmlHttp.open("GET", "login_form_data.php?StNummer=" + StNummer + "&password=" + password, true);
    xmlHttp.send();
    return false;
}

   $("[data-toggle='popover']").popover({"trigger": "hover",
                                         "title": "Inloginformatie",
                                         "content": "<span style='font-weight: bold; font-style:italic;'>Studenten:</span> log in met je studentnummer<br>" +
                                                    "<span style='font-weight: bold; font-style:italic;'>Docenten:</span> log in met je lettercode afkorting",
                                         "html": true});
});