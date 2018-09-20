<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        return view("user.index");
    }
    public function welcome(Request $request)
    {
        return view("user.welcome");
    }
    public function formlogin(Request $request)
    {
        return view("form-login");
    }
    public function create(Request $request)
    {
        return view("create");
    }
    public function update(Request $request)
    {
        return view("update");
    }
    
    
}