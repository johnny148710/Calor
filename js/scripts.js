jQuery(document).ready(function($){

    var classes = ["bright-sparkle"];

    $(".small-sparkle").each(function(){
        $(this).addClass(classes[~~(Math.random()*classes.length)]);
    }, 1000);

    var classes = [
        "no-sparkle",
        "bright-sparkle"
        ];

        var $div = $(".small-sparkle");
        setInterval(function() {
            $div.each(function(index){
                $(this).removeClass( classes.join(" ") );
                $(this).addClass( classes[ Math.floor( Math.random() * classes.length ) ] );
            });//each
        }, 1000); //setInterval
    

});