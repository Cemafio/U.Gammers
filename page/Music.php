<?php
    include '../public/base.php';
    include '../public/function.php';

    $enregistrement = affEnregistrement(bdd());

    if(isset($_POST['del'])){
        del(bdd());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome/fontawesome/css/all.min.css">
    <script src="../JS/playList.js" defer></script>
    <link rel="stylesheet" href="../CSS/music.css">
    <title>U . Gammeur</title>
</head>
<body>
    <section class="containList">
        <div class="containBackNamePage">
            <div class="back2">
                <a href="#" class="careBack"></a>
            </div>
            <div class="namePage">
                <p class="namePageText">Play list</p>
            </div>
        </div>
    </section>
    <section class="menu">
        <!-- <ul class="navContain">
            <li class="nav-list"><a href="#" class="nav-link">Récent</a></li>
            <li class="nav-list"><a href="#" class="nav-link">Collection</a></li>
        </ul> -->
        <!-- <div>
            <hr class="line">
        </div> -->
        <div class="filtrage">
            <button class="btn-choix">Filtrer</button>
        </div>
        
        <div class="containDeroul">
            <ul class="deroul">
                <li class="nav-list2 cVideo"><a href="" class="nav-link2">Video</a></li>
                <li class="nav-list2 cPhoto"><a href="" class="nav-link2">Photo et text</a></li>
            </ul>
        </div>
    </section>
    <section class="playListC">
        <div class="titre">
            <p class="titre1">Ici se liste tout votre <br> enregistrement</p>
        </div>
        <div class="playList1">
            <?php
            foreach($enregistrement as $enreg):
            ?>
            <div class="cadreEnreg">
                <?php
                if($enreg['sary']!='Text'){
                ?>
                <div class="cadreImg">    
                    <img src="../Img/<?=$enreg['sary'];?>" alt="" srcset="" style="width:100%;height:100%;">
                </div>
                <?php
                }else{
                ?>
                <div class="cadreImg" style="background-color: #05050596;">
                    <p><?=$enreg['sary'];?></p>
                </div>
                <?php
                }
                ?>
                
                <div class="cadreApropos">
                    <p class="text"><?=$enreg['text'];?></p>
                    <p class="type"><?=$enreg['type'];?></p>
                    <div class="cadreBtn">
                    <?php
                    if($enreg['type']=='photo/text'){
                    ?>
                        <a href="commentaires.php?di=<?=$enreg['identifiant'];?>">
                        <button class="voir">Voir</button></a>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $enreg['id'];?>">
                            <button type="submit" class="btnSub" name="del"><i class="fas fa-info-circle"></i> suprimer</button>
                        </form>
                    <?php
                    }else{
                    ?>
                        <a href="videoPlay.php?di=<?=$enreg['identifiant'];?>">
                        <button class="voir">Voir</button></a>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $enreg['id'];?>">
                            <button type="submit" class="btnSub" name="del"><i class="fas fa-info-circle"></i> suprimer</button>
                        </form>
                    <?php
                    }
                    ?>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </section>
    
</body>
</html>