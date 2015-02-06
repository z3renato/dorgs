<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$valor = "valor";
?>
<body onload="document.formulario.submit()">
    <form method="post" action="teste2.php" name="formulario">
        <input type="hidden" name="valor" value="<?php echo $valor; ?>" />


    </form>
</body>