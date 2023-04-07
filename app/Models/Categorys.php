<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    use HasFactory;
    protected $fillable = ['name','create_user','status'];
    protected $table = 'tbl_category';
    public $timestamps = false;
}
