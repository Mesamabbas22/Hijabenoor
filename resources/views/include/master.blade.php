<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
        <!-- BEGIN: Vendor CSS-->
        {{-- <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/app-assets/vendors/css/vendors.min.css')}}"> --}}
        <!-- END: Vendor CSS-->
    
        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/app-assets/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/app-assets/css/bootstrap-extended.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/app-assets/css/colors.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/app-assets/css/components.css')}}">
        <!-- END: Theme CSS-->
    
        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/app-assets/css/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/app-assets/vendors/css/charts/morris.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/app-assets/fonts/simple-line-icons/style.css')}}">
        {{-- <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/line-awesome/css/line-awesome.min.css')}}"> --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('admin/css/core/colors/palette-gradient.css')}}">
        <link rel="stylesheet" href="{{URL::asset('admin/app-assets/css/owl.carousel.css')}}">
        <!-- END: Page CSS-->
    
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/front-end/css/style.css')}}">
</head>
<body>
    <!-- header-start -->
    <header>
        <div class="container">
            <div class="top-header d-sm-flex d-none  justify-content-between">
                <ul class="d-flex list-unstyled">
                    <li class="ml-2"><a class="text-dark" href="#">About Us</a></li>
                    <li class="ml-2"><a class="text-dark" href="#">Privacy</a></li>
                    <li class="ml-2"><a class="text-dark" href="#">FAQ</a></li>
                    <li class="ml-2"><a class="text-dark" href="#">Careers</a></li>
                </ul>
                <ul class="right-top-header d-flex list-unstyled">
                    <li class="ml-2">My Wishlist</li>
                    <li class="ml-2">Track Your Order</li>
                    <li class="ml-2">
                        <ul class="d-flex list-unstyled">
                            <li class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></li>
                            <li class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></li>
                            <li class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></li>
                            <li class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg></li>
                            <li class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/></svg></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- header-end -->
    <!-- navbar-start -->
    <nav class="navbar navbar-expand-lg navbar-light py-1" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="{{URL::asset('admin/app-assets/images/logo.png.webp')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link mx-1 active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1" href="#">Man</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1" href="#">Woman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1" href="#">Baby Collection</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1" href="#">Pages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-1" href="#">Contact</a>
              </li>
            </ul>
            <ul class="right-navbar d-flex">
                <button type="button"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg></button>
                <button type="button"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></button>
                <button type="button" class="cart-btn"><span class="highlight-card-number">10</span><i class="fas fa-cart-plus"></i></button>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar-End -->
    <!-- sale-row-start -->
    <div class="sale-row">
        <div class="container">
            <p class="text-center mb-0">Sale Up To 50% Biggest Discounts. Hurry! Limited Perriod Offer <a href="#">Shop Now</a></p>
        </div>
    </div>
    <!-- sale-row-End -->
        <!-- breadcrumbs-strat -->
        {{-- <div class="breadcrumbs text-center">
            <div class="container">
                <p class="category-heading">@yield('breadcrumbs-title')</p>
                <div class="link-list d-flex">
                    <ul class="list-unstyled d-flex mx-auto">
                        <li><a href="#" class="text-dark mr-1">Home</a></li> |
                        <li><a href="#" class="text-dark ml-1">@yield('breadcrumbs-anchor')</a></li>
                    </ul>
                </div>    
            </div>
        </div> --}}
        <!-- breadcrumbs-end -->
        @yield('contant')
        <!-- footer-start -->
        <footer>
            <div class="container">
              <div class="row row-first">
                <div class="col-md-3">
                  <p class="newslatter-heading h2">Subscribe Newsletter</p>
                  <p>Subscribe newsletter to get 5% on all products.</p>
                </div>
                <div class="col-md-6">
                  <form>
                  <div class="row">
                      <div class="col-md-8 pr-md-0">
                        <input type="text" name="newslatter" class="neslatter-input" placeholder="Enter YourEmail" id="">
                      </div>
                      <div class="col-md-4 pl-md-0">
                        <input type="submit" class="newslatter-sumbit" value="Subscribe">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-1"></div>
                <div class="col-md-2">
                  <div class="sochial-media">
                    <div class="row">
                      <div class="col-4"><i class="fab fa-facebook"></i></div>
                      <div class="col-4"><i class="fab fa-facebook"></i></div>
                      <div class="col-4"><i class="fab fa-facebook"></i></div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row row-second">
                <div class="col-md-3">
                  <div class="footer-logo"><img src="{{URL::asset('admin/app-assets/images/logo2_footer.png.webp')}}" class=" img-fluid" alt=""></div>
                </div>
                <div class="col-md-9">
                  <div class="footer-categories">
                    <div class="row">
                      <div class="col-md-3">
                        <p class="h4 text-white">Shop Man</p>
                        <ul class="list-unstyled">
                          <li><a href="#">Clothing Fashion</a></li>
                          <li><a href="#">Winter</a></li>
                          <li><a href="#">Summer</a></li>
                          <li><a href="#">Formal</a></li>
                          <li><a href="#">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <p class="h4 text-white">Shop Man</p>
                        <ul class="list-unstyled">
                          <li><a href="#">Clothing Fashion</a></li>
                          <li><a href="#">Winter</a></li>
                          <li><a href="#">Summer</a></li>
                          <li><a href="#">Formal</a></li>
                          <li><a href="#">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <p class="h4 text-white">Shop Man</p>
                        <ul class="list-unstyled">
                          <li><a href="#">Clothing Fashion</a></li>
                          <li><a href="#">Winter</a></li>
                          <li><a href="#">Summer</a></li>
                          <li><a href="#">Formal</a></li>
                          <li><a href="#">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-3">
                        <p class="h4 text-white">Shop Man</p>
                        <ul class="list-unstyled">
                          <li><a href="#">Clothing Fashion</a></li>
                          <li><a href="#">Winter</a></li>
                          <li><a href="#">Summer</a></li>
                          <li><a href="#">Formal</a></li>
                          <li><a href="#">Casual</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="footer-last-row text-center">
                <p>Copyright©2023 All rights reserved | This template is made with <i class="fas fa-heart"></i> By <a href="#">Mesam Abbas</a></p>
              </div>
            </div>
          </footer>
          <div class="back-top">
            <div class="arrow-one"></div>
            <div class="arrow-two"></div>
          </div>
          <!-- footer-end -->
        </body>
      </html>
          <!-- BEGIN: Vendor JS-->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
          <script src="{{URL::asset('admin/app-assets/vendors/js/vendors.min.js')}}"></script>
          <!-- BEGIN Vendor JS-->
      
          <!-- BEGIN: Page Vendor JS-->
          <script src="{{URL::asset('admin/app-assets/vendors/js/charts/chart.min.js')}}"></script>
          <script src="{{URL::asset('admin/app-assets/vendors/js/charts/raphael-min.js')}}"></script>
          <script src="{{URL::asset('admin/app-assets/vendors/js/charts/morris.min.js')}}"></script>
          <script src="{{URL::asset('admin/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}"></script>
          <script src="{{URL::asset('admin/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}"></script>
          <script src="{{URL::asset('admin/app-assets/data/jvector/visitor-data.js')}}"></script>
          <script src="{{URL::asset('admin/app-assets/js/scripts/owl.carousel.js')}}"></script>
          <!-- END: Page Vendor JS-->
      
          <!-- BEGIN: Theme JS-->
          <script src="{{URL::asset('admin/app-assets/js/core/app-menu.js')}}"></script>
          <script src="{{URL::asset('admin/app-assets/js/core/app.js')}}"></script>
          <!-- END: Theme JS-->
      
          <!-- BEGIN: Page JS-->
          <script src="{{URL::asset('admin/app-assets/js/scripts/pages/dashboard-sales.js')}}"></script>
          <script src="{{URL::asset('assets/front-end/js/scripts.js')}}"></script>
      