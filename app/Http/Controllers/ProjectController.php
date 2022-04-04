<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function products(){
        $products = DB::table('product')->get();
        $vegetable = DB::table('product')->where('category','vegetable')->get();
        $fruit = DB::table('product')->where('category','fruit')->get();
        $dairy = DB::table('product')->where('category','dairy')->get();
        $drinks = DB::table('product')->where('category','drinks')->get();

        return view('products',['products'=>$products,'vegetable'=>$vegetable,'fruit'=>$fruit,'dairy'=>$dairy,'drinks'=>$drinks]);
    }

    function single_product(Request $request,$id){
       $product_array = DB::table('product')->where('id',$id)->get();
       return view('single_product',['product_array'=>$product_array]);

    }
}
