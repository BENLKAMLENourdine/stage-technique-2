<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use Auth;

class FrontController extends Controller
{
    public function getHomePage()
    {
        return view('home');
    }

    public function postSignin(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if(Auth::guard('particuliers')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])){
            return redirect()->route('part.profile');
        }

        if(Auth::guard('professionnels')->attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ])){
            return redirect()->route('pro.profile');
        }

        return redirect()->back();
    }
}
