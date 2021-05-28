<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class adminController extends Controller
{
    //
    function loginValidation(Request  $request){
        $email = $request -> email;
        $admin = Admin::where('email',$email)->first();
       if($admin){
        if (Hash::check($request->password, $admin->password)) {
            Session::put('admin',$admin);
            return redirect('/admindashbord');
        }
        else{
            return back()->with('message', 'Password is Wrong');
        }
       }
       else{
           return back()->with('message', 'Email is wrong');
       }
    }

    function logout(){
        Session::forget('admin');
        return redirect('/adminlogin');
    }
}
