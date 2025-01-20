
$(document).ready(function(){
    // p tag will hide on button click
    $("button").click(function(){
        $("p").hide();
    });
    //P tag will be hide on click - this event
    $(".p-tag").click(function(){
        $(this).hide();
    });
});
