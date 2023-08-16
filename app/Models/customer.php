<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $table = "customers";
    protected $guarded = [];
    public $timestamps = false;
    public function order(){
        return $this->belongsTo(order::class,'CustomerID','id');
    }
    public function order_details(){
        return $this->hasManyThrough(orderItem::class,order::class);
    }
}
