<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = ($_POST['mensagem']);

    $para = "rebelo03.dev@gmail.com"
    $assunto = "Contato - Portfólio"

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: rebelo03.dev@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!")
    }

?>