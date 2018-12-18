<?php include "../templates/master.php" ?>

    <?php startblock('head') ?>
     <title>Contexto histórico</title>
    <?php endblock() ?>

<?php startblock('principal') ?>
<link rel="stylesheet" href="../Styles/Tindex.css">
<div class="container">
   <div class="card mt-5 bg-transparent border-0">
        <div class="card-header mt-5 bg-transparent border-bottom-0">
            <h1 class="colorSecundario titulo ">January 1938 </h1>
            <button type="button" class="btn-lg btn-outline-danger float-right" onclick="location.href='index.php'">BACK</button>
        </div>

        <div class="row no-gutters">
            <div class="col-sm-6 mt-5">
                <div class="card-block px-2">
                    <p class="card-text text-white" id="text"> 
                    
                    Spain is in the midst of a civil war between Nationalists and Republicans. 
                    The Republican faction is formed by the Government, together with unions,
                    communists, anarchists, workers and peasants. 
                    The Nationalist faction is made up of the rebel military,
                    land owners and, in general, the upper class. <br>

                    The Soviet Union supports the Republican faction on the basis of a shared ideology and geostrategic factors. 
                    They provide weapons to the Republicans, although only sporadically and of a lesser quality 
                    than what the Nationalists have access to. 
                    Other democratic European countries also support the Republic, but from a neutral stance,
                    providing aid only though International Brigade volunteers.<br>

                    The Nationalist faction, led by General Francisco Franco, receives active support
                    from the fascists governments of Germany and Italy, which send weapons, ammunition,
                    soldiers and aerial forces, such as the German Condor Legion.<br>
                    The Nationalists have occupied practically all of the Iberian Peninsula. 
                    But Barcelona, the capital of Catalonia, resists...
                    
                </div>
            </div>
            
            <div class="col-sm-6">
                <img src="../assets/img/barcelona.jpg" class="img-fluid" id="imgContext"> 
            </div>

            
        </div>          
</div>



<?php endblock() ?>
