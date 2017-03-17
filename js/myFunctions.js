
function showHideEx(button, result){
    $(result).hide();
    $(button).click(function() {
        $(result).toggle();
    });
}

/*function luck(text){
    console.log(text);
} */


$( function() {
    $( ".datepicker" ).datepicker();
} );

$(document).ready(function() {
    $('button').click(function() {
        var toAdd = $("input[name=message]").val();
        $('#messages').append("<p>"+toAdd+"</p>");
    });
});


$(document).ready(function() {
    $(document).keydown(function(key) {
        switch(parseInt(key.which,10)) {
// Left arrow key pressed
            case 37:
                $('#kubiks').animate({left: "-=10px"}, 'fast');
                break;
// Up Arrow Pressed
            case 38:
                $('#kubiks').animate({top: "-=10px"}, "fast");
                break;
// Right Arrow Pressed
            case 39:
                $('#kubiks').animate({left: "+=10px"}, 'fast');
                break;
// Down Arrow Pressed
            case 40:
                $('#kubiks').animate({top: "+=10px"}, 'fast');
                break;
        }
    });
});

$('#php').click(function() {

    $('#php').hide();

});



