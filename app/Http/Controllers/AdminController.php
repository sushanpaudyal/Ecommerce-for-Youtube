<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => 1])){
                echo "Success You are Logged in"; die;
            } else {
                echo "Sorry Failed"; die;
            }
        }
        return view ('admin.adminlogin');
    }
}
