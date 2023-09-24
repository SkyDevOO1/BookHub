<?php
if (isset($_POST['submit'])) {
    //extraction des variables contenants les données
    extract($_POST);
    //initialisation du tableaux d'erreur
    //securisation des variables
    $pseudo = htmlspecialchars($pseudo);
    $email = htmlspecialchars($email);
    $mdp = htmlspecialchars(password_hash($mdp, PASSWORD_DEFAULT));
    $defaut = "defaut.jpg";
    //verification des champs
    if (!empty($pseudo) and !empty($email) and !empty($mdp)) {
        $req_user_exist = $db->prepare("SELECT * FROM users WHERE email = :email");
        $req_user_exist->bindParam(":email", $email);
        $req_user_exist->execute();

        if ($req_user_exist->rowCount() == 0) {
            $req = $db->prepare("INSERT INTO users (pseudo, email, mdp, profil) VALUES (:pseudo, :email, :mdp, :defaut)");
            $req->bindParam(":pseudo", $pseudo);
            $req->bindParam(":email", $email);
            $req->bindParam(":mdp", $mdp);
            $req->bindParam(":defaut", $defaut);
            $req->execute();

            //declaration des variables de session
            $_SESSION['auth'] = true;
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['email'] = $email;
            $_SESSION['profil'] = $defaut;
            header("Location: ../index.php");
        } else {
            $msg = "Ce compte existe déjà";
        }
    } else {
        $msg = "Veillez remplire tous les champs...";
    }
}
