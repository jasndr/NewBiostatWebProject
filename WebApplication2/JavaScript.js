
//Prevents Accordion Collapse for easy navigation for left navigation
$('.panel-heading a').on('click', function(e){
    if($(this).parents('.panel').children('.panel-collapse').hasClass('in')){
        e.stopPropagation();
    };

});

//jQuery Scroll to Top Function
$(document).ready(function () {
    //Scroll to Top Function
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 50) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });

    $('#return-to-top').click(function () {
        $('body').animate({
            scrollTop: 0
        }, 500);
    });
});


//jQuery Sublink Highlight Function
$(document).ready(function () {

    /** http://stackoverflow.com/questions/8766084/how-to-highlight-the-clicked-navigation-item */
    $('#subBS').click(function () {
        $('#subBS').addClass('subLinkBold').$('subBI').removeClass('subLinkBold');
        return (false);
    });

    $('#subBI').click(function () {
        $('#subBI').addClass('subLinkBold').$('subBS').removeClass('subLinkBold');
        return (false);
    });

});


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



//function doSearch(s) {
//    var regExp1 = /\bfield\b/;
//    var regExp2 = /[(,),<,>,\,]]/;
//    var str = s.value;

//    if (str == "") {
//        s.focus();
//    } else {
//        if (typeof regExp1.source != 'undefined') //supports regular expression testing
//            if (regExp1.test(str) || regExp2.test(str)) {
//                var alrt = "Please note that you can not include: ";
//                alrt += "\n\nThe reserved word 'field'\nthe characters [, ], (, ), < or >";
//                alrt += "\n\nin your search query!\n\nIf you are confident that you know";
//                alrt += "\nwhat you are doing, that you can\nmanually produce the URL required.";
//                s.focus();
//                return alert(alrt);
//            }

//        openDbRelativeURL("All?SearchView&Query=" + escape(str) + "&start=1&count=10");
//    }
//} 

//function openDbRelativeURL(url, target) {

//    //Check whether or not we have a target window
//    target = (target == null) ? window : target;

//    //Work out the path of the database
//    path = location.pathname.split('.nsf')[0] + '.nsf/';
//    target.location.href = path + url;

//} 

