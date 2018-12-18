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

<?php
    if($numero!=5){

?>
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
<?php
    }else{

?>

        <div>
           You have completed all the riddles. We hope to see you soon again!
           <button type="button" class="btn-lg btn-outline-danger" >
           <a style="text-decoration:none;color:white;" href="index.php">BACK</a>
          </button>
        </div>

<?php
    }
?>

<script type="text/javascript" src="../scripts/text.js"></script>

<?php endblock() ?>