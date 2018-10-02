<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\Category;

class PostController extends Controller
{
    //
    public function index(){
        return post::all();
    }
    public function category(){
        return category::all();
    }
}
