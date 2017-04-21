$(document).ready(function () {
//zoek de button
var Btn = document.getElementById("btn_bpv");

// Maak xmlhttprequest object
var xmlHttp = new XMLHttpRequest();

// Check of er antwoord is gekomen van de server
xmlHttp.onreadystatechange = function () {  
    //alert(xmlHttp.status + " | " + xmlHttp.readyState);
    // Als de pagina is gevonden en de status is goed...
    if (xmlHttp.status == 200 && xmlHttp.readyState == 4) {
        //alert(xmlHttp.responseText);
        if (xmlHttp.responseText == "succes_record_saved") {
            document.getElementById("succes_record_saved").style.display = "block";
            setTimeout(function () {
               window.location.href = "index.php?content=home";
            }, 3000);
         } else if (xmlHttp.responseText == "error_record_not_saved") {
            document.getElementById("error_record_not_saved").style.display = "block";
            setTimeout(function () {
               window.location.href = "index.php?content=bpv_record";
            }, 3000);            
         }
        if (xmlHttp.responseText == "error_company_exists") {
            document.getElementById("error_company_exists").style.display = "block";
            setTimeout(function () {
               window.location.href = "index.php?content=home";
            }, 3000);
        }
    }
}

Btn.onclick = function (){
    //alert("don't press this butt,,, oh wait");
    var FormData = {"CompanyName": document.getElementById("CompanyName").value,
                    "CompanyNumber": document.getElementById("CompanyNumber").value,
                    "Person": document.getElementById("Person").value,
                    "PersonNumber": document.getElementById("PersonNumber").value,
                    "Address": document.getElementById("Address").value,
                    "AddressNumber": document.getElementById("AddressNumber").value,
                    "City": document.getElementById("City").value,
                    "PostalCode": document.getElementById("PostalCode").value,
                    "Email": document.getElementById("Email").value,
                    "URL": document.getElementById("URL").value,
                    "Description": document.getElementById("Description").value};

    
    //console.log(FormData);
    var SendJasonData = JSON.stringify(FormData);
    //console.log(SendJasonData);

    xmlHttp.open("GET", "bpv_record_data.php?jsonstr=" + SendJasonData, true);
    xmlHttp.send();
    return false;
};

});