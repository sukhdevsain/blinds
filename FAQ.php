<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include 'links.php';
    ?>

</head>

<body>
    <?php
include 'header.php';
?>
    <!-- Banner Section -->
    <section class="banner d-flex align-items-center position-relative">
        <!-- Background Image -->
        <img src="./images/FAQ-banner-img.png"
            class="banner-img position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Banner Image">
        <!-- Overlay -->
        <div class="banner-overlay position-absolute top-0 start-0 w-100 h-100"></div>
        <!-- Content -->
        <div class="container position-relative banner-header">
            <div class="mb-3">
                <a href="#" class="text-white text-decoration-none fw-bold primary-font">Home</a>
                <span class="mx-2 text-white fw-bold">|</span>
                <a href="#" class="text-white text-decoration-none fw-bold primary-font">FAQ</a>
            </div>
            <h1 class="mb-3 text-white fw-normal"><b>FAQ</b></h1>
            <p class="mb-0 text-white fw-normal primary-font banner-pessage">Faux wood shutters deliver the traditional
                elegance of real wood shutters at a greatly reduced cost. Faux wood shutters also resist fading,
                warping,
                yellowing, scratching, and moisture damage, making them a worthwhile investment for your home.</p>
        </div>
    </section>
    <!-- Banner end -->
    <section class="faq-section mt-5">
        <div class="container px-4">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-8 mb-5">
                    <div class="faq-content">
                        <div class="d-flex justify-content-between">
                            <h2 class="fw-semibold mb-4 fs-1">Frequently<br>Asked Questions</h2>
                            <div class="d-flex justify-content-evenly">
                                <button class="btn btn-outline-dark pt-1 rounded-0 px-4"
                                    style="height: 50px; width: 178.6px"><a href="#"
                                        class="text-decoration-none text-black">INSTAGRAM</a></button>
                                <button
                                    class="btn-bg-primary main-font d-flex align-items-center justify-content-center text-white border-0 fs-6 fw-medium"
                                    style="height: 50px; width: 269.05px">Explore More</button>
                                <button class="btn btn-outline-dark rounded-0 px-4"
                                    style="height: 50px; width: 178.6px"><a href="#"
                                        class="text-decoration-none text-black">FACEBOOK</a></button>
                            </div>
                        </div>
                        <div class=" accordion-flush" id="faqAccordion">
                            <!-- FAQ Item Start -->
                            <div class="accordion-item border mb-4 mt-5">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed fw-normal py-3 px-4" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false"
                                        aria-controls="faq1">
                                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Labore.
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body lh-base">
                                        <p class="p-3 fw-normal fs-6">So how did the classical Latin become so
                                            incoherent? According to McClintock, a 15th
                                            century typesetter likely scrambled part of Cicero's De Finibus in order to
                                            provide placeholder
                                            text to mockup various fonts for a type specimen book. It's difficult to
                                            find examples of lorem
                                            ipsum in use before Letraset made it popular as a dummy text in says he
                                            remembers coming.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 2 -->
                            <div class="accordion-item border mb-4 bg-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-3 px-4 fw-normal" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false"
                                        aria-controls="faq2">
                                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Labore.
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body lh-base">
                                        <p class="p-3 fw-normal fs-6">So how did the classical Latin become so
                                            incoherent? According to McClintock, a 15th
                                            century typesetter likely scrambled part of Cicero's De Finibus in order to
                                            provide placeholder
                                            text to mockup various fonts for a type specimen book. It's difficult to
                                            find examples of lorem
                                            ipsum in use before Letraset made it popular as a dummy text in says he
                                            remembers coming.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 3 -->
                            <div class="accordion-item border mb-4 bg-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-3 px-4 fw-normal" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                        aria-controls="faq3">
                                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Labore.
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body lh-base">
                                        <p class="p-3 fw-normal fs-6">So how did the classical Latin become so
                                            incoherent? According to McClintock, a 15th
                                            century typesetter likely scrambled part of Cicero's De Finibus in order to
                                            provide placeholder
                                            text to mockup various fonts for a type specimen book. It's difficult to
                                            find examples of lorem
                                            ipsum in use before Letraset made it popular as a dummy text in says he
                                            remembers coming.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 4 -->
                            <div class="accordion-item border mb-4 bg-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-3 px-4 fw-normal" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false"
                                        aria-controls="faq4">
                                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Labore.
                                    </button>
                                </h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body lh-base">
                                        <p class="p-3 fw-normal fs-6">So how did the classical Latin become so
                                            incoherent? According to McClintock, a 15th
                                            century typesetter likely scrambled part of Cicero's De Finibus in order to
                                            provide placeholder
                                            text to mockup various fonts for a type specimen book. It's difficult to
                                            find examples of lorem
                                            ipsum in use before Letraset made it popular as a dummy text in says he
                                            remembers coming.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 5 -->
                            <div class="accordion-item border mb-4 bg-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-3 px-4 fw-normal" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false"
                                        aria-controls="faq5">
                                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Labore.
                                    </button>
                                </h2>
                                <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body lh-base">
                                        <p class="p-3 fs-6">So how did the classical Latin become so incoherent?
                                            According to McClintock, a 15th
                                            century typesetter likely scrambled part of Cicero's De Finibus in order to
                                            provide placeholder
                                            text to mockup various fonts for a type specimen book. It's difficult to
                                            find examples of lorem
                                            ipsum in use before Letraset made it popular as a dummy text in says he
                                            remembers coming.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 6 -->
                            <div class="accordion-item border mb-4 bg-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-3 px-4 fw-normal" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false"
                                        aria-controls="faq6">
                                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Labore.
                                    </button>
                                </h2>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body lh-base">
                                        <p class="p-3 fw-normal fs-6">So how did the classical Latin become so
                                            incoherent? According to McClintock, a 15th
                                            century typesetter likely scrambled part of Cicero's De Finibus in order to
                                            provide placeholder
                                            text to mockup various fonts for a type specimen book. It's difficult to
                                            find examples of lorem
                                            ipsum in use before Letraset made it popular as a dummy text in says he
                                            remembers coming.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 7 -->
                            <div class="accordion-item border mb-4 bg-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-3 px-4 fw-normal" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq7" aria-expanded="false"
                                        aria-controls="faq7">
                                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Labore.
                                    </button>
                                </h2>
                                <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body lh-base">
                                        <p class="p-3 fw-normal f-6">So how did the classical Latin become so
                                            incoherent? According to McClintock, a 15th
                                            century typesetter likely scrambled part of Cicero's De Finibus in order to
                                            provide placeholder
                                            text to mockup various fonts for a type specimen book. It's difficult to
                                            find examples of lorem
                                            ipsum in use before Letraset made it popular as a dummy text in says he
                                            remembers coming.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 8 -->
                            <div class="accordion-item border mb-4 bg-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-3 px-4 fw-normal" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq8" aria-expanded="false"
                                        aria-controls="faq8">
                                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Labore.
                                    </button>
                                </h2>
                                <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body lh-base">
                                        <p class="p-3 fw-normal fs-6">So how did the classical Latin become so
                                            incoherent? According to McClintock, a 15th
                                            century typesetter likely scrambled part of Cicero's De Finibus in order to
                                            provide placeholder
                                            text to mockup various fonts for a type specimen book. It's difficult to
                                            find examples of lorem
                                            ipsum in use before Letraset made it popular as a dummy text in says he
                                            remembers coming.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 9 -->
                            <div class="accordion-item border mb-4 bg-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-3 px-4 fw-normal" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq9" aria-expanded="false"
                                        aria-controls="faq9">
                                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Labore.
                                    </button>
                                </h2>
                                <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body lh-base">
                                        <p class="p-3 fw-normal fs-6">So how did the classical Latin become so
                                            incoherent? According to McClintock, a 15th
                                            century typesetter likely scrambled part of Cicero's De Finibus in order to
                                            provide placeholder
                                            text to mockup various fonts for a type specimen book. It's difficult to
                                            find examples of lorem
                                            ipsum in use before Letraset made it popular as a dummy text in says he
                                            remembers coming.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item 10 -->
                            <div class="accordion-item border mb-4 bg-white">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed py-3 px-4 fw-normal" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq10" aria-expanded="false"
                                        aria-controls="faq10">
                                        Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Labore.
                                    </button>
                                </h2>
                                <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body lh-base">
                                        <p class="p-3 fw-normal fs-6">So how did the classical Latin become so
                                            incoherent? According to McClintock, a 15th
                                            century typesetter likely scrambled part of Cicero's De Finibus in order to
                                            provide placeholder
                                            text to mockup various fonts for a type specimen book. It's difficult to
                                            find examples of lorem
                                            ipsum in use before Letraset made it popular as a dummy text in says he
                                            remembers coming.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Accordion -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
include 'footer.php';
?>
</body>

</html>