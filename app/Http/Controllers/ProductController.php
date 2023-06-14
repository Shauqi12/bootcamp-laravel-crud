<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //menampilkan seluruh data
    public function index(){
        $products = Product::all();

        return response()->json([
            "message"=> "berhasil diambil",
            "status" => 200,
            "products" => $products
        ]);
    }

    //menampilkan berdasarkan id
    public function show($id){
        $products = Product::find($id);

        return response()->json([
            "message"=> "berhasil diambil",
            "status" => 200,
            "products" => $products
        ]);
    }

    //menambah product
    public function add(Request $request){
        $cek = $request->validate([
            'nama' => "required",
            'desc' => "required",
            'harga' => "required|numeric",
        ]);

        $products = Product::create($cek);

        return response()->json([
            "message"=> "berhasil menambah Product",
            "status" => 200,
            "products" => $products
        ]);
    }
    public function edit(Request $request, $id){
        $cek = $request->validate([
            'nama' => "required",
            'desc' => "required",
            'harga' => "required|numeric",
        ]);

        $products = Product::find($id);

        $products->nama = $cek['nama'];
        $products->desc = $cek['desc'];
        $products->harga = $cek['harga'];

        return response()->json([
            "message"=> "berhasil mengupdate",
            "status" => 200,
            "products" => $products
        ]);
    }

    public function delete($id){
        $products = Product::find($id);
        $products->delete();

        return response()->json([
            "message"=> "berhasil dihapus",
            "status" => 200,
        ]);
    }
}

    //mengedit data


