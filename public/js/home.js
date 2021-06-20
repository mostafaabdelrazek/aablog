$(function(){
    //resize header photo depend on screen size 
    $(window).resize(function() {
        $('#header').css({
            'width':$(window).width(),
            'min-height':$(window).height(),
        });
    }).resize();
});