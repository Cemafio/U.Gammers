<?php
    session_start();
    include 'public/base.php';
    include 'public/function.php';

    $err= '';
    // bdd();
    if(isset($_POST["btnSub1"])){
        $err = inscription(bdd());
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U.GAMER | Inscription</title>
    <link rel="stylesheet" href="CSS/connection.css">
    <link rel="stylesheet" href="fontawesome/fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="Img/Capture d’écran 2023-10-23 214447.png" type="image/x-icon">
    <script src="JS/cfacebook.js" defer></script>
</head>
<body>
    <div class="containAll">
        <div class="containFS">
            <div class="containSary">

                <ul class="navMenu">
                    <a href="index.php" class="navLink"><li class="navListe ">Connection</li></a>
                    <a href="inscription.php" class="navLink"><li class="navListe listSelct">Inscription</li></a>
                </ul>

            </div>
            <div class="containForm">
                <div class="Logo modif1">
                    <p class="textLogo">U.GAMERS</p>
                </div>
                <form action="" method="post" class="form3 fmodif1">
                    <div class="containInpt">
                        <div class="containIcon">
                            <i class="fas fa-user"></i>
                        </div>
                        <input type="text" name="nom" id="Inom" placeholder="Votre nom" value="<?php if(isset($_POST['nom'])){ echo $_POST['nom']; }?>">
                    </div>
                    <div class="containInpt">
                        <div class="containIcon">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <input type="email" name="email" id="Inom" placeholder="Votre adress email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }?>">
                    </div>
                    <div class="containInpt">
                        <div class="containIcon">
                            <i class="fas fa-address-book"></i>
                        </div>
                        <input type="email" name="vemail" id="Inom" placeholder="Verrification adress email" value="<?php if(isset($_POST['vemail'])){ echo $_POST['vemail']; }?>">
                    </div>
                    <div class="containInpt">
                        <div class="containIcon">
                            <i class="fas fa-unlock"></i>
                        </div>
                        <input type="password" name="pass" id="Inom" placeholder="Votre mot de pass" value="<?php if(isset($_POST['pass'])){ echo $_POST['pass']; }?>">
                    </div>
                    <div class="containInpt">
                        <div class="containIcon">
                            <i class="fas fa-unlock"></i>
                        </div>
                        <input type="password" name="vpass" id="Inom" placeholder="Verrification mot de pass" value="<?php if(isset($_POST['vpass'])){ echo $_POST['vpass']; }?>">
                    </div>
                    <label for="Isary" id="ISousForme"><i class="fas fa-user-circle"></i> Votre profil </label>
                    <input type="file" name="fichier" id="Isary">
                    
                    <p class="textError"><?= $err;?></p>
                    <div class="containBtn">
                        <button type="submit" name="btnSub1" class="btnSub1">Inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>