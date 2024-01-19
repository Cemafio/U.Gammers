<?php
function inscription($bdd){
    $pseudo = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $vemail = htmlspecialchars($_POST["vemail"]);
    $pass = $_POST["pass"];
    $vpass = $_POST["vpass"];
    $profil = $_POST['fichier'];
    
    if(!empty($pseudo) && !empty($email) && !empty($vemail) && !empty($pass) && !empty($vpass)){
        $pseudLong = strlen($pseudo);

        if($pseudLong <= 20){

            $pseudoexist = $bdd->prepare("SELECT * FROM membres WHERE pseudo=?");

            $pseudoexist->execute(array($pseudo));
            $lineCount = $pseudoexist->rowCount();

            if($lineCount == 0){
                if($email == $vemail){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                        if($pass == $vpass){
                            if(isset($profil)){

                                $base = $bdd->prepare('INSERT INTO membres(pseudo, email, pass, profil) VALUES (:spseudo, :semail, :spass, :sprofil)');

                                $base->execute(array(
                                    'spseudo' => $pseudo,
                                    'semail' => $email,
                                    'spass' => sha1($pass),
                                    'sprofil' => $profil
                                ));

                                header("location: index.php");
                                // $image = basename($_FILES['fichier']['name']);
        
                                // move_uploaded_file($_FILES["fichier"]["tmp_name"], 'img/' . $image);

                            }else{
                                return $err="Vous n'avez pas de profil";
                            }
                        }else{
                            return $err = "Mots de pass pas identique";
                        }
                    }
                    else{
                        return $err= "Email incorrect";
                    }
                }else{
                    return $err= "email pas identique";
                }
            }else{
                return $err = "Se compte existe déjas";
            }
        }else{
            return $err = "Votre pseudo est trop long";
        }
    }else{
        return $err = "Veuilliez remplir tout les champs";
    }
}
// connection besoin d'un debug
function connection($bdd){
    // echo "Connectée";
    $pseudo = htmlspecialchars($_POST['nom']);
    $mdp = sha1($_POST['pass']);

    if(!empty($pseudo)){

        $requet = $bdd->prepare('SELECT * FROM membres WHERE pseudo=?');
        $requet->execute(array($pseudo));
        $existe = $requet->rowCount();
        if(empty($_POST['pass'])){
            return $err='champ mot de pass vide!';
        }
        if($existe != 0){
            $membres = $requet->fetch();
            
            if($mdp == $membres['pass']){

                $_SESSION['nameUser'] = $pseudo;
                $_SESSION['idUser'] = $membres['id'];
                header("location: page/Acceuil.php");

            }else{
                return $err= "Votre mot de pass est incorrect";
            }
        }else{
            return $err="Ce compte n'existe pas!";
        }

    }else{
        return $err="Rempli correctement le formulaire";
    }

}

