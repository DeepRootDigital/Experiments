$(function () {
    $('.bigblock .overlay').hover(
        function () {
            $(this).animate({
                "width":  "280px"
            }, 400, function () {
                
                });
        },
        function () {
            $(this).animate({
                "width":  "130px"
            }, 400, function () {
                
                });
        }
        );
    $('.wideblock .overlay').hover(
        function () {
            $(this).animate({
                "width":  "280px"
            }, 400, function () {
                
                });
        },
        function () {
            $(this).animate({
                "width":  "130px"
            }, 400, function () {
                
                });
        }
        );  
    $('.superblock .overlay').hover(
        function () {
            $(this).animate({
                "width":  "600px"
            }, 00, function () {
                
                });
            $(this).animate({
                "margin-left":  "0px"
            }, 400, function () {
                
                });
        },
        function () {
            $(this).animate({
                "margin-left":  "450px"
            }, 400, function () {
                
                });
            $(this).animate({
                "width":  "130px"
            }, 400, function () {
                
                });
            
        }
        );   
});
