<?php
    session_start();
    include '../public/base.php';
    include '../public/function.php';

    $list1='list2';
    $list2='list3';
    $list3='list1';
    $list4='list5';
    $list5='list5';

    $dispar = true;

    $sary = profilUser(bdd());
    $slidePhoto = affGames(bdd());

    if(!isset($_POST['rech2']) || empty($_POST['recherche'])){
        $listeGames = affGames(bdd());
    }else{
        $listeGames = rechGame(bdd());
    }

    ;
    $count= count($slidePhoto);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome/fontawesome/css/all.min.css">
    <script src="../JS/gamme.js" defer></script>
    <script src="../JS/slideVideo.js" defer></script>
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
                <form action="" method="post" style="display:flex;align-items:center;">
                    <input type="text" name="recherche" id="recherche" placeholder="Recherche sur mon App">
                    <div class="class">
                        <button class="btnSerc" type="submit" name="rech2">
                            <i class="fas fa-search"></i>
                        </button>
                     </div>
                </form>
             </li>
         </ul>
        </div>
        <!-- <div class="mode">
            <i class="fas fa-moon"></i>
        </div>
        <div class="nameMode">
            <p>Nuit</p>
        </div> -->
         <div>
             <ul class="container1-3">
                 <li class="mess"><a href="message.php"><i class="fab fa-facebook-messenger"></i></a></li>
                 <li class="notif"><i class="fas fa-bell"><a href="#"></a></i></li>
                 <!-- <li class="option">
                     <img src="../Img/Cesar.jpg" alt="Option">
                 </li> -->
             </ul>
         </div>
     </nav>
     
    <section class="containePrincipale">
        <div class="pubGame">
            <div class="containImg">
                <img src="../Img/<?=$slidePhoto[$count-1]['img'];?>" alt="" srcset="">
                <img src="../Img/<?=$slidePhoto[$count-2]['img'];?>" alt="" srcset="">
                <img src="../Img/<?=$slidePhoto[$count-3]['img'];?>" alt="" srcset="">
            </div>
            <div class="cercle">
                <div class="round r1"></div>
                <div class="round"></div>
                <div class="round"></div>
            </div>
            

        </div>
        
        <div class="listGames2">
            <?php
                    foreach($listeGames as $game):
                ?>
                <div class="aff1">
                    <div class="photo1">
                        <img src="../Img/<?= $game['img'];?>" alt="" srcset="">
                    </div>
                    <div class="aprp">
                        <div class="aprp1">
                            <div class="typeG">
                                <p><?= $game['type'];?></p>
                            </div>
                            <div class="typeG">
                                <p><?= $game['console'];?></p>
                            </div>
                        </div>
                        <div class="aprp2">
                            <div class="nameG">
                                <p><?= $game['name'];?></p>
                            </div>
                        </div>
                        <div class="aprp3">
                            <div class="Achat">
                                <a href="../jeux/<?=$game['name'];?>" download="U.G_<?=$game['name'];?>.zip"><i class="fas fa-download"></i></a>
                                <p>Télécharger</p>
                            
                            </div>
                            <a href="apropos.php?di=<?=$game['id'];?>" class="config"><i class="fas fa-info-circle"></i> Config</a>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
        </div>
      
    </section>
      
    <?php include 'miniProfil.php';?>
     </section>
   </section>
    
</body>
</html>