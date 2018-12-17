
<?php
    include "../templates/masterGames.php";
    include '../librerias/bd.php';
?>


<?php startblock('head') ?>
    <title>Capitulo 1</title>
    <link rel="stylesheet" href="../Styles/capituloFin.css">
    <script src="/Never_Forget/scripts/longText.js"></script>
    <script type="text/javascript" src="../scripts/text.js"></script>
<?php endblock() ?>


<?php startblock('principal') ?>


<div class="background" id="background"></div>
<div class="ext" id="long">
    <img id="cancel" onClick="cerrar()"src="../assets/img/cancel.svg" alt="">
    <p>
    Lluís went to the Plaça del Diamant shelter to wait for the bombs to stop before going home. But they didn’t stop, not for three days. It was the worst attack waged on Barcelona at the time. <br>
    A total of 45,000 kg of bombs was dropped on the city by the fascist Italian air fleet. They left 551 dead and 1,151 wounded, in addition to completely destroying 76 buildings and seriously damaging around a hundred more.
    <br>
    <br>
    January 19, 1938
    <br>
    <br>
      - I need to go home. I hope Pau is OK. He should be home by now. 
    <br>
    <br>
    Pau, Lluís’ only son, is 16 years old and goes to school close to his home in Gràcia. <br> Laia, Pau’s mother, died in childbirth. That was a hard blow for Lluís, but when he looks at his son, he knows he has to carry on for him and for Laia. “Your mother would be proud of us, Pau.”
    Upon arriving home, Lluís went pale. The building he lived in had been entirely destroyed by the bombs. His home of 30 years was now a pile of debris. 
    <br>
    <br>
    - Oh my god, Pau! My son! No! He has to be here, I’m sure he got out in time...
    <br>
    <br>
    Lluís checks all the shelters in the neighborhood and shows everyone the photo of Pau he carries in his wallet. Nobody has seen him. Feeling truly desperate now, Lluís heads back to what’s left of his home and searches through the wreckage. He has no luck, though; there’s not a trace of Pau to be found. <br>
    The days go by and there’s still no sign of his son. Lluís fears the worst. <br>
    Then, his grief becomes rage, a rage so strong that he climbs Turó de la Rovira and signs up as a volunteer for...
    <br>
    </p>
    
</div>
<?php
    if(isset($_SESSION['userLoged'])){ 
        $id= $_SESSION['userLoged']['id'];
        $numero= selectGame($id);
        ?>
        <p style="display:hidden;"> 
            <?php echo $numero; ?>
        </p>
        <?php
    }
?>
<div class="container">
   <div class="card mt-5 bg-transparent">
        <div class="card-header bg-transparent mt-5"></div>
            <div class="row no-gutters">
                <div class="col-sm-6 mt-5">
                    <div class="card-block px-2">
                    <h1 class="colorSecundario titulo"></h1>
                    <p id="pHistoriaFin" class="text-white fuente"></p>               
                </div>
            </div>
            
                <div class="col-sm-6 mt-5">
                    <img src="../assets/img/barcelona.jpg" class="img-fluid" id="imgDifuminada">
                </div>
    </div>

    <div class="container">
    

<div class="btn-group" role="group">
    <button type="button" onClick="showModal()" class="btn-lg btn-success m-5" id="botonLearnMore">LEARN MORE
    <button type="button" class="btn-lg btn-danger m-5" id="botonQR" data-toggle="modal" data-target="#modalQR">CONTINUE
</div>


<div class="container">
    <!-- Modal -->
   
    
     <!-- Modal QR-->
     <div class="modal fade align-content-center" id="modalQR" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md"> 
            <div class="modal-content">

                <div class="modal-body">
               
                <p>
                     YA PUEDES ACCEDER A LA SIGUIENTE LOCALIZACIÓN:
                </p>

                <img src="../assets/img/Game2_TunelCarmelQR.png" alt="">
            
                </div>
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->
</div><!-- container -->



<?php endblock() ?>


