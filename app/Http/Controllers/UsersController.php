<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function getData(Request $req){
        $req -> validate([
            'First-name' => 'required',
            'E-mail' => 'required'
        ]);
        return $req->input();
        $user= new User();
        $user->username= $request['First-name'];
        $user->password= $request['password'];
        $user->save();
    }
}