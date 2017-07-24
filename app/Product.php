<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
    	'name', 'short_des', 'long_des', 'price', 'platform', 'characteristics', 'front_image', 'product_url', 'product_owner', 'product_creator'
    	];
}
