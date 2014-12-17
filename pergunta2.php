<head>
    <meta charset="UTF-8">
    <title>Jogo</title>
    <?php require 'includes/css.php'; ?>
</head>
<div id="img-fundo">
    <img src="img/quadro2.png" class='center-block'>
</div>
<div id="dialogo">
    <h2 id="texto-dialogo" class='text-center'>Qual sua Idade?</h2>
    <div class='row'>
        <form class="form-group col-xs-2 col-xs-offset-5" action="cadastro/pergunta2.php">
            <input type="text" class="form-control " placeholder="Idade"><br>
            <input type="submit" class="btn btn-primary btn-lg col-xs-8 col-xs-offset-2"  id="enviar"value="Próxima"></input>
        </form>
    </div>
    <?php require 'includes/js.php'; ?>