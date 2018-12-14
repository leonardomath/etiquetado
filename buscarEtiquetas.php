<head>
    <style type="text/css">
        .flex-layoute input {
            width: 12%;
            border: none;
            margin: 5px 0;
            padding: 10px;
        }


        .flex-layoute button {
            display: inline-block;
        }
    </style>
</head>

<?php include('config.php');

    $campo="%".$_POST['campo']."%";

    $sql=Conexao::conectar()->prepare("select * from produtos where nome like ?");
    $sql->execute(array($campo));
    $produtos = $sql->fetchAll();
?>
    
        <table> 
            
            <tr>
                
                <th>Produto</th>
            </tr>
            

           
                
    <?php
                foreach($produtos as $produto): ?>

            
                <tr>
                    <td class="flex-layoute">

                             <form action="produtosParaImpresao.php" method="post" id="subm">
                                <input type="text" name="nome" value="<?=$produto['nome']?>">
                                 <input type="text" name="descricao" value="<?=$produto['descricao']?>">
                                 <input type="text" name="preco1" placeholder="Preço 1">
                                 <input type="text" name="preco2" placeholder="Preço 2">
                                 <input type="text" name="preco3" placeholder="Preço 3">
                                 <input type="text" name="x" placeholder="Parcelas">
                                <input type="int" name="quantidade" placeholder="Quantidade">
                            <button onclick="submit()" type="submit">Escolher</button>

                             </form>
                        </td>
                    
                </tr>
                
                

            
                
           
        <?php endforeach; ?>

         </table>

         <script type="text/javascript">
             
function submit(){
    $('#subm').trigger('submit');
}

         </script>