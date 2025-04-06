<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Blinds</title>
  <?php
    include 'links.php';
  ?>
</head>
<body>

      <?php
        include 'header.php';      
      ?>

  <!-- Banner-section-start -->
  <section class="homepage-hero w-100 pt-3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 p-1">
          <div class="ratio ratio-16x9">
            <img src="./images/banner.png" class="img-fluid object-fit-cover" alt="Hero Image">
          </div>
        </div>
        <div class="col-md-4 d-sm-flex flex-column align-items-center">
          <div class="ratio ratio-16x9 w-100 mb-3">
            <img src="./images/banner2.png" class="img-fluid object-fit-cover" alt="Image 2">
          </div>
          <div class="ratio ratio-16x9 w-100 pt-2">
            <img src="./images/banner3.png" class="img-fluid object-fit-cover" alt="Image 3">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Banner-section-End -->
  <!-- Categories-section-Start -->
  <section class="container  my-5 my-5 Categories-sec">
    <div class="row d-flex justify-content-around" style="padding: 12px;">
      <div class="container p-0">
        <h1 class=" mb-4 container p-0 fs-4 d-md-block">
          <b>Shop</b> Our Most Popular Categories <span class="text-danger">_ </span>
        </h1>
      </div>
      <div class="col-lg-2 col-md-4 col-6 mb-3">
        <div class="card bg-dark text-white border-0 rounded-3">
          <img src="./images/Categories1.png" class="card-img w-100 rounded-3">
          <div class="card-img-overlay fw-semibold fs-6 d-flex align-items-end justify-content-between">
            <img src="./images/Categories(1).png" class="">
            <p class="mb-0">
              <a class="text-white text-decoration-none" href="#">Shades <i class="bi bi-arrow-right"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6 mb-3">
        <div class="card bg-dark text-white border-0 rounded-3">
          <img src="./images/Categories2.png" class="card-img w-100 rounded-3">
          <div class="card-img-overlay fw-semibold fs-6 d-flex align-items-end justify-content-between">
            <img src="./images/cat.png" class="">
            <p class="mb-0">
              <a class="text-white text-decoration-none" href="#">Motorized <i class="bi bi-arrow-right"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6 mb-3 position-relative">
        <div class="position-absolute top-0 bg-danger text-white px-3 py-1 rounded-start z-1"> Special Buy </div>
        <div class="card bg-dark text-white border-0 rounded-3">
          <img src="./images/Categories3.png" class="card-img w-100 rounded-3">
          <div class="card-img-overlay fw-semibold fs-6 d-flex align-items-end justify-content-between">
            <img src="./images/Category (3).png" class="">
            <p class="mb-0">
              <a class="text-white text-decoration-none" href="#">Shutters <i class="bi bi-arrow-right"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6 mb-3">
        <div class="card bg-dark text-white border-0 rounded-3">
          <img src="./images/Categories4.png" class="card-img w-100 rounded-3">
          <div class="card-img-overlay fw-semibold fs-6 d-flex align-items-end justify-content-between">
            <img src="./images/Category (4).png" class="">
            <p class="mb-0">
              <a class="text-white text-decoration-none" href="#">Zebra Blinds <i class="bi bi-arrow-right"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-4 col-6 mb-3">
        <div class="card bg-dark text-white border-0 rounded-3">
          <img src="./images/Categories5.png" class="card-img w-100 rounded-3">
          <div class="card-img-overlay fw-semibold fs-6 d-flex align-items-end justify-content-between">
            <img src="./images/Category (2).png" class="">
            <p class="mb-0">
              <a class="text-white text-decoration-none" href="#">inspiration <i class="bi bi-arrow-right"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Categories-section-End -->
  <!-- Product-section-start -->
  <section class="product-showcase py-5 container">
    <div class="container">
      <!-- Hero Title -->
      <h1 class="text-center mb-4 fs-4 d-md-block">
        <span class="fw-bold text-black">Find Your</span>
        <span class="fw-normal text-black">Dream View</span>
      </h1>

      <!-- Search Bar -->
      <div class="search-container mx-auto my-0 mb-4">
        <div class="search-wrapper mx-auto my-0 position-relative    ">
          <input type="text" class="form-control border-0 fs-6 fw-medium shadow-sm pr-5" placeholder="Search Product.." id="searchInput">
          <button class="search-btn position-absolute top-50 translate-middle-y bg-transparent border-0 cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16">
              <path
                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
          </button>
        </div>
      </div>

      <!-- Category Filters -->
      <div class="filter-container text-center mb-5">
        <div class="filter-buttons d-flex d-inline-flex gap-3     flex-wrap gap-2">
          <button class="filter-btn border-0 shadow-sm active" data-category="all">All</button>
          <button class="filter-btn border-0 shadow-sm" data-category="shades">Shades</button>
          <button class="filter-btn border-0 shadow-sm" data-category="motorized">Motorized</button>
          <button class="filter-btn border-0 shadow-sm" data-category="shutters">Shutters</button>
          <button class="filter-btn border-0 shadow-sm" data-category="zebra">Zebra Blinds</button>
        </div>
      </div>

      <!-- Product Grid -->
      <div class="row g-4 mb-3" id="productGrid"></div>

      <!-- CTA Button -->
      <div class="text-center">
      <button class="btn-bg text-white border-0 fs-6 fw-medium">Explore More</button>
      </div>
    </div>
  </section>
  <!-- Product-section-end -->
  <!-- gallery-Section-start -->
  <section class="container  py-5">
    <div class="row me-0 mb-5">
      <div class="col-12 col-md-12">
        <h3 class="new-font fw-bold display-5">Inspiration for Your Space</h3>
        <p class="new-font-2 fw-normal">Ignite your creativity with our room inspiration collection. Explore endless design
          possibilities for your perfect space</p>
      </div>
      <div class="col-12 col-md-12 Inspiration-outer-sec  ">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 d-block">
            <div class="position-relative mb-2">
              <img src="./images/gallery1.png" alt="" class="w-100 rounded-20 h-150 object-fit-cover">
              <div class="pos-abs-6 text-danger position-absolute">
                <!-- <i class="bi bi-arrow-up-right-circle-fill"></i> -->
                <img class="fs-4" src="./images/Frame 33308.png" alt="">
              </div>
              <span class="bg-white position-absolute bottom-0 start-0 rounded-right d-flex align-items-center justify-content-center">BATHROOM</span>
            </div>
            <div class="position-relative mt-2">
              <img src="./images/gallery-3.png" alt="" class="w-100 rounded-20 h-200 ">
              <div class="pos-abs-6 text-danger position-absolute">
                <!-- <i class="bi bi-arrow-up-right-circle-fill"></i> -->
                <img class="fs-4" src="./images/Frame 33308.png" alt="">
              </div>
              <span class="bg-white position-absolute bottom-0 start-0 rounded-right d-flex align-items-center justify-content-center">BATHROOM</span>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 d-block">
            <div class="position-relative mb-2">
              <img src="./images/gallery-2.png" alt="" class="w-100 rounded-20 h-200 ">
              <div class="pos-abs-6 text-danger position-absolute">
                <!-- <i class="bi bi-arrow-up-right-circle-fill"></i> -->
                <img class="fs-4" src="./images/Frame 33308.png" alt="">
              </div>
              <span class="bg-white position-absolute bottom-0 start-0 rounded-right d-flex align-items-center justify-content-center">BATHROOM</span>
            </div>
            <div class="position-relative mt-2">
              <img src="./images/gallery-5.png" alt="" class="w-100 rounded-20 h-150 object-fit-cover ">
              <div class="pos-abs-6 text-danger position-absolute">
                <!-- <i class="bi bi-arrow-up-right-circle-fill"></i> -->
                <img class="fs-4" src="./images/Frame 33308.png" alt="">
              </div>
              <span class="bg-white position-absolute bottom-0 start-0 rounded-right d-flex align-items-center justify-content-center">BATHROOM</span>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-4 d-block">
            <div class="position-relative mb-2">
              <img src="./images/gallery-4.png" alt="" class="w-100 rounded-20 h-150 object-fit-cover ">
              <div class="pos-abs-6 text-danger position-absolute">
                <!-- <i class="bi bi-arrow-up-right-circle-fill"></i> -->
                <img class="fs-4" src="./images/Frame 33308.png" alt="">
              </div>
              <span class="bg-white position-absolute bottom-0 start-0 rounded-right d-flex align-items-center justify-content-center">BATHROOM</span>
            </div>
            <div class="position-relative mt-2">
              <img src="./images/gallery-6.png" alt="" class="w-100 rounded-20 h-200 ">
              <div class="pos-abs-6 text-danger position-absolute ">
                <!-- <i class="bi bi-arrow-up-right-circle-fill"></i> -->
                <img class="fs-4" src="./images/Frame 33308.png" alt="">
              </div>
              <span class="bg-white position-absolute bottom-0 start-0 rounded-right d-flex align-items-center justify-content-center">BATHROOM</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- gallery-Section-End -->
  <!-- Expertise-Section-start -->
  <section class="bg-content main-color my-5  ">
    <h2 class="text-center py-lg-5 fs-15 py-md-3">
      <b>We are the Experts</b> in Custom Blinds, Shades and Shutters
    </h2>
    <div class="container-fulid d-flex justify-content-center">
      <div class="row mx-100 m-0 p-0 text-center  container  justify-content-center">
        <div class="col-lg-4 col-md-6 pb-5">
          <div class="bg-white w-251 position-relative d-flex align-items-center justify-content-center m-auto mb-4">
            <div class="w-252 position-absolute top-0 start-0 bg-danger"></div>
            <span class="w-253">1</span>
          </div>
          <b class="mt-5">Rather Have A Pro Do It?</b>
          <p class="pt-1">Every Single Order Ships For Free. No <br> Minimums. No Tiers. No Fine Print <br> Whatsever
          </p>
        </div>
        <div class="col-lg-4 col-md-6 pb-5">
          <div class="bg-white w-251 position-relative d-flex align-items-center justify-content-center m-auto mb-4">
            <div class="w-252 position-absolute top-0 start-0 bg-danger"></div>
            <span class="w-253">2</span>
          </div>
          <b class="mt-5">Rather Have A Pro Do It?</b>
          <p class="pt-1">Every Single Order Ships For Free. No <br> Minimums. No Tiers. No Fine Print <br> Whatsever
          </p>
        </div>
        <div class="col-lg-4 col-md-6 pb-5">
          <div class="bg-white w-251 position-relative d-flex align-items-center justify-content-center m-auto mb-4">
            <div class="w-252 position-absolute top-0 start-0 bg-danger"></div>
            <span class="w-253">3</span>
          </div>
          <b class="mt-5">Rather Have A Pro Do It?</b>
          <p class="pt-1">Every Single Order Ships For Free. No <br> Minimums. No Tiers. No Fine Print <br> Whatsever
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Expertise-section-End -->
  <!-- slider-section-start -->
  <section class="slider-section bg-white main-slider">
    <h2 class="section-title fw-semibold text-center mb-5 fs-1">Start with these our curated spaces.</h2>
    <div class="slider-container position-relative mx-auto my-0 px-3 py-0">
      <button
        class="nav-btn position-absolute top-50 translate-middle-y bg-white border-0 cursor-pointer prev rounded-pill">
        <i class="bi bi-arrow-left rounded-pill"></i>
      </button>
      <div class="slider overflow-x-hidden  d-flex px-0 py-3 gap-3">
        <!-- Slide 1 -->
        <div class="slide position-relative overflow-hidden">
          <img class="w-100 object-fit-cover" src="./images/pgn-1.png" alt="Modern Interior">

          <div
            class="box-bottom bg-white position-absolute bottom-0 start-0 d-flex align-items-center justify-content-center wh-auto">
            Transform. Style. Inspire</div>
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 45%;left: 52%;;"
            data-product="Modern Sofa" data-category="Furniture" data-price="1299" data-discount="999">
            <div class="tooltip position-absolute bg-white p-3 ">
              <div class="product-name fw-semibold mb-1">Modern Sofa</div>
              <div class="product-category mb-2">Furniture</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$1,299</span>
                <span class="discounted fw-bold">$999</span>
              </div>
            </div>
          </div>

          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 12%;left: 70%;"
            data-product="Floor Lamp" data-category="Lighting" data-price="299" data-discount="199">
            <div class="tooltip position-absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Floor Lamp</div>
              <div class="product-category mb-2">Lighting</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$299</span>
                <span class="discounted fw-bold">$199</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide position-relative overflow-hidden">
          <img class="w-100 object-fit-cover" src="./images/pgn-1.png" alt="Luxury Interior">
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 40%; left: 30%;"
            data-product="Dining Table" data-category="Furniture" data-price="899" data-discount="699">
            <div class="tooltip position-absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Dining Table</div>
              <div class="product-category mb-2">Furniture</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$899</span>
                <span class="discounted fw-bold">$699</span>
              </div>
            </div>
          </div>


          <div
            class=" box-bottom bg-white position-absolute bottom-0 start-0 d-flex align-items-center justify-content-center wh-auto">
            Transform. Style. Inspire</div>
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 9%;left: 57%;;"
            data-product="Wall Art" data-category="Decor" data-price="399" data-discount="299">
            <div class="tooltip position-absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Wall Art</div>
              <div class="product-category mb-2">Decor</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$399</span>
                <span class="discounted fw-bold">$299</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide position-relative overflow-hidden">
          <img class="w-100 object-fit-cover" src="./images/pgn-1.png" alt="Minimalist Interior">
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 50%; left: 40%;"
            data-product="Coffee Table" data-category="Furniture" data-price="599" data-discount="449">
            <div class="tooltip position-absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Coffee Table</div>
              <div class="product-category mb-2">Furniture</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$599</span>
                <span class="discounted fw-bold">$449</span>
              </div>
            </div>
          </div>

          <div
            class="box-bottom bg-white position-absolute bottom-0 start-0 d-flex align-items-center justify-content-center wh-auto">
            Transform. Style. Inspire</div>

          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 80%; left: 70%;"
            data-product="Throw Pillows" data-category="Decor" data-price="79" data-discount="59">
            <div class="tooltip position-absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Throw Pillows</div>
              <div class="product-category mb-2">Decor</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$79</span>
                <span class="discounted fw-bold">$59</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="slide position-relative overflow-hidden">
          <img class="w-100 object-fit-cover" src="./images/pgn-1.png" alt="Scandinavian Interior">
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 35%; left: 25%;"
            data-product="Sideboard" data-category="Furniture" data-price="799" data-discount="599">
            <div class="tooltip position: absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Sideboard</div>
              <div class="product-category mb-2">Furniture</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$799</span>
                <span class="discounted fw-bold">$599</span>
              </div>
            </div>
          </div>

          <div
            class="box-bottom bg-white position-absolute bottom-0 start-0 d-flex align-items-center justify-content-center wh-auto">
            Transform. Style. Inspire</div>
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 65%; left: 75%;"
            data-product="Area Rug" data-category="Decor" data-price="499" data-discount="399">
            <div class="tooltip position: absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Area Rug</div>
              <div class="product-category mb-2">Decor</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$499</span>
                <span class="discounted fw-bold">$399</span>
              </div>
            </div>
          </div>
        </div>

        <div class="slide position-relative overflow-hidden">
          <img class="w-100 object-fit-cover" src="./images/pgn-1.png" alt="Scandinavian Interior">
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 35%; left: 25%;"
            data-product="Sideboard" data-category="Furniture" data-price="799" data-discount="599">
            <div class="tooltip position: absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Sideboard</div>
              <div class="product-category mb-2">Furniture</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$799</span>
                <span class="discounted fw-bold">$599</span>
              </div>
            </div>
          </div>

          <div
            class=" box-bottom bg-white position-absolute bottom-0 start-0 d-flex align-items-center justify-content-center wh-auto">
            Transform. Style. Inspire</div>
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 65%; left: 75%;"
            data-product="Area Rug" data-category="Decor" data-price="499" data-discount="399">
            <div class="tooltip position: absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Area Rug</div>
              <div class="product-category mb-2">Decor</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$499</span>
                <span class="discounted fw-bold">$399</span>
              </div>
            </div>
          </div>
        </div>
        <div class="slide position-relative">
          <img class="w-100 object-fit-cover" src="./images/pgn-1.png" alt="Scandinavian Interior">
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 35%; left: 25%;"
            data-product="Sideboard" data-category="Furniture" data-price="799" data-discount="599">
            <div class="tooltip position: absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Sideboard</div>
              <div class="product-category mb-2">Furniture</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$799</span>
                <span class="discounted fw-bold">$599</span>
              </div>
            </div>
          </div>

          <div
            class="box-bottom bg-white position-absolute bottom-0 start-0 d-flex align-items-center justify-content-center wh-auto">
            Transform. Style. Inspire</div>
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 65%; left: 75%;"
            data-product="Area Rug" data-category="Decor" data-price="499" data-discount="399">
            <div class="tooltip position: absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Area Rug</div>
              <div class="product-category mb-2">Decor</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$499</span>
                <span class="discounted fw-bold">$399</span>
              </div>
            </div>
          </div>
        </div>
        <div class="slide position-relative">
          <img class="w-100 object-fit-cover" src="./images/pgn-1.png" alt="Scandinavian Interior">
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 35%; left: 25%;"
            data-product="Sideboard" data-category="Furniture" data-price="799" data-discount="599">
            <div class="tooltip position: absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Sideboard</div>
              <div class="product-category mb-2">Furniture</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$799</span>
                <span class="discounted fw-bold">$599</span>
              </div>
            </div>
          </div>
          <div
            class="box-bottom bg-white position-absolute bottom-0 start-0 d-flex align-items-center justify-content-center wh-auto">
            Transform. Style. Inspire</div>
          <div class="hotspot position-absolute cursor-pointer rounded-circle" style="top: 65%; left: 75%;"
            data-product="Area Rug" data-category="Decor" data-price="499" data-discount="399">
            <div class="tooltip position: absolute bg-white p-3">
              <div class="product-name fw-semibold mb-1">Area Rug</div>
              <div class="product-category mb-2">Decor</div>
              <div class="product-price">
                <span class="original text-decoration-line-through">$499</span>
                <span class="discounted fw-bold">$399</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button
        class="nav-btn position-absolute top-50 translate-middle-y bg-white border-0 cursor-pointer next rounded-pill">
        <i class="bi bi-arrow-right rounded-pill"></i>
      </button>
    </div>
  </section>
  <!-- slider-section-end -->
  <!-- marquee-section-start -->
  <section class="marquee-slider">
    <div class="container text-center py-5">
      <h2 class="fw-bold text-start display-size">Loved by <em>100,000</em> & counting.</h2>
      <div class="d-flex justify-content-between row">
        <div class="col-sm-12 col-lg-5">
          <p class="text-start small-size">Have fallen in love with our Blinds. Experience why for yourself  and
            transform your space with us.</p>
        </div>
          
        <div class="d-flex justify-content-center gap-3 col-lg-4">
          <button class="btn btn-outline-dark pt-1 rounded-pill px-4" style="height: 40px;"><a href="#"
              class="text-decoration-none text-black">INSTAGRAM</a></button>
          <button class="btn btn-outline-dark rounded-pill px-4" style="height: 40px;"><a href="#"
              class="text-decoration-none text-black">FACEBOOK</a></button>
        </div>
      </div>
    </div>

    <main class='wrapper container'>
      <div class='marquee '>
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/Frame 1000004714.png' data-src='./images/Frame 1000004714.png'>
          <div class="marquee-content">
            <p class="card-text ">"Attention to detail is impeccable."</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/Frame 1000004716.png' data-src='./images/Frame 1000004714.png'>
          <div class="marquee-content">
            <p class="card-text ">“Outstanding customer service - guided me to the perfect pieces”</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/Rectangle 10866.png' data-src='./images/Frame 1000004714.png'>
          <div class="marquee-content">
            <p class="card-text ">“I'm in awe of the attention to detail in every piece of Blinds I ordered. It's
              evident that they are passionate about their craft.”</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/28adfb62e9b95cf823ad49eb36ff3daf.png'
            data-src='./images/Frame 1000004714.png'>
          <div class="marquee-content">
            <p class="card-text ">“I'm amazed by the attention to detail in the craftsmanship. Exquisite!</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/06bb6436b7939bbcae873bf7618ed14b.jpg'
            data-src='./images/28adfb62e9b95cf823ad49eb36ff3daf.png'>
          <div class="marquee-content">
            <p class="card-text ">"Absolutely love the Blinds! It's a perfect fit for my modern aesthetic."</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/Frame 1000004714.png'
            data-src='./images/28adfb62e9b95cf823ad49eb36ff3daf.png'>
          <div class="marquee-content">
            <p class="card-text ">"Attention to detail is impeccable."</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/Frame 1000004716.png'
            data-src='./images/28adfb62e9b95cf823ad49eb36ff3daf.png'>
          <div class="marquee-content">
            <p class="card-text ">“Outstanding customer service - guided me to the perfect pieces”</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/Rectangle 10866.png'
            data-src='./images/28adfb62e9b95cf823ad49eb36ff3daf.png'>
          <div class="marquee-content">
            <p class="card-text ">“I'm in awe of the attention to detail in every piece of Blinds I ordered. It's
              evident that they are passionate about their craft.”</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/28adfb62e9b95cf823ad49eb36ff3daf.png'
            data-src='./images/28adfb62e9b95cf823ad49eb36ff3daf.png'>
          <div class="marquee-content">
            <p class="card-text ">“I'm amazed by the attention to detail in the craftsmanship. Exquisite!</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
        <!-- Duplicate items for seamless looping -->
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/06bb6436b7939bbcae873bf7618ed14b.jpg'
            data-src='./images/Frame 1000004714.png'>
          <div class="marquee-content">
            <p class="card-text ">"Absolutely love the Blinds! It's a perfect fit for my modern aesthetic."</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/Frame 1000004714.png' data-src='./images/Frame 1000004714.png'>
          <div class="marquee-content">
            <p class="card-text ">"Attention to detail is impeccable."</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
        <div class='marquee-item'>
          <img class="marquee-img" src='./images/Frame 1000004716.png' data-src='./images/Frame 1000004714.png'>
          <div class="marquee-content">
            <p class="card-text ">“Outstanding customer service - guided me to the perfect pieces”</p>
            <p class="small text-muted">@fondation.pilates | BUSWHICK, NEW YORK</p>
          </div>
        </div>
      </div>

  </section>
  <!-- marquee-section-end -->
  
  <?php
      include 'footer.php';
  ?>

</body>
<script src="./script.js"></script>
</html>
