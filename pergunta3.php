<head>
    <meta charset="UTF-8">
    <title>Jogo</title>
    <?php require 'includes/css.php'; ?>
</head>
<div id="img-fundo">
    <img src="img/cena2.png" class='center-block'>
</div>
<div id="dialogo">
    <h2 id="texto-dialogo" class='text-center'>Com quem você mora?</h2>

</div>
<form action="cadastro/pergunta3.php"id="form-opcoes" method="post">
    <div class="checkbox">
        <label class="col-sm-2  col-sm-offset-2">
            <input type="checkbox" value="Pai" name="opcao[]">
            <p class="opc"> Pai</p>
        </label>
    </div>
    <div class="checkbox">
        <label class="col-sm-2  col-sm-offset-2">
            <input type="checkbox" value="Mae" name="opcao[]">
            <p class="opc"> Mãe</p>
        </label>
    </div>
    <div class="checkbox">
        <label class="col-sm-2  col-sm-offset-2">
            <input type="checkbox" value="Padrasto" name="opcao[]">
            <p class="opc"> Padrasto</p>
        </label>
    </div>
    <div class="row"></div>
    <div class="checkbox">
        <label class="col-sm-2  col-sm-offset-2">
            <input type="checkbox" value="Madrasta" name="opcao[]">
            <p class="opc"> Madrasta</p>
        </label>
    </div><div class="checkbox">
        <label class="col-sm-2  col-sm-offset-2">
            <input type="checkbox" value="irmao" name="opcao[]">
            <p class="opc"> Irmão(s) e/ou Irmã(s) </p>
        </label>
    </div><div class="checkbox">
        <label class="col-sm-2  col-sm-offset-2">
            <input type="checkbox" value="avo" name="opcao[]">
            <p class="opc"> Avô ou Avó</p>
        </label>
    </div>
    
    <input class="btn btn-primary btn-lg col-xs-2 col-xs-offset-5" type=submit value="Próxima">
</form>


</div>
<?php require 'includes/js.php'; ?>
