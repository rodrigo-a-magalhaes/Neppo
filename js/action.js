$('#q1').click(function () {
    $('#t2').fadeOut(0);
    $('#t3').fadeOut(0);
    $('#t1').fadeIn(400);
});
$('#q2').click(function () {
    $('#t1').fadeOut(0);
    $('#t3').fadeOut(0);
    $('#t2').fadeIn(400);
});
$('#q3').click(function () {
    $('#t1').fadeOut(0);
    $('#t2').fadeOut(0);
    $('#t3').fadeIn(400);
});
$('.btn-close').click(function () {
    $('.msg').fadeOut(500);
});