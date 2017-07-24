<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productController extends Controller
{
    public function showProduct($id){
    	//Get product from Database
        $p = Product::find($id);

    	//Return view with selected product, if it exists.
    	return view('others.product', ['product' => $p]);
    }

    public function showAll(){
        $p = Product::orderBy('created_at', 'desc')->get();

        return view('others.portafolio', ['products' => $p]);
    }

    public function saveProduct(Request $r){
    	//Get the data in separate variables
    	$name = $r->input('name');
    	$shortDes = $r->input('short_des');
    	$longDes = $r->input('long_des');
    	$price = $r->input('price');
    	$platform = $r->input('platform');
    	$charas = $r->input('charas');
    	$frontImage = $r->input('front_image');
    	$p_url = $r->input('product_url');
    	$p_owner = $r->input('product_owner');
    	$p_creator = $r->input('product_creator');
    	
    	//Create the Associative array
    	$product = new Product([
    		'name'=> $name,
    		'short_des' => $shortDes,
    		'long_des' => $longDes,
    		'price' => $price,
    		'platform' => $platform,
    		'characteristics' => $charas,
    		'front_image' => $frontImage,
    		'product_url' => $p_url,
    		'product_owner' => $p_owner,
    		'product_creator' => $p_creator 
    	]);

    	//Add prodcut to DataBase
    	$product->save();

        //Retreive all products
        $p = Product::orderBy('created_at', 'desc')->get();

    	return view('others.portafolio', ['products' => $p]);

    }
}
