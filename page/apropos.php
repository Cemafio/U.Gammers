<?php
    session_start();
    include '../public/base.php';
    include '../public/function.php';

    $game = voirGame(bdd());
    $video = recupVideo(bdd(), $game);
    $sary = profilUser(bdd());
    $coms = afficheComsGame(bdd());

    if(isset($_POST['env'])){
        if(!empty($_POST['coms'])){
            $err= comsGame(bdd(), $sary);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/apropos.css">
    <link rel="stylesheet" href="../fontawesome/fontawesome/css/all.min.css">
    <title>Aprpos</title>
</head>
<body>
    <header>
        <header>
            
            <div class="containBack">
                <a href="Game.php"><i class="fas fa-arrow-left"></i></a>
            </div>
            
        </header>
        
    </header>
    <section class="containApropos">
        <div class="cadreAprops">
            <div class="cadrePhoto">
                <img src="../Img/<?= $game['img'];?>" alt="" srcset="">
            </div>
            <div class="cadretexte">
                <p>Scenario</p>
                <?= $game['histoire'];?>
            </div>
            <div class="cadreConfig">
                <p>Configuration</p>
                <?= $game['config'];?>
            </div>
            <p class="comsTitre">Video et code (Aide)</p>
            <div class="videAide">
                <?php
                    foreach($video as $v):
                ?>
                <div class="vid">
                    <div class="play">
                        <a href="videoPlay.php?di=<?= $v['id'];?>">
                        <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <img src="../Img/<?= $v['poster'];?>" alt="" srcset="">
                    <p class="textCode">O X X Y R2 </p>
                    
                </div>
                <?php
                    endforeach;
                ?>
            </div>

            <p class="comsTitre">Les commentaires</p>

            <div class="commentaire">
                <?php
                    foreach($coms as $c):
                ?>
                <div class="coms1">
                    <div class="profil">
                        <img src="../Img/<?= $c['profil'];?>" alt="" srcset="">
                    </div>
                    <p> <strong style="color: #5bb0d8;"><?= $c['pers'];?></strong><br> <?= $c['coms'];?></p>
                    <div class="pointeur"></div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
            <form action="" method="post">
                <textarea name="coms" id="Icoms" cols="50" rows="3" placeholder="Votre commentaires ici"></textarea>
                <input type="submit" value="Evoyer" id="Isub" name="env">
            </form>
        </div>
    </section>
</body>
</html>