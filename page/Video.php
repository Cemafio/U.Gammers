<?php
    session_start();
    include '../public/base.php';
    include '../public/function.php';
        
    $sary = profilUser(bdd());
    $listVideo = afficheVideo(bdd());
    $err = '';

    if(isset($_POST['sub'])){
        $err = creatVideo(bdd(), $sary);
    }

    $list1='list2';
    $list2='list1';
    $list3='list3';
    $list4='list5';
    $list5='list5';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome/fontawesome/css/all.min.css">
    <script src="../JS/App.js" defer></script>
    <script src="../JS/slideVideo.js" defer></script>
    <script src="../JS/form.js" defer></script>
    <link rel="stylesheet" href="../CSS/App.css">
    <title>U.Gammeur</title>
</head>
<body>
   <section class="containAll2">
    <?php include 'header.php';?>
    <nav class="containerAll">
        <div>
         <ul>
             <li class="contenue2">
                 <input type="text" name="recherche" id="recherche" placeholder="Recherche sur mon App">
                 <div class="class">
                    <button class="btnSerc">
                        <i class="fas fa-search"></i>
                    </button>
                 </div>
             </li>
         </ul>
        </div>
        <div class="mode">
            <i class="fas fa-moon"></i>
        </div>
        <div class="nameMode">
            <p>Nuit</p>
        </div>
         <div>
             <ul class="container1-3">
                 <li class="mess"><a href="message.html"><i class="fab fa-facebook-messenger"></i></a></li>
                 <li class="notif"><i class="fas fa-bell"><a href="#"></a></i></li>
                 <li class="option">
                     <img src="../Img/Cesar.jpg" alt="Option">
                 </li>
             </ul>
         </div>
     </nav>
     
 
    <section class="containePrincipale">
        <div class="containVideo">
            <div class="titreV">
                <p>Video suggerée</p>
                <div class="deplacementVideo">
                    <div class="back2">
                        <i class="fas fa-arrow-alt-circle-left"></i>
                    </div>
                    <div class="goTo2">
                        <i class="fas fa-arrow-alt-circle-right"></i>
                    </div>
                </div>
            </div>
            
            <div class="scrollVideo">
                <div class="video">
                    <div class="vVideo">
                        <img class="sousformVideo" src="../Img/Asphalt 9 legends.jpg" alt="" srcset="">
                        <a href="videoPlay.php"><div class="btnPlay"><i class="fas fa-play"></i></div></a>
                    </div>
                    <div class="textVideo">
                        <div class="profilPubVideo">
                        </div>
                        <div class="textVComment">
                            <p class="textC"><strong>Name User</strong><br>Le commentaire de la persone qui publie  cette video</p>
                        </div>
                    </div>
                </div>
                <div class="video">
                    <div class="vVideo">
                        <img class="sousformVideo" src="../Img/44+ Dark Souls 3 wallpapers ·① Download free full HD backgrounds for desktop computers and smartphones in any resolution desktop, Android, iPhone, iPad 1920x1080, 2560x1440, 320x480, 1920x1200 etc_ WallpaperTag.jpg" alt="" srcset="">
                        <a href="videoPlay.php"><div class="btnPlay"><i class="fas fa-play"></i></div></a>
                    </div>
                    <div class="textVideo">
                        <div class="profilPubVideo"></div>
                        <div class="textVComment">
                        <p class="textC"><strong>Name User</strong><br>Le commentaire de la persone qui publie  cette video</p>
                        </div>
                    </div>
                </div>
                <div class="video">
                    <div class="vVideo">
                        <img class="sousformVideo" src="../Img/Nveau Jeux.jpg" alt="" srcset="">
                        <a href="videoPlay.php"><div class="btnPlay"><i class="fas fa-play"></i></div></a>
                    </div>
                    <div class="textVideo">
                        <div class="profilPubVideo"></div>
                        <div class="textVComment">
                        <p class="textC"><strong>Name User</strong><br>Le commentaire de la persone qui publie  cette video</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="titreV">
                <p>Video publier récament</p>
                <div class="deplacementVideo">
                    <div class="back">
                        <i class="fas fa-arrow-alt-circle-left"></i>
                    </div>
                    <div class="goTo">
                        <i class="fas fa-arrow-alt-circle-right"></i>
                    </div>
                </div>
            </div>
            <?php
                foreach($listVideo as $video):
            ?>
                <div class="video">
                    <div class="vVideo">
                        <img class="sousformVideo" src="../Img/<?= $video['poster'];?>" alt="" srcset="">
                        <a href="videoPlay.php?di=<?= $video['id'];?>"><div class="btnPlay"><i class="fas fa-play"></i></div></a>
                    </div>
                    <div class="textVideo">
                        <div class="profilPubVideo" style="overflow:hidden;">
                            <img src="../Img/<?= $video['profilUser'];?>" alt="" srcset="" style="width:100%;height:100%;">
                        </div>
                        <div class="textVComment">
                            <p class="textC"><strong><?= $video['userPub'];?></strong><br><?= $video['text'];?></p>
                        </div>
                    </div>
                </div>
            <?php
                endforeach;
            ?>
        </div>
    </section>   <!--  -->
    <section class="contenuProfil">
            <div class="miniProfil">
                <div class="min_profilUser">
                    <img src="../Img/perso.jpg" alt="" style="width: 95%; height: 95%;border-radius: 3em;">
                </div>
                <div class="nameUser">
                    <p>Nom utilisateur</p>
                </div>
                <!-- <div class="containtextMinP">
                    <p class="textMinP">Votre compte actuèlle possède :</p>
                </div> -->
                <div class="containInformation">
                    <div class="div1">
                        <div class="followers">
                            <p class="pFollowers">Followers</p>
                        </div>
                        <div class="nbrFollowers">
                            <p class="pnbrFollowers">0</p>
                        </div>
                    </div>
                    <div class="div2">
                        <div class="ami(e)s">
                            <p class="pAmies">Ami(e)s</p>
                        </div>
                        <div class="nbrAmi(e)s">
                            <p class="pnbrAmie">0</p>
                        </div>
                    </div>
                    <div class="div3">
                        <div class="invitation">
                            <p class="pInvitation">Invitation</p>
                        </div>
                        <div class="nbrinvitation">
                            <p class="pnbrInvitation">0</p>
                        </div>
                    </div>
                    <div class="div4">
                        <div class="Active">
                            <p class="pActive">Active</p>
                        </div>
                        <div class="nbrActive">
                            <p class="pnbrActive">0</p>
                        </div>
                    </div>
                </div>
                <div class="btnProfil">
                    <button class="btnP">Voir profile</button>
                </div>
            </div>
            <div class="miniProfil2">
                <video class="source" preload="auto" autoplay muted playsinline>
                    <source src="../video/video1.mp4" ></source>
                    <source src="../video/video1.webm" class=""></source>
                    <source src="../video/video1.ogg" class=""></source>
                </video>
                <div class="bar">
                    <div class="progressBar"></div>
                </div>
            </div>
        

    </section>
   </section>
    <section class="pubVideo">
        <form action="" method="post">
            <button type="button" class='close'>x</button>
            <h4>VIDEO</h4>
            <div  class="poster">
                <img src="" alt="" srcset="" style="width:100%;height:100%;" class="img1">
                <label for="Ifile1" class='chose'><i class="fas fa-plus-circle"></i></label>
                <div class="play2">
                    <i class="fas fa-play"></i>
                </div>
            </div>
            <input type="file" name="file1" id="Ifile1">

            <label for="Ifile2" class="linkVideo">Ajout video <div class="verrif"><i class="fas fa-check"></i></div></label>
            <input type="file" name="file2" id="Ifile2">

            <textarea  name="text" id="Itext" cols="30" rows="10" placeholder="Votre legende "></textarea>
            <p class="err" style='color:red;font-size:11px;text-align:center;margin-bottom:5px;'><?= $err;?></p>
            <input type="submit" value="Publier" id="Isub" name="sub">
        </form>
    </section>
</body>
</html>