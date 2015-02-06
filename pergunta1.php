<head>
    <meta charset="UTF-8">
    <title>Jogo</title>
    <?php require 'includes/css.php'; ?>
</head>
<div id="img-fundo">
    <img src="img/quadro1.png" class='center-block'>
</div>
<div id="dialogo">
    <h2 id="texto-dialogo" class='text-center'>Qual seu sexo?</h2>
    <div class='row'>
        <div class='opcao col-xs-2 col-xs-offset-5'  ondrop="drop(event)" ondragover="allowDropOp(event)" id='op'></div>
    </div>
    <div class='row' id='escolha-group'>
        <div class='escolha-holder col-xs-2 col-xs-offset-2' ondrop="drop(event)" ondragover="allowDrop(event)" id='escolha'>
            <span class='escolha col-xs-2 col-xs-offset-1 text-center' id="homem" draggable="true" ondragstart="drag(event)" ondragend="setEscolha('homem')">♂</span>
        </div>
        <div class='escolha-holder col-xs-2 col-xs-offset-4' ondrop="drop(event)" ondragover="allowDrop(event)" id='escolha'>
            <span class='escolha col-xs-2   text-center' id='mulher' draggable="true" ondragstart="drag(event)"ondragend="setEscolha('mulher')">♀</span>
        </div>
    </div>
    <form action="cadastro/pergunta1.php" method="post" name='formularioResposta'>
        <input id="campoResposta" type="hidden" name="resposta" value="" />
        
    </form> 
    <a  class="btn btn-primary btn-lg col-xs-2 col-xs-offset-5" id="enviar"onclick="verifica('')"  >Próxima</a>
</div>
<?php require 'includes/js.php'; ?>
