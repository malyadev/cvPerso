<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maladin Yannice</title>
    <link rel="stylesheet" href="CSS/style.css">
    <meta name="author" content="Yannice Maladin">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <div /*id="navbar"*/>
    <?php
    include "navbar.php";
    ?>
    </div>

    <div id="presentation">
        <?php
        include "presentation.php";
        ?>
    </div>

</header>

<main>
<div id="formation">
    <?php
    include "formation.php";
    ?>
</div>

<div id="experience">
    <?php
    include "experience.php";
    ?>
</div>

<div id="interets">
    <?php
    include "interets.php";
    ?>
</div>

<div id="contact">
    <?php
    include "contact.php";
    ?>
</div>
</main>

<footer id="footer">
    <?php
    include "footer.php";
    ?>
</footer>

</body>
</html>