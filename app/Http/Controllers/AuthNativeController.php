<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthNativeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function auth(Request $req){
        $name = $req->name;
        $username = $req->username;
        $pwd   = $req->password;
        if (Auth::attempt(['name' => $name, 'username' => $username, 'password' => $pwd])) {
            return "Hai ". Auth::user()->name;
        }else{
            return "Maaf name, username atau password yang anda masukan tidak sesuai.";
        }
    }
}
