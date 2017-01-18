jQuery(document).ready(function($){
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll > 0){
        $("#top").addClass("active");
    }
    else{
        $("#top").removeClass("active");
    }
});
});