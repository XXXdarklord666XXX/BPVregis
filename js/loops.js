$(document).ready(function () {
//selecteer de button
var btn = document.getElementById("btn");
//selecteer de parent div waar de 5 divjes in komen te staan
var ContainerDiv = document.getElementById("less_loop");


btn.onclick = function() {
    for (var i = 1; i <= 15; i++) {
        var NewDiv = document.createElement("div");
        var DemoTekst = document.createTextNode("dit is tekst: " + i);
        NewDiv.setAttribute("class", "vb_div_" + i);
        NewDiv.appendChild(DemoTekst);
        ContainerDiv.appendChild(NewDiv);
    }
};

});