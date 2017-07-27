<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Images;
use Session;
use View;

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
        $type = $r->input('type');
        $image02 = $r->input('image_02');
        $image03 = $r->input('image_03');
    	
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
    		'product_creator' => $p_creator,
            'type' => $type
    	]);

    	//Add prodcut to DataBase
    	$product->save();

        //If optional images are not null or not empty, then added to the 'images' table related each one with the product just created
        if($image02 != null || $image02 != ''){
            $img1 = new Images([
                'url' => $image02,
                'alt' => $name,
                'description' => $shortDes
            ]);
            $product->images()->save($img1);
        }
        if($image03 != null || $image03 != ''){
            $img2 = new Images([
                'url' => $image03,
                'alt' => $name,
                'description' => $shortDes
            ]);
            $product->images()->save($img2);
        }

        //Retreive all products
        $p = Product::orderBy('created_at', 'desc')->get();

    	return redirect()->route('portafolio', ['products' => $p]);

    }

    public function deleteProduct($id){

        //Find product
        $product = Product::find($id);

        //Delete product
        $product->delete();

        //Retreive all products
        $p = Product::orderBy('created_at', 'desc')->get();

        return redirect()->route('portafolio', ['products' => $p]);
    }

    public function modifyProduct($id){
        $p = Product::find($id);
        return view('others.modify-product', ['product' => $p]);
    }

    public function saveEditedProduct(Request $request, $id){
        $p = Product::find($id);

        $p->name = $request->input('name');
        $p->short_des = $request->input('short_des');
        $p->long_des = $request->input('long_des');
        $p->price = $request->input('price');
        $p->platform = $request->input('platform');
        $p->characteristics = $request->input('charas');
        $p->front_image = $request->input('front_image');
        $p->product_url = $request->input('product_url');
        $p->product_owner = $request->input('product_owner');
        $p->product_creator = $request->input('product_creator');
        $p->type = $request->input('type');

        $p->save();

        $num = 2;
        $count =count($p->images()->get());
        while($count > 0){

            $img = Images::find($request->input('img_id_'. $num));
            $img->url = $request->input('img_url_' . $num);
            $img->save();

            $count = $count - 1;
        }
        
        return redirect()->route('showProduct', ['id' => $p->id])->with('edited', 'El producto fue modificado exitosamente.');
    }

    public function search_ByName(Request $request){
        //dd($request->input('search'));
        $term = $request->input('search');

        if($term === '' || $term === null){

            $products = Product::orderBy('created_at', 'desc')->get();
            return view('others.portafolio', ['products' => $products])->with('mySearch', 'Nada nuevo que mostrar.');
            
        }else{
            $products = Product::where('name', '=', $term)->get();

            $msg = count($products) . " elementos encontrados.";

            return view('others.portafolio', ['products' => $products])->with('mySearch', 'Resultados de búsqueda.');
        }

        

    }

    public function search(Request $request){ //Advanced Search !

        //Variables
        $byName = $request->input('byName');
        $minPrice = $request->input('minPrice');
        $maxPrice = $request->input('maxPrice');
        $platform = $request->input('platform');

        $query = Product::orderBy('created_at', 'desc');

        //By name
        if(($byName === null) || ($byName === '')){

        }else{
            $query->where('name', '=', $byName);
        }

        //By price
        if(($minPrice === null) || ($minPrice === '')){

        }else{
            $query->where('price', '>=', $minPrice);
        }
        if(($maxPrice === null) || ($maxPrice === '')){

        }else{
            $query->where('price', '<=', $maxPrice);
        }

        //By platform
        if(($platform === null) || ($platform === '') || ($platform === 'TODAS')){

        }else{
            $query->where('platform', '=', $platform);
        }

        $products = $query->get();


        return view('others.portafolio', ['products' => $products])->with('mySearch', 'ejemplo');

/*
        return response()->json([
                'byName' => $request->input('byName'),
                'minPrice' => $request->input('minPrice'),
                'maxPrice' => $request->input('maxPrice'),
                'platform' => $request->input('platform')
            ]);
*/
    }

}
