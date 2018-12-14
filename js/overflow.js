
$('.btnSair').click(function(){
  var overflow = $('.overlay');
  var ediqueta = $('.labelEdit');
  var ediqueta2 = $('.newLabel');

  overflow.fadeOut();
  ediqueta.fadeOut();
  ediqueta2.fadeOut();
})

$('.btnNovaEtiqueta').click(function(){
  var overflow = $('.overlay');
  var ediqueta = $('.newLabel');

  ediqueta.fadeIn();
  overflow.fadeIn();
})