<?php
require("./backend/php/config/database.php");
require("../../backend/php/reqUser.php");
?>
<header>
    <div class="navbar-brand">
        <a href="">
            <h3>Shopify</h3>
        </a>
    </div>
    <ul class="center">
        <ul class="search">
            <form>
                <input type="text" placeholder="Recherche" id="search-nav" />
                <i class="fa-solid fa-magnifying-glass"></i>
            </form>
        </ul>
    </ul>
    <ul class="user">
        <a href="">
            <li><img src="./assets/avatar/<? $info['profil'] ?>" alt="avatar" /></li>
        </a>
    </ul>
    <ul class="hamberger none">
        <li><i class="fa-solid fa-bars"></i></li>
    </ul>
</header>