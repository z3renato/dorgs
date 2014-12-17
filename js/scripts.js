/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function altera() {
    document.getElementById("texto-dialogo").innerHTML="NOVO TEXTO";
}

//Função de Drag&Drop
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("Text", ev.target.id);
}
function getConteudo(){
    var qtd = $("#op > span").size();
    
    alert(qtd);
}

function drop(ev) {
    var data = ev.dataTransfer.getData("Text");
    ev.target.appendChild(document.getElementById(data));
    ev.preventDefault();
//    
//    document.getElementById("op-4").id="juntos";
//    document.getElementById("separados").draggable = false;
//    document.getElementById("morto").draggable = false;
//    document.getElementById("outro").draggable = false;
  
}
// /Função de Drag&Drop
function exibe(texto){
    window.alert(texto);
}