/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
escolha="";
function getResposta(){
    return escolha;
}
function setEscolha(escolha){
    this.escolha = escolha;
}
function addEscolha(esc){
   arrayEscolha.add(esc);
   
   this.escolha+=esc;
}
function altera() {
    document.getElementById("texto-dialogo").innerHTML = "NOVO TEXTO";
}

//Função de Drag&Drop
function allowDrop(ev) {

    ev.preventDefault();

}

function drag(ev) {


    ev.dataTransfer.setData("Text", ev.target.id);

}
function getConteudo() {
    var qtd = $("#op > span").contents().size();
    if(qtd>0){
        document.getElementById("op").draggable = false;
    }
   
    return qtd;
}
function verifica(proxima) {

    if (getConteudo() == 0) {
        alert("Selecione uma opção!!!");
        
    } else {
        document.getElementById('campoResposta').value=getResposta();
        document.formularioResposta.submit();
       
    }
}
function allowDropOp(ev) {
    if (getConteudo() == 0) {
         ev.preventDefault();
      
    }
}
function drop(ev) {

    var data = ev.dataTransfer.getData("Text");
    ev.target.appendChild(document.getElementById(data));
    ev.preventDefault();
   

//    }
//    document.getElementById("op-4").id="juntos";
//    document.getElementById("separados").draggable = false;
//    document.getElementById("morto").draggable = false;
//    document.getElementById("outro").draggable = false;

}
// /Função de Drag&Drop
function exibe(texto) {
    window.alert(texto);
}