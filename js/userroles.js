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
        var fieldnames = ["id", "firstname", "infix", "lastname", "activate"];
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
                    console.log(data);
                }


                //maak een het einde van de rij een td met een select tag erin
                var td = document.createElement("td");
                //maak een select tag
                var select = document.createElement("select");

                select.addEventListener("change", updateStatus);
                

                                //maak een array met alle optionteksten erin
                var optiontext = [select.urlcompany = data[i].userrole];

                for (var n=0; n < optiontext.length; n++) {
                    // maak een option tag..
                    var option = document.createElement("option");

                    // Voeg een attribuut value toe aan ieder option tag...
                    option.setAttribute("value", n);

                    //als de optionvalue uit de database gelijk is met d eoption value aut de database
                    //voeg het atribuut selected toe
                    if ( data[i].Status == n ) {
                        option.setAttribute("selected", true);
                    }

                    // Maak wat tekst voor in de option tag...
                    var text = document.createTextNode(optiontext[n]);

                    // Voeg tekst toe in de option...
                    option.appendChild(text);

                    // Stop de option tag in de select tag...
                    select.appendChild(option);
                }

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

XmlHttp.open("GET", "userroles_data.php", true);
XmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
XmlHttp.send();

});

function updateStatus (evt) {
    var status = evt.target.options[evt.target.options.selectedIndex].value;
    XmlHttp.open("POST", "userroles_data_data_update.php", true);
    XmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    XmlHttp.send("status=" + status + "&URL=" + evt.target.urlcompany);
    if (message == "no_recorda_found") {
        document.getElementById("error_update").style.display = "block";
    } 
    //alert("I'VE BECOME SO NUMB");
    //alert("aangepast");
}