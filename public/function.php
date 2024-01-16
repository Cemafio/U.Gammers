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

    if(!empty($pseudo) && !empty($mdp)){
        $requet = $bdd->prepare('SELECT * FROM membres WHERE pseudo=?');
        $requet->execute(array($pseudo));
        $membres = $requet->fetch();
        
        if($pseudo == $membres['pseudo'] && $mdp == $membres['pass']){

            $_SESSION['nameUser'] = $pseudo;
            header("location: page/Acceuil.php");

        }else{
            return $err= "Ce compte n'existe  pas!!";
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
?>