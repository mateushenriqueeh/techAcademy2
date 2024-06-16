<?php
    $url="infogames.json";

    $dadosApi = file_get_contents($url);
    $dadosBanner = json_decode($dadosApi);


?>


<div class="container">
    <div class="caixa">

    <?php 

    foreach($dadosBanner as $dados){
          ?>
          <h1>
               <?= $dados ->nome?>
          </h1>

        <?php
    }
    ?>

<?php 

foreach($dadosBanner as $dados){
      ?>
      <p>
           <?= $dados ->descricao?>
    </p>

    <?php
}
?>
    </div>

    <div class="caixa">
    <?php 

foreach($dadosBanner as $dados){
      ?>

      <img src="<?=$dados ->imagem?>" alt="">


    <?php
}
?>
    </div>
</div>