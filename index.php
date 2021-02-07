<?php include("model/store_info.class.php") ?>
<!DOCTYPE html>
<html lang="<?= $app['lenguage']; ?>">
  <head>
    <?php include("parts/head/gmanager.php") ?>
    <title><?= $app['store_name']; ?></title>
    <?php include("parts/head/meta.php") ?>
    <?php include("parts/head/link.php") ?>
  </head>
  <body>
    <?php include("parts/body/gmanager.php") ?>
    <!-- navbar-->
    <?php include("parts/body/navbar.php") ?>
    <!-- Slider main container-->
    <?php include("parts/body/slider.php") ?>
    <!-- Categories big-->
    <?php include("parts/body/service.php") ?>
    <!-- products-->
    <?php include("parts/body/products.php") ?>
    <!--promo-->
    <?php include("parts/body/promo.php") ?>
    <!-- historia -->
    <?php include("parts/body/history.php") ?>
    <!-- Brands Section-->
    <?php include("parts/body/brands.php") ?>
    <div class="position-relative py-6 overflow-hidden aos-init aos-animate" style="background-color: #fdf7e5;" data-aos="flip-up">
      <svg class="svg-blob svg-blob-fill-current" style="right: 0; top: 0; color: #ded3ae;">
        <use xlink:href="#blob-shape-4"> </use>
      </svg>
      <div class="container"><img class="position-absolute d-none d-sm-block" style="right: 5%;top: 0; max-width: 500px; z-index: 5;" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/lamps-transparent.png" alt="">
        <div class="position-relative z-index-10">
          <p class="subtitle mb-3" style="color: #846707;">Widest choice </p>
          <h4 class="h1 mb-3">Lights on sale</h4>
          <h5 class="h2 font-weight-light mb-5">Our biggest sales this year — up to 60% off!</h5><a class="btn btn-outline-dark" href="#">Start shopping</a>
        </div>
      </div>
    </div> 
    <div class="container-fluid container-fluid-px py-6 position-relative">
      <svg class="svg-blob svg-blob-fill-current d-none d-md-block" style="left: -200px; top: 400px; color: #ffdbd9;">
        <use xlink:href="#blob-shape-2"> </use>
      </svg>
      <svg class="svg-blob svg-blob-fill-current d-none d-md-block" style="right: -200px; top: 600px; color: #e7eaf9;">
        <use xlink:href="#blob-shape-3"> </use>
      </svg>
      <div class="container">
        <h2 class="display-2 font-weight-bold mb-5" style="color: #efb2af">New Arrivals</h2>
        <div class="row justify-content-between align-items-center mb-4">
          <div class="col-12 col-md">
            <ul class="list-inline mb-3 mb-md-0"> 
              <li class="list-inline-item"><a class="text-dark" href="#">All Products </a></li>
              <li class="list-inline-item"><a class="text-muted text-hover-dark" href="#">Chairs </a></li>
              <li class="list-inline-item"><a class="text-muted text-hover-dark" href="#">Books</a></li>
              <li class="list-inline-item"><a class="text-muted text-hover-dark" href="#">Clothes</a></li>
              <li class="list-inline-item"><a class="text-muted text-hover-dark" href="#">Accessories</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-auto"><a class="btn btn-link px-0" href="#">All products</a></div>
        </div>
        <div class="masonry-wrapper mx-n3">
          <div class="row">
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-secondary">Fresh</div><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair-2-sq.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Norwegg Chair</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/book.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Book</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-primary">Sale</div><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair2.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Another chair</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair3-sq.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Your new chair</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/clock.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Clock</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/clock3.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Clock</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-dark">Sold out</div><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/box.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Accessory box</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/box2-sq.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Beige</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-secondary">Fresh</div><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair2-2.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Norwegg Chair</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/book.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Book</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-primary">Sale</div><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair2.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Another chair</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product aos-init aos-animate" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair3-sq.jpg" alt="product"></a>
                  <div class="product-hover-overlay"><a class="text-dark text-sm" href="#">
                      <svg class="svg-icon text-hover-primary svg-icon-heavy d-sm-none">
                        <use xlink:href="#retail-bag-1"> </use>
                      </svg><span class="d-none d-sm-inline">Add to cart</span></a>
                    <div><a class="text-dark text-hover-primary mr-2" href="#">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#heart-1"> </use>
                        </svg></a><a class="text-dark text-hover-primary text-decoration-none" href="#" data-toggle="modal" data-target="#quickView">
                        <svg class="svg-icon svg-icon-heavy">
                          <use xlink:href="#expand-1"> </use>
                        </svg></a></div>
                  </div>
                </div>
                <div class="position-relative">
                  <h3 class="text-base mb-1"><a class="text-dark" href="detail-1">Your new chair</a></h3><span class="text-gray-500 text-sm">$40.00</span>
                  <div class="product-stars text-xs"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --><svg class="svg-inline--fa fa-star fa-w-18 text-muted" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-muted"></i> Font Awesome fontawesome.com --></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
          </div>
        </div>
        <!-- Quickview Modal    -->
        <div class="modal fade quickview" id="quickView" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
              <button class="close close-absolute close-rotate" type="button" data-dismiss="modal" aria-label="Close">
                <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                  <use xlink:href="#close-1"> </use>
                </svg>
              </button>
              <div class="modal-body quickview-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="detail-carousel">
                      <div class="product-badge badge badge-primary">Fresh</div>
                      <div class="product-badge badge badge-dark">Sale</div>
                      <div class="swiper-container quickview-slider" id="quickViewSlider">
                        <!-- Additional required wrapper-->
                        <div class="swiper-wrapper">
                          <!-- Slides-->
                          <div class="swiper-slide"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-1-gray.jpg" alt="Modern Jacket 1"></div>
                          <div class="swiper-slide"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-2-gray.jpg" alt="Modern Jacket 2"></div>
                          <div class="swiper-slide"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-3-gray.jpg" alt="Modern Jacket 3"></div>
                          <div class="swiper-slide"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-4-gray.jpg" alt="Modern Jacket 4"></div>
                          <div class="swiper-slide"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-5-gray.jpg" alt="Modern Jacket 5"></div>
                        </div>
                      </div>
                      <div class="swiper-thumbs" data-swiper="#quickViewSlider">
                        <button class="swiper-thumb-item detail-thumb-item mb-3 active"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-1-gray.jpg" alt="Modern Jacket 0"></button>
                        <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-2-gray.jpg" alt="Modern Jacket 1"></button>
                        <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-3-gray.jpg" alt="Modern Jacket 2"></button>
                        <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-4-gray.jpg" alt="Modern Jacket 3"></button>
                        <button class="swiper-thumb-item detail-thumb-item mb-3"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/detail-5-gray.jpg" alt="Modern Jacket 4"></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 p-lg-5">
                    <h2 class="mb-4 mt-4 mt-lg-1">Push-up Jeans</h2>
                    <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between mb-4">
                      <ul class="list-inline mb-2 mb-sm-0">
                        <li class="list-inline-item h4 font-weight-light mb-0">$65.00</li>
                        <li class="list-inline-item text-muted font-weight-light"> 
                          <del>$90.00</del>
                        </li>
                      </ul>
                      <div class="d-flex align-items-center text-sm">
                        <ul class="list-inline mr-2 mb-0">
                          <li class="list-inline-item mr-0"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --></li>
                          <li class="list-inline-item mr-0"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --></li>
                          <li class="list-inline-item mr-0"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --></li>
                          <li class="list-inline-item mr-0"><svg class="svg-inline--fa fa-star fa-w-18 text-primary" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-primary"></i> Font Awesome fontawesome.com --></li>
                          <li class="list-inline-item mr-0"><svg class="svg-inline--fa fa-star fa-w-18 text-gray-300" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fa fa-star text-gray-300"></i> Font Awesome fontawesome.com --></li>
                        </ul><span class="text-muted text-uppercase">25 reviews</span>
                      </div>
                    </div>
                    <p class="mb-4 text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                    <form id="buyForm_modal" action="#">
                      <div class="row">
                        <div class="col-sm-6 col-lg-12 detail-option mb-4">
                          <h6 class="detail-option-heading">Size <span>(required)</span></h6>
                          <div class="dropdown bootstrap-select"><select class="selectpicker" name="size" data-style="btn-selectpicker" tabindex="-98">
                            <option value="value_0">Small</option>
                            <option value="value_1">Medium</option>
                            <option value="value_2">Large</option>
                          </select><button type="button" class="btn dropdown-toggle btn-selectpicker" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Small"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Small</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                        </div>
                        <div class="col-sm-6 col-lg-12 detail-option mb-5">
                          <h6 class="detail-option-heading">Type <span>(required)</span></h6>
                          <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_0_modal"> Hoodie
                            <input class="input-invisible" type="radio" name="material" value="value_0" id="material_0_modal" required="">
                          </label>
                          <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_1_modal"> College
                            <input class="input-invisible" type="radio" name="material" value="value_1" id="material_1_modal" required="">
                          </label>
                        </div>
                      </div>
                      <div class="input-group w-100 mb-4">
                        <input class="form-control form-control-lg detail-quantity" name="items" type="number" value="1">
                        <div class="input-group-append flex-grow-1">
                          <button class="btn btn-dark btn-block" type="submit"> <svg class="svg-inline--fa fa-shopping-cart fa-w-18 mr-2" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path></svg><!-- <i class="fa fa-shopping-cart mr-2"></i> Font Awesome fontawesome.com -->Add to Cart</button>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-6"><a href="#"> <svg class="svg-inline--fa fa-heart fa-w-16 mr-2" aria-hidden="true" focusable="false" data-prefix="far" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M458.4 64.3C400.6 15.7 311.3 23 256 79.3 200.7 23 111.4 15.6 53.6 64.3-21.6 127.6-10.6 230.8 43 285.5l175.4 178.7c10 10.2 23.4 15.9 37.6 15.9 14.3 0 27.6-5.6 37.6-15.8L469 285.6c53.5-54.7 64.7-157.9-10.6-221.3zm-23.6 187.5L259.4 430.5c-2.4 2.4-4.4 2.4-6.8 0L77.2 251.8c-36.5-37.2-43.9-107.6 7.3-150.7 38.9-32.7 98.9-27.8 136.5 10.5l35 35.7 35-35.7c37.8-38.5 97.8-43.2 136.5-10.6 51.1 43.1 43.5 113.9 7.3 150.8z"></path></svg><!-- <i class="far fa-heart mr-2"></i> Font Awesome fontawesome.com -->Add to wishlist </a></div>
                        <div class="col-6 text-right">
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-2"><a class="text-dark text-hover-primary" href="#"><svg class="svg-inline--fa fa-facebook-f fa-w-10" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg><!-- <i class="fab fa-facebook-f"> </i> Font Awesome fontawesome.com --></a></li>
                            <li class="list-inline-item"><a class="text-dark text-hover-primary" href="#"><svg class="svg-inline--fa fa-twitter fa-w-16" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg><!-- <i class="fab fa-twitter"> </i> Font Awesome fontawesome.com --></a></li>
                          </ul>
                        </div>
                      </div>
                      <ul class="list-unstyled">
                        <li><strong>Category:</strong> <a class="text-muted" href="#">Jeans</a></li>
                        <li><strong>Tags:</strong> <a class="text-muted" href="#">Leisure</a>, <a class="text-muted" href="#">Elegant</a></li>
                      </ul>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-5">
      <div class="position-relative text-center" style="background: #eae0bd; ">
        <div class="position-absolute w-100 h-100 overflow-hidden">
          <svg class="svg-blob svg-blob-fill-current text-primary" style=" width: 400px; height: 400px; max-width: 100%; left: -200px; top: -50px; ">
            <use xlink:href="#blob-shape"> </use>
          </svg>
        </div>
        <div class="py-6 px-4">   <img class="position-absolute d-none d-md-block" style="right: 0;top: -50px; max-height: 100%; z-index: 5;" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair-transparent.png" alt="">
          <div class="position-relative z-index-10">
            <h4 class="display-3 font-weight-bold mb-3">Summer Sales</h4>
            <h5 class="h2 font-weight-light mb-5">Our biggest sales this year — up to 60% off!</h5><a class="btn btn-outline-dark" href="#">Start shopping</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <?php include("parts/body/footer.php") ?>
    <!-- Modales-->
    <?php include("parts/body/modal.php") ?>
    <!-- scripts-->
    <?php include("parts/body/scripts.php") ?>
  </body>
</html>