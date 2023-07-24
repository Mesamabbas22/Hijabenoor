@extends('include.master')
@section('title','Cart|5')
@section('contant')
    <!-- cart-start -->
    <div class="cart py-5">
        <div class="container">
            <div class="row"><div class="col-md-9">
                <div class="table-responsive">
                    @if(session()->has('cart'))
                    <table class="table table-borderless mb-0" style="overflow-x: auto;">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Details</th>
                                <th>Price</th>
                                <th>No. Of Products</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{$value = null}}
                            @foreach (session()->get('cart') as $kay => $item)
                            <tr>
                                <td>
                                    <div class="product-img d-flex align-items-center">
                                        <img class="img-fluid" src='{{URL::asset($item["image"])}}' alt="Card image cap">
                                    </div>
                                </td>
                                <td>
                                    <div class="product-title">{{$item["product"]}}</div>
                                    <div class="product-color"><strong>Color : </strong> Pink</div>
                                    <div class="product-size"><strong>Size : </strong> Medium</div>
                                </td>
                                <td>
                                    <div class="product-price">{{$item["price"]}}</div>
                                </td>
                                <td>
                                    <div class="input-group" data-id="{{$kay}}">
                                        <input type="text" class="text-center count touchspin" name="quantity{{$kay}}" value="{{$item["quantity"]}}" />
                                    </div>
                                </td>
                                <td>
                                    <div class="total-price">{{$item["price"] * $item["quantity"]}}</div>
                                </td>
                                <td>
                                    <div class="product-action">
                                        <button type="button" data-id="{{$kay}}" class="btn-bg-remove text-white"><i class="fas fa-times-circle"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <?php $value += $item["price"] * $item["quantity"]?>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h1 class="text-center">Empty cart</h1>
                    @endif
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shodow-none border-light">
                    <div class="card-header border-bottom-light">
                        <h4 class="card-title">Price Details</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="price-detail">Price ( @if(session()->has('cart')) {{count(session()->get('cart'))}} @endif items) <span class="float-right">{{$value}}</span></div>
                            <div class="price-detail">Delivery Charges <span class="float-right">$100</span></div>
                            <div class="price-detail">TAX / VAT <span class="float-right">$0</span></div>
                            <hr>
                            <div class="price-detail">Payable Amount <span class="float-right">$2900</span></div>
                            <div class="total-savings">Your Total Savings on this order $550</div>
                        </div>
                    </div>
                </div>
                <div class="card border-light  shodow-none">
                    <div class="card-header  border-bottom-light">
                        <h4 class="card-title">Apply Coupon</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <label class="text-muted">Enter your coupon code if you have one!</label>
                            <form action="#">
                                <div class="form-body">
                                    <input type="text" class="form-control" placeholder="Enter Coupon Code Here">
                                </div>
                                <div class="form-actions border-0 pb-0 text-right">
                                    <button type="button" class="btn-red">Apply Code</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="checkout">
                    <button type="button" class="btn-brown mb-1">Continue Shopping</button>
                    <button type="button" class="btn-red">Checkout</button>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- cart-end -->
@endsection
