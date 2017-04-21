// Maak xmlhttprequest object
var XmlHttp = new XMLHttpRequest();

$(document).ready(function() {

// Check of er antwoord is gekomen van de server
XmlHttp.onreadystatechange = function () {  
    //alert(XmlHttp.status + " | " + XmlHttp.readyState);
    // Als de pagina is gevonden en de status is goed...
    if (XmlHttp.status == 200 && XmlHttp.readyState == 4) {
        //alert(XmlHttp.responseText);
        var data = JSON.parse(XmlHttp.responseText);
        //console.log(data);
        var message = data.shift();
        //console.log(message);
        var fieldnames = ["StudentNumber", "CompanyName", "Address", "City", "Person", "PersonNumber", "URL"];
        //console.log(fieldnames[0]);
        var tbody = document.getElementById("bpv_records_data");
        if ( message == "succes_records_found") {
            for ( var i=0; i<data.length; i++) {
                var tr = document.createElement("tr");
                for ( var j=0; j < fieldnames.length; j++) {
                    var td = document.createElement("td");
                    var text = document.createTextNode(data[i][fieldnames[j]]);
                    td.appendChild(text);
                    tr.appendChild(td);
                    //console.log(data);
                }
                var optiontext = ["nog geen contact",
                                  "contact gezocht",
                                  "contact bevestigd bedrijf",
                                  "uitgenodigd voor gesprek",
                                  "sollicitatiegesprek gehad",
                                  "afgewezen",
                                  "aangenomen"];

                //maak een het einde van de rij een td met een select tag erin
                var td = document.createElement("td");
                //maak een select tag
                var select = document.createElement("td");

                select.urlcompany = data[i].URL;

                //haal alle opties uit optiontext en geef elke optie een waarde
                for (var n=0; n < optiontext.length; n++) {
                    // maak een option tag..
                    var option = document.createElement("option");

                    // Voeg een attribuut value toe aan ieder option tag...
                    option.setAttribute("value", n);

                    //als de optionvalue uit de database gelijk is met de option value uit de database
                    //voeg het atribuut selected toe
                    if ( data[i].Status == n ) {
                        option.setAttribute("selected", true);
                    }

                    //kies de juiste optie en zet deze neer in in het status td tag
                    var text = document.createTextNode(optiontext[data[i].Status]);
                }

                    // Voeg tekst toe in de option...
                    option.appendChild(text);

                    // Stop de option tag in de select tag...
                    select.appendChild(option);

                //console.log(data[i].Status);

                //stop de td in de select tag tag
                td.appendChild(select);
                //voeg een td tag toe aan de tr
                tr.appendChild(td);
                //voeg de tr to in de tabel body
                tbody.appendChild(tr);
            }
        } else if (message == "no_recorda_found") {
            document.getElementById("no_records_found").style.display = "block";
        } else if (message == "error_database") {
            document.getElementById("error_database").style.display = "block";
        }
    }
}

XmlHttp.open("GET", "bpv_all_companies_data.php", true);
XmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
XmlHttp.send();

});