<?php

namespace App\Http\Controllers;

// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\user;
class authenticate extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login');
        //
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        //
        $user = $request['user-name'];
        $password = $request['user-password'];
        if(!Auth::attempt(['username' => $user,'password' => $password])){
            return response()->json([
                'success' => false,
                'message' => 'Invalid login details',
            ], 401);
        }
        $user = user::where(['username'=> $request['user-name']])->firstOrFail();
        // $user->session()->regenerate();

        session()->put('loggedUser',$user);
        return [
            'message' => 'Login Successful',
            'success' => true,
            // 'token' => $user->createToken()->plainTextToken,
            'token_type' => 'Bearer',
            'userData' => $user
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
