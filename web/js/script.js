(function ($) {
    "use strict";

    var imageSuivante = function(e){
        e.preventDefault();
        var $next = $('.imagesChoix:visible').hide().next();
        if($next.length < 1){
            $next = $('.imagesChoix').first();
        }
        $next.show();
        $next.children('.uneImage').attr('checked', 'checked');
    };

    var imagePrecedente = function(e){
        e.preventDefault();
        var $prev = $('.imagesChoix:visible').hide().prev();
        if($prev.length == 0){
            $prev = $('.imagesChoix').last();
        }
        $prev.show();
        $prev.children('.uneImage').attr('checked', 'checked');
    };
    var supp = function(e){
        e.preventDefault();
        $(this).parents('article').fadeOut();
        var url = $(this).attr("href");
        var id = $(this).attr("id");
        $.ajax({
            url: url,
            type: 'post',
            data:{id:id},
            succes: function(){
                $(this).parents('article').fadeOut();
            }
        });
    };

    $(function () {
        $('.imagesChoix').not(':first').hide();
        $('.imagesChoix input').hide();
        $('#prevI').on('click', imagePrecedente);
        $('#nextI').on('click', imageSuivante);
        $('.delete').on('click', supp);
    });
})
    (jQuery);
