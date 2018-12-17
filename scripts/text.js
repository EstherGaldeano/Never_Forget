var enigma = "3" // $('#progress').text();
//console.log("AIXO ES ENIGMACODE: " + enigma.trim());

var boton1= '#boton1';
var boton2= '#boton2';
var boton3= '#boton3';
var boton4= '#boton4';
var boton5= '#boton5';
var img1 = '#imgPC1';
var img2 = '#imgPC2';
var img3 = '#imgPC3';
var img4 = '#imgPC4';
var img5 = '#imgPC5';
textMod();

function textMod(){
switch (enigma//.trim()
) {
  case "1":
  //ANTES DEL JUEGO
  $('.titulo').text('Chapter 1 - Bombing');
  $('#pHistoria').text ('Barcelona,January 1938,neighborhood of Gracia. As usual, Lluís heads home after a');
  $('#pHistoria').append ('long day of work at the factory, where he helps the Republicans make ammunition.Suddenly, the silence');
  $('#pHistoria').append ('of the night is shattered by a large blast: another air strike. Lluís must find some place to take shelter..');

  //AFTER GAME
  $('#pHistoriaFin').text ('The city is destroyed after the attack. Lluís goes home hoping to find his son, Pau, but there is no trace of him.');
  $('#pHistoriaFin').append (' He searches long and hard, but the boy hasn’t shown up. Lluís decides it’s time to take action.');

  $('.versionExtendidaInit').attr('src', "../assets/img/versionExtendidaInit1.png");
  $('.versionExtendidaFin').attr('src', "../assets/img/versionExtendidaFin1.png");
  $('.imgQR').attr('src', "../assets/img/QR/QRCarmel.png"); 

  //PROGRESO JUGADOR

  cambioBoton(boton1,"../views/games/game1.php",img1,'../assets/img/ordenadorDiamant.png');


  break;

  case "2":
  //BEFORE GAME
  $('.titulo').text ('Chapter 2 - Revenge');
  $('#pHistoria').text('Lluís heads to the top of Turó de la Rovira, where anti-aircraft guns have been installed to defend the city.');
  $('#pHistoria').append (' There, a group of neighbors has gathered to try to prevent attacks by enemy planes.');
  $('#pHistoria').append (' His goal was to survive yet another attack and continue searching for his son.');

  //AFTER GAME
  $('#pHistoriaFin').text (' Having survived the attack, he sits down to rest and gazes upon a photo of his son.');
  $('#pHistoriaFin').append (' That’s when a comrade approaches: he recognizes the boy in the photo and tells Lluís he has seen him at Plaça de Sant Felip Neri.');

  $('.versionExtendidaInit').attr('src', "../assets/img/versionExtendidaInit1.png");
  $('.versionExtendidaFin').attr('src', "../assets/img/versionExtendidaFin1.png");
  $('.imgQR').attr('src', "../assets/img/QR/QRNeri.png"); 

  cambioBoton(boton1,"../views/games/game1.php",img1,'../assets/img/ordenadorDiamant.png');
  cambioBoton(boton2,"../views/games/game2.php",img2,'../assets/img/ordenadorCarmel.png');
  
  break;

  case "3":
  //BEFORE GAME
  $('.titulo').text ('Chapter 3 - Hope');
  $('#pHistoria').text('Upon arriving at the square, the scene is heartbreaking. A bomb has destroyed everything.');
  $('#pHistoria').append ('The wounded take shelter in the church, which, just minutes later, is hit by another bomb.');
  $('#pHistoria').append ('Without a second thought, Lluís dives into the wreckage to help pull out the wounded.');

  //AFTER GAME
  $('#pHistoriaFin').text ('Lluís searches for clues about his son’s whereabout and, fortunately, the church priest gives him a tip.');
  $('#pHistoriaFin').append ('The boy had been there searching for his father after the first strike. ');
  $('#pHistoriaFin').append ('The last thing he’d heard was that Pau was leaving for Refugi 307.');  
 

  $('.versionExtendidaInit').attr('src', "../assets/img/versionExtendidaInit1.png");
  $('.versionExtendidaFin').attr('src', "../assets/img/versionExtendidaFin1.png");
  $('.imgQR').attr('src', "../assets/img/QR/QR307.png"); 

  cambioBoton(boton1,"../views/games/game1.php",img1,'../assets/img/ordenadorDiamant.png');
  cambioBoton(boton2,"../views/games/game2.php",img2,'../assets/img/ordenadorCarmel.png');
  cambioBoton(boton3,"../views/games/game3.php",img3,'../assets/img/ordenadorNeri.png');

break;

  case "4":
  //BEFORE GAME
  $('.titulo').text ('Chapter 4 - Wait'); // waiting?
  $('#pHistoria').text('In the hope of finding Pau, Lluís goes to Refugi 307. He finds the shelter half destroyed from the last air strike.');
  $('#pHistoria').append ('The neighbours are working to repair it. One of them has seen Pau: he went to get material for the repairs. ');
  $('#pHistoria').append ('They know nothing more of his whereabouts.');

  //AFTER GAME
  $('#pHistoriaFin').text ('After waiting for hours, the boy still hasn’t returned to the shelter.');
  $('#pHistoriaFin').append (' Lluís spends the night at the home of one of the neighbors who graciously offers to host him.');
  $('#pHistoriaFin').append ('The next morning, the Nationalists have taken over the city. Barcelona has fallen. Lluís decides to risk it all and search for his son when he’s suddenly captured and taken to the prison at Castell de Montjuïc.');  


  $('.versionExtendidaInit').attr('src', "../assets/img/versionExtendidaInit1.png");
  $('.versionExtendidaFin').attr('src', "../assets/img/versionExtendidaFin1.png");
  $('.imgQR').attr('src', "../assets/img/QR/QRMontjuic.png"); 

  cambioBoton(boton1,"../views/games/game1.php",img1,'../assets/img/ordenadorDiamant.png');
  cambioBoton(boton2,"../views/games/game2.php",img2,'../assets/img/ordenadorCarmel.png');
  cambioBoton(boton3,"../views/games/game3.php",img3,'../assets/img/ordenadorNeri.png');
  cambioBoton(boton4,"../views/games/game4.php",img4,'../assets/img/ordenador307.png');

  break;
  case "5":
  //BEFORE GAME
  $('.titulo').text ('Chapter 5 - Runaway');
  $('#pHistoria').text('  Lluís runs into Pau in prison. They boy had been arrested just a few hours earlier.');
  $('#pHistoria').append ('Prisoners are executed at the Castle each day, so they must find a way to escape as quickly as possible. ');
  
  //AFTER GAME
  $('#pHistoriaFin').text ('There’s an incident in the courtyard that distracts the guards, which the father and son take advantage of to escape down through the sewer and make it to a safe place. They are finally free and together again.');
  $('.versionExtendidaInit').attr('src', "../assets/img/versionExtendidaInit1.png");
  $('.versionExtendidaFin').attr('src', "../assets/img/versionExtendidaFin1.png");

  cambioBoton(boton1,"../views/games/game1.php",img1,'../assets/img/ordenadorDiamant.png');
  cambioBoton(boton2,"../views/games/game2.php",img2,'../assets/img/ordenadorCarmel.png');
  cambioBoton(boton3,"../views/games/game3.php",img3,'../assets/img/ordenadorNeri.png');
  cambioBoton(boton4,"../views/games/game4.php",img4,'../assets/img/ordenador307.png');
  cambioBoton(boton5,"../views/games/game5.php",img5,'../assets/img/ordenadorMontjuic.png');


break;
}


function cambioBoton(boton, rutaB, img, rutaI){
  $(boton).text("JUGAR");
  $(boton).attr('href', rutaB);
  $(boton).attr('class', 'btn-lg btn-success mb-5');
  $(img).attr('src', rutaI);
  }
}