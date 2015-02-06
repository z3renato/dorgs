<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<head>
    <meta charset='UTF-8'>
    <title>Jogo</title>
    <?php require 'includes/css.php'; ?>
</head>";
if (isset($_POST["opcao"])) {
    // alguma opção foi marcada
    header('location:../pergunta4.php');
} else {
    echo"<script type='text/javascript'> alert('Selecione alguma opção!.');  </script>\n";
//    header('location:../pergunta3.php');
}



    