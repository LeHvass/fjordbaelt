<main>
    <section id="top">
        <div class="wrapper">
            <div class="hero">
                <div class="quote">
                    <span><?= $text->quote ?></span>
                    <p><?= $text->quoteAuthor ?></p>
                </div>
                <button onclick="showVideo()"><?= $text->callToAction ?></button>
            </div>
               <div class="social">
                <a href="https://www.facebook.com/fjordogbaelt/" target="_blank"><img src="img/facebook.svg" alt="<?= $text->altFacebook ?>"></a>
                <a href="https://instagram.com/" target="_blank"><img src="img/instagram.svg" alt="<?= $text->altInstagram ?>"></a>
            </div>
        </div>
        <video id="heroVideo" autoplay loop>
            <source src="img/background.mp4" type="video/mp4" /><?= $text->videoError ?>
        </video>
        <div class="videoFilter"></div>
    </section>

    <section id="animals">
        <img src="img/seal3.svg" class="sectionImage">
        <div class="wrapper">
            <h2><?= $text->aboutHeader ?></h2>
            <div class="animals">
                <div>
                    <img src="img/marsvin1.svg" alt="<?= $text->porpoise ?>">
                </div>
                <div>
                    <h3><?= $text->porpoise ?></h3>
                    <p><?= $text->porpoiseText ?></p>
                </div>
                <div>
                    <img src="img/seal.svg" alt="<?= $text->seal ?>">
                </div>
                <div>
                    <h3><?= $text->seal ?></h3>
                    <p><?= $text->sealText ?></p>
                </div>
                <div>
                    <img class="coming" src="img/krabbe.svg" alt="<?= $text->crab ?>">
                </div>
                <div>
                    <h3><?= $text->crab ?></h3>
                    <p><?= $text->crabText ?></p>
                </div>
            </div>

        </div>
        <img src="img/marsvin5.svg" class="sectionImage">
    </section>

    <section id="bigImage1" class="bigImage">
        <img src="img/marsvin4.svg" class="sectionImage">
    </section>

    <section id="about">
        <div class="wrapper">
            <h2><?= $text->about ?></h2>
            <div>
                <div>
                    <?= $text->aboutUs1 ?>
                    <div class="subjects">
                        <img src="img/habitat.png" alt="<?= $text->habitat ?>">
                        <img src="img/gestation.png" alt="<?= $text->gestation ?>">
                        <img src="img/size.png" alt="<?= $text->size ?>">
                        <img src="img/food.png" alt="<?= $text->food ?>">
                        <img src="img/didyouknow.png" alt="<?= $text->didyouknow ?>">
                     </div>
                    <?= $text->aboutUs2 ?>
                    <!--<div class="social">
                        <a href="https://www.facebook.com/" target="_blank"><img src="img/facebook.svg" alt="<?= $text->altFacebook ?>"></a>
                        <a href="https://instagram.com/" target="_blank"><img src="img/instagram.svg" alt="<?= $text->altInstagram ?>"></a>
                    </div>-->
                </div>
                <div id="galleryContainer">
                    <div id="row1" class="row"></div>
                    <div id="row2" class="row"></div>
                </div>
            </div>
        </div>
        <img src="img/seal2.svg" class="sectionImage">
    </section>

    <section id="bigImage2" class="bigImage">
        <img src="img/marsvin1.svg" class="sectionImage">
    </section>
</main>