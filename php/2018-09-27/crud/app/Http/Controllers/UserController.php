<?php

namespace App\Http\Controllers;
use App\user;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getUser(){
        $users = user::all();
        return view('users',['users' => $users]);
    }
    public function show($id){
        $user = user::find($id);
        return view('showProfile',['user'=>$user]);
    }
    public function edit($id){
        $user = user::find($id);
    }
}
