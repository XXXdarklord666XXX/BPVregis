$(document).ready(function () {

$("#myCarousel").carousel({"interval": 1000,"pause": false,"wrap": false });

//$("#myCarousel").css("border", "20px solid black");
$("#myCarousel").click(function () {
    //alert("Hoi");
    //$(this).carousel("prev");
});

   $("[data-toggle='tooltip']").tooltip({"delay": {"show": 100, "hide": 100},
                                         "html": true,
                                         "title": "Vliegtuigen" });  //css({"border": "20px solid pink"});


});