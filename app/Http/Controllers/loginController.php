<?php

namespace App\Http\Controllers;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function login(Request $request){
        
       $data=request()->validate([
        'correo'=>'required',
        'contra'=>'required'
       ],
       [
        'correo.required'=>'ingrese su correo',
        'contra.required'=>'ingrese su contraseña'
       ]);
      //if(Auth::attempt($data)){
         //$con='ok';
       //}
       $correo=$request->get('correo');
       $query=login::where('correo','=',$correo )->get();
       if($query->count()!=0){
           $ha=$query[0]->contra;
           $contra=$request->get('contra');
           if(isset($contra,$ha)){
               return view('bienvenido');
           }
           else{
               return back()->withErrors(['contra'=>'contraseña no valida'])->withInput([request('contra')]);
           }
       }
       else{
           return back()->withErrors(['correo'=>'correo no valido '])->withInput([request('correo')]);
       }
    }
}
