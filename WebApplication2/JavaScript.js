
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