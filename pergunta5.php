<head>
    <meta charset="UTF-8">
    <title>Jogo</title>
    <?php require 'includes/css.php'; ?>
</head>
<div id="img-fundo">
	<img src="img/quadro4.png" class='center-block'>
</div>
<div id="dialogo">
		<h2 id="texto-dialogo" class='text-center'>Quantas vezes você faltou no último mês?</h2>
	<div class='row'>
		<div class='opcao col-xs-2 col-xs-offset-5' ondrop="drop(event)" ondragover="allowDrop(event)" id='op-4'></div>
	</div>
	<div class='row' id='escolha-group'>
		<div class='escolha-holder col-xs-2' ondrop="drop(event)" ondragover="allowDrop(event)" >
			<span class='escolha col-xs-2 col-xs-offset-1 text-center' draggable="true" id="nao-faltou" ondragstart="drag(event)">Não Faltei</span>
		</div>
		<div class='escolha-holder col-xs-2 col-xs-offset-1' ondrop="drop(event)" ondragover="allowDrop(event)" >
			<span class='escolha col-xs-2  text-center' draggable="true" id="faltou-1-3" ondragstart="drag(event)">Faltei de 1 à 3 dias</span>
		</div>
		<div class='escolha-holder col-xs-2 col-xs-offset-2' ondrop="drop(event)" ondragover="allowDrop(event)" >
			<span class='escolha col-xs-2  text-center' draggable="true" id="faltou-4-8" ondragstart="drag(event)">Faltei de 4 à 8 dias</span>
		</div>
		<div class='escolha-holder col-xs-2 col-xs-offset-1' ondrop="drop(event)" ondragover="allowDrop(event)" >
			<span class='escolha col-xs-2  text-center' draggable="true" id="faltou-9" ondragstart="drag(event)">Faltei 9 dias ou mais</span>
		</div>	
	</div>
</div>
<?php require 'includes/js.php'; ?>