function pub($bdd, $sary){
    $coms = htmlentities($_POST['tLegend']);
    $pubSary = htmlentities($_POST['IPhoto']);

    if(!empty($coms)){
        
        $requet = $bdd->prepare('INSERT INTO pub(text, userPub, sary,pubSary, nbrLike, nbrComs) VALUES (:t, :u, :s, :spub, :l, :c)');
        $requet->execute(array(
            't'=>nl2br($coms),
            'u'=>$_SESSION['nameUser'],
            's'=>$sary,
            'spub'=>$pubSary,
            'l'=>0,
            'c'=>0
        ));

    }
    

    // header('location: ../page/Acceuil.php');
}
function affPub($bdd){

    $requet = $bdd->query('SELECT * FROM pub ORDER BY id ASC');
    // $requet->execute(array());
    $listPub = $requet->fetchAll();

    return $listPub;
}
function affPuId($bdd){
    $id= (int)$_GET['di'];

    $requet = $bdd->prepare('SELECT * FROM pub WHERE id=?');
    $requet->execute(array($id));
    $listPub = $requet->fetch();

    return $listPub;
}
function profilUser($bdd){

    $pseudo = $_SESSION['nameUser'];

    $requet = $bdd->prepare('SELECT * FROM membres WHERE pseudo=?');
    $requet->execute(array($pseudo));

    $sary = $requet->fetch();

    return $sary['profil'];
}
function  like($bdd, $id){

    $base = $bdd ->prepare("UPDATE pub SET nbrLike =nbrLike+1 WHERE id= '$id'");

    $base ->execute();

    header('location: Acceuil.php'); 
}
function ajoutComs($bdd, $img){
    $coms = htmlentities($_POST['coms']);
    $id = (int)$_GET['di'];
    $user = $_SESSION['nameUser'];

    $requet = $bdd->prepare("INSERT INTO comspub(identifiant, pers, img, coms) VALUES (:id, :pe, :im, :c)");

    $requet->execute(array(
        'id'=>$id,
        'pe'=>$user,
        'im'=>$img,
        'c'=>$coms
    ));

    header("location:commentaires.php?di=".$id);

}
function affComsPub($bdd){
    $id = (int)$_GET['di'];

    $requet = $bdd->prepare("SELECT * FROM comsPub WHERE identifiant=?ORDER BY id ASC");
    $requet->execute(array($id));
    $tab = $requet->fetchAll();


    return $tab;
}
function update($bdd, $nbr){
    $id = (int)$_GET['di'];
    
    $requet = $bdd->prepare("UPDATE pub SET nbrComs=$nbr+1 WHERE id=?");
    $requet->execute(array($id));
}
function creatVideo($bdd, $sary){
    $poster= htmlentities($_POST['file1']);
    $video= htmlentities($_POST['file2']);
    $text= htmlentities($_POST['text']);
    $user = $_SESSION['nameUser'];


    if(!empty($poster) && !empty($video) && !empty($text)){

        $requet = $bdd->prepare("INSERT INTO videos(poster, userPub, profilUser, text, video) VALUES (:po, :u,:pr, :t, :v)");

        $requet->execute(array(
            'po'=>$poster,
            'u'=>$user,
            'pr'=>$sary,
            't'=>$text,
            'v'=>$video
        ));

        header('location:Video.php');

    }else{
        return 'Inciorrect';
     }
    
}
function afficheVideo($bdd){

    $requet = $bdd->query("SELECT * FROM videos ORDER BY id DESC");
    $tab= $requet->fetchAll();

    return $tab;
}
function voirVideo($bdd){
    $id = (int)$_GET['di'];

    $requet = $bdd->prepare("SELECT * FROM videos WHERE id=?");
    $requet ->execute(array($id));
 
    $tab= $requet->fetch();

    return $tab;
}
function creatComsVideo($bdd, $sary){
    $coms= htmlentities($_POST['coms']);
    $user = $_SESSION['nameUser'];
    $id = (int)$_GET['di'];

    if(!empty($coms)){

        $requet = $bdd->prepare("INSERT INTO comsvideos(identifiant, name, profil, coms) VALUES (:ide, :n, :pr,:coms)");

        $requet->execute(array(
            'ide'=>$id,
            'n'=>$user,
            'pr'=>$sary,
            'coms'=>$coms
        ));

        header('location:videoPlay.php?di='.$id);

    }else{
        return 'Inciorrect';
    }
    
}
function afficheComsVideo($bdd){
    $id= (int)$_GET['di'];

    $requet = $bdd->prepare("SELECT * FROM comsvideos WHERE identifiant=? ORDER BY id ASC");
    $requet->execute(array($id));
    $tab= $requet->fetchAll();

    return $tab;
}
function affGames($bdd){
    $requet = $bdd->query("SELECT * FROM games ORDER BY id DESC");

    $tab = $requet->fetchAll();

    return $tab;
}
function voirGame($bdd){
    $id = (int)$_GET['di'];

    $requet = $bdd->prepare("SELECT * FROM games WHERE id=?");
    $requet ->execute(array($id));
 
    $tab= $requet->fetch();

    return $tab;
}
function recupVideo($bdd, $rech){
    $name = $rech['name'];
    
    $requet = $bdd->prepare("SELECT * FROM videos WHERE poster LIKE :n OR text LIKE :n OR video LIKE :n");

    $requet->execute(array('n'=>'%'.$name.'%'));
    $tab=$requet->fetchAll();
    
    return $tab;
}
function comsGame($bdd, $sary){
    $coms= htmlentities($_POST['coms']);
    $user = $_SESSION['nameUser'];
    $id = (int)$_GET['di'];
    
    if(!empty($coms)){
    
        $requet = $bdd->prepare("INSERT INTO comsGames(identifiant, coms, pers, profil) VALUES (:ide, :coms, :pe,:pr)");
    
        $requet->execute(array(
            'ide'=>$id,
            'coms'=>nl2br($coms),
            'pe'=>$user,
            'pr'=>$sary
        ));
    
        header('location:apropos.php?di='.$id);
    
    }else{
        return 'Champ detext vide';
    }
}
function afficheComsGame($bdd){
    $id= (int)$_GET['di'];

    $requet = $bdd->prepare("SELECT * FROM comsGames WHERE identifiant=? ORDER BY id ASC");
    $requet->execute(array($id));
    $tab= $requet->fetchAll();

    return $tab;
}
function enregister($bdd, $listVideo){
    $nom =$_SESSION['nameUser'];
    $idVideo = $_POST['id'];

    $requet1= $bdd->prepare("SELECT * FROM videos WHERE id=?");
    $requet1->execute(array($idVideo));
    $tab= $requet1->fetch();

    $poster = $tab['poster'];
    $text = $tab['text'];
    $type = 'video';

    $requet2= $bdd->prepare("SELECT * FROM enregistrement WHERE text=?");
    $requet2->execute(array($text));
    $verrif = $requet2->rowCount();

    
    if($verrif == 0){
        $requet = $bdd->prepare("INSERT INTO enregistrement(user, type, sary, text, identifiant) VALUES (:u, :ty, :s, :te, :ide)");

        $requet->execute(array(
            'u'=>$nom,
            'ty'=>$type,
            's'=>$poster,
            'te'=>$text,
            'ide'=>$idVideo
        ));
    }
}
function enregisterPub($bdd){
    $nom =$_SESSION['nameUser'];
    $idPub = $_POST['id'];

    $requet1= $bdd->prepare("SELECT * FROM pub WHERE id=?");
    $requet1->execute(array($idPub));
    $tab= $requet1->fetch();

    if($tab['pubSary']!=''){
        $poster = $tab['pubSary'];
    }else{
        $poster = 'Text';
    }

    $text = $tab['text'];
    $type = 'photo/text';

    $requet2= $bdd->prepare("SELECT * FROM enregistrement WHERE text=?");
    $requet2->execute(array($text));
    $verrif = $requet2->rowCount();

    
    if($verrif == 0){
        $requet = $bdd->prepare("INSERT INTO enregistrement(user, type, sary, text, identifiant) VALUES (:u, :ty, :s, :te,:ide)");

        $requet->execute(array(
            'u'=>$nom,
            'ty'=>$type,
            's'=>$poster,
            'te'=>$text,
            'ide'=>$idPub
        ));
    }
}
function affEnregistrement($bdd){

    $requet = $bdd->query("SELECT * FROM enregistrement ORDER BY id DESC");

    $tab = $requet->fetchAll();

    return $tab;
}
function del($bdd){
    $id = (int)$_POST['id'];

    $requet= $bdd->prepare("DELETE FROM enregistrement WHERE id=?");
    $requet->execute(array($id));

    header('location:Music.php');
}
function rechAcceuil($bdd){
    $rech = htmlentities($_POST['recherche']);

    $requet=$bdd->prepare("SELECT * FROM pub WHERE id LIKE :rech OR text LIKE :rech OR userPub LIKE :rech OR pubSary LIKE :rech");

    $requet->execute(array(
        'rech'=>'%'.$rech.'%'
    ));

    $tab= $requet->fetchAll();

    return $tab;
}
function rechVideo($bdd){
    $rech = htmlentities($_POST['recherche']);

    $requet=$bdd->prepare("SELECT * FROM videos WHERE id LIKE :rech OR poster LIKE :rech OR userPub LIKE :rech OR text LIKE :rech");

    $requet->execute(array(
        'rech'=>'%'.$rech.'%'
    ));

    $tab= $requet->fetchAll();

    return $tab;
}
function rechGame($bdd){
    $rech = htmlentities($_POST['recherche']);

    $requet=$bdd->prepare("SELECT * FROM games WHERE id LIKE :rech OR console LIKE :rech OR type LIKE :rech OR name LIKE :rech OR img LIKE :rech OR histoire LIKE :rech OR config LIKE :rech");

    $requet->execute(array(
        'rech'=>'%'.$rech.'%'
    ));

    $tab= $requet->fetchAll();

    return $tab;
}
function membre($bdd){
    $requet= $bdd->query("SELECT * FROM membres ORDER BY id ASC");
    
    $tab= $requet->fetchAll();

    return $tab;
}
function commencerDiscu($bdd){
    $id = (int)$_GET['id'];

    unset($_SESSION['profilRec']);
    unset($_SESSION['pseudoRec']);
    unset($_SESSION['ide']);
    // session_destroy();

    
    $requet= $bdd->prepare("SELECT * FROM membres WHERE id=?");
    $requet->execute(array($id));
    
    $tab= $requet->fetch();

    $_SESSION['profilRec'] = $tab['profil'];
    $_SESSION['pseudoRec'] = $tab['pseudo'];
    $_SESSION['ide'] = $id;

    return $tab;
}
function envMess($bdd){
    $mess = htmlentities($_POST['mess']);
    $userSend = $_SESSION['nameUser'];
    $userRec= $_SESSION['pseudoRec'];

    $requet2 = $bdd->prepare("SELECT * FROM membres WHERE pseudo=?");
    $requet2->execute(array($userRec));

    $tab2= $requet2->fetch();

    $id = $tab2['id'];

    $requet= $bdd->prepare("INSERT INTO messages(identifiant, userSend, userRec, mess) VALUES (:ide, :us, :ur, :m)");

    $requet->execute(array(
        'ide'=>$id,
        'us'=>$userSend,
        'ur'=>$userRec,
        'm'=>$mess
    ));

    header('location:message.php?id='.$id.'&discu=');
}
function affMess($bdd){
    // Recoi le messages
    $userRec = $_SESSION['nameUser'];

    $requet2 = $bdd->prepare("SELECT * FROM membres WHERE pseudo=?");
    $requet2->execute(array($userRec));

    $tab2= $requet2->fetch();

    $ide = $tab2['id'];
    
    // Persone qui envoy notre mess
    $idRec = (int)$_GET['id'];

    $requet3= $bdd->prepare("SELECT * FROM  membres WHERE id=?");
    $requet3->execute(array($idRec));

    $tab3= $requet3->fetch();
    $userSend =  $tab3['pseudo'];

    // $requet = $bdd->prepare("SELECT * FROM messages WHERE identifiant=? AND userSend='$userSend'");

    $requet = $bdd->query("SELECT * FROM messages WHERE userSend='$userSend' AND userRec='$userRec' OR userSend='$userRec' AND userRec='$userSend'");

    // $requet->execute(array($userSend));     

    $tab= $requet->fetchAll();

    return $tab;
}
function affMessEnv($bdd){
    // Recoi le messages
    $userSend = $_SESSION['nameUser'];

    // $requet2 = $bdd->prepare("SELECT * FROM membres WHERE pseudo=?");
    // $requet2->execute(array($userRec));

    // $tab2= $requet2->fetch();

    // $ide = $tab2['id'];
    
    // Persone qui envoy mess mess
    $idRec = (int)$_GET['id'];

    $requet3= $bdd->prepare("SELECT * FROM  membres WHERE id=?");
    $requet3->execute(array($idRec));

    $tab3= $requet3->fetch();
    $userRec =  $tab3['pseudo'];



    $requet = $bdd->prepare("SELECT * FROM messages WHERE userSend=? AND userRec = '$userRec'");

    $requet->execute(array($userSend));     

    $tab= $requet->fetchAll();

    return $tab;
}
function recupId($bdd, $mess){
    
    // print_r($mess['mess']);
    $messages = $mess['mess'];

    $requet= $bdd->prepare("SELECT * FROM messages WHERE mess=?");
    $requet->execute(array($messages));

    $tab= $requet->fetchAll();


    $userSend = $tab[0]['userSend'];

    if($userSend== $_SESSION['nameUser']){
        return $ret = true;
    }
    return $ret = false;
}
?>