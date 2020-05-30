// mask form

$("#form-cel").mask("(00) 00000-0000");
$("#form-tel").mask("(00) 0000-0000");


//scroll anchor

var $doc = $('html, body');
$('a').click(function() {
    $doc.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});