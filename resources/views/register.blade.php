@extends('include.master')
@section('title','Sign up')
@section('contant')
<div class="row mx-0">
    <div class="col-3"></div>
    <div class="col-6 my-5">
        <p class="h1 font-weight-bold text-center">Sign Up</p>
        <p class="text-center">Create your account to get full access</p>
        <form method="post" action="customerUserController">
            @csrf 
            <label class="h5 mt-2" for="fullname">Full Name</label>
            <input type="text" class="form-control rounded-0" name="fullname" placeholder="Enter Full Name">
            <label class="h5 mt-2" for="email">Email Address</label>
            <input type="email" class="form-control rounded-0" name="email" placeholder="Enter Emil Address">
            <label class="h5 mt-2" for="phone">Phone</label>
            <input type="number" name="phone" class="form-control rounded-0" class="phone" placeholder="Enter Emil Address">
            <div class="row">
                <div class="col-6">
                    <label class="mt-2" for="city">City</label>
                    <input type="text" name="city" class="form-control rounded-0" placeholder="Enter City">
                </div>
                <div class="col-6">
                    <label class="mt-2" for="state">State</label>
                    <input type="text" name="state" class="form-control rounded-0" placeholder="Enter State">
                </div>
                <div class="col-6">
                    <label class="mt-2" for="zip_code">Zip_code</label>
                    <input type="text" name="zip_code" class="form-control rounded-0" placeholder="Enter Zip Code">
                </div>
                <div class="col-6">
                    <label class="mt-2" for="country">Country</label>
                    <select name="country" class="form-control country select rounded-0" id="">
                        <option value="0" selected disabled>country</option>
                    </select>
                </div>
            </div>
            <label class="h5 mt-2" for="address">Address</label>
            <textarea name="address" class="form-control roundene-0" id="" cols="30" placeholder="Enter Address" rows="10"></textarea>
            <label class="h5 mt-2" for="Password">Password</label>
            <input type="password" name="password" class="form-control rounded-0" placeholder="Password">
            <label class="h5 mt-2" for="cpassword">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control rounded-0" placeholder="Confirm Password">
            @error('password')
            {{$message}}
            @enderror
            <input type="submit" class="btn-red mt-2 rounded-0" value="Sign UP">
            <p class="mt-2">Already have an account? <a href="#">Sign Up</a> here</p>

        </form>

    </div>
    <div class="col-3"></div>
</div>
@endsection
