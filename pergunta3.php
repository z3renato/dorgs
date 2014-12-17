<head>
    <meta charset="UTF-8">
    <title>Jogo</title>
    <?php require 'includes/css.php'; ?>
</head>
<div id="img-fundo">
    <img src="img/quadro1.png" class='center-block'>
</div>
<div id="dialogo">
    <h2 id="texto-dialogo" class='text-center'>Com quem você mora?</h2>
    <div class='row'>
        <div class='opcao col-xs-2 col-xs-offset-5' ondrop="drop(event)" ondragover="allowDrop(event)" id='op-3'></div>
    </div>
    <div class='row' id='escolha-group'>
        <div class='escolha-holder col-xs-2 col-xs-offset-1' ondrop="drop(event)" ondragover="allowDrop(event)" id='escolha-pai'>
            <span class='escolha col-xs-2 col-xs-offset-1 text-center' id='pai' draggable="true" ondragstart="drag(event)">Pai</span>
        </div>
        <div class='escolha-holder col-xs-2 ' ondrop="drop(event)" ondragover="allowDrop(event)" id='escolha-padrasto'>
            <span class='escolha col-xs-2 col-xs-offset-1  text-center' id='padrasto' draggable="true" ondragstart="drag(event)">Padrasto</span>
        </div>
        <div class='escolha-holder col-xs-2 col-xs-offset-2' ondrop="drop(event)" ondragover="allowDrop(event)" id='escolha-mae'>
            <span class='escolha col-xs-2  col-xs-offset-2 text-center' id='mae' draggable="true" ondragstart="drag(event)">Mãe</span>
        </div>
        <div class='escolha-holder col-xs-2 ' ondrop="drop(event)" ondragover="allowDrop(event)" id='escolha-madrasta'>
            <span class='escolha col-xs-2  text-center' id='madrasta' draggable="true" ondragstart="drag(event)">Madrasta</span>
        </div>
        <div class='escolha-holder col-xs-2 col-xs-offset-1' ondrop="drop(event)" ondragover="allowDrop(event)" id='escolha-irmao'>
            <span class='escolha col-xs-2  text-center' id='irmao' draggable="true" ondragstart="drag(event)">Irmã(s) ou Irmão(s)</span>
        </div>
        <div class='escolha-holder col-xs-2 ' ondrop="drop(event)" ondragover="allowDrop(event)" id='escolha-avo'>
            <span class='escolha col-xs-2  text-center' id='avo' draggable="true" ondragstart="drag(event)">Avó(s) ou avô(s)</span>
        </div>
        <div class='escolha-holder col-xs-2 col-xs-offset-2' ondrop="drop(event)" ondragover="allowDrop(event)" id='escolha-outro'>
            <span class='escolha col-xs-2  text-center' id='outro' draggable="true" ondragstart="drag(event)">Outros</span>
        </div>
        <a  class="btn btn-primary btn-lg col-xs-2 col-xs-offset-5" id="enviar" href="pergunta4.php"  >Próxima</a>
    </div>
</div>
  <?php require 'includes/js.php'; ?>
