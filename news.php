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
                    <h2>Manfaat Menyertai Program Second Hope</h2>
                    <p>
                        Program Second Hope menawarkan satu bentuk penyelesaian menyeluruh bagi peminjam ingkar untuk membina kehidupan baru yang lebih terjamin.
                    </p>

                    <ul>
                        <li>Hapus rekod/nama dari senarai hitam institusi kewangan dan syarikat kredit.</li>
                        <li>Menambahkan jumlah pendapatan bersih (take-home pay) peserta program</li>
                        <li>Mewujudkan semula keupayaan untuk memohon bantuan kewangan daripada bank.</li>
                        <li>Peluang yang baik untuk meningkatkan kualiti hidup dan taraf hidup anda serta keluarga.</li>
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
                    Hasil kajian atas talian yang telah dilakukan oleh Agensi Kaunseling & Pengurusan Kredit (AKPK), lebih daripada 80% maklum balas yang diterima menyatakan bahawa beban pembiayaan telah mengganggu prestasi kerja mereka.
                </p>

                <ul>
                    <li>Prestasi kerja yang teruk disebabkan gagal untuk memberi tumpuan kerana bergelut dengan masalah yang dihadapi.</li>
                    <li>Menjauhkan diri daripada keluarga dan rakan-rakan kerana rasa malu dan kurang keyakinan.</li>
                    <li>Hilang kelayakan memohon pembiayaan yang baru.</li>
                    <li>Sering gemuruh dan rasa tertekan sehingga mempengaruhi kesihatan fizikal dan mental.</li>
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
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true
        });
    });
</script>

<?php include 'component/footer.php'; ?>