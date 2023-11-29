<?php
$pageTitle = "Berita";
$pageDescription = "This is the Berita page of our website.";
include 'component/header.php';
?>

<main id="primary" class="site-main main-news">
    <section class="header">
        <div class="container">
            <h1>Mewujudkan Masa Depan Kewangan yang Inklusif</h1>

            <div class="details-container">
                <div class="content">
                    <h2>Kebaikan Meyertai Program Harapan Kedua</h2>
                    <p>
                        Program Harapan kedua menawarkan penyelesaian menyeluruh untuk individu yang telah disenaraihitamkan oleh Institusi Kewangan, membantu mereka membina kehidupan yang stabil melalui pengurusan kewangan yang berkesan.
                    </p>

                    <ul>
                        <li>Bebas rekod / nama dari senaraihitam Institusi Kewangan dan syarikat kredit</li>
                        <li>Pendapatan bersih (gaji bawa pulang) peserta program dijumlahkan bersama</li>
                        <li>Memberi harapan kedua kepada peserta program untuk memohon pembiayaan baru dari Institusi Kewangan</li>
                        <li>Peluang terbaik untuk meningkatkan kualiti hidup peserta program serta keluarga</li>
                    </ul>
                </div>
                <img src="img/news-sect1-bg.png" alt="">
            </div>
        </div>
    </section>

    <section class="section1">
        <div class="container">
            <div class="img-container" style="background-image: url('img/news-sect2-bg.jpg')">
                <h2>Kesan Negatif Akibat Hutang Berpanjangan</h2>
            </div>
            <div class="details-container">
                <p>
                    Menurut tinjauan dalam talian baru-baru ini oleh Agensi Kaunseling & Pengurusan Kredit, lebih daripada 80% responden mengatakan bahawa prestasi kerja mereka telah terjejas akibat beban kewangan pembiayaan.
                </p>

                <ul>
                    <li>Prestasi kerja seseorang itu terjejas kerana mereka tidak dapat menumpukan perhatian pada tugas mereka kerana masalah pengurusan kewangan yang dihadapi</li>
                    <li>Hilang kelayakan untuk memohon pembiayaan baru dari Institusi Kewangan Malaysia</li>
                    <li>Mula menjauhkan diri dari keluarga dan rakan-rakan kerana berasa malu serta kurang keyakinan</li>
                    <li>Sering rasa tidak tenang dan tertekan disebabkan oleh tidak dapat membuat pembayaran pembiayaan</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section2">
        <div class="container">
            <div class="img-container">
                <div class="left">
                    <img src="img/women-excited.jpg" alt="">
                </div>
                <div class="right">
                    <div class="counter">
                        <span>5000+</span>
                        <p>Pelanggan Berpuas Hati</p>
                    </div>
                    <img src="img/asian-family.jpg" alt="">
                </div>
            </div>
            <div class="owl-carousel review-container">
                <div class="single-reivew">
                    <p>
                        "Sebelum ini, saya telah disenaraihitamkan oleh dua
                        institusi kewangan kerana tidak dapat membayar hutang
                        pembiayaan saya. Ini menyebabkan saya berada dalam
                        keadaan yang sukar. Walau bagaimanapun, selepas
                        menerima bantuan dan bimbingan daripada DMC Fincap
                        untuk isu pengurusan hutang saya, saya dapat
                        memperoleh semula kehidupan yang aman. Hasil yang
                        paling ketara ialah nama saya tidak lagi dalam senarai
                        hitam institusi kewangan."
                    </p>
                    <h3>Puan Suhaitinie</h3>
                </div>
                <div class="single-reivew">
                    <p>
                        "Sebagai seorang kakitangan kerajaan, saya pada
                        mulanya tidak percaya bahawa penggunaan kad kredit
                        akan menyebabkan nama saya disenaraihitamkan oleh
                        institusi kewangan. Namun, kadar faedah yang tinggi
                        menyukarkan saya untuk membuat bayaran bulanan.
                        Syukurlah, selepas mendapatkan bantuan daripada DMC
                        Fincap, saya kini tenang kerana nama saya tidak lagi
                        disenaraihitamkan oleh institusi kewangan."
                    </p>
                    <h3>Puan Norazizah</h3>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    $(document).ready(function() {
        $(".owl-carousel.review-container").owlCarousel({
            items: 1,
            loop: true,
            dots: true
        });
    });
</script>

<?php include 'component/footer.php'; ?>
