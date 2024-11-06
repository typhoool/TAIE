$(document).ready(function() {

    $('.opis').hover(

        function() {

            var $img = $(this).find('img');
            var desc = $(this).data('desc');

            
            $img.stop().animate({ 
                width: '+=75px', 
                height: '+=75px' 
            }, 300);

            
            $(this).find('.description').text(desc).stop().animate({ 
                opacity: 1 
            }, 300);
        },
        
        function() {
            var $img = $(this).find('img');

            
            $img.stop().animate({ 
                width: '150px', 
                height: '150px' 
            }, 300);

            
            $(this).find('.description').stop().animate({ 
                opacity: 0 
            }, 300);

        }
    );
});