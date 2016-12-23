<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request){
        // dd($request->all());
    	if(Auth::attempt(['NRP_NIP' => $request->input('username'), 'password' => $request->input('password')])){
            // dd("masuk");
    		return redirect('admin');
    	}
        // dd("tidak smasuk");
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
