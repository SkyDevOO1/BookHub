<?php
session_start();
$_SESSION = [];
session_destroy();
header("Location: ../../utilisateur/login.php");
exit();
