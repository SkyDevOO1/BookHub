<?php
if (!isset($_SESSION["auth"])) {
    header("Location: utilisateur/login.php");
}
