<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class country extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tbl_country_list';
    public $timestamps = false;
    // return $this->hasMany('App\Models\Comment');
    public function brand():HasMany
    {
        return $this->hasMany('App\Models\brandModel');
    }
}
