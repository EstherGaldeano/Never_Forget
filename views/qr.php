<?php
    include "../templates/masterGames.php";
    include '../librerias/bd.php';
?>
<?php
    if(isset($_SESSION['userLoged'])){ 
        $id= $_SESSION['userLoged']['id'];
        $numero= selectGame($id);
        $numero -= 1;
    }
?>
<?php startblock('head') ?>
    <title>Capitulo <?php echo $numero ?></title>
    <link rel="stylesheet" href="../Styles/capituloFin.css">

<?php endblock() ?>


<?php startblock('principal') ?>
<div class="container">
<div>
<p id="progress" style="display:none;"> 
    <?php echo $numero; ?>
</p>
</div>

<div class="card mx-auto mt-5" style="width: 20rem;">
    <img class="imgQR" style="height:20rem;" alt="">
  <div class="card-body">
    <h2>CONGRATULATIONS!</h2>
    <p id="gameWin" class="card-text mx-auto">You're ready for the next riddle!</p>
  </div>
</div>
   
 
                
            
  
</div>


<script type="text/javascript" src="../scripts/text.js"></script>

<?php endblock() ?>