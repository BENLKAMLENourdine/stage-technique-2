<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Professionnel;

class ProController extends Controller
{
    function getSignup(){
        return view('pro.signup');
    }
    function postSignup(Request $request){
        $this->validate($request,[
            'email' => 'required|email|unique:particuliers|unique:professionnels',
            'password' => 'required|min:4',
            'nom' => 'required',
            'prenom' => 'required',
            'nom_de_la_societe' => 'required',
            'SIRET' => 'required',
            'ville' => 'required',
            'addresse' => 'required',
            'telephone' => 'required',
        ]);

        $professionnel = new Professionnel([
            'nom' => $request->input('nom'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'prenom' => $request->input('prenom'),
            'SIRET' => $request->input('SIRET'),
            'nom_de_la_societe' => $request->input('nom_de_la_societe'),
            'ville' => $request->input('ville'),
            'addresse' => $request->input('addresse'),
            'telephone' => $request->input('telephone')
        ]);
        $professionnel->save();
        return redirect()->route('home');
    }
    function getProfile(){
        return view('pro.profile');
    }
    function getLogout(){
        Auth::guard('professionnels')->logout();
        return redirect()->route('home');
    }
}
