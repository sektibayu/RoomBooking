<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
        // dd($request->all());
    	if(Auth::attempt(['username' => $request->input('username'), 'password' => $request->input('password')])){
    		return redirect('admin');
    	}
    	return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function index(){
     //    $share = array();
    	// $share['users'] = User::get();
        // return view('pages.user.index');
        return view('pages.admin');
    }
}
