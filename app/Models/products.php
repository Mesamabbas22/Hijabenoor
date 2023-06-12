<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = ['product','category','price','ware_price','description','Brand','images1','images2','images3','images4','create_user','status','stock'];
    protected $table = 'tbl_product';
    public $timestamps = false;
}
