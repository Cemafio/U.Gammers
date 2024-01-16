<?php
    session_start();
    include '../public/base.php';
    include  '../public/function.php';
    
    $listComs = affComsPub(bdd());
    $nbrComs = count($listComs);
    $pub = affPuId(bdd());
    // print_r($listComs['coms']);
    if(isset($_POST['EnvComs'])){
        if(!empty($_POST['coms'])){
            $sary = profilUser(bdd());
            ajoutComs(bdd(), $sary);
            update(bdd(), $nbrComs);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/coms.css">
    <link rel="stylesheet" href="../fontawesome/fontawesome/css/all.min.css">

    <title>U.GAMERS | Comentaires</title>
</head>
<body>
    <section class="containAll">
        <?php
            if($pub['pubSary'] != ''):
        ?>
        <div class="cadrePub">
            <div class="cadreHead">
                <div class="cadreProfil">
                    <div class="profil">
                        <img src="../img/<?=$pub['sary'];?>" alt="" srcset="">
                    </div>
                    <div class="containNameDate">
                        <p class='p1'><?=$pub['userPub'];?></p>
                        <p class='p2'><?=$pub['date'];?></p>
                    </div>
                </div>
            </div>
            <div class="containImg">
                <img src="../img/<?=$pub['pubSary'];?>" alt=""  srcset="">
            </div>
            <div class="cadreReaction">
                <div class="cadrelike">
                    <i class="fas fa-thumbs-up"></i>
                    <p class="nbrLike"><?=$pub['nbrLike'];?></p>
                </div>
                <div class="cadrecoms">
                    <i class="fas fa-comment-alt"></i>
                    <p class="nbrLike"><?=$nbrComs;?></p>
                </div>
            </div>
        </div>
        <?php
            endif;
            if($pub['pubSary'] == ''):
        ?>
        <div class="cadrePub">
            <div class="cadreHead">
                <div class="cadreProfil">
                    <div class="profil">
                        <img src="../img/<?=$pub['sary'];?>" alt="" srcset="">
                    </div>
                    <div class="containNameDate">
                        <p class='p1'><?=$pub['userPub'];?></p>
                        <p class='p2'><?=$pub['date'];?></p>
                    </div>
                </div>
            </div>
            <div class='containImgOrTxt contain2'>
                <p><?= $pub['text'];?></p>
            </div>
            <div class="cadreReaction">
                <div class="cadrelike">
                    <i class="fas fa-thumbs-up"></i>
                    <p class="nbrLike"><?=$pub['nbrLike'];?></p>
                </div>
                <div class="cadrecoms">
                    <i class="fas fa-comment-alt"></i>
                    <p class="nbrLike"><?=$nbrComs;?></p>
                </div>
            </div>
        </div>
        <?php
            endif;
        ?>
        <div class="notreComment">
            <form action="" method="post" id="formComs">
                <textarea name="coms" id="Iarea" cols="30" rows="10" placeholder='Votre commentaires'></textarea>
                <input type="submit" value="Envoyer" id="btnComs" name="EnvComs">
            </form>
        </div>
        <div class="listComs">
            <?php
                foreach($listComs as $coms):
            ?>
            <div class="affComs">
                <div class="profil2">
                    <img src="../img/<?= $coms['img'];?>" alt="" srcset="" style='width:100%;height:100%;border-radius:2em;'>
                </div>
                <div class="text"><strong><?= $coms['pers'];?></strong><br><?= $coms['coms'];?>.</div>
            </div>
            <?php
                endforeach;
            ?>
        </div>
    </section>
</body>
</html>