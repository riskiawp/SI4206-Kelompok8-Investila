<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;
use Auth;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                Session::put('login', true);
                Session::put('name', $user->name);
                Session::put('email', $request->email);
                Session::put('is_admin', true);
                return redirect('/');
            }else{
                return redirect('/login')->with('error', 'Gagal Login!');
            }
        }else{
            return redirect('/login')->with('error', 'Gagal Login!');
        }
    }
    public function register(Request $request){
        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password) ,
            'email' => $request->email,
            'is_admin'=> 0
        ]);

        return redirect('/login')->with('success', 'berhasil regist!');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login')->with('success', 'anda telah logout');

    }

    public function index(){
        $user = User::all();
        return view('admin/tabel-user', compact('user'));
    }

    public function delete_user($id){
        User::findOrFail($id)->delete();
        return redirect('/admin/tabel-user')->with('success', 'berhasil delete');
    }
}

