<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <title>DMC FinCap | <?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>" />

    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <header id="masthead" class="site-header">
        <div class="container">
            <div class="site-branding">
                <a href="index" class="custom-logo-link" rel="home"><img width="320" height="60" src="img/logo.png" class="custom-logo" alt="DMC"></a>
            </div>

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="menu-main-menu-container">
                    <ul id="primary-menu" class="menu nav-menu">
                        <li class="menu-item <?php echo ($_SERVER['REQUEST_URI'] == "/dmc-web/index") ? "current-menu-item" : "" ?>"><a href="index">Utama</a></li>
                        <li class="menu-item with-child"><a href="#">Produk</a>
                            <ul class="sub-menu">
                                <li class="menu-item <?php echo ($_SERVER['REQUEST_URI'] == "/dmc-web/secondHope") ? "current-menu-item" : "" ?>"><a href="secondHope">Second Hope</a></li>
                                <li class="menu-item <?php echo ($_SERVER['REQUEST_URI'] == "/dmc-web/quickCash") ? "current-menu-item" : "" ?>"><a href="quickCash">Quick Cash</a></li>
                            </ul>
                        </li>
                        <li class="menu-item <?php echo ($_SERVER['REQUEST_URI'] == "/dmc-web/about") ? "current-menu-item" : "" ?>"><a href="about">Tentang Kami</a></li>
                        <li class="menu-item <?php echo ($_SERVER['REQUEST_URI'] == "/dmc-web/news") ? "current-menu-item" : "" ?>"><a href="news">Berita</a></li>
                        <li class="menu-item <?php echo ($_SERVER['REQUEST_URI'] == "/dmc-web/career") ? "current-menu-item" : "" ?>"><a href="career">Karier</a></li>
                        <li class="menu-item <?php echo ($_SERVER['REQUEST_URI'] == "/dmc-web/contact") ? "current-menu-item" : "" ?>"><a href="contact">Hubungi Kami</a></li>
                        <li class="menu-item"><a href="registration" target="_blank">Daftar Sekarang</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>