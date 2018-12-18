<?php
    include "../templates/masterGames.php";
    include '../librerias/bd.php';
?>
<?php
    if(isset($_SESSION['userLoged'])){ 
        $id= $_SESSION['userLoged']['id'];
        $numero= selectGame($id);
    }
?>

<?php startblock('head') ?>
    <title>Capitulo <?php echo $numero ?></title>
    <link rel="stylesheet" href="../Styles/capituloFin.css">
    
<?php endblock() ?>


<?php startblock('principal') ?>


<div class="background" id="background"></div>
<div class="ext" id="long">
    <img id="cancel" onClick="cerrar()"src="../assets/img/cancel.svg" alt="">
    <p id="textFin">
    </p>   
    <p id="progress" style="display:none;"> 
    <?php echo $numero; ?>
    </p>
</div>

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
                    <img class="img-fluid" id="imgDifuminadaFin">
                </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="btn-group" role="group">
        <button type="button" onClick="showModal()" class="btn-lg btn-success m-5" id="botonLearnMore">LEARN MORE
        <form action="mainController.php" method="post"> 
            <button type="submit" name="nextGame" class="btn-lg btn-danger m-5">CONTINUE
        </form> 
        <iframe id="request" style="width:0;height:0;border:0; border:none;"></iframe>
        
    </div>
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

                <img class="imgQR" src="../assets/img/Game2_TunelCarmelQR.png" alt="">
            
                </div>
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->
</div><!-- container -->


<script src="/Never_Forget/scripts/longText.js"></script>
<script type="text/javascript" src="../scripts/text.js"></script>
<?php endblock() ?>


