<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = ['url', 'alt', 'description'];

    public function product(){

    	return $this->belongsTo('\App\Product', 'product_id');
    }
}
