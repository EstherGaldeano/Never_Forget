<?php
    include "../templates/masterGames.php";
    include '../librerias/bd.php';
?>
<?php startblock('head') ?>
    <title>Capitulo <?php echo $numero ?></title>
    <link rel="stylesheet" href="../Styles/capituloFin.css">
    
<?php endblock() ?>


<?php startblock('principal') ?>

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



<script type="text/javascript" src="../scripts/text.js"></script>
<?php endblock() ?>