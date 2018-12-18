<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>
<?php include "../../templates/masterGames.php" ?>

    <?php startblock('head') ?>
        <title>Riddle 5: Castle of Montjuic</title>
        <link rel="stylesheet" href="../../Styles/games/game5.css">
        
    <?php endblock() ?>

<?php startblock('principal') ?>

    <div class="container">
    
    <h1 class="titulo">Hangman game</h1>
    
    <h1 id="msg-final">You are saved</h1>
    <h2 id="acierto"></h2>
    <div class="flex-row no-wrap">
        <h2 class="palabra" id="palabra"></h2>
        <picture>
        <img src="../../assets/img/game5_ahorcado_6.png" alt="" id="image6">
        <img src="../../assets/img/game5_ahorcado_5.png" alt="" id="image5">
        <img src="../../assets/img/game5_ahorcado_4.png" alt="" id="image4">
        <img src="../../assets/img/game5_ahorcado_3.png" alt="" id="image3">
        <img src="../../assets/img/game5_ahorcado_2.png" alt="" id="image2">
        <img src="../../assets/img/game5_ahorcado_1.png" alt="" id="image1">
        <img src="../../assets/img/game5_ahorcado_0.png" alt="" id="image0">
        </picture>
    </div>
    <div class="flex-row" id="turnos">
        <div class="col">
        <button onclick="mostrarModalAyuda()" class="btn btn-next" id="btnAyuda">?</button>
        <h3>Intentos restantes: <span id="intentos">6</span></h3>
        </div>
        <div class="col">
        <button id="continuar" style="display: none" class="btn btn-next" onClick="location.href='../capituloFin.php'">Continue</button>
        <button onclick="siguiente()" id="siguiente" class="btn btn-next">Next</button>
        <button onclick="pista()" id="pista" class="btn btn-outline-danger btn-pista">Give me a clue</button>
        <span id="hueco-pista"></span>
        </div>
        </div>
    
    <div class="flex-row">
        <div class="col">
        <div class="flex-row" id="abcdario">
        </div>
        </div>
        <div class="col"></div>
    </div>

    </div>

    <!--Modal de ayuda-->
    <div class="modal" tabindex="-1" role="dialog" id="modalPista">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-modal-header">
                    <h5 class="modal-title">Advice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-modal-body">
                    
                </div>
            </div>
        </div>
    </div>

    <!--Modal de instrucciones-->
    <div class="modal" tabindex="-1" role="dialog" id="modalAyuda">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-modal-header">
                    <h5 class="modal-title">Instructions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-modal-body">
                    <p>- When you complete the word/s, go to the next one.</p>
                    <p>- Click on the letters to complete the word/s.</p>
                    <p>- If you need some help, click on "Give me a clue".</p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../../scripts/games/game5/ahorcado.js"></script>
    <!--<script src="../../scripts/games/game5/tiempo-pista.js"></script>-->
<?php endblock() ?>
  