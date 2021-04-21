<?php snippet('header') ?>
<main>
  <ul class="grid">
    <?php foreach ($articles as $article): ?>
    <li class="column">
      <?php snippet('blog/excerpt', ['article' =>
      $article]) ?>
    </li>
    <?php endforeach ?>
  </ul>
  <?php snippet('blog/pagination', ['pagination' =>
  $articles->pagination()]) ?>
</main>
<?php snippet('footer') ?>
