@extends('include.master')
@section('title','home')
@section('contant')
<!-- slider-start -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{URL::asset('admin/app-assets/images/h1_hero1.jpg.webp')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption carousel-caption-left d-none d-md-block">
            <h1 class="carousel-caption-heading bounceIn">First slide label</h1>
            <p class="carousel-caption-description text-center fadeInUp">Some representative placeholder content for the first slide.</p>
            <input type="button" class="fadeInUp" value="Shop Now">
          </div>
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('admin/app-assets/images/h1_hero2.jpg.webp')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption carousel-caption-right d-none d-md-block">
          <h1 class="carousel-caption-heading bounceIn">First slide label</h1>
          <p class="carousel-caption-description text-center fadeInUp">Some representative placeholder content for the first slide.</p>
          <input type="button" class="fadeInUp" value="Shop Now">
        </div>
    </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleFade" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleFade" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </button>
  </div>
<!-- slider-End -->
<!-- categories-start -->
<div class="categries mt-3">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mx-2 mx-md-0 my-2 my-o">
          <div class="categories-card">
            <img class="img-fluid w-100" src="{{URL::asset('admin/app-assets/images/items1.jpg.webp')}}" alt="">
            <p class="h2 text-center font-weight-bold text-white">Man's Fasion</p>
            <a href="#" class="categories-link">Shop Now</a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mx-2 mx-md-0 my-2 my-o">
          <div class="categories-card">
            <img class="img-fluid w-100" src="{{URL::asset('admin/app-assets/images/items2.jpg.webp')}}" alt="">
            <p class="h2 text-center font-weight-bold text-white">Man's Fasion</p>
            <a href="#" class="categories-link">Shop Now</a>
          </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mx-2 mx-md-0 my-2 my-o">
        <div class="categories-card">
          <img class="img-fluid w-100" src="{{URL::asset('admin/app-assets/images/items3.jpg.webp')}}" alt="">
          <p class="h2 text-center font-weight-bold text-white">Man's Fasion</p>
          <a href="#" class="categories-link">Shop Now</a>
        </div>
    </div>
      </div>

    </div>
  </div>
  <!-- categories-end -->
  <!-- tranding-this-week-start -->
  <div class="tranding-this-week-start mt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-6 col-12"><p class="Tranding-heading">Tranding This Week</p></div>
        <div class="col-md-4 col-12">
          <div class="category-tag">
            <ul class="d-flex list-unstyled">
              <li class="mx-md-2 mx-1"></a><a class="category-item active" href="#">Man</a></li>
              <li class="mx-md-2 mx-1"></a><a class="category-item" href="#">Woman</a></li>
              <li class="mx-md-2 mx-1"></a><a class="category-item" href="#">Baby</a></li>
              <li class="mx-md-2 mx-1"></a><a class="category-item" href="#">Fashion</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="owl-carousel">
        <div>
          <div class="tranding-card">
            <img src="{{URL::asset('admin/app-assets/images/carousel/01.jpg')}}" alt="">
            <div class="card-item-row">
              <div class="row">
                <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
              </div>
            </div>
            <div class="tranding-product-name mt-2 text-center">
              <a href="#">Cashmere Tank&Bag</a>
              <div class="tranding-price">
                <div class="sale price d-flex">
                  <span class="sale-price ml-auto">$98.00</span>
                  <span class="real-price mr-auto ml-1">$120.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="tranding-card">
            <img src="{{URL::asset('admin/app-assets/images/carousel/02.jpg')}}" alt="">
            <div class="card-item-row">
              <div class="row">
                <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
              </div>
            </div>
            <div class="tranding-product-name mt-2 text-center">
              <a href="#">Cashmere Tank&Bag</a>
              <div class="tranding-price">
                <div class="sale price d-flex">
                  <span class="sale-price ml-auto">$98.00</span>
                  <span class="real-price mr-auto ml-1">$120.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="tranding-card">
            <img src="{{URL::asset('admin/app-assets/images/carousel/03.jpg')}}" alt="">
            <div class="card-item-row">
              <div class="row">
                <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
              </div>
            </div>
            <div class="tranding-product-name mt-2 text-center">
              <a href="#">Cashmere Tank&Bag</a>
              <div class="tranding-price">
                <div class="sale price d-flex">
                  <span class="sale-price ml-auto">$98.00</span>
                  <span class="real-price mr-auto ml-1">$120.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="tranding-card">
            <img src="{{URL::asset('admin/app-assets/images/carousel/04.jpg')}}" alt="">
            <div class="card-item-row">
              <div class="row">
                <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
              </div>
            </div>
            <div class="tranding-product-name mt-2 text-center">
              <a href="#">Cashmere Tank&Bag</a>
              <div class="tranding-price">
                <div class="sale price d-flex">
                  <span class="sale-price ml-auto">$98.00</span>
                  <span class="real-price mr-auto ml-1">$120.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>            <div class="tranding-card">
          <img src="{{URL::asset('admin/app-assets/images/carousel/05.jpg')}}" alt="">
          <div class="card-item-row">
            <div class="row">
              <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
            </div>
          </div>
          <div class="tranding-product-name mt-2 text-center">
            <a href="#">Cashmere Tank&Bag</a>
            <div class="tranding-price">
              <div class="sale price d-flex">
                <span class="sale-price ml-auto">$98.00</span>
                <span class="real-price mr-auto ml-1">$120.00</span>
              </div>
            </div>
          </div>
        </div></div>
        <div>            <div class="tranding-card">
          <img src="{{URL::asset('admin/app-assets/images/carousel/06.jpg')}}" alt="">
          <div class="card-item-row">
            <div class="row">
              <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
            </div>
          </div>
          <div class="tranding-product-name mt-2 text-center">
            <a href="#">Cashmere Tank&Bag</a>
            <div class="tranding-price">
              <div class="sale price d-flex">
                <span class="sale-price ml-auto">$98.00</span>
                <span class="real-price mr-auto ml-1">$120.00</span>
              </div>
            </div>
          </div>
        </div></div>
        <div>            <div class="tranding-card">
          <img src="{{URL::asset('admin/app-assets/images/carousel/07.jpg')}}" alt="">
          <div class="card-item-row">
            <div class="row">
              <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
            </div>
          </div>
          <div class="tranding-product-name mt-2 text-center">
            <a href="#">Cashmere Tank&Bag</a>
            <div class="tranding-price">
              <div class="sale price d-flex">
                <span class="sale-price ml-auto">$98.00</span>
                <span class="real-price mr-auto ml-1">$120.00</span>
              </div>
            </div>
          </div>
        </div></div>
      </div>
    </div>
  </div>
  <!-- tranding-this-week-end -->
  <!-- custimer-testimonial-satt -->
  <div class="custimer-testimonial mt-5 py-5">
    <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active text-center">
            <p class="h1 my-3">Customer Testimonial</p>
            <p class="custimer-testimonial-description mx-md-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ab repudiandae recusandae totam, laborum mollitia quidem voluptatum hic praesentium porro voluptatem aliquam exercitationem deleniti, harum numquam non quibusdam ducimus veritatis.</p>
            <div class="founder my-3 mx-auto">
              <div class="row">
                <div class="col-3">
                  <img src="{{URL::asset('admin/app-assets/images/founder-img.png.webp')}}" alt="">
                </div>
                <div class="col-8 text-left">
                  <p class="mb-0">Petey Curiser</p>
                  <p class="font-weight-bold">Designer at Colorlab</p>
                </div>
              </div>

            </div>
        </div>

        <div class="carousel-item text-center">
          <p class="h1 my-3">Customer Testimonial</p>
          <p class="custimer-testimonial-description mx-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ab repudiandae recusandae totam, laborum mollitia quidem voluptatum hic praesentium porro voluptatem aliquam exercitationem deleniti, harum numquam non quibusdam ducimus veritatis.</p>
          <div class="founder my-3 mx-auto">
            <div class="row">
              <div class="col-3">
                <img src="{{URL::asset('admin/app-assets/images/founder-img.png.webp')}}" alt="">
              </div>
              <div class="col-8 text-left">
                <p class="mb-0">Petey Curiser</p>
                <p class="font-weight-bold">Designer at Colorlab</p>
              </div>
            </div>

          </div>
      </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="fa fa-angle-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="fa fa-angle-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </div>
  </div>
  <!-- custimer-testimonial-end -->
  <!-- you-may-like-start -->
  <div class="you-may-like mt-5">
    <div class="container">
      <p class="heading text-center">You May Like</p>

      <div class="owl-carousel mt-5">
        <div>
          <div class="tranding-card">
            <img src="{{URL::asset('admin/app-assets/images/carousel/01.jpg')}}" alt="">
            <div class="card-item-row">
              <div class="row">
                <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
              </div>
            </div>
            <div class="tranding-product-name mt-2 text-center">
              <a href="#">Cashmere Tank&Bag</a>
              <div class="tranding-price">
                <div class="sale price d-flex">
                  <span class="sale-price ml-auto">$98.00</span>
                  <span class="real-price mr-auto ml-1">$120.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="tranding-card">
            <img src="{{URL::asset('admin/app-assets/images/carousel/02.jpg')}}" alt="">
            <div class="card-item-row">
              <div class="row">
                <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
              </div>
            </div>
            <div class="tranding-product-name mt-2 text-center">
              <a href="#">Cashmere Tank&Bag</a>
              <div class="tranding-price">
                <div class="sale price d-flex">
                  <span class="sale-price ml-auto">$98.00</span>
                  <span class="real-price mr-auto ml-1">$120.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="tranding-card">
            <img src="{{URL::asset('admin/app-assets/images/carousel/03.jpg')}}" alt="">
            <div class="card-item-row">
              <div class="row">
                <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
              </div>
            </div>
            <div class="tranding-product-name mt-2 text-center">
              <a href="#">Cashmere Tank&Bag</a>
              <div class="tranding-price">
                <div class="sale price d-flex">
                  <span class="sale-price ml-auto">$98.00</span>
                  <span class="real-price mr-auto ml-1">$120.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="tranding-card">
            <img src="{{URL::asset('admin/app-assets/images/carousel/04.jpg')}}" alt="">
            <div class="card-item-row">
              <div class="row">
                <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
                <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
              </div>
            </div>
            <div class="tranding-product-name mt-2 text-center">
              <a href="#">Cashmere Tank&Bag</a>
              <div class="tranding-price">
                <div class="sale price d-flex">
                  <span class="sale-price ml-auto">$98.00</span>
                  <span class="real-price mr-auto ml-1">$120.00</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div><div class="tranding-card">
          <img src="{{URL::asset('admin/app-assets/images/carousel/05.jpg')}}" alt="">
          <div class="card-item-row">
            <div class="row">
              <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
            </div>
          </div>
          <div class="tranding-product-name mt-2 text-center">
            <a href="#">Cashmere Tank&Bag</a>
            <div class="tranding-price">
              <div class="sale price d-flex">
                <span class="sale-price ml-auto">$98.00</span>
                <span class="real-price mr-auto ml-1">$120.00</span>
              </div>
            </div>
          </div>
        </div></div>
        <div><div class="tranding-card">
          <img src="{{URL::asset('admin/app-assets/images/carousel/06.jpg')}}" alt="">
          <div class="card-item-row">
            <div class="row">
              <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
            </div>
          </div>
          <div class="tranding-product-name mt-2 text-center">
            <a href="#">Cashmere Tank&Bag</a>
            <div class="tranding-price">
              <div class="sale price d-flex">
                <span class="sale-price ml-auto">$98.00</span>
                <span class="real-price mr-auto ml-1">$120.00</span>
              </div>
            </div>
          </div>
        </div></div>
        <div><div class="tranding-card">
          <img src="{{URL::asset('admin/app-assets/images/carousel/07.jpg')}}" alt="">
          <div class="card-item-row">
            <div class="row">
              <div class="col-4"><a href="#"><i class="fas fa-shopping-cart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-heart"></i></a></div>
              <div class="col-4"><a href="#"><i class="fas fa-search-plus"></i></a></div>
            </div>
          </div>
          <div class="tranding-product-name mt-2 text-center">
            <a href="#">Cashmere Tank&Bag</a>
            <div class="tranding-price">
              <div class="sale price d-flex">
                <span class="sale-price ml-auto">$98.00</span>
                <span class="real-price mr-auto ml-1">$120.00</span>
              </div>
            </div>
          </div>
        </div></div>
      </div>
    </div>
  </div>
  <!-- you-may-like-end -->
  <!-- letest-news-start -->
  <div class="letest-news">
    <div class="container">
      <p class="heading text-center">Latest News</p>
      <div class="news-row mt-5">
        <div class="row">
          <div class="col-md-4">
            <div class="news-card">
              <a href="#">
                <img src="{{URL::asset('admin/app-assets/images/carousel/01.jpg')}}" class="w-100 img-fluid" alt="">
              </a>
              <p class="mt-1">Fashion Tips</p>
              <a class="h3 news-link" href="#">What Curling lrons Are The Best Once</a>
              <p class="my-2">Consectetur adipisicing elit. Laborum fuga incidunt laboriosam voluptas iure, delectus..</p>
              <a class="readmore" href="#">Read More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="news-card">
              <a href="#">
                <img src="{{URL::asset('admin/app-assets/images/carousel/08.jpg')}}" class="w-100 img-fluid" alt="">
              </a>
              <p class="mt-1">Fashion Tips</p>
              <a class="h3 news-link" href="#">What Curling lrons Are The Best Once</a>
              <p class="my-2">Consectetur adipisicing elit. Laborum fuga incidunt laboriosam voluptas iure, delectus..</p>
              <a class="readmore" href="#">Read More</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="news-card">
              <a href="#">
                <img src="{{URL::asset('admin/app-assets/images/carousel/05.jpg')}}" class="w-100 img-fluid" alt="">
              </a>
              <p class="mt-1">Fashion Tips</p>
              <a class="h3 news-link" href="#">What Curling lrons Are The Best Once</a>
              <p class="my-2">Consectetur adipisicing elit. Laborum fuga incidunt laboriosam voluptas iure, delectus..</p>
              <a class="readmore" href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- letest-news-end -->
  <!-- categories-area-start -->
  <div class="categories-area my-5">
    <div class="container">
      <div class="row">
        <div class="cards col-lg-3 col-md-6">
          <div class="categries-card text-center">
            <i class="fas fa-truck mb-2"></i>
            <p class="h4">Fast & Free Delivery</p>
            <p>Free delivery on all orders</p>
          </div>
        </div>
        <div class="cards col-lg-3 col-md-6">
          <div class="categries-card text-center">
            <i class="far fa-credit-card mb-2"></i>
            <p class="h4">Secure Payment</p>
            <p>Free delivery on all orders</p>
          </div>
        </div>
        <div class="cards col-lg-3 col-md-6">
          <div class="categries-card text-center">
            <i class="fas fa-money-check-alt mb-2"></i>
            <p class="h4">Money Back Guarantee</p>
            <p>Free delivery on all orders</p>
          </div>
        </div>
        <div class="cards col-lg-3 col-md-6">
          <div class="categries-card text-center">
            <i class="fas fa-globe-asia mb-2"></i>
            <p class="h4">Online Support</p>
            <p>Free delivery on all orders</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- categories-area-end -->
@endsection