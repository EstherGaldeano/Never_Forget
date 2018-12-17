<?php include "../templates/master.php" ?>

<?php startblock('head') ?>
        <link rel="stylesheet" href="../Styles/Tindex.css">
<?php endblock() ?>

<?php startblock('principal') ?>
<div class="container" style="margin-top:10%;">
        <button class="btn btn-primary" onclick="updateCookie(1)">Game 1</button>
        <button class="btn btn-primary" onclick="updateCookie(2)">Game 2</button>
        <button class="btn btn-primary" onclick="updateCookie(3)">Game 3</button>
        <button class="btn btn-primary" onclick="updateCookie(4)">Game 4</button>
        <button class="btn btn-primary" onclick="updateCookie(5)">Game 5</button>
</div>
<script>
    function updateCookie(game){
        document.cookie = "game = code"+game;
        location.reload();
        alert("Cookie added succesfully");
    }
   
</script>
    
<?php endblock() ?>