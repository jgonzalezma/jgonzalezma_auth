<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function update(Request $request, $id){

        $user=User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
    	return redirect('/profile');
    }
}
