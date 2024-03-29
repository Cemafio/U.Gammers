<?php
    session_start();
    include '../public/base.php';
    include '../public/function.php';

    $video = voirVideo(bdd());
    $sary = profilUser(bdd());
    $comsVideo = afficheComsVideo(bdd());

    if(isset($_POST['envComs'])){
        $err = creatComsVideo(bdd(), $sary);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../CSS/vPlay.css">
    <title>Lecture Video</title>
</head>
<body>
    <header>
        <div class="back">
            <a href="Video.php"><i class="fas fa-arrow-left"></i></a>
        </div>
        <p class="logo">U.GAMERS</p>
    </header>
    <section class="containPrincipale">
        <div class="cadre1">
            <div class="video">
                <video controls="controls" preload="auto" poster="../Img/<?= $video['poster'];?>">
                    <source src="../video/<?= $video['video'];?>"></source>
                    <source src="../video/video1.webm"></source>
                    <source src="../video/video1.ogg"></source>
                </video>
                <div class="apropos">
                    <p><?= $video['text'];?></p>
                </div>
                <p class="comsTitre">Les commentaires</p>

                <div class="commentaires">
                    <?php
                    foreach($comsVideo as $coms):
                    ?>
                    <div class="commentaire">
                        <div class="coms1">
                            <div class="profil">
                                <img src="../Img/<?=$coms['profil'];?>" alt="" srcset="">
                            </div>
                            <p> <strong style="color: #5bb0d8;"><?=$coms['name'];?></strong><br> <?=$coms['coms'];?></p>
                            <div class="pointeur"></div>
                        </div>
                    </div>
                    <?php
                    endforeach;
                    ?>
                    <form action="" method="post">
                        <textarea name="coms" id="Icoms" cols="50" rows="3" placeholder="Votre commentaires ici"></textarea>
                        <input type="submit" value="Evoyer" id="Isub" name="envComs">
                    </form>
                </div>
            </div>
            
        </div>
        <div class="cadre2">
            <div class="minVideo">
                <div class="vid">
                    <img src="../Img/God Of War.jpg" alt="" srcset="">
                </div>
                <div class="apr">
                    <p class="titra">GOD OF WAR(le plus fort de tous)</p>
                    <p class="user">u.gamers.Cesarm</p>
                    <p class="heures">Il y a 1h</p>
                </div>
            </div>
            <div class="minVideo">
                <div class="vid">
                    <img src="../Img/God Of War.jpg" alt="" srcset="">
                </div>
                <div class="apr">
                    <p class="titra">GOD OF WAR(le plus fort de tous)</p>
                    <p class="user">u.gamers.Cesarm</p>
                    <p class="heures">Il y a 1h</p>
                </div>
            </div>
            <div class="minVideo">
                <div class="vid">
                    <img src="../Img/pes 2023 ps3.jpg" alt="" srcset="">
                </div>
                <div class="apr">
                    <p class="titra">PES(methode pour gagne tout le temps)</p>
                    <p class="user">u.gamers.Cesarm</p>
                    <p class="heures">Il y a 1h</p>
                </div>
            </div>
            <div class="minVideo">
                <div class="vid">
                    <img src="../Img/44+ Dark Souls 3 wallpapers ·① Download free full HD backgrounds for desktop computers and smartphones in any resolution desktop, Android, iPhone, iPad 1920x1080, 2560x1440, 320x480, 1920x1200 etc_ WallpaperTag.jpg" alt="" srcset="">
                </div>
                <div class="apr">
                    <p class="titra">DARCK SOULE (guide)</p>
                    <p class="user">u.gamers.Marc</p>
                    <p class="heures">Il y a 1h</p>
                </div>
            </div>
            <div class="minVideo">
                <div class="vid">
                    <img src="../Img/Asphalt 9 legends.jpg" alt="" srcset="">
                </div>
                <div class="apr">
                    <p class="titra">Technique de derapage ;)</p>
                    <p class="user">u.gamers.Danie</p>
                    <p class="heures">Il y a 1h</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>