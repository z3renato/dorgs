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
			<?php require 'includes/pergunta5.php';?>
			<!--Fazer aparecer somente após selecionar uma opcao-->
			
			<button class="btn btn-primary btn-lg col-xs-2 col-xs-offset-5" id="enviar">Enviar</button>
		</div>
	</div>
	<?php require 'includes/js.php';?>
</body>