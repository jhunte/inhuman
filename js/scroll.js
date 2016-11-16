(function ($) {
    $(document).ready(function() {
        if($(".notes-content").innerHeight() < $(".notes-content")[0].scrollHeight) {
        	$(".worm-down").show();
        }

        $(".notes-content").scroll(function() {
            if($(this).scrollTop() + $(this).innerHeight() < $(this)[0].scrollHeight) {
                $(".worm-down").show();    
            } else {
                $(".worm-down").hide();
            }
            if($(this).scrollTop() > 0) {
                $(".worm-up").show();    
            } else {
                $(".worm-up").hide();
            }
            //$(".top").text($(this).scrollTop() + " - " + $(this).innerHeight() + " - " + $(this)[0].scrollHeight);
        });
    });
})(jQuery);