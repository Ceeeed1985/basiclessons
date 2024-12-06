<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function home(){
        return view ('pages.home');
    }
    public function apropos(){
        return view ('pages.apropos');
    }
    public function services(){
        // $produits = DB::table("products")->paginate(1);
        $produits = Product::all();
        return view ('pages.services')->with('produits', $produits);
    }

    public function show($id){
        // $produit = DB::table('products')->where('id', $id)->first();
        $produit = Product::find($id);
        return view ('pages.show')->with('produit', $produit);
    }
}
