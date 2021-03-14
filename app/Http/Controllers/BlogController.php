<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class BlogController extends Controller
{
    public function index() {
        $posts = post::all();
        return view('index')->with(['posts' => $posts]);
    }
 }
