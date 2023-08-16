@extends('include.master')
@section('title','Product|Name')
@section('contant')
<!-- product-details-start -->
<div class="product-details">
    <div class="container">
      <div class="product-detail">
        <div class="card">
            <div class="card-body">
                <div class="card-content">
                    <div class="row">
                        <div class="col-sm-4 col-12">
                            <div class="product-img d-flex align-items-center w-100">
                                <div class="badge badge-success round">
                                    -50%
                                </div>
                                <img alt="Card image cap" class="img-fluid mb-1" src="{{URL::asset($product[0]['images1'])}}">
                            </div>
                        </div>
                        <div class="col-sm-8 col-12">
                            <div class="wishlist">
                                <a data-placement="top" class="text-red" data-toggle="tooltip" href="#like" title="Add To Wishlist">
                                    <i class="ft-heart">
                                    </i>
                                    <span>Add To Wishlist</span>
                                </a>
                            </div>
                            <div class="title-area clearfix">
                                <h2 class="product-title float-left">
                                    {{$product[0]['product']}}
                                </h2>
                                <span class="total-rating float-right">
                                </span>
                            </div>
                            <div class="price-reviews clearfix">
                                <span class="price-box">
                                    <span class="price h4">
                                        ${{$product[0]['price']}}
                                    </span>
                                    <span class="old-price h4">
                                        $500
                                    </span>
                                </span>
                                <span class="float-right">
                                    (201 ratings)
                                </span>
                            </div>
                            <!-- Product Information -->
                            <div class="product-info">
                                <p>
                                    {{$product[0]['description']}}
                                </p>
                                {{-- <p>
                                    Cotton candy bonbon halvah. Caramels sesame snaps sweet roll tart gummi bears. Lollipop cake chocolate
                                    bar
                                    chupa chups jujubes fruitcake. Croissant powder dessert toffee icing carrot cake icing croissant.Sweet
                                    brownie
                                    halvah topping chocolate. Macaroon lemon drops sugar plum cupcake cheesecake bear claw. Macaroon jujubes
                                    oat
                                    cake chupa chups dessert jelly beans. Biscuit lemon drops cupcake powder.
                                </p>
                                <p>
                                    Croissant powder dessert toffee icing carrot cake icing croissant.Sweet brownie halvah topping
                                    chocolate.
                                    Macaroon lemon drops sugar plum cupcake cheesecake bear claw. Macaroon jujubes oat cake chupa chups
                                    dessert
                                    jelly beans.
                                </p> --}}
                            </div>
                            <!-- Product Information Ends-->
                            <!-- Color Options -->
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-options color-options mb-2">
                                        <ul>
                                            <li>
                                                <span class="option-title">
                                                    Color :
                                                </span>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="color-info black">
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="color-info amber">
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="color-info teal">
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="color-info active red">
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!-- Size Options -->
                                    <div class="product-options size-label size-filter mb-3">
                                        <ul>
                                            <li class="option-title">
                                                Size :
                                            </li>
                                            <li class="active">
                                              <label for="XL">
                                                <input type="radio" name="size" value="XL" id="XL">
                                                <div class="size-button">
                                                  XL
                                                </div>
                                              </label>
                                            </li>
                                            <li>
                                              <label for="L">
                                                <input type="radio" name="size" value="L" id="L">
                                                <div class="size-button">
                                                  L
                                                </div>
                                              </label>
                                            </li>
                                            <li>
                                              <label for="M">
                                                <input type="radio" name="size" value="M" id="M">
                                                <div class="size-button">
                                                  M
                                                </div>
                                              </label>
                                            </li>
                                            <li>
                                              <label for="S">
                                                <input type="radio" name="size" value="S" id="S">
                                                <div class="size-button">
                                                  S
                                                </div>
                                              </label>
                                            </li>
                                            <li>
                                              <label for="XS">
                                                <input type="radio" name="size" value="XS" id="XS">
                                                <div class="size-button">
                                                  XS
                                                </div>
                                              </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Color Options Ends-->
                            <!-- Size Options Ends-->
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-md-12">
                                    <div class="product-buttons pl-2">
                                        <button type="button" class="btn btn-danger btn-sm cart-btn" data-id="{{$product[0]['id']}}">
                                            <i class="la la-shopping-cart">
                                            </i>
                                            Add
                                            to Cart
                                        </button>
                                        <a class="btn btn-info btn-sm" href="ecommerce-checkout.html">
                                            <i class="la la-flash">
                                            </i>
                                            Buy Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <ul class="product-tabs nav nav-tabs nav-underline no-hover-bg">
                            <li class="nav-item">
                                <a aria-controls="desc" aria-expanded="true" class="nav-link active" data-toggle="tab" href="#desc" id="description">
                                    Description
                                </a>
                            </li>
                            <li class="nav-item">
                                <a aria-controls="ratings" aria-expanded="false" class="nav-link" data-toggle="tab" href="#ratings" id="review">
                                    Ratings
                                </a>
                            </li>
                        </ul>
                        <div class="product-content tab-content px-1 pt-1">
                            <div aria-expanded="true" aria-labelledby="description" class="tab-pane active" id="desc" role="tabpanel">
                                <h2 class="my-1">
                                    Fitbit Alta HR Special Edition
                                </h2>
                                <p>
                                    Tootsie roll gingerbread dragée gummies candy tart. Danish dessert sweet roll icing dessert bonbon.
                                    Brownie
                                    sesame snaps pastry chocolate biscuit wafer tart. Candy canes gummies wafer donut chupa chups pudding
                                    sweet
                                    donut. Lollipop halvah dessert chocolate cake danish cake. Oat cake topping sweet chocolate muffin cake
                                    pie
                                    halvah. Topping danish fruitcake apple pie carrot cake. Pudding cupcake cupcake cotton candy croissant.
                                    Pastry
                                    pastry jelly beans powder dragée toffee wafer cupcake pastry. Sweet lemon drops lollipop croissant
                                    bonbon.
                                    Soufflé biscuit dessert biscuit gummi bears sugar plum cake. Tootsie roll sugar plum bear claw chocolate
                                    bar
                                    gummies pudding powder danish caramels. Bear claw biscuit lemon drops croissant gummi bears. Lollipop
                                    chupa
                                    chups soufflé sweet roll soufflé biscuit bear claw wafer.
                                </p>
                                <p>
                                    Liquorice candy cotton candy tootsie roll chupa chups jelly-o pastry croissant marshmallow. Gingerbread
                                    tiramisu jelly. Cheesecake pudding marshmallow marshmallow candy donut donut chocolate cake gummies.
                                    Macaroon
                                    tootsie roll wafer ice cream. Icing cupcake pudding. Caramels topping cake caramels toffee sesame snaps
                                    pie
                                    halvah halvah. Sesame snaps toffee pudding macaroon soufflé sesame snaps. Topping lemon drops sweet roll
                                    lollipop chocolate bar soufflé cotton candy carrot cake. Lollipop dragée cheesecake toffee donut
                                    macaroon tart
                                    marshmallow. Croissant jelly-o chocolate jujubes soufflé. Halvah sweet pastry apple pie cake. Powder
                                    icing
                                    bonbon candy canes. Cake toffee marshmallow chocolate cake candy canes.
                                </p>
                                <p>
                                    Caramels macaroon lemon drops topping topping. Jelly muffin muffin sweet roll dragée gummi bears cake
                                    wafer
                                    apple pie. Pudding gingerbread oat cake. Jelly chocolate bar candy. Cotton candy macaroon jelly beans
                                    caramels
                                    sesame snaps chocolate caramels cheesecake icing. Oat cake chocolate cake halvah gingerbread. Icing
                                    candy
                                    marzipan. Powder dessert marzipan powder. Candy canes cake croissant jelly beans chupa chups chocolate
                                    cake.
                                    Jelly-o candy toffee caramels jelly-o marshmallow. Lollipop wafer caramels pudding. Icing gingerbread
                                    halvah
                                    chocolate bar caramels.
                                </p>
                                <p>
                                    Pudding tootsie roll lollipop tiramisu chocolate oat cake carrot cake sweet roll powder. Powder
                                    gingerbread
                                    pie biscuit candy pie cookie toffee icing. Muffin muffin chocolate. Tiramisu ice cream jelly beans
                                    jelly-o
                                    tootsie roll. Cotton candy jujubes cupcake dragée bear claw muffin candy cake marshmallow. Tart halvah
                                    marshmallow. Donut cake pie. Dragée dessert liquorice gummi bears. Jelly chupa chups sesame snaps bonbon
                                    chocolate bar biscuit tootsie roll candy chocolate bar. Lemon drops halvah pastry. Tart donut halvah
                                    pudding.
                                    Caramels gummies caramels candy.
                                </p>
                                <br>
                                <h4>
                                    Special Features :
                                </h4>
                                <ul>
                                    <li>
                                        Jelly-o candy toffee caramels jelly-o marshmallow.
                                    </li>
                                    <li>
                                        Cotton candy jujubes cupcake.
                                    </li>
                                    <li>
                                        Donut cake pie.
                                    </li>
                                    <li>
                                        Dessert liquorice gummi bears.
                                    </li>
                                    <li>
                                        Lemon drops halvah pastry.
                                    </li>
                                </ul>
                            </div>
                            <h2 class="my-1">
                                Leave Your Review
                            </h2>
                            <form class="form" id="ratting-form">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product[0]['id']}}">
                                <div class="form-body">
                                    <label>
                                        Ratings
                                    </label>
                                    <div class="mb-1" id="customer-review">
                                    </div>
                                    @if(!Auth::guard('customer')->check())
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">
                                                    Your Name
                                                </label>
                                                <input class="form-control" id="name" name="name" placeholder="Your Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="Email">
                                                    Your Email
                                                </label>
                                                <input class="form-control" id="email" name="email" placeholder="You Email" type="email">
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label for="review-desc">
                                            Your Review
                                        </label>
                                        <textarea class="form-control" id="review-desc" name="comment" placeholder="Your Review" rows="5"></textarea>
                                    </div>
                                    <button class="btn btn-info" type="submit">
                                        <i class="la la-check-square-o">
                                        </i>
                                        Submit Review
                                    </button>
                                </div>
                            </form>
                            <div aria-labelledby="review" class="tab-pane" id="ratings">
                                <h2 class="my-1">
                                    Customer Rating & Review
                                </h2>
                                <div id="reviews" class="media-list media-bordered">
                                    @foreach ($product[0]['review'] as $kay=>$item)
                                    <div class="media">
                                        <span class="media-left">
                                            <img alt="Generic placeholder image" class="media-object" src="{{URL::asset('admin/app-assets/images/portrait/small/avatar-s-1.png')}}" width="64" height="64" />
                                        </span>
                                        <div class="media-body">
                                            <div class='ratings-value' data-rating="{{$item['rating']}}"></div>
                                            <span class="ratings float-right">
                                            </span>
                                            <h5 class="media-heading mb-0 text-bold-600">
                                                {{($item['guest_name']=="")?$product[0]['user'][0]['name']:$item['guest_name']}}
                                            </h5>
                                            <div class="media-notation mb-1">
                                                2 Oct, 2018 at 8:39am
                                            </div>
                                            {{$item['comment']}}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- product-details-end -->

@endsection