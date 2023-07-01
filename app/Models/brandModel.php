<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class brandModel extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'tbl-brand';
    public $timestamps = false;
    public function country(): HasMany
    {
        //$this->belongsTo('Model','foreign_key','owner_key');
        return $this->hasMany('App\Models\Country','id','CountryOfOrigin');
    }
}
