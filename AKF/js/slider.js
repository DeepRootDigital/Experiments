$( document ).ready(function() {

$(function () {
    $(".expand").click(
        function () {
            $(this).parent().find('.answer').toggle("slow")
            var test = 1;
            if (test === 1) {
                $(this).css( 'background-image', "url('http://clients.businessonmarketst.com/akf/wp-content/themes/AKF/images/faq-close.png')" );
                var test = 0;	
            }
            else {
               $(this).css( 'background-image', "url('http://clients.businessonmarketst.com/akf/wp-content/themes/AKF/images/expand-button.png')" );
           }
       });
});
});