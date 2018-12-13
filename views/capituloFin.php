<?php include "../templates/masterGames.php" ?>
<script type="text/javascript" src="../scripts/text.js"></script>

<?php startblock('titulo') ?>
    <title>Capitulo 1</title>
    <?php endblock() ?>


<?php startblock('principal') ?>
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
    <button type="button" class="btn-lg btn-success m-5" id="botonLearnMore" data-toggle="modal" data-target="#modalPage">LEARN MORE
    <button type="button" class="btn-lg btn-danger m-5" id="botonQR" data-toggle="modal" data-target="#modalQR">CONTINUE
</div>


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
                <img class= "versionExtendidaFin"src="" >
                </div>
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->



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


