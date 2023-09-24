<?php
// Informations de connexion à la base de données
$host = "localhost"; // Adresse du serveur de base de données
$nom_bd = "digitalbookhub"; // Nom de la base de données
$utilisateur = "root"; // Nom d'utilisateur de la base de données
$mot_de_passe = ""; // Mot de passe de la base de données

try {
    // Crée une instance de la classe PDO pour établir la connexion
    $db = new PDO("mysql:host=$host;dbname=$nom_bd", $utilisateur, $mot_de_passe);

    // Définit le mode d'erreur PDO à Exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "ok";
} catch (PDOException $e) {
    // En cas d'erreur de connexion, affichez un message d'erreur
    echo "Erreur de connexion : " . $e->getMessage();
}
