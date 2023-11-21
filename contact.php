<?php
$pageTitle = "Hubungi Kami";
$pageDescription = "This is the Hubungi Kami page of our website.";
include 'component/header.php';
?>

<main id="primary" class="site-main main-contact">
    <section class="header" style="background-image: url('img/contact-sect1-bg.jpg')">
        <div class="container">
            <h1>Hubungi Kami</h1>

            <div class="details-container">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10119.984474005523!2d101.58635510470559!3d3.1544013077823965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4f9947537d89%3A0x2dd3a1834aa3b356!2sDMC%20Fincap%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1700275636346!5m2!1sen!2smy" width="600" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="contact-container">
                    <div class="single-details">
                        <div class="icon-container">
                            <iconify-icon icon="uil:location-pin-alt" style="color: #fabb64;" width="24" height="24"></iconify-icon>
                        </div>
                        <div class="detail-container">
                            <h3>Alamat</h3>
                            <p>
                                45-M Floor M, Jln PJU 5/21,<br>
                                The Strands, Kota Damansara,<br>
                                47810 Petaling Jaya, Selangor
                            </p>
                        </div>
                    </div>

                    <div class="single-details">
                        <div class="icon-container">
                            <iconify-icon icon="uil:phone-volume" style="color: #fabb64;" width="24" height="24"></iconify-icon>
                        </div>
                        <div class="detail-container">
                            <h3>Telefon</h3>
                            <a href="tel:+60389663700">03-8966 3700</a>
                        </div>
                    </div>

                    <div class="single-details">
                        <div class="icon-container">
                            <iconify-icon icon="uil:envelope" style="color: #fabb64;" width="24" height="24"></iconify-icon>

                        </div>
                        <div class="detail-container">
                            <h3>Emel</h3>
                            <a href="mailto:admin@dmcfincap.com">admin@dmcfincap.com</a><br>
                            <a href="mailto:help@dmcfincap.com">help@dmcfincap.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section1" style="background-image: url('img/contact-sect2-bg.png')">
        <div class="container">
            <h1>Kami telah mendapat kepercayaan lebih daripada <span>5000</span> pelanggan.</h1>
            <div class="counter-container">
                <div class="single-counter">
                    <span class='count' data-counter-target="7519">0</span>
                    <p>projek yang telah siap</p>
                </div>

                <div class="single-counter">
                    <span class='count' data-counter-target="5591">0</span>
                    <p>pelanggan yang berpuas hati</p>
                </div>

                <div class="single-counter">
                    <span class='count' data-counter-target="55">0</span>
                    <p>pekerja yang mahir</p>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    $(document).ready(function() {
        new Counter('.count');
    });
</script>
<?php include 'component/footer.php'; ?>