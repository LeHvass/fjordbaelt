<?php
    function activeLang($lang) {
        if(isset($_GET["lang"]) && ($_GET["lang"] == $lang) ) {
            return "class='active'";
        } else if (!isset($_GET["lang"]) && $lang == "da") {
            return "class='active'";
        }
    }
?>
<header id="header" class="big">
    <div class="wrapper">
        <div id="logo">
            <a href="#"><img src="img/logo.svg" alt="<?= $text->logoText ?>"></a>
        </div>
        <nav>
            <ul>
                <li><a id="animalsLink" href="#animals"><?= $text->animals ?></a></li>
                <li><a id="aboutLink" href="#about"><?= $text->about ?></a></li>
                <li><a id="contactLink" href="#contact"><?= $text->contact ?></a></li>
            </ul>
            <div class="languages">
                <a href="?lang=da"><img <?= activeLang("da"); ?> src="img/da.svg" alt="Skift sprog til dansk" title="Skift sprog til dansk"></a>
                <a href="?lang=en"><img <?= activeLang("en"); ?> src="img/en.svg" alt="Change language to English" title="Change language to English"></a>
                <a href="?lang=de"><img <?= activeLang("de"); ?> src="img/de.svg" alt="Sprache auf Deutsch umstellen" title="Sprache auf Deutsch umstellen"></a>
            </div>
        </nav>
    </div>
</header>