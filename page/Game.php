<?php
    $list1='list2';
    $list2='list3';
    $list3='list1';
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
        <div class="pubGame">
            <div class="containImg">
                <img src="../Img/God Of War.jpg" alt="" srcset="">
                <img src="../Img/Asphalt 9 legends.jpg" alt="" srcset="">
                <img src="../Img/Wallpaper 4K Jump Force Ideas.jpg" alt="" srcset="">
            </div>
            <div class="cercle">
                <div class="round r1"></div>
                <div class="round"></div>
                <div class="round"></div>
            </div>
            

        </div>
        <!-- <div class="textGame">
            <p class="textg1">Jeux avec des promotions</p>
            <div class="deplacementVideo">
                <div class="back">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                </div>
                <div class="goTo">
                    <i class="fas fa-arrow-alt-circle-right"></i>
                </div>
            </div>
        </div> -->
        <div class="listGames">
            <div class="containGame">
                <div class="aff1">
                    <div class="photo1">
                        <img src="../Img/2d3c593a6d96d16e5da06b6615d08c88.jpg" alt="" srcset="">
                    </div>
                    <div class="aprp">
                        <div class="aprp1">
                            <div class="typeG">
                                <p>PS</p>
                            </div>
                        </div>
                        <div class="aprp2">
                            <div class="nameG">
                                <p>God Of War</p>
                            </div>
                        </div>
                        <div class="aprp3">
                            <div class="Achat">
                                <a href="../jeux/Tomb Raider.jpg" download="JeuxRaider.jpg"><i class="fas fa-download"></i></a>
                                <p>Télécharger</p>
                            
                            </div>
                            <a href="apropos.html" class="config"><i class="fas fa-info-circle"></i> Config</a>
                        </div>
                    </div>
                </div>
                <div class="aff1">
                    <div class="photo1">
                        <img src="../Img/jump force.jpg" alt="" srcset="">
                    </div>
                    <div class="aprp">
                        <div class="aprp1">
                            <div class="typeG">
                                <p>XBOX</p>
                            </div>
                        </div>
                        <div class="aprp2">
                            <div class="nameG">
                                <p>God Of War</p>
                            </div>
                        </div>
                        <div class="aprp3">
                            <div class="Achat">
                                <a href="../jeux/Tomb Raider.jpg" download="JeuxRaider.jpg"><i class="fas fa-download"></i></a>
                                <p>Télécharger</p>
                            
                            </div>
                            <a href="apropos.html" class="config"><i class="fas fa-info-circle"></i> Config</a>
                        </div>
                    </div>
                </div>
                <div class="aff1">
                    <div class="photo1">
                        <img src="../Img/spider.jpg" alt="" srcset="">
                    </div>
                    <div class="aprp">
                        <div class="aprp1">
                            <div class="typeG">
                                <p>PC</p>
                            </div>
                        </div>
                        <div class="aprp2">
                            <div class="nameG">
                                <p>God Of War</p>
                            </div>
                        </div>
                        <div class="aprp3">
                            <div class="Achat">
                                <a href="../jeux/Tomb Raider.jpg" download="JeuxRaider.jpg"><i class="fas fa-download"></i></a>
                                <p>Télécharger</p>
                            
                            </div>
                            <a href="apropos.html" class="config"><i class="fas fa-info-circle"></i> Config</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- <div class="textGame2">
            <p class="textg2">Jeux le plus populaire</p>
        </div> -->
        <div class="listGames2">
            <div class="aff1">
                <div class="photo1">
                    <img src="../Img/GTA.jpg" alt="" srcset="">
                </div>
                <div class="aprp">
                    <div class="aprp1">
                        <div class="typeG">
                            <p>PS</p>
                        </div>
                    </div>
                    <div class="aprp2">
                        <div class="nameG">
                            <p>GTA V</p>
                        </div>
                    </div>
                    <div class="aprp3">
                        <div class="Achat">
                            <a href="../jeux/Tomb Raider.jpg" download="JeuxRaider.jpg"><i class="fas fa-download"></i></a>
                            <p>Télécharger</p>
                        
                        </div>
                        <a href="apropos.html" class="config"><i class="fas fa-info-circle"></i> Config</a>
                    </div>
                </div>
            </div>
            <div class="aff1">
                <div class="photo1">
                    <img src="../Img/Farcry.jpg" alt="" srcset="">
                </div>
                <div class="aprp">
                    <div class="aprp1">
                        <div class="typeG">
                            <p>Nitendo</p>
                        </div>
                    </div>
                    <div class="aprp2">
                        <div class="nameG">
                            <p>Far Cry</p>
                        </div>
                    </div>
                    <div class="aprp3">
                        <div class="Achat">
                            <a href="../jeux/Tomb Raider.jpg" download="JeuxRaider.jpg"><i class="fas fa-download"></i></a>
                            <p>Télécharger</p>
                        
                        </div>
                        <a href="apropos.html" class="config"><i class="fas fa-info-circle"></i> Config</a>
                    </div>
                </div>
            </div>
            <div class="aff1">
                <div class="photo1">
                    <img src="../Img/Nveau Jeux.jpg" alt="" srcset="">
                </div>
                <div class="aprp">
                    <div class="aprp1">
                        <div class="typeG">
                            <p>PS</p>
                        </div>
                    </div>
                    <div class="aprp2">
                        <div class="nameG">
                            <p>God Of War</p>
                        </div>
                    </div>
                    <div class="aprp3">
                        <div class="Achat">
                            <a href="../jeux/Tomb Raider.jpg" download="JeuxRaider.jpg"><i class="fas fa-download"></i></a>
                            <p>Télécharger</p>
                        
                        </div>
                        <a href="apropos.html" class="config"><i class="fas fa-info-circle"></i> Config</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="textGame2">
            <p class="textg2">Jeux gratuit</p>
        </div> -->
        <div class="listGames2">
            <div class="aff1">
                <div class="photo1">
                    <img src="../Img/Tomb Raider.jpg" alt="" srcset="">
                </div>
                <div class="aprp">
                    <div class="aprp1">
                        <div class="typeG">
                            <p>PC</p>
                        </div>
                    </div>
                    <div class="aprp2">
                        <div class="nameG">
                            <p>Tomb Raider</p>
                        </div>
                    </div>
                    <div class="aprp3">
                        <div class="Achat">
                            <a href="../jeux/Tomb Raider.jpg" download="JeuxRaider.jpg"><i class="fas fa-download"></i></a>
                            <p>Télécharger</p>
                        
                        </div>
                        <a href="apropos.html" class="config"><i class="fas fa-info-circle"></i> Config</a>
                    </div>
                </div>
            </div>
            <div class="aff1">
                <div class="photo1">
                    <img src="../Img/Uncharted 4.jpg" alt="" srcset="">
                </div>
                <div class="aprp">
                    <div class="aprp1">
                        <div class="typeG">
                            <p>XBOX</p>
                        </div>
                    </div>
                    <div class="aprp2">
                        <div class="nameG">
                            <p>Uncharted 4</p>
                        </div>
                    </div>
                    <div class="aprp3">
                        <div class="Achat">
                            <a href="../jeux/Tomb Raider.jpg" download="JeuxRaider.jpg"><i class="fas fa-download"></i></a>
                            <p>Télécharger</p>
                        
                        </div>
                        <a href="apropos.html" class="config"><i class="fas fa-info-circle"></i> Config</a>
                    </div>
                </div>
            </div>
            <div class="aff1">
                <div class="photo1">
                    <img src="../Img/Witcher.jpg" alt="" srcset="">
                </div>
                <div class="aprp">
                    <div class="aprp1">
                        <div class="typeG">
                            <p>Nitendo</p>
                        </div>
                    </div>
                    <div class="aprp2">
                        <div class="nameG">
                            <p>Witcher</p>
                        </div>
                    </div>
                    <div class="aprp3">
                        <div class="Achat">
                            <a href="../jeux/Tomb Raider.jpg" download="JeuxRaider.jpg"><i class="fas fa-download"></i></a>
                            <p>Télécharger</p>
                        
                        </div>
                        <a href="apropos.html" class="config"><i class="fas fa-info-circle"></i> Config</a>
                    </div>
                </div>
            </div>
            <div class="aff1">
                <div class="photo1">
                    <img src="../Img/pes 2023 ps3.jpg" alt="" srcset="">
                </div>
                <div class="aprp">
                    <div class="aprp1">
                        <div class="typeG">
                            <p>PS</p>
                        </div>
                    </div>
                    <div class="aprp2">
                        <div class="nameG">
                            <p>God Of War</p>
                        </div>
                    </div>
                    <div class="aprp3">
                        <div class="Achat">
                            <a href="../jeux/Tomb Raider.jpg" download="JeuxRaider.jpg"><i class="fas fa-download"></i></a>
                            <p>Télécharger</p>
                        
                        </div>
                        <a href="apropos.html" class="config"><i class="fas fa-info-circle"></i> Config</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
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

        <!-- Carte de publication -->
            <!-- <div class="containPub">
                <div  class="boite2Pub">
                    <div class="texPub">
                       <div class="containSaryAnarana">
                            <div class="sary2"></div>
                            <div class="anarana2">
                                <p >Nom utilisateur</p>
                            </div>
                       </div>
                       <div class="close2">
                         <p class="antAnarana">X</p>
                       </div>
                    </div>
                    <div class="phot"></div>
                    <div class="reaction">
                        <div class="boiteReaction"></div>
                        <div class="nbrReaction"></div>
                    </div>
                </div>
            </div> -->

     </section>
     <!-- <nav class="containmenu3">
        <div class="menu3-contain">
            <ul>
                <li class="menu3 list">
                    <p class="text-icon1"><a href="#">Amis</a></p>
                    <div class="plus2">+</div>

                    
                </li>
                <li class="accordeonDisplay">
                    <p class="pasdamis">Vous n'avez aucune amis actuellement pour en <span class="Cred">ajouter</span> <br> cliker le bouton ci-dessous</p>
                    <button class="btnAjout">Ajouter</button>
                </li>
                

                <li class=" menu3 list" >
                    <p class="text-icon1"><a href="#">Invitation</a></p>
                    <div class="plus2">+</div>
                </li>

                <div class="accordeonDisplay">
                    <p class="pasdamis">Vous n'avez aucune Invitation actuellement pour en <span class="Cred">ajouter</span> <br> cliker le bouton ci-dessous</p>
                    <button class="btnAjout">Inviter</button>
                </div>

                <li class="menu3 list">
                    <p class="text-icon1"><a href="#">Preference</a></p>
                    <div class="plus2">+</div>
                </li>

                <div class="accordeonDisplay">
                    <p class="pasdamis">Vous n'avez pas encore <span class="Cred">ajouter</span><br> une préférence, cliker le bouton ci-dessous.</p>
                    <button class="btnAjout">Ajouter</button>
                </div>
            </ul>
            
        </div>
    </nav> -->
   </section>
    
</body>
</html>