<?php include "../templates/masterGames.php"; 
      include '../librerias/bd.php';
?>

<?php
    if(isset($_SESSION['userLoged'])){ 
        $id= $_SESSION['userLoged']['id'];
        $numero= selectGame($id);
    }
?>
<?php startblock('titulo') ?>
    <title>Capitulo 1</title>
    <link rel="stylesheet" href="../Styles/capituloFin.css">
<?php endblock() ?>


<?php startblock('principal') ?>

<div class="background" id="background"></div>
<div class="ext" id="long">
    <img id="cancel" onClick="cerrar()"src="../assets/img/cancel.svg" alt="">
    <p id="textFin">
    </p>   
</div>

<p id="progress" style="display:hidden;"> 
    <?php echo $numero; ?>
</p>



<div class="container">
    <!-- Modal -->
    <div class="modal right fade" id="modalPage" tabindex="-1" role="dialog" aria-labelledby="modalPageLabel2">
        <div class="modal-dialog modal-lg" role="document" style= "width:600px;"> 
            <div class="modal-content">

                <div class="modal-header ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalPageLabel2"></h4>
                </div>   

                <div class="modal-body">
                <!--IMAGEN DE PÁGINA DE LIBRO-->
                <img class= "versionExtendidaInit"src="" >
            
                </div>
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->


<div class="container">
   <div class="card mt-5 bg-transparent">
        <div class="card-header bg-transparent mt-5"></div>
            <div class="row no-gutters">
                <div class="col-sm-6 mt-5">
                    <div class="card-block px-2">
                    <h1 class="colorSecundario titulo"></h1>
                    <p id="pHistoria" class="text-white fuente"></p>               
                </div>
            </div>
            
                <div class="col-sm-6 mt-5">
                    <img src="../assets/img/barcelona.jpg" class="img-fluid" id="imgDifuminada">
                </div>
    </div>

    <!-- <div class="container"> -->

<div class="btn-group" role="group">
    <button type="button" onClick="showModal()" class="btn-lg btn-success m-5" id="botonLearnMore">LEARN MORE</button>
    <button class="btn-lg btn-danger m-5" onclick="window.location.href='../views/games/game1.php' ">CONTINUE</button>
</div>

<script src="/Never_Forget/scripts/longText.js"></script>
<script type="text/javascript" src="../scripts/text.js"></script>
<?php endblock() ?>


