<?php
    session_start();
    include 'public/base.php';
    include 'public/function.php';
    $retour = "";

    if(isset($_POST["btnSub1"])){
        $retour = connection(bdd());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U.GAMER | Connection</title>
    <link rel="stylesheet" href="CSS/connection.css">
    <link rel="stylesheet" href="fontawesome/fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="Img/Capture d’écran 2023-10-23 214447.png">
    <script src="JS/cfacebook.js" defer></script>
</head>
<body>
    <div class="containAll">
        <div class="containFS">
            <div class="containSary">

                <ul class="navMenu">
                    <a href="index.php" class="navLink"><li class="navListe listSelct">Connection</li></a>
                    <a href="inscription.php" class="navLink"><li class="navListe">Inscription</li></a>
                </ul>

            </div>
            <div class="containForm">
                <div class="Logo">
                    <p class="textLogo">U.GAMERS</p>
                </div>
                <form action="" method="post" class="form3">
                    <div class="containInpt">
                        <div class="containIcon">
                            <i class="fas fa-user"></i>
                        </div>
                        <input type="text" name="nom" id="Inom" placeholder="Votre nom">
                    </div>
                    <div class="containInpt">
                        <div class="containIcon">
                            <i class="fas fa-unlock"></i>
                        </div>
                        <input type="password" name="pass" id="Inom" placeholder="Votre mot de pass">
                    </div>
                    <p class="textError"><?= $retour;?></p>
                    <div class="containBtn">
                        <button type="submit" name="btnSub1" class="btnSub1">Connécté</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>