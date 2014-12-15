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
	<?php require 'includes/css.php';?>
</head>
<body>
	<div class='container'>
		<div class='center-block' id="quadro">
			<div id="img-fundo">
				<img src="img/light-novel-quadrinize.jpg" class='center-block'>
			</div>
			<div id="dialogo">
				<h2 id="texto-dialogo" class='text-center'>Qual seu sexo?</h2>
				<br>
				<div class='row'>
					<div class='opcao col-md-2 col-md-offset-5' ondrop="drop(event)" ondragover="allowDrop(event)" id='op-1'></div>
				</div>
				<div class='row' id='escolha-group'>
					<div class='escolha-holder col-md-2 col-md-offset-2' ondrop="drop(event)" ondragover="allowDrop(event)" id='escolha-homem'>
						<span class='escolha col-md-2 col-md-offset-1 text-center' id='homem' draggable="true" ondragstart="drag(event)">♂</span>
					</div>
					<div class='escolha-holder col-md-2 col-md-offset-4' ondrop="drop(event)" ondragover="allowDrop(event)" id='escolha-mulher'>
						<span class='escolha col-md-2 col-md-offset-6 text-center' id='mulher' draggable="true" ondragstart="drag(event)">♀</span>
					</div>
				</div>
			</div>
			<!--Fazer aparecer somente após selecionar uma opcao-->
			<button class="btn btn-primary btn-lg col-md-2 col-md-offset-5" id="enviar">Enviar</button>

		</div>
	</div>
	<?php require 'includes/js.php';?>
</body>