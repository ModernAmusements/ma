<!-- FOOTER -->
<section class="cta card card-homepage">
    <h1>Responding to change over following a plan</h1>

    <div class="buttons">
        <a href="#fffModal" category="header-navigation" action="home" label="consultation-modal" rel="modal:open">
            <button class="btn-large consultation">HIT ME UP</button>
        </a>
        <p class="small">And get in Contact!</p>
    </div>
</section>
<footer>
    <div class="legal">
        <strong>©2016-<?= date('Y') ?></strong>
        <a aria-label="Read more about Seminole tax hike" href="/test">
            <p>Modern Amusment. Shady Tawfik</p>
        </a>
    </div>
    <div class="footer-nav">
        <a aria-label="Read more about Seminole tax hike" href="imprint">
            <p>Licensing Terms</p>
        </a>
        <a aria-label="Read more about Seminole tax hike" href="imprint">
            <p>Privacy & Cookies</p>
        </a>
        <a aria-label="Read more about Seminole tax hike" href="imprint">
            <p>Contact</p>
        </a>
        <a aria-label="Read more about Seminole tax hike" href="imprint">
            <p>Imprint</p>
        </a>
    </div>
</footer>
<div id="consent-popup" class="hidden">
    <p>We use cookies for analysis and marketing purposes. Please accept <a href="imprint">Terms and Conditions</a> these before using the site.</p>
    <a id="accept" href="#">Accept</a>
</div>
<?php snippet('popUp') ?>
<?= js('assets/js/libs.js') ?>
<?= js('assets/js/main.js', ['async' => false, 'defer' => true ]) ?>
</body>

</html>