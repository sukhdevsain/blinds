<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>category Card</title>
  <?php
        include 'links.php';
    ?>
</head>

<body>
  <?php
            include 'header.php';
        ?>
  </head>

  <body>
    <!-- Banner Section -->
    <section class="banner d-flex align-items-center  position-relative">
      <!-- Background Image -->
      <img src="./images/our-team-banner.png"
        class="banner-img position-absolute top-0 start-0 w-100 h-100 object-fit-cover overlay" alt="Banner Image">

      <!-- Overlay -->
      <div class="banner-overlay position-absolute top-0 start-0 w-100 h-100"></div>

      <!-- Content -->
      <div class="container position-relative banner-header">
        <div class="mb-3">
          <a href="#" class="text-white text-decoration-none fw-bold primary-font">Home</a>
          <span class="mx-2 text-white fw-bold">|</span>
          <a href="#" class="text-white text-decoration-none fw-bold primary-font">Blog</a>
        </div>
        <h1 class="mb-3 text-white fw-normal"><b>Roller </b> Shades</h1>
        <p class="mb-0 text-white fw-normal primary-font banner-pessage">Faux wood shutters deliver the traditional
          elegance of real wood shutters at a greatly reduced cost. Faux wood shutters also resist fading, warping,
          yellowing, scratching, and moisture damage, making them a worthwhile investment for your home.</p>
      </div>
    </section>
    <!-- Banner end -->



    <div class="container-fluid my-4">
      <div class="row">
        <div class="col-md-3">
          <div class="custom-sidebar bg-white p-3">

            <!-- Filter by Price -->
            <div class="mb-4">
              <h6 class="fw-bold primary-category-font mb-2">Filter by Price</h6>
              <input type="range" class="form-range mb-1" min="0" max="1100" step="1">
              <small class="text-muted d-block fw-normal secondary-font">Price: <strong>$08</strong> —
                <strong>$1100</strong></small>
            </div>

            <!-- Top Products -->
            <div class="mb-4">
              <h6 class="fw-bold primary-category-font">Top Products</h6>
              <div class="d-flex mb-2">
                <img src="images/1.png" alt="Product 1" class="me-2" style="width: 60px; height: auto;">
                <div>
                  <p class="mb-0 fw-medium secondary-category-font">Motorized</p>
                  <small class="primary-font main-font-2 "><del>$10.00</del> <span
                      class="text-danger">$8.00</span></small>
                </div>
              </div>
              <div class="d-flex mb-2">
                <img src="images/2.png" alt="Product 2" class="me-2" style="width: 60px;">
                <div>
                  <p class="mb-0 fw-medium secondary-category-font">Sheer Zebra Blinds</p>
                  <small class="primary-font main-font-2"><del>$49.00</del> <span
                      class="text-danger">$35.00</span></small>
                </div>
              </div>
              <div class="d-flex mb-2">
                <img src="images/3.png" alt="Remote" class="me-2" style="width: 60px;">
                <div>
                  <p class="mb-0 fw-medium secondary-category-font">Motorized Remote Control</p>
                  <small class="primary-font main-font-2">$15.00</small>
                </div>
              </div>
            </div>

            <!-- Categories -->
            <div class="mb-4">
              <h6 class="fw-bold primary-category-font">Categories</h6>
              <ul class="list-unstyled mb-5">
                <li class="d-flex justify-content-between fw-medium secondary-font mb-2">Motorized <span>(13)</span>
                </li>
                <li class="d-flex justify-content-between text-danger fw-medium secondary-font mb-2">Shades
                  <span>(69)</span></li>
                <li class="d-flex justify-content-between fw-medium secondary-font mb-2">Roller Shades <span>(34)</span>
                </li>
                <li class="d-flex justify-content-between fw-medium secondary-font mb-2">Shutters <span>(21)</span></li>
                <li class="d-flex justify-content-between fw-medium secondary-font mb-2">Zebra Blinds <span>(08)</span>
                </li>
              </ul>
              <div class="mt-2 position-relative mb-5">
                <input type="text"
                  class="form-control form-control-sm border-0 input-border-bottom rounded-0 shadow-none"
                  placeholder="Search...">
                <i class="bi bi-search position-absolute top-0 end-0"></i>
              </div>
            </div>

            <!-- Product Status -->
            <div class="mb-4">
              <h6 class="fw-bold primary-category-font">Product Status</h6>
              <div class="form-check">
                <input class="form-check-input shadow-none" type="checkbox" checked id="status1">
                <label class="form-check-label fw-medium secondary-font" for="status1">In Stock</label>
              </div>
              <div class="form-check">
                <input class="form-check-input shadow-none" type="checkbox" id="status2">
                <label class="form-check-label fw-medium secondary-font" for="status2">On Sale</label>
              </div>
              <div class="form-check">
                <input class="form-check-input shadow-none" type="checkbox" id="status3">
                <label class="form-check-label fw-medium secondary-font" for="status3">New</label>
              </div>
            </div>

            <!-- Brands -->
            <div class="mb-4">
              <h6 class="fw-bold primary-category-font">Brands</h6>
              <div class="form-check mb-1">
                <input class="form-check-input shadow-none" type="checkbox" id="brandAll">
                <label class="form-check-label fw-medium secondary-font" for="brandAll">Brand</label>
              </div>
              <ul class="list-unstyled ps-3">
                <li class="fw-medium secondary-font">Acadia Living</li>
                <li class="fw-medium secondary-font">Bali</li>
                <li class="fw-medium secondary-font">Bond</li>
                <li class="fw-medium secondary-font">Coolaroo</li>
                <li class="fw-medium secondary-font">Eve MotionBlinds</li>
                <li class="fw-medium secondary-font">Ez-A</li>
                <li class="fw-medium secondary-font">Levolor</li>
                <li class="fw-medium secondary-font">MyBlinds</li>
                <li class="fw-medium secondary-font">Oasis By Insolroll</li>
                <li class="fw-medium secondary-font">SimpleSmart</li>
                <li class="fw-medium secondary-font">SimplyEco</li>
                <li class="fw-medium secondary-font">SouthSeas</li>
                <li class="fw-medium secondary-font">Veneta</li>
              </ul>
            </div>

            <!-- Discount Banner -->
            <div class="bg-category-section text-start p-3">
              <p class="fw-bold mb-1 three-category-font">On Devices 20% Discount</p>
              <small class="text-muted fw-normal secondary-font d-block mb-2">Have Time to Buy <br> at a
                Discount</small>
            </div>
            <a href="#" class="btn btn-danger w-100 btn-bg-primary h-25">SHOP NOW</a>

          </div>
        </div>
        <div class="col-md-9">
          <!-- Your content goes here -->
          <div class="row g-3">
            <!-- Card 1 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="product-card bg-white overflow-hidden rounded-0 border h-100 d-flex flex-column">
                <div class="position-relative">
                  <div class="ratio ratio-1x1">
                    <img src="images/blinds.webp" class="img-fluid w-100 h-100 object-fit-cover" alt="Motorized">
                  </div>
                  <span class="discount-tag text-white main-font position-absolute top-0 start-0 m-2">Up to 40%
                    off</span>
                </div>
                <div class="p-2 flex-grow-1 d-flex flex-column">
                  <p class="text-uppercase text-muted small mb-1">BEASEN</p>
                  <h6 class="mb-2 main-font fw-semibold">Smart Motorized Dual Zebra Shades<br>80% Blackout 95mm</h6>
                  <div class="d-flex mb-2 align-items-center">
                    <div class="rating-stars me-2 text-warning">★★★★★</div>
                    <small class="text-muted">49 reviews</small>
                  </div>
                  <div class="mb-2">
                    <span class="fw-semibold">$199.99</span>
                    <span class="text-decoration-line-through text-secondary ms-2">$333.32</span>
                  </div>
                  <a href="#" class="btn btn-primary   mt-auto w-100">Customize Now</a>
                </div>
              </div>
            </div>

            <!-- Card 2 (Updated For Sale + Discount Badges) -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="product-card bg-white overflow-hidden rounded-0 border h-100 d-flex flex-column">
                <div class="position-relative">
                  <div class="ratio ratio-1x1">
                    <img src="images/blinds.webp" alt="Motorized" class="top-product-img object-fit-cover w-100 h-100">
                  </div>
                  <div class="d-flex position-absolute top-0 start-0 p-2 gap-2">
                    <span class="discount-tag text-white main-font">Up to 40% off</span>
                    <span class="sale-tag discount-tag text-white main-font">For Sale</span>
                  </div>
                </div>
                <div class="p-2 flex-grow-1 d-flex flex-column">
                  <p class="text-uppercase text-muted small mb-1">BEASEN</p>
                  <h6 class="mb-2 main-font fw-semibold">Smart Motorized Dual Zebra Shades<br>80% Blackout 95mm</h6>
                  <div class="d-flex mb-2 align-items-center">
                    <div class="rating-stars me-2 text-warning">★★★★★</div>
                    <small class="text-muted">49 reviews</small>
                  </div>
                  <div class="mb-2">
                    <span class="fw-semibold">$199.99</span>
                    <span class="text-decoration-line-through text-secondary ms-2">$333.32</span>
                  </div>
                  <a href="#" class="btn btn-primary  mt-auto w-100">Customize Now</a>
                </div>
              </div>
            </div>


            <!-- Card 3 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="product-card bg-white overflow-hidden rounded-0 border h-100 d-flex flex-column">
                <div class="position-relative">
                  <div class="ratio ratio-1x1">
                    <img src="images/blinds.webp" class="img-fluid w-100 h-100 object-fit-cover" alt="Motorized">
                  </div>
                  <span class="discount-tag text-white main-font position-absolute top-0 start-0 m-2">Up to 40%
                    off</span>
                </div>
                <div class="p-2 flex-grow-1 d-flex flex-column">
                  <p class="text-uppercase text-muted small mb-1">BEASEN</p>
                  <h6 class="mb-2 main-font fw-semibold">Smart Motorized Dual Zebra Shades<br>80% Blackout 95mm</h6>
                  <div class="d-flex mb-2 align-items-center">
                    <div class="rating-stars me-2 text-warning">★★★★★</div>
                    <small class="text-muted">49 reviews</small>
                  </div>
                  <div class="mb-2">
                    <span class="fw-semibold">$199.99</span>
                    <span class="text-decoration-line-through text-secondary ms-2">$333.32</span>
                  </div>
                  <a href="#" class="btn btn-primary   mt-auto w-100">Customize Now</a>
                </div>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="product-card bg-white overflow-hidden rounded-0 border h-100 d-flex flex-column">
                <div class="position-relative">
                  <div class="ratio ratio-1x1">
                    <img src="images/blinds.webp" class="img-fluid w-100 h-100 object-fit-cover" alt="Motorized">
                  </div>
                  <span class="discount-tag text-white main-font position-absolute top-0 start-0 m-2">Up to 40%
                    off</span>
                </div>
                <div class="p-2 flex-grow-1 d-flex flex-column">
                  <p class="text-uppercase text-muted small mb-1">BEASEN</p>
                  <h6 class="mb-2 main-font fw-semibold">Smart Motorized Dual Zebra Shades<br>80% Blackout 95mm</h6>
                  <div class="d-flex mb-2 align-items-center">
                    <div class="rating-stars me-2 text-warning">★★★★★</div>
                    <small class="text-muted">49 reviews</small>
                  </div>
                  <div class="mb-2">
                    <span class="fw-semibold">$199.99</span>
                    <span class="text-decoration-line-through text-secondary ms-2">$333.32</span>
                  </div>
                  <a href="#" class="btn btn-primary   mt-auto w-100">Customize Now</a>
                </div>
              </div>
            </div>

            <!-- Card 5 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="product-card bg-white overflow-hidden rounded-0 border h-100 d-flex flex-column">
                <div class="position-relative">
                  <div class="ratio ratio-1x1">
                    <img src="images/blinds.webp" alt="Motorized" class="top-product-img object-fit-cover w-100 h-100">
                  </div>
                  <div class="d-flex position-absolute top-0 start-0 p-2 gap-2">
                    <span class="discount-tag text-white main-font">Up to 40% off</span>
                    <span class="sale-tag discount-tag text-white main-font">For Sale</span>
                  </div>
                </div>
                <div class="p-2 flex-grow-1 d-flex flex-column">
                  <p class="text-uppercase text-muted small mb-1">BEASEN</p>
                  <h6 class="mb-2 main-font fw-semibold">Smart Motorized Dual Zebra Shades<br>80% Blackout 95mm</h6>
                  <div class="d-flex mb-2 align-items-center">
                    <div class="rating-stars me-2 text-warning">★★★★★</div>
                    <small class="text-muted">49 reviews</small>
                  </div>
                  <div class="mb-2">
                    <span class="fw-semibold">$199.99</span>
                    <span class="text-decoration-line-through text-secondary ms-2">$333.32</span>
                  </div>
                  <a href="#" class="btn btn-primary   mt-auto w-100">Customize Now</a>
                </div>
              </div>
            </div>

            <!-- Card 6 -->
            <div class="col-12 col-sm-6 col-lg-4">
              <div class="product-card bg-white overflow-hidden rounded-0 border h-100 d-flex flex-column">
                <div class="position-relative">
                  <div class="ratio ratio-1x1">
                    <img src="images/blinds.webp" class="img-fluid w-100 h-100 object-fit-cover" alt="Motorized">
                  </div>
                  <span class="discount-tag text-white main-font position-absolute top-0 start-0 m-2">Up to 40%
                    off</span>
                </div>
                <div class="p-2 flex-grow-1 d-flex flex-column">
                  <p class="text-uppercase text-muted small mb-1">BEASEN</p>
                  <h6 class="mb-2 main-font fw-semibold">Smart Motorized Dual Zebra Shades<br>80% Blackout 95mm</h6>
                  <div class="d-flex mb-2 align-items-center">
                    <div class="rating-stars me-2 text-warning">★★★★★</div>
                    <small class="text-muted">49 reviews</small>
                  </div>
                  <div class="mb-2">
                    <span class="fw-semibold">$199.99</span>
                    <span class="text-decoration-line-through text-secondary ms-2">$333.32</span>
                  </div>
                  <a href="#" class="btn btn-primary   mt-auto w-100">Customize Now</a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <section class="container">
        <div class="py-5">
          <div class="row g-4 justify-content-center">
            <!-- Zebra Blinds Card -->
            <div class="col-12 col-md-6 col-lg-6">
              <div class="product-card position-relative">
                <img src="./images/blind2.jpg" alt="Zebra Blinds" class="img-fluid object-fit-cover">
                <div
                  class="product-overlay position-absolute bottom-0 start-0 end-0 text-white first-card text-center p-4">
                  <h2 class="display-4 mb-2 fw-semibold">Zebra Blinds</h2>
                  <p class="h3 mb-4 fw-semibold">Up to 12%</p>
                  <button class="btn btn-danger rounded-pill px-4 py-2 fw-bold">SHOP NOW</button>
                </div>
              </div>
            </div>
            <!-- Classic Light Filtering Card -->
            <div class="col-12 col-md-6 col-lg-6">
              <div class="product-card position-relative">
                <img src="./images/blind1.jpg" alt="Classic Light Filtering" class="img-fluid object-fit-cover">
                <div class="product-overlay position-absolute bottom-0 start-0 end-0 text-white text-center p-4">
                  <h2 class="display-4 mb-2 fw-semibold">Classic Light Filtering Roller</h2>
                  <p class="h3 mb-4 fw-semibold">Shades Up to 2%</p>
                  <button class="btn btn-dark rounded-pill px-4 py-2 fw-bold ">SHOP NOW</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <section class="container">
        <div class="text-center mb-5">
          <p class="fw-bold three-font h2 ">Product Status</p>
        </div>
        <div class="row mb-5">
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="product-card bg-white overflow-hidden rounded-0 border h-100 d-flex flex-column">
              <div class="position-relative">
                <div class="ratio ratio-1x1">
                  <img src="images/blinds.webp" class="img-fluid w-100 h-100 object-fit-cover" alt="Motorized">
                </div>
                <span class="discount-tag text-white main-font position-absolute top-0 start-0 m-2">Up to 40% off</span>
              </div>
              <div class="p-2 flex-grow-1 d-flex flex-column">
                <p class="text-uppercase text-muted small mb-1">BEASEN</p>
                <h6 class="mb-2 main-font fw-semibold">Smart Motorized Dual Zebra Shades<br>80% Blackout 95mm</h6>
                <div class="d-flex mb-2 align-items-center">
                  <div class="rating-stars me-2 text-warning">★★★★★</div>
                  <small class="text-muted">49 reviews</small>
                </div>
                <div class="mb-2">
                  <span class="fw-semibold">$199.99</span>
                  <span class="text-decoration-line-through text-secondary ms-2">$333.32</span>
                </div>
              </div>
            </div>
          </div>


          <div class="col-12 col-sm-6 col-lg-3">
            <div class="product-card bg-white overflow-hidden rounded-0 border h-100 d-flex flex-column">
              <div class="position-relative">
                <div class="ratio ratio-1x1">
                  <img src="images/blinds.webp" class="img-fluid w-100 h-100 object-fit-cover" alt="Motorized">
                </div>
                <span class="discount-tag text-white main-font position-absolute top-0 start-0 m-2">Up to 40% off</span>
              </div>
              <div class="p-2 flex-grow-1 d-flex flex-column">
                <p class="text-uppercase text-muted small mb-1">BEASEN</p>
                <h6 class="mb-2 main-font fw-semibold">Smart Motorized Dual Zebra Shades<br>80% Blackout 95mm</h6>
                <div class="d-flex mb-2 align-items-center">
                  <div class="rating-stars me-2 text-warning">★★★★★</div>
                  <small class="text-muted">49 reviews</small>
                </div>
                <div class="mb-2">
                  <span class="fw-semibold">$199.99</span>
                  <span class="text-decoration-line-through text-secondary ms-2">$333.32</span>
                </div>
              </div>
            </div>
          </div>


          <div class="col-12 col-sm-6 col-lg-3">
            <div class="product-card bg-white overflow-hidden rounded-0 border h-100 d-flex flex-column">
              <div class="position-relative">
                <div class="ratio ratio-1x1">
                  <img src="images/blinds.webp" class="img-fluid w-100 h-100 object-fit-cover" alt="Motorized">
                </div>
                <span class="discount-tag text-white main-font position-absolute top-0 start-0 m-2">Up to 40% off</span>
              </div>
              <div class="p-2 flex-grow-1 d-flex flex-column">
                <p class="text-uppercase text-muted small mb-1">BEASEN</p>
                <h6 class="mb-2 main-font fw-semibold">Smart Motorized Dual Zebra Shades<br>80% Blackout 95mm</h6>
                <div class="d-flex mb-2 align-items-center">
                  <div class="rating-stars me-2 text-warning">★★★★★</div>
                  <small class="text-muted">49 reviews</small>
                </div>
                <div class="mb-2">
                  <span class="fw-semibold">$199.99</span>
                  <span class="text-decoration-line-through text-secondary ms-2">$333.32</span>
                </div>
              </div>
            </div>
          </div>


          <div class="col-12 col-sm-6 col-lg-3">
            <div class="product-card bg-white overflow-hidden rounded-0 border h-100 d-flex flex-column">
              <div class="position-relative">
                <div class="ratio ratio-1x1">
                  <img src="images/blinds.webp" class="img-fluid w-100 h-100 object-fit-cover" alt="Motorized">
                </div>
                <span class="discount-tag text-white main-font position-absolute top-0 start-0 m-2">Up to 40% off</span>
              </div>
              <div class="p-2 flex-grow-1 d-flex flex-column">
                <p class="text-uppercase text-muted small mb-1">BEASEN</p>
                <h6 class="mb-2 main-font fw-semibold">Smart Motorized Dual Zebra Shades<br>80% Blackout 95mm</h6>
                <div class="d-flex mb-2 align-items-center">
                  <div class="rating-stars me-2 text-warning">★★★★★</div>
                  <small class="text-muted">49 reviews</small>
                </div>
                <div class="mb-2">
                  <span class="fw-semibold">$199.99</span>
                  <span class="text-decoration-line-through text-secondary ms-2">$333.32</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="container mb-5">
        <div class="text-start mb-5">
          <p class="fw-bold three-font h2 semibold">Seo Text</p>
        </div>
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-6 category-seo-text">
          <div class="paragraph-box shadow-0 fw-normal secondary-category-font main-font-2">
            <p>Omare massa eget egestas purus viverra accumsan in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Bibendum arcu vitae elementum curabitur vitae nunc sed. Suscipit adipiscing bibendum est ultricies integer quis auctor elit. In omare quam viverra orci sagittis. Sem et tortor consequat id porta.</p>
          </div>
          </div>


          <div class="col-12 col-sm-12 col-lg-6 category-seo-text">
            <div class="paragraph-box shadow-0 fw-normal secondary-category-font main-font-2">
              <p>Omare massa eget egestas purus viverra accumsan in. Fermentum posuere urna nec tincidunt praesent semper feugiat nibh sed. Bibendum arcu vitae elementum curabitur vitae nunc sed. Suscipit adipiscing bibendum est ultricies integer quis auctor elit. In omare quam viverra orci sagittis. Sem et tortor consequat id porta.</p>
            </div>
          </div>
        </div>
    </section>

    <?php
        include 'footer.php';
    ?>

  </body>

</html>