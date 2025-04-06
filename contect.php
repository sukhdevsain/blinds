<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include 'links.php';
    ?>
    <style>
        
    </style>
</head>

<body>
    <?php
        include 'header.php';
    ?>


    <section class="banner d-flex align-items-center  position-relative">
        <!-- Background Image -->
        <img src="./images/Our-team-banner-img.png"
            class="banner-img position-absolute top-0 start-0 w-100 h-100 object-fit-cover">

        <!-- Overlay -->
        <div class="banner-overlay position-absolute top-0 start-0 w-100 h-100"></div>

        <!-- Content -->
        <div class="container position-relative banner-header">
            <div class="mb-3">
                <a href="#" class="text-white text-decoration-none fw-bold primary-font">Home</a>
                <span class="mx-2 text-white fw-bold">|</span>
                <a href="#" class="text-white text-decoration-none fw-bold primary-font">Blog</a>
            </div>
            <h1 class="mb-3 text-white fw-normal"><b>Our</b> Team</h1>
            <p class="mb-0 text-white fw-normal primary-font banner-pessage">Faux wood shutters deliver the traditional
                elegance of real wood shutters at a greatly reduced cost. Faux wood shutters also resist fading,
                warping, yellowing, scratching, and moisture damage, making them a worthwhile investment for your home.
            </p>
        </div>
    </section>


    <section class="container">
        <h2 class="text-center three-font fw-semiblod mt-5 mb-3">Get in Touch with Us</h2>
        <p class="w-50 text-center d-flex justify-content-center mx-auto my-auto fw-normal main-font-2">Sagittis purus sit amet volutpat consequat mauris. Pulvinar pellentesque habitant morbi tristique. Sem integer vitae justo eget magna.</p>
        <div class="mt-5"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2506055.609910454!2d2.639426882466808!3d52.16487638977695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7274e1604e6b5%3A0xd4fc6358e02b284c!2sEnded!5e0!3m2!1sen!2sin!4v1743867403767!5m2!1sen!2sin" width="1115" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </section>

    <section class="container">
    <div class="row mt-5 mb-5">
        <div class="col-9">
            <div class="row mb-5">
                <h1 class="main-font fouth-font">Contact Us</h1>
                <p class="main-font-2 primary-font fw-normal">Sagittis purus sit amet volutpat consequat mauris. Pulvinar pellentesque habitant morbi tristique. Sem integer vitae justo eget magna.</p>
            </div>
            <div class="row mb-5 mt-5 w-100">
                <div class="col-5">
                    <input type="text" class="form-control input-border-bottom border-0  shadow-none   rounded-0" placeholder="Your Name" aria-label="First name">
                </div>
                <div class="col-5">
                    <input type="text" class="form-control input-border-bottom border-0  shadow-none rounded-0" placeholder="Your Email" aria-label="Last name">
                </div>
            </div>
            <div class="col-10">
                <textarea class="form-control input-border-bottom border-0 shadow-none rounded-0 w-100" rows="6" placeholder="Message" id="floatingTextarea"></textarea>
            </div>
            <div class="text-left mt-5">
                <button class="btn-bg-primary main-font text-white rounded-pill border-0 fs-6 fw-medium">Sumbitted</button>
            </div>
        </div>
        <div class="col-3">
            <p class="h1 main-font">Address</p>
            <p class="main-font-2 secondary-font fw-medium">3245 Abbot Kinney BLVD - PH Venice, CA 124</p>
            <p class="mb-5 main-font-2 secondary-font fw-medium">76 East Houston Street New York City</p>

            <p class="h1 main-font">Contact</p>
            <p class="main-font-2 secondary-font fw-medium"><i class="bi bi-telephone primary-text pe-2"></i> Hotline: +01 234 567 890</p>
            <p class="main-font-2 secondary-font fw-medium"> <i class="bi bi-stopwatch primary-text pe-2"></i>Mon – Fri: 9:00 am - 6:00 pm
                                                <span class="ps-4">Saturday: 9:00 am - 4:00 pm</span></p>
            <p class="main-font-2 secondary-font fw-medium"><i class="bi bi-envelope-open primary-text pe-2 mb-5"></i>Send us an email</p>

            <div class="d-flex justify-content-start text-left mt-5">
                  <a href="#" class="primary-text"><i class="fab fa-instagram fs-4 pe-3"></i></a>
                  <a href="#" class="primary-text"><i class="fab fa-twitter fs-4"></i></a>
                  <a href="#" class="primary-text"><i class="fab fa-linkedin-in fs-4 ps-3"></i></a>
            </div>

        </div>
    </div>
    </section>


    <?php
        include 'footer.php';
    ?>
</body>

</html>