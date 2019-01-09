
document.addEventListener("DOMContentLoaded", function(){
    shuffle();
    setTimeout('help()',30000);

}, false);

var intentos=0
var acabado=false;
segundos=1;
var tiempo = window.setInterval(function(){
   document.getElementById('tiempo').innerHTML = segundos+' s';
   segundos++;
},1000);

//Cambia una ficha por otra, llama a la función checksolved.
function swap(tile1, tile2){
   var aux = document.getElementById(tile1).className;
   console.log(aux); 
   document.getElementById(tile1).className= document.getElementById(tile2).className;
   console.log(tile1);
   document.getElementById(tile2).className = aux;
   console.log(tile2);

   if(checksolved()){
       acabado=true;
       if(intentos>1){
           finish(solved);
       }
   }
   contador();
   
}

//Mezcla todas las fichas.
function shuffle(){

   for(var row=1; row<=3; row++){
       for(var column = 1; column <=3; column++){

           var randomRow=Math.floor(Math.random()*(4 - 1))+ 1;
           var randomColumn=Math.floor(Math.random()*3 + 1);
           swap("cell"+row+column, "cell"+randomRow+randomColumn);
       }
   }
   intentos=0;
}

//Comprueba que ficha hay que cambiar y llama a la funcion swap para que la cambie.
function changeTile(row,column){

   var tile= document.getElementById("cell"+row+column);
   
   if (tile.className != "cell9"){
   //   if(coprobarDosBlancos()){
       
       if(column<3 && row<3){
           if(document.getElementById("cell"+row+(column+1)).className=="cell9" && document.getElementById("cell"+(row+1)+column).className=="cell9" ){
               if(document.getElementById("cell"+row+(column+1)).click()){
                   swap("cell"+row+column, "cell"+row+(column+1));
               }
               if(document.getElementById("cell"+(row+1)+column).click()){
                   swap("cell"+row+column, "cell"+(row+1)+column);
               } 
           }
       }
       if(column>1 && row>1){
           if(document.getElementById("cell"+row+(column-1)).className=="cell9" && document.getElementById("cell"+(row-1)+column).className=="cell9" ){
               if(document.getElementById("cell"+row+(column-1)).click()){
                   swap("cell"+row+column, "cell"+row+(column-1));
               }
               if(document.getElementById("cell"+(row-1)+column).click()){
                   swap("cell"+row+column, "cell"+(row-1)+column);
               } 
           }
       }
   //   }
   //   else{
       if(column<3){
           
           if(document.getElementById("cell"+row+(column+1)).className=="cell9"){
               swap("cell"+row+column, "cell"+row+(column+1));
           }
       }
       if(column>1){
        
           if(document.getElementById("cell"+row+(column-1)).className=="cell9"){
               swap("cell"+row+column, "cell"+row+(column-1));
           }
       }
       if(row>1){
           if(document.getElementById("cell"+(row-1)+column).className=="cell9"){
               swap("cell"+row+column, "cell"+(row-1)+column);
           }
       }
       if(row<3){
           if(document.getElementById("cell"+(row+1)+column).className=="cell9"){
               swap("cell"+row+column, "cell"+(row+1)+column);
           }
       }
   }
   //   }
   
   document.getElementById('contador').innerHTML = intentos;
   
   //PONER OPCION A ACABAR O SEGUIR

   if(intentos == 400){
       finish(notSolved);
   }
   
   
}

// function coprobarDosBlancos(){
//     (document.getElementById("cell"+(row+1)+column).className==cell9 && document.getElementById("cell"+row+(column+1).className==cell9) 
//     || (document.getElementById("cell"+(row-1)+column).className==cell9 && document.getElementById("cell"+row+(column-1)).className==cell9)
//     || (document.getElementById("cell"+row+(column-1)).className==cell9 && document.getElementById("cell"+row+(column+1)).className==cell9)
//     || (document.getElementById("cell"+(row+1)+column).className==cell9 && document.getElementById("cell"+(row-1)+column).className==cell9))
   
// }

// function help(){
//     aux=document.getElementById("cell11").className;
//     document.getElementById("cell11").className="cell9";
//     document.getElementById("cellhelp").className=aux;

// }


function help(){
   document.getElementById("help").style.display= "block";
   document.getElementById("abandonar").style.display= "block";
}

//Comprueba si el puzzle esta resuelto.
function checksolved(){
   var contador=1;
   var solved=true;
   
   for(var row=1; row<=3; row++){
       for(var column=1;column<=3;column++){
           
               if(document.getElementById("cell"+row+column).className!="cell"+contador){
                   solved=false;
               }
               contador++;
       }
   }
   return solved;
}

function contador(){

   intentos++;

}

//Puzzle resuelto.
function finish(isSolved) {
//    if(acabado==true){
//        document.getElementById("win").innerHTML="Well done!";
//    }else{
//        document.getElementById("win").innerHTML="Don't worry, <br> we finish it";
      
//    }
   isSolved();
   document.getElementById("cell33").className= "Complete";
       clearInterval(tiempo); 
       
    document.getElementById("puzzle").style.transition= ".5s ease-in-out";
    for(var row=1; row<=3; row++){
        for(var column=1; column<=3; column++){
            document.getElementById("cell"+row+column).style.border= "none";
            document.getElementById("cell"+row+column).style.filter= "blur(2px)";
        }
    }
    document.getElementById("puzzle").style.transform= "scale(1.1)";
    document.getElementById("winContinue").style.display= "block";
    document.getElementById("win").style.display= "block";
    
}

//Fin del tiempo
function notSolved(){
    document.getElementById("win").innerHTML="Don't worry, <br> we finish it";
    document.getElementById("continue").style.display= "block";
}
function volver(){
    var tiempo = window.setInterval(function(){
        document.getElementById('tiempo').innerHTML = segundos+' s';
        segundos++;
     },1000);
     for(var row=1; row<=3; row++){
        for(var column=1; column<=3; column++){
            document.getElementById("cell"+row+column).style.border= "1px solid white";
            document.getElementById("cell"+row+column).style.filter= "none";
        }
    }
    document.getElementById("puzzle").style.transform= "none";
    document.getElementById("winContinue").style.display= "none";
    document.getElementById("win").style.display= "none";
    document.getElementById("continue").style.display= "none";
}
function solved(){
    document.getElementById("win").innerHTML="Well done!";
    
}

