<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\orderItem;
use App\Models\customer;
use Illuminate\Support\Facades\DB;
use  Carbon\Carbon;

class orders extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return order::get();
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
        DB::transaction(function() use ($request){
            $mytime = Carbon::now();
            $customer = customer::create([
                "FirstName" => $request->fisrt_name,
                "LastName" => $request->last_name,
                "Email" => $request->email,
                "Phone" => $request->phone_number,
                "Address" => $request->address1,
                "City" => $request->town_city,
                "PostalCode" => $request->post_code,
                "Country" => $request->country,
            ]);
             $order = $customer->order()->create([
                "CustomerID"=> $customer->id,
                "OrderDate" => $mytime->toDateTimeString(),
                "PaymentMethodID"=>$request->payment,
                "OrderStatus"=>'pandding',
                "TotalAmount"=>'20000'
            ]);
            if(session()->has('cart')){
                foreach (session()->get('cart') as $key => $value) {
                    $order->order_details()->create([
                        "OrderID"=> $order->id,
                        "ProductID"=>$key,
                        "Quantity"=> $value['quantity'],
                        "UnitPrice"=>$value['price'],
                        "TotalPrice"=> $value['price'] * $value['quantity']
                    ]);
                }
            }
            // return $lastInsertId = $customer->id();
            // $order->order_details()->create([]);
        });
        DB::commit();

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
