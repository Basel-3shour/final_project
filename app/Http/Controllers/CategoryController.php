<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //admin

    public function show_add_form(){
        return view('admin.categories.create');
    }


    public function addCategory(Request $request){
        $category=new category;
        $request->validate([
            'name' => 'required|max:20',
            'details' => 'required'
        ]);
        $category->name=$request->name;
        $category->description=$request->details;
       $category->save();
       return redirect()->back()->with('message','تم اضافة الصنف  بنجاح');
    }
    public function showAllCategories(){
        $all_categories = category::get();
        return view('admin.categories.show_categories',compact('all_categories'));
    }

    public function edit($id){

        $category=DB::table('categories')->where('id',$id)->first();
        //$user_login=User::where('id',Auth::id())->first();

       return view('admin.categories.edit',compact('category'));
           }

     public function update(Request $request,$id){
        $request->validate([
            'name' => 'required|max:20'

        ]);
            DB::table('categories')
             ->where('id', $id)
             ->update([
                 'name' =>$request->name,
                 'description' =>$request->description,
                       ]);

             return redirect()->route('show.categories');
        }

        public function destroy($id){
            DB::table('categories')->where('id',$id)->delete();
            return redirect()->back();
               }

    public function  showProductCatagory($id){
        $user=auth()->user();
        $count_incart=Cart::where('user_email',$user->email)->count();
        $allCart=DB::table('products')->where('categorie_id',$id)->get();
        $catagory=category::first();
        $products_catagory=Product::where('categorie_id',$id)->get();

                return view('store.categories.showproductforcatagory ',compact('count_incart','products_catagory'));
            }


}
