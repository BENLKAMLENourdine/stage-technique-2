<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Particulier;

class PartController extends Controller
{
    function getSignup(){
        return view('part.signup');
    }
    function postSignup(Request $request){
        $this->validate($request,[
            'email' => 'required|email|unique:particuliers|unique:professionnels',
            'password' => 'required|min:4',
            'nom' => 'required',
        ]);

        $particulier = new Particulier([
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $particulier->save();
        return redirect()->route('home');
    }
    function getProfile(){
        return view('part.profile');
    }
    function getLogout(){
        Auth::guard('particuliers')->logout();
        return redirect()->route('home');
    }
}
