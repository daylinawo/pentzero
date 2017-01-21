jQuery(document).ready(function($){
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll > 220){
        $(".m-header").addClass("active");
       	$(".m-header").removeClass("m-h--wrapper-nofixed");
        $(".m-header").css({"top":"-220px"});

    }
    else{
        $(".m-header").removeClass("active");
        $(".m-header").addClass("m-h--wrapper-nofixed");
        $(".m-header").css({"top":""});


    }
});
});