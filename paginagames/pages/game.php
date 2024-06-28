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

<iframe width="100%" height="500" src="<?=$dados->game?>" frameborder="0"></iframe>


<p>
    <a href="<?=$dados->game?>" class="btn btn-primary" target="_blank">
        Abrir Jogo em uma Nova aba
    </a>
</p>

    <a href="<?=$dados->game?>"><img src="<?=$dados->imagem?>" alt=""></a>

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
                <div class="col-3 col-md-3">
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