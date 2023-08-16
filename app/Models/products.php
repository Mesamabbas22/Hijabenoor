<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class products extends Model
{
    use HasFactory;
    // protected $fillable = ['product','category','price','ware_price','description','Brand','images1','images2','images3','images4','create_user','status','stock'];
    protected $guarded = [];
    protected $table = 'tbl_product';
    public $timestamps = false;

    public function get_brand(){
        return $this->hasMany(brandModel::class,'id','Brand');
    }
    public function get_category(){
        return $this->hasMany(Categorys::class,'id','category');
    }
    public function review(){
        return $this->hasMany(customerReviewsModel::class,'product_id','id');
    }
    public function user(){
        return $this->hasManyThrough(customerusers::class,customerReviewsModel::class,'product_id','id','id','user_id');
    }

}
