@extends('include.master')
@section('title','Login')
@section('contant')
<div class="row mx-0">
    <div class="col-3"></div>
    <div class="col-6 my-5">
        <p class="h1 font-weight-bold text-center">Login</p>
        <p class="text-center">Enter Login details to get access</p>
        <form>
            <label class="h5 mt-3" for="Username-Or-Email-Addres">Username Or Email Addres</label>
            <input type="text" class="form-control rounded-0" placeholder="Username/ Eamil address">
            <label class="h5 mt-2" for="Password">Password</label>
            <input type="password" class="form-control rounded-0" placeholder="Password">
            <label class="mt-2" for="keepmeloggedid">
                <input type="checkbox" name="keepmeloggedid" id="">
                Keep Me Logged In
            </label>
            <a href="#">Forgot Password</a>
            <input type="submit" class="btn-red mt-2 rounded-0" value="Login">
            <p class="mt-2">Don’t have an account? <a href="#">Sign Up</a> here</p>

        </form>

    </div>
    <div class="col-3"></div>
</div>
@endsection