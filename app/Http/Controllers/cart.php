<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class cart extends Controller
{
    //
    public function index(){
        return view('cart');
    }
    public function addToCard(string $id){
        $product = products::with('get_brand')->with('get_category');
        $cart = $product->where('id',$id)->get();
        $items = session()->get('cart',[]);
        if(isset($items[$id])){
            $items[$id]['quantity']++;
        }else{
            $items[$id] = [
                'product'=>$cart[0]->product, 
                'price'=>$cart[0]->price, 
                'description'=>$cart[0]->description,
                'image'=>$cart[0]->images1, 
                'quantity'=> 1,
                'brand'=>$cart[0]->get_brand[0]->BrandName,

            ];
        }
        session()->put('cart',$items);
        return response()->json(session()->get('cart'));

    }
    public function updateTOcart(Request $request){
        if($request->Id && $request->value){
            $item = session()->get('cart');
            $item[$request->Id]['quantity'] = $request->value;
            session()->put('cart',$item);
        }
    }
    public function deleteCart(Request $request){
        if(isset($request->id)){
            $item = session()->get('cart');
            unset($item[$request->id]);
            session()->put('cart',$item);
            return session()->get('cart');
        }
    }
}
