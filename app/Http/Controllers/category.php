<?php

namespace App\Http\Controllers;

use App\Models\Categorys;
use Illuminate\Http\Request;

class category extends Controller
{
    /**
     * Display a li sting of the resource.
     */
    public function index()
    {
        //
        return $category = Categorys::orderby('id','DESC')->get();
        // return view('admin.category',['category'=>$category]);
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
        try{
            Categorys::create([
                'name'=>$request['category'],
                'create_user'=> session()->get('loggedUser')->id,
                'status'=>$request['Status']
            ]);
            return [
                'message' => 'Category Save successfull',
                'success' => true,
            ];
        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Category Could Not Save',
                'error' => $e->getMessage()
            ], 401);
        }
        
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
