<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function showProduct($id){
    	//Get product from Database

    	//Return view with selected product, if it exists.
    	return view('others.product');
    }
}
