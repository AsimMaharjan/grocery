<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        return view('cart');
    }

    public function add_to_cart(Request $request){
        if($request->session()->has('cart')){
            $cart = $request->session()->get('cart');
            $products_array_ids = array_column($cart, 'id');
            $id = $request->input('id');
            if(!in_array($id,$products_array_ids)){
                $name = $request->input('name');
                $image = $request->input('image');
                $price = $request->input('price');
                $quantity = $request->input('quantity');
                $sale_price = $request->input('sale_price');

                if($sale_price != null){
                    $price_to_charge = $sale_price;
                }else{
                    $price_to_charge = $price;
                }
                $product_array = array(
                    'id'=>$id,
                    'name'=>$name,
                    'image'=>$image,
                    'price'=>$price,
                    'quantity'=>$quantity,
                );
                $cart[$id] = $product_array;
                $request->session()->put('cart',$cart);

            }else{
                echo "<script>alert('product is already in cart');</script>";
            }

            $this->calculateTotalCart($request);

            return view('cart');
    
        }else{
            $cart = array();
            $id = $request->input('id');
            $name=$request->input('name');
            $image=$request->input('image');
            $price=$request->input('price');
            $quantity=$request->input('quantity');
            $sale_price = $request->input('sale_price');

            if($sale_price != null){
                $price_to_charge = $sale_price;
            }else{
                $price_to_charge = $price;
            }
            $product_array = array(
                'id'=>$id,
                'name'=>$name,
                'image'=>$image,
                'price'=>$price,
                'quantity'=>$quantity,
            );
            $cart[$id] = $product_array;
            $request->session()->put('cart',$cart);


            $this->calculateTotalCart($request);

            return view('cart');


        }
       
    }


    function calculateTotalCart(Request $request){
        $cart = $request->session()->get('cart');
        $total_price = 0;
        $total_quantity = 0;

        foreach($cart as $id => $product){
            $product = $cart[$id];
            $price = $product['price'];
            $quantity = $product['quantity'];
            $total_price = $total_price +($price*$quantity);
            $total_quantity = $total_quantity + $quantity;
        }
        $request->session()->put('total',$total_price);
        $request->session()->put('quantity',$total_quantity);
    }

    function remove_from_cart(Request $request){
       
        if($request->session()->has('cart')){
            $id = $request->input('id');
            $cart = $request->session()->get('cart');

            unset($cart[$id]);
            $request->session()->put('cart',$cart);

            $this->calculateTotalCart($request);
        }
        return view('cart');
    }


    function edit_product_quantity(Request $request){

        if($request->session()->has('cart')){
            $product_id = $request->input('id');
            $product_quantity = $request->input('quantity');

            if($product_quantity == 0){
                $this->remove_from_cart($request);
                return view('cart');
            }

            $cart = $request->session()->get('cart');

            if(array_key_exists($product_id, $cart)){
                $cart[$product_id]['quantity'] = $product_quantity;

                $request->session()->put('cart',$cart);

                $this->calculateTotalCart($request);
            }

        }
        return view('cart');
    }
}
