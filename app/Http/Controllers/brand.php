<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brandModel;
use Carbon\Carbon;
use File;
use Illuminate\Support\Str;

class brand extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return brandModel::orderby('id','DESC')->get();
        return brandModel::orderBy('id','DESC')->with('country')->get();
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
        //
        $time = Carbon::now();
        $path = 'images/'.$time->year.'/'.$time->month;
        $Publicpath = public_path($path);
        if(!File::isDirectory($path)){
            File::makeDirectory($path,0777,true,true);
        }
        $image = $request->file('logo');
        $file = $time->toDateString() . Str::random(22) .'Logo' . '.' . $image->extension();
        $image->move($Publicpath,$file);

        brandModel::create([
            'BrandName'=> $request->brandname,
            'Description'=>$request->description,
            'CountryOfOrigin'=>$request->counteroforgin,
            'Logo'=>$path.'/'.$file,
        ]);

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
        return brandModel::where('id',$id)->get();
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
        try{
                $image = $request->file('logo');
                if(isset($image)){
                    $time = Carbon::now();
                    $oldFileDelete = public_path($request->oldImage);
                    if(File::exists($oldFileDelete)){
                        File::delete($oldFileDelete);
                    }
                    $path = 'images/'.$time->year.'/'.$time->month;
                    $Publicpath = public_path($path);
                    if(!File::isDirectory($path)){
                        File::makeDirectory($path,0777,true,true);
                    }
                    $imagepath = $path.'/'. $time->toDateString() . Str::random(22) .'Logo' . '.' . $image->extension();
                    $image->move($Publicpath,$imagepath);
                }else{
                    $imagepath = $request->oldImage; 
                }
            brandModel::where('id',$id)->update([
                'BrandName'=> $request->brandname,
                'Description'=>$request->description,
                'CountryOfOrigin'=>$request->counteroforgin,
                'Logo'=>$imagepath
            ]);
            return response()->json([
                'success' => true,
                'message' => 'Brand Updated',
                'error' => []
            ], 200);
        }catch(\Exception $exception){
            return response()->json([
                'success' => false,
                'message' => 'Brand Could Not Update',
                'error' => $exception->getMessage()
            ], 401);
        }
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
        try{
            brandModel::where('id',$id)->delete();
            return response()->json([
                'success' => true,
                'message' => 'Brand Deleted',
                'error' => []
            ], 200);
        }catch(\Exception $exception){
            return response()->json([
                'success' => false,
                'message' => 'Brand Could Not Deleted',
                'error' => $exception->getMessage()
            ], 401);
        }
    }
}
