<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function Xoa(){
        $deletedRows = User::where('id',5)->delete();
    }
    public function hienThiThongTinUser(){
       
        $users = User::all();
        return view('users',['users' => $users]);
    }
}
