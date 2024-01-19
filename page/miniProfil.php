<section class="contenuProfil">
        
            <div class="miniProfil">
                <div class="containRect">
                    <div class="rectangle rect3"></div>
                    <div class="rectangle"></div>
                    <div class="rectangle rect2"></div>
                </div>
                <div class="badgeVip">
                    <div class="textVip">VIP</div>
                </div>

                <div class="min_profilUser">
                    <img src="../Img/<?= $sary;?>" alt="" style="width: 95%; height: 95%;border-radius: 3em;">
                </div>
                <div class="nameUser">
                    <p><?= $_SESSION['nameUser'];?></p>
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
                <!-- <div class="btnProfil">
                    <button class="btnP">Theme</button>
                </div> -->
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