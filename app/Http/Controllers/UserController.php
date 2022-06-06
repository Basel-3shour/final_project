<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class UserController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');

    }


  public function redirect(){
      $user_type=Auth::user()->type;
      if($user_type=='0')
      {
        return view('admin.dashboard');
      }else{
        $products= DB::table('products')->get();
         $user=auth()->user();
         $count_incart=Cart::where('user_email',$user->email)->count();
        return view('store.homepage',compact('products','count_incart'));

      }
    }





    public function showUser(){
        $all_users = User::where('id', '>', 1)->get();
        $user_login=User::where('id',Auth::id())->first();
        return view('admin.users.show_users',compact('user_login','all_users'));
    }

    public function index(){
          if(Auth::id()){
            return redirect('home1');
        }else
    { $user_login=User::where('id',Auth::id())->first();
        return view('admin.dashboard',compact('user_login'));}
    }

    public function edit($id){

        $user=DB::table('users')->where('id',$id)->first();
        $user_login=User::where('id',Auth::id())->first();

       return view('admin.users.edit1',compact('user_login','user'));
           }

     public function update(Request $request,$id){
        $request->validate([
            'name' => 'required|max:10',
            'price' => 'required',
            'quantity' => 'nullable'
        ]);
            DB::table('users')
             ->where('id', $id)
             ->update([
                 'name' =>$request->name,
                 'email' =>$request->price,
                       ]);

             return redirect()->route('show.users');
        }

        public function destroy($id){
            DB::table('users')->where('id',$id)->delete();
            return redirect()->back();
               }

               public function showAdminProfile(){
                $admin_log=User::where('id',Auth::id())->first();
                return view('admin.profile',compact('admin_log'));
            }
            public function updateProfile(Request $request,$id){
                $request->validate([
                    'name' => 'required|max:10',
                    'email' => 'required',
                    'address' => 'nullable',
                    'phone_number' => 'nullable',
                    'city' => 'nullable',
                    'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'

                ]);
                $user=new user;
                if($request->image){
                    $imageName = time().'.'.$request->image->extension();
                    $request->image->move(public_path('images'), $imageName);
                  }
                    DB::table('users')
                     ->where('id', $id)
                     ->update([
                         'name' =>$request->name,
                         'email' =>$request->email,
                         'address' =>$request->address,
                         'phone_number' =>$request->phone_number,
                         'city' =>$request->city,
                         'image' =>$imageName,

                               ]);


                     return redirect()->route('show.admin.profile')->with('message','تم التعديل بنجاح');;
                }

}
