<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function create(){
        return view("pages.create");
    }

    public function saveproduct(Request $request){
        $this->validate($request, [
            'product_name'          => 'required',
            'product_price'         => 'required',
            'product_description'   => 'required',
        ]);

        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_description = $request->input('product_description');

        $product->save();

        // $data = array();
        // $data['product_name'] = $request->input('product_name');
        // $data['product_price'] = $request->input('product_price');
        // $data['product_description'] = $request->input('product_description');

        // DB::table('products')->insert($data);

        return redirect('/services')->with('status', 'Le produit ' . $request->input('product_name') . ' a bien été ajouté à votre liste de produits !');
    }

    public function deleteproduct($id){
        $product = Product::find($id);
        $product->delete();

        return redirect('/services')->with('status', 'Votre produit a été supprimé avec succès !');
    }

    public function editproduct($id){
        $product = Product::find($id);

        return view('pages.editproduct')->with("product", $product);
    }

    public function updateproduct(Request $request, $id){
        $this->validate($request, [
            'product_name'          => 'required',
            'product_price'         => 'required',
            'product_description'   => 'required',
        ]);

        $product = Product::find($id);

        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->product_description = $request->input('product_description');

        $product->update();

        return redirect('/services')->with('status', 'Les informations sur votre produit ' . $request->input('product_name') . ' ont bien été mises à jour dans votre liste de produits !');

    }
}
