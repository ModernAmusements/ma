<?php snippet('header') ?>
<main>
  <article id="pov" class="pageContent">
    <section class="homeSvg card ">
      <svg id="homeSVG" class="stroke image" viewBox="0 0 1250 640" xmlns="http://www.w3.org/2000/svg">
        <path d="M.47,472V179.61H638.31V80.83h-86V.47h697.18V527.11H1109.09V477H756.33V639.53H238.61V558.72h29.92V472Z" />
        <div class="screen" onClick=""></div>
      </svg>
    </section>
    <section class="homeSvg-mobile card">
      <svg class="stroke image" viewBox="0 0 687 1342" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M196 1.00024L498.5 1.00026L498.5 685.277H599.861V593.058H686V1341H121.5L121.5 1160.5H175.254L175.254 811.895L1 811.895L1.00002 240.911H87.6265V273.008H196L196 1.00024Z" />
        <div class="screen" onClick=""></div>
      </svg>

    </section>
    <section class="credentialsName">
      <h1 class="displayText">
        Florian Nagel
        <br />
        Graphic Design
      </h1>
    </section>
    <section class="credentialsTime">
      <h1 class="displayText">
        2017-
        <br />
        2020
      </h1>
    </section>
    <section class="credentialsDate">
      <h1 class="displayText">
        Archiv+
        <br />
        Visual Diary
      </h1>
    </section>
  </article>
</main>
<div id="preload-homepage">
  <div class="intro">
    <div class="intro-items">
      <h1 class="large">Florian Nagel</h1>
      <h1 class="xxlarge">2017-2020</h1>
      <h1 class="xxxlarge">FFF-Corp</h1>
      <h1 class="xlarge">Visual Diary</h1>
      <span class="intro-enter medium">(Click to Enter)</span>
    </div>
  </div>
</div>
<?= js('assets/js/homePageScripts.js', true) ?>
<?php snippet('footer') ?>