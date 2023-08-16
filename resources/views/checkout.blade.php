@extends('include.master')
@section('title','checkout')
@section('contant')
<div class="checkout my-5">
    <div class="container">
        <form id="order-form">
            @csrf
            <div class="row">
                <div class="col-8">
                    <p class="h3">Billing Details</p>
                        <div class="row my-2">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="First Name" name="fisrt_name" id="fisrt-name">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Last Name" name="last_name" id="last-name">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-6">
                                <input type="text" name="email" class="form-control" placeholder="Eamil Address" id="email">
                            </div>
                            <div class="col-6">
                                <input type="number" name="phone_number" class="form-control" placeholder="Phone Number" id="phone-number">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-12">
                                <select name="country" class="form-control" id="country">
                                    <option value="country" selected>Country</option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-12 mb-2">
                                <input type="text" class="form-control" placeholder="Addree Line1" name="address1" id="">
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" class="form-control" placeholder="Addree Line2" name="address1" id="">
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" class="form-control" placeholder="Town/City" name="town_city" id="">
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" class="form-control" placeholder="Postcode/ZIP" name="post_code" id="">
                            </div>
                            <div class="col-12">
                                <label for="account">
                                    <input type="checkbox" name="account" class="custom-checkbox" id="account">
                                    Create an Account
                                </label>
                            </div>
                        </div>
                        <p class="h3">Shipping Details</p>
                        <div class="row">
                            <div class="col-12">
                                <label for="deffrent-address">
                                    <input type="checkbox" name="" id="deffrent-address">
                                    Ship to a different address?
                                </label>
                            </div>
                            <div class="col-12">
                                <textarea name="" class="form-control" placeholder="Order Notes" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card shadow-none p-2 border-light">
                            <div class="card-header p-0">
                                <p>Your cart (<span class="cart-label">{{(session()->has('cart'))?count( session()->get('cart')):0}}</span>)</p>
                            </div>
                            <div class="card-content">
                                <ul class="list-group mb-3">
                                    @if(session()->has('cart'))
                                    {{$price = null}}
                                    @foreach(session()->get('cart') as $key => $item)
                                    <li class="list-group-item border-left-0 border-right-0 d-flex justify-content-between lh-condensed">
                                        <div >
                                            <h6 class="my-0">{{$item['product']}}</h6>
                                            <small class="text-muted">{{Str::of($item['description'])->limit(20 )}}</small>
                                            <small><button type="button" data-id="{{$key}}" class="text-red remove-items btn-text">Remove Item</button></small>
                                        </div>
                                        <span class="text-muted">Rs {{$item['price']}}</span>
                                    </li>
                                        @php 
                                        $price += $item['price'];
                                        @endphp
                                    @endforeach
                                    @endif
                                    <li class="list-group-item d-flex border-left-0 border-right-0 justify-content-between">
                                        <span class="product-name"><strong>Cart Subtotal</strong></span>
                                        <span class="product-price"><strong>Rs {{$price}}</strong></span>
                                    </li>
                                    <li class="list-group-item d-flex border-left-0 border-right-0 justify-content-between">
                                        <div class="text-success">
                                            <h6 class="my-0">Promo code</h6>
                                            <small>EXAMPLECODE</small>
                                        </div>
                                        <span class="text-success">Not Avaliable</span>
                                    </li>
                                    <li class="list-group-item d-flex border-left-0 border-right-0 justify-content-between">
                                        <span class="product-name">Shipping &amp; Handling</span>
                                        <span class="product-price">Rs 200</span>
                                    </li>
                                    <li class="list-group-item d-flex  border-left-0 border-right-0 justify-content-between">
                                        <span class="product-name">TAX / VAT</span>
                                        <span class="product-price">$0</span>
                                    </li>
                                    <li class="list-group-item d-flex border-left-0 border-right-0 justify-content-between">
                                        <span class="product-name success">Order Total</span>
                                        <span class="product-price">Rs {{$price + 200}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <form class="card p-2 mb-2 border-light shadow-none">
                            <div class="card-header p-0">
                                <p >Apply Promo Code</p>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-red">Redeem</button>
                                </div>
                            </div>
                        </form>
                        <div class="card shadow-none border-light p-0">
                            <div class="card-header pb-0 px-2 pt-2 border-bottom-light">
                                <p class="mt-0">Paymen Processed</p>
                            </div>
                            <div class="payment-method p-2">
                                <label class="payment list-group-item border-top-0  pb-1 border-left-0 border-right-0" for="credit-card">
                                    <input type="radio" class="theme-radio" value="1" name="payment" id="credit-card">
                                    <span class="radio text-center"></span>
                                    <span class="label">Credit card</span>
                                </label>
                                <br>
                                <label class="payment list-group-item border-top-0 pb-1  border-left-0 border-right-0" for="debit-card">
                                    <input type="radio" class="theme-radio" value="2" name="payment" id="debit-card">
                                    <span class="radio text-center"></span>
                                    <span class="label">Debit Card</span>
                                </label>
                                <br>
                                <label class="payment list-group-item border-top-0 pb-1  border-left-0 border-right-0" for="COD">
                                    <input type="radio" class="theme-radio" value="3" name="payment" id="COD">
                                    <span class="radio text-center"></span>
                                    <span class="label">COD</span>
                                </label>
                            </div>
                        </div>
                        <div class="checkout-btn">
                            <input type="submit" class="btn-red" value="Continue To Checkout">
                        </div>
                    </div>
            </div>
        </form>
    </div>
</div>
@endsection