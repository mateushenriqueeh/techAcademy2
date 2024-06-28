<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['mensagem']);

$para = "mateushenrique16.mg@gmail.com";

$assunto = "Contato site TECHJOGOS";

$corpo = "Nome: ".$nome."\n"."Email: ".$email."\n"."Mensagem: ".$mensagem;

$cabeca = "From mateushenrique1314.mg@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!");
}else{
    echo("Houve um erro ao enviar o email");
}


?>