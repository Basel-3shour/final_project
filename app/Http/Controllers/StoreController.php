<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Feedback;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function master(){
        if(Auth::id()){
            return redirect('home1');
        }else{

            $products= DB::table('products')->get();
            $categories=Category::get();

        return view('store.homepage',compact('products','categories'));
        }
    }
    public function contact_us(){
        if(Auth::id()){
            $user=auth()->user();
            $count_incart=Cart::where('user_email',$user->email)->count();
            return view('store.contact_us',compact('count_incart'));}
            else{
                return redirect('home1');

            }
        }
        public function about(){
            if(Auth::id()){
                $user=auth()->user();
                $count_incart=Cart::where('user_email',$user->email)->count();
                return view('store.about',compact('count_incart'));}
                else{
                    return redirect('home1');

                }
            }

            public function showcart(){

                if(Auth::id()){
                    $user=auth()->user();
                    $allCart=DB::table('carts')->where('user_email',$user->email)->get();
                    $count_incart=Cart::where('user_email',$user->email)->count();
                    return view('store.cart.showcart',compact('allCart','count_incart'));}
                    else{
                        return redirect('home1');

                    }
                }

                public function addFeedback(Request $request){
                    $product=new Feedback();
                    $product->name=$request->user;
                    $product->email=$request->mail;
                    $product->massege=$request->massege;
                              $product->save();
                              return redirect()->back()->with('message','تم اضافة المنتج  بنجاح');
                }


}
