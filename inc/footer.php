<footer id="contact">
    <div class="wrapper">
       <div class="footerContact">
           <div class="phone">
              <img src="img/phone.svg" alt="<?= $text->phone ?>">
              <a href="tel:+4565324200" target="_blank">
               <h3><?= $text->phone ?></h3>
               </a>
           </div>
           <div class="email">
                  <img src="img/email.svg" alt="<?= $text->email ?>">
                <a href="mailto:post@fjord-baelt.dk" target="_blank">
               <h3><?= $text->email ?></h3>
               </a>
           </div>
           <div class="address">
              <img src="img/address.svg" alt="<?= $text->address ?>">
              <a href="https://goo.gl/maps/ofrmzumyG5t" target="_blank">
                   <h3><?= $text->address ?></h3>
               </a>
           </div>
       </div>

        <p><strong><?= $text->brandName ?></strong> • <a href="http://fjordbaelt.dk" target="_blank"><?= $text->linkToHomepage ?></a> • <?= $text->cvr ?> • <?= $text->copyright ?></p>
    </div>
</footer>