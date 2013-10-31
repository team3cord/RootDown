$(function() {
    $('nav#menu').mmenu({});


    // Teacher Scripts

    var links = $("#teacherNav li"),
    	teacherWrap = $('.teacher').each(function(){}),
    	teacherImg = $('.teacherImgs').each(function(){});



    links.on('click', function(e){

        e.preventDefault(); // stop the browser from jumping

    	var i = $(this).index(),                   // index used to pass into array
    		nextTecher = teacherWrap[i].id,        // on this # array get the id
    		nextImg = teacherImg[i].id;

    		teacherWrap.addClass('notActive'); 	   // hide current teacher
    		$("#" + nextTecher).removeClass('notActive');   // show next teaher

    		teacherImg.addClass('notActive'); 	   // hide current teacher
    		$("#" + nextImg).removeClass('notActive');   // show next teaher

    });

});