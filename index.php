<?php
session_start();
require("./backend/php/security.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <?php include("./source/utils/head.php"); ?>
  <title>Shopify</title>
  <link rel="stylesheet" href="style.css" />
  <script type="module" src="app.js" defer></script>
</head>

<body>
  <!-- START NAVBAR -->
  <?php include("./source/utils/navbar.php"); ?>
  <!-- END NAVBAR -->
  <!-- START BODY -->
  <section class="produits">
    <div class="search-product hidden">
      <form>
        <input type="text" placeholder="Recherche" id="search-product" />
        <i class="fa-solid fa-search"></i>
      </form>
    </div>
    <div class="filter">
      <li><i class="fa-solid fa-filter"></i></li>
    </div>
    <div class="cards">
      <div class="card">
        <div class="card-img">
          <img src="./assets/avatar.jpg" alt="" />
        </div>
        <div class="card-footer">
          <span class="categorie">Scolaire</span>
          <h4 class="title">l'enfant Noir</h4>
        </div>
        <a href=""><i class="fa-solid fa-download"></i></a>
      </div>
      <div class="card">
        <div class="card-img">
          <img src="./assets/avatar.jpg" alt="" />
        </div>
        <div class="card-footer">
          <span class="categorie">Scolaire</span>
          <h4 class="title">l'enfant Noir</h4>
        </div>
        <a href=""><i class="fa-solid fa-download"></i></a>
      </div>
      <div class="card">
        <div class="card-img">
          <img src="./assets/avatar.jpg" alt="" />
        </div>
        <div class="card-footer">
          <span class="categorie">Scolaire</span>
          <h4 class="title">l'enfant Noir</h4>
        </div>
        <a href=""><i class="fa-solid fa-download"></i></a>
      </div>
      <div class="card">
        <div class="card-img">
          <img src="./assets/avatar.jpg" alt="" />
        </div>
        <div class="card-footer">
          <span class="categorie">Scolaire</span>
          <h4 class="title">l'enfant Noir</h4>
        </div>
        <a href=""><i class="fa-solid fa-download"></i></a>
      </div>
      <div class="card">
        <div class="card-img">
          <img src="./assets/avatar.jpg" alt="" />
        </div>
        <div class="card-footer">
          <span class="categorie">Scolaire</span>
          <h4 class="title">l'enfant Noir</h4>
        </div>
        <a href=""><i class="fa-solid fa-download"></i></a>
      </div>
    </div>
  </section>
  <!-- END BODY -->
</body>

</html>