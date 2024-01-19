<?php
    session_start();
    include '../public/base.php';
    include '../public/function.php';
    
    $list1='list1';
    $list2='list2';
    $list3='list3';
    $list4='list5';
    $list5='list5';

    $dispar = false;


    $html1 = '';
    $html2 = '';
    // $inc =0; 
    $id = 0;
    $color = '';

    // bdd();
    $sary = profilUser(bdd());

    if(isset($_POST['pub'])){
        // echo 'Publier';
        pub(bdd(), $sary);
    }

    $pub = affPub(bdd());

    
    for($i =0; $i<count($pub); $i++){
        
        if(isset($_POST['like'.$i])){
            $id = $pub[$i]['id'];
            
            like(bdd(), $id);
            $color=  '#5bb0d8';         

        }
        if($pub[$i]['pubSary'] == '' || $pub[$i]['pubSary'] == null){

            $html1.="<div class='containPub'>
                <div  class='boite2Pub'>
                    <div class='texPub'>
                        <div class='containSaryAnarana'>
                            <div class='sary2'>
                            <img src='../img/". $pub[$i]['sary']."' alt='' style='width:100%;height:100%;border-radius: 30px'>
                            </div>
                            <div class='anarana2'>
                                <p class='nameUser3'>".$pub[$i]['userPub']."</p>
                                <p style='font-size:13px;color:#4b4b4b;'>".$pub[$i]['date']."</p>
                            </div>
                        </div>
                        <div class='enreg'>
                            <p>...</p>
                            <form action='' method='post' class='confirm'>
                                <input name='id' type='hidden' value='".$pub[$i]['id']."'/>
                                <input type='submit' id='Ienreg' value='Enregistrer' name='enreg'/>
                            </form>
                        </div>
                        <div class='close2'>
                            <p class='antAnarana'>x</p>
                        </div>
                    </div>
                    <div class='containImgOrTxt contain2'>
                        <p>".$pub[$i]['text']."</p>
                    </div>
                    <div class='reaction'>
                        <div class='boiteReaction'>
                            <form action='' method='post'>
                                <label for='like".$i."' class='iconLike iLike' style=''>
                                    <i class='fas fa-thumbs-up'></i>
                                </label>
                                <input type='submit' value='' style='display: none;' id='like".$i."' name='like".$i."'>
                                <input type='hidden' name='id' id='identifiant' value='". $pub[$i]['id']."'>
                            </form>
                            <div class='nbrLike'>".$pub[$i]['nbrLike']."</div>
                        </div>
                        <div class='coms'>
                                <a href='commentaires.php?di=".$pub[$i]['id']."' style='color: #fff;'>
                                    <id for='like' class='iconLike'>
                                        <i class='fas fa-comment-alt'></i>
                                    </id>
                                </a>
                            <div class='nbrComs'>".$pub[$i]['nbrComs']."</div>
                        </div>
                    </div>
                </div>
            </div>";

        }else{

            $html1 .= "<div class='containPub'>
                <div  class='boite2Pub'>
                    <div class='texPub'>
                    <div class='containSaryAnarana'>
                            <div class='sary2'>
                                <img src='../img/". $pub[$i]['sary']."' alt='' srcset='' style='width:100%;height:100%;border-radius: 30px'>
                            </div>
                            <div class='anarana2'>
                                <p class='nameUser3'>".$pub[$i]['userPub']."</p>
                                <p style='font-size:13px;color:#4b4b4b;'>".$pub[$i]['date']."</p>
                            </div>
                    </div>
                    <div class='enreg'>
                        <p>...</p>
                        <form action='' method='post' class='confirm'>
                            <input name='id' type='hidden' value='".$pub[$i]['id']."'/>
                            <input type='submit' id='Ienreg' value='Enregistrer' name='enreg'/>
                        </form>
                    </div>
                    <div class='close2'>
                        <p class='antAnarana'>x</p>
                    </div>
                    </div>
                    <div class='legende2'>
                        <p class='textLegende2'>
                        ".$pub[$i]['text']."
                        </p>
                    </div>
                    <div class='phot'>
                        <img src='../img/".$pub[$i]['pubSary']."' alt='' srcset='' style='width:100%;height:100%'>
                    </div>
                    <div class='reaction'>
                        <div class='boiteReaction'>
                            <form action='' method='post'>
                                <label for='like".$i."' class='iconLike iLike' style=''>
                                    <i class='fas fa-thumbs-up'></i>
                                </label>

                                <input type='submit' value='' style='display: none;' id='like".$i."' name='like".$i."'>

                                <input type='hidden' name='id' id='identifiant' value='".$pub[$i]['id']."'>
                            </form>
                            <div class='nbrLike'>".$pub[$i]['nbrLike']."</div>
                        </div>
                        <div class='coms'>
                                <a href='commentaires.php?di=".$pub[$i]['id']."' style='color: #fff;'>
                                    <id for='like' class='iconLike'>
                                        <i class='fas fa-comment-alt'></i>
                                    </id>
                                </a>
                            <div class='nbrComs'>".$pub[$i]['nbrComs']."</div>
                        </div>
                    </div>
                </div>
            </div>";
        }

        
        // $inc =$inc + 1;
        
    };
    
    if(isset($_POST['enreg'])){
        enregisterPub(bdd());
    }

    if(isset($_POST['rech'])){
        if(!empty($_POST['recherche'])){
            $result = rechAcceuil(bdd());

            for($i =0; $i<count($result); $i++){
        
                if(isset($_POST['like'.$i])){
                    $id = $result[$i]['id'];
                    
                    like(bdd(), $id);
                    $color=  '#5bb0d8';         
        
                }
                if($result[$i]['pubSary'] == '' || $result[$i]['pubSary'] == null){
        
                    $html2.="<div class='containPub'>
                        <div  class='boite2Pub'>
                            <div class='texPub'>
                                <div class='containSaryAnarana'>
                                    <div class='sary2'>
                                    <img src='../img/". $result[$i]['sary']."' alt='' style='width:100%;height:100%;border-radius: 30px'>
                                    </div>
                                    <div class='anarana2'>
                                        <p class='nameUser3'>".$result[$i]['userPub']."</p>
                                        <p style='font-size:13px;color:#4b4b4b;'>".$result[$i]['date']."</p>
                                    </div>
                                </div>
                                <div class='enreg'>
                                    <p>...</p>
                                    <form action='' method='post' class='confirm'>
                                        <input name='id' type='hidden' value='".$result[$i]['id']."'/>
                                        <input type='submit' id='Ienreg' value='Enregistrer' name='enreg'/>
                                    </form>
                                </div>
                                <div class='close2'>
                                    <p class='antAnarana'>x</p>
                                </div>
                            </div>
                            <div class='containImgOrTxt contain2'>
                                <p>".$result[$i]['text']."</p>
                            </div>
                            <div class='reaction'>
                                <div class='boiteReaction'>
                                    <form action='' method='post'>
                                        <label for='like".$i."' class='iconLike iLike' style=''>
                                            <i class='fas fa-thumbs-up'></i>
                                        </label>
                                        <input type='submit' value='' style='display: none;' id='like".$i."' name='like".$i."'>
                                        <input type='hidden' name='id' id='identifiant' value='". $result[$i]['id']."'>
                                    </form>
                                    <div class='nbrLike'>".$result[$i]['nbrLike']."</div>
                                </div>
                                <div class='coms'>
                                        <a href='commentaires.php?di=".$result[$i]['id']."' style='color: #fff;'>
                                            <id for='like' class='iconLike'>
                                                <i class='fas fa-comment-alt'></i>
                                            </id>
                                        </a>
                                    <div class='nbrComs'>".$result[$i]['nbrComs']."</div>
                                </div>
                            </div>
                        </div>
                    </div>";
        
                }else{
        
                    $html2 .= "<div class='containPub'>
                        <div  class='boite2Pub'>
                            <div class='texPub'>
                            <div class='containSaryAnarana'>
                                    <div class='sary2'>
                                        <img src='../img/". $result[$i]['sary']."' alt='' srcset='' style='width:100%;height:100%;border-radius: 30px'>
                                    </div>
                                    <div class='anarana2'>
                                        <p class='nameUser3'>".$result[$i]['userPub']."</p>
                                        <p style='font-size:13px;color:#4b4b4b;'>".$result[$i]['date']."</p>
                                    </div>
                            </div>
                            <div class='enreg'>
                                <p>...</p>
                                <form action='' method='post' class='confirm'>
                                    <input name='id' type='hidden' value='".$result[$i]['id']."'/>
                                    <input type='submit' id='Ienreg' value='Enregistrer' name='enreg'/>
                                </form>
                            </div>
                            <div class='close2'>
                                <p class='antAnarana'>x</p>
                            </div>
                            </div>
                            <div class='legende2'>
                                <p class='textLegende2'>
                                ".$result[$i]['text']."
                                </p>
                            </div>
                            <div class='phot'>
                                <img src='../img/".$result[$i]['pubSary']."' alt='' srcset='' style='width:100%;height:100%'>
                            </div>
                            <div class='reaction'>
                                <div class='boiteReaction'>
                                    <form action='' method='post'>
                                        <label for='like".$i."' class='iconLike iLike' style=''>
                                            <i class='fas fa-thumbs-up'></i>
                                        </label>
        
                                        <input type='submit' value='' style='display: none;' id='like".$i."' name='like".$i."'>
        
                                        <input type='hidden' name='id' id='identifiant' value='".$result[$i]['id']."'>
                                    </form>
                                    <div class='nbrLike'>".$result[$i]['nbrLike']."</div>
                                </div>
                                <div class='coms'>
                                        <a href='commentaires.php?di=".$result[$i]['id']."' style='color: #fff;'>
                                            <id for='like' class='iconLike'>
                                                <i class='fas fa-comment-alt'></i>
                                            </id>
                                        </a>
                                    <div class='nbrComs'>".$result[$i]['nbrComs']."</div>
                                </div>
                            </div>
                        </div>
                    </div>";
                }
        
                
                // $inc =$inc + 1;
                
            };
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome/fontawesome/css/all.min.css">
    <link rel="shortcut icon" href="../Img/Capture d’écran 2023-10-23 214447.png" type="image/x-icon">
    <script src="../JS/App.js" defer></script>
    <script src="../JS/slideVideo.js" defer></script>
    <script src="../JS/like.js" defer></script>²
    <script src="../JS/form1.js" defer></script>

    <link rel="stylesheet" href="../CSS/App.css">
    <title>U.Gammeur</title>
</head>
<body>
    <section class="formulaireP">

        <div class="containForm">
            <div class="containProfil2">
                <div class="profilUser">
                    <img src="../Img/<?= $sary;?>" alt="" style="width: 100%; height: 100%;border-radius: 3em;">
                </div>
                <div class="nameUser2">
                    <p><?= $_SESSION['nameUser'];?></p>
                </div>
            </div>
            
            <form action="" class="form1" method='POST'>
                <div class="Ilegend">
                    <!-- <p class="sousForme">À quoi pensez-vous ?</p> -->
                    <textarea name="tLegend" id="Ilegend" cols="33" rows="5" placeholder="À quoi pensez-vous ?" spellcheck="true"></textarea>
                </div>
                
                <div class="font">
                    <div class="cFont fusFont">
                        <div class="font0 back"></div>
                    </div>
                    <div class="cFontB fusFont">
                        <div class="font1 back"></div>
                    </div>
                    <div class="cFontB fusFont">
                        <div class="font2 back"></div>
                    </div>
                    <div class="cFontB fusFont">
                        <div class="font3 back"></div>
                    </div>
                    <div class="cFontB fusFont">
                        <div class="font4 back"></div>
                    </div>
                    <div class="cFontB fusFont">
                        <div class="font5 back"></div>
                    </div>
                    <div class="cFontB fusFont">
                        <div class="font6 back"></div>
                    </div>
                    <div class="cFontB fusFont">
                        <div class="font7 back"></div>
                    </div>
                    <div class="cFontB fusFont">
                        <div class="font8 back"></div>
                    </div>
                    <div class="cFontB fusFont">
                        <div class="font9 back"></div>
                    </div>
                    
                </div>
                <div class="takeImg">
                    <label for="IPhoto" class="takeFileLabel">
                        <i class="fas fa-image"></i>
                        <p class="textLabel">Photo / Video</p>
                    </label>
                    <input type="file" name="IPhoto" id="IPhoto">
                </div>
                <div class="containBtn2">
                    <input type="submit" class="btn2" name='result$result' value="PUBLIER"/>
                </div>
            </form>
            <div class="btnX">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        
    </section>
   <section class="containAll2">
    <?php include 'header.php';?>
    <nav class="containerAll">
        <!-- <div>
             <ul class="container1-2">
                 <li class="Logo">Ana<span>rana</span></li>
             </ul>
        </div> -->
        <div>
         <ul>
             <li class="contenue2">
                <form action="" method="post" style="display:flex;align-items:center;">
                 <input type="text" name="recherche" id="recherche" placeholder="Recherche sur mon App">
                 <div class="class">
                    <button class="btnSerc" type="submit" name="rech">
                        <i class="fas fa-search"></i>
                    </button>
                 </div></form>
             </li>
         </ul>
        </div>
        <!-- <div class="mode">
            <i class="fas fa-moon"></i>
        </div> -->
        <!-- <div class="nameMode">
            <p>Nuit</p>
        </div> -->
         <div>
             <ul class="container1-3">
                 <li class="mess"><a href="message.php?id=<?= $_SESSION['idUser'];?>&discu="><i class="fab fa-facebook-messenger"></i></a></li>
                 <li class="notif"><i class="fas fa-bell"><a href="#"></a></i></li>
                 <!-- <li class="option">
                     <img src="../Img/Cesar.jpg" alt="Option">
                 </li> -->
             </ul>
         </div>
     </nav>
    <section class="containePrincipale">
        <div class="cadrePub">
            <div class="firstPub">
                
                <div class="containProfil">
                    <div class="profilPropri">
                        <img src="../Img/Capture d’écran 2023-10-23 214447.png" alt="" srcset="">
                    </div>
                    <p class="textPersone">U.Gammers</p>
                </div>
                <div class="containImgOrTxt">
                    <!-- <img src="" alt="" srcset="">
                     -->
                     <p class="textPub">Bonjour et bienvenue sur <span class="theme">U.Gammers</span>,nous vous remercions d'avoir inscrit sur notre site, maintenant il vous reste qu'à faite votre premier publication pour mieux debuter.</p>

                     <button class="btn0">Faire une publication</button>
                </div>
                <div class="reaction2">
                    <div class="liker">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <div class="favori">
                        <i class="fas fa-plus"></i>
                    </div>
                </div>
            </div>
           <?php
            if(!isset($_POST['rech']) || empty($_POST['recherche'])){
           ?>

           <?= $html1;?> 
           
           <?php 
            }else{
           ?>

            <?= $html2;?>
             
           <?php
            }
           ?>
        </div>
      
    </section>
 
   <?php include 'miniProfil.php';?>
   </section>
    
</body>
</html>