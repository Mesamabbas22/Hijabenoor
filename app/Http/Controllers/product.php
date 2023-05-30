<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use File;
use Illuminate\Support\Str;
use App\Models\products;

class product extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
            $product =  products::join('tbl_category','tbl_product.category','=','tbl_category.id')->select('tbl_product.id','product','name as category','price','ware_price','description','Brand','images1','images2','images3','images4','tbl_product.status');
            return $product->get();
        }catch(\Exception $exception){
            return response()->json([
                'success' => false,
                'error' => $exception->getMessage()
            ], 401);
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
        // $request->validate([
        //     'image'=> 'required|mimes:jpeg,png,jpg,JPG' 
        // ]);
        //
        try{
            $date = Carbon::now();
            $path = public_path('images/'.$date->year.'/'.$date->month);
            if(!File::isDirectory($path)){
                File::makeDirectory($path,0777,true,true);
            }
             $imageName =  $request->file('image');
             $files= [];
            foreach($imageName as $images){
                $random = Str::random(22);
                $image = $date->toDateString(). $random .'.'.$images->extension();
                //  $image = time().".".$images->extension();
                $images->move($path,$image);
                $files[] ='images/'.$date->year.'/'.$date->month.'/'. $image;
            }
            products::create([
                'product'=>$request->Product,
                'category'=>$request->category,
                'price'=>$request->Price,
                'ware_price'=>$request->WareHoues,
                'description'=>$request->Description,
                'Brand'=>$request->Product,
                'images1'=>$files[0],
                'images2'=>(!isset($files[1]))? null:$files[1],
                'images3'=>(!isset($files[2]))? null:$files[2],
                'images4'=>(!isset($files[3]))? null:$files[3],
                'create_user'=>session()->get('loggedUser')->id,
                'status'=>$request->Status
            ]);
            return [
                'message' => 'product Save successfull',
                'success' => true,
            ];
        }catch(\Exception $exeption){
            return response()->json([
                'success' => false,
                'message' => 'Category Could Not Save',
                'error' => $exeption->getMessage()
            ], 401);
        }
        // $request->image->move(public_path('images'), $imageName);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $product =  products::join('tbl_category','tbl_product.category','=','tbl_category.id')->select('tbl_product.id','product','name as category','price','ware_price','description','Brand','images1','images2','images3','images4','tbl_product.status')->where('tbl_product.id',$id)->get();
            return response()->json([
                 "id"=> $product[0]->id,
                 "product"=>$product[0]->product,
                 "Category"=>$product[0]->category,
                 "price"=>$product[0]->price,
                 "ware_price"=>$product[0]->ware_price,
                 "description"=>$product[0]->description,
                 "Brand"=>$product[0]->Brand,
                 "images"=>[
                    "images1"=>$product[0]->images1,
                    "images2"=>$product[0]->images2,
                    "images3"=>$product[0]->images3,
                    "images4"=>$product[0]->images4,
                 ],
                 "status"=>$product[0]->status

             ],200);
        }catch(\Exception $exception){
            return response()->json([
                'success' => false,
                'error' => $exception->getMessage()
            ], 401);
        }
    }   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try{
            $product =  products::join('tbl_category','tbl_product.category','=','tbl_category.id')->select('tbl_product.id','product','name as category','tbl_category.id as categoryId','price','ware_price','description','Brand','images1','images2','images3','images4','tbl_product.status')->where('tbl_product.id',$id)->get();
            return response()->json([
                 "id"=> $product[0]->id,
                 "product"=>$product[0]->product,
                 "Category"=>$product[0]->category,
                 "categoryId"=>$product[0]->categoryId,
                 "price"=>$product[0]->price,
                 "ware_price"=>$product[0]->ware_price,
                 "description"=>$product[0]->description,
                 "Brand"=>$product[0]->Brand,
                 "images"=>[
                    "images1"=>$product[0]->images1,
                    "images2"=>$product[0]->images2,
                    "images3"=>$product[0]->images3,
                    "images4"=>$product[0]->images4,
                 ],
                 "status"=>$product[0]->status

             ],200);
        }catch(\Exception $exception){
            return response()->json([
                'success' => false,
                'error' => $exception->getMessage()
            ], 401);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
