@extends('include.master')
@section('title','checkout')
@section('contant')
<div class="checkout my-5">
    <div class="container">
        <form action="">
            <div class="row">
                <div class="col-8">
                    <p class="h3">Billing Details</p>
                        <div class="row my-2">
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="First Name" id="fisrt-name">
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" placeholder="Last Name" id="last-name">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-6">
                                <input type="text" name="email" class="form-control" placeholder="Eamil Address" id="email">
                            </div>
                            <div class="col-6">
                                <input type="number" name="phone-number" class="form-control" placeholder="Phone Number" id="phone-number">
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
                                <input type="text" class="form-control" placeholder="Town/City" name="town-city" id="">
                            </div>
                            <div class="col-12 mb-2">
                                <input type="text" class="form-control" placeholder="Postcode/ZIP" name="post-code" id="">
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
                                <p>Your cart (4)</p>
                            </div>
                            <div class="card-content">
                                <ul class="list-group mb-3">
                                    <li class="list-group-item border-left-0 border-right-0 d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0">Fitbit Alta HR Special Edition x 1</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                        <span class="text-muted">$250</span>
                                    </li>
                                    <li class="list-group-item d-flex border-left-0 border-right-0 justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0">Mackbook pro 19'' x 1</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                        <span class="text-muted">$1150</span>
                                    </li>
                                    <li class="list-group-item d-flex border-left-0 border-right-0 justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0">VR Headset x 2</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                        <span class="text-muted">$700</span>
                                    </li>
                                    <li class="list-group-item d-flex border-left-0 border-right-0 justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0">Smart Watch with LED x 1</h6>
                                            <small class="text-muted">Brief description</small>
                                        </div>
                                        <span class="text-muted">$700</span>
                                    </li>
                                    <li class="list-group-item d-flex border-left-0 border-right-0 justify-content-between">
                                        <span class="product-name"><strong>Cart Subtotal</strong></span>
                                        <span class="product-price"><strong>$2800</strong></span>
                                    </li>
                                    <li class="list-group-item d-flex border-left-0 border-right-0 justify-content-between">
                                        <div class="text-success">
                                            <h6 class="my-0">Promo code</h6>
                                            <small>EXAMPLECODE</small>
                                        </div>
                                        <span class="text-success">-$200</span>
                                    </li>
                                    <li class="list-group-item d-flex border-left-0 border-right-0 justify-content-between">
                                        <span class="product-name">Shipping &amp; Handling</span>
                                        <span class="product-price">$100</span>
                                    </li>
                                    <li class="list-group-item d-flex  border-left-0 border-right-0 justify-content-between">
                                        <span class="product-name">TAX / VAT</span>
                                        <span class="product-price">$0</span>
                                    </li>
                                    <li class="list-group-item d-flex border-left-0 border-right-0 justify-content-between">
                                        <span class="product-name success">Order Total</span>
                                        <span class="product-price">$2700</span>
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
                                    <input type="radio" class="theme-radio" value="1" name="paymen" id="credit-card">
                                    <span class="radio text-center"></span>
                                    <span class="label">Credit card</span>
                                </label>
                                <br>
                                <label class="payment list-group-item border-top-0 pb-1  border-left-0 border-right-0" for="debit-card">
                                    <input type="radio" class="theme-radio" value="1" name="paymen" id="debit-card">
                                    <span class="radio text-center"></span>
                                    <span class="label">Debit Card</span>
                                </label>
                                <br>
                                <label class="payment list-group-item border-top-0 pb-1  border-left-0 border-right-0" for="COD">
                                    <input type="radio" class="theme-radio" value="1" name="paymen" id="COD">
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