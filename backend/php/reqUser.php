<?php
$req_user_exist = $db->prepare("SELECT * FROM users WHERE email = :email");
$req_user_exist->bindParam(":email", $_SESSION['email']);
$req_user_exist->execute();

$info = $req_user_exist->fetch(PDO::FETCH_ASSOC);
