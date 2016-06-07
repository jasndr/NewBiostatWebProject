

//Tried to Implement Google Maps but didn't work. Will use embed feature instead.
/**
//Google Maps Feature
var myCenter = new google.maps.LatLng(21.2960, -157.8634);

function intitialize() {
    var mapProp = {
        center: myCenter,
        zoom: 15,
        mapTypeID: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

    var marker = new google.maps.Marker({
        position: myCenter,
    });

    marker.setMap(map);

    var infowindow = new google.maps.InfoWindow({
        content: "<strong>Office of Biostatistics & Quantitative Health Sciences</strong><br/>University of Hawaii John A. Burns School of Medicine<br/>651 Ilalo Street, Biomedical Sciences Suite 211,<br/> Honolulu, HI 96813<br/>"
    });

    infowindow.open(map, marker);
}

google.maps.event.addDomListener(window, 'load', initialize);*/


//Removed the idea of clickable/hoverable drop-down menu area (could be implemented in the future).
/**$(document).ready(function () {

    var listOfTitles = ["#rdTitle", "#daTitle", "#redTitle", "#teTitle", "#fcTitle", "#fgTitle"];
    var listOfContent = ["#rdContent", "#daContent", "#redContent", "#teContent", "#fcContent", "#fgContent"];

    $("#stContent").addClass("hidden");
    
    $("#stTitle").click(function () {

        var stContent = $("#stContent");

        if (stContent.hasClass("hidden")) {
            $(stContent).removeClass("hidden").addClass("visible");
        } else {
            $(stContent).removeClass("visible").addClass("hidden");
        }


    });

});*/