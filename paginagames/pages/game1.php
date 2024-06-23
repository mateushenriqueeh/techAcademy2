<?php

$dados = $dadosJogos->$codigo;

?>


<div class="text-center">
<div class="caixa"> 
        
<br>

            <h4>Jogue Grátis</h4>     

            
            <h1><?=$dados->nome?></h1>

            <p><?=$dados->descricao?>
 
            </p>


        </div>
        <br>
        <br>
        <div class="caixa text-center">

            <img src="<?=$dados->imagem?>" alt="">
            
        </div>
    </div>
