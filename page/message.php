<?php
    session_start();
    include '../public/base.php';
    include '../public/function.php';

    $membres = membre(bdd());
    

    if(isset($_POST['send'])){
        if(!empty($_POST['mess'])){
            // echo 'envoyer';
            envMess(bdd());
        }
    }

    // $verrif = recupId(bdd());
    $listMess = [];

        if(isset($_GET['discu'])){
            // $nbr+=1;
            $messages  = affMess(bdd());

            foreach($messages as $mess){
                $verrif =recupId(bdd(), $mess);
                // var_dump ($verrif);
                if($verrif==true){
                    $listMess []="
                        <div class='listMessR'>
                            <div class='messR'>
                                <p class='messEnv'>".$mess['mess']."</p>
                            </div>
                        </div> 
                    "; 
                }else{
                    $listMess []="
                        <div class='listMess'>
                            <div class='mess'>
                                <p class='messEnv'>".$mess['mess']."</p>
                            </div>
                        </div> 
                    ";
                }
            }
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/message.css">
    <link rel="stylesheet" href="../fontawesome/fontawesome/css/all.min.css">
    <script src="../JS/chat.js" defer></script>
    <title>U.Gammeur</title>
</head>
<body>
    <header>
        <div class="containRT">
            <div class="retour">
                <a href="Acceuil.php"><div class="careBack"></div></a>
            </div>
            <div class="pagename">Message</div>
        </div>

        <div class="parametre">
            <i class="fas fa-tools"></i>
        </div>
    </header>
    <section class="sect1">
        <div class="containAmie">
            <div class="search">
                <!-- <input type="text" name="Itext" id="Itext" class="Itext" placeholder="Rechercher un amie"> -->
                <div class="Amis">
                    <p class="textAmis">Amis</p>
                </div>
                <div class="icon1">
                    <i class="fas fa-search"></i>
                </div>
            </div>
            <div class="navMenu">
                <ul class="containNav">
                    <!-- <li class="nav-list nav-list0">
                        <a href="#" class="nav-link nav-link0">Vos ami(e)s</a>
                    </li>
                    <li class="nav-list nav-list1">
                        <a href="#" class="nav-link">Invitation</a>
                    </li> -->
                    <li class="nav-list nav-list0">
                        <a href="#" class="nav-link">Suggestion</a>
                    </li>
                </ul>
            </div>
            <div class="containLine">
                <hr class="sous-line">
            </div>
            <div class="listeAmie">
                
                <?php
                    foreach($membres as $m):
                        if($m['pseudo'] != $_SESSION['nameUser']):
                ?>
                <div class="amie">
                    <div class="profil" style="overflow:hidden;">
                        <img src="../Img/<?= $m['profil'];?>" style="width:100%;height:100%;" alt="" srcset="">
                    </div>
                    <div class="name">
                        <div class="pseudo"><?= $m['pseudo'];?></div>
                        <div class="resumMess">Amies en commun</div>
                        <div class="btnAcc">
                            <form action="" method="get" >
                                <input type="hidden" name="id" value="<?= $m['id'];?>">
                                <button class="acc btnAS" type="submit" name="discu">Discuter</button>
                            </form>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $m['id'];?>">
                                <button class="sup btnAS" type="submit" nae="del">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <?php
                        endif;
                    endforeach;
                ?>
                

                <!-- Si vous n'avez pas encore d'amie -->
                <!-- <div class="indication">
                    <p class="textIndic">Actuellement vous avez pas encore des ami(e)s, pour en ajouter veullier clicker se boutons ci-dessous</p>
                    <div class="contaiBtnAjout">
                        <button class="btnAjout">En ajouter</button>
                    </div>
                </div> -->
            </div>
        </div>
        <?php
            if(isset($_GET['discu'])){
                $choixUser= commencerDiscu(bdd());
            }
        ?>
        <div class="containMess">
            <div class="headMess">
                
                <div class="pro-pseu">
                    <div class="profil profil2" style="">
                        <img src="../Img/<?= $_SESSION['profilRec'];?>" style="width:100%;height:100%;border-radius: 30px;" alt="" srcset="">
                        <div class="indice"></div>
                    </div>
                    <div class="pseudo"><?= $_SESSION['pseudoRec'];?><br><span class="time"></span></div>
                </div>

                <div class="optionDiscu">
                    <div class="point"></div>
                    <div class="point"></div>
                    <div class="point"></div>
                </div>
            </div>

            <div class="boitMess">
                
                <div class="containPAmis">
                    <div class="profilAmis">
                        <img src="../Img/<?= $_SESSION['profilRec'];?>" style="width:100%;height:100%;border-radius: 40px;" alt="" srcset="">
                    </div>
                    <div class="userName">
                        <p><?= $_SESSION['pseudoRec'];?></p>
                    </div>
                    <div class="info">
                        <p class="travaille">Membre dans U.GAMERS</p>
                        <p class="habitation">Madagascar</p>
                        <p class="amitié">Amie(e)</p>
                    </div>
                    <!-- <div class="containBtnP">
                        <button class="btnP">Voir profil</button>
                    </div> -->
                </div>
                <?php
                    for($i=0; $i<count($listMess); $i++){
                        echo $listMess[$i];
                    }
                ?>
               
            </div>

            <div class="envMess">
                <div class="outilUser">
                    <div class="insPhoto">
                        <i class="fas fa-camera"></i>
                    </div>
                    <div class="insPhoto">
                        <i class="fas fa-image"></i>
                    </div>
                    <div class="insPhoto">
                        <i class="fas fa-microphone"></i>
                    </div>
                </div>
                <form action="" method="post" id="formMess">
                    <div class="inptChat">
                        <input type="text" name="mess" id="Ichat" placeholder="Message"/>
                    </div>
                    <button class="jaime" type="submit" name="send">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>

        </div>
    </section>
</body>
</html>