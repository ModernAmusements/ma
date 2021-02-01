<?php snippet('header') ?>
<main>
  <article class="pageContent">
    <section class="right">
      <?php if ($worksPage = page('works')): ?>
      <?php foreach ($worksPage->children()->sortBy('date', 'desc') as $work) :
      ?>
      <article class="post-homepage">
        <div class="post-homepage-header">
          <span class="cat">Projects</span>
          <span><a href="/" class="showpost">
            Show more
          </a></span>
        </div>
        <div class="post-homepage-content">
   
          <?php if ($cover = $work->cover()->crop(200)) : ?>
            <div class="post-homepage-cover">
            <img src="<?= $cover->url() ?>" alt="<?= $cover->alt() ?>" />
            </div>
            <?php endif ?>
            <div class="post-homepage-title">
            <h3><?= $work->title() ?></h3>
            <p class="small">
            We decided to express our gratitude by sharing a retrospective of our first year as a studio
            </p>
            </div>
        </div>
     
      </article>
      <?php endforeach ?>
      <?php endif ?>
      
    </section>
  </article>

  <!-- <div id="preload-homepage">
  <div class="intro">
    <div class="intro-items">
      <h1 class="large">Florian Nagel</h1>
      <h1 class="xxlarge">2017-2020</h1>
      <h1 class="xxxlarge">FFF-Corp</h1>
      <h1 class="xlarge">Visual Diary</h1>
      <span class="intro-enter medium">(Click to Enter)</span>
    </div>
  </div>
</div>  -->
</main>
<?= js('assets/js/homePageScripts.js', true) ?>
<?php snippet('footer') ?>
