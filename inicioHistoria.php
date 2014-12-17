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


                    <h2 id="texto-dialogo" class='text-center'>Bem, agora que já te conheço melhor, 
                        vou te contar uma história e você responderá de acordo com aquilo que você se identifica</h2>

                </div>
                <div class='row'>

                    <a  class="btn btn-primary btn-lg col-xs-2 col-xs-offset-5" id="enviar" href="pergunta5.php"  >Ok! Vamos começar!</a>

                </div>



            </div>
        </div>
        <?php require 'includes/js.php'; ?>
    </body>