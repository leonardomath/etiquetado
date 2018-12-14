function moreOptions(id) {
    $(id).fadeIn();
}

function closeOptions(id) {
    $(id).fadeOut();
}

function editarEtiqueta(id,nome,descricao,img) {
   var divOverflow = $('.overlay');
   var editEtiqueta = $('.labelEdit');

   closeOptions('.optionId'+id);

   divOverflow.fadeIn();
   editEtiqueta.fadeIn();

   $('#id').val(id);
   $('#nome').val(nome);
   $('#descricao').val(descricao);
   $('#imgPreviewId').attr('src','assets/imgs/etiquetas/'+img);

}

function editarProduto(id,nome,descricao) {
  var divOverflow = $('.overlay2');
  var editEtiqueta = $('.labelEdit');

  divOverflow.fadeIn();
  editEtiqueta.fadeIn();

  $('#idP').val(id);
  $('#nomeP').val(nome);
  $('#descricaoP').val(descricao);
}

$('#btnSairP').click(function(){
  var divOverflow = $('.overlay2');
  var editEtiqueta = $('.labelEdit');

  divOverflow.fadeOut();
  editEtiqueta.fadeOut();
})