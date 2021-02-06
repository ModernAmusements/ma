<!-- FOOTER -->
<section class="cta card card-homepage">
    <h1 class="single-line">Responding to change over following a plan</h1>

    <div class="buttons">
        <a href="#fffModal" category="header-navigation" action="home" label="consultation-modal" rel="modal:open">
            <button class="btn-large consultation">HIT ME UP</button>
        </a>
        <p class="small">And get in Contact!</p>
    </div>
</section>
<footer>
    <div class="footer-nav">
        <a class="left" aria-label="Read more about Seminole tax hike" href="imprint">
           Licensing Terms
        </a>
        <a class="left"  aria-label="Read more about Seminole tax hike" href="imprint">
           Privacy & Cookies
        </a>
        <a class="left"  aria-label="Read more about Seminole tax hike" href="imprint">
            Contact
        </a>
        <a class="left"  aria-label="Read more about Seminole tax hike" href="imprint">
            Imprint
        </a>
    </div>
    <div class="legal">
        <strong class="margin-right-s">©2016-<?= date('Y') ?></strong>
        <a aria-label="Read more about Seminole tax hike" href="/about">
           Modern Amusment™ Shady Tawfik
        </a>
    </div>
</footer>
<div id="consent-popup" class="hidden">
    <p class="small">We use cookies for analysis and marketing purposes. Please accept <a href="imprint">Terms and Conditions</a> these before using the site.</p>
    <a id="accept" href="#">Accept</a>
</div>
<?php snippet('popUp') ?>
<?= js('assets/js/libs.js') ?>
<?= js('assets/js/main.js', ['async' => false, 'defer' => true ]) ?>
</body>

</html>