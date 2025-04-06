<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modern Layout</title>
  <?php
    include 'links.php';
  ?>
</head>

<body>

  <?php
        include 'header.php';      
      ?>

  <!-- banner-section-start -->
  <!-- Banner Section -->
  <section class="banner d-flex align-items-center  position-relative">
    <!-- Background Image -->
    <img src="./images/banner1.png" class="banner-img position-absolute top-0 start-0 w-100 h-100 object-fit-cover"
      alt="Banner Image">

    <!-- Overlay -->
    <div class="banner-overlay position-absolute top-0 start-0 w-100 h-100"></div>

    <!-- Content -->
    <div class="container position-relative banner-header">
      <div class="mb-3">
        <a href="#" class="text-white text-decoration-none fw-bold primary-font">Home</a>
        <span class="mx-2 text-white fw-bold">|</span>
        <a href="#" class="text-white text-decoration-none fw-bold primary-font">About Us</a>
      </div>
      <h1 class="mb-3 text-white fw-normal"><b>About</b> Smart Blinds</h1>
      <p class="mb-0 text-white fw-normal primary-font benner-pessage">Enim blandit volutpat, mascenas volutpat blandit
        aliquam Nulla at volutpat diam ut venenatis tellus in.</p>
    </div>
  </section>
  <!-- Banner end -->
  <!-- banner-sectionend -->

  <!-- About-section-start -->
  <div class="container about-section py-5">
    <div class="row container justify-content-center pe-0">
      <div class="">
        <div class="about-container position-relative">
          <div class="text-overlay pt-0 pb-5 z-2">
            <p class="h2 about-w-34">Pulvinar pellentesque habitant morbi tristique senectus et netus. Est ullamcorper
              eget.</p>
          </div>
          <div class="about-img w-100 d-block">
            <img src="./images/about.png" alt="Interior Design" class="w-100 d-block">
          </div>
          <div class="badge-box  badge-red text-start position-absolute fw-bold text-white align-items-center">
            <span class="fs-1">120+</span>
            <br>
            <span>Choose Our Product Every Day</span>
          </div>
          <div class="badge-box badge-blue text-start position-absolute top-0  fw-bold text-white align-items-center">
            <span class="fs-1">100%</span>
            <br>
            <span>Natural & Tested Product</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- About-section-end -->


  <!-- video-section -->
  <section class="container-fluid bg-white text-dark py-5 main-font">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 text-section position-relative p-4">
          <img src="./images/guote.svg" alt="Quote Icon" class="quote-icon d-block h-auto mb-3">
          <h2 class="fw-bold text-dark fst-italic">"At risus viverra adipiscing at in. <em>Lacinia quis vel eros donec
              ac.</em> Urna condimentum mattis pellentesque id nibh tortor id."</h2>
          <hr class="border-dark w-25">
          <p class="lead-passage fw-semibold">
            Cursus sit amet dictum sit amet justo. Est velit egestas dui id ornare arcu odio. Sit amet nulla facilisi
            morbi. Vitae ultricies leo integer malesuada.
            Diam vel quam elementum pulvinar etiam. Vel quam elementum pulvinar etiam non quam lacus. Elementum pulvinar
            etiam non quam lacus suspendisse faucibus.
          </p>
        </div>
        <div class="col-lg-6 col-md-12 image-section p-4">
          <img src="./images/video-sec.jpeg" alt="Interior Design" class="img-fluid video-height object-fit-cover">
        </div>
      </div>
    </div>
  </section>
  <!-- video-section-end -->

  <!-- Products-banner-start -->
  <section class="container-fluid mt-5 mb-5 bottom-section">
    <div class="container ">
      <div class="banner d-flex align-items-center justify-content-center w-100 vh-100">
        <div class="container text-start">
          <div class="content text-start">
            <h2 class="fw-bold">Discover Our Products</h2>
            <p class="lead w-lg-75 w-md-100">Phasellus egestas tellus rutrum tellus. Arcu cursus euismod quis viverra
              nibh cras
              pulvinar mattis.</p>
            <a href="#"
              class="btn btn-danger text-decoration-none d-inline-block border-0 text-white btn-shop rounded-pill d-flex align-items-center justify-content-center w-md-50 p-2 mt-md-0">Go
              To Shop</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Products-banner-end -->
  <!-- Team-section-start -->
  <section class="team-section bg-white py-5">
    <div class="container">
      <!-- Section Header ms sethi-->
      <div class="text-center mb-5">
        <span class="team-label primary-text fw-semibold d-block text-uppercase">Team</span>
        <h2 class="team-title category-seo-text fw-bold">Meet Our Team</h2>
        <p class="team-description fs-6 lh-base my-0 mx-auto">
          At risus viverra adipiscing at in. Lacinia quis vel eros donec ac. Urna condimentum mattis pellentesque id
          nibh tortor id. Et netus et malesuada fames.
        </p>
      </div>

      <!-- Team Grid -->
      <div class="row">
        <!-- Team Leader - Left Side -->
        <div class="col-lg-6 mb-4 mb-lg-0">
          <div class="team-leader">
            <img src="./images/Video.png" alt="Team Leader" class="img-fluid">
          </div>
        </div>

        <!-- Team Members Grid - Right Side -->
        <div class="col-lg-6">
          <div class="row g-4">
            <!-- Team Member 1 -->
            <div class="col-md-6">
              <div
                class="team-member-card bg-white overflow-hidden d-flex align-items-center text-center flex-column position-relative">

                <img src="./images/img.png" alt="Team Member" class="img-fluid object-fit-cover w-100">
                <div class="member-info category-seo-text w-100 position-absolute bottom-0 start-50">
                  <h3>Marie Hill</h3>
                  <p>Manager</p>
                </div>
                <div class="social-icons position-absolute top-0  bg-white d-flex flex-column ">
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>

            <!-- Team Member 2 -->
            <div class="col-md-6">
              <div
                class="team-member-card bg-white overflow-hidden d-flex align-items-center text-center flex-column position-relative">
                <img src="./images/59122.png" alt="Team Member" class="img-fluid object-fit-cover w-100">
                <div class="member-info category-seo-text w-100 position-absolute bottom-0 start-50">
                  <h3>John Smith</h3>
                  <p>Developer</p>
                </div>
                <div class="social-icons position-absolute top-0  bg-white d-flex flex-column">
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>

            <!-- Team Member 3 -->
            <div class="col-md-6">
              <div
                class="team-member-card bg-white overflow-hidden d-flex align-items-center text-center flex-column position-relative">
                <img src="./images/img (1).png" alt="Team Member" class="img-fluid object-fit-cover w-100">
                <div class="member-info category-seo-text w-100 position-absolute bottom-0 start-50">
                  <h3>Sarah Johnson</h3>
                  <p>Designer</p>
                </div>
                <div class="social-icons position-absolute top-0  bg-white d-flex flex-column">
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>

            <!-- Team Member 4 -->
            <div class="col-md-6">
              <div
                class="team-member-card bg-white overflow-hidden d-flex align-items-center text-center flex-column position-relative">
                <img src="./images/img (2).png" alt="Team Member" class="img-fluid object-fit-cover w-100">
                <div class="member-info category-seo-text w-100 position-absolute bottom-0 start-50">
                  <h3>Emily Brown</h3>
                  <p>Marketing</p>
                </div>
                <div class="social-icons position-absolute top-0  bg-white d-flex flex-column">
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Carousel Indicators -->
      <div class="carousel-indicators position-static d-flex justify-content-center">
        <button class="active rounded-circle border-0 m-0 p-0"></button>
        <button class="rounded-circle border-0 m-0 p-0"></button>
        <button class="rounded-circle border-0 m-0 p-0"></button>
        <button class="rounded-circle border-0 m-0 p-0"></button>
      </div>
    </div>
  </section>

  <!-- Team-section-end -->
  <!-- FAQ-section-start -->
  <section class="main-FQA-section ">
    <div class=" py-3 py-lg-5 container">
      <div class="row g-4 g-lg-5 align-items-start pe-0 me-0">
        <!-- Image Column -->
        <div class="col-12 col-md-6 m-0 p-0">
          <div class="faq-image">
            <img src="./images/service.png" alt="Service professional" class="img-fluid w-100 rounded-0">
          </div>
        </div>

        <!-- FAQ Column -->
        <div class="col-12 col-md-6 m-0">
          <div class="faq-content mt-5">
            <h1 class="display-6 accordion-main fw-medium mb-3">Frequently Asked Questions</h1>
            <p class="lead mb-4 FAQ-passage">At risus viverra adipiscing at in. Lacinia quis vel eros donec ac. Urna
              condimentum mattis pellentesque id nibh tortor id. Et netus et malesuada fames pharetra convallis.</p>
            <div class="accordion-flush" id="accordionFlushExample">
              <!-- Free shopping -->
              <div class="accordion-item border mb-4 mt-5">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed fw-normal py-3 px-4 main-FQA-section" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                    Free Shipping.
                  </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body lh-base">
                    <p class="p-3 fw-normal fs-6">At risus viverra adipiscing at in. Lacinia quis vel eros donec ac. Urna condimentum mattis pellentesque.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ Item 2 -->
              <div class="accordion-item border mb-4">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed py-3 px-4 fw-normal main-FQA-section" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                    How Long Does Shipping Take?
                  </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body lh-base">
                    <p class="p-3 fw-normal fs-6">At risus viverra adipiscing at in. Lacinia quis vel eros donec ac. Urna condimentum mattis pellentesque.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ Item 3 -->
              <div class="accordion-item border mb-4">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed py-3 px-4 fw-normal main-FQA-section" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                    Prices & Payment?
                  </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body lh-base">
                    <p class="p-3 fw-normal fs-6">At risus viverra adipiscing at in. Lacinia quis vel eros donec ac. Urna condimentum mattis pellentesque.</p>
                  </div>
                </div>
              </div>
              <!-- FAQ Item 4 -->
              <div class="accordion-item border mb-4">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed py-3 px-4 fw-normal main-FQA-section" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                    Do you Ship Internationally?
                  </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                  <div class="accordion-body lh-base">
                    <p class="p-3 fw-normal fs-6">At risus viverra adipiscing at in. Lacinia quis vel eros donec ac. Urna condimentum mattis pellentesque.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- FAQ-section-end -->
  <!-- Footer-section0-start -->
  <?php
        include 'footer.php';      
      ?>
  <!-- Footer-section0-end -->

</body>

</html>