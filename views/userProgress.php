<?php 
include "../templates/master.php";
include '../librerias/bd.php'; 
?>
<?php
    if(isset($_SESSION['userLoged'])){ 
        $id= $_SESSION['userLoged']['id'];
        $numero= selectGame($id);
    }
?>

<?php startblock('head')?>
  <link rel="stylesheet" href="../Styles/userProgress.css">
  <link rel="stylesheet" href="/Never_Forget/Styles/Games.css">
<?php endblock() ?>
<?php startblock('principal') ?>

<div class="container">
<p id="progress" style="display:hidden;"> 
    <?php echo $numero; ?>
</p>
<h1 class="colorSecundario tituloProgress text-center mt-4">Progreso del jugador</h1>

</div>

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-sm-4">
        <img src="../assets/img/ordenadorDiamant.png" class="img-fluid mb-2" alt="Responsive image" id=imgPC1>
        <h2 class="text-white text-center">Capítulo 1</h2>
        <p class="text-white text-center" id="pProgress1"></p>
          <div class="col-sm-12 text-center">
          <a class="btn-lg btn-success mb-5" id='boton1' href="capituloInicio.php"></a>

          </div>
      </div>

      <div class="col-sm-4">
        <img src="../assets/img/ordenadorApagado.png" class="img-fluid mb-2" alt="Responsive image" id=imgPC2>
        <h2 class="text-white text-center">Capítulo 2</h2>
        <p class="text-white text-center" id="pProgress2"></p>
          <div class="col-sm-12 text-center">
          <a class="btn-lg btn-danger mb-5" id='boton2' href="">BLOQUEADO</a>
          </div>
    </div>


      <div class="col-sm-4">
        <img src="../assets/img/ordenadorApagado.png" class="img-fluid mb-2" alt="Responsive image" id=imgPC3>
        <h2 class="text-white text-center">Capítulo 3</h2>
        <p class="text-white text-center"  id="pProgress3"></p>
          <div class="col-sm-12 text-center">
          <a class="btn-lg btn-danger mb-5" id='boton3' href="">BLOQUEADO</a>
          </div>
      </div>
  </div>
</div>


<div class="container mt-5 mb-5">
  <div class="row">

<div class="col-sm-2">
  <!--parche para centrar el container-->
</div>

    <div class="col-sm-4">
        <img src="../assets/img/ordenadorApagado.png" class="img-fluid mb-2" alt="Responsive image" id=imgPC4>
        <h2 class="text-white text-center">Capítulo 4</h2>
        <p class="text-white text-center" id="pProgress4"></p>
          <div class="col-sm-12 text-center">
          <a class="btn-lg btn-danger mb-5" id='boton4' href="">BLOQUEADO</a>
          </div>
      </div>

    <div class="col-sm-4">
      <img src="../assets/img/ordenadorApagado.png" class="img-fluid mb-2" alt="Responsive image" id=imgPC5>
      <h2 class="text-white text-center">Final</h2>
      <p class="text-white text-center" id="pProgress5"></p>
        <div class="col-sm-12 text-center">
        <a class="btn-lg btn-danger mb-5" id='boton5' href="">BLOQUEADO</a>
        </div>
    </div>

    <div class="col-sm-2">
        <!--parche para centrar el container-->
    </div>
  </div>
</div>
    
<script type="text/javascript" src="../scripts/text.js"></script>    
    
<?php endblock() ?>
