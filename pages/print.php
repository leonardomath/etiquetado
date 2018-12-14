<?php
require'config.php';

 # $id_etiqueta = addslashes($_POST['id_etiqueta']);

$img = $_GET['img'];
// $height = floatval($_GET['height']);
// $width = floatval($_GET['width']);

#echo $height. ' ' .$width ;

  $etiquetas = Etiqueta::getEtiquetaList(); 

echo '<div class="flex">';

if($etiquetas == null) {
  echo "0 Produtos na lista";
} else {
  foreach ($etiquetas as $etiqueta) : 

    if($img === 'templete1.jpeg') {    

 for($i=0;$i<$etiqueta['quantidade'];$i++) : ?>
      <div class="etiqueta1" style="color: #000;
      background: transparent; width:450px; height: auto; position: relative;">
      <img src="assets/imgs/system/<?=$img?>">
      <h1 style="">
        <?=$etiqueta['nome']?>    
      </h1>
      <h2 style="">
        <?=$etiqueta['descricao']?>    
      </h2>
      <span class="preco1" style="
        <?php
          if(strlen($etiqueta['preco1']) <= 4) {
            echo "font-size: 85px;top: 145px"; 
          } else if(strlen($etiqueta['preco1']) <= 6) {
            echo "font-size: 55px; bottom: 65px;";
          } else {
            echo "font-size: 40px; bottom: 70px;";
          }
        ?>
      "><?= $etiqueta['preco1']?></span>
</div>
<?php
endfor;
  } elseif($img === 'templete22.jpeg') { ?>
   <?php for($i=0;$i<$etiqueta['quantidade'];$i++) : ?>
      <div class="etiqueta2" style="color: #000;
      background: transparent; width:570px; height: auto; position: relative;">
      <img src="assets/imgs/system/<?=$img?>">
      <h1 style="">
        <?=$etiqueta['nome']?>    
      </h1>
       <h2 style="">
        <?=$etiqueta['descricao']?>    
      </h2>
      <span class="preco1" style="
        <?php
          if(strlen($etiqueta['preco1']) <= 4) {
            echo "font-size: 80px;top: 165px"; 
          } else if(strlen($etiqueta['preco1']) <= 6) {
            echo "font-size: 55px; bottom: 50px;";
          } else if (strlen($etiqueta['preco1']) <= 8){
            echo "font-size: 45px; bottom: 60px;";
          } else {
            echo "font-size: 40px; bottom: 70px;";
          }
        ?>
      "><?= $etiqueta['preco1']?></span>
      <span class="preco2" style="
        <?php
          if(strlen($etiqueta['preco2']) <= 4) {
            echo "font-size: 80px;top: 165px"; 
          } else if(strlen($etiqueta['preco1']) <= 5) {
            echo "font-size: 65px; bottom: 40px;";
          } else if (strlen($etiqueta['preco1']) <= 8){
            echo "font-size: 45px; bottom: 60px;";
          } else {
            echo "font-size: 30px; bottom: 70px;";
          }
        ?>
      "><?= $etiqueta['preco2']?></span>
</div>
<?php
endfor;
        
  } elseif($img === 'templete33.jpeg') { 
   ?>  <?php for($i=0;$i<$etiqueta['quantidade'];$i++) : ?>
      <div class="etiqueta3" style="color: #000;
      background: transparent; width:440px; height: auto; position: relative;">
      <img src="assets/imgs/system/<?=$img?>">
      <h1 style="">
        <?=$etiqueta['nome']?>    
      </h1>
      <h2 style="">
        <?=$etiqueta['descricao']?>    
      </h2>
      <span class="preco1" style="
        <?php
          if(strlen($etiqueta['preco1']) <= 3) {
            echo "font-size: 80px;top: 165px"; 
          } else if(strlen($etiqueta['preco1']) <= 5) {
            echo "font-size: 50px; bottom: 60px;";
          } elseif (strlen($etiqueta['preco1']) < 7) {
            echo "font-size: 40px; bottom: 70px;";
           } else {
            echo "font-size: 30px; bottom: 70px;";
          }
        ?>
      "><?= $etiqueta['preco1']?></span>
      <span class="preco2" style="
        <?php
          if(strlen($etiqueta['preco2']) <= 4) {
            echo "font-size: 50px;top: 165px"; 
          } else if(strlen($etiqueta['preco1']) <= 5) {
            echo "font-size: 40px; bottom: 60px;";
          } else if (strlen($etiqueta['preco1']) <= 6){
            echo "font-size: 33px; bottom: 70px;";
          } else {
            echo "font-size: 30px; bottom: 70px;";
          }
        ?>
      "><?= $etiqueta['preco2']?></span>
</div>
<?php
endfor;
  
} elseif($img === 'templete66.jpeg') { ?>
   <?php for($i=0;$i<$etiqueta['quantidade'];$i++) : ?>
      <div class="etiqueta6" style="color: #000;
      background: transparent; width:280px; height: auto; position: relative;">
      <img src="assets/imgs/system/<?=$img?>">
      <h1 style="">
        <?=$etiqueta['nome']?>    
      </h1>
      <h2 style="">
        <?=$etiqueta['descricao']?>    
      </h2>
      <span class="preco1" style="
        <?php
          if(strlen($etiqueta['preco1']) <= 3) {
            echo "font-size: 40px;top: 165px"; 
          } else if(strlen($etiqueta['preco1']) <= 6) {
            echo "font-size: 20px; bottom: 17px;";
          } else {
            echo "font-size: 20px; bottom: 17px;";
          }
        ?>
      "><?= $etiqueta['preco1']?></span>
      <span class="preco2" style="
        <?php
          if(strlen($etiqueta['preco2']) <= 3) {
            echo "font-size: 40px;top: 165px"; 
          } else if(strlen($etiqueta['preco1']) <= 6) {
            echo "font-size: 20px; bottom: 17px;";
          } else {
            echo "font-size: 20px; bottom: 17px;";
          }
        ?>
      "><?= $etiqueta['preco2']?></span>
</div>
<?php
endfor;  

} elseif($img === 'templete77.jpeg') { ?>
   <?php for($i=0;$i<$etiqueta['quantidade'];$i++) : ?>
      <div class="etiqueta7" style="color: #000;
      background: transparent; width:380px; height: auto; position: relative;">
      <img src="assets/imgs/system/<?=$img?>">
      <h1 style="">
        <?=$etiqueta['nome']?>    
      </h1>
      <h2 style="">
        <?=$etiqueta['descricao']?>    
      </h2>
      <span class="preco1" style="
        <?php
          if(strlen($etiqueta['preco1']) <= 4) {
            echo "font-size: 60px;bottom: 25px"; 
          } else if(strlen($etiqueta['preco1']) <= 5) {
            echo "font-size: 53px; bottom: 30px;";
          } else if(strlen($etiqueta['preco1']) < 7) {
            echo "font-size: 43px; bottom: 34px;";
          } else {
            echo "font-size: 34px; bottom: 40px;";
          }
        ?>
      "><?= $etiqueta['preco1']?></span>
      <span class="preco2" style="
        <?php
           if(strlen($etiqueta['preco2']) <= 4) {
            echo "font-size: 60px;bottom: 25px"; 
          } else if(strlen($etiqueta['preco2']) <= 5) {
            echo "font-size: 53px; bottom: 30px;";
          } else if(strlen($etiqueta['preco2']) < 7) {
            echo "font-size: 43px; bottom: 34px;";
          } else {
            echo "font-size: 34px; bottom: 40px;";
          }
        ?>
      "><?= $etiqueta['preco2']?></span>
</div>
<?php
endfor;  

} elseif($img === 'templete88.jpeg') { ?>
   <?php for($i=0;$i<$etiqueta['quantidade'];$i++) : ?>
      <div class="etiqueta8" style="color: #000;
      background: transparent; width:380px; height: auto; position: relative;">
      <img src="assets/imgs/system/<?=$img?>">
      <h1 style="">
        <?=$etiqueta['nome']?>    
      </h1>
      <h2 style="">
        <?=$etiqueta['descricao']?>    
      </h2>
      <span class="preco1" style="
        <?php
          if(strlen($etiqueta['preco1']) <= 4) {
            echo "font-size: 60px;bottom: 25px"; 
          } else if(strlen($etiqueta['preco1']) <= 5) {
            echo "font-size: 53px; bottom: 30px;";
          } else if(strlen($etiqueta['preco1']) < 7) {
            echo "font-size: 43px; bottom: 34px;";
          } else {
            echo "font-size: 34px; bottom: 40px;";
          }
        ?>
      "><?= $etiqueta['preco1']?></span>
</div>
<?php
endfor;  

} elseif($img === 'templete99.jpeg') { ?>
   <?php for($i=0;$i<$etiqueta['quantidade'];$i++) : ?>
      <div class="etiqueta9" style="color: #000;
      background: transparent; width:920px; height: auto; position: relative;">
      <img src="assets/imgs/system/<?=$img?>">
      <h1 style="">
        <?=$etiqueta['nome']?>    
      </h1>
      <h2 style="">
        <?=$etiqueta['descricao']?>    
      </h2>
       <h3 style="">
        <?=$etiqueta['x']?>    
      </h3>
      <span class="preco1" style="
        <?php
          if(strlen($etiqueta['preco1']) <= 4) {
            echo "font-size: 140px;bottom: 50px"; 
          } else if(strlen($etiqueta['preco1']) < 6) {
            echo "font-size: 105px; bottom: 90px;";
          } else if(strlen($etiqueta['preco1']) < 7) {
            echo "font-size: 85px; bottom: 90px;";
          } else {
            echo "font-size: 65px; bottom: 90px;";
          }
        ?>
      "><?= $etiqueta['preco1']?></span>
       <span class="preco2" style="
        <?php
          if(strlen($etiqueta['preco2']) <= 4) {
            echo "font-size: 150px;bottom: 90px"; 
          } else if(strlen($etiqueta['preco1']) < 6) {
            echo "font-size: 140px; bottom: 90px;";
          } else if(strlen($etiqueta['preco1']) < 7) {
            echo "font-size: 120px; bottom: 90px;";
          } else {
            echo "font-size: 97px; bottom: 90px;";
          }
        ?>
      "><?= $etiqueta['preco2']?></span>
</div>
<?php
endfor;  

} elseif($img === 'templete100.jpeg') { ?>
   <?php for($i=0;$i<$etiqueta['quantidade'];$i++) : ?>
      <div class="etiqueta100" style="color: #000;
      background: transparent; width:920px; height: auto; position: relative;">
      <img src="assets/imgs/system/<?=$img?>">
      <h1 style="">
        <?=$etiqueta['nome']?>    
      </h1>
      <h2 style="">
        <?=$etiqueta['descricao']?>    
      </h2>
      <span class="preco1" style="
        <?php
          if(strlen($etiqueta['preco1']) <= 4) {
            echo "font-size: 85px;bottom: 70px"; 
          } else if(strlen($etiqueta['preco1']) <= 5) {
            echo "font-size: 90px; bottom: 70px;";
          } else if(strlen($etiqueta['preco1']) < 7) {
            echo "font-size: 53px; bottom: 90px;";
          } else {
            echo "font-size: 60px; bottom: 90px;";
          }
        ?>
      "><?= $etiqueta['preco2']?></span>
       <span class="preco2" style="
        <?php
          if(strlen($etiqueta['preco2']) <= 4) {
            echo "font-size: 100px;bottom: 70px"; 
          } else if(strlen($etiqueta['preco2']) < 6) {
            echo "font-size: 85px; bottom: 70px;";
          } else if(strlen($etiqueta['preco2']) < 7) {
            echo "font-size: 65px; bottom: 90px;";
          } else {
            echo "font-size: 50px; bottom: 90px;";
          }
        ?>
      "><?= $etiqueta['preco2']?></span>
       <span class="preco3" style="
        <?php
          if(strlen($etiqueta['preco2']) <= 4) {
            echo "font-size: 70px;bottom: 70px"; 
          } else if(strlen($etiqueta['preco3']) < 6) {
            echo "font-size: 85px; bottom: 70px;";
          } else if(strlen($etiqueta['preco3']) < 7) {
            echo "font-size: 60px; bottom: 90px;";
          } else {
            echo "font-size: 50px; bottom: 90px;";
          }
        ?>
      "><?= $etiqueta['preco3']?></span>
</div>
<?php
endfor;  

}

else {
  echo "no templete";
}
    ?>



    <section style="w">
      
    </section>
    
  <?php endforeach;
echo '</div>';
  
  #$img = addslashes($_POST['img']);

  
  
  #echo 'height: '.$height. ' width: '.$width;

  # 1 cm = 37.79px
  
  
  // $height_final = $height * 28.25; 
  // $width_final = $width * 28.25;

  // $height_final = ($height*120)/2.5; 
  // $width_final = ($width*120)/2.5;

 # echo '<br>'.$height_final.'x'.$width_final
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/print.css" />
  <script src="main.js"></script>
</head>
<body>

  
  <section class="print">
  <img class="" src="assets/icons/printer.png" onclick="window.print()">
  <a href="printDone.php"><img class="" src="assets/icons/back-arrow.png"></a>
  </section>
</body>
</html>