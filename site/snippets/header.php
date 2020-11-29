<?php
?>
<!doctype html>
<html lang="de" id="invertme">

<head>
    <!-- Meta Styling -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon//favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#da532c">
    <!-- Meta Information-->
    <?php echo $page->metaTags() ?>
    <!-- Stylesheets Async CSS-->
    <?= css('assets/css/index.css', true) ?>
    <!-- jQeury-->
    <?= js('assets/js/jquery.js') ?>
    <!-- Typekit Preloader-->
    <link rel="stylesheet preconnect" href="https://use.typekit.net/yxr4ufi.css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" async></script>

</head>

<body>
    <header>
        <a href="<?= $site>url() ?>" class="home-logo">
            <h2>ModernAmusement</h2>
        </a>
        <menu class="desktop-nav">
            <nav>
                <?php $items = $site->children(); $items->prepend('home', page('home'));
                  if ($items->isNotEmpty()) :?>
                <?php foreach ($items->listed() as $item) : ?>
                <a <?php e($item->isOpen(), 'class="active"') ?>
                    href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                <?php endforeach ?>
                <?php endif ?>
            </nav>
        </menu>
        <a class="dark-mode-toggle">
        <!-- <span id="inverted-msg"></span> -->
            <label class="switch">
                <span class="sliderToggle">
                    <div id="circle"></div>
                    <span class="dark">Dark</span>
                    <span class="light">Light</span>
                </span>
            </label>
          
        </a>
        <!-- Mobile Menu -->
        <menu class="mobile-display">
            <span id="mobileIcon" class="menuicon">
                <label class="menuicon-label">
                    <span class="menuicon-bread menuicon-bread-top">
                        <span class="menuicon-bread-crust menuicon-bread-crust-top"></span>
                    </span>
                    <span class="menuicon-bread menuicon-bread-bottom">
                        <span class="menuicon-bread-crust menuicon-bread-crust-bottom"></span>
                    </span>
                </label>
            </span>
        </menu>
        <nav id="mobile-nav">
            <div class="navGridMenu">
                <?php
                $items = $pages->listed();
                if ($items->isNotEmpty()) :
                ?>
                <?php foreach ($items as $item) : ?>
                <a <?php e($item->isOpen(), 'class="active"') ?>
                    href="<?= $item->url() ?>"><?= $item->title()->html() ?> </a>
                <?php endforeach ?>
                <?php endif ?>
                <div class="navLang">

                </div>
            </div>
        </nav>
    </header>