<?php
if (isset($_POST["submit"])) {
    extract($_POST);
    $email = htmlspecialchars($email);
    $mdp = htmlspecialchars($mdp);
    if (!empty($email) and !empty($mdp)) {
        $req_user_exist = $db->prepare("SELECT * FROM users WHERE email = :email");
        $req_user_exist->bindParam(":email", $email);
        $req_user_exist->execute();

        if ($req_user_exist->rowCount() == 1) {
            $infos = $req_user_exist->fetch(PDO::FETCH_ASSOC);

            if (password_verify($mdp, $infos["mdp"])) {
                $_SESSION['auth'] = true;
                $_SESSION['pseudo'] = $infos["pseudo"];
                $_SESSION['email'] = $infos["email"];
                $_SESSION['profil'] = $infos["profil"];
                header("Location: ../index.php");
            } else {
                $msg = "Mot de passe incorrect";
            }
        } else {
            $msg = "Ce compte n'existe pas";
        }
    } else {
        $msg = 'Veuillez remplir tous les champs';
    }
}
