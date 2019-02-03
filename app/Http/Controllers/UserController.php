<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class UserController extends Controller
{
    public function update(Request $request, $id){

        $user=User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
    	return redirect('/profile');
    }
    public function isAdmin(){
    	return view('/admin');
    }
    public function listarUsuarios(){
    	$users = User::all();
		$users = User::orderBy('name', 'asc')->get();
    	return view('listaUsuarios')->with([
			'users'=>$users
    	]);
    }
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin');
    }
    public function createUser(Request $request){
    	$validatedData = $request->validate([
        	'name' => 'required|min:3|max:15',
        	'email' => 'required|email|max:40',
        	'password' => 'required|min:4',
        	'rol_id' => 'required',
    	],
    	[
      'name.required' => 'Nombre es un campo requerido',
      'name.min' => 'Nombre tiene que tener tres o mas caracteres',
      'name.max' => 'Nombre no puede tener mas de 15 caracteres',
      'email.required' => 'Email es un campo requerido',
      'email.email' => 'Introduce un email valido',
      'email.max' => 'El email no puede tener mas de 40 carácteres',
      'password.required' => 'Contraseña es un campo requerido',
      'password.min' => 'Introduce al menos 4 carácteres',
      'rol_id.required' => 'Tienes que introducir un id del rol',
    ]);

    	$user = new User();
    	$user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->password);
    	$user->rol_id = $request->get('rol');
    	$user->save();
        return redirect('/admin');
    }
}
