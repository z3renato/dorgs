<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jogo</title>
        <?php require 'includes/css.php'; ?>
    </head>
    <body>
        <div class='container'>
            <div class='center-block' id="quadro">
                <div id="img-fundo">
                    <img src="img/apresentacao.png" class='center-block'>
                </div>
                <div id="dialogo">


                    <h2 id="texto-dialogo" class='text-center'>Olá, tudo bem? Irei te apresentar
                        uma história e ao longo dela farei algumas perguntas. Vou começar te conhecendo melhor. Vamos lá?</h2>

                </div>
                <div class='row'>

                    <a  class="btn btn-primary btn-lg col-xs-2 col-xs-offset-5" id="enviar" href="pergunta1.php"  >Vamos lá!</a>

                </div>



            </div>
        </div>
        <?php require 'includes/js.php'; ?>
    </body>