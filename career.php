<?php
$pageTitle = "Karier";
$pageDescription = "This is the Karier page of our website.";
include 'component/header.php';
?>

<main id="primary" class="site-main main-career">
    <section class="header" style="background-image: url('img/career-sect1-bg.jpg')">
        <div class="container">
            <div class="content">
                <h1>Pasukan Hebat Merupakan Kunci Kejayaan Kami</h1>
                <p>
                    Kami sentiasa bersatu hati dan memberi komitmen yang berterusan bagi memastikan syarikat akan terus berdaya maju.
                </p>
            </div>
        </div>
    </section>

    <section class="section1">
        <div class="container">
            <h1 class="section-title">Budaya Kami</h1>
            <div class="tab-container">
                <div class="tab people-btn active">Pelanggan Pertama</div>
                <div class="tab respect-btn">Hormat</div>
                <div class="tab rapid-btn">Cepat</div>
                <div class="tab team-btn">Semangat Berpasukan</div>
                <div class="tab fun-btn">Semangat</div>
            </div>

            <div class="content-container owl-carousel culture-container">
                <div class="single-content">
                    <h2>Pelanggan Pertama</h2>
                    <p>
                        Keutamaan utama kami ialah mengutamakan pelanggan dan keperluan mereka. Kami sentiasa bersedia dan bersedia meluangkan masa untuk pelanggan dan rakan sekerja kami
                    </p>
                </div>
                <div class="single-content">
                    <h2>Hormat</h2>
                    <p>
                        Mengamalkan piawaian etika tertinggi, bertindak dengan jujur, adil, dan berintegriti dalam semua aspek kerja
                    </p>
                </div>
                <div class="single-content">
                    <h2>Cepat</h2>
                    <p>
                        Berusaha untuk menghasilkan kerja yang bermutu tinggi secara konsisten, melebihi jangkaan dan memberikan hasil bermutu
                    </p>
                </div>
                <div class="single-content">
                    <h2>Semangat Berpasukan</h2>
                    <p>
                        Memupuk semangat kerjasama, secara aktif menyumbang kepada usaha pasukan, dan menyokong rakan sekerja dalam mencapai matlamat bersama
                    </p>
                </div>
                <div class="single-content">
                    <h2>Semangat</h2>
                    <p>
                        Sentiasa bersikap positif, menunjukkan daya tahan dalam menghadapi cabaran. Bersama-sama, kita dapat mencapai perkara yang hebat
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section2">
        <div class="container">
            <h1 class="section-title">Pasukan Kami</h1>
            <div class="team-container">
                <div class="single-team">
                    <img src="img/career-customer-service.jpg" alt="">
                    <h3>Perkhidmatan Pelanggan</h3>
                </div>
                <div class="single-team">
                    <img src="img/career-it.jpg" alt="">
                    <h3>IT</h3>
                </div>
                <div class="single-team">
                    <img src="img/career-digital-marketing.jpg" alt="">
                    <h3>Pemasaran Digital</h3>
                </div>
                <div class="single-team">
                    <img src="img/career-finance.jpg" alt="">
                    <h3>Kewangan</h3>
                </div>
                <div class="single-team">
                    <img src="img/career-sumber-manusia.jpg" alt="">
                    <h3>Sumber Manusia</h3>
                </div>
                <div class="single-team">
                    <img src="img/career-process-credit.jpg" alt="">
                    <h3>Pemprosesan Kredit</h3>
                </div>
                <div class="single-team">
                    <img src="img/career-hr.jpg" alt="">
                    <h3>Jualan</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="section3">
        <div class="container">
            <img src="img/career-sect3-img.jpg" alt="">
            <div class="content-container">
                <h1>Program Internship</h1>
                <p>
                    Kami benar-benar menghargai pelatih kami, idea inovatif mereka, perspektif segar dan kesediaan untuk mencuba perkara baru.
                </p>
                <a href="#anchor-career-form" class='btn-main'>Sertai kami</a>
            </div>
        </div>
    </section>

    <section class="section-form" id="anchor-career-form">
        <div class="container">
            <div class="img" style="background-image: url('img/form-bg.jpg')">
                <h1>
                    <span>Mulakan</span> Kerjaya anda dengan kami.
                </h1>
            </div>
            <div class="form">
                <form id="careerForm">
                    <h2>Kami ingin mendengar tentang anda</h2>
                    <input type="text" name="name" id="name" placeholder="Nama*" required>
                    <select name="interest" id='interest' placeholder="Berminat dalam*" required>
                        <option value="" disabled selected hidden>Berminat dalam*</option>
                        <option value="Intern">Intern</option>
                        <option value="Sepenuh Masa">Sepenuh Masa</option>
                    </select>
                    <input type="email" name="email" id="email" placeholder="Emel*" required>
                    <input type="tel" name="tel" id="tel" placeholder="No. Telefon*" required>
                    <div class="form-group full-width">
                        <label for="resume">Muat Naik Resume (PDF/Word):*</label>
                        <input type="file" id="resume" name="resume" accept=".doc,.docx,.xml,.pdf,application/msword,application/pdf" required>
                        <p class="email-note">Sila hantar resume anda ke emel <a href="mailto:hr@dmcfincap.com">hr@dmcfincap.com</a></p>
                    </div>
                    <textarea name="message" id="message" cols="30" rows="10" required placeholder="Sila beritahu kami sedikit tentang anda, mengapa anda sesuai dan bagaimana anda mendengarnya tentang kami."></textarea>
                    <div class="form-alert-container"></div>
                    <!-- <button type="button" id="sendEmail">Hantar</button> -->
                    <div class="form-group full-width">
                        <button class="g-recaptcha" data-sitekey="6Lc1GxwpAAAAAMUxjgGvi3CIWM7GJyAEMtPieQmC" data-callback='sendEmail' data-action='submit'>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<script>
    $(document).ready(function() {
        // Carousel
        var owl = $('.owl-carousel.culture-container');
        owl.owlCarousel({
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                    loop: true,
                    mouseDrag: true,
                    dots: false
                },
                // breakpoint from 992 up
                992: {
                    items: 1,
                    loop: true,
                    mouseDrag: false,
                    dots: false
                }
            }
        });

        $('.people-btn').click(function() {
            owl.trigger('to.owl.carousel', [0, 300]);
        })
        $('.respect-btn').click(function() {
            owl.trigger('to.owl.carousel', [1, 300]);
        })
        $('.rapid-btn').click(function() {
            owl.trigger('to.owl.carousel', [2, 300]);
        })
        $('.team-btn').click(function() {
            owl.trigger('to.owl.carousel', [3, 300]);
        })
        $('.fun-btn').click(function() {
            owl.trigger('to.owl.carousel', [4, 300]);
        })

        $('.main-career .tab').click(function() {
            $('.main-career .tab.active').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>

<?php include 'component/footer.php'; ?>