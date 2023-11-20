<?php include 'component/header.php'; ?>

<main id="primary" class="site-main main-career">
    <section class="header" style="background-image: url('img/career-sect1-bg.jpg')">
        <div class="container">
            <div class="content">
                <h1>Pasukan Hebat Kami Adalah Kunci Untuk Kejayaan Kami</h1>
                <p>
                    Setiap seorang daripada kami tidak kira jabatan atau senioriti mereka memberi komited yang berterusan inovasi dan pertumbuhan yang tinggi.
                </p>
            </div>
        </div>
    </section>

    <section class="section1">
        <div class="container">
            <h1 class="section-title">Our Culture</h1>
            <div class="tab-container">
                <div class="tab people-btn active">People</div>
                <div class="tab respect-btn">Respect</div>
                <div class="tab rapid-btn">Rapid</div>
                <div class="tab team-btn">Team Spirit</div>
                <div class="tab fun-btn">Serious Fun</div>
            </div>

            <div class="content-container owl-carousel">
                <div class="single-content">
                    <h2>People</h2>
                    <p>
                        We put our customers and their needs first. We're always prepared to make time for our customers and each other
                    </p>
                </div>
                <div class="single-content">
                    <h2>Respect</h2>
                    <p>
                        2 We put our customers and their needs first. We're always prepared to make time for our customers and each other
                    </p>
                </div>
                <div class="single-content">
                    <h2>Rapid</h2>
                    <p>
                        3 We put our customers and their needs first. We're always prepared to make time for our customers and each other
                    </p>
                </div>
                <div class="single-content">
                    <h2>Team Spirit</h2>
                    <p>
                        4 We put our customers and their needs first. We're always prepared to make time for our customers and each other
                    </p>
                </div>
                <div class="single-content">
                    <h2>Serious Fun</h2>
                    <p>
                        5 We put our customers and their needs first. We're always prepared to make time for our customers and each other
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section2">
        <div class="container">
            <h1 class="section-title">Our Teams</h1>
            <div class="team-container">
                <div class="single-team">
                    <img src="img/career-customer-service.jpg" alt="">
                    <h3>Customer Service</h3>
                </div>
                <div class="single-team">
                    <img src="img/career-it.jpg" alt="">
                    <h3>IT</h3>
                </div>
                <div class="single-team">
                    <img src="img/career-digital-marketing.jpg" alt="">
                    <h3>Digital Marketing</h3>
                </div>
                <div class="single-team">
                    <img src="img/career-finance.jpg" alt="">
                    <h3>Finance</h3>
                </div>
                <div class="single-team">
                    <img src="img/career-hr.jpg" alt="">
                    <h3>Human Resource</h3>
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
                <a href="" class='btn-main'>Sertai kami</a>
            </div>
        </div>
    </section>

    <section class="section-form">
        <div class="container">
            <div class="img" style="background-image: url('img/form-bg.jpg')">
                <h1>
                    Mulakan Kerjaya anda dengan kami.
                </h1>
            </div>
            <div class="form">
                <form action="">
                    <h2>Kami ingin mendengar tentang anda</h2>
                    <input type="text" name="name" id="name" placeholder="Nama*" required>
                    <input type="text" name="interest" id="interest" placeholder="Berminat dalam*" required>
                    <input type="email" name="email" id="email" placeholder="Emel*" required>
                    <input type="tel" name="tel" id="tel" placeholder="No. Telefon*" required>
                    <textarea name="" id="" cols="30" rows="10" required placeholder="Sila beritahu kami sedikit tentang anda, mengapa anda sesuai dan bagaimana anda mendengarnya tentang kami."></textarea>
                    <button type="submit">Hantar</button>
                </form>
            </div>
        </div>
    </section>
</main>

<script>
    $(document).ready(function() {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                    loop: true,
                    mouseDrag: true,
                },
                // breakpoint from 992 up
                992: {
                    items: 1,
                    loop: true,
                    mouseDrag: false,
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