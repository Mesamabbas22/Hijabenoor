<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customerusers;
use Hash;
use Auth;

class customerUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        "password"=>'confirmed'
         ]);
        $customerUser = customerusers::create([
            "name"=>$request->fullname,
            "email"=>$request->email,
            "password"=>Hash::make($request->password_confirmation),
            "address"=>$request->address,
            "phone"=>$request->phone,
            "city"=>$request->city,
            "state"=>$request->state,
            "zip_code"=>$request->zip_code,
            "country"=>$request->country,
            
         ]);
            // Auth::login($customerUser);
            session()->put(['user'=>$customerUser]);
        return redirect('/')->with('success', 'Welcome, ' . $customerUser->name . '! Registration successful.');

    }
    public function dologin(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required'
        ]);
        if(!Auth::guard('customer')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('login');
        }
        $customer = customerusers::where(['email'=>$request->email],['password'=>$request->password])->firstOrFail();
        session()->put(['user'=>$customer]);
        return redirect('/');
    }
    public function dologout(){
        // session()->forget('user');
        Auth::guard('customer')->logout();
        return redirect('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
