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
        <link href="css/stylesheet.css" type="text/css" rel="stylesheet">
        <script src="js/js.js" type="text/javascript" ></script>
    </head>
    <body >

        corpo
        <div id="quadro">
            <div id="img-fundo">
                <img src="img/light-novel-quadrinize.jpg">
            </div>
            <div id="dialogo">
                <h1 id="texto-dialogo">Texto 1</h1>
            </div>
            <button onclick="altera()">Dê alegria para o Daniel</button>

        </div>
        <div id="drop" ondrop="drop(event)" ondragover="allowDrop(event)" ></div>

        <img id="sexoFeminino" src="img/feminino.png" draggable="true"
             ondragstart="drag(event)" width="200" height="150">
        <img id="sexoMasculino" src="img/masculino.png" draggable="true"
             ondragstart="drag(event)"  width="200" height="150">

        <?php
        // put your code here
        ?>
    </body>
</html>
