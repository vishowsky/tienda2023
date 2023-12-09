<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator, Hash, Auth;
use App\User;
class ConnectController extends Controller
{
    public function __construct(){
        $this->middleware('guest')->except(['getLogout']);
    }

    public function getLogin(){
        return view('connect.login');
    }
    public function getRegister(){
        return view('connect.register');
    }

    public function postLogin(Request $request){
        $rules =[
            'email'=> 'required|email',
            'password' => 'required|min:8'
        ];
        $messages= [
            'email.required'=>'Correo Electronico es requerido',
            'email.email'=>'Correo electronico no valido',
            'password.required'=>'Contraseña obligatoria',
            'password.min' =>'la contraseña tiene que tener 8 caracteres',
        ];
        $validator = Validator::make(request()->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with(
                'typealert','danger');
        else:
            if(Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')],true)):
            return redirect('/');
            else:
                return back()->with('message','Correo o contraseña erronea')->with(
                    'typealert','danger');
            endif;
        endif;
    }
    public function postRegister(Request $request){
        $rules = [
            'name'=> 'required',
            'lastname'=> 'required',
            'email' => 'required|email|unique:users,email',
            'password'=> 'required|min:8',
            'cpassword'=> 'required|same:password'

        ];
        $messages = [
            'name.required' => 'Nombre es obligatorio',
            'lastname.required'=>'Apellido es obligatorio',
            'email.required'=>'Correo Electronico es requerido',
            'email.email'=>'Correo electronico no valido',
            'email.unique'=>'Correo electronico ya existente',
            'password.required'=>'Contraseña obligatoria',
            'password.min' =>'la contraseña tiene que tener 8 caracteres',
            'cpassword.required' =>'Confirmacion de contraseñá obligatorio',
            'cpassword.same' =>'Contraseñas no coinciden'
        ];

        $validator = Validator::make(request()->all(), $rules, $messages);
        if($validator->fails()):
            return back()->withErrors($validator)->with('message','Se ha producido un error')->with(
                'typealert','danger');
        else:
            $user = new User;
            $user -> name = e($request->input('name'));
            $user -> lastname = e($request->input('lastname'));
            $user -> email = e($request->input('email'));
            $user -> password = Hash::make($request->input('password'));

            if($user -> save()):
                return redirect('/login')->with('message','Se ha registrado correctamente')->with(
                    'typealert','success');
            endif;
        endif;


        }
        public function getLogout(){
            Auth::logout();
            return redirect('/');
        }
        
    }