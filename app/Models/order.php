<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];
    public $timestamps = false;
    public function customer(){
        return $this->hasMany(customer::class,'id','CustomerID');
    }
    public function order_details(){
        return $this->hasMany(orderItem::class,'OrderID','id');
    }
    public function product(){
        return $this->hasManyThrough(orderItem::class,products::class,'OrderID','id','id','ProductID');
    }
}
