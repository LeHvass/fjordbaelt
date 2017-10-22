<?php

// sæt tidszone
date_default_timezone_set('Europe/Copenhagen');

// sæt regionsindstillinger
setlocale(LC_TIME, 'da_DK', 'Danish', 'Denmark', "da-DK");

// Definér sprogkonstant
define("LANG", isset($_GET["lang"]) ? $_GET["lang"] : "da");

// Læs og afkod JSON
$text = json_decode(file_get_contents("json/" . LANG . ".json"));

?>
<!DOCTYPE html>
<html lang="<?= LANG ?>">

<head>
    <meta charset="UTF-8">
    <title><?= $text->brandName ?></title>
    <meta name="description" content="<?= $text->metaDescription ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico'>

    <link href="https://fonts.googleapis.com/css?family=Lato:300|Paytone+One" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <?php
        
        require("inc/navigation.php");
      
        require("inc/content.php");
      
        require("inc/footer.php");
      
      ?>

    <div id="modal" class="hidden">
        <div id="close">&times;</div>
    </div>

    <div id="videoModal" class="hidden">
        <div id="videoClose">&times;</div>
        <iframe id="video" width="853" height="480" src="https://www.youtube.com/embed/rwS5sWYFk5I?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
    </div>

    <script type="text/javascript" src="js/gallery.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>

</html>
