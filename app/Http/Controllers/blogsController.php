<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class blogsController extends Controller
{
    public function index(){
        return view('pages.blogs.index');
    }
}
