<?php
require("connect.php");

if (isset($_POST["search"]) && !empty($_POST["search"])) {

    header("Location: recherche.php?search=" . $_POST["search"]);
}
require("close.php");
?>





<header>
    <nav>
        <a class="logo" href="index.php">G@m3rZ Ipsum</a>
        <form method="post">
            <div class="search_bar">
                <svg width="30" height="30" fill="none" stroke="#2b2b2b" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 3a8 8 0 1 0 0 16 8 8 0 1 0 0-16z"></path>
                    <path d="m21 21-4.35-4.35"></path>
                </svg>
                <input type="text" class="search" name="search">
            </div>
        </form>
        <div class="liens">

            <?php

            if (!isset($_SESSION["user"])) {
                echo
                "<a href='login.php'>Login</a>";
            }
            if (isset($_SESSION["user"])) {
                echo
                "<a href='backoffice.php'>Backoffice</a>
                <a href='disconnect.php'>Déconnexion</a>";
            }
            ?>
        </div>
        <div class="burger">
            <svg width="40" height="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 12h18"></path>
                <path d="M3 6h18"></path>
                <path d="M3 18h18"></path>
            </svg>
        </div>
        <div class="context">
            <?php

            if (!isset($_SESSION["user"])) {
                echo
                "<a href='login.php'>Login</a>";
            }
            if (isset($_SESSION["user"])) {
                echo
                "<a href='backoffice.php'>Backoffice</a>
                <a href='disconnect.php'>Déconnexion</a>";
            }
            ?>
        </div>
    </nav>
</header>