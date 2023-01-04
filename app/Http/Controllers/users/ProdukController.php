<?php

namespace App\Http\Controllers\users;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function index(){
        
    }

    public function store(Request $request){
        
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('', compact('product'), ['title' => 'Edit-product']);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_produk' => 'required',
            'stok' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required'
        ]);

        $product = Product::find($id);
        $product->nama_produk = $request->nama_produk;
        $product->stok = $request->stok;
        $product->harga_beli = $request->harga_beli;
        $product->harga_jual = $request->harga_jual;
        $product->save();
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
    }
}
