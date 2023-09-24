<?php
session_start();
require("../backend/php/config/database.php");
require("../backend/php/register.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include("../source/utils/head.php"); ?>
  <title>Entegistrement</title>
  <link rel="stylesheet" href="../style.css" />
  <script type="module" src="../app.js" defer></script>
</head>

<body id="register">
  <section class="container">
    <?php if (isset($msg)) : ?>

      <div class="modal active">
        <div class="modal-content">
          <p class="err">
            <?= $msg ?>
          </p>
        </div>
      </div>
    <?php endif; ?>
    <div class="modal">
      <div class="modal-content">
        <p class="err">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam,
          non.
        </p>
      </div>
    </div>
    <form action"" method="post" name="inscription">
      <h1>Inscription</h1>
      <div class="group">
        <label for="pseudo">Pseudo :</label>
        <input type="text" name="pseudo" id="speudo" />
      </div>
      <div class="group">
        <label for="email">Votre address email :</label>
        <input type="email" name="email" id="email" />
      </div>
      <div class="group">
        <label for="mdp">Votre Mot de passe :</label>
        <div class="mdp">
          <input type="password" name="mdp" id="mdp" />
          <i>👁</i>
        </div>
      </div>
      <div class="group links">
        <a href="login.php">J'ai déja un compte, je me connecte</a>
      </div>
      <button class="btn btn-submit" type="submit" name="submit">
        S'inscrire
      </button>
    </form>
  </section>
</body>

</html>