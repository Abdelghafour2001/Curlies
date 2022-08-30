<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    function Register(){
        return view('register');
    }
    function submit_register(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
                $userCheck=User::where(['name'=>$request->name])->count();
                if($userCheck==0){
                $user=new User;
                $user->name=$request->first_name.$request->last_name;
                $user->email=$request->email;
                $user->password=$request->password;
                $user->save();
                $adminData=User::where(['name'=>$request->name])->first();
                session(['adminData'=>$adminData]);
                return redirect('/journal');
               }else{
                return redirect('/register')->with('error','Invalid username/password !!');
               }
            }
}
