<?php include "../templates/master.php" ?>

<?php startblock('head') ?>
        <link rel="stylesheet" href="../Styles/Tindex.css">
<?php endblock() ?>

<?php startblock('principal') ?>
<div class="container col-sm-5 float-left" style="top: 10%;">
    <div class="card">
    <div class="card-header">
        Set cookies
    </div>
    <div class="card-body">
            <button class="btn btn-dark" onclick="updateCookie(1)">Game 1</button>
            <button class="btn btn-dark" onclick="updateCookie(2)">Game 2</button>
            <button class="btn btn-dark" onclick="updateCookie(3)">Game 3</button>
            <button class="btn btn-dark" onclick="updateCookie(4)">Game 4</button>
            <button class="btn btn-dark" onclick="updateCookie(5)">Game 5</button>
    </div>
    </div>
</div>



<script>
    function updateCookie(game){
        document.cookie ="cookieEnigma="+game;
        location.reload();
        alert("Cookie added succesfully");
    }
   
</script>
    
<?php endblock() ?>