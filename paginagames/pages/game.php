<?php
    $dados = $dadosJogos->$codigo; 
?>
<br>
<div class="container">
    <h1 class="text-center"><?=$dados->nome?></h1>
    <div class="row">

        <div class="col-12 col-md-13">
            <p>
                <?=$dados->descricao?>
            </p>
        </div>
    </div>
    <br>
    <img src="<?=$dados->imagem?>" alt="">
    <br>
    <br>
    <h2 class="text-center">FOTOS DO JOGO</h2>
    <br>
    <div class="row">
        <?php
            $dadosFotos = file_get_contents("fotos.json");
            $dadosFotos = json_decode($dadosFotos);
            //só as fotos do jogo
            $dados = $dadosFotos->$codigo;

            $i = 1;
            foreach($dados as $foto) {
                ?>
                <div class="col-12 col-md-3">
                    <a href="<?=$foto->foto?>" title="Foto <?=$i?>"
                    data-fslightbox>
                        <img src="<?=$foto->foto?>"
                        alt="Foto <?=$i?>" class="w-100">
                    </a>
                </div>
                <?php
                $i++;
            }
        ?>
    </div>
    <br>
</div>

