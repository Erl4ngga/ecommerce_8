<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Compare;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart()
    {
        
        return view('frontend.pages.cart');
    }

    public function addToCart(Request $request){
        
        if (empty($request->slug)) {
            request()->session()->flash('error','Invalid Products');
            return back();
        }        
        $product = Product::where('slug', $request->slug)->first();     
        // return $product;
        if (empty($product)) {
            request()->session()->flash('error','Invalid Products');
            return back();
        }
        $already_cart = Cart::where('user_id', auth()->user()->id)->where('order_id',null)->where('product_id', $product->id)->first();
        $product->update([
            'stock' => $product->stock - 1, // quantity of product from order
        ]);
        // return $already_cart;
        if($already_cart) {
            // dd($already_cart);
            $already_cart->quantity = $already_cart->quantity + 1;
            $already_cart->amount = $product->price+ $already_cart->amount;
            // return $already_cart->quantity;
            if ($already_cart->product->stock < $already_cart->quantity || $already_cart->product->stock <= 0) return back()->with('error','Stock not sufficient!.');
            $already_cart->save();
            
        }else{
            
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->product_id = $product->id;
            $cart->price = ($product->price-($product->price*$product->discount)/100);
            $cart->quantity = 1;
            $cart->amount=$cart->price*$cart->quantity;
            if ($cart->product->stock < $cart->quantity || $cart->product->stock <= 0) return back()->with('error','Stock not sufficient!.');
            $cart->save();
            $wishlist=Wishlist::where('user_id',auth()->user()->id)->where('cart_id',null)->update(['cart_id'=>$cart->id]);
            $compare=Compare::where('user_id',auth()->user()->id)->where('cart_id',null)->update(['cart_id'=>$cart->id]);
        }
        request()->session()->flash('success','Produk berhasil ditambahkan ke cart');
        return back();       
    }  
    public function cartDelete(Request $request){
        $cart = Cart::find($request->id);
        $product = Product::where('id', $cart->product_id)->first();
        $product->update([
            'stock' => $product->stock + $cart->quantity, // quantity of product from order
        ]);
        if ($cart) {
            $cart->delete();
            request()->session()->flash('success','Cart berhasil dihapus');
            return back();  
        }
        request()->session()->flash('error','Error please try again');
        return back();       
    } 
    public function checkout()
    {
        $User=Auth()->user();
        return view('frontend.pages.checkout')->with('User',$User);
    }
    public function singleAddToCart(Request $request){
        $request->validate([
            'slug'      =>  'required',
            'quant'      =>  'required',
        ]);
        $product = Product::where('slug', $request->slug)->first();
        $product->update([
            'stock' => $product->stock - $request->quant[1], // quantity of product from order
        ]);
        if($product->stock < -1){
            return back()->with('error','Kehabisan stok, Anda dapat menambahkan produk lain.');
        }
        if ( ($request->quant[1] < 1) || empty($product) ) {
            request()->session()->flash('error','Invalid Products');
            return back();
        }    

        $already_cart = Cart::where('user_id', auth()->user()->id)->where('order_id',null)->where('product_id', $product->id)->first();

        // return $already_cart;

        if($already_cart) {
            $already_cart->quantity = $already_cart->quantity + $request->quant[1];
            // $already_cart->price = ($product->price * $request->quant[1]) + $already_cart->price ;
            $already_cart->amount = ($product->price * $request->quant[1])+ $already_cart->amount;
                                                // $already_cart->quantity
            if ($already_cart->product->stock <-1|| $already_cart->product->stock <= -1) return back()->with('error','Stok tidak mencukupi!.');

            $already_cart->save();
            
        }else{
            
            $cart = new Cart;
            $cart->user_id = auth()->user()->id;
            $cart->product_id = $product->id;
            $cart->price = ($product->price-($product->price*$product->discount)/100);
            $cart->quantity = $request->quant[1];
            $cart->amount=($cart->price * $request->quant[1]);
            if ($cart->product->stock < -1 || $cart->product->stock <= -1) return back()->with('error','Stock not sufficient!.');
            // return $cart;
            $cart->save();
        }
        request()->session()->flash('success','Produk berhasil ditambahkan ke cart');
        return back();       
    } 
    public function cartUpdate(Request $request){
         dd($request->all());
        if($request->quant){
            $error = array();
            $success = '';
            // return $request->quant;
            foreach ($request->quant as $k=>$quant) {
                // return $k;
                $id = $request->qty_id[$k];
                // return $id;
                $cart = Cart::find($id);
                $product = Product::where('id', $cart->product_id)->first();
                // return $product;
                if($quant > 0 && $cart) {


                    // return $quant;

                    if($cart->product->stock < $quant ){
                        request()->session()->flash('error','Stok Habis');
                        return back();
                    }
                    $cart->quantity = ($cart->product->stock > $quant) ? $quant  : $cart->product->stock;
                    // return $cart;
                    
                    if ($cart->product->stock <=0) continue;
                    $after_price=($cart->product->price-($cart->product->price*$cart->product->discount)/100);
                    $cart->amount = $after_price * $quant;
                    // return $cart->price;
                    $cart->save();
                    $success = 'Cart successfully updated!';
                }else{
                    $error[] = 'Cart Invalid!';
                }
            }
            return back()->with($error)->with('success', $success);
        }else{
            return back()->with('Cart Invalid!');
        }    
    }
}
