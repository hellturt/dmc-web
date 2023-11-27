<?php
$pageTitle = "Welcome";
$pageDescription = "This is the home page of our website.";
include 'component/header.php';
?>

<main id="primary" class="site-main main-home">
    <section class='cta-secondHope'>
        <div class='container'>
            <div class='column column-content'>
                <h1>Harapan Kedua Pembiayaan Tidak Berbayar</h1>
                <p>
                    DMC Fincap Sdn Bhd merupakan satu syarikat teknologi kewangan yang telah ditubuhkan pada tahun 2021 di Malaysia
                </p>
                <a class='btn-main xl' href="secondHope">Info Lanjut</a>
            </div>

            <div class='column'>
            </div>
        </div>
        <video playsinline autoplay muted loop poster="video-bg.jpg" id="bgvid">
            <source src="video/video_bg.webm" type="video/webm">
            <source src="video/video_bg.mp4" type="video/mp4">
        </video>
    </section>

    <!-- <section class='cta-about'>
        <div class='container'>
            <div class='column column-img' style="background-image: url('img/cta-about-bg.jpg')">
                <div class="inner-image" style="background-image: url('img/cta-about-person.jpg')">
                </div>
            </div>

            <div class='column column-content'>
                <h1>Tentang Kami</h1>
                <p><b>DMC FinCap Sdn Bhd</b> merupakan sebuah syarikat FinTech yang ditubuhkan pada tahun 2021 di Malaysia.</p>
                <a class='btn-main' href="about">Info Lanjut</a>
                <img src="img/cap.png" alt="">
            </div>
        </div>
    </section> -->

    <section class='cta-product'>
        <div class='container'>
            <div class='column column-content'>
                <h1>Produk Kami</h1>
                <a href="secondHope">
                    <img src="img/caret-right.svg" alt="">
                    Program Second Hope / Program Harapan Kedua
                </a>
                <a href="quickCash">
                    <img src="img/caret-right.svg" alt="">
                    Quick Cash
                </a>
            </div>

            <div class='column column-img' style="background-image: url('img/cta-product-img.jpg')"></div>
            <div class='column column-img-bg'></div>
            <img class='dots-bg' src="img/dots.svg" alt="">

        </div>
    </section>

    <section class='cta-news'>
        <div class='container'>
            <div class='news-container'>
                <div class='single-news' style="background-image: url('img/home-news-bg-1.jpg');">
                    <p><span>Pakar Nasihat</span> Kewangan Yang Bertauliah.</p>
                    <img src="img/caret-right.svg" alt="">
                </div>
                <div class='single-news' style="background-image: url('img/home-news-bg-2.jpg');">
                    <p><span>Masa Hadapan</span> Yang Lebih Terjamin.</p>
                    <img src="img/caret-right.svg" alt="">
                </div>
                <div class='single-news' style="background-image: url('img/home-news-bg-3.jpg');">
                    <p><span>Manfaat Menyertai</span> Program Second Hope</p>
                    <img src="img/caret-right.svg" alt="">
                </div>
            </div>

            <div class='header'>
                <h1>Berita</h1>
                <p>Layari berita lanjut dan tips pengurusan kewangan.</p>
                <a class='btn-main' href="news">Info Lanjut</a>
            </div>
        </div>
    </section>

    <section class='cta-career' style="background-image: url('img/cta-career-bg.jpg')">
        <div class='container'>
            <div class='content'>
                <h2><span>Bina Kejaya</span> anda di <br><span>DMC FinCap</span>.</h2>
                <img src="img/caret-right.svg" alt="">
            </div>
        </div>
        <img class='dots-bg' src="img/dots.svg" alt="">
    </section>
</main>

<?php include 'component/footer.php'; ?>