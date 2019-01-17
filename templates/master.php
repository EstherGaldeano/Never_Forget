<?php if (session_status() == PHP_SESSION_NONE) {
        session_start();
        } ?>
<?php 
require_once $_SERVER["DOCUMENT_ROOT"] . "/Never_Forget/librerias/ti.php";
//require_once $_SERVER["DOCUMENT_ROOT"] . "/NeverForget/Never_Forget/librerias/ti.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/Never_Forget/assets/img/iconnf.ico" type="image/x-icon">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <!--<link rel="stylesheet" href="../styles/STemplate.css">-->
    <link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <?php startblock('head') ?>
    <?php endblock() ?>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!--Script que controla la inactividad del usuario logueado-->
    <?php if(isset($_SESSION['userLoged'])){ ?>
        <script src="../scripts/timeController.js"></script>
    <?php } ?>

</head>
<body>
    <nav class="navSize navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" id="title" href="index.php"  style='font-family:Special Elite, cursive'>NEVER FORGET</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav col-11">
                <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="contextoHistorico.php">Historic Context <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="../views/about_us.php">About us <span class="sr-only">(current)</span></a>
                
            </div>
            <div class="dropdown col-1 float-right">
                
                <a class="navbar-brand float-right"role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    <!--<img src="../assets/img/usuario.png" width="30" height="30" alt="">-->
                    <i class="far fa-user" style='font-size:16px;color:white'></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <?php if(isset($_SESSION['userLoged'])){ ?>
                        <form action="../views/mainController.php" method="post">
                            <?php if($_SESSION['userLoged']['role'] == 0){ ?>
                                <a class="dropdown-item" href="#"><?php echo $_SESSION['userLoged']['name']; ?></a>
                            <?php }else{ ?>
                                <a class="dropdown-item" href="admin.php"><?php echo $_SESSION['userLoged']['name']; ?> (Admin)</a>
                            <?php } ?>
                            <a><button class="dropdown-item" type="submit" name="logout">Logout</button></a>
                            <a class="dropdown-item" href="userProgress.php">My progress</a>
                        </form>
                        
                    <?php }else{ ?>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#LoginModal">Log in</a>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
    </nav>

    <?php startblock('principal') ?>
    <?php endblock() ?>

    <!--modal de cierre de sesion-->
    <div class="modal" tabindex="-1" role="dialog" id="modalAlertLogout" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-modal-header">
                    <h5 class="modal-title">Alert</h5>
                    <form action="../views/mainController.php" method="post">
                        <button type="submit" class="close" name="logout">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </form>
                </div>
                <div class="modal-body bg-modal-body">
                    <p>Your session has been closed.</p>
                </div>
            </div>
        </div>
    </div>

    
    
</body>
</html>
