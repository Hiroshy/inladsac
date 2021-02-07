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
    <!-- navbar-->
    <header class="header"> 
      <!-- Top Bar-->
      <div class="top-bar text-sm">
        <div class="container-fluid px-lg-5 py-3">
          <div class="row align-items-center">
            <div class="col-md-4 d-none d-md-block">
              <ul class="list-inline mb-0">
                <li class="list-inline-item mr-2"><a class="text-reset text-hover-primary" href="#"><i class="fab fa-facebook-f"> </i></a></li>
                <li class="list-inline-item mr-4"><a class="text-reset text-hover-primary" href="#"><i class="fab fa-twitter"> </i></a></li>
                <li class="list-inline-item mr-2">
                  <svg class="svg-icon mr-2">
                    <use xlink:href="#calls-1"> </use>
                  </svg>020-800-456-747
                </li>
              </ul>
            </div>
            <div class="col-sm-6 col-md-4 text-left text-md-center">
              <p class="mb-0">Free in-store delivery</p>
            </div>
            <div class="col-sm-6 col-md-4 d-none d-sm-flex justify-content-end">
              <!-- Language Dropdown-->
              <div class="dropdown border-right px-3"><a class="dropdown-toggle topbar-link" id="langsDropdown" href="#" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">English</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="langsDropdown"><a class="dropdown-item" href="#">German</a><a class="dropdown-item" href="#">French</a></div>
              </div>
              <!-- Currency Dropdown-->
              <div class="dropdown pl-3 ml-0"><a class="dropdown-toggle topbar-link" id="currencyDropdown" href="#" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">USD</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="currencyDropdown"><a class="dropdown-item" href="#">EUR</a><a class="dropdown-item" href="#"> GBP</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Top Bar End-->
      <nav class="navbar navbar-expand-lg bg-transparent border-0 shadow-0 navbar-light px-lg-5 "><a class="navbar-brand" href="/">Varkala</a>
        <ul class="list-inline mb-0 d-block d-lg-none">
          <li class="list-inline-item mr-3"><a class="text-dark text-hover-primary" href="#" data-toggle="modal" data-target="#loginModal">
              <svg class="svg-icon navbar-icon">
                <use xlink:href="#avatar-1"> </use>
              </svg></a></li>
          <li class="list-inline-item mr-3"><a class="text-dark text-hover-primary position-relative" href="wishlist">
              <svg class="svg-icon navbar-icon">
                <use xlink:href="#heart-1"> </use>
              </svg>
              <div class="navbar-icon-badge">3</div></a></li>
          <li class="list-inline-item position-relative mr-3"><a class="text-dark text-hover-primary" href="#" data-toggle="modal" data-target="#sidebarCart">
              <svg class="svg-icon navbar-icon">
                <use xlink:href="#retail-bag-1"> </use>
              </svg>
              <div class="navbar-icon-badge">5</div></a></li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="svg-icon navbar-icon">
            <use xlink:href="#menu-hamburger-1"> </use>
          </svg>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav mt-3 mt-lg-0">
            <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" id="homeDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
              <div class="dropdown-menu" aria-labelledby="homeDropdown"><a class="dropdown-item" href="/">Home 1 - Fashion </a><a class="dropdown-item" href="index-3">Home 2 - Fashion </a><a class="dropdown-item" href="index-4">Home 3 - Design <span class="badge badge-primary-light ml-1">New</span> </a><a class="dropdown-item" href="index-5">Home 4 - Design <span class="badge badge-primary-light ml-1">New</span> </a>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="shopDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu py-0" aria-labelledby="shopDropdown" data-min-width="750px" data-translate-x="-50px">
                <div class="row">
                  <div class="col-lg-4 col-sm-6 p-lg-5">
                    <h6 class="dropdown-header h6 pl-lg-0">Shop pages</h6><a class="dropdown-item pl-lg-0" href="category-full">Full width </a><a class="dropdown-item pl-lg-0" href="category-full-sidebar">Full width with category menu </a><a class="dropdown-item pl-lg-0" href="category-big-products">Full width with big products </a><a class="dropdown-item pl-lg-0" href="category-boxed">Fixed width </a><a class="dropdown-item pl-lg-0" href="category-sidebar">Fixed width & sidebar </a><a class="dropdown-item pl-lg-0" href="category-masonry">Fixed width & masonry layout<span class="badge badge-primary-light ml-1">New</span> </a><a class="dropdown-item pl-lg-0" href="category-categories">Subcategories </a>
                  </div>
                  <div class="col-lg-4 col-sm-6 p-lg-5">
                    <h6 class="dropdown-header h6 pl-lg-0">Product pages</h6><a class="dropdown-item pl-lg-0" href="detail-1">Product with sticky info </a><a class="dropdown-item pl-lg-0" href="detail-2">Product with background </a><a class="dropdown-item pl-lg-0" href="detail-3">Product standard  </a>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block"><img class="bg-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/kyle-loftus-596319-unsplash-cropped.jpg" alt=""></div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="iconsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Icons</a>
              <div class="dropdown-menu py-lg-0" aria-labelledby="iconsDropdown" data-min-width="750px">
                <div class="row py-lg-5 px-4">
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#trousers-1"> </use>
                      </svg>
                      <h6>Trousers</h6></a></div>
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#suit-1"> </use>
                      </svg>
                      <h6>Jackets</h6></a></div>
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#shirt5-1"> </use>
                      </svg>
                      <h6>T-Shirts</h6></a></div>
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#shirt1-1"> </use>
                      </svg>
                      <h6>Shirts</h6></a></div>
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#pullover-1"> </use>
                      </svg>
                      <h6>Pullovers</h6></a></div>
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-5"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#scarf-1"> </use>
                      </svg>
                      <h6>Scarfs</h6></a></div>
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-0"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#shorts1-1"> </use>
                      </svg>
                      <h6>Shorts</h6></a></div>
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-0"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#underwear1-1"> </use>
                      </svg>
                      <h6>Underwear</h6></a></div>
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-0"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#watch-1"> </use>
                      </svg>
                      <h6>Watches</h6></a></div>
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-0"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#portfolio-1"> </use>
                      </svg>
                      <h6>Bags</h6></a></div>
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-0"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#cap-1"> </use>
                      </svg>
                      <h6>Caps</h6></a></div>
                  <div class="col-6 col-sm-3 col-md-2 text-center mb-2 mb-lg-0"><a class="text-reset" href="category-categories">
                      <svg class="svg-icon w-3rem h-3rem mb-2 svg-icon-light">
                        <use xlink:href="#bowtie-1"> </use>
                      </svg>
                      <h6>Accessories</h6></a></div>
                </div>
                <div class="p-3 bg-primary text-center text-sm d-none d-lg-block">
                  <p class="mb-0">Don't miss our biggest sales this year. Use the code "SUMMER35" at checkout until Jun. 15! </p>
                </div>
              </div>
            </li>
            <!-- Megamenu-->
            <li class="nav-item dropdown position-static"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages</a>
              <div class="dropdown-menu megamenu px-4 px-lg-5 py-lg-5" data-translate-x="-50%">
                <div class="row">
                  <div class="col-lg-3 col-sm-6"><img class="img-fluid mb-3 d-none d-lg-block" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/blog/christopher-campbell-28571-unsplash.jpg" alt=""/>
                    <!-- Megamenu list-->
                    <h6>Homepage</h6>
                    <ul class="megamenu-list list-unstyled">
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="/">Home 1 - Fashion   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="index-3">Home 2 - Fashion   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="index-4">Home 3 - Design <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="index-5">Home 4 - Design <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                    </ul>
                    <!-- Megamenu list-->
                    <h6>Category</h6>
                    <ul class="megamenu-list list-unstyled mb-lg-0">
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-full">Full width   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-full-sidebar">Full width with category menu   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-big-products">Full width with big products   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-boxed">Fixed width   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-sidebar">Fixed width & sidebar   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-masonry">Fixed width & masonry layout<span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="category-categories">Subcategories   </a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-sm-6"><img class="img-fluid mb-3 d-none d-lg-block" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/blog/ian-dooley-347962-unsplash.jpg" alt=""/>
                    <!-- Megamenu list-->
                    <h6>Order process</h6>
                    <ul class="megamenu-list list-unstyled">
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="cart">Shopping cart   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="checkout1">Checkout - Five steps <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="checkout">Checkout - Single-page   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="checkout-confirmed">Checkout - confirmed   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="wishlist">Wishlist   </a></li>
                    </ul>
                    <!-- Megamenu list-->
                    <h6>Product</h6>
                    <ul class="megamenu-list list-unstyled mb-lg-0">
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="detail-1">Product with sticky info   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="detail-2">Product with background   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="detail-3">Product standard    </a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-sm-6"><img class="img-fluid mb-3 d-none d-lg-block" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/blog/ian-dooley-347942-unsplash.jpg" alt=""/>
                    <!-- Megamenu list-->
                    <h6>Blog</h6>
                    <ul class="megamenu-list list-unstyled">
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="blog">Blog   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="blog-masonry">Blog - Masonry   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="post">Post   </a></li>
                    </ul>
                    <!-- Megamenu list-->
                    <h6>Pages</h6>
                    <ul class="megamenu-list list-unstyled">
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="about">About - Company <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="about-2">About v.2 - Person <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="faq">F.A.Q. <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="contact">Contact   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="privacy">Privacy policy <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3 col-sm-6"><img class="img-fluid mb-3 d-none d-lg-block" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/blog/photo-1534126511673-b6899657816a.jpg" alt=""/>
                    <!-- Megamenu list-->
                    <h6>Customer</h6>
                    <ul class="megamenu-list list-unstyled mb-lg-0">
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="customer-login">Login/sign up<span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="customer-orders">Orders <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="customer-order">Order detail <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="customer-order-tracking">Order tracking <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="customer-addresses">Addresses <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="customer-account">Profile <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                      <li class="megamenu-list-item"><a class="megamenu-list-link" href="customer-wishlist">Wishlist <span class="badge badge-primary-light ml-1">New</span>   </a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <!-- /Megamenu end-->
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="docsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
              <div class="dropdown-menu" aria-labelledby="homeDropdown"><a class="dropdown-item" href="docs/index">Introduction </a><a class="dropdown-item" href="docs/directory-structure">Directory structure </a><a class="dropdown-item" href="docs/gulp">Gulp </a><a class="dropdown-item" href="docs/customizing-css">Customizing CSS </a><a class="dropdown-item" href="docs/credits">Credits </a><a class="dropdown-item" href="docs/changelog">Changelog </a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="docs/components-bootstrap">Bootstrap </a><a class="dropdown-item" href="docs/components-theme">Theme </a>
              </div>
            </li>
          </ul>
          <form class="d-lg-flex ml-auto mr-lg-5 mr-xl-6 my-4 my-lg-0" action="#">
            <div class="input-group input-group-underlined">
              <input class="form-control form-control-underlined pl-3" type="text" placeholder="Search" aria-label="Search" aria-describedby="button-search">
              <div class="input-group-append ml-0">
                <button class="btn btn-underlined py-0" id="button-search" type="button"> 
                  <svg class="svg-icon navbar-icon">
                    <use xlink:href="#search-1"> </use>
                  </svg>
                </button>
              </div>
            </div>
          </form>
          <ul class="list-inline mb-0 d-none d-lg-block">
            <li class="list-inline-item mr-3"><a class="text-dark text-hover-primary" href="#" data-toggle="modal" data-target="#loginModal">
                <svg class="svg-icon navbar-icon">
                  <use xlink:href="#avatar-1"> </use>
                </svg></a></li>
            <li class="list-inline-item mr-3"><a class="text-dark text-hover-primary position-relative" href="wishlist">
                <svg class="svg-icon navbar-icon">
                  <use xlink:href="#heart-1"> </use>
                </svg>
                <div class="navbar-icon-badge">3</div></a></li>
            <li class="list-inline-item position-relative mr-3"><a class="text-dark text-hover-primary" href="#" data-toggle="modal" data-target="#sidebarCart">
                <svg class="svg-icon navbar-icon">
                  <use xlink:href="#retail-bag-1"> </use>
                </svg>
                <div class="navbar-icon-badge">5</div></a></li>
            <li class="list-inline-item"><a class="text-dark text-hover-primary" href="#" data-toggle="modal" data-target="#sidebarRight">
                <svg class="svg-icon navbar-icon">
                  <use xlink:href="#menu-hamburger-1"> </use>
                </svg></a></li>
          </ul>
        </div>
      </nav>
    </header>
    <svg class="svg-blob svg-blob-fill-current" style=" width: 800px; height: 800px; max-width: 100%; left: -200px; top: -200px; color: #e0d4ab;">
      <use xlink:href="#blob-shape"> </use>
    </svg>
    <!-- Slider main container-->
    <div class="swiper-container home-slider-design" style="height: 50vh; min-height: 500px;">
      <!-- Additional required wrapper-->
      <div class="swiper-wrapper">
        <!-- Slides-->
        <div class="swiper-slide bg-cover-left">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-sm-6 pt-5 pt-md-0" data-swiper-parallax="-500">
                <p class="subtitle letter-spacing-3 mb-3 text-dark font-weight-light">Our all-time favourites</p>
                <h2 class="display-3" style="line-height: 1">Black &amp; White</h2>
                <p class="text-muted mb-5">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit</p><a class="btn btn-outline-primary" href="#">Discover more</a>
              </div>
              <div class="col-sm-6 text-left text-sm-center"><img class="img-fluid home-slider-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair2-transparent.png" alt="" data-swiper-parallax="-200">
                <svg class="svg-blob d-none d-md-inline-block svg-blob-fill-current svg-blob-swiper" style="color: #ffdddd">
                  <use xlink:href="#blob-shape-3"> </use>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-sm-6 pt-5 pt-md-0" data-swiper-parallax="-500">
                <p class="subtitle letter-spacing-3 mb-3 text-dark font-weight-light">Time is almost up</p>
                <h2 class="display-3 mb-5" style="line-height: 1">Design clocks on sale</h2><a class="btn btn-outline-primary" href="#">Start shopping</a>
              </div>
              <div class="col-sm-6 text-left text-sm-center"><img class="img-fluid home-slider-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/clock-transparent.png" alt="" data-swiper-parallax="-200">
                <svg class="svg-blob d-none d-md-inline-block svg-blob-fill-current svg-blob-swiper" style="color: #e7eaf9">
                  <use xlink:href="#blob-shape-3"> </use>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide bg-cover-right">
          <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-sm-6 pt-5 pt-md-0" data-swiper-parallax="-500">
                <p class="subtitle letter-spacing-3 mb-3 text-dark font-weight-light">Our all-time favourites</p>
                <h2 class="display-3" style="line-height: 1">Boxxez</h2>
                <p class="text-muted mb-5">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit</p><a class="btn btn-outline-primary" href="#">Discover more</a>
              </div>
              <div class="col-sm-6 text-left text-sm-center"><img class="img-fluid home-slider-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/box-transparent.png" alt="" data-swiper-parallax="-200">
                <svg class="svg-blob d-none d-md-inline-block svg-blob-fill-current svg-blob-swiper" style="color: #f5e6a8">
                  <use xlink:href="#blob-shape-3"> </use>
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-nav d-none d-lg-block">
        <div class="swiper-button-prev" id="homePrev"></div>
        <div class="swiper-button-next" id="homeNext">   </div>
      </div>
    </div>
    <div class="container py-6">
      <div class="row">
        <div class="mb-2 col-6 col-lg-7 pr-1">
          <div class="banner" style="background-color:#c3e3e0" data-aos="zoom-in">
            <div class="banner-text p-3 p-lg-5">
              <p class="subtitle text-sm" style="color: #3b5d59">Wood &amp; Metal</p>
              <h2 class="mb-0">Chairs      </h2>
            </div>
            <div class="banner-bg"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-chair2.jpg" alt=""></div><a class="stretched-link banner-link" href="#"><span class="sr-only">See Chairs</span></a>
          </div>
        </div>
        <div class="mb-2 col-6 col-lg-5 pl-1">
          <div class="banner" style="background-color:#f8f0cc" data-aos="zoom-in">
            <div class="banner-text p-3 p-lg-5">
              <p class="subtitle text-sm" style="color: #6d5900">The little things</p>
              <h2 class="mb-0">Accessories      </h2>
            </div>
            <div class="banner-bg"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-boxes.jpg" alt=""></div><a class="stretched-link banner-link" href="#"><span class="sr-only">See Accessories</span></a>
          </div>
        </div>
        <div class="mb-2 col-6 col-lg-5 pr-1">
          <div class="banner" style="background-color:#ffd4d2" data-aos="zoom-in">
            <div class="banner-text p-3 p-lg-5">
              <p class="subtitle text-sm" style="color: #7d514f">Something about books</p>
              <h2 class="mb-0">Books      </h2>
            </div>
            <div class="banner-bg"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-books.jpg" alt=""></div><a class="stretched-link banner-link" href="#"><span class="sr-only">See Books</span></a>
          </div>
        </div>
        <div class="mb-2 col-6  col-lg-7 pl-1">
          <div class="banner" style="background-color:#cddeff" data-aos="zoom-in">
            <div class="banner-text p-3 p-lg-5">
              <p class="subtitle text-sm" style="color: #46619a">Tik tak</p>
              <h2 class="mb-0">Clocks      </h2>
            </div>
            <div class="banner-bg"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/category-clocks.jpg" alt=""></div><a class="stretched-link banner-link" href="#"><span class="sr-only">See Clocks</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="position-relative py-6 overflow-hidden" style="background-color: #fdf7e5;" data-aos="flip-up">
      <svg class="svg-blob svg-blob-fill-current" style="right: 0; top: 0; color: #ded3ae;">
        <use xlink:href="#blob-shape-4"> </use>
      </svg>
      <div class="container"><img class="position-absolute d-none d-sm-block" style="right: 5%;top: 0; max-width: 500px; z-index: 5;" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/lamps-transparent.png" alt="">
        <div class="position-relative z-index-10">
          <p class="subtitle mb-3" style="color: #846707;">Widest choice </p>
          <h4 class="h1 mb-3">Lights on sale</h4>
          <h5 class="h2 font-weight-light mb-5">Our biggest sales this year &mdash; up to 60% off!</h5><a class="btn btn-outline-dark" href="#">Start shopping</a>
        </div>
      </div>
    </div>
    <div class="position-relative py-6">
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
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-secondary">Fresh</div><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair-2-sq.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/book.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-primary">Sale</div><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair2.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair3-sq.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/clock.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/clock3.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-dark">Sold out</div><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/box.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/box2-sq.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-secondary">Fresh</div><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair2-2.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/book.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3">
                  <div class="product-badge badge badge-primary">Sale</div><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair2.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
                </div>
              </div>
            </div>
            <!-- /product   -->
            <!-- product-->
            <div class="item col-xl-3 col-lg-4 col-6">
              <div class="product" data-aos="zoom-in" data-aos-delay="0">
                <div class="product-image mb-md-3"><a href="detail-1"><img class="img-fluid" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair3-sq.jpg" alt="product"/></a>
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
                  <div class="product-stars text-xs"><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-primary"></i><i class="fa fa-star text-muted"></i><i class="fa fa-star text-muted"></i></div>
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
                          <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                          <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                          <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                          <li class="list-inline-item mr-0"><i class="fa fa-star text-primary"></i></li>
                          <li class="list-inline-item mr-0"><i class="fa fa-star text-gray-300"></i></li>
                        </ul><span class="text-muted text-uppercase">25 reviews</span>
                      </div>
                    </div>
                    <p class="mb-4 text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                    <form id="buyForm_modal" action="#">
                      <div class="row">
                        <div class="col-sm-6 col-lg-12 detail-option mb-4">
                          <h6 class="detail-option-heading">Size <span>(required)</span></h6>
                          <select class="selectpicker" name="size" data-style="btn-selectpicker">
                            <option value="value_0">Small</option>
                            <option value="value_1">Medium</option>
                            <option value="value_2">Large</option>
                          </select>
                        </div>
                        <div class="col-sm-6 col-lg-12 detail-option mb-5">
                          <h6 class="detail-option-heading">Type <span>(required)</span></h6>
                          <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_0_modal"> Hoodie
                            <input class="input-invisible" type="radio" name="material" value="value_0" id="material_0_modal" required>
                          </label>
                          <label class="btn btn-sm btn-outline-primary detail-option-btn-label" for="material_1_modal"> College
                            <input class="input-invisible" type="radio" name="material" value="value_1" id="material_1_modal" required>
                          </label>
                        </div>
                      </div>
                      <div class="input-group w-100 mb-4">
                        <input class="form-control form-control-lg detail-quantity" name="items" type="number" value="1">
                        <div class="input-group-append flex-grow-1">
                          <button class="btn btn-dark btn-block" type="submit"> <i class="fa fa-shopping-cart mr-2"></i>Add to Cart</button>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-6"><a href="#"> <i class="far fa-heart mr-2"></i>Add to wishlist </a></div>
                        <div class="col-6 text-right">
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-2"><a class="text-dark text-hover-primary" href="#"><i class="fab fa-facebook-f"> </i></a></li>
                            <li class="list-inline-item"><a class="text-dark text-hover-primary" href="#"><i class="fab fa-twitter"> </i></a></li>
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
    <div class="text-center" style="margin-top: -150px;" data-aos="flip-up"><img class="img-fluid z-index-10" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/chair-transparent-shadow.png" alt="" style="position: relative; max-width: 350px; top: 150px;margin-left: auto; margin-right: auto;">
      <div class="position-relative" style="background: #ebf7ff; ">
        <svg class="svg-blob svg-blob-fill-current" style=" width: 400px; height: 400px; max-width: 100%; left: -200px; color: #c4e0f3;">
          <use xlink:href="#blob-shape-4"> </use>
        </svg>
        <svg class="svg-blob svg-blob-fill-current" style=" width: 300px; height: 300px; top:0; right: -200px; color: #c4e0f3;">
          <use xlink:href="#blob-shape-2"> </use>
        </svg>
        <div class="container py-6">   
          <div class="position-relative z-index-10">
            <h4 class="display-3 font-weight-bold mt-5 mb-3">#summer #sales</h4>
            <h5 class="h2 font-weight-light mb-5">Our biggest sales this year &mdash; up to 60% off!</h5><a class="btn btn-outline-dark" href="#">Start shopping</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Sidebar Cart Modal-->
    <div class="modal fade modal-right" id="sidebarCart" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content sidebar-cart-content">
          <div class="modal-header border-0">
            <button class="close modal-close close-rotate" type="button" data-dismiss="modal" aria-label="Close">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
          </div>
          <div class="modal-body px-5 sidebar-cart-body">
            <!-- Empty cart snippet-->
            <!-- In case of empty cart - display this snippet + remove .d-none-->
            <div class="d-none text-center mb-5">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light mb-4 text-muted">
                <use xlink:href="#retail-bag-1"> </use>
              </svg>
              <p>Your cart is empty </p>
            </div>
            <!-- Empty cart snippet end-->
            <div class="sidebar-cart-product-wrapper custom-scrollbar">
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-ian-dooley-347968-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Skull Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-kyle-loftus-596319-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">Transparent Blouse</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
              <!-- cart item-->
              <div class="navbar-cart-product"> 
                <div class="d-flex align-items-center"><a href="detail-1"><img class="img-fluid navbar-cart-product-image" src="../../../d19m59y37dris4.cloudfront.net/varkala/1-2/img/product/product-square-serrah-galos-494312-unsplash.jpg" alt="..."/></a>
                  <div class="w-100"><a class="close" href="#">
                      <svg class="svg-icon sidebar-cart-icon">
                        <use xlink:href="#close-1"> </use>
                      </svg></a>
                    <div class="pl-3"> <a class="navbar-cart-product-link text-dark link-animated" href="detail-1">White Tee</a><small class="d-block text-muted">Quantity: 1 </small><strong class="d-block text-sm">$75.00     </strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer sidebar-cart-footer shadow">
            <div class="w-100">
              <h5 class="mb-4">Subtotal: <span class="float-right">$465.32</span></h5><a class="btn btn-outline-dark btn-block mb-3" href="cart">View cart</a><a class="btn btn-dark btn-block" href="checkout">Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sidebar Modal Right-->
    <div class="modal fade modal-right" id="sidebarRight" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header border-0">
            <button class="close close-rotate" type="button" data-dismiss="modal" aria-label="Close">
              <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
                <use xlink:href="#close-1"> </use>
              </svg>
            </button>
          </div>
          <div class="modal-body px-5 pb-5">
            <div>
              <h5 class="mb-5" data-aos="zoom-in" data-aos-delay="50">Varkala</h5>
              <ul class="nav flex-column mb-5">
                <li class="nav-item active"><a class="nav-link pl-0" href="#">Home </a></li>
                <li class="nav-item"><a class="nav-link pl-0" href="#">Link</a></li>
                <li class="nav-item"><a class="nav-link pl-0 disabled" href="#">Disabled</a></li>
                <li class="nav-item dropdown"><a class="nav-link pl-0 dropdown-toggle" id="navbarDropdownMenuLink" href="#" data-target="#sidebarSubmenu" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">Dropdown link</a>
                  <div class="collapse" id="sidebarSubmenu">
                    <ul class="nav flex-column ml-3">
                      <li class="nav-item"><a class="nav-link pl-0" href="#">Action</a></li>
                      <li class="nav-item"><a class="nav-link pl-0" href="#">Another action</a></li>
                      <li class="nav-item"><a class="nav-link pl-0" href="#">Something else here                </a></li>
                    </ul>
                  </div>
                </li>
              </ul>
              <ul class="list-inline mb-4">
                <li class="list-inline-item mr-2"><i class="fab fa-facebook-f"> </i></li>
                <li class="list-inline-item mr-2"><i class="fab fa-twitter"> </i></li>
                <li class="list-inline-item mr-2">
                  <svg class="svg-icon mr-2">
                    <use xlink:href="#calls-1"> </use>
                  </svg>020-800-456-747
                </li>
              </ul>
              <p class="text-sm text-muted mb-0">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Login Modal    -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button class="close close-absolute" type="button" data-dismiss="modal" aria-label="Close">
            <svg class="svg-icon w-3rem h-3rem svg-icon-light align-middle">
              <use xlink:href="#close-1"> </use>
            </svg>
          </button>
          <div class="modal-body p-5">
            <ul class="nav list-inline" role="tablist">
              <li class="list-inline-item"><a class="nav-link nav-link-lg active" data-toggle="tab" href="#loginModalTabLogin" role="tab" id="loginModalLinkLogin" aria-controls="loginModalTabLogin" aria-selected="true">Login</a></li>
              <li class="list-inline-item"><a class="nav-link nav-link-lg" data-toggle="tab" href="#loginModalTabRegister" role="tab" id="loginModalLinkRegister" aria-controls="loginModalTabRegister" aria-selected="false">Register</a></li>
            </ul>
            <hr class="mb-3">
            <div class="tab-content">
              <div class="tab-pane active fade show px-3" id="loginModalTabLogin" role="tabpanel" aria-labelledby="loginModalLinkLogin">
                <form action="https://demo.bootstrapious.com/varkala/1-2/customer-orders" method="get">
                  <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" id="email" type="text">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col">
                        <label class="form-label" for="loginPassword"> Password</label>
                      </div>
                      <div class="col-auto"><a class="form-text small" href="#">Forgot password?</a></div>
                    </div>
                    <input class="form-control" name="loginPassword" id="loginPassword" placeholder="Password" type="password" required data-msg="Please enter your password">
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="loginRemember" type="checkbox">
                      <label class="custom-control-label text-muted" for="loginRemember"> <span class="text-sm">Remember me for 30 days</span></label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-block btn-outline-dark" type="submit"><i class="fa fa-sign-in-alt mr-2"></i> Log in</button>
                  </div>
                </form>
                <hr class="my-3 hr-text letter-spacing-2" data-content="OR">
                <div class="text-center">
                  <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip" title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                  <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip" title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google</span></button>
                </div>
              </div>
              <div class="tab-pane fade px-3" id="loginModalTabRegister" role="tabpanel" aria-labelledby="loginModalLinkRegister">
                <p class="text-muted text-sm">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pit.                                            </p>
                <form action="https://demo.bootstrapious.com/varkala/1-2/customer-orders" method="get">
                  <div class="form-group">
                    <label class="form-label" for="registerName">Name</label>
                    <input class="form-control" id="registerName" type="text">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="registerEmail">Email</label>
                    <input class="form-control" id="registerEmail" type="text">
                  </div>
                  <div class="form-group">
                    <label class="form-label" for="registerPassword">Password</label>
                    <input class="form-control" id="registerPassword" type="password">
                  </div>
                  <div class="form-group text-center">
                    <button class="btn btn-block btn-outline-dark" type="submit"><i class="far fa-user mr-2"></i>Register                       </button>
                  </div>
                </form>
                <hr class="my-3 hr-text letter-spacing-2" data-content="OR CONNECT WITH">
                <div class="text-center">
                  <button class="btn btn btn-outline-primary letter-spacing-0" data-toggle="tooltip" title="Connect with Facebook"><i class="fa-fw fa-facebook-f fab"></i><span class="sr-only">Connect with Facebook</span></button>
                  <button class="btn btn btn-outline-muted letter-spacing-0" data-toggle="tooltip" title="Connect with Google"><i class="fa-fw fa-google fab"></i><span class="sr-only">Connect with Google                                      </span></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer-->
    <footer>
      <!-- Services block-->
      <div class="py-5 py-lg-6 bg-gray-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-6 py-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#delivery-time-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-sm mb-1">Free shipping &amp; return</h6>
                <p class="text-muted font-weight-light text-sm mb-0">Free Shipping over $300</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#money-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-sm mb-1">Money back guarantee</h6>
                <p class="text-muted font-weight-light text-sm mb-0">30 Days Money Back Guarantee</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#special-price-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-sm mb-1">Best prices</h6>
                <p class="text-muted font-weight-light text-sm mb-0">Always the best prices</p>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 py-4 service-column">
              <svg class="svg-icon service-icon">
                <use xlink:href="#customer-support-1"> </use>
              </svg>
              <div class="service-text">
                <h6 class="text-sm mb-1">020-800-456-747</h6>
                <p class="text-muted font-weight-light text-sm mb-0">24/7 Available Support</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main block - menus, subscribe form-->
      <div class="py-6 text-muted"> 
        <div class="container">
          <div class="row">
            <div class="col-lg-5 pr-lg-5 pr-xl-6 mb-5 mb-lg-0">
              <h6 class="text-dark letter-spacing-1 mb-4">Be in touch</h6>
              <p class="text-sm mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
              <form action="#" id="newsletter-form">
                <div class="input-group input-group-underlined mb-3">
                  <input class="form-control form-control-underlined" type="email" placeholder="Your Email Address" aria-label="Your Email Address">
                  <div class="input-group-append ml-0">
                    <button class="btn btn-underlined text-gray-700 py-0" type="button"> 
                      <svg class="svg-icon w-2rem h-2rem">
                        <use xlink:href="#envelope-1"> </use>
                      </svg>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-7">      
              <div class="row">                
                <div class="col-lg-4"><a class="d-lg-none block-toggler my-3" data-toggle="collapse" href="#footerMenu0" aria-expanded="false" aria-controls="footerMenu0">Shop<span class="block-toggler-icon"></span></a>
                  <!-- Footer collapsible menu-->
                  <div class="expand-lg collapse" id="footerMenu0">
                    <h6 class="text-dark letter-spacing-1 mb-4 d-none d-lg-block">Shop</h6>
                    <ul class="list-unstyled text-sm pt-2 pt-lg-0">
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">For Women</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">For Men</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Stores</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Our Blog</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Shop</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4"><a class="d-lg-none block-toggler my-3" data-toggle="collapse" href="#footerMenu1" aria-expanded="false" aria-controls="footerMenu1">Company<span class="block-toggler-icon"></span></a>
                  <!-- Footer collapsible menu-->
                  <div class="expand-lg collapse" id="footerMenu1">
                    <h6 class="text-dark letter-spacing-1 mb-4 d-none d-lg-block">Company</h6>
                    <ul class="list-unstyled text-sm pt-2 pt-lg-0">
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Login</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Register</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Wishlist</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Our Products</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Checkouts</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-4"><a class="d-lg-none block-toggler my-3" data-toggle="collapse" href="#footerMenu2" aria-expanded="false" aria-controls="footerMenu2">Your account<span class="block-toggler-icon"></span></a>
                  <!-- Footer collapsible menu-->
                  <div class="expand-lg collapse" id="footerMenu2">
                    <h6 class="text-dark letter-spacing-1 mb-4 d-none d-lg-block">Your account</h6>
                    <ul class="list-unstyled text-sm pt-2 pt-lg-0">
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Login</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Register</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Wishlist</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Our Products</a></li>
                      <li class="mb-2"> <a class="text-muted text-hover-dark link-animated" href="#">Checkouts</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Copyright section of the footer-->
      <div class="py-4 font-weight-light text-muted">
        <div class="container">
          <div class="row align-items-center text-sm text-gray-500">
            <div class="col-lg-4 text-center text-lg-left">
              <p class="mb-lg-0">&copy; 2020 Your company.  All rights reserved.</p>
            </div>
            <div class="col-lg-8">
              <ul class="list-inline mb-0 mt-2 mt-md-0 text-center text-lg-right">
                <li class="list-inline-item"> <a class="text-reset" href="#">Terms &amp; Conditions </a></li>
                <li class="list-inline-item"> <a class="text-reset" href="#">Privacy &amp; cookies </a></li>
                <li class="list-inline-item"> <a class="text-reset" href="#">Accessibility </a></li>
                <li class="list-inline-item"> <a class="text-reset" href="#">Customer Data Promise </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer end-->
    <!-- JavaScript files-->
    <!-- scripts-->
    <?php include("parts/body/scripts.php") ?>
  </body>
</html>