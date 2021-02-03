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
    <!-- <link rel="stylesheet preconnect" href="https://use.typekit.net/yxr4ufi.css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" async></script> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="/home" class="home-logo">
        <div class="large">
        <svg class="hide" width="182" height="46" viewBox="0 0 182 46" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M9.89997 21.8H2.79997C2.09997 21.8 1.49997 21.6 0.999966 21.3C0.799966 21.1 0.599966 20.9 0.499966 20.6C0.399966 20.4 0.299966 20.1 0.299966 19.8C0.299966 19.5 0.399966 19.3 0.499966 19C0.599966 18.8 0.799966 18.5 0.999966 18.3C1.49997 17.9 2.19997 17.7 2.79997 17.8H5.19997V10.1H2.79997C2.09997 10.1 1.49997 9.90001 0.999966 9.60001C0.699966 9.50001 0.499966 9.20001 0.399966 9.00001C0.299966 8.70001 0.199966 8.50001 0.299966 8.20001C0.299966 7.90001 0.299966 7.70001 0.499966 7.40001C0.599966 7.20001 0.799966 6.90001 0.999966 6.80001C1.49997 6.40001 2.19997 6.20001 2.79997 6.30001H9.89997V21.8ZM21 19C21.2 19.4 21.3 19.9 21.3 20.3C21.3 20.7 21.2 21.1 21 21.5C20.8 21.8 20.4 22.1 20 22.3C19.7 22.4 19.4 22.5 19.1 22.5C18.6 22.5 18.1 22.3 17.7 22C17.2 21.7 16.9 21.2 16.7 20.7L11.5 9.00001C11.3 8.60001 11.2 8.20001 11.2 7.70001C11.2 7.30001 11.3 6.90001 11.5 6.50001C11.7 6.20001 12.1 5.90001 12.5 5.80001C12.8 5.70001 13.1 5.60001 13.4 5.60001C13.9 5.60001 14.4 5.80001 14.8 6.10001C15.3 6.40001 15.6 6.90001 15.8 7.40001L21 19ZM28.8 20.3C28.8 20.7 28.7 21.1 28.5 21.5C28.3 21.8 27.9 22.1 27.5 22.3C27.2 22.4 26.9 22.5 26.6 22.5C26.1 22.5 25.6 22.3 25.2 22C24.7 21.7 24.4 21.2 24.2 20.7L18.9 9.00001C18.7 8.60001 18.6 8.20001 18.6 7.70001C18.6 7.30001 18.7 6.90001 18.9 6.50001C19.1 6.20001 19.5 5.90001 19.9 5.80001C20.2 5.70001 20.5 5.60001 20.7 5.60001C21.2 5.60001 21.7 5.80001 22.1 6.10001C22.6 6.40001 22.9 6.90001 23.1 7.40001L28.5 19C28.7 19.4 28.8 19.9 28.8 20.3Z" fill="currentColor"/>
          <path d="M65.5999 19.1C65.4999 18.9 65.2999 18.6 65.0999 18.5C64.5999 18.1 63.8999 17.9 63.2999 18H60.9V0H53.7999C53.0999 0 52.5 0.2 52 0.5C51.8 0.7 51.6 0.9 51.5 1.1C51.4 1.3 51.2 1.7 51.2 2C51.2 2.3 51.2 2.5 51.4 2.8C51.5 3 51.7 3.3 51.9 3.4C52.4 3.8 53.1 4 53.7 3.9H56.0999V21.8H63.2C63.9 21.8 64.5 21.6 65 21.3C65.2 21.1 65.4 20.9 65.5 20.6C65.6 20.4 65.6999 20.1 65.6999 19.8C65.7999 19.6 65.6999 19.3 65.5999 19.1Z" fill="currentColor"/>
          <path d="M53.7999 18.5C53.2999 18.1 52.6 17.9 52 17.8C51 17.7 50.0999 17.2 49.2999 16.6C48.5999 15.9 48.2999 15 48.2999 14.1C48.2999 13.2 48.5999 12.2 49.2999 11.5C49.9999 10.8 50.9 10.3 51.9 10.2C52.6 10.1 53.1999 9.9 53.7999 9.6C53.9999 9.4 54.1999 9.2 54.2999 9C54.3999 8.8 54.5 8.5 54.4 8.2C54.4 7.9 54.4 7.6 54.2 7.4C54.1 7.2 53.9 6.9 53.7 6.7C53.1 6.3 52.4 6.1 51.7 6.2C50.2 6.2 48.8 6.5 47.5 7.2C46.3 7.9 45.2999 8.9 44.5999 10C44.2999 10.5 44.1 11 44 11.5C43.8 10.9 43.6 10.3 43.2 9.7C42.5 8.5 41.5 7.6 40.2 6.9C38.8 6.2 37.2999 5.8 35.7999 5.9C34.1999 5.9 32.6999 6.2 31.4 6.9C30.1 7.6 29.0999 8.5 28.2999 9.7C27.5999 10.9 27.2 12.3 27.2 13.7C27.2 15.2 27.5 16.7 28.2 18C28.8 19.2 29.9 20.3 31.1 21C32.5 21.8 34.1 22.2 35.7 22.1C37.3 22.1 38.9 21.8 40.2 21C41.5 20.3 42.5 19.2 43.2 18C43.5 17.4 43.7 16.9 43.9 16.3C44.1 16.9 44.2999 17.5 44.5999 18C45.2999 19.2 46.3 20.1 47.5 20.8C48.7 21.5 50.1999 21.8 51.5999 21.8C52.2999 21.8 52.9999 21.6 53.5999 21.2C53.7999 21 54 20.8 54.2 20.5C54.3 20.2 54.4 20 54.4 19.7C54.4 19.4 54.4 19.2 54.2 18.9C54.2 18.9 53.9999 18.6 53.7999 18.5ZM38.7 17.2C38.3 17.6 37.9 17.9 37.4 18.1C36.9 18.3 36.3999 18.4 35.7999 18.3C35.2999 18.3 34.7 18.2 34.2 18C33.7 17.8 33.3 17.5 32.9 17.1C32.2 16.4 31.7999 15.2 31.7999 13.9C31.7999 12.6 32.2 11.6 32.9 10.9C33.3 10.5 33.7 10.3 34.2 10.1C34.7 9.9 35.2 9.8 35.7 9.9C36.2 9.9 36.7999 10 37.2999 10.1C37.7999 10.3 38.2999 10.6 38.5999 10.9C39.2999 11.6 39.7 12.6 39.7 14C39.7 15.4 39.4 16.5 38.7 17.2Z" fill="currentColor"/>
          <path d="M74 18.5C73.5 18.1 72.8999 17.9 72.1999 17.8C71.1999 17.7 70.2 17.2 69.5 16.6C68.8 15.9 68.5 15 68.5 14.1C68.5 13.2 68.8 12.2 69.5 11.5C70.2 10.8 71.0999 10.3 72.0999 10.2C72.7999 10.1 73.4 9.90001 74 9.60001C74.2 9.40001 74.4 9.20001 74.5 9.00001C74.6 8.80001 74.6999 8.50001 74.5999 8.20001C74.5999 7.90001 74.6 7.60001 74.4 7.40001C74.3 7.10001 74.1 6.90001 73.8 6.70001C73.2 6.30001 72.5 6.10001 71.8 6.20001C70.3 6.20001 68.8999 6.50001 67.5999 7.20001C66.3999 7.90001 65.3999 8.90001 64.6999 10C63.9999 11.3 63.7 12.7 63.7 14.1C63.7 15.5 64 16.9 64.8 18.1C64.9 18.2 64.9 18.3 65 18.4C65.1 18.6 65.3 18.8 65.5 19C66.1 19.7 66.7999 20.3 67.6999 20.8C68.8999 21.5 70.4 21.8 71.8 21.8C72.5 21.8 73.2 21.6 73.8 21.2C74 21 74.2 20.8 74.4 20.5C74.6 20.2 74.5999 20 74.5999 19.7C74.5999 19.4 74.6 19.2 74.4 18.9C74.4 18.9 74.2 18.6 74 18.5Z" fill="currentColor"/>
          <path d="M94.7 19.9C94.7 20.2 94.6 20.4 94.5 20.7C94.4 20.9 94.2 21.2 94 21.4C93.5 21.8 92.8 22 92.2 21.9H82.7C82 21.9 81.4 21.7 80.9 21.4C80.7 21.2 80.5 21 80.4 20.7C80.3 20.5 80.2 20.2 80.2 19.9C80.2 19.6 80.3 19.4 80.4 19.1C80.5 18.9 80.7 18.6 80.9 18.4C81.4 18 82.1 17.8 82.7 17.9H85.1V10.2H82.7C82 10.2 81.4 9.99999 80.9 9.69999L80.8 9.59999L77.9 15.9C77.7 16.4 77.4 16.8 76.9 17.2C76.5 17.5 76 17.6 75.5 17.6C75.2 17.6 74.9 17.5 74.6 17.4C74.2 17.3 73.8 17 73.6 16.6C73.4 16.3 73.3 15.8 73.3 15.4C73.3 15 73.4 14.5 73.6 14.1L76.7 7.59999C76.9 7.09999 77.2 6.69999 77.7 6.29999C78.1 5.99999 78.5 5.89999 79 5.89999C79.3 5.89999 79.6 5.99999 79.9 6.09999C80.3 6.19999 80.7 6.49999 80.9 6.79999C81.4 6.39999 82.1 6.19999 82.7 6.29999H89.8V18H92.2C92.9 18 93.5 18.2 94 18.5C94.2 18.7 94.4 18.9 94.5 19.2C94.7 19.3 94.7 19.6 94.7 19.9Z" fill="currentColor"/>
          <path d="M116.5 19L111.3 7.3C111.1 6.8 110.8 6.4 110.3 6C109.9 5.7 109.4 5.5 108.8 5.5C108.5 5.5 108.2 5.6 108 5.7C107.6 5.8 107.2 6.1 107 6.4C106.8 6.8 106.7 7.2 106.7 7.6C106.7 8 106.8 8.5 107 8.9L112.3 20.6C112.5 21.1 112.8 21.5 113.3 21.9C113.7 22.2 114.2 22.3 114.6 22.4C114.9 22.4 115.2 22.3 115.5 22.2C115.9 22 116.3 21.8 116.5 21.4C116.7 21.1 116.9 20.6 116.8 20.2C116.8 19.9 116.7 19.4 116.5 19Z" fill="currentColor"/>
          <path d="M105.3 6.19999V21.8H98.2C97.5 21.8 96.9 21.6 96.4 21.3C96.2 21.1 96 20.9 95.9 20.6C95.8 20.4 95.7 20.1 95.7 19.8C95.7 19.5 95.8 19.3 95.9 19C96 18.8 96.2 18.5 96.4 18.3C96.9 17.9 97.6 17.7 98.2 17.8H100.6V10.1H98.2C97.5 10.1 96.9 9.89999 96.4 9.59999V11.1C96.4 11.8 96.2 12.4 95.7 13C95.5 13.2 95.3 13.4 94.9 13.5C94.6 13.6 94.3 13.7 94 13.7C93.7 13.7 93.3 13.7 93 13.5C92.7 13.4 92.4 13.2 92.2 13C91.7 12.5 91.5 11.8 91.5 11.1V8.39999C91.5 7.69999 91.7 7.09999 92.1 6.49999C92.5 6.29999 92.8 6.09999 93 5.99999C93.3 5.89999 93.6 5.79999 93.9 5.79999C94.2 5.79999 94.6 5.79999 94.9 5.99999C95.2 6.09999 95.5 6.29999 95.7 6.49999C95.9 6.69999 96 6.79999 96.1 6.99999C96.2 6.89999 96.3 6.79999 96.4 6.69999C96.9 6.29999 97.6 6.09999 98.2 6.19999H105.3Z" fill="currentColor"/>
          <path d="M9.7 42.7C9.6 42.5 9.4 42.2 9.2 42C8.7 41.6 8 41.4 7.4 41.5H2.5C1.8 41.5 1.2 41.6 0.7 42C0.5 42.2 0.3 42.4 0.2 42.7C0.1 42.9 0 43.2 0 43.5C0 43.8 0.1 44 0.2 44.3C0.3 44.5 0.5 44.8 0.7 44.9C1.2 45.3 1.9 45.5 2.5 45.4H7.4C8.1 45.4 8.7 45.2 9.2 44.9C9.4 44.7 9.6 44.5 9.7 44.3C9.8 44.1 9.9 43.8 9.9 43.5C9.9 43.2 9.8 42.9 9.7 42.7Z" fill="currentColor"/>
          <path d="M39.9 42.6L34.6 31C34.4 30.5 34.1 30.1 33.6 29.7C33.2 29.4 32.7 29.2 32.2 29.2C31.9 29.2 31.6 29.3 31.4 29.4C31 29.5 30.6 29.8 30.4 30.1C30.2 30.5 30 30.9 30 31.3C30 31.7 30.1 32.2 30.3 32.6L35.6 44.3C35.8 44.8 36.1 45.2 36.6 45.6C37 45.9 37.5 46.1 38 46.1C38.6 46.1 39.2 45.9 39.6 45.5C40 45.1 40.3 44.6 40.3 44C40.2 43.5 40.1 43 39.9 42.6Z" fill="currentColor"/>
          <path d="M28.7 29.9V45.5H21.6C20.9 45.5 20.3 45.3 19.8 45C19.8 45 19.8 45 19.7 44.9C19.7 44.9 19.7 45 19.6 45C19.1 45.4 18.4 45.6 17.8 45.5H12.5L7.1 33.8H3.5C2.8 33.8 2.2 33.6 1.7 33.3C1.5 33.1 1.3 32.9 1.2 32.6C1.1 32.4 1 32.1 1 31.8C1 31.5 1.1 31.3 1.2 31C1.3 30.8 1.5 30.5 1.7 30.4C2.2 30 2.9 29.8 3.5 29.9H10.4L15.7 41.6H17.7C18.4 41.6 19 41.7 19.5 42.1C19.5 42.1 19.5 42.1 19.6 42.2C19.6 42.2 19.6 42.1 19.7 42.1C20.2 41.7 20.9 41.5 21.5 41.6H24V33.9H21.6C20.9 33.9 20.3 33.7 19.8 33.4C19.6 33.2 19.4 33 19.3 32.7C19.2 32.5 19.1 32.2 19.1 31.9C19.1 31.6 19.2 31.4 19.3 31.1C19.4 30.9 19.6 30.6 19.8 30.5C20.3 30.1 21 29.9 21.6 30H28.7V29.9Z" fill="currentColor"/>
          <path d="M67.2999 30.2C67.0999 29.9 66.6999 29.6 66.2999 29.4C65.9999 29.3 65.6999 29.2 65.3999 29.2C64.8999 29.2 64.3999 29.4 63.9999 29.7C63.4999 30 63.1999 30.5 62.9999 31L57.6999 42.7C57.4999 43.1 57.3999 43.5 57.3999 44C57.3999 44.4 57.4999 44.8 57.6999 45.2C57.8999 45.6 58.2999 45.8 58.6999 45.9C58.9999 46 59.2999 46 59.5999 46C60.0999 46 60.5999 45.8 60.9999 45.5C61.4999 45.2 61.7999 44.7 61.9999 44.2L67.1999 32.5C67.3999 32.1 67.4999 31.6 67.4999 31.2C67.6999 30.9 67.4999 30.5 67.2999 30.2Z" fill="currentColor"/>
          <path d="M57.4999 37.7C57.4999 39.1 57.1999 40.5 56.3999 41.7C55.6999 42.9 54.6999 43.8 53.4999 44.5C52.2999 45.2 50.7999 45.5 49.3999 45.5C48.6999 45.5 47.9999 45.3 47.3999 44.9C47.3999 44.9 47.3999 45 47.2999 45C47.0999 45.3 46.6999 45.6 46.2999 45.8C45.9999 45.9 45.6999 46 45.3999 46C44.8999 46 44.3999 45.8 43.9999 45.5C43.4999 45.2 43.1999 44.7 42.9999 44.2L37.6999 32.5C37.4999 32.1 37.3999 31.7 37.3999 31.2C37.3999 30.8 37.4999 30.4 37.6999 30C37.8999 29.7 38.2999 29.4 38.6999 29.3C38.9999 29.2 39.2999 29.1 39.4999 29.1C39.9999 29.1 40.4999 29.3 40.9999 29.5C41.4999 29.8 41.7999 30.3 41.9999 30.8L47.0999 42.1C47.1999 42 47.1999 42 47.2999 41.9C47.7999 41.5 48.3999 41.3 49.0999 41.2C50.0999 41.1 50.9999 40.6 51.7999 40C52.4999 39.3 52.7999 38.4 52.7999 37.5C52.7999 36.6 52.4999 35.6 51.7999 34.9C51.0999 34.2 50.1999 33.7 49.1999 33.6C48.4999 33.5 47.8999 33.3 47.2999 33C47.0999 32.8 46.8999 32.6 46.7999 32.4C46.6999 32.2 46.5999 31.9 46.6999 31.6C46.6999 31.3 46.7999 31 46.8999 30.8C46.9999 30.6 47.1999 30.3 47.4999 30.1C48.0999 29.7 48.7999 29.5 49.4999 29.6C50.9999 29.6 52.3999 29.9 53.6999 30.6C54.8999 31.3 55.8999 32.2 56.5999 33.4C57.1999 34.9 57.4999 36.3 57.4999 37.7Z" fill="currentColor"/>
          <path d="M82.4999 36.5C82.2999 36.3 81.9999 36.1 81.6999 35.9C81.3999 35.8 81.0999 35.7 80.6999 35.7C79.0999 35.7 78.2999 36.6 78.1999 38.4C78.1999 39.4 77.6999 40.3 76.9999 40.9C76.2999 41.5 75.2999 41.9 74.2999 41.9C73.7999 41.9 73.2999 41.8 72.8999 41.7C72.3999 41.5 71.9999 41.3 71.6999 41C70.9999 40.3 70.4999 39.4 70.4999 38.4C70.4999 37.7 70.1999 37 69.6999 36.4C69.4999 36.2 69.1999 36 68.8999 35.9C68.5999 35.8 68.2999 35.7 67.9999 35.7C67.6999 35.7 67.2999 35.7 66.9999 35.8C66.6999 35.9 66.3999 36.1 66.0999 36.3C65.5999 36.9 65.3999 37.6 65.3999 38.3C65.3999 39.6 65.7999 41 66.5999 42.1C67.3999 43.2 68.4999 44.2 69.7999 44.8C71.1999 45.5 72.7999 45.8 74.2999 45.8C75.8999 45.8 77.5999 45.5 78.9999 44.8C80.2999 44.2 81.3999 43.3 82.0999 42.2C82.7999 41.1 83.1999 39.7 83.1999 38.4C83.1999 37.7 82.9999 37 82.4999 36.5Z" fill="currentColor"/>
          <path d="M105.8 30.4C105.5 30.1 105.2 29.8 104.8 29.7C104.5 29.6 104.2 29.5 103.9 29.5C103.4 29.5 102.9 29.7 102.6 30C102.2 30.3 101.8 30.8 101.6 31.3L98.5 37.8C98.3 38.2 98.2 38.7 98.2 39.1C98.2 39.5 98.3 39.9 98.5 40.2C98.7 40.6 99.1 40.8 99.5 41C99.8 41.1 100.1 41.2 100.4 41.2C100.9 41.2 101.4 41.1 101.8 40.8C102.3 40.5 102.6 40 102.8 39.5L105.8 33.2L105.9 33C106.1 32.6 106.2 32.1 106.2 31.7C106.1 31.2 106 30.8 105.8 30.4Z" fill="currentColor"/>
          <path d="M99.4 42.7C99.5 42.9 99.6 43.2 99.6 43.5C99.6 43.8 99.6 44.1 99.4 44.3C99.3 44.6 99.1 44.8 98.8 45C98.2 45.4 97.5 45.6 96.8 45.6C95.3 45.6 93.9 45.3 92.7 44.6C91.5 43.9 90.5 43 89.8 41.8C89.3 41 89 40 88.8 39.1C88.6 39.3 88.4 39.4 88.1 39.5C87.8 39.6 87.5 39.7 87.1 39.7C85.5 39.7 84.7 38.8 84.6 37C84.6 36 84.1 35.1 83.3 34.4C82.9 34.1 82.5 33.8 82.1 33.7C81.6 33.5 81.1 33.5 80.6 33.5C80.1 33.5 79.6 33.6 79.2 33.7C78.7 33.9 78.3 34.1 78 34.4C77.3 35.1 76.8 36 76.8 37C76.8 37.7 76.5 38.4 76 39C75.8 39.2 75.5 39.4 75.2 39.5C74.9 39.6 74.6 39.7 74.3 39.7C74 39.7 73.6 39.7 73.3 39.5C73 39.4 72.7 39.2 72.5 39C72 38.4 71.8 37.7 71.8 37C71.8 35.7 72.2 34.3 73 33.2C73.8 32.1 74.9 31.2 76.2 30.5C77.6 29.8 79.2 29.5 80.7 29.5C82.3 29.5 83.9 29.8 85.4 30.5C86.7 31.1 87.8 32 88.5 33.1C88.8 33.6 89.1 34.1 89.3 34.7C89.4 34.3 89.6 34 89.8 33.6C90.5 32.4 91.5 31.5 92.7 30.8C94 30.1 95.4 29.8 96.9 29.8C97.6 29.8 98.3 30 98.9 30.3C99.1 30.5 99.3 30.7 99.5 31C99.6 31.3 99.7 31.5 99.7 31.8C99.7 32.1 99.7 32.3 99.6 32.6C99.5 32.8 99.3 33.1 99.1 33.2C98.5 33.6 97.9 33.8 97.2 33.8C96.2 33.9 95.2 34.4 94.6 35.1C93.9 35.8 93.6 36.7 93.6 37.7C93.6 38.6 93.9 39.5 94.6 40.2C95.3 40.9 96.2 41.3 97.2 41.4C97.9 41.5 98.5 41.7 99 42.1C99.1 42.3 99.3 42.5 99.4 42.7Z" fill="currentColor"/>
          <path d="M114.7 45.4H107.6C106.9 45.4 106.3 45.2 105.8 44.9C105.6 44.7 105.4 44.5 105.3 44.2C105.2 44 105.1 43.7 105.1 43.4C105.1 43.1 105.2 42.9 105.3 42.6C105.4 42.4 105.6 42.1 105.8 41.9C106.3 41.5 107 41.3 107.6 41.4H110V33.7H107.6C106.9 33.7 106.3 33.5 105.8 33.2C105.6 33 105.4 32.8 105.3 32.5C105.2 32.3 105.1 32 105.1 31.7C105.1 31.4 105.2 31.2 105.3 30.9C105.4 30.7 105.6 30.4 105.8 30.2C106.3 29.8 107 29.6 107.6 29.7H114.7V45.4ZM125.9 42.6C126.1 43 126.2 43.5 126.2 43.9C126.2 44.3 126.1 44.7 125.9 45.1C125.7 45.4 125.3 45.7 124.9 45.9C124.6 46 124.3 46.1 124 46.1C123.5 46.1 123 45.9 122.6 45.6C122.1 45.3 121.8 44.8 121.6 44.3L116.3 32.6C116.1 32.2 116 31.8 116 31.3C116 30.9 116.1 30.5 116.3 30.1C116.5 29.8 116.9 29.5 117.3 29.4C117.6 29.3 117.9 29.2 118.1 29.2C118.6 29.2 119.1 29.4 119.5 29.7C120 30 120.3 30.5 120.5 31L125.9 42.6ZM133.7 43.9C133.7 44.4 133.5 45 133 45.4C132.6 45.8 132 46 131.4 46C130.9 46 130.4 45.8 130 45.5C129.5 45.2 129.2 44.7 129 44.2L123.7 32.5C123.5 32.1 123.4 31.7 123.4 31.2C123.4 30.8 123.5 30.4 123.7 30C123.9 29.7 124.3 29.4 124.7 29.3C125 29.2 125.3 29.1 125.5 29.1C126 29.1 126.5 29.3 126.9 29.6C127.4 29.9 127.7 30.4 127.9 30.9L133.1 42.6C133.5 43 133.6 43.5 133.7 43.9Z" fill="currentColor"/>
          <path d="M142.1 42.1C141.6 41.7 140.9 41.5 140.3 41.4C139.3 41.3 138.3 40.8 137.6 40.2C136.9 39.5 136.6 38.6 136.6 37.7C136.6 36.8 136.9 35.8 137.6 35.1C138.3 34.4 139.2 33.9 140.2 33.8C140.9 33.7 141.5 33.5 142.1 33.2C142.3 33 142.5 32.8 142.6 32.6C142.7 32.4 142.8 32.1 142.8 31.8C142.8 31.5 142.8 31.2 142.6 31C142.5 30.7 142.3 30.5 142 30.3C141.4 29.9 140.7 29.7 140 29.8C138.5 29.8 137.1 30.1 135.8 30.8C134.6 31.5 133.6 32.4 132.9 33.6C132.2 34.9 131.8 36.3 131.9 37.7C131.9 39.1 132.2 40.5 133 41.7C133.7 42.9 134.7 43.8 135.9 44.5C137.1 45.2 138.6 45.6 140 45.5C140.7 45.5 141.4 45.3 142 44.9C142.2 44.7 142.4 44.5 142.6 44.2C142.7 43.9 142.8 43.6 142.8 43.4C142.8 43.1 142.8 42.9 142.6 42.6C142.5 42.5 142.3 42.3 142.1 42.1Z" fill="currentColor"/>
          <path d="M169 42.6L163.8 31C163.6 30.5 163.3 30.1 162.8 29.7C162.4 29.4 161.9 29.2 161.4 29.2C161.1 29.2 160.8 29.3 160.6 29.4C160.2 29.5 159.8 29.8 159.6 30.1C159.4 30.5 159.2 30.9 159.3 31.3C159.3 31.7 159.4 32.2 159.6 32.6L164.9 44.3C165.1 44.8 165.4 45.2 165.9 45.6C166.3 45.9 166.8 46.1 167.3 46.1C167.9 46.1 168.5 45.9 168.9 45.5C169.3 45.1 169.6 44.6 169.6 44C169.4 43.5 169.2 43 169 42.6Z" fill="currentColor"/>
          <path d="M157.9 29.9V45.5H150.8C150.1 45.5 149.5 45.3 149 45C148.8 44.8 148.6 44.6 148.5 44.4C148.4 44.2 148.3 43.9 148.3 43.6C148.3 43.3 148.4 43.1 148.5 42.8C148.6 42.6 148.8 42.3 149 42.1C149.5 41.7 150.2 41.5 150.8 41.6H153.2V33.9H150.8C150.1 33.9 149.5 33.7 149 33.4L148.9 33.3L146 39.6C145.8 40.1 145.5 40.5 145 40.9C144.6 41.2 144.1 41.3 143.6 41.3C143.3 41.3 143 41.2 142.7 41.1C142.3 41 141.9 40.7 141.7 40.3C141.5 40 141.3 39.5 141.4 39.1C141.4 38.6 141.5 38.2 141.7 37.8L144.7 31.2C144.9 30.7 145.3 30.3 145.7 29.9C146.1 29.6 146.5 29.4 147 29.4C147.3 29.4 147.6 29.5 147.9 29.6C148.3 29.7 148.7 30 148.9 30.3C149.4 29.9 150.1 29.7 150.7 29.8H157.9V29.9Z" fill="currentColor"/>
          <path d="M180.5 42C180.7 42.2 180.9 42.4 181 42.7C181.1 42.9 181.2 43.2 181.2 43.5C181.2 43.8 181.1 44 181 44.3C180.9 44.5 180.7 44.8 180.5 45C180 45.4 179.3 45.6 178.7 45.5H169.8V26.9C169.8 26.3 170 25.6 170.4 25.1C170.6 24.9 170.9 24.7 171.2 24.6C171.5 24.5 171.8 24.4 172.1 24.5C172.4 24.5 172.7 24.5 173 24.6C173.3 24.7 173.6 24.9 173.8 25.1C174.2 25.6 174.4 26.2 174.4 26.9V41.5H178.6C179.3 41.5 180 41.7 180.5 42ZM176.9 33.2C176.7 33 176.5 32.8 176.4 32.5C176.3 32.2 176.2 32 176.2 31.7C176.2 31.4 176.3 31.1 176.4 30.9C176.5 30.6 176.7 30.4 176.9 30.2C177.1 30 177.4 29.8 177.7 29.7C178 29.6 178.3 29.5 178.6 29.5C178.9 29.5 179.2 29.5 179.5 29.7C179.8 29.8 180.1 30 180.3 30.2C180.5 30.4 180.7 30.6 180.8 30.9C180.9 31.2 181 31.4 181 31.7C181 32 180.9 32.3 180.8 32.5C180.7 32.8 180.5 33 180.3 33.2C180.1 33.4 179.8 33.6 179.5 33.7C179.2 33.8 178.9 33.9 178.6 33.9C178.3 33.9 178 33.9 177.7 33.7C177.4 33.5 177.1 33.4 176.9 33.2Z" fill="currentColor"/>
        </svg>          
        </div>
        <div class="small">
        <svg class="hide" width="82" height="35" viewBox="0 0 82 35" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M61.5129 21.2656C63.3675 21.2629 64.8687 19.7565 64.8659 17.9012C64.8632 16.0459 63.3574 14.5441 61.5028 14.5469C59.6482 14.5497 58.147 16.056 58.1497 17.9113C58.1525 19.7666 59.6583 21.2684 61.5129 21.2656Z" fill="currentColor"/>
        <path d="M54.8697 16.5C54.8697 18.3594 53.3547 19.8594 51.5116 19.8594C49.6529 19.8594 48.1535 18.3437 48.1535 16.5C48.1535 14.6406 49.6529 13.1406 51.5116 13.1406C53.3547 13.125 54.8697 14.6406 54.8697 16.5Z" fill="currentColor"/>
        <path d="M79.8914 35C78.72 35 77.7829 34.0625 77.7829 32.8906V4.21875H4.21714V16.6406C4.21714 17.8125 3.28 18.75 2.10857 18.75C0.937143 18.75 0 17.8125 0 16.6406V0H82V32.8906C82 34.0625 81.0629 35 79.8914 35Z" fill="currentColor"/>
        </svg>
        </div>
        </a>
        <menu class="desktop-nav">
            <nav>
                <?php $items = $site->children(); $items->prepend('home', page('home'));
                  if ($items->isNotEmpty()) :?>
                <?php foreach ($items->listed() as $item) : ?>
                 
                    <a class="left" <?php e($item->isOpen(), 'class="active"') ?>
                        href="<?= $item->url() ?>"><?= $item->title()->html() ?>
                        </a>
            
                <?php endforeach ?>
                <?php endif ?>
            </nav>
        </menu>
        <a class="hide dark-mode-toggle">
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
            </div>
            <!-- <a class="dark-mode-toggle">
            <label class="switch">
                <span class="sliderToggle">
                    <div id="circle"></div>
                    <span class="dark">Dark</span>
                    <span class="light">Light</span>
                </span>
            </label>
        </a> -->
        </nav>
    </header>