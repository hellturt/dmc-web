$(document).ready(function () {
    // modal
    let closeState = sessionStorage.getItem("modal-close");
    if (!closeState) {
        $('.modal-container').addClass('active');
        $('body').addClass('pause');
    }

    $('#modal-close').click(function () {
        sessionStorage.setItem("modal-close", true);
        $('.modal-container').hide()
        $('body').removeClass('pause');
    })

    // Career Form
    $('#email, #name, #tel, #interest, #message').click(function () {
        $('.form-alert-container').removeClass('active success fail alert');
        $('.form-alert-container').empty();
    })

    $('#sendEmail').click(function () {
        // Collect form data
        var email = $('#email').val();
        var name = $('#name').val();
        var phone = $('#tel').val();
        var subject = 'DMC FinCap Web Career Form';
        var interest = $('#interest').val();
        var message = $('#message').val();

        if (!(email && name && phone && subject && message)) {
            $('.form-alert-container').append('Sila isi semua maklumat yang diperlukan.')
            $('.form-alert-container').addClass('active alert')
        } else {
            var compiledMessage = `
                Message from DMC Web Career<br/><br/>
                Name: ${name}<br/>
                Email: ${email}<br/>
                Phone No.: ${phone}<br/>
                -------------------------<br/>
                Interest in: ${interest}<br/>
                Message: ${message}
            `

            // Send data to the server
            $.post('send_email.php', {
                email: email,
                subject: subject,
                message: compiledMessage
            }, function (response) {
                if (response === 'success') {
                    // show success message
                    $('.form-alert-container').append('Mesej telah berjaya dihantar. Terima Kasih.')
                    $('.form-alert-container').addClass('active success')
                    // clear form
                    $('#email').val('');
                    $('#name').val('');
                    $('#tel').val('');
                    $('#interest').val('');
                    $('#message').val('');
                } else {
                    // show error message
                    $('.form-alert-container').append('Mesej tidak berjaya dihantar. Sila cuba sebentar lagi.')
                    $('.form-alert-container').addClass('active fail')
                }

                setTimeout(() => {
                    $('.form-alert-container').removeClass('active success fail alert');
                    $('.form-alert-container').empty();
                }, 6000);
            });
        }
    });


    // Scroll reveal
    ScrollReveal({
        duration: 600,
        easing: 'ease-in-out',
        reset: true
    });
    var slideRight = {
        distance: '5%',
        origin: 'left',
        opacity: 0
    };
    var slideLeft = {
        distance: '5%',
        origin: 'right',
        opacity: 0
    };
    var slideUp = {
        distance: '5%',
        origin: 'bottom',
        opacity: 0
    };
    var slideDown = {
        distance: '20%',
        origin: 'top',
        opacity: 0
    };

    // GLOBAL
    ScrollReveal().reveal('.site-header', slideDown)
    ScrollReveal().reveal('.modal-container', slideUp)


    // Home
    ScrollReveal().reveal('.cta-secondHope .column-content', slideRight)
    ScrollReveal().reveal('.cta-secondHope .img-content', { ...slideUp, delay: 300 })
    ScrollReveal().reveal('.cta-about .column-img', slideRight)
    ScrollReveal().reveal('.cta-about .column-content', { ...slideUp, delay: 300 })
    ScrollReveal().reveal('.cta-product .column-content', slideRight)
    ScrollReveal().reveal('.cta-news .single-news:nth-child(1)', slideUp)
    ScrollReveal().reveal('.cta-news .single-news:nth-child(2)', { ...slideUp, delay: 300 })
    ScrollReveal().reveal('.cta-news .single-news:nth-child(3)', { ...slideUp, delay: 600 })
    ScrollReveal().reveal('.cta-news .header', slideRight)
    ScrollReveal().reveal('.cta-career .content', slideRight)

    // Second Hope
    ScrollReveal().reveal('.header .container', slideRight)
    ScrollReveal().reveal('.second-hope-content .single-step:nth-child(1)', slideUp)
    ScrollReveal().reveal('.second-hope-content .single-step:nth-child(2)', { ...slideUp, delay: 200 })
    ScrollReveal().reveal('.second-hope-content .single-step:nth-child(3)', slideUp)
    ScrollReveal().reveal('.second-hope-content .single-step:nth-child(4)', { ...slideUp, delay: 200 })
    ScrollReveal().reveal('.second-hope-content .single-step:nth-child(5)', slideUp)
    ScrollReveal().reveal('.second-hope-content .single-step:nth-child(6)', { ...slideUp, delay: 200 })

    // Quick Cash
    ScrollReveal().reveal('.quick-cash-content h1', { ...slideRight, delay: 200 })
    ScrollReveal().reveal('.quick-cash-content .single-step', slideRight)
    ScrollReveal().reveal('.quick-cash-content .step-highlight', slideRight)

    // About
    ScrollReveal().reveal('.main-about .header .img-container', slideRight)
    ScrollReveal().reveal('.main-about .header .content', { ...slideLeft, delay: 200 })
    ScrollReveal().reveal('.main-about .section1 .content', slideRight)
    ScrollReveal().reveal('.main-about .section2 .left', slideRight)
    ScrollReveal().reveal('.main-about .section2 .right', slideUp)

    ScrollReveal().reveal('.main-about .section3 h1', slideRight)
    ScrollReveal().reveal('.main-about .section3 h2', { ...slideRight, delay: 200 })
    ScrollReveal().reveal('.main-about .section3 .single:nth-child(1)', { ...slideUp, delay: 200 })
    ScrollReveal().reveal('.main-about .section3 .single:nth-child(2)', { ...slideUp, delay: 300 })
    ScrollReveal().reveal('.main-about .section3 .single:nth-child(3)', { ...slideUp, delay: 400 })
    ScrollReveal().reveal('.main-about .section3 .single:nth-child(4)', { ...slideUp, delay: 500 })
    ScrollReveal().reveal('.main-about .section3 .single:nth-child(5)', { ...slideUp, delay: 600 })
    ScrollReveal().reveal('.main-about .section3 .single:nth-child(6)', { ...slideUp, delay: 700 })
    ScrollReveal().reveal('.main-about .section4 .content', slideRight)

    // News
    ScrollReveal().reveal('.main-news .section1', { ...slideUp, delay: 200 })
    ScrollReveal().reveal('.main-news .section2 .img-container', slideRight)
    ScrollReveal().reveal('.main-news .section2 .review-container', { ...slideUp, delay: 200 })

    // Career
    ScrollReveal().reveal('.main-career .section1', { ...slideUp, delay: 200 })
    ScrollReveal().reveal('.main-career .section2', { ...slideUp, delay: 200 })
    ScrollReveal().reveal('.main-career .section2 .single-team:nth-child(1)', { ...slideUp, delay: 200 })
    ScrollReveal().reveal('.main-career .section2 .single-team:nth-child(2)', { ...slideUp, delay: 300 })
    ScrollReveal().reveal('.main-career .section2 .single-team:nth-child(3)', { ...slideUp, delay: 400 })
    ScrollReveal().reveal('.main-career .section2 .single-team:nth-child(4)', { ...slideUp, delay: 500 })
    ScrollReveal().reveal('.main-career .section2 .single-team:nth-child(5)', { ...slideUp, delay: 600 })
    ScrollReveal().reveal('.main-career .section3 .content-container', slideUp)
    ScrollReveal().reveal('.main-career .section-form', slideRight)

    // Contact
    ScrollReveal().reveal('.main-contact .section1 h1', { ...slideRight, delay: 200 })
    ScrollReveal().reveal('.main-contact .section1 .single-counter:nth-child(1)', { ...slideUp, delay: 200 })
    ScrollReveal().reveal('.main-contact .section1 .single-counter:nth-child(2)', { ...slideUp, delay: 400 })
    ScrollReveal().reveal('.main-contact .section1 .single-counter:nth-child(3)', { ...slideUp, delay: 600 })
});