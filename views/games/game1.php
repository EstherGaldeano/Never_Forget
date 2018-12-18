<?php include "../../templates/masterGames.php" ?>

<?php startblock('head') ?>  
    <title>Quiz Game</title>
    <!--STYLES-->
    <link rel="stylesheet" href="/Never_Forget/css/bootstrap.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../Styles/games/game1.css">

    <!--JQUERY-->
	<script type="text/javascript" src="../../jquery/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="../../jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../../jquery/jquery.ui.touch-punch.min.js"></script>
    
    <!--GAME-->
    <script type="text/javascript" src="../../scripts/games/game1/game1.js"></script>

    <!--BOOTSTRAP-->
    <script src="/Never_Forget/js/popper.min.js"></script>
    <script src="/Never_Forget/js/bootstrap.min.js"></script>
    
    
</head>

<body>
    <div class="start">
        <h2>Quiz of Spanish civil war</h2>
        <h1>You will have to answer all the questions of the quiz correctly in order to let you pass to the next game, good luck!</h1>
        <a href="#">Start Quiz</a>
    </div>
    
    <div class="container quiz">
        <h2>Question Title</h2>
        <ul>
            <li class="col-lg-6 col-sm-12">Choise</li>
            <li class="col-lg-6 col-sm-12">Choise</li>
            <li class="col-lg-6 col-sm-12">Choise</li>
            <li class="col-lg-6 col-sm-12">Choise</li>
        </ul>
        <a href="#" id="previous" class="sumbit-answer">Previous answer</a>
        <a href="#" id="next" class="sumbit-answer">Sumbit Answer</a>
    </div>

    <div class="time">
        <p class="text-white time" id="text">TIME</p>
        <div id="tiempo" class="text-white time"></div>
    </div>

    <div class="summary">
        <h2>You Loose</h2>
        <p id="looser">You scored x out of y correct</p>
        <a href="#">Restart Quiz</a>
        <p class="delete pt-5">It seems that it's difficult answer all correctly, do you want make it easier?</p>
        <a href="#" class="delete" id="btnDelete">Delete one question</a>
    </div>

    <div class="success">
        <h2>You Win!</h2>
        <p>You scored x out of y correct</p>
        <a href="../capituloFin.php">Continue</a>
    </div>

</body>
</html>
<?php endblock() ?>