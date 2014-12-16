<div id="img-fundo">
	<img src="img/quadro4.png" class='center-block'>
</div>
<div id="dialogo">
		<h2 id="texto-dialogo" class='text-center'>Como estão seus pais?</h2>
	<div class='row'>
		<div class='opcao col-xs-2 col-xs-offset-5' ondrop="drop(event)" ondragover="allowDrop(event)" id='op-4'></div>
	</div>
	<div class='row' id='escolha-group'>
		<div class='escolha-holder col-xs-2' ondrop="drop(event)" ondragover="allowDrop(event)" >
                    <span class='escolha col-xs-2 col-xs-offset-1 text-center' draggable="true" id="juntos" 
                          ondragstart="drag(event)" >Vivem Juntos</span>
		</div>
		<div class='escolha-holder col-xs-2 col-xs-offset-1' ondrop="drop(event)" ondragover="allowDrop(event)" >
			<span class='escolha col-xs-2  text-center' draggable="true" id="separados" ondragstart="drag(event)">Vivem Separados</span>
		</div>
		<div class='escolha-holder col-xs-2 col-xs-offset-2' ondrop="drop(event)" ondragover="allowDrop(event)" >
			<span class='escolha col-xs-2  text-center' draggable="true" id="morto" ondragstart="drag(event)">Um deles está falecido(ou os dois)</span>
		</div>
		<div class='escolha-holder col-xs-2 col-xs-offset-1' ondrop="drop(event)" ondragover="allowDrop(event)" >
			<span class='escolha col-xs-2  text-center' draggable="true" id="outro" ondragstart="drag(event)">Outro:</span>
		</div>	
            <button  class="btn btn-primary btn-lg col-xs-2 col-xs-offset-5" id="enviar" onclick="">Enviar</button>
	</div>
</div>