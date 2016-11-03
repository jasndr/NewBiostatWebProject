﻿
//Prevents Accordion Collapse for easy navigation for left navigation
$('.panel-heading a').on('click', function(e){
    if($(this).parents('.panel').children('.panel-collapse').hasClass('in')){
        e.stopPropagation();
    };

});


//function checkOffset() {
//    var a = $(document).scrollTop() + window.innerHeight;
//    var b = $('.bottomFooter').offset().top;
//    var c = $('.BQHSbanner').offset().bottom;



//    if (a < b) {
//        $('.smallMenu').css('top', 'auto');
//    } {
//        $('.smallMenu').css('bottom', (10 + (a - b)) + 'px');
      
//    }
//}
//$(document).ready(checkOffset);
//$(document).scroll(checkOffset);


//$(document).ready(function (e) {
//    var containerTop = $('.pageHeader').offset().top;
//    $(window).scroll(function () {
//        var scrollT = $(window).scrollTop();
//        if (scrollT > containerTop) {
//            $('.smallMenu').css({ position: 'fixed', top: '110px' });
//        } else {
//            $('.smallMenu').css({ position: 'relative', top: '0px' });
//        }
//    })
//})


//    =============================================================================






//jQuery 
$(document).ready(function () {

    //Scroll to top button - Appear if down the page
    $(window).scroll(function () {

        //Make "return-to-top" button appear if down the page
        if ($(this).scrollTop() >= 50) {
            $('#return-to-top').fadeIn(200);
            $('.webTracker').fadeIn(250);
        } else {
            $('#return-to-top').fadeOut(200);
            $('.webTracker').fadeOut(250);
        };


        //Hightlight Sublink - Education>Resources
    //    var cur_pos = $(this).scrollTop(),
    //    biostat_pos = $('#biostatistics').height() - 330,
    //    bioinfo_pos = $('#bioinformatics').height() - 330;

        
    //    if ($('#activeOR').length != 0) {

    //        if (cur_pos >= biostat_pos && cur_pos < bioinfo_pos) {
    //            $('#noBoldBS').attr('id', 'boldOR').siblings().attr('id', 'noBoldBI');
    //        } else if (cur_pos >= bioinfo_pos) {
    //            $('#noBoldBI').attr('id', 'boldOR').siblings().attr('id', 'noBoldBS');
    //        };

    //    };

    });

    //Scroll to top button - Function
    $('#return-to-top').click(function () {
        $('body').animate({
            scrollTop: 0
        }, 500);
    });


    //Sublink Highlight Function - Education>Resources
    $('#resourcesMenu a').click(function () {
        $(this).attr('id', 'boldOR').siblings().removeAttr('id');
        
    });

    //Sublink Highlight Function - Support & Services > Services
    //$('#servicesMenu a').click(function () {
    //    $(this).attr('id', 'boldSE').siblings().removeAttr('id');
    //});

});

//var education_sections = $('#resourcesMenu a'),
//     education_nav = $('#educationSmallMenu'),
//     education_nav_height = education_nav.outerHeight();

//$(window).on('scroll', function () {
    

//        if (cur_pos >= top && cur_pos <= bottom) {
//            if (cur_pos >= biostat_pos && cur_pos <= bioinfo_pos) 
//                $('noBoldBS').attr('id', 'boldOR').siblings().attr('id', 'noBoldBI');
//        } else {
//            $('noBoldBI').attr('id', 'boldOR').siblings().attr('id', 'noBoldBS');
//        }
    

//});



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





