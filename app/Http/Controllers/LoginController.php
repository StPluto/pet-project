<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{
    public function index() : View {
        return view('login');
        
    }

    public function login(Request $request){
        /* dd($request->all()); */

        $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required', 'string']
        ]);
        if(Auth::attempt($request->only('name','password'))){
            return redirect()->route('/');
        }
        return back()->withInput()->withErrors(['name' => 'Invalid login or password, try again']);


}
}