<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

//admin
    public function show_add_form(){
        $categories=Category::get();
        return view('admin.products.add',compact('categories'));
    }
    public function addProduct(Request $request){
        $product=new Product;
        $request->validate([
            'name' => 'required|max:20',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'

        ]);
        $product->name=$request->name;
        $product->details=$request->details;
        $product->categorie_id=$request->categorie_id;
        $product->price=$request->price;
        $product->quantity=$request->quantity;

        if($request->image){
                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('images'), $imageName);
                    $product->image=  $imageName;
                  }
                  $product->save();
                  return redirect()->back()->with('message','تم اضافة المنتج  بنجاح');
    }

//user ande  المتجر
    public function show_categories(){
        $categories=Category::get();
        if(Auth::id()){
        $user=auth()->user();
        $count_incart=Cart::where('user_email',$user->email)->count();
        return view('store.categories',compact('count_incart','categories'));}
        else{
            return redirect('home1');

        }

    }

    public function show_product($id){
        if(Auth::id()){
        $product=DB::table('products')->where('id',$id)->first();
        $user=auth()->user();
         $count_incart=Cart::where('user_email',$user->email)->count();
        return view('store.products.showproduct',compact('product','count_incart'));}
        else{
            return redirect('home1');
        }
    }
    public function addToCart(Request $request,$id){
          if(Auth::id()){
              $user=auth()->user();
              $product=Product::find($id);
        $cart=new cart;
        $cart->user_name=$user->name;
        $cart->user_email=$user->email;
        $cart->phone_no=$user->phone_number;
        $cart->address=$user->address;
        $cart->product_title=$product->name;
        $cart->price=$product->price;
        $cart->quantity=$request->quantity;
        $cart->save();

             return redirect()->back();

          }else  return redirect('login');
    }
    public function showAllProducts(){
        $all_products = Product::get();
        //$user_login=User::where('id',Auth::id())->first();
        return view('admin.products.show_product',compact('all_products'));
    }

    public function edit($id){

        $product=DB::table('products')->where('id',$id)->first();
        //$user_login=User::where('id',Auth::id())->first();

       return view('admin.products.edit',compact('product'));
           }

     public function update(Request $request,$id){
        $request->validate([
            'name' => 'required|max:20'

        ]);
            DB::table('products')
             ->where('id', $id)
             ->update([
                 'name' =>$request->name,
                 'price' =>$request->price,
                 'details' =>$request->detalies,
                       ]);

             return redirect()->route('show.products');
        }

        public function destroy($id){
            DB::table('products')->where('id',$id)->delete();
            return redirect()->back();
               }

}
