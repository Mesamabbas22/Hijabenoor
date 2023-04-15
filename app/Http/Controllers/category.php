<?php

namespace App\Http\Controllers;

use App\Models\Categorys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class category extends Controller
{
    /**
     * Display a li sting of the resource.
     */
    public function index()
    {
        //
        try{
            $category = Categorys::orderby('id','DESC')->get();
            // return view('admin.category',['category'=>$category]);
            return response()->json($category,200);
        }catch(\Exception $e){
            return response()->json([],500);
        }
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
        try{
            $category = Categorys::get()->where('id',$id)->first();
            return response()->json($category,200);
            
        }catch(\Exception $exeption){
            return response()->json([],500);
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            Categorys::where('id',$id)->update([
                'name'=> $request['category'],
                'status'=>$request['Status'],
                'create_user'=> session()->get('loggedUser')->id
            ]);
            return response()->json([
                'message' => 'Category Save successfull',
                'success' => true,
            ]);  
        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Category Could Not Save',
                'error' => $e->getMessage()
            ], 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{
            Categorys::where('id',$id)->delete($id);
            return response()->json([
                'message' => 'Category Save successfull',
                'success' => true,
            ],200);
        }catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => 'Category Could Not Save',
                'error' => $e->getMessage()
            ], 401);
        }
    }
}
