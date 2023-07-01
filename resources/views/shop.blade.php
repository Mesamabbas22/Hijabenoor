@extends('include.master')
@section('title','category')
@section('contant')
<!-- product-start -->
<div class="product my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 border border-light p-2">
                <select name="" id="" class="custom-select">
                    <option value="0" >Category</option>
                </select>
                <select name="" id="" class="custom-select">
                    <option value="0">Type</option>
                </select>
                <select name="" id="" class="custom-select">
                    <option value="0">Size</option>
                </select>
                <select name="" id="" class="custom-select">
                    <option value="0">Color</option>
                </select>
                <p class="font-weight-bold text-dark">Filter By Price</p>
                <div class="slider-range mt-3">
                    <div class="slider">
                        <div class="progress"></div>
                      </div>
                      <div class="range-input">
                        <input type="range" id="range-min" min="1" max="1000" value="200" class="range-min">
                        <input type="range" id="range-max" min="1" max="1000" value="500" class="range-max" >
                    </div>
                </div>
                <p class="text-center mt-2">Rs<span id="min"></span> To Rs<span id="max"></span></p>
                <p class="font-weight-bold text-dark">Filter by Genres</p>
                <div class="filter-by-genres">
                  <label class="History" for="Genres1">
                  <input type="checkbox" class="theme-checkbox" value="1" name="" id="Genres1">
                  <span class="checkmark text-center"></span>
                  <span class="label">History</span>
                </label>
                <br>
                <label class="History" for="Genres2">
                  <input type="checkbox" class="theme-checkbox" name="" value="2" id="Genres2">
                  <span class="checkmark text-center"></span>
                  <span class="label">History - Thriller</span>
                </label>
                <br>
                <label class="History" for="Genres3">
                  <input type="checkbox" class="theme-checkbox" name="" value="3" id="Genres3">
                  <span class="checkmark text-center"></span>
                  <span class="label">Love Stories</span>
                </label>
                <br>
                <label class="History" for="Genres4">
                  <input type="checkbox" class="theme-checkbox" name="" value="4" id="Genres4">
                  <span class="checkmark text-center"></span>
                  <span class="label">Science Fiction</span>
                </label>
                <br>
                <label class="History" for="Genres5">
                  <input type="checkbox" class="theme-checkbox" name="" value="5" id="Genres5">
                  <span class="checkmark text-center"></span>
                  <span class="label">Bio Graphy</span>
                </label>
                </div>
                <p class="font-weight-bold text-dark my-2">Filter by Brand</p>
                <div class="filter-by-brand">
                  <label class="History" for="Brand1">
                    <input type="checkbox" class="theme-checkbox" value="6" name="" id="Brand1">
                    <span class="checkmark text-center"></span>
                    <span class="label">Green Publications</span>
                  </label>
                  <br>
                  <label class="History" for="Brand2">
                    <input type="checkbox" class="theme-checkbox" name="" value="7" id="Brand2">
                    <span class="checkmark text-center"></span>
                    <span class="label">Anondo Publications</span>
                  </label>
                  <br>
                  <label class="History" for="Brand3">
                    <input type="checkbox" class="theme-checkbox" name="" value="8" id="Brand3">
                    <span class="checkmark text-center"></span>
                    <span class="label">Rinku Publications</span>
                  </label>
                  <br>
                  <label class="History" for="Brand4">
                    <input type="checkbox" class="theme-checkbox" name="" value="9" id="Brand4">
                    <span class="checkmark text-center"></span>
                    <span class="label">Sheba Publications</span>
                  </label>
                  <br>
                  <label class="History" for="Brand5">
                    <input type="checkbox" class="theme-checkbox" name="" value="" id="Brand5">
                    <span class="checkmark text-center"></span>
                    <span class="label">Red Publications</span>
                  </label>
                </div>
            </div>
            <div class="col-md-9">
              <div id="shop-product-rander" class="row">

              </div>
            </div>
        </div>
    </div>
</div>
<!-- product-end -->

@endsection