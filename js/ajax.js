   $(document).ready(function(){

        $('#campo').keyup(function(){

            $('#buscador').submit(function(){
                var dados = $(this).serialize();

                $.ajax({
                    url: 'buscarEtiquetas.php',
                    method: 'post',
                    dataType: 'html',
                    data: dados,
                    success: function(data){
                        $('.etiquetas').empty().html(data);
                    }
                });

                return false;
            });

            $('#buscador').trigger('submit');

        });
    });