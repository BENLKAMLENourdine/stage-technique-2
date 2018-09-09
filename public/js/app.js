$('.connection').click(function(){
    $('.gray').css('display','block');
})

$('.glyphicon').click(function() {
    $('.gray').css('display','none')
    $('.first').css('display','block');
    $('.second').css('display','none');
})

$('.choix').click(function() {
    $('.first').css('display','none')
    $('.second').css('display','block')
})

$('.return').click(function() {
    $('.first').css('display','block')
    $('.second').css('display','none')
})

$('#map_inner').children().css( "color", "blue" )