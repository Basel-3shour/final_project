<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function edit($id){

        $cart=DB::table('carts')->where('id',$id)->first();

       return view('store.cart.editcart',compact('cart'));
           }

     public function update(Request $request,$id){
        $request->validate([
            'quantity' => 'required'

        ]);
            DB::table('carts')
             ->where('id', $id)
             ->update([
                 'quantity' =>$request->quantity,
                       ]);

             return redirect()->route('showcart');
        }

        public function destroy($id){
            DB::table('carts')->where('id',$id)->delete();
            return redirect()->back();
               }

               public function showAllMessages(){
                $all_messages = Feedback::get();
                return view('admin.massegs.show_massege',compact('all_messages'));
            }


            }


