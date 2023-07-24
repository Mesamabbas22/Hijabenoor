<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class customerReviewsModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tbl_review';
    public $timestamps = false;
    // Implement the required methods of Authenticatable if they are not already implemented.
    
}
