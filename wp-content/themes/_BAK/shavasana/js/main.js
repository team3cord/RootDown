<<<<<<< HEAD

=======
$(function() {
    $('nav#menu').mmenu({
        dragOpen: true
    });


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
>>>>>>> 0195dc5ffbb98d4b46870f8211157f1708ec2f2f
