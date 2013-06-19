$(document).ready(function(){
    $('.clouds').pan({fps: 30, speed: 1, dir: 'right'});
    $('.clouds-top').pan({fps: 30, speed: 1, dir: 'right'});
});

$(document).ready(function(){   
    $(".slider").easySlider({
        auto: true,
        continuous: true,
        controlsShow:   false,
    });
});