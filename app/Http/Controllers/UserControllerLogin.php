<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class UserControllerLogin extends Controller

{

    public function loginRegister(){
        return view('admin.login_new');
    }



  public function register(Request $request){
    $this->validate($request,[
       'name'=>'required|string|max:255',
        'email'=>'required|string|email|unique:users,email',
        'password'=>'required|min:6|confirmed',
    ]);
    $input_data=$request->all();
    $input_data['password']=Hash::make($input_data['password']);
    User::create($input_data);

    return back()->with('message','تم التسجيل بنجاح');
}


    public function login(Request $request){

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/home1');
        }else{
            return back()->with('message','خطا في الاميل او كلمة السر');
        }
    }


}
